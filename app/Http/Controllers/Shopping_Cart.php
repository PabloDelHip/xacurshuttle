<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tour;
use App\Zone;
use App\Hotel;
use Cart;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class Shopping_Cart extends Controller
{

    public function insertCart(Request $request)
    {
      //dd($request->all());
      if($request->has('transportacion'))
      {
        $adult_price=0;
        $hotels = Hotel::all()->where('name', '=',$request->hotel);
        foreach($hotels as $hotel)
        {
          $id_cart = $hotel->id;
          $name_cart = $hotel->zone->name;
          $adult_price = $hotel->zone->price;
        }
        $num_adult = $request->num_adultos;
        if($num_adult>=5)
        {
          for ($i=4; $i < $num_adult; $i++) { 
            $adult_price+=8;
          }
        }
        
        $type = 2;
        $total_adult_price = $adult_price;
        $num_child = 0;
        $child_price = 0;
        $total_child_price = 0;
        $total_sale = $total_adult_price;
        $image = 'van.jpg';
        $date = '';
        $arrival_date=$request->fecha_transporte_llegada;
        $departure_date=$request->fecha_transporte_salida;
        $name_hotel=$request->hotel;
        $tipo_traslado = $request->tipo_traslado;
       // dd($request->all());
      }

      else
      {
        $tour = Tour::find($request->id);
        $type = 1;
        $id_cart = $request->id;
        $name_cart = $tour->name;
        $total_adult_preci = ($tour->adult_price*$request->num_adultos);
        $total_child_preci = ($tour->child_price*$request->num_ninos);
        $total_sale = ($total_adult_preci + $total_child_preci);

        $num_adult = $request->num_adultos;
        $adult_price = $tour->adult_price;
        $total_adult_price = $total_adult_preci;
        $num_child = $request->num_ninos;
        $child_price = $tour->child_price;
        $total_child_price = $total_child_preci;
        $total_sale = $total_sale;

        $totalShoping = $total_adult_preci + $total_child_preci;
        $image = $tour->image;
        $date = $request->fecha_tour;

        $arrival_date='';
        $departure_date='';
        $name_hotel='';
        $tipo_traslado = '';
      }
      
     

      Cart::add(['id' => $id_cart,
                'name' => $name_cart,
                'qty' => 1,
                'price' => 0,
                'options' => ['type' => $type,
                              'num_adult' => $num_adult,
                              'adult_price' => $adult_price,
                              'total_adult_price' => $total_adult_price,
                              'num_child' => $num_child,
                              'child_price' => $child_price,
                              'total_child_price' => $total_child_price,
                              'total_sale' => $total_sale,
                              'image' => $image,
                              'date' => $date,
                              'arrival_date'=>$arrival_date,
                              'departure_date'=>$departure_date,
                              'name_hotel'=>$name_hotel,
                              'transfer_type'=>$tipo_traslado,
                            ]]);

        // $tour = Tour::find($request->id);
        // $total_adult_preci = ($tour->adult_price*$request->num_adultos);
        // $total_child_preci = ($tour->child_price*$request->num_ninos);
        // $total_sale = ($total_adult_preci + $total_child_preci);

        // $totalShoping = $total_adult_preci + $total_child_preci;
        // $image = $tour->image;
        // $date = $request->fecha_tour;

        // Cart::add(['id' => $request->id,
        //            'name' => $tour->name,
        //            'qty' => 1,
        //            'price' => 0,
        //            'options' => ['num_adult' => $request->num_adultos,
        //                                        'adult_price' => $tour->adult_price,
        //                                        'total_adult_price' => $total_adult_preci,
        //                                        'num_child' => $request->num_ninos,
        //                                        'child_price' => $tour->child_price,
        //                                        'total_child_price' => $total_child_preci,
        //                                        'total_sale' => $total_sale,
        //                                        'image' => $image,
        //                                        'date' => $date
        //                                        ]]);
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


    public function saveDateClient(Request $request)
    {
        $data_client = array(
            "name"=>$request->name,
            "last_name"=>$request->last_name,
            "email"=>$request->email,
            "city"=>$request->city,
            "state"=>$request->state,
            "country"=>$request->country,
            "phone"=>$request->phone,
            "hotel"=>$request->hotel,
            "comments"=>$request->comments
        );
        session(['client-data'=>$data_client]);
        return redirect()->to('/confirmacion');
    }

    public function confirmation()
    {
        $client_data = session('client-data');
        return view('confirmacion',compact('client_data'));
    }

    // public function successfulPurchase()
    // {

    // }
}
