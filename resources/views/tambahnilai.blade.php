@extends('master')

@section('title', 'Nilai Kuliah')

@section('konten')
	<h3>Nilai Kuliah</h3>

	<a href="/nilaikuliah" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}
        <div class = "form-group">
            <label for = "NRP" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-10">
                <input type = "number" class = "form-control" id = "NRP"
                    placeholder = "Masukan NRP .." name="NRP">
            </div>
        </div>
        <div class = "form-group">
            <label for = "NilaiAngka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-10">
                <input type = "number" class = "form-control" id = "NilaiAngka"
                    placeholder = "Masukan Nilai Angka .." name="NilaiAngka">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1 control-label">SKS</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="SKS" id="sks3" value="3">
                    <label class="form-check-label" for="sks3">3 SKS</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="SKS" id="sks4" value="4">
                    <label class="form-check-label" for="sks4">4 SKS</label>
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
