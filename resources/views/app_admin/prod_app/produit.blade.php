@extends('layouts.app')

@section('styles')

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .container {
        background: linear-gradient(120deg, #ff5733, #f35b14);
        padding: 20px 40px;
        display: flex;
        justify-content: flex-end;
        height: 79px;
        margin-left: -5px;
        margin-top: -65px;
        width: 105%;
        margin-left: -13px;
    }

    .btn-create-client,
    .btn-refresh {
        background-color: #be440ba0;/* Couleur orange */
        color: white;
        padding: 10px 0; /* Ajustement de la hauteur des boutons */
        border: none;
        border-radius: 5px;
        width: 150px; /* Largeur des boutons */
        margin-left: 10px;
        cursor: pointer;
        text-align: center;
    }

    .btn-create-client:hover,
    .btn-refresh:hover {
        background-color: #ff5733;/* Changement de couleur au survol */
    }
</style>

@endsection

@section('content')

<div class="flex flex-col w-full h-screen px-4 py-8 mt-10">
    <div class="container">
        <a href="{{ route('prodCR') }}" class="btn-create-client">Create Product</a>
        <button class="btn-refresh">Refresh</button>
    </div>
</div>

@endsection
