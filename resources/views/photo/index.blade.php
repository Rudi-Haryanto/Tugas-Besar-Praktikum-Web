@extends('dashboard.layouts.main')

@section('container')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Rooms Photos</h1>

  <div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="{{ URL::to('/') }}/images/img_4.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="{{ URL::to('/') }}/images/img_1.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="{{ URL::to('/') }}/images/img_5.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>

    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="{{ URL::to('/') }}/images/img_2.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="{{ URL::to('/') }}/images/img_3.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="{{ URL::to('/') }}/images/img_5.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="{{ URL::to('/') }}/images/slider-2.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="{{ URL::to('/') }}/images/slider-7.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="{{ URL::to('/') }}/images/slider-4.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>
  </div>
  <!-- Gallery -->
@endsection