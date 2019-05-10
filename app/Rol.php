<?php

namespace service_control;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "roles";

	public function users() {
		return $this->hasMany('service_control\User');
	}
}
