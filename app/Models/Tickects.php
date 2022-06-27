<?php namespace App\Models;

use CodeIgniter\Model;

class Tickects extends Model{

    protected $table = 'tickets';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        "id",
        "title",
        "description",
        "solution_ticket",
        "status_ticket",
        "id_user",
    ];

    protected $createFields = [
        "title",
        "description",
        "solution_ticket",
        "status_ticket",
        "id_user",
    ];
    protected $updatedFields = [
        "title",
        "description",
        "solution_ticket",
        "status_ticket",
        "id_user",
    ];
    
}