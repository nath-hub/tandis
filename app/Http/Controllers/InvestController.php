<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvestStoreRequest;
use App\Models\Invest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Enterprise;
use App\Models\Phase;

class InvestController extends Controller
{
    public function index()
    {
        // $id = auth()->user()->id;
        // $user = User::find($id);

        // $entreprises = $user->investissements;
        $enterprises = Enterprise::all();
        // $invest = Invest::all();
        return view('welcome', compact('enterprises'));
    }

    public function create($enterprise)
    {

        // $this->authorize('create', $enterprise); 

        $enterprise = Enterprise::where('id', $enterprise)->first();

        $user = auth()->user();

        return view('invest.create', compact('user', 'enterprise'));
    }

    public function store( Request $request, $enterprise)
    {

        $enterprise = Enterprise::where('id', $enterprise)->first();

        // $request->validated();

        $phase = Phase::where('enterprise_id', $enterprise->id)->where('statut_phase', "En-cour")->first();
         
        $user = auth()->user();

        $enterprise->investisseurs()->attach($user, [
            'prix_action' => $request->prix_action,
            'nombre_action' => $request->nombre_action,
            "total_payer" => $request->total_payer,
            "phase_id" => $phase->id,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('users.show', compact('user'))
            ->with([
                'success'=>"félicitation! Vous venez d'acheter les actions !!!",
                'error' => "Echec de l'enregistrement"
            ]);
    }
}
