@auth
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
      
      <a href="{{ route('member.index') }}">
          <div class="info-box-content">
              <span class="info-box-text text-white">Total Members</span>
              <span class="info-box-number text-white">
                  {{ $all_members->count() }}
              </span>
          </div>
      </a>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-swatchbook"></i></span>

      <a href="{{ route('buku.index') }}">
          <div class="info-box-content">
          <span class="info-box-text text-white">Total Books</span>
          <span class="info-box-number text-white">{{ $all_books->count() }}</span>
          </div>
      </a>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-eye"></i></span>

      <a href="#">
          <div class="info-box-content">
            <span class="info-box-text text-white">Visitors</span>
            <span class="info-box-number text-white">76 </span>
          </div>
      </a>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-fax"></i></span>

      <a href="{{ route('transaksi.index') }}">
          <div class="info-box-content">
              <span class="info-box-text text-white">Total Transactions</span>
              <span class="info-box-number text-white">{{ $all_transactions->count() }}</span>
          </div>
      </a>
    </div>
  </div>
</div>
@endauth