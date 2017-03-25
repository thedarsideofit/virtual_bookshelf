
@section('scripts')
<script type="text/javascript">
$(document).ready(function () {
    // inicializamos el plugin
    $('#tags').select2({
        // Activamos la opcion "Tags" del plugin
        tags: true,
        tokenSeparators: [','],
        ajax: {
            dataType: 'json',
            url: '{{ url("tags") }}',
            delay: 250,
            data: function(params) {
                return {
                    term: params.term
                }
            },
            processResults: function (data, page) {
              return {
                results: data
              };
            },
        }
    });
});
</scripts>
    
@extends('layout')
 
@section('content')
<div class="col-md-10 col-md-offset-1">
    <form name="test-form" method="POST" action="#">
 
        <div class="form-group">
            <label for="tags" class="control-label">Tags</label>
            <select name="tags[]" class="form-control" multiple="multiple" id="tags"></select>
        </div>
 
    </form>
</div>
@endsection