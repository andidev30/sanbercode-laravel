@extends('adminlte.master')

@section('content')
<div>
    <div class="card">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Judul : {{$data->judul}}</li>
            <li class="list-group-item">Isi : {{$data->isi}}</li>
            <li class="list-group-item"></li>
        </ul>
    </div>
</div>
@endsection
