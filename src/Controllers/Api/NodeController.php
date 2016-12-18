<?php
namespace KelneBenath\NodeResource\Controllers\Api;

use App\Http\Controllers\Controller;
use KelneBenath\NodeResource\Models\Node;

class NodeController extends Controller{

    public function index(){
        $nodes = Node::all();

        return $nodes->toJson();
    }

}
