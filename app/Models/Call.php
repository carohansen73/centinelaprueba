<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
  //para conectarme
  protected $table = 'call';

    //atributos
  protected $fillable = [
    'id', 'emitter_name', 'date', 'call_description', 'emitter_area', 'notified'
  ];





}

