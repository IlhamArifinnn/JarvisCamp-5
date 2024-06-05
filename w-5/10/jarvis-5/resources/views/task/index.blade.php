@extends('template')
@section('content')
    <div class="container">
        <h2 class="text-center mt-3">Daftar Tugas</h2>
        <hr>

        <div class="row">
            @foreach ($tasks as $task)
                <div class="col-12 col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 class="card-title">{{ $task['name'] }}</h4>
                            <small>Deadline: {{ \Carbon\Carbon::parse($task['deadline'])->format('d F Y') }}</small><br>
                            <span class="badge bg-warning">{{ $task['status'] }}</span>
                            <p class="card-text">{{ Str::limit($task['description'], 40, '...') }}</p>

                            <!-- Updated snippet of resources/views/tasks/index.blade.php -->
                            <div class="mt-2">
                                <a href="{{ route('task.detail', $task['id']) }}" class="btn btn-primary">Detail</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>
