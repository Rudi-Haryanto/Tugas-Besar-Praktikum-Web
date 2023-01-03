@extends('dashboard.layouts.main')

@section('container')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Add Data Rooms</h1>

  <div class="row">
    <div class="col-md-6">
      <form class="" action="/bookings/{{ $booking->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="">Check In</label>
            <input type="date" name="check_in" class="form-control @error('check_in') is-invalid @enderror" placeholder="Enter Check In..." value="{{ old('check_in', $booking->check_in) }}">
            @error('check_in')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Check Out</label>
            <input type="date" name="check_out" class="form-control @error('check_out') is-invalid @enderror" placeholder="Enter Check In..." value="{{ old('check_out', $booking->check_out) }}">
            @error('check_out')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Rooms</label>
            <select class="form-control" name="room_id">
              @foreach ($rooms as $room)
                @if (old('room_id', $booking->room_id) == $room->id)
                <option value="{{ $room->id }}" selected>{{ $room->name }}</option>
                @else
                <option value="{{ $room->id }}">{{ $room->name }}</option>
                @endif
              @endforeach
            </select>
        </div>

        <button type="submit" class="mb-4 btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
              <i class="fas fa-check"></i>
          </span>
          <span class="text">Update</span>
        </button>
      </form>
    </div>
  </div>
@endsection