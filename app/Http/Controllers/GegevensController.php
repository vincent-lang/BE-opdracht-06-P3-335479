<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use App\Models\ProductPerLeverancier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GegevensController extends Controller
{
    public function leverancierIndex()
    {
        $leveranciers = ProductPerLeverancier::with('leverancier')->select('leverancier_id', DB::raw('count(distinct product_id) as amount'))->groupBy('leverancier_id')->orderBy('amount', 'desc')->get();
        return view('leverancier.index', compact('leveranciers'));
    }
}
