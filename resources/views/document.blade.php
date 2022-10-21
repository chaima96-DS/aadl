@extends('layouts.master')
<style>
    .document {
     margin: 10px;  
    }
    .document:hover {
      cursor: pointer;
    }

    
</style>
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
                <h1 class="mt-4 text-primary">Liste des types documents :</h1>

               
                
                <div class="docs-wrapper" style="padding: 10px;box-shadow: 0 5px 15px rgba(0,0,0,.1);">

                    <!------------------------------>
                    
                  
                    
                        <div class="container text-center ">
                            <div class="document " >
                                <button type="button" class="btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
                                    Marché
                                </button>
                           
                            </div>
                            <div class="document " >
                                <button type="button" class="btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModal2">
                                  Ordre de service
                                </button>
                           
                            </div>
                            <div class="document " >
                                <button type="button" class="btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
                                   Avenant
                                </button>
                           
                            </div>
                            <div class="document " >
                                <button type="button" class="btn btn-outline-dark  btn-lg btn-block" data-toggle="modal" data-target="#exampleModal2">
                               ODS-Avenant
                                  </button>
                             
                            </div>
                        </div>
                                
                    <!-------------------------------->    
                </div>
                  <!-------------------------------->
            </div>



            </div>



                    <!-- Modal 1 -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Information sur le document </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="" method="post">

                                        <div class="form-group">
                                            <div class="row">
                                            <div class="form-group col">
                                                <label for="numéro">Numéro</label>
                                                <input type="text" name="numéro" class="form-control" id="inputNumProg"
                                                    placeholder="Numéro..." required>
                                            </div> 
                                            <div class="form-group col">
                                                <label for="numéro-visa">Numéro visa</label>
                                                <input type="text" name="numéro-visa" class="form-control" id="inputNumProg"
                                                    placeholder="Numéro..." required>
                                            </div> 
                                             
                                            </div>
                                            <div class="row">
                                            <div class="form-group col">
                                                <label for="date" >Date</label>
                                                <input type="date" class="form-control" id="date"
                                                    placeholder="Titre..." name="titre" required>
                                            </div>
                                            <div class="form-group col">
                                                <label for="délai">Délai</label>
                                                <input type="text" name="numprog" class="form-control" id="délai"
                                                    placeholder="Numéro..." required>
                                            </div> 
                                            </div>


                                            <div class="form-group ">
                                                <label for="montant">Montant</label>
                                                <input type="text" name="numprog" class="form-control" id="montant"
                                                    placeholder="Numéro..." required>
                                            </div> 
                                           
                                           

                                            <!--upload file-->
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Documents </label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                              </div>
                                              <div class="form-group">
                                                <label for="type">Partie </label>
                                                <select class="custom-select" id="type">
                                                    <option selected>Choose...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                  </select>
                                            </div>

                                            <button type="submit" class="btn btn-primary"
                                                name="btn-save">Sauvegarder</button>
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

                      <!-- Modal 2 -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Information sur le document  </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="" method="post">
                                    <div class="form-group">
                                        
                                        <div class="form-group ">
                                            <label for="numéro">Numéro</label>
                                            <input type="text" name="numéro" class="form-control" id="inputNumProg"
                                                placeholder="Numéro..." required>
                                        </div> 
                                       
                                         
                                    
                                        <div class="form-group ">
                                            <label for="date" >Date</label>
                                            <input type="date" class="form-control" id="date"
                                                placeholder="Titre..." name="titre" required>
                                        </div>
                                      

                                       
                                        <div class="form-group">
                                            <label for="type">Type </label>
                                            <select class="custom-select" id="type">
                                                <option selected>Choose...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                              </select>
                                        </div>

                                        <!--upload file-->
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Documents </label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                          </div>
                                          <div class="form-group">
                                            <label for="type">Partie </label>
                                            <select class="custom-select" id="type">
                                                <option selected>Choose...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                              </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary"
                                            name="btn-save">Sauvegarder</button>
                                        <button type="button" class="btn btn-secondary text-right"
                                            data-dismiss="modal">fermer
                                        </button>
                                        

                                    </div>

                                    </div>
                                    <!--button type="submit" class="btn btn-primary">Valider</button-->
                                </form>

                            </div>
                    </div>
                </div>

                       
                    
                  
 
              









                    <!-- Bootstrap core JS-->
               
                 </div>

    </div>

    
@endsection