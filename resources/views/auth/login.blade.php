@extends('layouts.backend', ['title' => 'LOGIN'])

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
            <h1 class="m-0">LOGIN</h1>
          </div>
          <div class="col-sm-6">
            {{-- / --}}
        </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
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
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col-md-9 mb-4">
                          <div class="card">
                          {{--   --}}
                          <div class="card-body">
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter username" value="{{ old('username') }}">
                                        @error('username')
                                            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter password" value="{{ old('password') }}">
                                        @error('password')
                                            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                          </div>                          
                          {{--  --}}
                           </div>
                        </div>
                        <div class="col-md-3 mb-4">
                          <div class="card">
                            <img src="{{ asset('img/2.gif') }}" class="card-img-top" style="object-fit: cover;object-position: center;">
                            <div class="card-body">
                              <marquee behavior="right">"لسنا هنا للتنافس مع بعضنا البعض. نحن هنا لنكمل بعضنا البعض." - بيل مكارتني <span class="small">Artinya : "Kita ada di sini bukan untuk saling bersaing. Kita ada di sini untuk saling melengkapi." - Bill McCartney</span></marquee>
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