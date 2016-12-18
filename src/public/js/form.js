/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */
nr.form = {
    getSelect: function(p_name){
        return $('<select>',{
            class: 'mdl-textfield__input',
            name: p_name
        });
    },
    getSelectOption: function(p_value, p_text){
        return $('<option>',{
            value: p_value
        }).text(p_text);
    }
};
