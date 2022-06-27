<?php namespace App\Models;

use CodeIgniter\Model;

class SmtpAccount extends Model{

    protected $table = 'smtp_account';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        "id",
        "name_server",
        "port_server",
        "protocol_server",
        "user_smtp",
        "password_smtp",
    ];

    protected $createFields = [
        "id",
        "name_server",
        "port_server",
        "protocol_server",
        "user_smtp",
        "password_smtp",
    ];
    protected $updatedFields = [
        "id",
        "name_server",
        "port_server",
        "protocol_server",
        "user_smtp",
        "password_smtp",
    ];
    
}