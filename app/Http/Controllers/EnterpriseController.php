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

        if (empty ($request->file('livress'))) {
            $livre = $enterprise->livres;
        } else {
            $livre = $request->livress->store('fichiers/tmp', 'public');
        }

        if (empty ($request->file('politiques'))) {
            $politique = $enterprise->politique;
        } else {
            $politique = $request->politiques->store('fichiers/tmp', 'public');
        }

        $enterprise->siren =  $request->sirens;
        $enterprise->commercial_register =  $request->commercial_registers; 
        $enterprise->name_enterprise =  $request->name_enterprises; 
        $enterprise->address =  $request->addres;
        $enterprise->phase =  $request->phases;
        $enterprise->livres =  $livre; 
        $enterprise->politique =  $politique;
        $enterprise->date_debut =  $request->date_debuts; 
        $enterprise->date_fin =  $request->date_fins; 
        $enterprise->prix_phase =  $request->prix_phases; 
        $enterprise->statut_phase =  $request->statut_phases; 
        $enterprise->objectif =  $request->objectifs; 
        $enterprise->montant_actuel =  $request->montant_actuels; 
        $enterprise->web_site =  $request->web_sites; 
        $enterprise->description =  $request->descriptions;

        $enterprise->save();

        $user = $request->user();

        return redirect()->route('users.show', [
            'enterprise' => $enterprise,
            'user' => $user
        ]);
    }

    public function service(){
        return view('service');
    }
    public function contact(){
        return view('contact');
    }

    public function projet(){
        return view('projet');
    }
}
