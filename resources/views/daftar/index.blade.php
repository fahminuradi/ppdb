@extends('layouts.app')
@section('content')
<div class="container">
    <div class="table">
        <table class="table table-bordered table-hover">
        <tr>
            <th width="5%">No</th>
            <th width="20%">Nama</th>
            <th width="20%">Jenis Kelamin</th>
            <th width="20%">Asal sekolah</th>
            <th width="20%">Jurusan</th>
            <th width="20%">Tanggal Daftar</th>
        </tr>
        @foreach($daftars as $daftar)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$daftar->nama}}</td>
            <td>{{$daftar->jk}}</td>
            <td>{{$daftar->sekolah}}</td>
            <td>{{$daftar->jurusan}}</td>
            <td>{{$daftar->created_at}}</td>
        </tr>
        @endforeach
        </table>
    </div>
</div>
@endsection