@extends('master')

@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ajukan pertanyaan?
                   <a href="/pertanyaan/create"> klik di sini </a>
                </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th width="25%">Judul</th>
                      <th width="30%">Isi Pertanyaan</th>
                      <th width="15%">Jawaban</th>
                      <th width="25%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($questions as $no=>$q)
                    <tr>
                      <td>{{ ++$no }}</td>
                      <td>{{ $q->judul }}</td>
                      <td>{{ $q->isi }}</td>
                      <td>
                        <a href="/jawaban/{{ $q->id }}"> <button type="button" class="btn btn-sm btn-default">
                        <i class="far fa-eye"></i> Lihat
                      </button></a>
                        <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#pertanyaanId{{ $q->id }}">
                        <i class="far fa-comments"></i> Jawab
                        </button>
                      </td>
                      <td><a href="/pertanyaan/{{ $q->id }}">
                            <button type="button" class="btn btn-sm btn-default">
                              <i class="far fa-eye"></i> Detail &nbsp
                            </button>
                          </a>
                          <a href="/pertanyaan/{{ $q->id }}/edit">
                            <button type="button" class="btn btn-sm btn-default">
                              <i class="fas fa-edit"></i>Edit &nbsp
                            </button>
                          </a>
                          <form action="/pertanyaan/{{ $q->id }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i>Hapus &nbsp</button>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            @foreach($questions as $data)
            <div class="modal fade" id="pertanyaanId{{ $data->id }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Beri Jawaban</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="/jawaban/{{ $data->id }}" role="form">
              @csrf
            <div class="modal-body">
                        <div class="card-body">
                          <div class="form-group">
                            <textarea class="form-control" rows="4" name="isi_jawaban"></textarea>
                          </div>
                        </div>
                        <!-- /.card-body -->


            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach
@endsection
