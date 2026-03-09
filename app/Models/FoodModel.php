<?php

namespace App\Models;

use CodeIgniter\Model;

class FoodModel extends Model
{
    protected $table = 'food';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'title',
        'description',
        'price',
        'image',
    ];
}