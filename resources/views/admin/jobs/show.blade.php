 @extends('layouts.app')

 @section('content')
     <h1>dettagli lavoro</h1>
     <div class="container-fluid m-4">
         <ul>
             <li><strong>Titolo:</strong> {{ $job->title }}</li>
             <li><strong>Descrizione:</strong> {{ $job->content }}</li>
             <li><strong>Tempo di realizzazione:</strong> {{ $job->processing_time }} settimane</li>
         </ul>

     </div>
     <a class="btn btn-primary" href="{{ route('admin.jobs.index') }}">Torna all'elenco</a>
 @endsection
