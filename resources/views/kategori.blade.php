@extends('layouts.tarif-master')
@section('content')
    <div class="row">
        @foreach($contents as $content)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-location mb-30">
                    <div class="location-img">
                        <img src="{{asset('/uploads/products/').'/'.$content->photo}}" alt="">
                    </div>
                    <div class="location-details">
                        <p>{{$content->tarifadi}}</p>
                        <a href="/tarif-detay/{{$content->id}}" class="location-btn"> Tarifi İncele </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>    @endsection
