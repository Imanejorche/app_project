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
        width:100%;
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

    .form-group input[type="number"],
    .form-group select {
        width: 60%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group input[type="number"]:focus,
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
    

</style>
@endsection

@section('content')
<div class="container">
    <div class="create-button">
        <button type="reset">Cancel</button>
    
    </div>
    
    <div class="form-container">
        <form action="{{ route('savedevise') }}" method="post">
            @csrf
            <input type="hidden" name="form_type" value="client">
            <div class="form-group">
                <label for="currency">New Currency:</label>
                <select id="devise" name="devise" required>
                    <option value="MAD">Dirham</option>
                    <option value="USD">Dollar</option>
                     <option value="EUR">Euro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exchange_rate">Exchange Rate:</label>
                <input type="number" id="tauxchange" name="tauxchange" placeholder="Enter exchange rate" step="0.01" required>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
</div>
@endsection

