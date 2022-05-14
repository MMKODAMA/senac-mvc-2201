@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Clientes</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('clientes.create') }}"> + Novo Cliente</a>
        </div>
    </div>
</div>

<br>

@if ($message = Session::get('success'))

<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>

@endif


<table class="table table-bordered">

 <tr>
   <th>ID</th>
   <th>Nome</th>
   <th>Email</th>
   <th>endereco</th>
   <th>telefone</th>
   <th width="280px">Ação</th>
 </tr>

 @foreach ($data as $key => $cliente)

  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $cliente->name }}</td>
  <td>{{$cliente->email}}</td>
    <td>{{ $cliente->endereco }}</td>
    <td>{{$cliente->telefone}}</td>
  </tr>

 @endforeach

</table>

{!! $data->render() !!}

@endsection
