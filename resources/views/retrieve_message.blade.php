@extends('layouts.head')
@section('content')
<div class="container">
  <div class="row">
    <div class="row align-items-center" style="height: 100vh;">
      <div  class="col offset-sm-3 offset-lg-3 col-sm-6 col-lg-6">
        <div class="border rounded p-4">
          <h2>Message List</h2>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Recipient Name</th>
                <th scope="col">View Message</th>
              </tr>
            </thead>
            <tbody>
              @if(count($messages) > 0)
            @foreach($messages as $message)
              <tr>
                <th scope="row">1</th>
                <td>{{$message->recipient}}</td>
                <td> 
                  <a href="{{ url('message/' . $message->identifier) }}">Retrieve Message</a>
                </td>
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="3" class="text-center"><h5>There is no message to retrieve.</h5></td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endSection
