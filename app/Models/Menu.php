<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = [
        'nama_menu',
        'kategori_id',
        'harga'
    ];

    public function kategori(){
        return $this->belongsTo(Category::class);
    }
}
