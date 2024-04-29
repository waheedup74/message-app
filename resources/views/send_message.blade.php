@extends('layouts.head')
@section('content')
  <section class="container">
    <div class="row align-items-center" style="height: 100vh;">
      <div class="col offset-sm-3 offset-lg-4 col-sm-6 col-lg-4">
        <div class="border rounded p-4">
          <h2>Send a Message</h2>
          @if(session('success'))
              <p style="color: green;">{{ session('success') }}</p>
          @endif

          <form action="{{ url('/messages') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label" for="text">Message:</label>
                <input type="text" id="message" class="form-control" name="message" required>
              </div>

              <div class="mb-3">
              <label class="form-label" for="recipient">Recipient Name:</label>
              <input type="text" id="recipient" class="form-control" name="recipient" required >
              </div>

              <div class="mb-3">
                <label class="form-label" for="expires_at">Expires after(in minutes)</label>
                <select class="form-select" id="expires_at" name="expires_at" required>
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="30">30</option>
                  <option value="45">45</option>
                  <option value="60">60</option>
                </select>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endSection
