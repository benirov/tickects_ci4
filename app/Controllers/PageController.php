<?php namespace App\Controllers;
use App\Libraries\UtilsTickects;

class PageController extends BaseController
{

    public function __construct(){

        if($_SERVER["REQUEST_URI"] == '/PageController/getEmails'){

        }else{
            $utils = new UtilsTickects();
            if(!$utils->validateSesion()){
                header('Location: https://tickects-app-ci4.herokuapp.com/');
                exit;
            }
        }
    }

    
    

    public function listTickets(){

        $utils = new UtilsTickects();
        $data = $utils->getTickets(get_cookie("email"));
        $array = array("tickets" => $data);
        return view('list_tickets', $array);
    }


    public function getDetailTickect($id_ticket){

        $utils = new UtilsTickects();
        $data = $utils->getDetailTickect($id_ticket);
        echo json_encode($data);
    }



    public function getEmails(){
        
        $utils = new UtilsTickects();
        $utils->checkEMailInbox();
    }
}
