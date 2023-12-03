@extends('master')
@section('judul_halaman')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
			<div class = "form-group">
				<label for = "nama" class = "col-sm-2 control-label">Nama</label>
				<div class = "col-sm-10">
					<input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control">
				</div>
			</div>
			<div class = "form-group">
				<label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
				<div class = "col-sm-10">
					<input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control">
				</div>
			</div>
			<div class = "form-group">
				<label for = "umur" class = "col-sm-2 control-label">Umur</label>
				<div class = "col-sm-10">
					<input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control">
				</div>
			</div>
			<div class = "form-group">
				<label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
				<div class = "col-sm-10">
					<textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea>
				</div>
			</div>
			<input type="submit" value="Simpan Data" class="btn btn-primary">
            {{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
            Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br />
            Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br />
            Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br />
            Alamat
            <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br />
            <input type="submit" value="Simpan Data"> --}}
        </form>
    @endforeach

@endsection
