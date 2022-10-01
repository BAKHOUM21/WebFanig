<footer class="main-footer " style="color:white; background-color:rgb(1,1,1)">
    <div class="container">
        <div class="row  g-3 menu">
            <div class="col-md-4">
                <a href=" {{ route('home') }}" class=" text-center">
                    <img src="{{ asset('img/logo2.jpg') }}" width="150" height="80" alt="">
                </a>
                <p class="fs-5 text-white text-center">
                    <b>FANIG ENGINEERING</b> votre entreprise d’étude et de réalisations
                    de projets de Bâtiments et travaux publics.

                </p>

            </div>
            <div class="col-md-4 fs-5 text-white mt-5 text-center">
                <ul>
                    <b style="color: rgb(210,107,44)"><u>Links</u> </b>
                    <li><a href="{{route('home')}}">home</a></li>
                    <li><a href="#">Projects</a> </li>
                    <li><a href="#">Blog</a> </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="#">Realisations</a></li>
                </ul>
            </div>
            <div class="col-md-4 mt-5 text-center fs-5  text-white">
                <ul>
                    <b style="color: rgb(210,107,44)"><u>Contact</u></b>
                    
                    <li>
                        <a href="#" class="">     
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
                        
                            <p><b>Mobile:</b>(+221) 77 241 18 00</p>
                                           <p class="text-center">(+221) 77 216 40 67</p>
                       
                    </li>
                    
                   
                </ul>
            </div>
            

        </div>
    </div>
    <div class="text-center mt-5">
        Copyright &copy; 2021-2022 <a href="{{ asset('https://fanig.sn') }}"><b
                style="color: rgb(210,107,44)">FANIG</b></a>.
        All rights reserved.
    </div>

</footer>
