@extends('index')

@section('title', 'Home')

@section('content')

<div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/1800x900/?nature');">
    <div class="container">
        @if(Auth::user())
            <h1 class="display-4">Bem vindo, {{ Auth::user()->nickname}}!</h1>
            <p class="lead">Para o seu balcão único para gerenciamento de reservas.</p>
            <a href="/dashboard" class="btn btn-success btn-lg my-2">Visualize seu painel</a>
        @else
        <h1 class="display-3">Reservation management made easy.</h1>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam in quia natus magnam ducimus quas molestias velit vero maiores. Eaque sunt laudantium voluptas. Fugiat molestiae ipsa delectus iusto vel quod.</p>
            <a href="/login" class="btn btn-success btn-lg my-2">Sign Up for Access to Thousands of Hotels</a>
        @endif
    </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-sm-4">
         <div class="card">
            <div class="card-body">
              <h5 class="card-title">Conveniência</h5>
              <p class="card-text">Gerencie todas as suas reservas de hotel em um só lugar.</p>
            </div>
         </div>
      </div>
      <div class="col-sm-4">
         <div class="card">
            <div class="card-body">
                <h5 class="card-title">Melhores preços.</h5>
                <p class="card-text">Temos descontos especiais nos melhores hotéis.</p>
            </div>
         </div>
      </div>
      <div class="col-sm-4">
         <div class="card">
            <div class="card-body">
               <h5 class="card-title">Fácil de usar</h5>
               <p class="card-text">Reserve e gerencie com o clique de um botão.</p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
