<?php
/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */

namespace KelneBenath\NodeResource\Models;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    public function info(){
        return $this->hasOne('KelneBenath\NodeResource\Models\NodeInfo');
    }

    public function distribution(){
        return $this->belongsToMany(
            Node::class, 'distribution',
            'distribution_node_id',
            'organizational_node_id'
        )->withTimestamps();
    }
}
