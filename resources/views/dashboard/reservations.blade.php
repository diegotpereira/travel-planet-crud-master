@extends('index')

@section('title', 'Reservations')

@section('content')

<div class="container mt-5">
   <h2>Sua reservas.</h2>
   <table class="table mt-3">
      <thead>
           <tr>
           <th scope="col">Hotel</th>
           <th scope="col">Chegada</th>
           <th scope="col">Partida</th>
           <th scope="col">Tipo</th>
           <th scope="col">Convidados</th>
           <th scope="col">Preço</th>
           <th scope="col">Gerente</th>
           </tr>
      </thead>
      <tbody>
          @foreach ($reservations as $reservation)
          <tr>
             <td>{{ $reservation->room->hotel['nome'] }}</td>
             <td>{{ $reservation->chegada }}</td>
             <td>{{ $reservation->partida }}</td>
             <td>{{ $reservation->room['tipo'] }}</td>
             <td>{{ $reservation->numero_convidados }}</td>
             <td>${{ $reservation->room['preco'] }}</td>

             <td><a href="/dashboard/reservations/{{ $reservation->id }}/edit" class="btn btn-sm btn-success">Editar</a></td>
          </tr>
          @endforeach
      </tbody>
   </table>

   @if(!empty(Session::get('success')))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
   @endif

   @if(!empty(Session::get('error')))
       <div class="alert alert-danger">{{ Session::get('error') }}</div>
   @endif
</div>
@endsection
