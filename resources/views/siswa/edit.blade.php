@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data siswa </div>

                    <div class="card-body">
                        <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="">Nis</label>
                                <input type="text" name="nis" value="{{ $siswa->nis }}"
                                    class="form-control @error('nis') is-invalid @enderror">
                                @error('nis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Nama</label>
                                <textarea type="text"name="nama_siswa" class="form-control @error('nama_siswa') is-invalid @enderror">{{ $siswa->nama_siswa }}
                                </textarea>
                                @error('nama_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">alamat</label>
                                <textarea type="text"name="alamat_siswa" class="form-control @error('alamat_siswa') is-invalid @enderror">{{ $siswa->alamat_siswa }}
                                </textarea>
                                @error('alamat_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Tanggal lahir</label>
                                <textarea type="date"name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">{{ $siswa->tgl_lahir }}
                                </textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection