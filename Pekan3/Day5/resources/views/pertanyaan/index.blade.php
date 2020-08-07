@extends('adminlte.master')
@section('content')
<div class="mt-4 ml-2">
<div class="card text-left">

<div class="card-header">
        <h3 class="card-title">DataTable with default features</h3> <br>
        <a href="/pertanyaan/create" class="btn btn-primary col-1">Tambah</a>
      </div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>title</th>
      <th>Isi</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $td)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $td->judul }}</td>
      <td>{{ $td->isi }}</td>
      <td>
        <a href="/pertanyaan/{{$td->id}}" class="btn btn-info btn-small">info</a>
        <a href="/pertanyaan/{{$td->id}}/edit" class="btn btn-warning btn-small">edit</a>
        <form action="/pertanyaan/{{$td->id}}" method="post">
        @csrf
        @method('DELETE')
            <input type="submit" value="delete" class="btn btn-danger">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
