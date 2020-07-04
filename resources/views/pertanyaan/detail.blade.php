@extends('master')

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Detail Pertanyaan
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @foreach($get_ques as $detail)
                <dl>
                  <dt>Judul</dt>
                  <dd>{{ $detail->judul }}</dd>
                  <dt>Isi Pertanyaan</dt>
                  <dd>{{ $detail->isi }}</dd>
                  <dt>Tanggal Dibuat</dt>
                  <dd>{{ $detail->created_at }}</dd>
                  <dt>Tanggal Diperbaharui</dt>
                  <dd>{{ $detail->updated_at }}</dd>
                  <dt>Jawaban</dt>
                </dl>
                @endforeach
                <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">

              @foreach($get_ans as $det)
              <div>
                <i class="fas fa-comments bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i>{{ $det->created_at }}</span>

                  <div class="timeline-body">
                    {{ $det->isi }}
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>

      @foreach($get_ques as $data)
      <form method="post" action="/jawaban/{{ $data->id }}" role="form">
        @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Beri Jawaban</label>
                    <textarea class="form-control" rows="4" name="isi_jawaban"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              @endforeach
              </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
@endsection
