<div class="header-v6 header-dark-transparent header-sticky fixed-style-responsive">
   <div class="navbar mega-menu" role="navigation" id="black-back-">
      <div class="container">
         <div class="menu-container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">
               <a href="{{route('web.home')}}">
                  <img class="default-logo" src="{{asset('img/javiermiyasato_logo.png')}}" alt="Logo">
                  <img class="shrink-logo" src="{{asset('img/firma_javier.png')}}" alt="Logo">
                  <img class="shrink-fixed-logo responsive-none" src="{{asset('img/jm_logo_responsive.png')}}" alt="Logo">
               </a>
            </div>
         </div>
         <div class="collapse navbar-collapse navbar-responsive-collapse">
            <div class="menu-container">
               <ul class="nav navbar-nav">
                  <li class="dropdown page-scroll">
                     <a href="{{route('web.home')}}" class="dropdown-toggle a-nav">
                        <span class="nav-color">
                           INICIO
                        </span>
                     </a>
                     @if( \Request::route()->getName() == 'web.blog' )
                     <li class="dropdown page-scroll">
                        <a href="#entradas" id="a-entradas" class="dropdown-toggle a-nav">
                           <span class="nav-color">
                              ULTIMAS ENTRADAS
                           </span>
                        </a>
                     </li>
                     @else
                     <li class="dropdown">
                        <a href="{{route('web.blog')}}" id="a-entradas" class="dropdown-toggle a-nav">
                           <span class="nav-color">
                              ULTIMAS ENTRADAS
                           </span>
                        </a>
                     </li>
                     @endif
                     <li class="menu-icons" style="padding-left: 140px;display: inline-flex;">
                        <a href="https://www.instagram.com/javiermiyasato/" target="_blank" style="padding: 0;padding-right: 20px;margin-top: -9px;" class="a-title-icons">
                           <div class="redes-sociales-top-insta">
                              <i class="fa fa-instagram" aria-hidden="true" style="position:absolute;"></i>
                           </div>
                        </a>
                     </li>
                     <!-- <li class="dropdown page-scroll">
                        <a href="#servicios" class="dropdown-toggle a-nav">
                           <span class="nav-color">
                              BUSCAR
                           </span>
                        </a>
                     </li> -->
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>