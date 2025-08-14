@extends('layout.master')
@section('content')
    <br>
    <h1 class="text-center">Bizce aklında tuttuğun şey</h1>
    <div class="row">
        <div class="col-12 text-center">
    @if($question->answer == "Kedi")
            <img src="https://www.iyihisset.com/sites/default/files/yasa/kediler_hakkinda_az_bilinen_50_sasirtici_bilgi_0_1.jpg" width="234" height="130">
    @elseif($question->answer == "İnsan")
            <img src="https://cdn.webtekno.com/list/538/image/tarihte-yasamis-tum-insan-turleri-396e41.jpg" width="182" height="130">
    @elseif($question->answer == "Comer")
            <br>
            <img src="https://usecomer.com/assets/img/logo.png" width="400" height="70">
    @endif
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12 text-center">
            <a href="{{ route('home') }}" class="btn btn-primary btn-sm" style="width: 200px;">Yeniden başla!</a>
        </div>
    </div>
@endsection
