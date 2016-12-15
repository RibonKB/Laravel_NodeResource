<?php
/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */

namespace KelneBenath\NodeResource\Controllers;

use App\Http\Controllers\Controller;
use KelneBenath\NodeResource\Requests\StoreNode;
use KelneBenath\NodeResource\Models\Node;
use KelneBenath\NodeResource\Models\NodeInfo;

class NodifyController extends Controller
{
    /*
     * Shows a list of nodes and allows to add more
    */
    public function index(){
        return view('nrviews::nodify.nodify', [
            'nodes' => $this->getActualNodes()
        ]);
    }

    /*
     * Form: Create a new Node
    */
    public function newNode(){
        return view('nrviews::nodify.node-new',[
            'parents' => $this->getActualNodes()
        ]);
    }

    /*
     * Store a new Node
     * The Request is validated by StoreNode Class
    */
    public function create(StoreNode $request){
        $node = new Node();
        $node->parent_id = $request->nr_parent_id;
        $node->name = $request->nr_node_name;
        $node->description = $request->nr_node_description;
        $node->is_organizable = true;

        $info = new NodeInfo();
        $info->employ_description = $request->nr_node_employ;
        $info->is_leaf = true;

        $parent = Node::with('info')->find($request->nr_parent_id);

        \DB::transaction(function () use($node, $info, $parent){
            $node->save();
            $node->info()->save($info);
            if($parent->info->is_leaf == true){
                $parent->info->is_leaf = false;
                $parent->info->save();
            }
        });

        return redirect()->route('nr_node');
    }

    /*
     * Form: Edit a Node
    */
    public function edit($id){

    }

    /*
     * Store a modified Node
    */
    public function update($id){

    }

    /*
     * Deletes a Node
    */
    public function delete($id){

    }

    /*
     * Returns al the Nodes in the actual sub-tree like a list
     *
     * TO-DO: Filter the Nodes to receive only the accesible by the user.
    */
    private function getActualNodes(){
        return Node::where('is_organizable',true)->with('info')->get();
    }
}
