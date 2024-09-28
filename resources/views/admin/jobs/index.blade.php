@extends('layouts.app')

@section('content')
    <h1>Elenco di tutti i lavori</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descizione</th>
                <th scope="col">Tempo di lavorazione WEEK</th>
                <th scope="col">Data di inserimento</th>
                <th class="table-dark" scope="col">azioni</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
                <tr>
                    <td>{{ $job->id }}</td>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->content }}</td>
                    <td>{{ $job->processing_time }}</td>
                    <td>{{ $job->created_at->format('d / m / Y') }}</td>
                    <td class=" table-dark ">
                        <a href="{{ route('admin.jobs.show', ['job' => $job->id]) }}"
                            class="btn btn-outline-primary ">Dettagli</a>
                        <a href="{{ route('admin.jobs.edit', ['job' => $job->id]) }}"
                            class="btn btn-outline-warning align-content-around">Modifica</a>
                        <form action="{{ route('admin.jobs.destroy', ['job' => $job->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Elimina" class="btn btn-outline-danger">
                        </form>

                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
