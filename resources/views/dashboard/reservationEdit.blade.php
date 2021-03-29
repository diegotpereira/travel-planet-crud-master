@extends('index')

@section('title', 'Edit Reservation')

@section('content')

<div class="conatiner">
   <div class="card my-5">
      <div class="card-header">
         <h2>{{ $hotelInfo->nome }} - <small class="text-muted">{{ $hotelInfo->localizacao }}</small></h2>
      </div>
      <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">Reserve já a sua estadia no resort mais magnífico do mundo!.</p>
          <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="row">
                <div class="col-sm-8">
                <div class="form-group">
                    <label for="room">Tipo de quarto</label>
                    <select class="form-control" name="room_id" value="{{ old('room_id', $reservation->room_id) }}">
                        @foreach ($hotelInfo->rooms as $option)
                            <option value="{{$option->id}}">{{ $option->tipo }} - ${{ $option->preco }}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="convidados">Número de convidados</label>
                        <input class="form-control" name="numero_convidados" value="{{ old('numero_convidados', $reservation->numero_convidados) }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="chegada">Chegada</label>
                    <input type="date" class="form-control" name="chegada" placeholder="00/00/0000" value="{{ old('chegada', $reservation->chegada) }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="partida">Partida</label>
                    <input type="date" class="form-control" name="partida" placeholder="00/00/0000" value="{{ old('partida', $reservation->partida) }}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btnlg btn-primary">Submit</button>
        </form>
      </div>
   </div>
   <form action="{{ route('reservations.destroy', $reservation->id) }" method="POST">
        @method('DELETE')
        @csrf
        <p class="text-right">
            <button type="submit" class="btn btn-sm text-danger">Deletar Reserva</button>
        </p>
    </form>
</div>
@endsection
