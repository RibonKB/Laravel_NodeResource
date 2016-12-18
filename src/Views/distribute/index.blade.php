@extends('nrviews::layouts.layout')
@section('title','Distribute Resources')

@section('content')
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
            <div class="mdl-card__title">
                Distribute Resources
            </div>
            <div class="node-justify mdl-card__supporting-text">
                @include('nrviews::distribute.index-description')
            </div>
        </div>

        <div class="mdl-cell mdl-cell--9-col mdl-card mdl-shadow--4dp">
            <div class="mdl-card__title">
                Actual Distribution
            </div>
            <div class="mdl-card__supporting-text">
                @forelse ($nodes as $node)
                    <ul class="mdl-list">
                        @include('nrviews::distribute.index-node')
                    </ul>
                @empty
                    <span class="mdl-chip mdl-chip--contact">
                        <span class="mdl-chip__contact mdl-color--blue mdl-color-text--white material-icons">info</span>
                        <span class="mdl-chip__text">No Nodes to Display, create the first <a href="{{route('nr_dnode_new')}}">HERE</a></span>
                    </span>
                @endforelse
            </div>
            <div class="mdl-card__menu">
                <a href="{{route('nr_dnode_new')}}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-color-text--white">
                    <i class="material-icons">add</i>
                </a>
            </div>
        </div>
    </div>
@endsection
