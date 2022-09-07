<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    @foreach (json_decode($foto) as $picture)
    <img src="{{ public_path('img/koleksi-img/'.$picture) }}" style="height:150;object-position: center;margin-top:10%;" />
    @endforeach
    <h1>{{ $nama_koleksi }}</h1>
    <p>{{ $deskripsi }}</p>
</body>

</html>