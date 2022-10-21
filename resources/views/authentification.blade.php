@extends('layouts.master')
<style>
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
@section('content')
<div class="login-form">
    <form action="index.html" >
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input  id ="user-name" type="text" class="form-control" placeholder="Nom d'utilisateur" required="required">
        </div>
        <div class="form-group">
            <input id="mdp" type="password" class="form-control" placeholder="Mot de passe" required="required">
        </div>
        <div class="form-group">
            <button id ="log-in" type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
           
        </div>        
    </form>
    <p class="text-center"><a href="#">Créer un compet</a></p>
</div>
@endsection