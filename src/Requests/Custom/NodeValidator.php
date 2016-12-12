<?php
/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */

namespace KelneBenath\NodeResource\Requests\Custom;

class NodeValidator {

    /**
     * This method validates if the node selected have a registered module.
     * In this case, the node is closed to add more children.
    */
    public function isClosedLeaf($attribute, $value, $parameters, $validator){
        return true;
    }

    /*
    |--------------------------------------------------------------------------
    | Validation Language Patch
    |--------------------------------------------------------------------------
    |
    | Laravel not supports translated validation messages exported from a
    | package, this method takes the message and return the explicit translation.
    |
    */
    public function translateError($message, $attribute, $rule, $parameters){
        return trans('nr::'.$message);
    }

}
