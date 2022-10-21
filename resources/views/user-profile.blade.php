@extends('layouts.master')

@section('content')
<div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white " id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light text-center" >Menu </div>
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
                        </svg></button>
                   
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                
                
                <h1 class="mt-4">Profile</h1>
                <form style="padding: 35px;box-shadow: 0 5px 15px rgba(0,0,0,.1);" >
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom</label>
                      <input id ="nom"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""  >
                      <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small-->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Mot de passe</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder=""  >
                    </div>
                    <div class="form-group form-check">
                      <!--input type="checkbox" class="form-check-input" id="exampleCheck1"-->
                      <!--label class="form-check-label" for="exampleCheck1">Check me out</label-->
                    </div>
                    <button id="boutton" type="submit" class="btn btn-primary">Modifier</button>
                  </form>


            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un programme </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="programme-test.php" method="post">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="inputEmail4">Numéro du programme</label>
                                <input type="text" name="numprog" class="form-control" id="inputNumProg"
                                    placeholder="Numéro..." required>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Intiutlé</label>
                                <input type="text" class="form-control" id="inputIntituléProg" placeholder="Titre..."
                                    name="titre" required>
                            </div>


                            <button type="submit" class="btn btn-primary" name="btn-save">Sauvegarder</button>
                            <button type="button" class="btn btn-secondary text-right" data-dismiss="modal">fermer
                            </button>

    
                        </div>
                        <!--button type="submit" class="btn btn-primary">Valider</button-->
                    </form>
                
                </div>
            </div>
        </div>
      
    
    <!-- Bootstrap core JS-->
                    
    </div>
@endsection