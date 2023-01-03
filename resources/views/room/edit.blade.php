@extends('dashboard.layouts.main')

@section('container')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Edit Data Rooms</h1>

  <div class="row">
    <div class="col-md-6">
      <form class="" action="/rooms/{{ $room->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="">Name Room</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name Room..." value="{{ old('name', $room->name) }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
        
        <div class="form-group">
          <label for="">Price Room</label>
            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter Price Room..." value="{{ old('price', $room->price) }}">
            @error('price')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="form-group">
          <label for="">Description Room</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror"></textarea>
            @error('description')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="form-group">
          <label for="">Image Room</label>
            <input type="hidden" name="oldImage" value="{{ $room->image }}">
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
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