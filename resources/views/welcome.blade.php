{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tarafé</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
        
    </body>
</html> --}}

@extends("layouts.master", ["title" => 'Accueil'])


@section("links")
    <link rel="stylesheet" href="assets/css/index.css">
@stop

@section("content")
   
    <!------            baniere tarafe      ------>
    <div class="div_grande_image">
        <img class="baniere_tarafe" src="assets/img/baniere_tarafe_1.jpg" alt="">
    </div>

    <!----------    div_nouveaute       ----------->
    <div class="div_nouveaute">
        <p class="p1" >Nouveautés</p>
        <div class="underline"></div>
    </div>

    <!----------    Produits nouveaute       ----------->
    <div class="brd">
        <div class="div_nouveaute_produit">
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="assets/img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="assets/img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            <div class="nouveaute01 hide">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="assets/img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="div_nouveaute">
        <p class="p1">Nos Produits</p>
        <div class="underline"></div>
    </div>


    <!----------        1ere ligne nos produits     --------------->
    <div class="brd">
        <div class="div_nouveaute_produit">
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="assets/img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="assets/img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            <div class="nouveaute01 hide">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="assets/img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!----------        2eme ligne nos produits     --------------->
    <div class="brd">
        <div class="div_nouveaute_produit">
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="assets/img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="assets/img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            <div class="nouveaute01 hide">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="assets/img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-------------     le blog--------------->
    <div class="div_blog">
        <div class="capture">
            <img class="capture" src="assets/img/Capture.JPG" alt="">
        </div>
        <div class="le_blog2">
            <p class="le_blog">Le blog</p>
            <p class="textile">Découvrez la richesse des texties Africains</p>
            <div class="link_blog">
                <a class="btn" href="#">Par ici</a>
            </div>
        </div>
    </div>

    <!-------------     Nos boutiques   --------------->
    <div class="div_nouveaute">
        <p class="p1">Nos Boutiques</p>
        <div class="underline"></div>
    </div>
    <div class="div_boutiques">
        <div class="row div_boutique01">
            <div class="col-sm-4 justify-center div_boutique02">
                <img class="boutique_logo" src="assets/img/tarafé1.png" alt="">
            </div>
            <div class="div_boutique03 col-sm-8">
                <p class="nom_boutique">La maison de l'elegance</p>
                <p class="description_boutique">
                    Ensemble de couturiers spécialisés dans la confection de 
                    tous types  de vêtements pour particuliers et entreprises . 
                </p>
                <div class="link_boutique">
                    <a href="#" class="btn">voir</a>
                </div>
            </div>
        </div>
    </div>

    @stop