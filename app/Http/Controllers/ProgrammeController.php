<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// hna rana naayto lel model mel path 
use App\Models\Programme;
class ProgrammeController extends Controller
{
    // enfin
    public function index()
    {
        // hna jabna gae data stored f db w hatinahaf variable programe
        $programme= Programme::all();
        //compact ndirouha bachn passiw variable tae la base de donner m model lel view ok
        return view('programme',compact('programme'));
    }
    //

    public function indexprojet($id)
    {
     
      
      // envoyer le id  vers une autre viw
      $program= Programme::where('numéroprog', $id)->first();
        return view('programme-par-wilaya',compact('program'));
        
    }
    // fonction d'insertion 
    public function add(Request $req)
    {

    
 
        $prg = Programme::where('numéroprog', $req->numprog)->first();

        if ($prg === null ) {
          Programme::create([
            'numéroprog' =>$req->numprog,
            'intitulé' =>$req->titre
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
     $program= Programme::where('numéroprog', $id)->first();
   //  return $program;
     $program->delete();
   
     return back()->withErrors(['errors'=> 'Suppression avec Succes!']);
 
  }



  //fonction de modification
  public function modif(Request $req)
  {
    


      Programme::where('numéroprog', $req->numprog1)
      ->update([
        'numéroprog' =>  $req->numprog,
        'intitulé' =>  $req->titre
      ]);
 
    
 return back()->withErrors(['errors'=>'Modification avec Succes!']);
  }
}
 