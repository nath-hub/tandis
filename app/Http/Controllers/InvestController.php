<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvestStoreRequest;
use App\Models\Invest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Enterprise;

class InvestController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        $entreprises = $user->investissements;

        $invest = Invest::all();
        return view('invest.index', compact('invest'));
    }

    public function create(Enterprise $enterprise)
    {

        // $this->authorize('create', $enterprise);

        $entrepriseId = request()->get('enterprise');

        $enterprise = Enterprise::findOrFail($entrepriseId);

        $user = auth()->user();

        return view('invest.create', compact('user', 'enterprise'));
    }

    public function store(InvestStoreRequest $request, Enterprise $enterprise)
    {

        $entrepriseId = request()->get('enterprise');

        $enterprise = Enterprise::findOrFail($entrepriseId);

        $request->validated();

        $user = auth()->user();

        $enterprise->investisseurs()->attach($user, [
            'prix_action' => $request->prix_action,
            'nombre_action' => $request->nombre_action,
            "total_payer" => $request->total_payer,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('users.show', compact('user'))
            ->with([
                'success'=>"félicitation! Vous venez d'acheter les actions !!!",
                'error' => "Echec de l'enregistrement"
            ]);
    }
}
