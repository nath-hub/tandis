<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnterpriseUpdateRequest;
use App\Models\Enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{

    public function index()
    {
        $enterprises = Enterprise::all(); // Fetch all articles
        return view('welcome', compact('enterprises'));
    }

    public function show(Enterprise $enterprises) // Route binding for enterprises
    {
        return view('enterprises.show', compact('enterprises'));
    }
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

    public function update( EnterpriseUpdateRequest $request, Enterprise $enterprise)
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

        $enterprise->siren = $request->sirens;
        $enterprise->commercial_register = $request->commercial_registers;
        $enterprise->name_enterprise = $request->name_enterprises;
        $enterprise->address = $request->addres;
        $enterprise->livres = $livre;
        $enterprise->politique = $politique;
        $enterprise->objectif = $request->objectifs;
        $enterprise->montant_actuel = $request->montant_actuels;
        $enterprise->web_site = $request->web_sites;
        $enterprise->description = $request->descriptions;
        $enterprise->prix_action = $request->prix_actions;
        $enterprise->nombre_action = $request->nombre_actions;

        $enterprise->save();

        $user = $request->user();

        return redirect()->route('phases.create', [
            'enterprise' => $enterprise,
            'user' => $user
        ]);
    }

    public function service()
    {
        return view('service');
    }
    public function contact()
    {
        return view('contact');
    }

    public function projet()
    {
        return view('projet');
    }

    public function about()
    {
        return view('about');
    }


}
