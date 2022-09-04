@extends('users.components.master')
@section('title', 'Antropometri')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card mt-4 py-3 px-3 px-md-3">
        <div class="card-body">
          <div class="row">
            <h1 class="fw-bolder text-uppercase text-color-primary mb-3">pengukuran antropometri</h1>
          </div>
          <div class="antropometri">
            <img src="assets/images/antro-1.png" />
            <img src="assets/images/antro-2.png" />
            <img src="assets/images/antro-3.png" />
          </div>
        </div>
        <div class="row text-center">
          <div class="col-12">
            <img src="assets/images/logo.PNG" alt="armof" height="50" class="mt-5 mb-3" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection