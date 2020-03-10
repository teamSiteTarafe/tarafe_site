<link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.css') }}">

<!-----------           contact         ------>
<div class="barre1 row">
    <p class="contact col-auto mr-auto">Tarafeci@gmail.com</p>
    <p class="compte col-auto"><a href="dashboard.php">dashboard</a><a href="{{ route('account')}}" class="btn"><img class="logo_compte" src="{{ asset('assets/img/compte.png') }}" alt=""> compte</a></p>
</div>


<!-----------           logo + search input + panier              ------>
<div class="barre2 row">
    <div class="div_logo col-auto mr-auto">
        <a href="index.php" class="btn nbt"><img class="logo_img" src="{{ asset('assets/img/tarafé1.png') }}" alt=""></a>
    </div>
    <div class="div_input col-auto mr-auto">
        <form class="form_search" action="#">
            <input class="search" type="search" placeholder="Rechercher">
            <button class="submit00" ><img class="submit01" src="{{ asset('assets/img/search.png') }}" alt=""></button>
        </form>
    </div>
    <div class="div_panier col-auto">
        <div class="row div_panier2">
            <a href="#" class="btn votre_panier">Votre Panier<img class="panier_logo" src="{{ asset('assets/img/panier.jpg') }}" alt=""></a>
        </div>
    </div>
</div>


<!-----------           nav button              ------>
<div class="barre3 row">
    <div class="barre_bouton">
        <ul class="ul_bouton row">
            <li class="li_bouton"><a href="{{ route('products')}}" class="btn nbt">Produits</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton"><a href="{{ route('shops')}}" class="btn nbt">Boutiques</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton"><a href="{{ route('service')}}" class="btn nbt">Services</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton"><a href=" {{ route('gallery')}}" class="btn nbt">Galerie</a></li>
            <span class="0separator00"></span>
        <li class="li_bouton"><a href="{{ route('blog')}}" class="btn nbt">Blog</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton"><a href="#" class="btn nbt">A propos</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton d_h"><a href="{{ url('login') }}" class="btn nbt">Connexion</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton d_h"><a href="{{ url('register') }}" class="btn nbt">Inscription</a></li>
        </ul>
    </div>
    <div class="trois_traits">
        <div class="trait"></div>
        <div class="trait"></div>
        <div class="trait"></div>
    </div>
    <!---------- barre de recherche pour smartphone ------>
    <div class="div_input2">
        <form class="form_search" action="#">
            <input class="search1" type="search" placeholder="Rechercher">
            <button class="submit00" ><img class="submit01" src="{{ asset('assets/img/search.png') }}" alt=""></button>
        </form>
    </div>
    <div class="div_connexion">
        <div class="div_connexion2">
            <a href="{{ url('login') }}" class="btn nbt">Connexion</a>
            <span class="0separator00"></span>
            <a href="{{ url('register') }}" class="btn nbt">Inscription</a>
        </div>
    </div>
    
</div>

<script src="{{ asset('assets/js/menu.js') }}"></script>