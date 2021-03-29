@extends('index')

@section('title', 'Create reservation')

@section('content')

<div class="container my-5">
   <div class="card">
      <div class="card-header">
         <h2>{{ $hotelInfo->nome }} - <small class="text-muted">{{ $hotelInfo->localizacao }}</small></h2>
      </div>
      <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">Reserve já a sua estadia no resort mais magnífico do mundo!.</p>
          <form action="{{ route('reservations.store') }}" method="POST">
             @csrf
             <div class="row">
                <div class="col-sm-8">
                   <div class="form-group">
                      <label for="room">Tipo de Quarto</label>
                      <select class="form-control" name="room_id">
                         @foreach ($hotelInfo->rooms as $option)
                            <option value="{{$option->id}}">{{ $option->tipo }} - ${{ $option->preco }}</option>
                         @endforeach
                      </select>
                   </div>
                </div>
                <div class="col-sm-4">
                   <div class="form-group">
                      <label for="convidados">Número de convidados</label>
                      <input class="form-control" name="numero_convidados" placeholder="1">
                   </div>
                </div>

                <div class="col-sm-6">
                   <div class="form-group">
                      <label for="chegada">Chegada</label>
                      <input type="date" class="form-control" name="chegada" placeholder="00/00/0000">
                   </div>
                </div>
                <div class="col-sm-6">
                   <div class="form-group">
                       <label for="partida">Partida</label>
                       <input type="date" class="form-control" name="partida" placeholder="00/00/0000">
                   </div>
                </div>
             </div>
             <button type="submit" class="btn btn-lg btn-primary">Agende</button>
          </form>
      </div>
   </div>
</div>
@endsection
