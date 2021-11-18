<div class="card-body">
    <div class="form-group">
        <label for="nama_category">Category name</label>
        <input type="text" name="nama_category" class="form-control @error('nama_category') is-invalid @enderror" id="nama_category" placeholder="Enter category name" value="{{ old('name_category') ?? $category->nama_category }}">
        @error('nama_category')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="deskripsi">Description</label>
        <textarea  type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Enter description">
            {{ old('deskripsi') ?? $category->deskripsi }}
        </textarea>
        @error('deskripsi')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    {{-- <div class="form-group">
        <label for="created_by">Created by</label>
        <input type="date" name="created_by" class="form-control @error('created_by') is-invalid @enderror" id="created_by" placeholder="Enter nrp" value="#" required autofocus>
        @error('created_by')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div> --}}
    <!-- /.card-body -->
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>