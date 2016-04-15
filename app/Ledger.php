<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{
	public function poinput()
	{
		return $this->belongsTo('App\Poinput');
	}
}
