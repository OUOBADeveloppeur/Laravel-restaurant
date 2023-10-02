@extends('base')
@section('acceuil')
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active">pharmatie</li>
            </ol>
          </div>
          @endsection
          
      <section class="col-lg-12 connectedSortable">
        <div class="row">
            @section('contenu')
            <div class="card-deck">
              <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card">
                  <img class="card-img-top"src="dist/img/in.jpg" weight="100px" height="200px" alt="bonjour">
                  <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with  bit longer.</p>
                  <a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary</a>
                  <a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
                  </div>
                </div>  
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card">
                  <img class="card-img-top"src="dist/img/in.jpg" weight="100px" height="200px" alt="bonjour">
                  <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with  bit longer.</p>
                  <a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary</a>
                  <a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
                  </div>
                </div>  
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card">
                  <img class="card-img-top"src="dist/img/in.jpg" weight="100px" height="200px" alt="bonjour">
                  <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with  bit longer.</p>
                  <a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary</a>
                  <a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
                  </div>
                </div>  
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card">
                  <img class="card-img-top"src="dist/img/in.jpg" weight="100px" height="200px" alt="bonjour">
                  <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with  bit longer.</p>
                  <a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary</a>
                  <a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
                  </div>
                 
                </div>  
            </div>
            
           </div>
      </div>
 
   </section>     
        @endsection
        
