@extends('layouts.master')

@section('navigation')
    @include('includes.navigation', array(
        'locations' => array(
            'Inicio' => array(
                'url' => '/art',
            ),
            'Urbano' => array(
                'url' => '/urban',
            ),
            'Comic' => array(
                'url' => '/comic',
            ),
            'Contemporáneo' => array(
                'url' => '/contemporaneous',
                'selected' => true
            ))))
@stop

@section('content')
    <div id="content" class="cols">
    </div>
    <div id="col1" class="cols">
        <div class="innerCol">
            <div id="slotContainer">
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
@stop
