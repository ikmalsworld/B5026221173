@extends('master')

@section('title', 'Data Kategori')

@section('konten')
<h2>Muhammad Hasan Kamal</h2>
	<h3>Data Kategori</h3>

    <p>Pilih Kategori</p>

    <form action="/hasilcombo" method="GET">
        <select name="selectedCategory" id="selectedCategory" class="form-control">
            @foreach($kategori as $k)
                <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Kirim" class="btn btn-primary">
    </form>

@endsection
