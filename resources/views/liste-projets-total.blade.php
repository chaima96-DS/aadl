@extends('layouts.master')

@section('content')

<div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light text-center" >Menu</div>
            <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center  text-dark" href="/"><img  src="./image/dashboard.svg" alt="#" height="20PX" style="margin: 10px;">Tableau de bord</a>
                   
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center text-dark " href="programme"><img src="./image/programme.svg" alt="#" height="20PX" style="margin: 10px;">Programme</a>
                   
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center text-dark" href="liste-projets-total"><img src="./image/projet.svg" alt="#" height="20X" style="margin: 10px;">Projets</a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center text-dark" href="parties"><img src="./image/partie.svg" alt="#" height="20PX" style="margin: 10px;">Parties</a>
                    
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center text-dark" href="user-profile"><img src="./image/user.svg" alt="#" height="20X" style="margin: 10px;">Profile</a>
                    
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center  text-dark " href="authentification"><img src="./image/deconnexion.svg" alt="#" height="20PX" style="margin: 10px;">Déconnexion</a>
               
                </div>
            
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle"> <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-list">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3.01" y2="6"></line>
                            <line x1="3" y1="12" x2="3.01" y2="12"></line>
                            <line x1="3" y1="18" x2="3.01" y2="18"></line>
                        </svg>
                    </button>
                    
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
              <h1 class="mt-4">Projets</h1>

         
              
                <div class="table-wrapper" style="padding: 10px;box-shadow: 0 5px 15px rgba(0,0,0,.1);"  >

                    <!--------modal button-->


                    <!-------------------------------->
                    <table id="dtBasicExample" class="table   table-sm table-bordered cellspacing="0" width="100%" style="border-collapse: collapse; border-radius: 5px; overflow: hidden;border:  black">

                        <thead class="bg-primary text-white text-center  " >
                            <tr>
                                <th class=" col-1 th-sm text-center">Numéro  </th>
                                <th class="col-5 th-sm text-center">Intitulé  </th>
                                <th class="col-1 th-sm text-center"> wilaya </th>
                             

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td></td>
                                <td></td>
                              
                            </tr>
                            
                            <tr>
                                <td>3</td>
                                <td></td>
                                <td></td>
                                
                            


                            </tr>

                         
                        </tbody>

                    </table>



                </div>




            </div>
        </div>
    </div>



    <!-- Bootstrap core JS-->
                    
    </div>
@endsection