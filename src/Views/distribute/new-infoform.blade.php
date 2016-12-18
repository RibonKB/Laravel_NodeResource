<div class="mdl-card__title">
    Describe the Node
</div>
<div class="mdl-card__supporting-text">

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <select class="mdl-textfield__input" id="nr_parent_id" name="nr_parent_id">
        @foreach($parents as $p)
            <option value="{{$p->id}}">{{$p->name}}</option>
        @endforeach
        </select>
        <label class="mdl-textfield__label" for="nr_parent_id">Organizational Parent</label>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="nr_dnode_name" name="nr_dnode_name" pattern="[a-zA-Z0-9\s]{5,255}">
        <label class="mdl-textfield__label" for="nr_dnode_name">Name</label>
        <span class="mdl-textfield__error">The name length must be at least 5 character and no more than 255 (Only alpha-numeric)</span>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <textarea class="mdl-textfield__input" id="nr_dnode_description" name="nr_dnode_description" rows="8" cols="50" pattern="[a-zA-Z0-9]*"></textarea>
        <label class="mdl-textfield__label" for="nr_node_description">Description</label>
        <span class="mdl-textfield__error">The name length must be at least 5 character and no more than 255</span>
    </div>
</div>
