@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Jardín De Ensueño') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Girişiniz başarıyla tamamlanmıştır!') }} <br>
                    Admin sayfanıza gitmek için <a href="/adm"> TIKLAYINIZ. </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
