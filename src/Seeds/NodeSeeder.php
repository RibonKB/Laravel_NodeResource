<?php
/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */
namespace KelneBenath\NodeResource\Seeds;

use Illuminate\Database\Seeder;

class NodeSeeder extends Seeder
{
    /**
     * Creates the initial pool of Nodes in the system
     */
    public function run()
    {
        $root = \DB::table('nodes')->insertGetId([
            'is_organizable' => true,
            'name' => 'NodeResourceRoot',
            'Description' => 'This Node represents the root of all NodeResource Tree',
            'created_at' => new \DateTime
        ]);

        \DB::table('node_info')->insert([
            'node_id' => $root,
            'is_leaf' => false,
            'employ_description' => 'Root Organizational Employment',
            'created_at' => new \DateTime
        ]);
    }
}
