// sélécteurs
const boutton = document.getElementById("log-in");
const username = document.getElementById("user-name");
const password = document.getElementById("mdp");



// les fonction
boutton.addEventListener("click",login);




function login(event)
{
    if (username.value!= "")
    {
     

       if( username.value=="admin" &&  password.value== "DRAE2022")
       {
        console.log("succes")
       }
    }//end if
    
}//fin

