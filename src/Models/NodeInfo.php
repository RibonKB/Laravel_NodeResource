<?php

namespace KelneBenath\NodeResource\Models;

use Illuminate\Database\Eloquent\Model;

class NodeInfo extends Model
{
    public function node(){
        return $this->belongsTo('KelneBenath\NodeResource\Models\Node');
    }
}
