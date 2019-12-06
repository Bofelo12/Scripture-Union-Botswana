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
                  //  print($sdoc->getCleiOriginalExtension());
                   $extension = pathinfo($sdoc, PATHINFO_EXTENSION);
            ?>
            @if ($extension == 'docx' || $extension == 'doc')
            <a href="{{asset($doc->getUrlPath()) }}">
                <img src="{{asset('img/office.ico')}}" alt="microsoft icon"></a>
                    <h4>{{$doc->name}}</h4>
            @elseif ($extension == 'xlsx' || $extension == "xls")
            <a href="{{asset($doc->getUrlPath()) }}">
                <img src="{{asset('img/excel.ico')}}" alt="microsoft icon"></a>
                <h4>{{$doc->name}}</h4>
            @elseif ($extension == "pdf")
            <a href="{{asset($doc->getUrlPath()) }}">
                <img src="{{asset('img/pdf.ico')}}" alt="microsoft icon"></a>
                <h4>{{$doc->name}}</h4>

            @elseif ($extension == "ppt")
            <a href="{{asset($doc->getUrlPath()) }}">
                <img src="{{asset('img/ppt.ico')}}" alt="microsoft icon"></a>
                <h4>{{$doc->name}}</h4>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection