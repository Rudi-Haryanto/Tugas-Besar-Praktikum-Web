@extends('dashboard.layouts.main')

@section('container')
  <h1 class="h3 mb-4 text-gray-800">Welcome {{ auth()->user()->name }}</h1>
@endsection