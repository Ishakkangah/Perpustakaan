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
              <div class="card-body  d-flex justify-content-center">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/4.gif') }}" class="card-img-top rounded-circle" style="width: 200px">
                                </div>
                                <table class="table-borderless mt-3">
                                    <tbody>
                                        <tr>
                                            <th><i class="fas fa-table"></i> Registration date</th>
                                            <th>:</th>
                                            <th>{{ $user->created_at->toDateTimeString() }}</th>
                                        </tr>
                                        <tr>
                                            <th><i class="fas fa-history"></i> Last login</th>
                                            <th>:</th>
                                            <th>{{ $user->last_login }}</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                          </div>
                          <div class="card mt-3">
                            <div class="card-header">
                                <h5><i class="fas fa-key"></i> Change password</h5>
                                <form action="{{ route('user.change_password') }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row mt-4">
                                        <label for="current_password" class="col-sm-4 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                        <input type="current_password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" placeholder="Enter current password">
                                    </div>
                                    <div class="col-12">
                                            @error('current_password')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-4 col-form-label">New passowrd</label>
                                        <div class="col-sm-8">
                                        <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter new confirmation">
                                    </div>
                                    <div class="col-12">
                                            @error('password')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password_confirmation" class="col-sm-4 col-form-label">Passowrd confirmation</label>
                                        <div class="col-sm-8">
                                        <input type="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Enter password confirmation">
                                    </div>
                                    <div class="col-12">
                                            @error('password_confirmation')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                                    </div>
                                </form>
                        </div>
                        </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-header">
                              <h5 class="card-title"><i class="fas fa-user"></i> Change profile</h5>
                            </div>
                            <div class="card-header">
                                <form action="{{ route('user.change_profile') }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row mt-2">
                                        <label for="username" class="col-sm-4 col-form-label">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') ?? $user->username }}" id="username" placeholder="Enter username">
                                        </div>
                                        @error('username') 
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label for="name" class="col-sm-4 col-form-label">Fullname</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') ?? $user->name }}" placeholder="Enter name">
                                        </div>
                                        @error('name') 
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') ?? $user->email }}" placeholder="Enter email">
                                        </div>
                                        @error('email') 
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label for="level" class="col-sm-4 col-form-label">Level</label>
                                        <div class="col-sm-8">
                                            @foreach ($user->roles as $item)
                                            <input class="form-control bg-info" value="{{  $item->name }}" disabled>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label for="address" class="col-sm-4 col-form-label">Address</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ old('address') ?? $user->address }}" placeholder="Enter address">
                                        </div>
                                        @error('address') 
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label for="phone_number" class="col-sm-4 col-form-label">Phone number</label>
                                        <div class="col-sm-8">
                                            <input type="number" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" value="{{ old('phone_number') ?? $user->phone_number }}" placeholder="Enter phone number">
                                        </div>
                                        @error('phone_number') 
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label for="experience" class="col-sm-4 col-form-label">Experience</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="experience" id="experience" class="form-control @error('experience') is-invalid @enderror" id="experience" value="{{ old('experience') ?? $user->experience }}" placeholder="Enter experiences">
                                        </div>
                                        @error('experience') 
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Submit</a>
                                </form>
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