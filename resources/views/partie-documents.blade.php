@extends('layouts.master')

@section('content')
<div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light text-center">Menu</div>
            <div class="list-group list-group-flush">
              <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center  text-dark" href="/"><img  src="./image/dashboard.svg" alt="#" height="20PX" style="margin: 10px;">Tableau de bord</a>
                   
              <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center text-dark " href="programme"><img src="./image/programme.svg" alt="#" height="20PX" style="margin: 10px;">Programme</a>
             
              <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center text-dark" href="liste-projets-total"><img src="./image/projet.svg" alt="#" height="20X" style="margin: 10px;">Projets</a>

              <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center text-dark" href="parties"><img src="./image/partie.svg" alt="#" height="20PX" style="margin: 10px;">Parties</a>
              
              <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center text-dark" href="user profile"><img src="./image/user.svg" alt="#" height="20X" style="margin: 10px;">Profile</a>
              
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
                        </svg></button>
                   
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <h1 class="mt-4 ">Projet</h1>

                <H4>----- nom du programme/wilaya sélectioné -----</H4>
                <div class="text-right">
                   
                        <button class="btn btn-primary my-2 my-sm-0 " type="submit" data-toggle="modal" data-target="#exampleModal">Ajouter partie</button>
                    
                    <a href="document">
                        <button class="btn btn-outline-primary my-2 my-sm-0 " type="submit" >Ajouter document</button>
                    </a>
                   <!---------------->
                </div>
                <div class="parts-wrapper" style="padding: 10px;box-shadow: 0 5px 15px rgba(0,0,0,.1);">

                    <!------------------------------>
                    
      
                    <!-------------------------------->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Réalisation</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> étude</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">CTC</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table">
    
                                <tbody>
                                  <tr>
                                    <td>Doc 1</td>
                                  </tr>
                                  <tr>
                                    
                                    <td>Doc 2</td>
                                    
                                  </tr>
                                  <tr>
                                   
                                    <td>Doc 3</td>
                                   
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table">
    
                                <tbody>
                                  <tr>
                                    <td>Doc 1</td>
                                  </tr>
                                  <tr>
                                    
                                    <td>Doc 2</td>
                                    
                                  </tr>
                                  <tr>
                                   
                                    <td>Doc 3</td>
                                   
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <table class="table">
    
                                <tbody>
                                  <tr>
                                    <td>Doc 1</td>
                                  </tr>
                                  <tr>
                                    
                                    <td>Doc 2</td>
                                    
                                  </tr>
                                  <tr>
                                   
                                    <td>Doc 3</td>
                                   
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                      </div>
                   
                            </div>
                        </div>
                    </div>



                    <!-- Modal 1 -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une partie </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="" method="post">

                                        <div class="form-group">
                                           
                                           
                                            <div class="form-group">
                                                <label for="type">Partie </label>
                                                <select class="custom-select" id="type">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>
                                            </div>

                                           

                                            <button type="submit" class="btn btn-primary"
                                                name="btn-save">Ajouter</button>
                                            <button type="button" class="btn btn-secondary text-right"
                                                data-dismiss="modal">fermer
                                            </button>


                                        </div>
                                        <!--button type="submit" class="btn btn-primary">Valider</button-->
                                    </form>

                                </div>
                        </div>
                     </div>
                    </div>
    </div>


    </div>

@endsection