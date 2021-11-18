@extends('layouts.backend', ['title' => 'Member| Member page'])

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
            <h1 class="m-0">Transaksi Pages</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
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
                <h5 class="card-title">Members List</h5>
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
                        <div class="card-footer clearfix float-right">
                            <a href="{{ route('transaksi.create') }}" class="btn btn-sm btn-info float-left tombol">New Transaksi +</a>
                            <a href="{{ route('transaksi.download') }}" class="btn btn-sm btn-info float-left tombol"> Print PDF <i class="fas fa-print t"></i></a>
                        </div>
                      <div class="table-responsive">
                        <table class="table m-0">
                          <thead>
                          <tr>
                            <th>Title book</th>
                            <th>Name member</th>
                            <th>Borrowing date</th>
                            <th>Return date</th>
                            <th>Status</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach ($transaksis as $key => $transaksi)
                          <tr>
                            <td>{{ $transaksi->buku->judul }}</td>
                            <td>{{ $transaksi->member->nama }}</td>
                            <td>{{ $transaksi->tanggal_pinjam }}</td>       
                            <td>{{ $transaksi->tanggal_kembali }}</td>       
                            <td>{{ $transaksi->status->nama }}</td>       
                          @endforeach 
                          </tbody>
                        </table>
                      </div>
                      <div class="mt-4">
                        {{ $transaksis->links() }}
                      </div>
                      <!-- /.table-responsive -->
                    </div>
        
                  </div>
                  <div class="mt-4 float-left">
                    Showing 
                    {{ $transaksis->firstItem() }}
                    to 
                    {{ $transaksis->lastItem() }}
                    of 
                    {{ $transaksis->total() }} 
                    entries
                  </div>
                  <div class="mt-4 float-rigth">
                    {{ $transaksis->links() }}
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