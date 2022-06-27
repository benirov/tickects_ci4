<?php namespace App\Controllers;
use App\Libraries\UtilsTickects;
class Login extends BaseController
{
    public function index()
    {

        $data = $this->request->getPost("email");
        $utils = new UtilsTickects();
        $sesion = $utils->LogIn($data);
        return json_encode(array("code" => $sesion, "message" => "Found Data"));
    }
}
