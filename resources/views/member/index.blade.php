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
            <h1 class="m-0">Members Pages</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                            <a href="{{ route('member.create') }}" class="btn btn-sm btn-info float-left tombol">New Member +</a>
                        </div>
                      <div class="table-responsive">
                        <table class="table m-0">
                          <thead>
                          <tr>
                            <th>Nrp</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Gender</th>
                            <th></th>
                            <th></th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach ($members as $key => $member)
                          <tr>
                            <td>{{ $member->nim }}</td>
                            <td>{{ $member->nama }}</td>
                            <td>{{ $member->kelas->nama }}</td>
                            <td>{{ $member->jenis_kelamin->nama }}</td>
                            <td>
                              <form action="{{ route('member.delete', $member->slug) }}" method="post">
                                @csrf
                                @method('delete')
                                <button href="{{ route('member.delete', $member->slug ) }}" class="text-danger bg-danger border-0" style="border-radius: 3px;"   onclick="return confirm('Are you sure want to delete this ?')"><i class="far fa-trash-alt"></i></button>
                              </form>
                            </td>
                            <td><a href="{{ route('member.detail', $member->slug) }}" class="text-white"><i class="fas fa-align-left"></i></a></td>
                          </tr>
                          @endforeach 
                          </tbody>
                        </table>
                      </div>
                      <div class="mt-4 float-left">
                        Showing 
                        {{ $members->firstItem() }}
                        to 
                        {{ $members->lastItem() }}
                        of 
                        {{ $members->total() }} 
                        entries
                      </div>
                      <div class="mt-4 float-rigth">
                        {{ $members->links() }}
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