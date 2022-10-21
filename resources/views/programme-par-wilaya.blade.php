@extends('layouts.master')
<style>
      tbody td
      {
        cursor: pointer;
        
      }
    
    </style>
@section('content')


<div class="d-flex" id="wrapper">
            <!-- Sidebar-->

            
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light text-center">Menu</div>
                <div class="list-group list-group-flush">
                  <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center  text-dark" href="/"><img  src="{{asset('./image/dashboard.svg')}}" alt="#" height="20PX" style="margin: 10px;">Tableau de bord</a>
                   
                  <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center text-dark " href="programme"><img src="{{asset('./image/programme.svg')}}" alt="#" height="20PX" style="margin: 10px;">Programme</a>
                 
                  <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center text-dark" href="liste-projets-total"><img src="{{asset('./image/projet.svg')}}" alt="#" height="20X" style="margin: 10px;">Projets</a>

                  <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center text-dark" href="parties"><img src="{{asset('./image/partie.svg')}}" alt="#" height="20PX" style="margin: 10px;">Parties</a>
                  
                  <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center text-dark" href="user-profile"><img src="{{asset('./image/user.svg')}}" alt="#" height="20X" style="margin: 10px;">Profile</a>
                  
                  <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center  text-dark " href="authentification"><img src="{{asset('./image/deconnexion.svg')}}" alt="#" height="20PX" style="margin: 10px;">Déconnexion</a>

                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg></button>
                       
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">

                  <h1 class="mt-4">Programmes</h1>

                  <H4></H4>
                  <div class="alert alert-primary" role="alert">
                    {{$program->intitulé}}
                  </div>
                  <div class="parts-wrapper" style="padding: 10px;box-shadow: 0 5px 15px rgba(0,0,0,.1);">

                    <table class="table">
                      <thead class="bg-primary text-white text-center">
                        <tr>
                          <th scope="col">Numéro</th>
                          <th scope="col">Wilaya</th>
                          
                          <th scope="col">Nombre de projets</th>
                          <th scope="col"> Ation</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <tr>
                          <th scope="row">1</th>
                          <td id="alger">Alger </td>
                          <td> </td>
                          <td><a  href= "programme-par-wilaya/{{ $program->numéroprog}}" class="btn" style="  padding: 10px; border-radius: 10px; box-shadow: 0 20px 15px rgba(0, 0, 0, .1);" > 
                            <img src="{{asset('./image/projet.svg')}}" alt="#" height="20X" ></a></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td id="boumerdes"> Boumerdes</td>
                          <td> </td>
                        <td>
                          <a  href= "programme-par-wilaya/{{ $program->numéroprog}}" class="btn" style="  padding: 10px; border-radius: 10px; box-shadow: 0 20px 15px rgba(0, 0, 0, .1);" > 
                            <img src="{{asset('./image/projet.svg')}}" alt="#" height="20X" ></a>
                        </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td id="tizi"> Tizi Ouzou</td>
                          <td> </td>
                          <td>
                            <a  href= "programme-par-wilaya/{{ $program->numéroprog}}" class="btn" style="  padding: 10px; border-radius: 10px; box-shadow: 0 20px 15px rgba(0, 0, 0, .1);" > 
                              <img src="{{asset('./image/projet.svg')}}" alt="#" height="20X" ></a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td id="bouira"> Bouira</td>
                          <td> </td>
                         <td><a  href= "programme-par-wilaya/{{ $program->numéroprog}}" class="btn" style="  padding: 10px; border-radius: 10px; box-shadow: 0 20px 15px rgba(0, 0, 0, .1);" > 
                          <img src="{{asset('./image/projet.svg')}}" alt="#" height="20X" ></a></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td id=béjaia> Béjaia</td>
                          <td> </td>
                          <td>
                            <a  href= "programme-par-wilaya/{{ $program->numéroprog}}" class="btn" style="  padding: 10px; border-radius: 10px; box-shadow: 0 20px 15px rgba(0, 0, 0, .1);" > 
                              <img src="{{asset('./image/projet.svg')}}" alt="#" height="20X" ></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
               <!---------->
                  
                  </div>  
                    
                </div>
            </div>
        </div>
   
        <!-- Bootstrap core JS-->
@endsection