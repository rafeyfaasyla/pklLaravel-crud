@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Siswa
                        <a href="{{ route('nilai.create') }}"
                            class="btn btn-sm btn-primary" style="float: right;">Add Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Nilai</th>
                                        <th>Grade</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($nilai as $data)
                                        <tr>
                                        <td>{{ $no++ }}</td>
                                            <td>{{ $data->nis }}</td>
                                            <td>{{ $data->nama_siswa }}</td>
                                            <td>{{ $data->nilai }}</td>
                                            <td>{{ $data->indeks_nilai }}</td>
                                            <td>
                                                <form action="{{ route('nilai.destroy', $data->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('nilai.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">Edit
                                                    </a> |
                                                    <a href="{{ route('nilai.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-info">Show
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Are You Sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection