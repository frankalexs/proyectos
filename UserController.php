<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent {

    protected $collection = 'users_collection';

}
?>