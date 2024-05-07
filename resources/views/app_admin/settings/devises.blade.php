@extends('layouts.app')

@section('styles')

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        } 

        .container {
            background:   #df5833;
            padding: 20px 40px;
            display: flex;
            justify-content: flex-end;
            height: 80px;
            width:100%;
            margin-left:-6px;
            margin-top:-65px;
        } 

        .btn-create-client,
        .btn-refresh {
            background-color: #bd3b04d1;
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
            background-color:   #9b3607;
        }

        .table-container {
            margin-top: 50px;
            width:800px;
            margin-left:100px;
        }

        .table {
            width: 100%;
            background-color: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: black; /* Couleur du texte */
        }

        .table th,
        .table td {
            padding: 8px 10px;
            border-bottom: 1px solid #ddd; /* Bordure inférieure */
        }
        .table td {
            padding-left:51px;
        }

        .table th {
            background-color: #f2f2f2;
            color: #333; /* Couleur du texte des titres */
            font-weight: bold;
            text-align: left;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9; /* Fond gris clair pour les lignes paires */
        }

        .table tr:hover {
            background-color: #f2f2f2; /* Fond gris clair au survol */
        }

        .table td a {
            color: #2c8d6f; /* Couleur des liens */
            text-decoration: none;
            margin-right: 5px;
        }

        .table td a:hover {
            text-decoration: underline;
        }
        
    </style>

@endsection

@section('content')

   <div class="flex flex-col w-full h-screen px-4 py-8 mt-10">
    <div class="container">
        <a href="{{ route('createdevise') }}" class="btn-create-client">Create Currency</a>
    </div>

    <div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>Currency</th>
                <th>Exchange Rate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devises as $devise)
                <tr>
                    <td>{{ $devise->devise }}</td>
                    <td>{{ $devise->tauxchange }}</td>
                    <td style="display: flex; align-items: center; margin-left: -30px;">
                        <form action="{{ route('devise.destroy', $devise->id) }}" method="POST" style="margin-right: 10px;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; padding: 0; margin: 0;">
                                <img src="{{ asset('images/delete3.png') }}" alt="delete" style="width: 18px; margin-top: 7px; margin-right:10px; margin-left:-10px" />
                            </button>
                        </form>
                        <a href="{{ route('showdevise', $devise->id) }}"><img src="{{ asset('images/update2.png') }}" alt="update" style="width: 21px; margin-right:20px"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
