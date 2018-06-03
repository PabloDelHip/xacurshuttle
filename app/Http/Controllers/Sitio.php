<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tour;
use App\Categorie;


class Sitio extends Controller
{
    public function home()
    {
        $categories = Categorie::all()->where('active', '=',true)->where('see_home', '=',true);
        return view('home',compact('categories'));
    }

    public static  function toursHome($id_categorie)
    {
        $categories = Categorie::find($id_categorie);
        return $categories->tours;
        //dd($categories->tours);

    }

    public static function porcentajeDosNumeros($numero_menor,$numero_mayor)
    {
        $porcentaje = (($numero_mayor - $numero_menor)/$numero_menor) * 100;
        $porcentaje *=-1;
        $porcentaje = round($porcentaje);
        return number_format($porcentaje, 2, '.', ',');
    }

    public function ubicacion($ubicacion = '')
    {

		//con compact hacemos ya no tenemos que poner esto 'nombre' => $nombre... con el echo de poner el nombre del parametro, va a crear una variable con el mismo nombre para poder utilizarla en la vista
		return view('cancun.tours-actividades');
    }

    public function infoTour($tour = '')
    {
    	return view('infoTour');
    }

    public function contactanos()
    {
    	return view('contactanos');
    }
}
