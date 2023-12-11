@extends('master')
@section('judul_halaman')
    <h3>Edit Kategori</h3>

    <a href="/cc">Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    @foreach ($cc as $p)
        <form action="/cc/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $p->ID}}">
			<div class = "form-group">
				<label for = "Nama" class = "col-sm-2 control-label">Nama</label>
				<div class = "col-sm-10">
					<input type="text" required="required" name="Nama" value="{{ $p->Nama }}" class="form-control">
				</div>
			</div>
			<input type="submit" value="Simpan Kategori" class="btn btn-primary">
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
