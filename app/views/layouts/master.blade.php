<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html ng-app="com.woodride.webapp.pablo">
    <head>
        @section('head')
            @include('includes.head', array('title' => 'Pablo Hart'))
        @show
    </head>
    <body id="home" class="valentino ">
        <div id="container">
            <div id="header">
                @section('header')
                    @include('includes.header')
                @show
            </div>
            <div id="subheader">
                <div id="subMenu" class="clearfix">
                    @section('navigation')
                        @include('includes.navigation', array(
                            'locations' => array(
                                'Inicio' => array(
                                    'ulr' => '/'
                                ),
                                'Acerca de nosotros' => array(
                                    'url' => '/about',
                                ),
                                'Contacta' => array(
                                    'url' => '/contact'
                                ))))
                    @show
                </div>
                <div id="searchLens">
                </div>
                <div id="searchBar">
                    <div id="searchCnt" class="a hfBtn" style="overflow: hidden; ">
                        <div id="searchBox" class="clearfix">
                            <form action="/" id="textSearch" class="clearfix">
                                <span>Research</span>
                                <input id="searchTextbox" type="text" name="criteria" placeholder="Búsqueda" />
                                <input type="submit" id="searchButton" class="clearfix" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="wrapper">
                @yield('content')
            </div>
            <div id="footer" class="hmenu">
                @section('footer')
                    @include('includes.footer')
                @show
            </div>
        </div>
    </body>
</html>
