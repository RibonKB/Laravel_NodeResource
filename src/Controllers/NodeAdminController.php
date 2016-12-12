<?php
/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */

namespace KelneBenath\NodeResource\Controllers;

use App\Http\Controllers\Controller;

class NodeAdminController extends Controller{

    public function index(){
        return view('nrviews::dashboard');
    }
}
