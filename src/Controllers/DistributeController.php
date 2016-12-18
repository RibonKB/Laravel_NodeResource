<?php

namespace KelneBenath\NodeResource\Controllers;

use App\Http\Controllers\Controller;
use KelneBenath\NodeResource\Models\Node;
use KelneBenath\NodeResource\Requests\StoreDNode;

class DistributeController extends Controller
{
    public function index(){
        return view('nrviews::distribute.index', [
            'nodes' => $this->getActualNodes()
        ]);
    }

    /*
     * Form: Create a new Distribution Node
    */
    public function newNode(){
        return view('nrviews::distribute.new', [
            'parents' => $this->getOrganizationalNodes()
        ]);
    }

    /*
     * Store created distribution node
    */
    public function create(StoreDNode $request){
        $node = new Node();
        $node->parent_id = $request->nr_parent_id;
        $node->name = $request->nr_dnode_name;
        $node->description = $request->nr_dnode_description;
        $node->is_organizable = false;

        $node->save();

        return redirect()->route('nr_dnode');
    }

    /*
     * Returns all the Distribution Nodes in the actual sub-tree like a list
     *
     * TO-DO: Filter the Nodes to receive only the accesible by the user.
    */
    private function getActualNodes(){
        return Node::where('is_organizable',false)->get();
    }

    /*
     * Return all the Organizational Nodes in the actual sub-tree like a list
     *
     * WARN: This methods must be removed when actual user node can to be getted
    */
    private function getOrganizationalNodes(){
        return Node::where('is_organizable',true)->get();
    }
}
