<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\General;
use App\Portafolio;
use App\Categoria;
use App\Testimonio;
use App\Blog;
use App\Autor;
use \DomDocument;
use Image;

class SeccionController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function principal()
    {
        return view('admin.seccion.principal');
    }

    public function post_principal(Request $request)
    {
        
        $objeto = General::find(1);
        $objeto->principal_titulo     = $request->principal_titulo;
        $objeto->principal_subtitulo  = $request->principal_subtitulo;
        $objeto->save();

        return redirect()->route('admin.seccion.principal');
    }

    public function quienessomos()
    {
        return view('admin.seccion.quienessomos');
    }

    public function post_quienessomos(Request $request)
    {


        $objeto = General::find(1);

        if ( $request->hasFile('nosotros_imagen') ){

            $file = $request->file('nosotros_imagen');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('nosotros_imagen') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->nosotros_imagen = $filenameNombreOriginal;
        }

        $objeto->nosotros_titulo = $request->nosotros_titulo;
        $objeto->nosotros_cuerpo = $request->nosotros_cuerpo;
        $objeto->save();


        return redirect()->route('admin.seccion.quienessomos');
    }


    public function portafolios()
    {
        return view('admin.seccion.portafolios');
    }

    public function portafolios_add(Request $request)
    {

        $portafolio = '';
        if ( $request->id != '' ) {
          if ($request->accion == 'eliminar') {
            $objeto = Portafolio::find($request->id);
            $objeto->delete();
            return redirect()->route('admin.seccion.portafolios');
          }
          $portafolio = Portafolio::where('id',$request->id)->first();
        }

        return view('admin.seccion.portafolios_add',compact('portafolio'));
    }

    public function post_portafolios_add(Request $request)
    {

      if ($request->id != '') {
        $objeto = Portafolio::find($request->id);
      }
      else{
        $objeto = new Portafolio();
      }

      

        if ( $request->hasFile('imagen_preview') ){

            $file = $request->file('imagen_preview');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('imagen_preview') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->imagen_preview = $filenameNombreOriginal;
        }

        if ( $request->hasFile('imagen_modal') ){

            $file = $request->file('imagen_modal');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('imagen_modal') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->imagen_modal = $filenameNombreOriginal;
        }

        $objeto->descripcion_preview = $request->descripcion_preview;
        $objeto->descripcion_modal = $request->descripcion_modal;
        $objeto->estado = $request->estado;
        $objeto->orden = $request->orden;
        $objeto->titulo = $request->titulo;
        $objeto->slug   = time().str_slug($request->titulo);

        $objeto->save();




        return redirect()->route('admin.seccion.portafolios');
    }

    public function categorias()
    {
        return view('admin.seccion.categorias');
    }

    public function categorias_add(Request $request)
    {

        $categoria = '';
        if ( $request->id != '' ) {
          if ($request->accion == 'eliminar') {
            $objeto = Categoria::find($request->id);
            $objeto->delete();
            return redirect()->route('admin.seccion.categorias');
          }
          $categoria = Categoria::where('id',$request->id)->first();
        }

        return view('admin.seccion.categorias_add',compact('categoria'));
    }

    public function post_categorias_add(Request $request)
    {

      if ($request->id != '') {
        $objeto = Categoria::find($request->id);
      }
      else{
        $objeto = new Categoria();
      }

        $objeto->name = $request->name;
        $objeto->slug = $request->slug;

        $objeto->save();

        return redirect()->route('admin.seccion.categorias');
    }


    public function testimonios()
    {
        return view('admin.seccion.testimonios');
    }

    public function testimonios_add(Request $request)
    {

        $testimonio = '';
        if ( $request->id != '' ) {
          if ($request->accion == 'eliminar') {
            $objeto = Testimonio::find($request->id);
            $objeto->delete();
            return redirect()->route('admin.seccion.testimonios');
          }
          $testimonio = Testimonio::where('id',$request->id)->first();
        }

        return view('admin.seccion.testimonios_add',compact('testimonio'));

    }

    public function post_testimonios_add(Request $request)
    {

      if ($request->id != '') {
        $objeto = Testimonio::find($request->id);
      }
      else{
        $objeto = new Testimonio();
      }

        if ( $request->hasFile('foto') ){

            $file = $request->file('foto');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('foto') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->foto = $filenameNombreOriginal;
        }

        $objeto->cuerpo = $request->cuerpo;
        $objeto->estado = $request->estado;
        $objeto->nombre = $request->nombre;
        $objeto->ocupacion = $request->ocupacion;

        $objeto->save();




        return redirect()->route('admin.seccion.testimonios');
    }

    public function clientes()
    {
        return view('admin.seccion.clientes');
    }

    public function contacto()
    {
        return view('admin.seccion.contacto');
    }


    public function post_contacto(Request $request)
    {


        $objeto = General::find(1);

        if ( $request->hasFile('contacto_logo') ){

            $file = $request->file('contacto_logo');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('contacto_logo') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->contacto_logo = $filenameNombreOriginal;
        }

        $objeto->contacto_mapa    = $request->contacto_mapa;
        $objeto->contacto_texto_1 = $request->contacto_texto_1;
        $objeto->contacto_texto_2 = $request->contacto_texto_2;
        $objeto->contacto_texto_3 = $request->contacto_texto_3;
        $objeto->save();


        return redirect()->back();
    }


    public function autor()
    {
        return view('admin.seccion.autor');
    }


    public function post_autor(Request $request)
    {


        $objeto = Autor::find(1);

        if ( $request->hasFile('image') ){

            $file = $request->file('image');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('image') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->image = $filenameNombreOriginal;
        }

        $objeto->nombre            = $request->nombre;
        $objeto->descripcion       = $request->descripcion;
        $objeto->facebook_url      = $request->facebook_url;
        $objeto->instagram_url     = $request->instagram_url;
        $objeto->twitter_url       = $request->twitter_url;
        $objeto->pinterest_url     = $request->pinterest_url;
        $objeto->email             = $request->email;
        $objeto->save();


        return redirect()->back();
    }



    public function blog()
    {
        return view('admin.seccion.blog');
    }

    public function blog_add(Request $request)
    {

        $testimonio = '';
        if ( $request->id != '' ) {
          if ($request->accion == 'eliminar') {
            $objeto = Blog::find($request->id);
            $objeto->delete();
            return redirect()->route('admin.seccion.blog');
          }
          $testimonio = Blog::where('id',$request->id)->first();
        }

        return view('admin.seccion.blog_add',compact('testimonio'));

    }

    public function post_blog(Request $request)
    {

        $objeto = Blog::find(1);
      
        if ( $request->hasFile('logo_footer') ){

            $file = $request->file('logo_footer');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('logo_footer') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->logo_footer = $filenameNombreOriginal;
        }

        if ( $request->hasFile('instagram_foto_1') ){

            $file = $request->file('instagram_foto_1');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('instagram_foto_1') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->instagram_foto_1 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('instagram_foto_2') ){

            $file = $request->file('instagram_foto_2');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('instagram_foto_2') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->instagram_foto_2 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('instagram_foto_3') ){

            $file = $request->file('instagram_foto_3');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('instagram_foto_3') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->instagram_foto_3 = $filenameNombreOriginal;
        }

        if ( $request->hasFile('instagram_foto_4') ){

            $file = $request->file('instagram_foto_4');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('instagram_foto_4') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->instagram_foto_4 = $filenameNombreOriginal;
        }

        $objeto->texto_footer = $request->texto_footer;
        $objeto->post_id = $request->post_id;

        $objeto->save();




        return redirect()->route('admin.seccion.blog');
    }







}