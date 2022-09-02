@extends('users.components.master')
@section('title', 'Detail')
@section('content')
<div class="container">
    <div class="row">
      <div class="col col-12">
        <div class="card mt-4 py-3 px-3 px-md-5">
          <div class="card-body">
            <div class="row mt-2 justify-content-center">
              <div class="col-4 d-flex justify-content-center align-items-center">
                <img src="assets/images/kursi.png" height="250" />
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6">
                <h1 class="fs-4 fw-bold text-uppercase text-color-primary mt-5 mt-md-0">leo kursi kerja</h1>
                <h1 class="fs-4 fw-bold text-uppercase text-grayish mb-4">detail produk & spesifikasi</h1>
                <p class="fs-6">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis voluptates dolores distinctio repudiandae adipisci consectetur maiores? Modi molestiae odit id quis officiis iure facilis error quo, deserunt, accusamus
                  dolores vel delectus aliquid, adipisci quia! Distinctio, dolorum corporis? Quis cupiditate harum modi. Aliquam eligendi id ex ipsum, labore alias veritatis, debitis at ad possimus quibusdam voluptate ratione voluptatibus
                  praesentium qui itaque ab impedit eos rem nulla. Sit explicabo praesentium hic vel.
                </p>
              </div>
              <div class="col-12 col-md-6 mt-3 mt-md-0">
                <div class="d-flex justify-content-end">
                  <a href="detail.html" class="text-uppercase bg-color-primary py-2 px-4 text-decoration-none text-white fw-semibold">view ar</a>
                  <a href="detail.html" class="text-uppercase bg-color-primary py-2 px-4 text-decoration-none text-white fw-semibold ms-3">download</a>
                </div>
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
  </div>
@endsection