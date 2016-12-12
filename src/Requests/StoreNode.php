<?php
/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */

namespace KelneBenath\NodeResource\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNode extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nr_parent_id' => 'required|exists:nodes,id|nr_closed_leaf',
            'nr_node_name' => 'required|max:255|min:5',
            'nr_node_description' => 'required|max:500',
            'nr_node_employ' => 'max:500'
        ];
    }

}
