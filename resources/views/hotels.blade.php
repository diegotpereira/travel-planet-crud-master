@extends('index')

@section('title', 'Hotels')

@section('content')

<div class="container my-5">
    <div class="row">
       @foreach($hotels as $hotel)
       <div class="col-sm-4">
           <div class="card mb-3">
               <div style="background-image:url('{{ $hotel->image }}');height:300px;background-size:cover;" class="img-fluid" alt="Front of hotel"></div>
               <div class="card-body">
                  <h5 class="card-title">{{ $hotel->nome }}</h5>
                  <small class="text-muted">{{ $hotel->localizacao }}</small>
                  <p class="card-text">{{ $hotel->descricao }}</p>
                  <a href="/dashboard/reservations/create/{{ $hotel->id }}" class="btn btn-primary">Agende agora</a>
               </div>
           </div>
       </div>
       @endforeach
    </div>
</div>
@endsection
