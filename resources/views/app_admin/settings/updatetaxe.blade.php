@extends('layouts.app')

@section('styles')
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        background: #df5833;
        flex-direction: column;
        align-items: flex-end;
        margin-right: 2px;
        height: 70px;
        margin-top: 0;
    }

    .create-button {
        background: #bd3b04d1;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        margin-left: 40px;
        margin-top: 10px;
        margin-right: 40px;
        cursor: pointer;
    }

    .create-button a {
        text-decoration: none;
        color: white;
    }

    .form-container {
        max-width: 900px;
        width: 60%;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 80px;
        margin-right: 200px;
        
    }

    .form-container label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .form-group label {
        width: 40%;
    }

    .form-group input[type="text"],
    .form-group select {
        width: 60%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group input[type="text"]:focus,
    .form-group select:focus {
    
        outline: none;
        border: 2px solid #bd3b04d1;
    }

    .form-container button {
        background-color: #bd3b04d1;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        margin-left:490px;
        cursor: pointer;
        width:100px;
        
    }

    .form-container button:hover {
        background-color: #8a2b06;
    }

    h2{
        margin-right:300px;
    }
   
</style>
@endsection

@section('content')

<div class="container">
    
    <div class="create-button">
        <button type="reset">Cancel</button>
    </div>
    

    <div class="form-container">
        <form action="{{ route('taxe.update',$taxe->id) }}" method="post">
            @csrf
            @method("PUT")
            
            <div class="form-group">
                <label for="exchange_rate">Name:</label>
                <input type="text" id="nom" name="nom" placeholder="Name " step="0.01" value="{{ $taxe->nom }}" required>
            </div>

            <input type="hidden" name="form_type" value="client">
            <div class="form-group">
                <label for="exchange_rate">Abbreviation:</label>
                <input type="text" id="tr" name="tr" placeholder="TX " step="0.01" value="{{ $taxe->tr }}" required>
            </div>
            <div class="form-group">
                <label for="exchange_rate">Tax Rate</label>
                <input type="text" id="taux_de_taxe" name="taux_de_taxe" placeholder="Taxe Rate" step="0.01" value="{{ $taxe->taux_de_taxe }}" required>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
