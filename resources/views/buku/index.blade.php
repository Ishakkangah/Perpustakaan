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
            <h1 class="m-0">Books Pages</h1>
          </div>
          @if(!auth()->user())
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            </ol>
          </div>
          @endif
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
                @isset($category)
                <h5 class="card-title">Categories : {{ $category->nama_category  }}</h5>
                @else
                <h5 class="card-title">Books List</h5>
                @endisset


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
                        @auth
                        <a href="{{ route('buku.create') }}" class="btn btn-sm btn-info float-left tombol">New book +</a>
                        @endauth
                          <button class="btn btn-sm btn-info float-left tombol dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($categories as $category)
                            <a class="dropdown-item" href="{{ route('category.index', $category->slug) }}">{{ $category->nama_category }}</a>
                            @endforeach
                          </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table m-0">
                          <thead>
                          <tr>
                            <th>Books title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Location</th>
                            <th></th>
                            <th></th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach ($books as $key => $book)
                          <tr>
                            {{-- <td>{{ $books ->firstItem() + $key }}</td> --}}
                            <td>{{ $book->judul }}</td>
                            <td>{{ $book->pengarang }}</td>
                            <td>{{ $book->category->nama_category }}</td>
                            <td>{{ $book->lokasi }}</td>
                            <td>
                              @auth
                              <form action="{{ route('buku.delete', $book->slug) }}" method="post">
                                @csrf
                                @method('delete')
                                <button href="#" class="text-danger bg-danger border-0" style="border-radius: 3px;"   onclick="return confirm('Are you sure ?')"><i class="far fa-trash-alt"></i></button>
                              </form>
                              @endauth
                            </td>
                            <td><a href="{{ route('buku.detail', $book->slug) }}" class="text-white"><i class="fas fa-align-left"></i></a></td>
                          </tr>
                          @endforeach 
                          </tbody>
                        </table>
                      </div>
                      <div class="float-left mt-4">
                          Showing
                          {{ $books->firstItem() }}
                          to 
                          {{ $books->lastItem() }}
                          of
                          {{-- {{ $books->total() }} --}}
                          entries
                      </div>
                      <div class="float-right small mt-4">
                        {{ $books->links() }}
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