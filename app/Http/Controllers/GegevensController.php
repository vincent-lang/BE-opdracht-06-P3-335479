<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use App\Models\Magazijn;
use App\Models\Product;
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

    public function productIndex(Leverancier $info)
    {
        $products = DB::table('product_per_leveranciers')->select('magazijns.product_id', 'aantalAanwezig', 'magazijns.product_id', 'product_naam', 'product_per_leveranciers.product_id', 'product_per_leveranciers.leverancier_id', 'datumLevering', 'verpakkingsEenheid', 'product_per_leveranciers.id')->join('leveranciers', 'leverancier_id', 'leveranciers.id')->join('products', 'product_per_leveranciers.product_id', 'products.id')->join('magazijns', 'products.id', 'magazijns.product_id')->where('leveranciers.id', $info->id)->orderBy('aantalAanwezig', 'desc')->get();
        return view('product.index', compact('info', 'products'));
    }

    public function productPerLeverancierIndex(Leverancier $info, Product $data)
    {
        $leverings = DB::table('product_per_leveranciers')->where('leverancier_id', $info->id)->where('id', $data->id)->get();
        $magazijns = Magazijn::where('product_id', $data->id)->get();
        return view('productperleverancier.index', compact('info', 'data', 'leverings', 'magazijns'));
    }

    public function updateProductPerLeverancier(Request $request, Leverancier $info, Product $data)
    {

        $today = date('Y-m-d');

        $magazijn = $request->validate([
            'aantalAanwezig' => 'required'
        ]);

        $validated = $request->validate([
            'datumLevering' => 'required'
        ]);

        if ($today <= $request->datumLevering) {

            echo "<script>alert('hello'); sessionStorage.clear(); </script>";

            DB::table('magazijns')->where('product_id', $data->id)->update($magazijn);
            DB::table('product_per_leveranciers')->where('leverancier_id', $info->id)->where('id', $data->id)->update($validated);

            return redirect(route('product.index', [$info->id]));
        } else {
            return redirect(route('productperleverancier.index', [$info->id, $data->id]))->with('succes', 'Deze datum ligt in het verleden, graag een nieuwe datum in voeren');
        }
    }
}
