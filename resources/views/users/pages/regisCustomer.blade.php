<!DOCTYPE html>
<html>
@extends('users.components.master')
@section('title', 'Register User ARMOF')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
        background-color: white;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {
        background-color: #ff6600;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }

    .error {
        color: red
    }
</style>

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" id="handleAjax" action="{{url('do-register')}}" name="postform">
        @csrf
        <div class="container">
            <h1>Register Akun</h1>
            <p>Silahkan Diisi Untuk Membuat Akun di ARMOF.</p>
            <hr>

            <label for="nama"><b>Nama</b></label>
            <input type="text" value="{{old('name')}}" placeholder="Masukkan Nama" name="name" id="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" value="{{old('email')}}" placeholder="Masukkan Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Masukkan Password" name="password" id="password" required>

            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Sudah Punya Akun? <a href="/">Kembali Ke Beranda</a>.</p>
        </div>
    </form>

</body>
@endsection