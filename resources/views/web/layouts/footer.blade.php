<?php $general = App\General::where('id',1)->first(); ?>

<div id="contacto" style="position: relative;">
   <div class="container content-md">
      <div class="row">
         <div class="col-md-6 md-margin-bottom-40 top-form col-md-push-6">
            <p class="contacto" style="padding-top: 70px;">con <br><span style="padding-left: 45px;">tacto</span></p>
            <form action="#" method="post" enctype="multipart/form-data" id="sky-form1" class="sky-form sky-form-mobile">
               <fieldset>
                  <div class="row">
                     <section class="col col-11">
                        <label class="input">
                           <input type="text" name="name" placeholder="Nombre">
                        </label>
                     </section>
                  </div>
                  <div class="row">
                     <section class="col col-11">
                        <label class="input">
                           <input type="email" name="email" placeholder="E-mail">
                        </label>
                     </section>
                  </div>
                  <div class="row">
                     <section class="col col-11">
                        <label class="textarea">
                           <textarea rows="5" name="comment" placeholder="Mensaje"></textarea>
                        </label>
                     </section>
                  </div>
               </fieldset>
               <footer class="col col-11 bott-enviar-css">
                  <button type="submit" class="btn-u width-100-footer-boo" style="letter-spacing:4px;font-family: 'gaspo_slabregular', Arial, sans-serif">ENVIAR</button>
                  <div class="progress"></div>
               </footer>
            </form>
            <div style="    display: -webkit-inline-box;    padding: 0px 30px;padding-top: 45px;">
               <img src="{{asset('storage/'.$general->contacto_logo)}}" alt="">
               <ul style="color:black;    font-size: 15px;    padding-top: 0px;">
                  <li style="line-height: 18px;">{!! $general->contacto_texto_1 !!}</li>
                  <li style="padding-top: 8px;line-height: 18px;">{!! $general->contacto_texto_2 !!}</li>
                  <li style="padding-top: 7px;line-height: 18px;">{!! $general->contacto_texto_3 !!}</li>
               </ul>
            </div>
         </div>
         <div class="col-md-6 overflow-h mapa-mitad top-css-responsive-map">
         {!! $general->contacto_mapa !!}
         </div>
      </div>
   </div>
</div>
<div class="color-black-bac">
<div class="container content-md" style="padding-top: 50px;padding-bottom: 45px;">
<div class="row">
         <div class="col-md-12" style="    text-align: center;">
            <a href="https://www.instagram.com/javiermiyasato/" target="_blank">
            <img src="{{asset('img/insta_normal.png')}}"  style="    width: 40px;"></a>
            <p class="footer-text-foo">All Rights Reserved. Developed by Elemental Studio</p>
         </div>
      </div>
            
   </div>
   <img src="{{asset('img/Logo-Elemental-footer.png')}}" alt="" style="width: 150px;margin-left: 75px;margin-bottom: 40px;">
</div>