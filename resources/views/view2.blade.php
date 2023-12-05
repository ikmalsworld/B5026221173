@extends('master')

@section('judul_halaman')
    <h3>View Harddisk</h3>

    <a href="/harddisk" type="btn btn-primary">Kembali</a>

    <br />
    <br />
@endsection

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
    <div class="row">
        <div class="col-6"></div>
        <div class="col-6">
            @foreach ($harddisk as $p)
            <fieldset disabled>
                <form action="/harddisk/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="kodeharddisk" value="{{ $p->kodeharddisk }}">
                    <div class = "form-group row mt-2">
                        <label for = "merkharddisk" class = "col mt-2 control-label">Merk :</label>
                        <div class = "col-sm-10">
                            <input type="text" name="merkharddisk" value="{{ $p->merkharddisk }}" class="form-control" style="border: 0; background-color:white">
                        </div>
                    </div>
                    <div class = "form-group row mt-2">
                        <label for = "stockharddisk" class = "col mt-2 control-label">Stock :</label>
                        <div class = "col-sm-10">
                            <input style="border: 0; background-color:white" type="text" required="required" name="stockharddisk" value="{{ $p->stockharddisk }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row mt-2">
                        <label for = "tersedia" class = "col mt-2 control-label">Sedia :</label>
                        <div class = "col-sm-10">
                            <input style="border: 0; background-color:white" type="text" required="required" name="stockharddisk" value="{{ translateChar($p->tersedia) }}" class="form-control">
                        </div>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" style="width:420px">
                <a href="/harddisk" class="btn btn-primary w-25">Ok</a>
            </div>
        </div>
    </div>

@endsection
