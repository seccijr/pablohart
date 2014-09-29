<div id="headerUpBar" class="clearfix">
    <div id="cntTop">
        <div id="userBar">
            <div id="login">
                <ul class="notLogged clearfix">
                    <li class="first">
                        <a href="#" rel="nofollow">Iniciar sesión
                        </a>
                    </li>
                    <li>
                        <a href="#" rel="nofollow">Regístrate
                        </a>
                    </li>
                    <li class="last">
                        <a href="#" rel="nofollow">Atención al cliente
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="containerNewsletter">
        <div id="newsletter" class="clearfix">
            <span>Boletín de noticias
            </span>
            <input id="newsletterInput" type="text" placeholder="Introduzca su correo" />
            <input type="hidden" id="newsletterButton">
            </input>
            <a id="newsletterSubmit">
            </a>
        </div>
    </div>
</div>
<div class="headerCnt">
    <span class="logoTop">
        {{ HTML::image('img/logo.png'); }}
    </span>
    <div class="switchSeason clearfix">
        <ul>
            <li>
                <span class="mainSeason">OTOÑO/INVIERNO 2014
                </span>
            </li>
        </ul>
    </div>
    <div class="switchSection clearfix">
        <ul>
            <li>
                @if(isset($section) && $section === 'fashion')
                    <span>Moda
                    </span>
                @else
                    <a href="/">Moda
                    </a>
                @endif
            </li>
            <li>|
            </li>
            <li>
                @if(isset($section) && $section === 'art')
                    <span>Arte
                    </span>
                @else
                    <a href="/art">Arte
                    </a>
                @endif
            </li>
        </ul>
        <div class="mainSections clearfix">
            <div id="mainSectionsInner" class="right">
                <ul class="navCnt">
                    <li>
                        <a id="wishBtn" href="#" rel="nofollow">Lista de deseos
                        </a>
                    </li>
                    <li>|
                    </li>
                    <li>
                        <span rel="nofollow" id="cartLink">Bolsa de compras
                            <span id="cartNum">
                                ( 0 )
                            </span>
                            <span id="addToShoppingBag">
                            </span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="bannerMenu" class="clearfix">
        <div class="banner3">
            <img src="http://cdn2.yoox.biz/os/valentino/banners/1149_1_VL_free_standard_shipping_definitivo.jpg" alt="TOP_3_VAL" />
        </div>
        <div class="clear">
        </div>
    </div>
</div>
