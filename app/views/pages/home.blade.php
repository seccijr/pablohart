@extends('layouts.master')

@section('head')
    @include('includes.head', array('title' => 'Pablo Hart - Inicio'))
@stop

@section('navigation')
    @include('includes.navigation', array(
        'locations' => array(
            'Inicio' => array(
                'ulr' => '/home',
                'selected' => true
            ),
            'Acerca de nosotros' => array(
                'url' => '/about',
            ),
            'Contacta' => array(
                'url' => '/contact'
            ))))
@stop

@section('content')
    <div id="content" class="cols">
    </div>
    <div id="col1" class="cols">
        <div class="innerCol">
            <div id="slotContainer">
                <div class="innerSlot01">
                    <img src="http://cdn2.yoox.biz/os/valentino/banners/101_1_HP_ADV_DONNA_2sett.jpg" id="banner_IDASFCBO" />
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
@stop
