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
                <h5 class="card-title">BOOK INFORMATION </h5>

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
                          <h1 class="display-4">{{ $book->judul }}</h1>
                          @auth
                          @endauth
                          <a href="{{ route('buku.edit', $book->slug ) }}" class="btn btn-primary">Edit book</a>
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
                                            <label for="judul">Book title</label>
                                            <input class="form-control" value="{{ $book->judul }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="pengarang">Author</label>
                                            <input class="form-control" value="{{ $book->pengarang }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun_penerbit">Year of publication</label>
                                            <input class="form-control" value="{{ $book->tahun_penerbit }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="penerbit">Publisher</label>
                                            <input class="form-control" value="{{ $book->penerbit }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="ISBN">No. ISBN</label>
                                            <input class="form-control"value="{{ $book->ISBN }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <input class="form-control" value="{{ $book->category->nama_category }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_buku">Total Books</label>
                                            <input class="form-control" value="{{ $book->jumlah_buku}}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="lokasi">Location</label>
                                            <input class="form-control" value="{{ $book->lokasi }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="asal_buku">Origin of the book</label>
                                            <input class="form-control" value="{{ $book->asal_buku }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_buku_per_rak">Number of books per shelf</label>
                                            <input class="form-control" value="{{ $book->jumlah_buku_per_rak }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_input">Input date</label>
                                            <input class="form-control" value="{{ $book->tanggal_input }}" disabled>
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
                                            <img src="{{ asset('storage/' . $book->thumbnail) }}" class="gambar card-img rounded mx-auto d-block">
                                        </a>
                                        </div>
                                        <table class="table table-sm table-borderless text-center">
                                          <tbody>
                                            <tr>
                                              <th scope="col">{{ $book->tahun_penerbit }}</th>
                                              <th scope="col">{{ $book->jumlah_buku }}</th>
                                              <th scope="col">{{ $book->lokasi }}</th>
                                            </tr>
                                            <tr>
                                              <th scope="col" class="text-secondary"> Year</th>
                                              <th scope="col" class="text-secondary">Total Books</th>
                                              <th scope="col" class="text-secondary"> Location</th>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <div class="text-center mt-4">
                                          <h5>{{ $book->judul }}</h5>
                                          <p class="text-secondary text-monospace">{{ $book->pengarang }}</p>
                                          <p>{{ $book->category->nama_category }}</p>
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
                          <img src="{{ asset('storage/' .  $book->thumbnail) }}" class="card-img-top">
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