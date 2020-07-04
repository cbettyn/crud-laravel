@extends('master')

@section('content')
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Masukkan Pertanyaan</h3>
              </div>
              <div class="card-body">
                <form action="/pertanyaan" method="post" role="form">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi Pertanyaan</label>
                    <textarea class="form-control" id="isi" name="isi"></textarea>
                  </div>

                </div>
                <!-- /.card-body -->
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary"  style="margin-left:20px">Submit</button>
              </div>
              </form>
              <!-- /.card-body -->
            </div>
@endsection
