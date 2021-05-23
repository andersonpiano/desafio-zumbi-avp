@extends('layouts.template')
@section('title', 'recurso')
@section('content')
<?php
$estoque = number_format($recurso->quantidade, 2, ',', '.');
?>
<div class="jumbotron">
  <h1 class="display-4"><?php echo $recurso->descricao; ?> </h1>
  <p class="lead"><?php echo $recurso->observacao; ?> - Estoque: <?php echo $estoque; ?></p>
  <hr class="my-4">
  <p><?php echo $recurso->descricao; ?></p>
  <a class="btn btn-primary btn-lg" href="{{route('recursos')}}" role="button">Outros recursos</a>
</div>
@endsection