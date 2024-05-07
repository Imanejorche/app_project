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
            background: linear-gradient(120deg, #ff5733, #f35b14);
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
            background-color:#be440ba0;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-left: 30px;
            margin-right:-20px;
            cursor: pointer;
           
        }
        .btn-create-client:hover,
        .btn-refresh:hover {
            background-color: #ff5733;
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
    padding-bottom:70px;
    
    margin-left: 3%; /* Déplacer le formulaire vers la gauche */
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
    width: 385px; /* Chaque champ occupe 50% de la largeur */
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
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ff5733'%3E%3Cpath d='M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position-x: 100%;
    background-position-y: center;
}



.for select::-ms-expand {
    display: none;
}

.for input[type="text"]:focus,
.for input[type="email"]:focus,
.for select:focus {
    border: 3px solid #be440ba0;
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
    margin-left: -4.5%; 
    ; /* Déplacer le formulaire vers la gauche */
    position: relative;
    padding-bottom:30px;
    padding-right:1px;
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
    max-width: 47.45%; /* Chaque champ occupe 50% de la largeur */
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
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ff5733'%3E%3Cpath d='M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z'/%3E%3C/svg%3E");
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
    border: 3px solid #be440ba0;
    transition: border-color 0.3s; /* Transition pour la couleur du cadre */
}

.form {
    background-color: white;
    color: black;
    padding: 20px;
    border-radius: 10px;
    width: 95%; /* Largeur du formulaire */
    margin: auto;
    margin-top: -220px;
    margin-left: 3.3%;
    padding-left: 30px;
    padding-right: 10px;
    position: relative;
    /* Assurez-vous que les formulaires sont en arrière-plan */
    transition: transform 0.3s; /* Déplacer le formulaire vers la gauche */
}


.form h2 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    text-align: start;
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
.form .form-group .ln {
    flex: 0 0 33.33%;
    max-width: 12.33%; 
    padding-right: 10px; 
}
  

    

.form .form-group .pol {
    flex: 0 0 50.33%; /* Chaque champ occupe 33.33% de la largeur */
    max-width: 26.90%; /* Chaque champ occupe 33.33% de la largeur */
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
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ff5733'%3E%3Cpath d='M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position-x: 100%;
    background-position-y: center;
}


.form select::-ms-expand {
    display: none;
}

.form input[type="text"]:focus,
.form select:focus {
    border: 3px solid #be440ba0;
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

.orange-bg {
        position: relative;
    }

    .orange-bg::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ff5733; /* Couleur orange */
        pointer-events: none; /* Assurez-vous que le pseudo-élément ne soit pas interactif */
        z-index: -1; /* Placez-le derrière le champ select */
        border-radius: inherit; /* Assurez-vous que le faux fond a le même arrondi que le champ select */
    }


  
    /* Ajoutez ces styles CSS à votre fichier CSS existant */

    .fob {
    background-color: white;
    color: black;
    padding: 20px;
    border-radius: 10px;
    width: 95%; /* Largeur du formulaire */
    margin: auto;
    margin-top: 15px;
    margin-left: 3.3%;
    padding-left: 30px;
    padding-right: 10px;
    position: relative;
    /* Assurez-vous que les formulaires sont en arrière-plan */
    transition: transform 0.3s; /* Déplacer le formulaire vers la gauche */
}

.fob h2 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    text-align:start ;
}

.fob .fob-group {
    display: flex; /* Utiliser flexbox pour aligner les champs */
    flex-wrap: wrap; /* Permettre le retour à la ligne des champs */
}

.fob .fob-group .pol,
.fob .fob-group .cool {
    flex: 0 0 calc(50% - 5px); /* Chaque champ occupe 50% de la largeur */
    max-width: calc(50% - 5px); /* Chaque champ occupe 50% de la largeur */
    position: relative;
}


.fob .fob-group .ln {
    flex: 0 0 33.33%;
    max-width: 12.33%; 
    padding-right: 10px; 
}
.fob .fob-group .pol {
    flex: 0 0 50.33%; /* Chaque champ occupe 33.33% de la largeur */
    max-width: 26.90%; /* Chaque champ occupe 33.33% de la largeur */
    padding-right: 10px; /* Espacement entre les champs */
}




.fob .fob-group .pol::after,
.fob .fob-group .cool::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ff5733; /* Couleur orange */
    pointer-events: none; /* Assurez-vous que le pseudo-élément ne soit pas interactif */
    z-index: -1; /* Placez-le derrière le champ select */
    border-radius: 5px; /* Assurez-vous que le faux fond a le même arrondi que le champ select */
}

.fob label {
    color: #222; /* Couleur du texte du label */
    font-weight: bold;
    margin-bottom: 5px;
}

.fob input[type="text"],
.fob select {
    width: 100%; /* Largeur des champs de saisie */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: white;
    color: black;
    transition: border-color 0.3s; /* Transition pour la couleur du cadre */
}

.fob input[type="text"]:focus,
.fob select:focus {
    outline: none;
    border: 1px solid #2c8d6f;
}

.fob input[type="text"]::placeholder {
    color: #999;
}

.fob select {
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ff5733'%3E%3Cpath d='M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position-x: 100%;
    background-position-y: center;
}

.fob select::-ms-expand {
    display: none;
}

.fob input[type="text"]:focus,
.fob select:focus {
    border: 3px solid #be440ba0;
    transition: border-color 0.5s; /* Transition pour la couleur du cadre */
}

.ima {
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
    margin-top: -30px;
    margin-right: 20px;
}

.btn-create-client {
    padding-top: 10px;
    padding-bottom: 11px;
}

    

</style>



@endsection

@section('content')

<form action="{{ route('formsav') }}" method="post">
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
            <h2>Product Overview</h2>
                <div class="form-group row">
                    <div class="col-md-6">
                       
                        <input type="text" class="form-control" id="podname" name="podname" placeholder="Product Name" required><br><br>
                    </div>
                    <div class="col-md-6">
                       
                       <input type="text" class="form-control" id="barecode" name="barecode" placeholder="barcode" required><br><br>
                   </div>
                    </div>
                <div class="form-group row">
                
                    <div class="cl">
                      
                        <input type="text" class="form-control" id="type" name="typr" placeholder="Product type">
                    </div>
                </div><br>
                  
         
        </div>
    </div>
</div>

<div class="row">
            <div class="col-md-6">
                <div class="form-container">
                <input type="hidden" name="form_type" value="address">
                <div class="for-address">
                <h2>Stock Management </h2>
                     <div class="form-group row">
                     <div class="col">
                              <input type="text" class="form-control" id="cout" name="cout" placeholder="Initial Cost" required>
                         </div>

                         <div class="col">
                         <select class="form-control" id="lieu" name="lieu" placeholder="Initial Stock Location" required>
                            <option value="" disabled selected>Initial Stock Location</option>
                            <option value="main location">Main Location</option>
                </select>
                    </div>
                         </div><br>
                  <div class="form-group">
                  <div class="pass">
                     <input type="text" class="form-control" id="niveau" name="niveau" placeholder="Initial Stock Level" required>
                  </div>
                 
            </div><br>
                      <div class="form-group">
               <div class="pass">
                   <input type="text" class="form-control" id="quantite" name="quantite" placeholder="Minimum Order Quantity" required>
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
        <h2>Sales Price</h2>
           @foreach($prixs as $prix)
        <div class="form-group row">
            <div class="pol">
             
                <input type="text" class="form-control" id="nivprix" name="prix" placeholder="{{ $prix->nom }}">
              
            </div>
           
            <div class="ln">
                <div class="custom-select-wrapper">
                    <select class="orange-bg" id="select-option" name="devise" required>
                       @foreach($devises as $devise)
                        <option value="option1">{{ $devise->devise }}</option>
                        @endforeach
                    </select>
                    <div class="custom-select-arrow">
                        <span></span>
                        <span></span>
                    </div>
                
                </div>
               
            </div>
            @endforeach
        </div>
      
    </div>
   
</div>

<div class="col-md-6">
    <input type="hidden" name="form_type" value="formation">
    <div class="fob">
        <h2>Sales Purchases</h2>
             @foreach($prix_achat as $pr)
        <div class="fob-group row">
        <div class="pol">
                <input type="text" class="form-control" id="titre" name="prix" placeholder="{{ $pr->nom }}">
            </div>
            <div class="ln">
                <div class="custom-select-wrapper">
                    <select class="orange-bg" id="select-option" name="devise" required>
                       @foreach($devises as $devise)
                        <option value="option1">{{ $devise->devise }}</option>
                       
                      @endforeach
                    </select>
                    <div class="custom-select-arrow">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
      @endforeach
<form>

@endsection
