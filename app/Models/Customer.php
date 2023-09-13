<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'dni';
    protected $fillable =[
        'dni',
        'id_reg',
        'id_com',
        'email',
        'name',
        'last_name',
        'address',
        'date_reg',
        'status',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'id_reg');
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class, 'id_com');
    }
}
