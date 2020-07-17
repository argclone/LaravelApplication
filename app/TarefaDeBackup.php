<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TarefaDeBackup extends Model
{
    protected $fillable = ['origem', 'destino', 'cron'];
}
