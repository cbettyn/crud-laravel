@extends('master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          Jawaban
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="timeline">

              @foreach($jawaban as $no=>$data)
              <div>
                <i class="fas fa-comments bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i>{{ $data->created_at }}</span>

                  <div class="timeline-body">
                    {{ $data->isi }}
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
@endsection
