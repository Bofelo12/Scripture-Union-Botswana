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


                <div class="form-group">
                        <label for="name">File Category</label>
                    <select name="category" class="form-control" id="category">
                        <option value="prayer_diary">Prayer Diary</option>
                        <option value="newsletter">Newsletter</option>
                        <option value="report">Report</option>
                    </select> 
                    </div>
            
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
    <div class="modal-footer">
        
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div></div>
<div class="container">
    
    <div class="row" style=";border:#dddddd solid thin">
            <br> 
           
            
        
                @foreach($docs as $doc)  
                <div class="col-lg-1">          
                <?php $sdoc="public"."".$doc->getUrlPath();
                      //  print($sdoc->getCleiOriginalExtension());
                       $extension = pathinfo($sdoc, PATHINFO_EXTENSION);
              
                    // print_r($doc->category);
               
                ?>
                @if ($extension == 'docx' || $extension == 'doc')
                <a href="{{asset($doc->getUrlPath()) }}">
                    <img src="{{asset('img/office.ico')}}" class="img-responsive"alt="microsoft icon"></a>
                        <p class="text-center">{{$doc->name}}</p>
                @elseif ($extension == 'xlsx' || $extension == "xls")
                <a href="{{asset($doc->getUrlPath()) }}">
                    <img src="{{asset('img/excel.ico')}}"class="img-responsive" alt="microsoft icon"></a>
                    <p class="text-center">{{$doc->name}}</p>
                @elseif ($extension == "pdf")
                <a href="{{asset($doc->getUrlPath()) }}">
                    <img src="{{asset('img/pdf.ico')}}" class="img-responsive" alt="microsoft icon"></a>
                    <p class="text-center">{{$doc->name}}</p>
    
                @elseif ($extension == "ppt")
                <a href="{{asset($doc->getUrlPath()) }}">
                    <img src="{{asset('img/ppt.ico')}}" class="img-responsive" alt="microsoft icon"></a>
                    <<p class="text-center">{{$doc->name}}</p>
                @endif  
            </div>         
            @endforeach
         
    </div>
    
</div>
            
     
@endsection


  

