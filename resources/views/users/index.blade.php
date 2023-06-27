@extends('app')
@section('title' , 'Titre')
@section('content')
 <h2>Liste des Users</h2>
 <a href="{{ route('users.create') }}">Ajouter un utilisateur</a>
 <users-list/>
@endsection
