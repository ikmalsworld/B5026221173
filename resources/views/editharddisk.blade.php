@extends('master')
@section('judul_halaman')
    <h3>Edit Pegawai</h3>

    <a href="/harddisk"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    @foreach ($harddisk as $p)
        <form action="/harddisk/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $p->kodeharddisk}}">
			<div class = "form-group">
				<label for = "merkharddisk" class = "col-sm-2 control-label">Merk Harddisk</label>
				<div class = "col-sm-10">
					<input type="text" required="required" name="merkharddisk" value="{{ $p->merkharddisk }}" class="form-control">
				</div>
			</div>
			<div class = "form-group">
				<label for = "stockharddisk" class = "col-sm-2 control-label">Stock Harddisk</label>
				<div class = "col-sm-10">
					<input type="number" required="required" name="stockharddisk" value="{{ $p->stockharddisk }}" class="form-control">
				</div>
			</div>
            <div class="form-group">
                <label class="col-sm-1 control-label">Ketersediaan</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tersedia" id="tersedia" value="1">
                        <label class="form-check-label" for="tersedia">Ya</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tersedia" id="taktersedia" value="0">
                        <label class="form-check-label" for="taktersedia">Tidak</label>
                    </div>
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
