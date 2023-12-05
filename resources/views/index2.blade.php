@extends('master')

@section('title', 'Data Harddisk')

@section('konten')
@php
    function translateChar($char){
        if($char==1){
            return 'Ya';
        }
        else if($char==0){
            return 'Tidak';
        }
        else{
            return 'Tidak Valid';
        }
    }
@endphp
<h2>Muhammad Hasan Kamal</h2>
	<h3>Data Harddisk</h3>

	<a href="/harddisk/tambah" class="btn btn-primary" style="margin-top: 5px"> + Tambah Harddisk Baru</a>
    <p>Cari Data Harddisk Dari Nama :</p>
	<form action="/harddisk/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Harddisk .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" style="margin-top: 20px" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Ketersediaan</th>
            <th></th>
		</tr>
		@foreach($harddisk as $p)
		<tr>
            <td>{{ $p->kodeharddisk }}</td>
			<td>{{ $p->merkharddisk }}</td>
			<td>{{ $p->stockharddisk }}</td>
			<td>{{ translateChar($p->tersedia) }}</td>
			<td>
                <a href="/harddisk/view/{{ $p->kodeharddisk }}" class="btn btn-success">View</a>
				|
				<a href="/harddisk/edit/{{ $p->kodeharddisk }}" class="btn btn-warning">Edit</a>
				|
				<a href="/harddisk/hapus/{{ $p->kodeharddisk }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $harddisk->links() }}
@endsection
