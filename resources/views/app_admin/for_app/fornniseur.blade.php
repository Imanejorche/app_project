@extends('layouts.app')

@section('styles')

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        } 

        .container {
            background: linear-gradient(120deg, #3bb78f, #0bab64);
            padding: 20px 40px;
            display: flex;
            justify-content: flex-end;
            height: 79px;
            margin-left:-5px;
            margin-top:-65px;
            width:  105%;
            margin-left:-13px;

            
        } 

        .btn-create-client,
        .btn-refresh {
            background-color: #2c8d6f;
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
            background-color: #1d6e52;
        }

        .table-container {
            margin-top: 50px;
        }

        .table {
            width: 100%;
            background-color: white;
            padding: 20px;
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
            padding-left:45px;
        }

        .table th {
            background-color: #f2f2f2;
            
            /* Fond gris clair pour les en-têtes */
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
        <a href="{{ route('forCR') }}" class="btn-create-client">Create Provider</a>
        <button class="btn-refresh">Refresh</button>
    </div>

    <div class="table-container">
    <table class="table">
        <thead>
            <tr>
               
                <th >Provider Number</th>
                <th >Name</th>
                <th  >Email</th>
                <th >Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fors as $for)
              
                    @php
                        $adresse = App\Models\Addressefor::where('for_id', $for->numerofor)->first();
                    @endphp
                <tr>
                   
                    <td >{{ $for->numerofor }}</td>
                    <td  >{{ $for->nom }}</td>
                    <td >{{ $for->email }}</td>
                    <td >{{ $adresse ? $adresse->pays : '' }}</td>

                    <td style="display: flex; align-items: center; margin-left: 60px;">
                        <form action="{{ route('for.destroy', $for->id) }}" method="POST" style="margin-right: 10px;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; padding: 0; margin: 0;">
                                <img src="{{ asset('images/delete.png') }}" alt="delete" style="width: 24px; margin-top: 7px; margin-right:10px; margin-left:10px" />
                            </button>
                        </form>
                        <a href="{{ route('showfor',$for->id) }}"><img src="{{ asset('images/crayon.png') }}" alt="update" style="width: 18px; margin-right:30px"></a>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>
</div>


@endsection
