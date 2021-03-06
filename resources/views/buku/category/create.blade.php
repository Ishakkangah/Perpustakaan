@extends('layouts.backend', ['title' => 'New category'])

@section('content')
    
<x-sidebar></x-sidebar>
<x-navbar></x-navbar>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">New Categories +</i></h5>

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
                        <div class="col-md-3 mb-4">
                            <div class="card">
                              <img src="{{ asset('img/4.gif') }}" class="card-img-top" style="height: 300px;object-fit: cover;object-position: center;">
                              <div class="card-body">
                                <marquee behavior="right">"لسنا هنا للتنافس مع بعضنا البعض. نحن هنا لنكمل بعضنا البعض." - بيل مكارتني <span class="small">Artinya : "Kita ada di sini bukan untuk saling bersaing. Kita ada di sini untuk saling melengkapi." - Bill McCartney</span></marquee>
                              </div>
                            </div>
                          </div>
                        <div class="col-md-9 mb-4">
                          <div class="card">
                          {{-- CARD BODY  --}}
                          <div class="card-body">
                                <form action="{{ route('category.create') }}" method="post">
                                    @csrf
                                    @method('put')
                                    @include('buku.category.partials.form-control')
                                </form>
                          </div>                          
                          {{-- END CARD BODY  --}}
                           </div>
                        </div>
                  </div>
                </div>
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
<x-footer></x-footer>
    
@endsection