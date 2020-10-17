@extends('layouts.admin-template')

@section('content')

    <div class="row">
        <div class="col-lg-9">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                    <tr>
                        <th class="text-right">Kategori</th>
                        <th class="text-right">Tarif Adı</th>
                        <th class="text-right">Kaç Kişlik</th>
                        <th class="text-right">Malzemeler</th>
                        <th class="text-right">Hazırlanışı</th>
                        <th class="text-right">Delete</th>
                        <th class="text-right">Update</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($menu as $m)
                        <tr>

                            <td><center>{{$m->kategori}}</center></td>
                            <td class="text-right">{{$m->tarifadi}}</td>
                            <td class="text-right">{{$m->kackisi}}</td>
                            <td class="text-right">{{$m->malzemeler}}</td>
                            <td class="text-right">{{$m->hazirlanisi}}</td>
                            <td class="text-right"><a href="/sil/{{$m->id}}">SİL</a></td>
                            <td class="text-right"><a href="/guncelle/{{$m->id}}">GÜNCELLE</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
