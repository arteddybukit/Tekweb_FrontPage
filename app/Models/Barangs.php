<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangs extends Model
{
    use HasFactory;
    use HasFactory;
    public $primaryKey='barang_id';
    protected $table="barangs";
    protected $fillable = [
        'barang_code','barang_name','permailink','barang_desc','feature_img','pesanan_id'
    ];
    public function Pesanan(){
        return $this->belongsTo(Pesanan::class,'pesanan_id','pesanan_id');
    }
}
