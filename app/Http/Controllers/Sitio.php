<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tour;
use App\Categorie;
use App\Imagetour;
use Cart;
use Barryvdh\DomPDF\Facade as PDF;
use Session;

class Sitio extends Controller
{
    public function home()
    {
        // $valores = session('sesion');
        // dd($valores);
        $categories = Categorie::all()->where('active', '=',true)->where('see_home', '=',true);
        return view('home',compact('categories'));
    }

    public function categoria($url)
    {
        $Categorias = Categorie::all()->where('url', '=',$url);
        foreach($Categorias as $Categoria)
        {
            $categorie_name=$Categoria->name;
            $description = $Categoria->description;
            $idCategoria =  Categorie::find($Categoria->id);

        }
        $tours = $idCategoria->tours;
        return view('categorias',compact('tours','categorie_name','description'));
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


        $tourInfo = Tour::all()->where('url', '=',$tour);
       // dd($tourInfo);
        $dias_activo_tour="";
        foreach($tourInfo as $dias)
        {
            if($dias->mon==0)
            {
                $dias_activo_tour.="day != 1 && ";
            }
            if($dias->tue==0)
            {
                $dias_activo_tour.="day != 2 && ";
            }
            if($dias->wed==0)
            {
                $dias_activo_tour.="day != 3 && ";
            }
            if($dias->thu==0)
            {
                $dias_activo_tour.="day != 4 && ";
            }
            if($dias->fri==0)
            {
                $dias_activo_tour.="day != 5 && ";
            }
            if($dias->sat==0)
            {
                $dias_activo_tour.="day != 6 && ";
            }
            if($dias->sun==0)
            {
                $dias_activo_tour.="day != 0 && ";
            }
        }
        $dias_activo_tour = trim($dias_activo_tour, '&& ');
        $numTour = count($tourInfo);
        if($numTour==0)
        {
            return abort(404);
        }
        else
        {
            foreach($tourInfo as $tourIn){
                $image = Tour::find($tourIn->id);
            }
            return view('infoTour',compact('tourInfo','image','dias_activo_tour'));
        }

    }

    public function compraExitosa()
    {
        return view('compra-exitosa');
    }

    public function contactanos()
    {
    	return view('contactanos');
    }
}
