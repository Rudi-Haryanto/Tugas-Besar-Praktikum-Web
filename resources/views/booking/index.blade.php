@extends('dashboard.layouts.main')

@section('container')
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Bookings</h1>
  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati inventore deserunt incidunt ad dolorem similique deleniti placeat accusamus temporibus aliquid!</p>

  <a href="{{ route('bookings.create') }}" class="mb-4 btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Booking Now</span>
  </a>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>User Name</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Name Room</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>User Name</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Name Room</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      @foreach ($bookings as $booking)
                        @if (Auth::id() == $booking->user->id)
                        <tr>
                          <td>{{ $booking->user->name }}</td>
                          <td>{{ $booking->check_in }}</td>
                          <td>{{ $booking->check_out }}</td>
                          <td>{{ $booking->room->name }}</td>
                          <td>Rp. {{ $booking->room->price }}</td>
                          <td>
                            <a href="/bookings/{{ $booking->id }}" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-eye"></i>
                          </a>
                            <a href="/bookings/{{ $booking->id }}/edit" class="btn btn-success btn-circle btn-sm">
                              <i class="fas fa-pen"></i>
                          </a>
                          <form action="/bookings/{{ $booking->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                          </form>
                          </td>
                        </tr>
                        @endif
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection