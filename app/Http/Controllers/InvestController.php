<?php

namespace App\Http\Controllers;

use App\Models\Invest;
use Illuminate\Http\Request;

class InvestController extends Controller
{
    public function index()
    {
        $invest = Invest::all();
        return view('invest.index', compact('invest'));
    }
}
