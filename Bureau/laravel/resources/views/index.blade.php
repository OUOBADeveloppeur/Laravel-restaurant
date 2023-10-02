
          @extends('base')
          <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
            @section('user')

            <div class="font-medium text-base text-gray-800">M.{{ Auth::user()->Nom }}
            
            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Deconnexion') }}
                            </x-dropdown-link>
                        </form>
            </div>
            @endsection
           
                
               

            </div>
          @section('form')
          <li class="nav-item">
            <a href="{{route('register')}}" class="nav-link">
              <i></i>
              <img  class="nav-icon fas fa-th" src="dist/img/ajoue.jpg" weight="20px" height="20px" alt="bonjour">

            </a>
          </li>

          @endsection
    @section('acceuil')
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active">page1</li>
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
        
      
