@extends('layouts.backend', ['title' => 'Dashborard'])

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
            <h1 class="m-0">Dashboard</h1>
          </div>
          @if(!auth()->user())
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            </ol>
          </div>
          @endauth
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
                <h5 class="card-title">Page Visitors</h5>

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
                    
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table m-0">
                          <thead>
                          <tr>
                            <th>Name of visitors</th>
                            <th>Visitors date</th>
                            <th>Visitor hours</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Muhammad Ucu</td>
                            <td>21-07-2021</td>
                            <td>00:11:20</td>
                          </tr>
                          <tr class="font-weight-bolder">
                            <td>Total Visitors</td>
                            <td>1</td>
                            <td>People</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->
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