@extends('_template')
@section('contact')
    <div class="container mt-5">
        <div class="row">
            <div class="container m-auto row d-flex  ">
                <div class="col-md-6 shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="img-fluid m-0 p-0">
                        <img src="img/maison-sur-fond-blanc.jpg" alt="...">
                    </div>
                </div>
                <div class="col-md-6 shadow-lg p-3 mb-5 bg-body rounded">
                    <span >
                        <img src="{{ asset('img/logo4.jpg') }}" class='m-auto' width="320" height="80" alt="">
                    </span>
                    <form action="/home" method="get" class='mt-0 m-auto'>
                        <label class="block">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Email
                            </span>
                            <input type="email" name="e"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="you@example.com" />
                        </label>
                        <label class="block">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Password
                            </span>
                            <input type="password" name="pw"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="" />
                        </label>
                        <div class="float-end mt-3">
                            <button class="btn btn-md btn-primary">Se connecter</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
