<?php use Illuminate\Support\Facades\Form; ?>
<a href="{{ URL::to('siswa') }}">Liat All</a> | <a href="{{ URL::to('siswa/create')}}">Tambah Siswa</a> <hr>
<h1>Edit Siswa</h1>
<form method="POST" action="/siswa/{{$siswa->id_siswa}}">
@method('PUT')
@csrf
<pre>
    Nama    <input type="text" name="nama" value="{{$siswa->nama}}"><br>
    Alamat  <input type="text" name="alamat" value="{{$siswa->alamat}}"><br>
    No.HP   <input type="text" name="no_hp" value="{{$siswa->no_hp}}"><br>
<input type="submit" value="submit"><br>
</pre> 