@extends('voyager::master')

@section('content')



<div class="container-fluid">
    <div class="side-body padding-top">
            <div class="container-fluid">
            <a href="#" class="btn btn-success" data-target="#upload" data-toggle="modal">
        <i class="voyager-upload"></i> <span>Upload File</span>
    </a>
  

<div class="modal fade" tabindex="-1" id="upload" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">
            Select file to upload
        </h4>
    </div>
    <div class="modal-body">
            <form method="POST" action="{{action('FilesController@store')}}" enctype="multipart/form-data">

                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">File name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                
                <!--if ($errors->has('photo'))
                    <div class="alert alert-danger" role="alert">
                        { $errors->first('photo') }
                    </div>
                endif-->
                <div class="form-group">
                    <label for="doc">File</label>
                    <input type="file" class="form-control" name="doc[]" required>
                </div>
            
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
    <div class="modal-footer">
        
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="voyager-notifications"></div>
  <div class="alerts"></div>
<h1>Member uploading files</h1>


<div class="p-2" style="width: 80%;">
    <div class="card-columns">
    @foreach($docs as $doc)
        <div class="card" style="width: 20rem;">
            <?php $sdoc="public"."".$doc->getUrlPath();
                 //   print($sdoc->getClientOriginalExtension());
            ?>
            <img class="card-img-top" src="{{asset($doc->getUrlPath()) }}" alt="Card image cap">
        </div>
    @endforeach
    </div>
</div>
@endsection


  

