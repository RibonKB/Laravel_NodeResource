<?php
/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */

namespace KelneBenath\NodeResource\Models;

use Illuminate\Database\Eloquent\Model;

class NodeInfo extends Model
{
    protected $table = 'node_info';

    public function node(){
        return $this->belongsTo('KelneBenath\NodeResource\Models\Node');
    }
}
