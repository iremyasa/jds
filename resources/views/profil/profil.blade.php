@extends('layouts.admin-template')
@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                 src="img/00aa.jpg"
                                 alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">İrem Yaşa</h3>

                        <p class="text-muted text-center">Ekonomisyen <br> Aşçı <br> Yazılımcı</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Tarif</b> <a class="float-right">43</a>
                            </li>
                            <li class="list-group-item">
                                <b>Takipçi</b> <a class="float-right">15,543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Takip </b> <a class="float-right">187</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Profil Düzenle</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->

                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Paylaşılan Tariflerim</a></li>

                        </ul>
                    </div><!-- /.card-header -->
                    <div class="row">
                        @foreach($yemekTarifleri->slice(0,4) as $yemek)
                            <div class="card" style="margin-left: 25px;">
                                <div class="card-body">
                                    <div class="location-img">
                                        <img src="{{asset('/uploads/products/').'/'.$yemek->photo}}" alt="">
                                    </div>
                                    <div class="location-details">
                                        <p>{{$yemek->tarifadi}}</p>
                                        <a href="/tarif-detay/{{$yemek->id}}" class="location-btn"> Tarifi İncele </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
@endsection

