@extends('dashboard.layouts.main')

@section('container')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Show Data Booking</h1>

  <div class="row">
    <div class="col-md-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Booking</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 rounded" style="width: 35rem;"
                    src="{{ asset('storage/' . $booking->room->image) }}" alt="...">
            </div>
            <ul class="list-group list-group-light">
              <li class="list-group-item">Check In : {{ $booking->check_in }}</li>
              <li class="list-group-item">Check Out : {{ $booking->check_out }}</li>
              <li class="list-group-item">Room Name : {{ $booking->room->name }}</li>
              <li class="list-group-item">Room Price : Rp. {{ $booking->room->price }}</li>
              <li class="list-group-item">{{ $booking->room->description }}</li>
            </ul>
        </div>
    </div>
    </div>
  </div>
@endsection