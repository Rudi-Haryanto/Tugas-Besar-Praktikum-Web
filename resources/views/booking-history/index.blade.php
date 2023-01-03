@extends('dashboard.layouts.main')

@section('container')
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Bookings History</h1>
  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati inventore deserunt incidunt ad dolorem similique deleniti placeat accusamus temporibus aliquid!</p>

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
                          </td>
                        </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection