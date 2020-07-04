@extends('master')

@section('content')
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Pertanyaan</h3>
              </div>
              <div class="card-body">
                @foreach($get_ques as $data)
                <form action="/pertanyaan/{{ $data->id }}" method="post" role="form">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $data->judul }}">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi Pertanyaan</label>
                    <textarea class="form-control" id="isi" name="isi">{{ $data->isi }}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->

              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="margin-left:20px">Submit</button>
              </div>
            </form>
            @endforeach
            </div>
@endsection
