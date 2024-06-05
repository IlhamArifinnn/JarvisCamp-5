@extends('template')
@section('content')
    <div class="container">
        <h1>Daftar Tabel Tugas</h1>

        <div class="card mt-3">
            <div class="card-header">
                <h3>Data Tabel</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Deadline</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->status->name }}</td>
                                    <td>{{ $task->deadline }}</td>
                                    <td>{{ substr($task->description, 0, '50') }}...</td>
                                    <td class="d-flex">
                                        <a href="{{ route('tasks.edit', $task->id) }}"
                                            class="btn btn-warning btn-sm mb-2 me-2">Edit</a>
                                        <form action="{{ route('tasks.delete', $task->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus task ini?');">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm mb-2">Hapus</button>
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
@endsection
