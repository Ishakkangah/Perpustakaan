<div class="card-body">
    <div class="form-group">
        <label for="judul">Book title</label>
        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Enter title" value="{{ old('judul') ?? $book->judul }}" required>
        @error('judul')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="pengarang">Author</label>
        <input type="text" name="pengarang" class="form-control @error('pengarang') is-invalid @enderror" id="pengarang" placeholder="Enter Author" value="{{ old('pengarang') ?? $book->pengarang }}" required>
        @error('pengarang')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tahun_penerbit">Year of publication</label>
        <input type="number" name="tahun_penerbit" class="form-control @error('tahun_penerbit') is-invalid @enderror" id="tahun_penerbit" placeholder="Enter year of publication" value="{{ old('tahun_penerbit') ?? $book->tahun_penerbit }}" required>
        @error('tahun_penerbit')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="penerbit">Publisher</label>
        <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit" placeholder="Enter publisher" value="{{ old('penerbit')?? $book->penerbit }}" required>
        @error('penerbit')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="ISBN">No. ISBN</label>
        <input type="number" name="ISBN" class="form-control @error('ISBN') is-invalid @enderror" id="ISBN" placeholder="Enter ISBN" value="{{ old('ISBN') ?? $book->ISBN }}" required>
        @error('ISBN')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select type="text" name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="category_id" placeholder="Enter category_id" value="{{ old('category_id') }}" required>
            <option disabled selected> ~ Choose one ~ </option>
            @foreach ($categories as $key => $category)
            <option {{ $category->id == $book->category_id ? 'selected' : '' }} value="{{ $category->id }}"> {{ $category->nama_category }} </option>
        @endforeach
        </select>
        @error('category_id')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jumlah_buku">Total Books</label>
        <input type="number" name="jumlah_buku" class="form-control @error('jumlah_buku') is-invalid @enderror" id="jumlah_buku" placeholder="Enter total books" value="{{ old('jumlah_buku') ?? $book->jumlah_buku }}" required >
        @error('jumlah_buku')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="lokasi">Location</label>
        <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" placeholder="Enter Location" value="{{ old('lokasi') ?? $book->lokasi }}" required >
        @error('lokasi')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="asal_buku">Origin of the book</label>
        <input type="text" name="asal_buku" class="form-control @error('asal_buku') is-invalid @enderror" id="asal_buku" placeholder="Enter origin of the book" value="{{ old('asal_buku') ?? $book->asal_buku }}" required >
        @error('asal_buku')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jumlah_buku_per_rak">Number of books per shelf</label>
        <input type="number" name="jumlah_buku_per_rak" class="form-control @error('jumlah_buku_per_rak') is-invalid @enderror" id="jumlah_buku_per_rak" placeholder="Enter input date" value="{{ old('jumlah_buku_per_rak') ?? $book->jumlah_buku_per_rak }}" required >
        @error('jumlah_buku_per_rak')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tanggal_input">Input date</label>
        <input type="date"  class="form-control bg-info @error('tanggal_input') is-invalid @enderror" id="tanggal_input" placeholder="Enter number of books per shelf" value="{{ $tanggal_input->toDateString() }}" required  disabled>
        @error('tanggal_input')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>

    <label for="thumbnail">File input  image</label>
    <div class="form-group">
            @if ($book->thumbnail)
            <div class="col-md-3">
                <img src="{{ asset('storage/' . $book->thumbnail) }}" class="card-img-top rounded">
            </div>
            @endif
            <div class="col-md-9">
                <input type="file" name="thumbnail" class="file-input rounded" id="thumbnail" value="{{ old('thumbnail') ?? $book->thumbnail }}">
            </div>
            @error('thumbnail')
                <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                    {{ $message }}
                </div>
            @enderror
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>