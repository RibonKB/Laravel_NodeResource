@extends('nrviews::layouts.form')
@section('title','Create a new Node')

@section('content')
@if(count($errors))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="" action="{{route('nr_node_create')}}" method="post">
    {{ csrf_field() }}
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col mdl-shadow--4dp mdl-card mdl-cell--12-col-phone mdl-cell--12-col-tablet">
            <div class="mdl-card__title">
                Node Options
            </div>
            <div class="mdl-card__supporting-text">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <select name="nr_parent_id" id="nr_parent_id" class="mdl-textfield__input" required>
                        @foreach ($parents as $node)
                            <option value="{{$node->id}}">{{$node->name}}</option>
                        @endforeach
                    </select>
                    <label class="mdl-textfield__label" for="nr_parent_id">Select the parent Node</label>
                </div>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--8-col mdl-shadow--4dp mdl-card mdl-cell--12-col-phone mdl-cell--12-col-tablet">
            <div class="mdl-card__title">
                Creating a new Node
            </div>
            <div class="mdl-card__supporting-text">
                @include('nrviews::nodify.node-new-infoform')
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <input type="submit" value="Submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
            </div>
        </div>
    </div>
</form>
@endsection

@section('form-scripts')
    <script type="text/javascript" src="/vendor/kelnebenath/noderesource/js/nodify/main.js"></script>
@endsection
