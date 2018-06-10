<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tour;
use Cart;

class Shopping_Cart extends Controller
{
    public function insertCart(Request $request)
    {
        $tour = Tour::find($request->id);
        $total_adult_preci = ($tour->adult_price*$request->num_adultos);
        $total_child_preci = ($tour->child_price*$request->num_ninos);
        $total_sale = ($total_adult_preci + $total_child_preci);

        $totalShoping = $total_adult_preci + $total_child_preci;
        $image = $tour->image;
        $date = $request->fecha_tour;

        Cart::add(['id' => $request->id,
                   'name' => $tour->name,
                   'qty' => 1,
                   'price' => 0,
                   'options' => ['num_adult' => $request->num_adultos,
                                               'adult_price' => $tour->adult_price,
                                               'total_adult_price' => $total_adult_preci,
                                               'num_child' => $request->num_ninos,
                                               'child_price' => $tour->child_price,
                                               'total_child_price' => $total_child_preci,
                                               'total_sale' => $total_sale,
                                               'image' => $image,
                                               'date' => $date
                                               ]]);
        return redirect()->to('/carrito');
    }

    public function contentCart()
    {
        return view('carrito');
    }

    public function deleteCart($rowId = '')
    {
        Cart::remove($rowId);
        return back();
    }

    public function clientData()
    {
        return view('datosCliente');
    }
}
