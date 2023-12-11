@extends('master')

@section('judul_halaman')
    <h3>View Kategori</h3>

    <a href="/cc" type="btn btn-primary">Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-6"></div>
        <div class="col-6">
            @foreach ($kategori as $p)
            <fieldset disabled>
                <form action="/cc/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="ID" value="{{ $p->ID }}">
                    <div class = "form-group row mt-2">
                        <label for = "Nama" class = "col mt-2 control-label">Kategori:</label>
                        <div class = "col-sm-10">
                            <input type="text" name="Nama" value="{{ $p->Nama }}" class="form-control" style="border: 0; background-color:white">
                        </div>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" style="width:420px">
                <a href="/cc" class="btn btn-primary w-25">Ok</a>
            </div>
        </div>
    </div>

@endsection
