<a href="{{ URL::to('siswa')}}">Liat All</a> | <a href="{{ URL::to('siswa/create')}}">Tambah Siswa</a> <hr>
<h1>Menampilkan {{$siswa->nama}}</h1>
<div>
    <h2>{{ $siswa->nama}}</h2>
    <p>
        <strong>Alamat: </strong> {{$siswa->alamat}}<br>
        <strong>NO HP: </strong> {{$siswa->no_hp}}<br>
    </p>
</div> 