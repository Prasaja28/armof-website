<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
            margin-bottom: 5%;
        }
    </style>

    <title>No Login !!!</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                <div class="login-brand">
                    <img src="img/ARMOF LOGO.PNG" alt="logo" class="center">
                </div>

                <div class="card card-primary">
                    <div class="card-header text-center">
                        <div class="card-body">
                            <div class="gm-err-icon"><img src="http://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" alt="" draggable="false" style="user-select: none;"></div>
                            <br>
                            <div class="gm-err-title">
                                <h3>Authentication! ARMOF.</h3>
                            </div>
                            <div class="gm-err-title">
                                Halo! jangan lupa login dan sign-up dulu ya.
                            </div>
                            <div class="gm-err-message">
                                Klik button dibawah ini!!
                            </div>
                            <br>
                            <div class="gm-err-message">
                                <a class="btn btn-outline-success" href="{{ url('/login') }}">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simple-footer">
                    Copyright &copy; ARMOF 2022
                </div>
            </div>
        </div>
    </div>
</body>

</html>