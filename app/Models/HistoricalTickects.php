<?php namespace App\Models;

use CodeIgniter\Model;

class HistoricalTickects extends Model{

    protected $table = 'historical_tickets';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        "id",
        "title",
        "descripcion",
        "create_at",
        "id_ticket",
    ];

    protected $createFields = [
        "descripcion",
        "title",
        "create_at",
        "id_ticket",
    ];
    protected $updatedFields = [
        "descripcion",
        "title",
        "create_at",
        "id_ticket",
    ];
    
}