
@extends("layouts.master", ["title" => 'Mon compte'])

@section("links")
<link rel="stylesheet" href="assets/css/compte.css">
@stop

@section("content")

    <!----------    div_nouveaute       ----------->
    <div class="div_nouveaute">
        <p class="p1" >Mon compte</p>
        <div class="underline"></div>
    </div>
    
    <!----------    information       ----------->
    <div class="divinfo00">
        <div class="titre_info00">
            <div class="trois1 01">
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
            </div>
            <div class="categorie">
                Mes informations
            </div>
        </div>
        <div class="info00 001">
            <div class="info01">
                <p class="">Nom</p>
                <p class="">Prenom</p>
                <p class="">E-mail</p>
                <p class="">Numéro de téléphone</p>
                <p class="modifbtn"><a href="inscription.php" class="btn">Modifier</a></p>
            </div>
        </div>
    </div>

    <!----------    commandes       ----------->
    <div class="divinfo00">
        <div class="titre_info00">
            <div class="trois1 02">
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
            </div>
            <div class="categorie">
                Mes commandes
            </div>
        </div>
        <div class="info00 pd 002">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <td>Produit</td>
                            <td>Boutique</td>
                            <td>Etat d'avancement</td>
                            <td>Date de commande</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>t-shirt</td>
                            <td>la maison de l'elegance</td>
                            <td>A yopugon</td>
                            <td>Aujourd'hui</td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

    <!----------    favoris       ----------->
    <div class="divinfo00">
        <div class="titre_info00">
            <div class="trois1 03">
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
            </div>
            <div class="categorie">
                Mes Favoris
            </div>
        </div>
        <div class="info00 003 produit">
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
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
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
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
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
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
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
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

@stop
@section('scripts')

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/compte.js"></script>
@stop