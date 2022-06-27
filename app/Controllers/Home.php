<?php namespace App\Controllers;
use App\Libraries\UtilsTickects;

class Home extends BaseController
{
    public function index()
    {

        $utils = new UtilsTickects();
        if($utils->validateSesion()){
            return view('list_tickets');
        }else{
            return view('email_login');
        }
    }
}
