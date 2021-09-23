<a href="{{ URL::to('siswa')}}">Liat All</a> | <a href="{{ URL::to('siswa/create')}}">Tambah Siswa</a> <hr>
<h1>Semua Siswa</h1>

@if(Session::get('message')) {{Session::get('message')}} @endif

<table border="1">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>NO HP</td>
        <td>Action</td>
    </tr>
    @foreach ($siswa as $key => $value)
    <tr>
        <td>{{$value->id_siswa}}</td>
        <td>{{$value->nama}}</td>
        <td>{{$value->alamat}}</td>
        <td>{{$value->no_hp}}</td>
        <td>
            <a href="{{ URL::to('siswa/' .$value->id_siswa)}}">Detail</a> |
            <a href="{{ URL::to('siswa/' .$value->id_siswa. '/edit')}}"> Edit </a> |
        
            <!--Hapus-->
            <form class='delet-form' action="{{ URL::to('siswa/' .$value->id_siswa)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="" name="button">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table> <hr>