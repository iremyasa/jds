@extends('layouts.admin-template')
@section('content')
    <br> <br>
    <div class="main-content">
        <div class="sectioncontent sectioncontent--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="card" style="width:700px">
                        <div class="card-header">
                            <strong>Tarif Ekleme </strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleName">Kategori</label>
                                    <input type="text" name="kategori" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Tarif Adı</label>
                                    <input type="text" name="tarifadi" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Kaç Kişilik</label>
                                    <input type="text" name="kackisi" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Malzemeler</label>
                                    <textarea class="form-control" name="malzemeler" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Hazırlanışı</label>
                                    <textarea class="form-control" name="hazirlanisi" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                                @csrf
                                <input type="file" name="photo" class="form-control"> <br>
                                <input type="submit" class="btn btn-block btn-input au-btn--blue" style="background-color:orangered;width:100px;margin-left:560px" value="Tarif Gönder"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
