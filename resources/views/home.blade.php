{{-- Heritage _template.blade.php --}}
@extends('_template')
{{-- Heritage _template.blade.php --}}

{{-- contenu --}}

@section('contenu')
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .contenu1 {
            height: calc(100vh - 150px) !important;
            background: url('img/hydrol.jpg') no-repeat;
            background-size: cover;
            /*     filter: brightness(50%);
     */
            /*     background-attachment: fixed;
     */
        }

        .contenu2 {
            height: calc(100vh - 150px) !important;
            background: url('img/route2.jpeg') no-repeat;
            background-size: 100%;
            /*     filter: brightness(50%);
     */
            /*     background-attachment: fixed;
     */
        }

        .contenu3 {
            height: calc(100vh - 150px) !important;
            background: url('img/bTerre2.jpg') no-repeat;
            background-size: cover;
            /*     filter: brightness(50%);
     */
            /*     background-attachment: fixed;
     */
        }

        .contenu4 {
            height: calc(100vh - 150px) !important;
            background: url('img/batiment.jpg') no-repeat;
            background-size: cover;
            /*     filter: brightness(50%);
     */
            /*     background-attachment: fixed;
     */
        }

        .contenu5 {
            height: calc(100vh - 150px) !important;
            background: url('img/formprof.jpg') no-repeat;
            background-size: cover;
            /*     filter: brightness(50%);
     */
            /*     background-attachment: fixed;
     */
        }

        .catalogue {
            min-height: 500px;
            width: 80%;
        }

        

        .separateur {
            margin-top: -5rem !important;
            width: 1300px;
        }

        .scroll-tag__text {
            /*  margin-right:auto;
      margin-left:auto;
      margin-top:0;
      margin-bottom:20px; */
            display: inline-block;
            transform: rotate(-90deg) translate(20px);
        }

        .bkground1 {
            height: calc(100vh - 350px) !important;
            background: url('img/construction1.jpeg') no-repeat fixed;
            background-size: cover;

        }
    </style>
    {{-- /contenu --}}


    {{-- Background-Caroussel --}}
    {{-- <div class="container-fluid contenu "></div> --}}
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        
        <div class="carousel-inner">
            {{-- <div class="carousel-item active " data-bs-interval="1000">
                <div class="container-fluid brightness-50 contenu1">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="fs-1 text-center"><strong style="color: rgb(210,107,44)">HYDRAULIQUE
                                ASSAINISSEMENT</strong></h1>
                        <p class="text-white fs-5 text-center">
                          <strong>
                            Pour tous vos travaux urbains,ruraux,routiers,agricoles...
                          </strong>
                        </p>
                    </div>

                </div>
            </div> --}}
            <div class="carousel-item active" data-bs-interval="1000">
                <div class="container-fluid  brightness-50 contenu2 "></div>
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="fs-1 text-center" style="color: rgb(210,107,44)"><strong>GÉOTECHNIQUE</strong></h1>
                    <p class="text-white fs-5	">{{-- Some representative placeholder content for the second slide. --}}</p>
                </div>
            </div>
            <div class="carousel-item " data-bs-interval="1000">
                <div class="container-fluid  brightness-50 contenu3 "></div>
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="fs-1 text-center" style="color: rgb(210,107,44)"><strong>MATÉRIAUX LOCAUX DÉVELOPPEMENT
                            DURABLE</strong></h1>
                    <p class="text-white fs-5	">{{-- Some representative placeholder content for the third slide. --}}</p>
                </div>
            </div>
            <div class="carousel-item " data-bs-interval="1000">
                <div class="container-fluid  brightness-50 contenu4 "></div>
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="fs-1 text-center" style="color: rgb(210,107,44)"><strong>BÂTIMENTS</strong></h1>
                    <p class="text-white fs-5	">{{-- Some representative placeholder content for the third slide. --}}</p>
                </div>
            </div>

            <div class="carousel-item " data-bs-interval="1000">
                <div class="container-fluid  brightness-50 contenu5 "></div>
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="fs-1 text-center" style="color: rgb(210,107,44)"><strong>FORMATIONS</strong></h1>
                    <p class="text-white fs-5	">{{-- Some representative placeholder content for the third slide. --}}</p>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- /Background-Caroussel --}}

        <div class="container-fluid">
            <h1 class="text-center fs-1 my-5"><strong>NOS SERVICES</strong></h1>
        </div>

        <div class="container bg-body shadow-lg p-3 mb-5 g-3 rounded">

          {{-- hydrolique_assainissement --}}
          <div class="container m-auto row d-flex g-1 ">
              <div class="col-md-6 m-auto">
                  <div class="bg-light">
                      <h1 class="fs-1 text-center"><strong style="color: rgb(210,107,44)">HYDRAULIQUE ASSAINISSEMENT</strong>
                      </h1>
                      <div class="list-inside text-justify ps-3">
                          <li class=" fs-4"><b> Hydraulique Urbain</b></li>
                          <li class=" fs-4"><b> Hydraulique rural</b></li>
                          <li class=" fs-4"><b> Assainissement non collectif</b></li>
                          <li class=" fs-4"><b> Assainissement routier</b></li>
                          <li class=" fs-4"><b> Aménagement Hydro-Agricole</b></li>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="img-fluid m-0 p-0">
                      <img src="img/hydrolique.jpg" alt="...">
                  </div>
              </div>
          </div>
          {{-- /hydrolique_assainissement --}}
          {{-- separateur --}}
          <div class="scroll-indicator my-5 d-flex" style="opacity: 1;">
              <div class="scroll scroll-tag m-auto">
                  {{-- <span class="scroll-tag__text ">Scrollez</span> --}}
                  <svg class="scroll-tag__arrow " width="12.82" height="27.5" viewBox="0 0 12.82 27.5">
                      <path class="arrow__second"
                          d="M5.41,50.75,2.12,47.46l-.71-.71L0,48.17l.71.7,5,5,.7.71.35-.35.35-.35,5-5,.71-.71-1.41-1.41-.71.71L7.41,50.75V27.67h-2Z"
                          data-svg-origin="6.409999847412109 41.124999046325684" style="transform-origin: 0px 0px 0px;"
                          transform="matrix(1,0,0,1,0,-0.2558559534839004)"></path>
                      <path class="arrow__first"
                          d="M5.41,23.08,2.12,19.79l-.71-.71L0,20.5l.71.7,5,5,.7.71.35-.35.35-.35,5-5,.71-.71-1.41-1.41-.71.71L7.41,23.08V0h-2Z"
                          data-svg-origin="6.409999847412109 13.454999923706055" style="transform-origin: 0px 0px 0px;"
                          transform="matrix(1,0,0,1,0,-2.578866595069324)"></path>
                  </svg>
              </div>
          </div>
          {{-- /separateur --}}
  
          {{-- geotechnique --}}
          <div class="container m-auto row d-flex g-1 ">
              <div class="col-md-6">
                  <div class="img-fluid m-0 p-0">
                      <img src="img/geotechnique.jpg" alt="...">
                  </div>
              </div>
              <div class="col-md-6 m-auto">
                  <div class="bg-light">
                      <h1 class="fs-1 text-center" style="color: rgb(210,107,44)"><strong>GÉOTECHNIQUE</strong></h1>
                      <div class="list-inside text-justify ps-3">
                          {{--      --}}
                        <li class=" fs-4"><b> Terrassement/ sondage Géophysique</b></li>
                        <li class=" fs-4"><b> Fondation superficielle / Profonde</b></li>
                        <li class=" fs-4"><b> Route (Tracé - Dimensionnement)</b></li>
                        <li class=" fs-4"><b> Formulation béton hydraulique</b></li>
                        <li class=" fs-4"><b> Stabilité des ouvrages Génie Civil Géotechnique, Hydraulique</b></li>
                        
                       </div>
                  </div>
              </div>
          </div>
          {{-- /geotechnique --}}
          {{-- separateur --}}
          <div class="scroll-indicator my-5 d-flex" style="opacity: 1;">
              <div class="scroll scroll-tag m-auto">
                  {{-- <span class="scroll-tag__text ">Scrollez</span> --}}
                  <svg class="scroll-tag__arrow " width="12.82" height="27.5" viewBox="0 0 12.82 27.5">
                      <path class="arrow__second"
                          d="M5.41,50.75,2.12,47.46l-.71-.71L0,48.17l.71.7,5,5,.7.71.35-.35.35-.35,5-5,.71-.71-1.41-1.41-.71.71L7.41,50.75V27.67h-2Z"
                          data-svg-origin="6.409999847412109 41.124999046325684" style="transform-origin: 0px 0px 0px;"
                          transform="matrix(1,0,0,1,0,-0.2558559534839004)"></path>
                      <path class="arrow__first"
                          d="M5.41,23.08,2.12,19.79l-.71-.71L0,20.5l.71.7,5,5,.7.71.35-.35.35-.35,5-5,.71-.71-1.41-1.41-.71.71L7.41,23.08V0h-2Z"
                          data-svg-origin="6.409999847412109 13.454999923706055" style="transform-origin: 0px 0px 0px;"
                          transform="matrix(1,0,0,1,0,-2.578866595069324)"></path>
                  </svg>
              </div>
          </div>
          {{-- /separateur --}}
  
  
  
          {{-- Brique2Terre --}}
          <div class="container  m-auto row d-flex g-1 ">
              <div class="col-md-6 m-auto">
                  <div class="bg-light">
                      <h1 class="fs-1 text-center" style="color: rgb(210,107,44)"><strong>MATÉRIAUX LOCAUX DÉVELOPPEMENT
                              DURABLE</strong></h1>
                              <div class="list-inside text-justify ps-3">
                                {{--        --}}
                              <li class=" fs-4"><b> Exploitation, formulation et production des briques et terres (Adobes, BTC, Enduit)</b></li>
                              <li class=" fs-4"><b> Vente de BTC, Adobes, Enduit en terre</b></li>
                              <li class=" fs-4"><b> Recherche - Contrôle des matériaux innovant</b></li> 
                             </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="img-fluid m-0 p-0">
                      <img src="img/brique.jpg" alt="...">
                  </div>
              </div>
          </div>
          {{-- Brique2Terre --}}
  
          {{-- separateur --}}
          <div class="scroll-indicator my-5 d-flex" style="opacity: 1;">
              <div class="scroll scroll-tag m-auto">
                  {{-- <span class="scroll-tag__text ">Scrollez</span> --}}
                  <svg class="scroll-tag__arrow " width="12.82" height="27.5" viewBox="0 0 12.82 27.5">
                      <path class="arrow__second"
                          d="M5.41,50.75,2.12,47.46l-.71-.71L0,48.17l.71.7,5,5,.7.71.35-.35.35-.35,5-5,.71-.71-1.41-1.41-.71.71L7.41,50.75V27.67h-2Z"
                          data-svg-origin="6.409999847412109 41.124999046325684" style="transform-origin: 0px 0px 0px;"
                          transform="matrix(1,0,0,1,0,-0.2558559534839004)"></path>
                      <path class="arrow__first"
                          d="M5.41,23.08,2.12,19.79l-.71-.71L0,20.5l.71.7,5,5,.7.71.35-.35.35-.35,5-5,.71-.71-1.41-1.41-.71.71L7.41,23.08V0h-2Z"
                          data-svg-origin="6.409999847412109 13.454999923706055" style="transform-origin: 0px 0px 0px;"
                          transform="matrix(1,0,0,1,0,-2.578866595069324)"></path>
                  </svg>
              </div>
          </div>
          {{-- /separateur --}}
  
          {{-- gestion2projet --}}
          <div class="container m-auto row d-flex g-1 ">
              <div class="col-md-6">
                  <div class="img-fluid ">
                      <img src="img/gestprojet.jpg" alt="...">
                  </div>
              </div>
              <div class="col-md-6 m-auto">
                  <div class="bg-light">
                      <h1 class="fs-1 text-center" style="color: rgb(210,107,44)"><strong>GESTION DE PROJETS</strong></h1>
                      <div class="list-inside text-justify ps-3">
                        {{--         --}}
                      <li class=" fs-4"><b> Suivi et évaluation de projet</b></li>
                      <li class=" fs-4"><b> Étude d’impact environnemental et social</b></li>
                     </div>
                  </div>
              </div>
  
          </div>
          {{-- /gestion2projet --}}
  
  
          {{-- separateur --}}
          <div class="scroll-indicator my-5 d-flex" style="opacity: 1;">
              <div class="scroll scroll-tag m-auto">
                  {{-- <span class="scroll-tag__text ">Scrollez</span> --}}
                  <svg class="scroll-tag__arrow " width="12.82" height="27.5" viewBox="0 0 12.82 27.5">
                      <path class="arrow__second"
                          d="M5.41,50.75,2.12,47.46l-.71-.71L0,48.17l.71.7,5,5,.7.71.35-.35.35-.35,5-5,.71-.71-1.41-1.41-.71.71L7.41,50.75V27.67h-2Z"
                          data-svg-origin="6.409999847412109 41.124999046325684" style="transform-origin: 0px 0px 0px;"
                          transform="matrix(1,0,0,1,0,-0.2558559534839004)"></path>
                      <path class="arrow__first"
                          d="M5.41,23.08,2.12,19.79l-.71-.71L0,20.5l.71.7,5,5,.7.71.35-.35.35-.35,5-5,.71-.71-1.41-1.41-.71.71L7.41,23.08V0h-2Z"
                          data-svg-origin="6.409999847412109 13.454999923706055" style="transform-origin: 0px 0px 0px;"
                          transform="matrix(1,0,0,1,0,-2.578866595069324)"></path>
                  </svg>
              </div>
          </div>
          {{-- /separateur --}}
  
  
  
          {{-- Bâtiment --}}
          <div class="container m-auto row d-flex g-1 ">
              <div class="col-md-6 m-auto">
                  <div class="bg-light">
                      <h1 class="fs-1 text-center" style="color: rgb(210,107,44)"><strong>BÂTIMENTS</strong></h1>
                      <div class="list-inside text-justify ps-3">
                        {{--   --}}
                      <li class=" fs-4"><b>Conception Plans Archi (2D-3D décoration intérieure)</b></li>
                      <li class=" fs-4"><b>Études plans béton armé</b></li>
                      <li class=" fs-4"><b>Études de prix – Devis</b></li>
                      <li class=" fs-4"><b>Suivi travaux - Réhabilitation</b></li>                      
                     </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="img-fluid m-0 p-0">
                      <img src="img/batiment.jpg" alt="...">
                  </div>
              </div>
          </div>
          {{-- Bâtiment --}}
  
  
          {{-- separateur --}}
          <div class="scroll-indicator my-5 d-flex" style="opacity: 1;">
              <div class="scroll scroll-tag m-auto">
                  {{-- <span class="scroll-tag__text ">Scrollez</span> --}}
                  <svg class="scroll-tag__arrow " width="12.82" height="27.5" viewBox="0 0 12.82 27.5">
                      <path class="arrow__second"
                          d="M5.41,50.75,2.12,47.46l-.71-.71L0,48.17l.71.7,5,5,.7.71.35-.35.35-.35,5-5,.71-.71-1.41-1.41-.71.71L7.41,50.75V27.67h-2Z"
                          data-svg-origin="6.409999847412109 41.124999046325684" style="transform-origin: 0px 0px 0px;"
                          transform="matrix(1,0,0,1,0,-0.2558559534839004)"></path>
                      <path class="arrow__first"
                          d="M5.41,23.08,2.12,19.79l-.71-.71L0,20.5l.71.7,5,5,.7.71.35-.35.35-.35,5-5,.71-.71-1.41-1.41-.71.71L7.41,23.08V0h-2Z"
                          data-svg-origin="6.409999847412109 13.454999923706055" style="transform-origin: 0px 0px 0px;"
                          transform="matrix(1,0,0,1,0,-2.578866595069324)"></path>
                  </svg>
              </div>
          </div>
          {{-- /separateur --}}
  
          {{-- Pavé et aménagement --}}
          <div class="container m-auto row d-flex g-1 ">
              <div class="col-md-6">
                  <div class="img-fluid m-0 p-0">
                      <img src="img/pave.jpg" alt="...">
                  </div>
              </div>
              <div class="col-md-6 m-auto">
                  <div class="bg-light">
                      <h1 class="fs-1 text-center" style="color: rgb(210,107,44)"><strong>PAVÉ ET AMÉNAGEMENT
                              PAYSAGE</strong></h1>
                              <div class="list-inside text-justify ps-3">
                                {{--   --}}
                              <li class=" fs-4"><b> Vente et pose</b></li>
                                                   
                             </div>
                  </div>
              </div>
              
          </div>
          {{-- /Pavé et aménagement --}}
  
  
          {{-- separateur --}}
          <div class="scroll-indicator my-5 d-flex" style="opacity: 1;">
              <div class="scroll scroll-tag m-auto">
                  {{-- <span class="scroll-tag__text ">Scrollez</span> --}}
                  <svg class="scroll-tag__arrow " width="12.82" height="27.5" viewBox="0 0 12.82 27.5">
                      <path class="arrow__second"
                          d="M5.41,50.75,2.12,47.46l-.71-.71L0,48.17l.71.7,5,5,.7.71.35-.35.35-.35,5-5,.71-.71-1.41-1.41-.71.71L7.41,50.75V27.67h-2Z"
                          data-svg-origin="6.409999847412109 41.124999046325684" style="transform-origin: 0px 0px 0px;"
                          transform="matrix(1,0,0,1,0,-0.2558559534839004)"></path>
                      <path class="arrow__first"
                          d="M5.41,23.08,2.12,19.79l-.71-.71L0,20.5l.71.7,5,5,.7.71.35-.35.35-.35,5-5,.71-.71-1.41-1.41-.71.71L7.41,23.08V0h-2Z"
                          data-svg-origin="6.409999847412109 13.454999923706055" style="transform-origin: 0px 0px 0px;"
                          transform="matrix(1,0,0,1,0,-2.578866595069324)"></path>
                  </svg>
              </div>
          </div>
          {{-- /separateur --}}
          {{-- FORMATIONS --}}
          <div class="container m-auto row d-flex g-1 ">
              <div class="col-md-6 m-auto">
                  <div class="bg-light">
                      <h1 class="fs-1 text-center" style="color: rgb(210,107,44)"><strong>FORMATIONS</strong></h1>
                      <div class="list-inside text-justify ps-3">
                        {{-- 


  --}}
                      <li class=" fs-4"><b> Logiciels de dessins bâtiment (autocad, Archicad, Lumion)</b></li>
                      <li class=" fs-4"><b> Logiciels de géotechnique (Alizé LCPC, Plaxis 2D, GEO5)</b></li>
                      <li class=" fs-4"><b> Technique de construction en terre crue et choix de la bonne terre</b></li>
                      <li class=" fs-4"><b> Logiciel de calcul de structure (Robot CBS/RSA GRAITEC, CYPE)</b></li>                      
                     </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="img-fluid m-0 p-0">
                      <img src="img/formation.jpg" alt="...">
                  </div>
              </div>
              
  
          </div>
          {{-- /FORMATIONS --}}
  
  
       
        </div>

        <div class="container-fluid bkground1 brightness-50  my-5">
            <div class="container">
                <div class="row py-3 g-3">
                    <div class="col-sm-4 bg-light">
                        <h1 class="text-center">Titre</h1>
                        <p class="text-center">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Deleniti tempore, expedita hic, porro neque eveniet ullam ipsum deserunt
                            praesentium officia rerum atque nemo dolorum, quo quisquam accusantium error
                            consequuntur eos?
                        </p>
                    </div>
                    <div class="col-sm-4 bg-light">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti tempore, expedita hic, porro
                        neque eveniet ullam ipsum deserunt praesentium officia rerum atque nemo dolorum, quo quisquam
                        accusantium error consequuntur eos?

                    </div>
                    <div class="col-sm-4 bg-light">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti tempore, expedita hic, porro
                        neque eveniet ullam ipsum deserunt praesentium officia rerum atque nemo dolorum, quo quisquam
                        accusantium error consequuntur eos?

                    </div>
                    <div class="col-sm-4 bg-light">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti tempore, expedita hic, porro
                        neque eveniet ullam ipsum deserunt praesentium officia rerum atque nemo dolorum, quo quisquam
                        accusantium error consequuntur eos?

                    </div>
                    <div class="col-sm-4 bg-light">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti tempore, expedita hic, porro
                        neque eveniet ullam ipsum deserunt praesentium officia rerum atque nemo dolorum, quo quisquam
                        accusantium error consequuntur eos?

                    </div>
                    <div class="col-sm-4 bg-light">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti tempore, expedita hic, porro
                        neque eveniet ullam ipsum deserunt praesentium officia rerum atque nemo dolorum, quo quisquam
                        accusantium error consequuntur eos?

                    </div>
                    <div class="col-sm-4 bg-light">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti tempore, expedita hic, porro
                        neque eveniet ullam ipsum deserunt praesentium officia rerum atque nemo dolorum, quo quisquam
                        accusantium error consequuntur eos?

                    </div>
                    <div class="col-sm-4 bg-light">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti tempore, expedita hic, porro
                        neque eveniet ullam ipsum deserunt praesentium officia rerum atque nemo dolorum, quo quisquam
                        accusantium error consequuntur eos?

                    </div>
                    <div class="col-sm-4 bg-light">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti tempore, expedita hic, porro
                        neque eveniet ullam ipsum deserunt praesentium officia rerum atque nemo dolorum, quo quisquam
                        accusantium error consequuntur eos?

                    </div>
                </div>
            </div>
        </div>
    @endsection

    
