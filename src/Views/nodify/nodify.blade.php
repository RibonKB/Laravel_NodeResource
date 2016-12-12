@extends('nrviews::layouts.layout')
@section('title','Nodify')

@section('content')
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            Nodify your Organization
        </div>
        <div class="node-justify mdl-card__supporting-text">
                In this section you can to create a node structure.
                <br><br>
                A node structure is a hierarchical mode to distribute and filter
                resources or operations in the system.
                <br><br>
                A node is an organizational unit that represents whatever you want,
                like a functional unit, departament or group of them.
        </div>
    </div>

    <div class="mdl-cell mdl-cell--9-col mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            Actual Nodification
        </div>
        <div class="mdl-card__supporting-text">
            @forelse ($nodes as $node)
                <ul class="mdl-list">
                    @include('nrviews::nodify.nodify-node')
                </ul>
            @empty
                <span class="mdl-chip mdl-chip--contact">
                    <span class="mdl-chip__contact mdl-color--blue mdl-color-text--white material-icons">info</span>
                    <span class="mdl-chip__text">No Nodes to Display, create the first <a href="{{route('nr_node_new')}}">HERE</a></span>
                </span>
            @endforelse
        </div>
        <div class="mdl-card__menu">
            <a href="{{route('nr_node_new')}}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-color-text--white">
                <i class="material-icons">add</i>
            </a>
        </div>
    </div>
</div>
@endsection
