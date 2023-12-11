@extends('master')

@section('title', 'Data Harddisk')

@section('konten')
	<h3>Data Kategori</h3>

	<a href="/cc" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/cc/store" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}
        <div class = "form-group">
            <label for = "Nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-10">
                <input type = "text" class = "form-control" id = "Nama"
                    placeholder = "Masukan Kategori .." name="Nama">
            </div>
        </div>
        <input type="submit" value="Simpan Kategori" class="btn btn-primary">
        {{-- Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
    </form>
@endsection
