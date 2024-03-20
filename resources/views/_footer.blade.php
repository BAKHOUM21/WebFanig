<footer class="main-footer" style="color:white; background-color:rgb(255,255,255)">
    <div class="container">
        <div class="row  g-3 menu">
            <div class="col-md-4">
                <a href=" {{ route('home') }}" class=" text-center">
                    <img src="{{ asset('img/logo4.jpg') }}" width="150" height="80" alt="">
                </a>
                <p class="fs-5 text-black ">
                    <b class='text-warning'>FANIG ENGINEERING</b> votre entreprise d’étude et de réalisations
                    de projets de Bâtiments et travaux publics.

                </p>

            </div>
            <div class="col-md-4 text-center fs-5 text-black mt-5 ">
                <ul>
                    <b style="color: rgb(210,107,44)"><u>Links</u> </b>
                    <li><a href="{{route('home')}}">home</a></li>
                    <li><a href="#">Projects</a> </li>
                    <li><a href="#">Blog</a> </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li class="nav-item dropdown fs-5">
                        <a class="nav-link dropdown-toggle"  href="#"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Réalisations
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: black">
                            <li><a class="dropdown-item fs-5" style="color: rgb(210,107,44)" href="#"><strong>HYDRAULIQUE
                                        ASSAINISSEMENT</strong> </a></li>
                            <li><a class="dropdown-item fs-5" style="color: rgb(210,107,44)"
                                    href="#"><strong>GÉOTECHNIQUE</strong> </a></li>
                            <li><a class="dropdown-item fs-5" style="color: rgb(210,107,44)" href="#"><strong>MATÉRIAUX
                                        LOCAUX</strong> </a></li>
                            <li><a class="dropdown-item fs-5" style="color: rgb(210,107,44)" href="#"><strong>GESTION DE
                                        PROJETS</strong> </a></li>
                            <li><a class="dropdown-item fs-5" style="color: rgb(210,107,44)"
                                    href="#"><strong>BÂTIMENT</strong> </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 mt-5 fs-5  text-black">
                <ul>
                    <b style="color: rgb(210,107,44)"><u>Contact</u></b>
                    
                    <li>
                        <a href="https://www.google.com/maps/dir//Terminus+71+keur+massar+unité4+QMHM%2BJ7G+Unnamed+Road+Keur+Massar,+Sénégal/@14.779118,-17.3168105,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0xec10b89978a489f:0x228f2f132a083af2!2m2!1d-17.3168105!2d14.779118" target="_blank" class="">     
                                <p>Keur Massar, Dakar, Sénégal</p>
                        </a>

                    </li>                  
                    <li>
                        <a href="mailto:fanigengineering@gmail.com" target="_blank" class="">
                            <div class="">
                                <h1>fanigengineering@gmail.com</h1>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div>
                            <p><b>Mobile:</b><a href="tel:+221 772411800">(+221) 77 241 18 00</a> </p>
                                           <p><a href="tel:+221 772164067">(+221) 77 216 40 67</a> </p>
                        </div>
                    </li>
                    
                   
                </ul>
            </div>
            
        </div>
    </div>
    <div class="text-center text-light pt-3 pb-3 mt-5 bg-dark">
        Copyright &copy; 2021-2022 <a href="{{ asset('https://fanig.sn') }}"><b
                style="color: rgb(210,107,44)">FANIG</b></a>.
        All rights reserved.
    </div>

</footer>
