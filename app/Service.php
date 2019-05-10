<?php

namespace service_control;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    return $this->hasOne(related: 'service_control\Rol', foreignKey:'user_id', localKey:'id');
}
