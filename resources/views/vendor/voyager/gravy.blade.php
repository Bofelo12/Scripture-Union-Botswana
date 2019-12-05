@extends('voyager::master')
@section('content')
<div class="container">
  <div class="side-body">
          <h1 class="page-title">
<i class="voyager-news"></i>
Add Blog Post
</h1>
          <div id="voyager-notifications"></div>
          <div class="page-content edit-add container">
<div class="row">
  <div class="col-md-12">

      <div class="panel panel-bordered">
          <!-- form start -->
          <form role="form" class="form-edit-add" action="" method="POST" enctype="multipart/form-data">
              <!-- PUT Method if we are editing -->
              
              <!-- CSRF TOKEN -->              
   <div class="panel-body">

           
                                                      
      <div class="form-group  col-md-12 " >                          
            <label class="control-label" for="name">Title</label>
            <input  required  type="text" class="form-control" name="title" placeholder="Title"
            value="">
      </div>
      
      <!-- GET THE DISPLAY OPTIONS -->
                                                      
         
                                                      
             <div class="form-group  col-md-12 " >                          
                        <label class="control-label" for="name">Body</label>
                        <textarea class="form-control richTextBox" name="body" id="richtextbody">
                        </textarea>      
             </div>                    
             <div class="form-group  col-md-3 " >                          
              <button type="submit" class="btn btn-primary save btn-block">Save</button>                                         
              
        </div>                             <!-- GET THE DISPLAY OPTIONS -->
 
                  
              </div><!-- panel-body -->

              <div class="panel-footer">
              </div>
          </form>

         

      </div>
  </div>
</div>
</div>

  </div>
</div>
</div>
</div>
@stop