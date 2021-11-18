<div class="card-body">
    <div class="form-group">
        <label for="buku_id">Books</label>
        <select type="text" name="buku_id" class="form-control @error('buku_id') is-invalid @enderror" id="buku_id" placeholder="Enter title" value="{{ old('buku_id') }}">
        <option disabled selected> ~ Choose one ~ </option>
        @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->judul }}</option>
        @endforeach
        </select>
        @error('buku_id')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="member_id">Members</label>
        <select type="text" name="member_id" class="form-control @error('member_id') is-invalid @enderror" id="member_id" placeholder="Enter member_id" value="{{ old('member_id')}}">
        <option disabled selected> ~ Choose one ~ </option>
            @foreach ($members as $member)
                <option value="{{ $member->id }}">{{ $member->nama }}</option>
            @endforeach
        </select>
        @error('member_id')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tanggal_pinjam">Borrowing date</label>
        <input type="date"  class="form-control bg-info" value="{{  $date->toDateString() }}" disabled >
    </div>
    <div class="form-group">
        <label for="tanggal_kembali">Return date</label>
        <input type="date" name="tanggal_kembali" class="form-control @error('tanggal_kembali') is-invalid @enderror" id="tanggal_kembali" placeholder="Enter tanggal_kembali" value="{{ old('tanggal_kembali')}}">
        @error('tanggal_kembali')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="status_id">Status</label>
        <select type="text" name="status_id" class="form-control @error('status_id') is-invalid @enderror" id="status_id" placeholder="Enter status_id" value="{{ old('status_id')}}">
        <option disabled selected> ~ Choose one ~ </option>
            @foreach ($statuss as $status)
                <option value="{{ $status->id }}">{{ $status->nama }}</option>
            @endforeach
        </select>
        @error('status_id')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>