<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    public $primaryKey='pesanan_id';
    protected $table="pesanans";
    protected $fillable = [
        'pesanan_name','pesanan_desc','pesanan_logo'
    ];
    public function barangs(){
        return $this->hasMany(barangs::class, 'pesanan_id','pesanan_id');
    }
}
