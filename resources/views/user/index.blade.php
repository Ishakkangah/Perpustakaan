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
                <h5 class="card-title">List users +</h5>

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
                        <div class="col-md-12 mb-4">
                          <div class="card-body p-0">
                            <div class="card-footer clearfix float-right">
                              @auth
                              <a href="{{ route('register') }}" class="btn btn-sm btn-info float-left tombol">New admin +</a>
                              @endauth
                            </div>
                          {{--   --}}
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table m-0">
                                <thead>
                                <tr>
                                  <th>Neme</th>
                                  <th>Email</th>
                                  <th>Level</th>
                                  <th>date of registration</th>
                                  <th>Last login</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $key => $user)
                                <tr>
                                  {{-- <td>{{ $books ->firstItem() + $key }}</td> --}}
                                  <td>{{ $user->name }}</td>
                                  <td>{{ $user->email }}</td>
                                  @foreach ($user->roles as $role)
                                  <td class="badge bg-warning mt-2">{{ $role->name }}</td>
                                  @endforeach
                                  <td>{{ $user->created_at }}</td>
                                  <td>{{ $user->last_login }}</td>
                                  <td>
                                    @auth
                                    <form action="{{ route('user.delete', $user->id) }}" method="post">
                                      @csrf
                                      @method('delete')
                                      <button type="submit" class="text-danger bg-danger border-0" style="border-radius: 3px;"   onclick="return confirm('Are you sure ?')"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                    @endauth
                                  </td>
                                  <td><a href="{{ route('user.detail', $user->id) }}" class="text-white"><i class="fas fa-align-left"></i></a></td>
                                </tr>
                                @endforeach 
                                </tbody>
                              </table>
                            </div>
                          </div>                          
                          {{--  --}}
                           </div>
                        </div>
                        {{-- <div class="col-md-3 mb-4">
                          <div class="card">
                            <img src="{{ asset('img/2.gif') }}" class="card-img-top" style="object-fit: cover;object-position: center;">
                            <div class="card-body">
                              <marquee behavior="right">"لسنا هنا للتنافس مع بعضنا البعض. نحن هنا لنكمل بعضنا البعض." - بيل مكارتني <span class="small">Artinya : "Kita ada di sini bukan untuk saling bersaing. Kita ada di sini untuk saling melengkapi." - Bill McCartney</span></marquee>
                            </div>
                          </div>
                        </div> --}}
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