<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Contacto;
use App\Portafolio;
use App\Servicio;
use App\Cliente;
use App\Generale;
use App\Noticia;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function home()
    {
        // $portafolios = Portafolio::all();
		// $servicios = Servicio::all();
		// $clientes = Cliente::all();
		// $generales = Generale::where('id',1)->first();
	    return view('web.home');
    }

    public function blog(Request $request)
    {
        $categoria = '';
        if ($request->categoria_id != '') {
            $categoria = \DB::table('categories')->where('id',$request->categoria_id)->first();
            if (!$categoria) {
                return redirect()->route('web.blog');
            }
            $noticias = Noticia::orderBy('created_at','desc')->where('category_id',$request->categoria_id)->paginate(10);

            return view('web.blog_paginacion',compact('noticias','categoria'));
        }
        else{
            $noticias = Noticia::orderBy('created_at','desc')->take(3)->get();
        }
        return view('web.blog',compact('noticias','categoria'));
    }

    public function blog_paginacion(Request $request)
    {
        $categoria = '';
        if ($request->categoria_id != '') {
            $categoria = \DB::table('categories')->where('id',$request->categoria_id)->first();
            if (!$categoria) {
                return redirect()->route('web.blog');
            }
            $noticias = Noticia::orderBy('created_at','desc')->where('category_id',$request->categoria_id)->paginate(10);
        }
        else{
            $noticias = Noticia::orderBy('created_at','desc')->paginate(10);
        }
        return view('web.blog_paginacion',compact('noticias','categoria'));
    }

    public function publicacion(Request $request,$slug)
    {
        $noticia = Noticia::where('seo_title',$slug)->where('status','ACTIVO')->first();
        if (!$noticia) {
            return redirect()->route('web.blog');
        }
        return view('web.publicacion',compact('noticia'));
    }

    public function portafolio()
    {
    	$portafolios = Portafolio::all();
    	return view('web.portafolio',compact('portafolios'));
    }

    public function proyecto(Request $request,$proyectoSlug)
    {
        $portafolio = Portafolio::where('slug','=',$proyectoSlug)->first();
    	return view('web.proyecto',compact('portafolio'));
    }

    public function formulario()
    {
    	$contacto = new Contacto();
		$contacto->nombre 		= $request->name;
		$contacto->email 		= $request->email;
		$contacto->telefono 	= $request->phone;
		$contacto->mensaje 		= $request->comment;
		$contacto->save();

		return 'exito';
    }

}
