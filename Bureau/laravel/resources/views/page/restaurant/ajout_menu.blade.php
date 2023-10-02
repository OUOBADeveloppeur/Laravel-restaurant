@extends('base')
@section('acceuil')
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Restaurant</a></li>
              <li class="breadcrumb-item active">Menu</li>
            </ol>
          </div>
@endsection
@section('menu')
<section class="col-lg-12 connectedSortable">
                <style> 
                  .img{
                   
                    text-align:  right;
                     bottom : 0 ; width : 100% ;
                     display :inline- block  ;
                
                    
                    
                    font-size : 15px ; 
                  }
                  .menu{
                    text-align: center; 
                    
                   
                  }
              </style>
                          <p class="menu">Quoi voulez vous commander?</p>

            <div class="card direct-chat direct-chat-primary img  " >
            <a href="{{route('ajoue_menu')}}" class="nav-link">
              <i></i>
              <img  class="nav-icon fas fa-th" src="dist/img/ajoue.jpg" weight="30px" height="30px" alt="bonjour">

            </a>
           
              
            </div>
</section>   

@endsection

