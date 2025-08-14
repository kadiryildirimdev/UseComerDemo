@extends('layout.master')
@section('title',config('app.name'))
@section('content')
    <br>
    <h1 class="text-center">Şunlardan birini aklında tut!</h1>
    <div class="row">
        <div class="col-4 text-center">
            <img src="https://www.iyihisset.com/sites/default/files/yasa/kediler_hakkinda_az_bilinen_50_sasirtici_bilgi_0_1.jpg" width="234" height="130">
        </div>
        <div class="col-4 text-center">
            <img src="https://cdn.webtekno.com/list/538/image/tarihte-yasamis-tum-insan-turleri-396e41.jpg" width="182" height="130">
        </div>
        <div class="col-4 text-center">
            <br>
            <img src="https://usecomer.com/assets/img/logo.png" width="400" height="70">
        </div>
    </div>
    <div class="row">
        <div class="col-4 text-center">
                <strong>Kedi</strong>
            </div>
        <div class="col-4 text-center">
                <strong>İnsan</strong>
            </div>
        <div class="col-4 text-center">
                <strong>Comer</strong>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="d-grid gap-2 col-2 mx-auto">
            <a href="{{ route('question') }}" class="btn btn-primary" type="button" style="font-weight: bold">Başla</a>
        </div>
    </div>
@endsection
