<?php

namespace App\Scopes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait DateScopable
{
	public static function scopeTwoMonthsOld(Builder $query)
	{
		$query->where('created_at', '<=', Carbon::parse('2 months ago'));
	}

	public static function scopeToday(Builder $query)
	{
		$query->where('created_at', '<=', Carbon::parse('24 hours'));
	}

}