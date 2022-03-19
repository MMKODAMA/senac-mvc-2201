@extends('layouts.externo')
@section('title', 'Minha primeira view')

@section('sidebar')
    @parent
    
    <hr>
@endsection
@section('content')

   <table class="table">
       <thead>
           <tr>
               <td>ID</td>
               <td>Nome</td>
               <td>endereco</td>
               <td>telefone</td>
           </tr>
       </thead>
           @foreach($clientes as $cliente)
           <tr>
               <td>{{$cliente['id']}}</td>
               <td> {{$cliente['nome']}} </td>
               <td>  {{$cliente['endereco']}} </td>
               <td>  {{$cliente['telefone']}} </td>
            <tr>
           @endforeach
       </tr>
   </table>
@endsection