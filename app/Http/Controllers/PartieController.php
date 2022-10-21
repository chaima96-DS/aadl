<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partie;
class PartieController extends Controller
{
    //

 
     public function index()
     {
         // hna jabna gae data stored f db w hatinahaf variable programe
         $partie= Partie::all();
         //compact ndirouha bachn passiw variable tae la base de donner m model lel view ok
         return view('parties',compact('partie'));
     }

   // fonction d'insertion 
   public function add(Request $req)
   {

     // return $req;
    $part = Partie::where('nompartie', $req->nom)->first();

    if ($part === null ) {
      Partie::create([
      
        'nompartie' =>$req->nom
       ]);
       
    } else 
    {
      return back()->withErrors(['errors'=> 'Cet enregistrement exist déjas !']);
    }

   

  
   return back()->withErrors(['errors'=> 'Succes!']);
   }


   //fonction de suppression 
public function supp($id)
{
  //return $id;
   $part= Partie::where('idpartie', $id)->first();
 //return $part;
   $part->delete();
 
 return back()->withErrors(['errors'=> 'Suppression avec Succes!']);

}

    
}
