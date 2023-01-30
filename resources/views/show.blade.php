@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1>

    <div class="text-center mt-3 mb-4">
    <a href="">
        <button class="btn btn-success">Cadastrar</button>
    </div>
    <div class="col-8 m-auto">
    @php
        $user=$book->find($book->id)->relUsers;
    @endphp
        Título: {{$book->title}} <br>
        Paginas: {{$book->pages}} <br>
        Preço: {{$book->price}} <br>
        Autor: {{$user->name}}<br>
        Email do autor: {{$user->email}}<br>
    </div>
@endsection
