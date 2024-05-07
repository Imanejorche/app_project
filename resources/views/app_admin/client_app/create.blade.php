@extends('layouts.app')

@section('styles')
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color:#f0f0f0; 
            margin-bottom: 0 !important;
        } 

        .container {
            background: linear-gradient(120deg, #3bb78f, #0bab64);
            padding: 20px 40px;
            display: flex;
            justify-content: flex-end;
            height: 70px;
            margin-top:-65px;
            width: 200%;
            margin-left:-13px;
        }

        .btn-create-client,
        .btn-refresh {
            background-color: #2c8d6f;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
           
        }
        .btn-create-client:hover,
        .btn-refresh:hover {
            background-color: #1d6e52;
        }

        .for {
    background-color: white;
    color: black;
    padding: 30px;
    border-radius: 10px;
    width: 90%; /* Largeur du formulaire */
    margin: auto;
    margin-top: 21px;
    padding-top:25px;
    padding-bottom:83px;
    margin-left: 2%; /* Déplacer le formulaire vers la gauche */
    position: relative;
   /* Assurez-vous que les formulaires sont en arrière-plan */
    transition: transform 0.3s; /* Déplacer le formulaire vers la gauche */
}

.for h2 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    text-align: center;
}

.for .form-group {
    display: flex; /* Utiliser flexbox pour aligner les champs */
    flex-wrap: wrap; /* Permettre le retour à la ligne des champs */
}

.for .form-group .col-md-6 {
    flex: 0 0 50%; /* Chaque champ occupe 50% de la largeur */
    max-width: 50%; /* Chaque champ occupe 50% de la largeur */
    padding-right: 10px; /* Espacement entre les champs */
}

.cl {
     /* Chaque champ occupe 50% de la largeur */
    width: 380px; /* Chaque champ occupe 50% de la largeur */
   /* Espacement entre les champs */
}
 

.for label {
    color: #222; /* Couleur du texte du label */
    font-weight: bold;
    margin-bottom: 5px;
}

.for input[type="text"],
.for input[type="email"],
.for select {
    width: 100%; /* Largeur des champs de saisie */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: white;
    color: black;
    transition: border-color 0.3s; /* Transition pour la couleur du cadre */
}

.for input[type="text"]:focus,
.for input[type="email"]:focus,
.for select:focus {
    outline: none;
    border: 1px solid #2c8d6f;
}

.for input[type="text"]::placeholder,
.for input[type="email"]::placeholder {
    color: #999;
}

.for select {
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%232c8d6f'%3E%3Cpath d='M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
}

.for select::-ms-expand {
    display: none;
}

.for input[type="text"]:focus,
.for input[type="email"]:focus,
.for select:focus {
    border: 3px solid #2c8d6f;
    transition: border-color 0.5s; /* Transition pour la couleur du cadre */
}

.for-address {
    background-color: white;
    color: black;
    padding: 20px;
    border-radius: 10px;
    width: 105%; /* Largeur du formulaire */
    margin: auto;
    margin-top: 20px;
    margin-left: -6%; /* Déplacer le formulaire vers la gauche */
    position: relative;
   /* Assurez-vous que les formulaires sont en arrière-plan */
    transition: transform 0.3s;
}

.for-address h2 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    text-align: center;
}

.for-address .form-group {
    display: flex; /* Utiliser flexbox pour aligner les champs */
    flex-wrap: wrap; /* Permettre le retour à la ligne des champs */
}

.for-address .form-group .col {
    flex: 0 0 50%; /* Chaque champ occupe 50% de la largeur */
    max-width: 48.50%; /* Chaque champ occupe 50% de la largeur */
    padding-right: 10px; /* Espacement entre les champs */
}
.pass {
     /* Chaque champ occupe 50% de la largeur */
    width: 440px;
}

.for-address label {
    color: #222; /* Couleur du texte du label */
    font-weight: bold;
    margin-bottom: 5px;
}

.for-address input[type="text"],
.for-address select {
    width: 100%; /* Largeur des champs de saisie */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: white;
    color: black;
    transition: border-color 0.3s; /* Transition pour la couleur du cadre */
}

.for-address input[type="text"]:focus,
.for-address select:focus {
    outline: none;
    border: 1px solid #2c8d6f;
}

.for-address input[type="text"]::placeholder {
    color: #999;
}

.for-address select {
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%232c8d6f'%3E%3Cpath d='M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position-x: 100%;
    background-position-y: center;
}

.for-address select::-ms-expand {
    display: none;
}

.for-address input[type="text"]:focus,
.for-address input[type="email"]:focus,
.for-address select:focus {
    border: 3px solid #2c8d6f;
    transition: border-color 0.3s; /* Transition pour la couleur du cadre */
}

.form {
    background-color: white;
    color: black;
    padding: 20px;
    border-radius: 10px;
    width: 95%; /* Largeur du formulaire */
    margin: auto;
    margin-top: -95px;
    margin-left: 2.8%; /* Déplacer le formulaire vers la gauche */
    position: relative;
    /* Assurez-vous que les formulaires sont en arrière-plan */
    transition: transform 0.3s; /* Déplacer le formulaire vers la gauche */
}

.form h2 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    text-align: center;
}

.form .form-group {
    display: flex; /* Utiliser flexbox pour aligner les champs */
    flex-wrap: wrap; /* Permettre le retour à la ligne des champs */
}

.form .form-group .col {
    flex: 0 0 33.33%; /* Chaque champ occupe 33.33% de la largeur */
    max-width: 33.33%; /* Chaque champ occupe 33.33% de la largeur */
    padding-right: 10px; /* Espacement entre les champs */
}
.form .form-group .pol {
    flex: 0 0 50.33%; /* Chaque champ occupe 33.33% de la largeur */
    max-width: 49.90%; /* Chaque champ occupe 33.33% de la largeur */
    padding-right: 10px; /* Espacement entre les champs */
}

.form label {
    color: #222; /* Couleur du texte du label */
    font-weight: bold;
    margin-bottom: 5px;
}

.form input[type="text"],
.form input[type="email"],
.form select {
    width: 100%; /* Largeur des champs de saisie */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: white;
    color: black;
    transition: border-color 0.3s; /* Transition pour la couleur du cadre */
}

.form input[type="text"]:focus,
.form select:focus {
    outline: none;
    border: 1px solid #2c8d6f;
}

.form input[type="text"]::placeholder
{
    color: #999;
}

.form select {
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%232c8d6f'%3E%3Cpath d='M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
}

.form select::-ms-expand {
    display: none;
}

.form input[type="text"]:focus,
.form select:focus {
    border: 3px solid #2c8d6f;
    transition: border-color 0.5s; /* Transition pour la couleur du cadre */
}

.ima{
    
    display: flex;
    justify-content: space-around;

}

.contain {
    position: relative;
    height: 1000px;
}

.save-cancel-buttons {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 1; /* Assurez-vous que les boutons sont au-dessus des formulaires */
    padding: 10px;
    margin-top:-30px ;
    margin-right: 20px;
   
   
}
.btn-create-client{
    padding-top:10px;
    padding-bottom:11px;
}
.placeholder-option {
        color: #6c757d; /* Couleur grise */
    }


</style>

@endsection

@section('content')

<form action="{{ route('formdata') }}" method="post">
            @csrf
        <div class="contain">
        <div class="flex flex-col w-full h-screen px-4 py-8 mt-10">
    <div class="container">
    <div class="save-cancel-buttons">
    <button type="submit" class="btn-create-client" >Save</button>
    <button type="reset"  class="btn-refresh">Cancel</button>
    </div>
    </div>
    <div class="ima">
    <div class="row">
    <div class="col-md-6">
    <input type="hidden" name="form_type" value="client">
        <div class="for">
            <h2>Client Overview</h2>
                <div class="form-group row">
                    <div class="col-md-6">
                       
                        <input type="text" class="form-control" id="nom" name="nom"placeholder="Name" required><br><br>
                    </div>
                    <div class="col-md-6">
                       
                        <input type="text" class="form-control" id="numeroclient" name="numeroclient" placeholder="Client Number" required>
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-md-6">
                   <select class="form-control" id="statut" name="statut" placeholder="Status" required><br><br><br>
                         <option value="" disabled selected  class="placeholder-option">Status</option>
                          <option value="client">Client</option>
                          <option value="prospect">Prospect</option>
                          <option value="former client">Former Client</option>
                   </select>
               </div>
                    <div class="col-md-6">
                      
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Phone Number">
                    </div>
                </div><br>

                <div class="form-group">
                <div class="cl">
                       <input type="email" class="form-control" id="email" name="email" placeholder="Email" required><br><br>
                </div>
                </div>
                <div class="form-group">
                <div class="cl">
                    <input type="text" class="form-control" id="ntaxe" placeholder="Tax Number" name="ntaxe" required>
                </div>
                </div>
              
         
        </div>
    </div>
</div>

<div class="row">
            <div class="col-md-6">
                <div class="form-container">
                <input type="hidden" name="form_type" value="address">
                <div class="for-address">
                    <h2>Address Form</h2>
                    
                        <div class="form-group row">
                            <div class="col">
                                <input type="text" class="form-control" id="libaddr" name="libaddr"  placeholder="Address Label" required><br><br>
                            </div>
                            <div class="col">
                                <select class="form-control" id="typeaddr" name="typeaddr" placeholder="Address Type"  required>
                                    <option value="" disabled selected>Address Type</option>
                                   <option value="Delivery">Delivery</option>
                                   <option value="Billing and Delivery">Billing and Delivery</option>
                                   <option value="Billing">Billing</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                
                                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Phone"><br><br>
                            </div>
                            <div class="col">
                                
                                <input type="text" class="form-control" id="pays" name="pays"  placeholder="Country" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="pass">
                            <input type="text" class="form-control" id="addr1" name="addr1" placeholder="Address 1" required>
                         </div>
                        </div><br>
                        <div class="form-group">
                        <div class="pass">
                            <input type="text" class="form-control" id="addr2" name="addr2"  placeholder="Address 2">
                        </div>
                        </div><br>
                        <div class="form-group row">
                            <div class="col">
                                <input type="text" class="form-control" id="codepos" name="codepos" placeholder="Postal Code" >
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="ville" name="ville"  placeholder="City" required>
                            </div>
                        </div>
                   
                  </div>
                </div>
            </div>
        </div>
</div>

</div>


<div class="col-md-6">
    <input type="hidden" name="form_type" value="formation">
    <div class="form">
        <h2>Detailed Information</h2>
        <div class="form-group row">
            <div class="col">
                <select class="form-control" id="lieustock" name="lieustock" placeholder="Storage Location" required>
                   <option value="" disabled selected>Storage location</option>
                   <option value="main location">Main Location</option>
                </select>
            </div>
            <div class="col">
                 <select class="form-control" id="nivprix" name="nivprix" placeholder="Price Level" required>
                 <option value="" disabled selected>Price Level</option>
                    @foreach($prixs as $prix)
                        <option value="{{ $prix->nom }}">{{ $prix->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <select class="form-control" id="devise" name="devise" placeholder="Currency" required>
                <option value="" disabled selected>Currency</option>
                    @foreach($devises as $devise)
                        <option value="{{ $devise->devise }}">{{ $devise->devise }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <div class="col">
                <input type="text" class="form-control" id="remise" name="remise" placeholder="Discount">
            </div>
            <div class="col">
                <input type="text" class="form-control" id="montantcom" name="montantcom" placeholder="Minimum order amount">
            </div>
            <div class="col">
                <select class="form-control" id="typetaxe" name="typetaxe" placeholder="Tax Type" required>
                    <option value="" disabled selected>Tax Type</option>
                    <option value="taxes excluded">Taxes Excluded</option>
                    <option value="taxes included">Taxes Included</option>
                </select>
            </div>
            </div>
             <br>
            <div class="form-group row">
            <div class="pol">
                
         <select class="form-control" id="taxe" name="taxe" placeholder="Tax" required>
                     <option value="" disabled selected>Tax </option>
                    @foreach($taxes as $taxe)
                        <option value="{{ $taxe->nom }}">{{ $taxe->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="pol">
                <select class="form-control" id="jours" name="jours" placeholder="Default Payment Terms (days)" required>
                    <option value="" disabled selected>default payement terms (days)</option>
                    <option value="net">Net</option>
                    <option value="end of month">End of Month</option>
                </select>
            </div>
             </div><br>
             <div class="form-group row">
            <div class="pol">
                <input type="text" class="form-control" id="delais" name="delais" placeholder="Deadlines" required>
            </div>
            <div class="pol">
                <select class="form-control" id="langues" name="langues" placeholder="PDF languages" required>
                   <option value="" disabled selected>PDF languages</option>
                   <option value="english">English</option>
                   <option value="french">French</option>
                </select>
            </div>
        </div>
    </div>
</div>

</form>


@endsection
