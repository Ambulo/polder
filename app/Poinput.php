<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poinput extends Model
{
	public function ledgers()
	{
		return $this->hasMany('App\Ledger', 'poNum');
	}
}
