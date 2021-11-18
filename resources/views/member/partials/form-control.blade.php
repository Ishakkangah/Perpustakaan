<div class="card-body">
    <div class="form-group">
        <label for="nim">NRP</label>
        <input type="number" name="nim" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Enter nrp" value="{{ old('nim') ?? $member->nim }}" required autofocus>
        @error('nim')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="nama">Name</label>
        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Enter name" value="{{ old('nama') ?? $member->nama }}" required autofocus>
        @error('nama')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jenis_kelamin_id">Gender</label>
        <select type="text" name="jenis_kelamin_id" class="form-control @error('jenis_kelamin_id') is-invalid @enderror" id="jenis_kelamin_id" placeholder="Enter gender" required autofocus>
            <option disabled selected> ~ Choose one ~</option>   
            @foreach ($jenis_kelamins as $jenis_kelamin)
                <option {{ $jenis_kelamin->id == $member->jenis_kelamin_id ? 'selected' : '' }} value="{{ $jenis_kelamin->id }}">{{ $jenis_kelamin->nama }}</option>
            @endforeach
        </select>
        @error('jenis_kelamin_id')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="kelas_id">Class</label>
        <select type="text" name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror" id="kelas_id" placeholder="Enter class" required autofocus>
            <option disabled selected> ~ Choose one ~</option>   
            @foreach ($kelass as $kelas)
                <option {{ $kelas->id == $member->kelas_id ? 'selected' : '' }} value="{{ $kelas->id }}">{{ $kelas->nama }}</option>
            @endforeach
        </select>
        @error('kelas_id')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="tempat_tanggal_lahir">Place, date of your birth</label>
        <input type="text" name="tempat_tanggal_lahir" class="form-control @error('tempat_tanggal_lahir') is-invalid @enderror" id="tempat_tanggal_lahir" placeholder="Enter tempat_tanggal_lahir" value="{{ old('tempat_tanggal_lahir') ?? $member->tempat_tanggal_lahir }}" required autofocus>
        @error('tempat_tanggal_lahir')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="alamat">Address</label>
        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Enter alamat" value="{{ old('alamat') ?? $member->alamat }}" required autofocus>
        @error('alamat')
            <div class="alert alert-danger"><i class="far fa-times-circle"></i>
                {{ $message }}
            </div>
        @enderror
    </div>
    
    <label for="thumbnail">File input  image</label>
    <div class="form-group">
            <div class="col-md-3">
                @if($member->thumbnail)
                <img src="{{ asset('storage/' . $member->thumbnail ) }}" class="card-img-top rounded">
                @endif
            </div>
            <div class="col-md-9">
                <input type="file" name="thumbnail" class="file-input rounded" id="thumbnail" value="{{ old('thumbnail') }}">
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