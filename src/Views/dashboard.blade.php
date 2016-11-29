@extends('nrviews::layouts.layout')
@section('title','Dashboard')

@section('content')
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col node-dashboard--card mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            Welcome to Node Resource.
        </div>
        <div class="mdl-card__supporting-text">
            With node resource you can distribute, modularize and distribute the
            creation and allocation of resources of your company's operations,
            using a hierarchical tree model.
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
            Take a Tour
            </a>
        </div>
    </div>
</div>
@endsection
