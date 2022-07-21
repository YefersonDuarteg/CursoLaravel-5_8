<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $filleable = ['nombre','url','icono'];
    protected $guarded = ['id'];
    // protected $timestamps = false;
    
}
