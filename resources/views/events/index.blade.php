@extends('voyager::master')

@section('content')
<br>

<div class="container">
        
                <div class="container-fluid">
    <h1 class="page-title">
        <i class="voyager-news"></i> Events
    </h1>
                <a href="{{route('addEvent')}}" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Add New</span>
        </a>
                </div>
        </div>
</div>
             
<div class="container">
    <div class="row">
           
        <div class="col-lg-12">
            <table id="events-table" class="table table-condensed">
                <thead>
                    <tr style="font-weight:bold">
                        <th>Title</th>
                        <th>Venue</th>
                        <th>Date</th>
                        <th>Publisher</th>
                        <th>Actions</th>
                    </tr>
                  
                      

                </thead>
            </table>            
        </div>
     
    </div>
</div>


<div class="modal modal-danger fade" tabindex="-1" id="bulk_delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        <i class="voyager-trash"></i> Are you sure you want to delete <span id="bulk_delete_count"></span> <span id="bulk_delete_display_name"></span>?
                    </h4>
                </div>
                <div class="modal-body" id="bulk_delete_modal_body">
                </div>
                <div class="modal-footer">
                    <form method="POST" id="deleteId">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}  
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                                 value="Yes, Delete this event!">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">
                        Cancel
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->




@endsection

