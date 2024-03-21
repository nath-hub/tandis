<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnterpriseUpdateRequest;
use App\Models\Enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{

    public function edit(Enterprise $enterprise)
    {
        // if (auth()->check()) {
        //     return view('page-cible');
        // } else {
        //     if (! User::exists()) {
        //         return redirect('/inscription'); // Redirection vers la page d'inscription
        //     } else {
        //         return redirect('/connexion'); // Redirection vers la page de connexion
        //     }
        // }

        return view('enterprise.edit', [
            'enterprise' => $enterprise, 
        ]);
    }

    public function update(EnterpriseUpdateRequest $request, Enterprise $enterprise)
    {
        // dd($request->all());

        if (empty ($request->file('livres'))) {
            $livre = $enterprise->livres;
        } else {
            $livre = $request->livres->store('fichiers/tmp', 'public');
        }

        if (empty ($request->file('politique'))) {
            $politique = $enterprise->politique;
        } else {
            $politique = $request->politique->store('fichiers/tmp', 'public');
        }

        $enterprise->siren =  $request->siren;
        $enterprise->commercial_register =  $request->commercial_register; 
        $enterprise->name_enterprise =  $request->name_enterprise; 
        $enterprise->address =  $request->address;
        $enterprise->phase =  $request->phase;
        $enterprise->livres =  $livre; 
        $enterprise->politique =  $politique;
        $enterprise->date_debut =  $request->date_debut; 
        $enterprise->date_fin =  $request->date_fin; 
        $enterprise->prix_phase =  $request->prix_phase; 
        $enterprise->statut_phase =  $request->statut_phase; 
        $enterprise->objectif =  $request->objectif; 
        $enterprise->montant_actuel =  $request->montant_actuel; 
        $enterprise->web_site =  $request->web_site; 
        $enterprise->description =  $request->description;

        $enterprise->save();

        $user = $request->user();

        return view('users.show', [
            'enterprise' => $enterprise,
            'user' => $user
        ]);
    }
}
