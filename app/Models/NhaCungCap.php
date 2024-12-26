<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    //
    protected $fillable = ['ten', 'diachi', 'sdt', 'website', 'trangthai'];
    public $timestamps = false; // Tắt timestamps
}
