@extends('master')

@section('title', 'Data Kategori')

@section('konten')
<h2>Muhammad Hasan Kamal</h2>
	<h3>Data Kategori</h3>
    <a href="/cc" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>
    <form action="{{ route('cc.simpan') }}" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}
        <div class="form-group">
            <select name="pilihan" class="form-control col-xs-12" aria-label="Default select example">
                <option selected>Pilih Kategori</option>
                @foreach($kategori as $p)
                    <option value="{{$p->ID}}">{{$p->Nama}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="KIRIM" class="btn btn-primary">
    </form>
@endsection
