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
                <h1 class="mt-4">Programmes</h1>
                <div>
                    <!--------modal button-->
                    <div class="text-right " style="padding: 10PX;">
                        <button type="button" class="btn btn-primary " data-toggle="modal"
                            data-target="#exampleModal"><img src="./image/icons8-plus (2).svg" alt=""> Ajouter </button>
                    </div>
                </div>
                <div class="table-wrapper" style="padding: 20px;box-shadow: 0 5px 15px rgba(0,0,0,.1);"  >

                    <!--------modal button-->


                    <!-------------------------------->
                    <table id="dtBasicExample" class="table   table-sm table-bordered cellspacing="0" width="100%" style="border-collapse: collapse; border-radius: 5px; overflow: hidden;border:  black">

                        <thead class="bg-primary text-white text-center">
                            <tr>
                                <th class=" col-1 th-sm text-center">Numéro 

                                </th>
                                <th class=" col-5 th-sm text-center">Intitulé

                                </th>
                                <th class="col-2 th-sm text-center">Action

                                </th>


                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($programme as $program)

                        
                            <tr>
                                <td > {{ ($program->numéroprog) }}</td>
                                <td> {{$program->intitulé}}</td>
                                <td class="text-center"> 
                                    <a  href= "programme-par-wilaya/{{ $program->numéroprog}}" class="btn" style="  padding: 10px; border-radius: 10px; box-shadow: 0 20px 15px rgba(0, 0, 0, .1);" > <img src="./image/projet.svg" alt="#" height="20X" ></a>
                                   <button type="button" class="btn " data-toggle="modal" data-target="#{{$program->numéroprog}}"><img  src="./image/edit.svg" alt="#" height="25PX"> </button>
                                    <a  href= "programme/delete/{{ $program->numéroprog}}" class="btn" style="  padding: 10px; border-radius: 10px; box-shadow: 0 20px 15px rgba(0, 0, 0, .1);" > <img src="./image/icons8-supprimer.svg" alt="#"> </a>
                                </td>
                


                            </tr>


                            

    <!-- Modal -->
    <div class="modal fade" id="{{$program->numéroprog}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un programme</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    

                    <form action="{{ route('program.update') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="inputEmail4">Numéro du programme</label>
                                <input type="hidden" name="numprog1" value="{{$program->numéroprog}}" />
                                <input type="text" name="numprog" class="form-control" id="inputNumProg"
                                    placeholder="Numéro..." value="{{$program->numéroprog}}" required>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Intiutlé</label>
                                <input type="text" class="form-control" value="{{$program->intitulé}}" id="inputIntituléProg" placeholder="Titre..."
                                    name="titre" required>
                            </div>


                            <button type="submit" class="btn btn-primary" name="btn-save">Sauvegarder</button>
                            <button type="button" class="btn btn-secondary text-right" data-dismiss="modal">fermer
                            </button>

    
                        </div>
                       
                    </form>
                
                </div>
            </div>
        </div>


                        @endforeach
                       
                           
                        </tbody>

                    </table>



                </div>




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

                    <form action="programme" method="post">
                        @csrf
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
                       
                    </form>
                
                </div>
            </div>
        </div>

</div>

@endsection