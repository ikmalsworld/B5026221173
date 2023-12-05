@extends('master')

@section('title', 'Data Harddisk')

@section('konten')
	<h3>Data Harddisk</h3>

	<a href="/harddisk" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/harddisk/store" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}
        <div class = "form-group">
            <label for = "merkharddisk" class = "col-sm-2 control-label">Merk Harddisk</label>
            <div class = "col-sm-10">
                <input type = "text" class = "form-control" id = "merkharddisk"
                    placeholder = "Masukan Merk Harddisk .." name="merkharddisk">
            </div>
        </div>
        <div class = "form-group">
            <label for = "stockharddisk" class = "col-sm-2 control-label">Stock Harddisk</label>
            <div class = "col-sm-10">
                <input type = "number" class = "form-control" id = "stockharddisk"
                    placeholder = "Masukan Jumlah Stock Harddisk .." name="stockharddisk">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1 control-label">Ketersediaan</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="yatersedia" value="1">
                    <label class="form-check-label" for="yatersedia">Ya</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="taktersedia" value="0">
                    <label class="form-check-label" for="taktersedia">Tidak</label>
                </div>
            </div>
        </div>
        <input type="submit" value="Simpan Nilai" class="btn btn-primary">
        {{-- Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
    </form>
@endsection
