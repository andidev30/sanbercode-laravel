@extends('adminlte.master')

@section('content')
<!-- Horizontal Form -->
<div class="col">
    <div class="box box-info ml-4 mt-4">
        <div class="box-header with-border">
            <h3 class="box-title">Pertanyaan</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{url('/pertanyaan')}}">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="title" value="{{old('title')}}">
                    </div>
                </div>
                @error('title')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="isi" class="col-sm-2 control-label">Isi</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" name="isi" id="isi" rows="3">{{old('isi')}}</textarea>
                    </div>
                </div>
                @error('isi')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Save</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
</div>
@endsection()
