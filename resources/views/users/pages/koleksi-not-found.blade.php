@extends('users.components.master')
@section('title', 'Koleksi')
@section('content')
<div class="container">
    <div class="row">
        <div class="col col-12">
            <div class="card mt-4 py-3 px-3 px-md-3">
                <div class="card-body">
                    <div class="row mt-2 mb-3 mb-md-6">
                        <div class="col-12 col-md-4">
                            <form class="form" method="get" action="{{ route('search') }}">
                                <div class="d-flex justify-content-center align-items-center form-search">
                                    <input name="q" id="search" type="text" class="form-control form-control-lg rounded-pill" placeholder="cari produk..." />
                                    <a href="" onClick="javascript:this.form.submit();">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div name="furnitures" class="row">
                        <h1 class="font-weight-bold">Sorry,</h1>
                        <h4>Koleksi tidak Ditemukan</h4>
                    </div>
                    <div class="row text-center">
                        <div class="col-12">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="armof" height="50" class="mt-5 mb-3" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection