<footer class="main-footer " style="color:white; background-color:rgb(1,1,1)">
    <div class="container">
        <div class="row  g-3 menu">
            <div class="col-md-3 ">
                <a href=" {{ route('home') }} ">
                    <img src="{{ asset('img/logo2.jpg') }}" width="150" height="80" alt="">
                </a>
                <p class="fs-5 text-white text-center">
                    <b>FANIG ENGINEERING</b> votre entreprise d’étude et de réalisations
                    de projets de Bâtiments et travaux publics.

                </p>

            </div>
            <div class="col-md-3 fs-5 text-white mt-5 text-center">
                <ul>
                    <b style="color: rgb(210,107,44)"><u>Links</u> </b>
                    <li><a href="{{route('home')}}">home</a></li>
                    <li><a href="#">Projects</a> </li>
                    <li><a href="#">Blog</a> </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="#">Réalisations</a></li>
                </ul>
            </div>
            <div class="col-md-3 mt-5 text-center fs-5  text-white">
                <ul>
                    <b style="color: rgb(210,107,44)"><u>Our Contact</u></b>
                    
                    <li>
                        <a href="#" class="">
                            <div class="" style="float: right">
                                <h1>Keur Massar, Dakar, Sénégal</h1>
                            </div>
                            <div class="text-align" style="float: left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </div>
                        </a>

                    </li>
                   
                    <li>
                        <a href="mailto:fanigengineering@gmail.com" class="">
                            <div class="" style="float: right">
                                <h1>fanigengineering@gmail.com</h1>
                            </div>
                            <div class="text-align" style="float: left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                  </svg>
                            </div>
                        </a>

                    </li>

                    <li>
                        <div class="" style="float: right">
                            <p><b>Mobile:</b>(+221) 77 241 18 00/(+221) 77 216 40 67</p>
                        </div>
                    </li>
                    
                   
                </ul>
            </div>
            <div class="col-md-3 text-center fs-5  text-white mt-5 ">
               
               
            </div>

        </div>
    </div>
    <div class="text-center mt-5">
        Copyright &copy; 2021-2022 <a href="{{ asset('https://fanig.sn') }}"><b
                style="color: rgb(210,107,44)">FANIG</b></a>.
        All rights reserved.
    </div>

</footer>
