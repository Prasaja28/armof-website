<nav class="navbar navbar-expand-lg pt-0 pt-md-5 shadow-none">
  <div class="container">
    <a class="navbar-brand me-0 me-md-5" href="/">
      <img src="{{ asset('assets/images/logo.png') }}" alt="armof" class="logo-header" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 bg-color-primary text-center" style="--bs-scroll-height: 100px">
        <li class="nav-item px-0 px-md-4">
          <a class="nav-link text-white text-uppercase fw-bold lh-lg" aria-current="page" href="/koleksi">koleksi</a>
        </li>
        <li class="nav-item px-0 px-md-4">
          <a class="nav-link text-white text-uppercase fw-bold lh-1" href="/antropometri">pengukuran<br />antropometri</a>
        </li>
        <li class="nav-item px-0 px-md-4">
          <a class="nav-link text-white text-uppercase fw-bold lh-lg" href="/tentang-kami">tentang</a>
        </li>
      </ul>
      @if(Auth::guard('customer')->check())
      <div class="dropdown">
        <a class="bg-color-secondary text-decoration-none fw-bold px-5 py-2 text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          {{Auth::guard('customer')->user()->name}}
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="{{url('logout-cus')}}">Log Out</a></li>
        </ul>
      </div>
      @else
      <button class="bg-color-secondary text-uppercase text-decoration-none fw-bold px-5 py-2 text-white masuk" data-bs-toggle="modal" data-bs-target="#staticBackdrop">masuk</button>
      @endif
    </div>
  </div>
</nav>
@include('users.pages.loginCustomer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>