<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Nguoisudung extends Model
{
    public $timestamps = false;
    protected $table = 'nguoi_su_dung';
    public $updated_at = true;
    public $created_at = false;


}
