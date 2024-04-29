@extends('layouts.head')
@section('content')

<div class="container py-5">
  <div class="card w-100" >
    <div class="card-body">
      <h5 class="card-title">Message Content</h5>
      @if(isset($message))
      <p class="card-text ps-md-4" >
        {{ $message }}
      </p>
      @else
        <p class="card-text ps-4">Message not found or it has been read already.</p>
      @endif
      
    </div>
  </div>
</div>
@endSection
