@extends('layouts.default')
@section('title', 'Loja')

@section('sidebar')
    @parent
    <hr>
@endsection

@section('content')

   <table class="table">
       <tr><td>Popular Products</td><tr>

           @foreach($produtos as $produto)

          
           @if($produto->id%2)
           <!--<img src="$produtos['img']" > -->
           <tr><td>Produto#{{$produto['id']}}<br>{{$produto['nome']}} <tr></td>

           @else
           <h3> ######### </h3>
           @endif

           @endforeach

       </tr>
   </table>
@endsection