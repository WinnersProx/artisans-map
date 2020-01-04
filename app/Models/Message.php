<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\DateScopable;

class Message extends Model
{
	use DateScopable;
	
	protected $guarded = ['id'];
	
}
