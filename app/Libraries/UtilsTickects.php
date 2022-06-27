<?php namespace App\Libraries;

use App\Models\Users;
use App\Models\Tickects;
use App\Models\HistoricalTickects;
use App\Models\SmtpAccount;

class UtilsTickects
{
    // validate session
    public function validateSesion()
    {
        helper("cookie");
        // store a cookie value
        $cookie = get_cookie("email");
        return (isset($cookie) && !empty($cookie)) ?  true : false ;

    }

    // create session

    public function LogIn($email){

        $UserModel = new Users();

        $dataUser = $UserModel->where(["email" => $email])->findAll();

        if(count($dataUser) > 0){
            $this->createSession($email);
            return true;
        }else{
            return false;
        }

    }
    public function createSession($email)
    {
        helper("cookie");
        // store a cookie value
        set_cookie("email", $email, 3600);
        

    }


    public function getTickets($email){
        $UserModel = new Users();
        $dataUser = $UserModel->where(["email" => $email])->findAll();
        $idUser = $dataUser[0]["id"];
        $db      = \Config\Database::connect();
        $builder = $db->table('tickets');
        $builder->select('tickets.*, status_tickets.nombre_status');
        $builder->join("status_tickets", "status_tickets.id = tickets.status_ticket", "left");
        //$builder->where(["tickets.id_user" => $idUser]);
        $dataTickets = $builder->get();
        return $dataTickets->getResultArray();
    }

    public function getDetailTickect($id_ticket){
        $HistoricalTickects = new HistoricalTickects();
        $dataHistory = $HistoricalTickects->where(["id_ticket" => $id_ticket])->findAll();
        if(count($dataHistory) > 0){
                return array(
                    "code" =>  1,
                    "data" =>  $dataHistory
                );
        }else{
            return array(
                "code" =>  0,
                "data" => []
            );
        }
        
    }

    public function checkEMailInbox(){
        
        $SmtpAccount = new SmtpAccount();
        $UserModel = new Users();
        $Tickects = new Tickects();
        $HistoricalTickects = new HistoricalTickects();
        $data = $SmtpAccount->findAll();
        $name_server = $data[0]["name_server"];
        $port_server = $data[0]["port_server"];
        $protocol_server = $data[0]["protocol_server"];
        $user_smtp = $data[0]["user_smtp"];
        $password_smtp = $data[0]["password_smtp"];
        $mailbox = imap_open("{".$name_server.":".$port_server."/".$protocol_server."}INBOX", $user_smtp, $password_smtp);
        $mail = imap_search($mailbox, "UNSEEN");

        if(!empty($mail)){

            if(count($mail)){

                foreach ($mail as $key => $value) {
                    # code...
                    $mail_headers = imap_headerinfo($mailbox, $value);
                    $subject = $mail_headers->subject;
                    $body = imap_qprint(imap_body($mailbox, $value));
                    //user
                    $insert = array(
                        "email" => $mail_headers->from[0]->mailbox."@".$mail_headers->from[0]->host
                    );
                    $UserModel->insert($insert);
                    $user_id = $UserModel->getInsertID();
                    //ticket
                    $insert = array(
                        "title" => $subject,
                        "description" => $body,
                        "status_ticket" => 5,
                        "id_user" => $user_id
                    );
        
                    $Tickects->insert($insert);
                    $ticket_id = $Tickects->getInsertID();
        
                    $titles = array(
                        "Create",
                        "On queue",
                        "Assigned",
                        "Send solution",
                        "Ticket closed",
                    );
        
                    $descriptions = array(
                        "Ticket Create",
                        "Waiting for agent",
                        "Agent assigned",
                        "Send solution to client",
                        "ticket closed by agente",
                    );
                    for ($i=0; $i <= 4; $i++) { 
                        # code...
                        $insert = array(
                            "title" => $titles[$i],
                            "descripcion" => $descriptions[$i],
                            "id_ticket" => $ticket_id,
                        );
                        //HistoricalTickects
                        $HistoricalTickects->insert($insert);
                    }
                    
        
                    //history
        
        
                    
                }
                
            }

        }

        //imap_setflag_full($mailbox, $value, "\\Seen \\Flagged");
        imap_close($mailbox);
    }
}