@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Siswa </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label for="">nis</label>
                            <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">nama</label>
                            <textarea type="text"name="nama" class="form-control" readonly>{{ $siswa->nama_siswa }} </textarea>

                        </div>
                        <div class="mb-3">
                            <label for="">alamat siswa</label>
                            <textarea type="text"name="alamat_siswa" class="form-control" readonly>{{ $siswa->alamat_siswa }} </textarea>

                        </div>
                        <div class="mb-3">
                            <label for="">tanggal lahir</label>
                            <textarea type="text"name="tgl_lahir" class="form-control" readonly>{{ $siswa->tgl_lahir }} </textarea>

                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('post.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection