<?php

class ServerController extends BaseController {
    public function getIp() {
        $ipKey = ServerModel::where('key', '=', 'ip')->firstOrFail();;

        return $ipKey->value;
    }

    public function setIp() {
        $ipKey = ServerModel::firstOrNew(array('key' => 'ip'));
        $ipKey->value =  Request::server('REMOTE_ADDR');
        $ipKey->save();

        return $ipKey->value;
    }
}
