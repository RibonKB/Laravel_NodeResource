@extends('nrviews::layouts.form')
@section('title','Create a new Distribution Node')

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
    <form class="" action="{{route('nr_dnode_create')}}" method="post">
        {{csrf_field()}}
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--5-col mdl-shadow--4dp mdl-card mdl-cell--12-col-phone mdl-cell--12-col-tablet">
                @include('nrviews::distribute.new-related')
            </div>

            <div class="mdl-cell mdl-cell--7-col mdl-shadow--4dp mdl-card mdl-cell--12-col-phone mdl-cell--12-col-tablet">
                @include('nrviews::distribute.new-infoform')
                <div class="mdl-card__actions mdl-card--border">
                    <input type="submit" value="Submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                </div>
            </div>
        </div>
    </form>
@endsection

@section('form-scripts')
<script type="text/javascript" src="/vendor/kelnebenath/noderesource/js/distribute/new.js"></script>
<script type="text/javascript">
    nr_dnode_new.url.json_RelatedNodes = "{{route('nr_api_node')}}";
    nr_dnode_new.init();
</script>
@endsection
