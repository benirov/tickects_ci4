<?php namespace App\Models;

use CodeIgniter\Model;

class Users extends Model{

    protected $table = 'profle_user';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        "id",
        "email",
        "create_at",
    ];

    protected $createFields = 'email';
    protected $updatedFields = 'email';
    
}