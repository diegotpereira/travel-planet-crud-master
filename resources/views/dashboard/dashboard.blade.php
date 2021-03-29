@extends('index')

@section('title', 'Dashboard')

@section('content')

<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
           <div class="card">
              <div class="card-body">
                 <h4 class="card-title">Gerencia suas reservas.</h4>
                 <p class="card-text">Modifique suas reservas atuais.</p>
                 <a href="/dashboard/reservations" class="btn btn-primary">Minhas reservas.</a>
              </div>
           </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                   <h4 class="card-title">Encontre um quarto.</h4>
                   <p class="card-text">Navegue em nosso catálogo de hotéis bem avaliados.</p>
                   <a href="/hotels" class="btn btn-primary">Seus Hoteis.</a>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
