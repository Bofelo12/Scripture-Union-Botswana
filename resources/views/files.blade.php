@extends('layouts.app')

@section('content')
<h1>Member uploading files</h1>
<form method="POST" action="{{action('FilesController@store')}}" enctype="multipart/form-data">

    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name">
    </div>
    @if ($errors->has('doc.0'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('doc.0') }}
                        </div>
     @endif
    <!--if ($errors->has('photo'))
        <div class="alert alert-danger" role="alert">
            { $errors->first('photo') }
        </div>
    endif-->
    <div class="form-group">
        <label for="doc">File:</label>
        <input type="file" class="form-control" name="doc[]" required>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="p-2" style="width: 80%;">
    <div class="card-columns">
    @foreach($docs as $doc)
        <div class="card" style="width: 20rem;">
            <?php $sdoc="public"."".$doc->getUrlPath();
                    print($sdoc->getCleiOriginalExtension());
            ?>
            <img class="card-img-top" src="{{asset($doc->getUrlPath()) }}" alt="Card image cap">
        </div>
    @endforeach
    </div>
</div>
@endsection