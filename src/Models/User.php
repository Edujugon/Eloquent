<?php

namespace Edujugon\Eloquent\Models;

include __DIR__.'/../../index.php';

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'res_users';

    public $timestamps = false;


}