@extends('layouts.admin-template')

@section('content')
    <form action="/guncelle/{{$menu->id}}" method="post">
        <div>
            <div class="card-body" style="width: 600px">
                <div class="form-group">
                    <label for="inputStatus">Tarif Kategori</label>
                    <select id="inputStatus" value="{{$menu->tatli}}" class="form-control custom-select">
                        <option></option>
                        <option>Yemek Çeşitleri</option>
                        <option>Hamur İşi Tarifleri</option>
                        <option>Başlangıç Tarifleri</option>
                        <option>Tatlı Tarifleri</option>
                        <option>İçecek Tarifleri</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputName">Tarif Adı</label>
                    <input type="text" id="inputName" value="{{$menu->tatli}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputStatus">Kaç Kişilik</label>
                    <select id="inputStatus" value="{{$menu->tatli}}" class="form-control custom-select">
                        <option></option>
                        <option>1 - 2 Kişilik</option>
                        <option>2 - 4 Kişilik</option>
                        <option>6 - 8 Kişilik</option>
                        <option>10 - 12 Kişilik</option>
                        <option>14 Kişi ve Üstü</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Malzemeleri</label>
                    <textarea id="inputDescription" value="{{$menu->tatli}}" class="form-control" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputStatus">Hazırlanışı</label>
                    <textarea id="inputDescription" value="{{$menu->tatli}}" class="form-control" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </div>
        </div>
    </form>
    </div>
@endsection
