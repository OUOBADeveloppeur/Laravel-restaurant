<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
<!---formulaire pour ajouter un Menu-->
    <title>{{config('app.name')}}</title>
</head>
<body>
<div class="container">
             <h1 style="text-align:center;">Menu</h1>
             <form class="needs-validation" method="POST" novalidate action="{{route('storemenu')}}">
                 <div class="form-row">
                     <div class="col-md-4 mb-3">
                         <div class="form-group">
                             <label for="fichier">Image</label>
                              <input type="file" class="form-control-file" id="fichier">
                             <div class="valid-feedback">Ok !</div>
                        </div>  
                     </div>
                     <div class="col-md-4 mb-3">
                         <label for="nom">Titre</label>
                         <input type="text" class="form-control" id="nom" placeholder="Titre" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     
                     <div class="col-md-4 mb-3">
                         <label for="pseudo">Description</label>
                         <input type="text" class="form-control" id="pseudo" placeholder="Description" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                 </div>
                 <div class="col-md-4 mb-3">
                         <label for="prix">Prix</label>
                         <input type="text" class="form-control" id="prix" placeholder="PRIX" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                 
                 <div class="form-group">
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="" id="cgu" required>
                       <label class="form-check-label" for="cgu">J'accepte les conditions générales d'utilisation et de vente</label>
                       <div class="invalid-feedback">Vous devez accepter les regles pour continuer</div>
                     </div>
                 </div>
                 <button class="btn btn-primary" type="submit">Envoyer</button>
                 <a class="btn btn-primary"  href="{{route('ajouter')}}">Retour</a>
               
             </form>
         </div>
         <script>
           /*La fonction principale de ce script est d'empêcher l'envoi du formulaire si un champ a été mal rempli
            *et d'appliquer les styles de validation aux différents éléments de formulaire*/
           (function() {
             'use strict';
             window.addEventListener('load', function() {
               let forms = document.getElementsByClassName('needs-validation');
               let validation = Array.prototype.filter.call(forms, function(form) {
                 form.addEventListener('submit', function(event) {
                   if (form.checkValidity() === false) {
                     event.preventDefault();
                     event.stopPropagation();
                   }
                   form.classList.add('was-validated');
                 }, false);
               });
             }, false);
           })();
         </script>
         <section class="col-lg-12 connectedSortable">
          <div class="row">
          <style>
                  
                  footer{
                  text-align : center ; 
                bottom : 0 ; width : 100% ;
               display :inline- block ; vertical-align : top ;
              font-size : 15px ; 
                  }
                
              </style>
            
            <footer class="main-footer">
           

               <div class="text-center ">
                  <p> &copy; Copyright {{ date('Y') }}  &middot;Ma solution. Tout droit reservé </p>
    
                </div>
            </footer>
          </div>
           </section>   
</body>
</html>