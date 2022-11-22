<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //On va vérifier si l'utilisateur connecté est utilisateur admin
         if (auth()->user()->adminn == 1){
            
            return $next($request);

         }
         else{

            abort(403);
         }
//Meme en s'enregistrant, on ne sera pas un administrateur, on ne pourra accéder aux routes protégé par le middleware admin.
        //Si oui continuer jusqu'à la prochaine requéte
        //Sinon renvoyer une 403
        
    }
}
