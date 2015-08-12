<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class first_project_db extends Model
{
  public $timestamps = true;
  protected $dateFormat = 'U';
  protected $table = 'query_detail';
  protected $primarykey = 'user_id';
}
