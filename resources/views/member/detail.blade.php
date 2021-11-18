@extends('layouts.backend', ['title' => 'Books | Index page'])

@section('content')
    
<x-sidebar></x-sidebar>
<x-navbar></x-navbar>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">MEMBER INFORMATION </h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">

                    <div class="jumbotron jumbotron">
                        <div class="container">
                          <h1 class="display-4">{{ $member->name }}</h1>
                          <a href="{{ route('member.edit', $member->slug ) }}" class="btn btn-primary">Edit member</a>
                        </div>
                    </div>
                    <!-- info panel -->
                    <div class="row justify-content-center">
                        <div class="col-10 info-panel">
                            {{--  --}}
                            <div class="row">
                                <div class="col-sm-6">
                                  <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nama">Name</label>
                                            <input class="form-control" id="nama" value="{{  $member->nama }}" disabled>
                                            @error('nama')
                                                <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nim">NRP</label>
                                            <input class="form-control" id="nim" value="{{ $member->nim }}" disabled>
                                            @error('nim')
                                                <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin_id">Gender</label>
                                            <select class="form-control" id="jenis_kelamin_id" disabled>
                                                @foreach ($jenis_kelamins as $jenis_kelamin)
                                                <option {{ $member->jenis_kelamin_id == $jenis_kelamin->id ? 'selected' : '' }}>{{ $jenis_kelamin->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kelas_id">Class</label>
                                            <select class="form-control" id="kelas_id" disabled>
                                                @foreach ($kelass as $kelas)
                                                <option {{ $member->kelas_id == $kelas->id ? 'selected' : '' }} value="{{ $kelas->id }}">{{ $kelas->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir">Place, date of your birth</label>
                                            <input class="form-control" id="tempat_tanggal_lahir" value="{{ $member->tempat_tanggal_lahir }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input class="form-control" id="address" value="{{ $member->alamat }}" disabled>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="card">
                                    <div class="card-body">
                                  <div class="card">
                                    <!-- Button trigger modal -->
                                    <a type="button" data-toggle="modal" data-target="#fileThumbnail">
                                        <img src="{{ asset('storage/' . $member->thumbnail) }}" class="gambar card-img rounded mx-auto d-block">
                                    </a>
                                    </div>
                                  </div>
                                </div>
                              </div>                              
                            {{--  --}}
                        </div>
                    </div>
                    <!-- akhhir info panel -->


  
                <!-- Modal -->
                <div class="modal fade" id="fileThumbnail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <img src="{{ asset('storage/' .  $member->thumbnail) }}" class="card-img-top">
                        </div>
                    </div>
                    </div>
                </div>

                    

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  </div>
<x-footer></x-footer>
    
@endsection