@extends('layouts.backend', ['title' => 'Users page'])

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
            <h1 class="m-0">Register Pages</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.table') }}">Admins</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        @include('buku.partials.content-header')

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Detail +</h5>

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
                      <div class="d-flex justify-content-center">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                              <div class="col-md-4">
                                <img src="{{ asset('img/Default2.png') }}" class="card-img-top">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td>{{ $user->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Username</td>
                                                <td>{{ $user->username }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="{{ route('user.index') }}" class="btn btn-primary"><i class="fas fa-angle-double-left"></i> Back to list </a>
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

      </div>
    </section>
  </div>
<x-footer></x-footer>
        
@endsection