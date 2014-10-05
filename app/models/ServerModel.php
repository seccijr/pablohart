<?php

class ServerModel extends Eloquent {

    protected $table = 'server';
    protected $fillable = array('key', 'value');
}
