@extends('_template')
@section('contact')
    <div class="container mt-5">
        <div class="row">
            <div class="container row d-flex  ">
                <div class="col-md-6 shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="img-fluid m-0 p-0">
                        <img src="img/contact-intro.png" alt="...">
                    </div>
                </div>
                <div class="col-md-6 shadow-lg p-3 mb-5 bg-body rounded">
                    <form action="" method="post">
                        <label class="block">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Nom
                            </span>
                            <input type="text" name="nom"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="Doe" />
                        </label>
                        <label class="block">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Prenom
                            </span>
                            <input type="text" name="email"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="John" />
                        </label>
                        <label class="block">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Email
                            </span>
                            <input type="email" name="email"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="you@example.com" />
                        </label>
                        <label class="block">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Téléphone
                            </span>
                            <input type="tel" name="tel"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="073-63-85-84" />
                        </label>
                        <label class="block">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Message
                            </span>
                            <textarea type="text" name="message" id="" cols="30" rows="10"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="you@example.com">
                           
                        </textarea>
                        </label>
                        <div class="m-3">
                            <button class="btn btn-md btn-primary">Envoyer</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10911.607323225393!2d-17.32269305181968!3d14.77827452583583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10b89978a489f%3A0x228f2f132a083af2!2sTerminus%2071%20keur%20massar%20unit%C3%A94!5e0!3m2!1sfr!2sma!4v1663638225155!5m2!1sfr!2sma" width="1410" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
@endsection
