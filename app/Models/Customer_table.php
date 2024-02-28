<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_table extends Model
{
    //id	name	phone	address	total_amount	
    public $table='customer_data';
    public $primaryKey = 'id';
    public $increamenting = true;
    public $timestamp = false;
}
