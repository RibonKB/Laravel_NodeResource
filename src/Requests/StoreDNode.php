<?php

namespace KelneBenath\NodeResource\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDNode extends FormRequest
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
            'nr_dnode_related' => 'exists:nodes,id',
            'nr_dnode_name' => 'required|max:255|min:5',
            'nr_dnode_description' => 'required|max:500',
            'nr_parent_id' => 'required|exists:nodes,id'
        ];
    }
}
