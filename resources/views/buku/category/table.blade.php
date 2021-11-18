@extends('layouts.backend', ['title' => 'Categories table'])

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
            <h1 class="m-0">Categories page</h1>
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
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                {{-- <h5 class="card-title"><i class="fas fa-table"> Categories </i></h5> --}}
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
                    <div class="card-body pt-0 mt-0">
                        @auth
                        <div class="card-footer clearfix float-right">
                            <a href="{{ route('category.create') }}" class="btn btn-sm btn-info float-left tombol">New category +</a>
                        </div>
                        @endauth
                    </div>
                  <div class="col-md-12">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col-md-9 mb-4">
                          <div class="card">
                          {{--   --}}
                          <div class="card-body">
                            <div class="table-responsive" id="hello">
                                <table class="table m-0">
                                  <thead>
                                  <tr>
                                    <th>Categories</th>
                                    <th>Descriptions</th>
                                    <th>Created_by</th>
                                    <th></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach ($categories as $key => $category)
                                  <tr>
                                    <td><a href="{{ route('category.index', $category->slug) }}" class="text-white">{{ $category->nama_category }}</a></td>
                                    <td><a href="{{ route('category.index', $category->slug) }}" class="text-white">{{ nl2br($category->deskripsi) }}</a></td>
                                    <td><a href="{{ route('category.index', $category->slug) }}" class="text-white">{{ $category->created_by }}</a></td>
                                    <td>
                                      @auth

                                        <a href="{{ route('category.edit', $category->slug) }}" class="badge bg-warning  my-1" style="border-radius: 3px;"><i class="fas fa-pencil-alt"></i></a>
                                        <form action="{{ route('category.delete', $category->slug) }}" method="post">
                                          @csrf
                                          @method('delete')
                                          <button type="submit" class="small bg-danger border-0 my-1" style="border-radius: 3px;"   onclick="return confirm('Are you sure want to delete this ?')"><i class="far fa-trash-alt"></i></button>
                                        </form>
                              
                                      @endauth
                                    </td>
                                  </tr>
                                  @endforeach 
                                  </tbody>
                                </table>
                            </div>
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
                            <iframe src="https://giphy.com/embed/D4hiJ8Oo1xOwUDOzyJ" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/Canticosworld-besitos-besito-canticos-D4hiJ8Oo1xOwUDOzyJ"></a></p>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
              <div class="float-left">
                Showing 
                {{ $categories->firstItem() }}
                to 
                {{ $categories->lastItem() }} 
                of 
                {{ $categories->total() }}
                entries 
              </div>
              <div class="small float-right">
                {{ $categories->links() }}
              </div>
            </div>
            {{--  --}}
              <div class="jumbotron1">
                <hr class="my-4">
              </div>
            {{--  --}}
          </div>
        </div>

      </div>
    </section>
  </div>
    
@endsection