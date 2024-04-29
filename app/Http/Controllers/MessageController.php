<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::get();
        return view('retrieve_message',['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $encryptedMessage = Crypt::encryptString($request->input('message'));
        $expireAt = intval($request->expires_at);
        
        $message = new Message();
        $message->content = $encryptedMessage;
        $message->recipient = $request->input('recipient');
        $message->expiry_timestamp = now()->addMinutes($expireAt);
        $message->identifier = Str::uuid(); 
        $message->is_read = 0;
        $message->save();
        
        return redirect()->back()->with('success', 'Message sent successfully.');
    }

    public function showByIdentifier($identifier)
    {
        $message = Message::where('identifier', $identifier)->first();
        if (!$message) {
            return view('show_message')->with('message', 'Message not found.');
        }

        if ($message->is_read || now()->greaterThan($message->expiry_timestamp)) {
            $message->delete();
            return view('show_message')->with('message', 'Message not found or it has been read already.');
        }

        $message->is_read = true;
        $message->save();

        try {
            $decryptedText = Crypt::decryptString($message->content);
        } catch (\Exception $e) {
            return view('show_message')->with('message', 'Failed to decrypt message.');
        }
    
        return view('show_message')->with('message', $decryptedText);
    }
    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
