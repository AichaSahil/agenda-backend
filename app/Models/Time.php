<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
    protected $table='rendez_vous_date';
    public $timestamps = false;
    protected $primaryKey ='id';
    
    protected $fillable = [
        'date_time',
        'user_id',
        
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

}
