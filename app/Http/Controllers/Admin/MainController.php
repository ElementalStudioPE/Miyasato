<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;
use \DomDocument;
use Image;
use Auth;

class MainController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function panel()
    {
        return view('admin.panel');
    }

    public function mensajes()
    {
		return view('admin.mensajes');
    }

    public function media()
    {
		return view('admin.media');
    }

    public function noticias()
    {
        return view('admin.noticias');
    }

    public function noticias_add(Request $request)
    {

        $noticia = '';
        if ( $request->id != '' ) {
          if ($request->accion == 'eliminar') {
            $objeto = Noticia::find($request->id);
            $objeto->delete();
            return redirect()->route('admin.seccion.noticias');
          }
          $noticia = Noticia::where('id',$request->id)->first();
        }

        return view('admin.noticias_add',compact('noticia'));
    }

    public function post_noticias_add(Request $request)
    {

      $existeNoticia = 0;
      if ($request->id != '') {
        $objeto = Noticia::find($request->id);
        $existeNoticia = 1;
      }
      else{
        $objeto = new Noticia();
      }

      

        if ( $request->hasFile('image') ){

            $file = $request->file('image');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('image') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->image = $filenameNombreOriginal;
        }

        if ( $request->body != '' ) {

               $message=$request->body;


               $dom = new DomDocument();
               libxml_use_internal_errors(true);
               $dom->loadHtml( mb_convert_encoding("<div>$message</div>", 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
               $container = $dom->getElementsByTagName('div')->item(0);
               $container = $container->parentNode->removeChild($container);

               while ($dom->firstChild) {
                 $dom->removeChild($dom->firstChild);
               }

               while ($container->firstChild ) {
                 $dom->appendChild($container->firstChild);
               }

               $images = $dom->getElementsByTagName('img');
               

               foreach($images as $img){
                  $src = $img->getAttribute('src');
         
                  if(preg_match('/data:image/', $src)){ 
                  preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                  $mimetype = $groups['mime']; 
                  

                  $filename = uniqid();
                  $filepath = "/storage/$filename.$mimetype";
                  

                  $image = Image::make($src)
                  // resize if required
                  /* ->resize(300, 200) */
                 ->encode($mimetype, 100)
                 ->save(public_path($filepath)); 

                 $new_src = $filepath;
                 $img->removeAttribute('src');
                 $img->setAttribute('src', $new_src);
                }

              }


            $objeto->body = $dom->saveHTML();


        }
        $objeto->author_id = Auth::user()->id;
        $objeto->excerpt = $request->excerpt;
        $objeto->title = $request->title;
        $objeto->status = $request->status;
        $objeto->category_id = $request->category_id;
        if ($existeNoticia == 1) {
            if ($objeto->title != $request->title) {
                $objeto->seo_title = time().'-'.str_slug($request->title);
                $objeto->slug = time().'-'.str_slug($request->title);
            }
        }
        else{
            $objeto->seo_title = time().'-'.str_slug($request->title);
            $objeto->slug = time().'-'.str_slug($request->title);
        }
        $objeto->save();




        return redirect()->route('admin.seccion.noticias');
    }

    
    
}