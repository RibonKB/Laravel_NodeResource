/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */
var nr_dnode_new = {
    //Members
    el: {
        btn_AddRelated: $('#nr_node_add'),
        div_RelatedActions: $('#nr_related_actions'),
        div_RelatedItems: $('#nr_related_items')
    },
    url: {},
    m_RelatedNodeData: [],

    //construct
    init: function(){
        this.loadRelatedNodes();
    },

    //Methods
    loadRelatedNodes: function(){
        var loader = nr.getSpinLoader().attr('id','nr_relatedLoader');
        this.el.div_RelatedActions.append(loader);
        $.getJSON(this.url.json_RelatedNodes, function(p_data){
            nr_dnode_new.m_RelatedNodeData = p_data;
            $('#nr_relatedLoader').remove();
            nr_dnode_new.el.btn_AddRelated.removeAttr('disabled').click(nr_dnode_new.addRelated);
        });
    },

    addRelated: function(){
        var select = nr_dnode_new.getRelatedSelect();
        var item = nr.getDeletableListItem('chevron_right');
        item.find('.nr_item_content').append(select);
        nr_dnode_new.el.div_RelatedItems.append(item);
    },

    getRelatedSelect: function(){
        var select = nr.form.getSelect('nr_dnode_related[]');
        $.each(nr_dnode_new.m_RelatedNodeData,function(p_index, p_value){
            select.append(nr.form.getSelectOption(p_value.id, p_value.name));
        });
        return select;
    }
};
