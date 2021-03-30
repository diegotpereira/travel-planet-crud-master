@extends('index')

@section('title', 'Edit Reservation')

@section('content')

<div class="container">
    <div class="card my-5">
       <div class="card-header">
          <h2>Está tudo reservado para você {{ $hotelInfo->nome }} in {{ $hotelInfo->localizacao }} !</h2>
       </div>
       <div class="card-body">
          <div class="card-body">
              <div class="row">
                 <div class="col-sm-6">
                    <img src="{{ $hotelInfo->imagem }}" class="img-fluid" alt="Front of hotel">
                 </div>
                 <div class="col-sm-6">
                   <h3 class="card-title">
                       {{ $hotelInfo->nome }} - <small>{{ $hotelInfo->localizacao }}</small>
                   </h3>
                   <p class="card-text">{{ $hotelInfo->descricao }}</p>
                   <p class="card-text"><strong>Chegada: </strong>{{ $reservation->chegada }}</p>
                   <p class="card-text"><strong>Partida: </strong>{{ $reservation->partida }}</p>
                   <p class="card-text"><strong>Quarto: </strong>{{ $reservation->room['tipo'] }}</p>
                   <p class="card-text"><strong>Convidados: </strong>{{ $reservation->numero_convidados }}</p>
                   <p class="card-text"><strong>Preço: </strong>{{ $reservation->room['preco'] }}</p>
                 </div>
              </div>

              <div class="text-center mt-3">
                  <a href="/dashboard/reservations/{{ $reservation->id }}/edit" class="btn btn-lg btn-success">Alterar sua reserva.</a>
                  <a href="/dashboard/reservations/{{ $reservation->id }}/delete" class="btn btn-lg btn-danger">Deletar</a>
              </div>
          </div>
       </div>
    </div>
</div>
@endsection
