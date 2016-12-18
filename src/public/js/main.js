/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */
var nr = {
    //Member

    //Construct
    init: function(){
        document.getElementById('node-logout-btn').addEventListener('click',function(){
            var form = document.getElementById('node-logout-form').submit();
        });
    },

    //Methods
    getSpinLoader: function(){
        return $('<div>',{
            class: 'mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active'
        })
    },

    getDeletableListItem: function(p_icon){
        var icon = $('<i>',{class:'material-icons mdl-list__item-icon'}).text(p_icon);
        var btn_delete = $('<a>',{
            class: 'mdl-list__item-secondary-action',
            href: '#'
        }).append($('<i>',{class:'material-icons'}).text('cancel')).click(function(){
            $(this).parent().remove();
        });
        var content = $('<span>',{class:'mdl-list__item-primary-content nr_item_content'}).append(icon);
        return $('<div>',{class:'mdl-list__item'}).append(content).append(btn_delete);
    }
};
nr.init();
