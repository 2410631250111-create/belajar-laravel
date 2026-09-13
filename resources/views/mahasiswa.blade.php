<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

    <h1>Data Mahasiswa</h1>

    @foreach ($mahasiswa as $mhs)
        <p>Nama: {{ $mhs->nama }}</p>
        <p>NIM: {{ $mhs->nim }}</p>
        <p>Jurusan: {{ $mhs->jurusan }}</p>
        <hr>
    @endforeach

</body>
</html>