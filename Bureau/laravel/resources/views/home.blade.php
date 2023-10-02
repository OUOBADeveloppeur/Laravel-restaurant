@extends('base')
@section('connecte')
<li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    inscrire
                    <i class="fas fa-angle-left right"></i>
                   
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('register')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>proprietaire </p>
                    </a>
                    <a href="{{route('client')}}" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>client </p>
                    </a>
                  </li>
                </ul>
              </li>
            <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                           <p>
                             connecter
                        <i class="fas fa-angle-left right"></i>
                           </p>
                    </a>
                         <ul class="nav nav-treeview">


                           <li class="nav-item">
                             <a href="{{route('login')}}" class="nav-link">
                               <i class="far fa-circle nav-icon"></i>
                               <p>proprietaire </p>
                             </a>
                             <a href="{{route('login')}}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>client </p>
                               </a>
                           </li>

                         </ul>
                       </li>
 @endsection