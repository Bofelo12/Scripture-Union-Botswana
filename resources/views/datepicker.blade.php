<input type="hidden" value="{{date('Y-m-d H:i')}}" id="now">
<input type="hidden" value="{{url('event')}}" id="deleteUrl">
@if($message = Session::get('success'))
<input type="hidden" id="success-response" value="{{$message}}">
@endif 

@if ($errors->has('doc.0'))
<input type="hidden" id="error-response" value="{{ $errors->first('doc.0') }}">                 
@endif

<!-- calender-->
<!-- calender-->
<link rel="stylesheet" href="{{asset('js/dtp/jquery.datetimepicker.min.css')}}">
<script src="{{asset("js/dtp/jquery.datetimepicker.full.min.js")}}"></script>
<script>
$(document).ready(function(){

$('body').on('click','.deleteBtn',function(){
  var deleteEventAction = $('#deleteUrl').val();
  var event_id = $(this).data('id');
  var url= deleteEventAction+'/'+event_id;
  //console.log("this is url"+url);

  $('#deleteId').attr('action',url)
//console.log("this is url"+$('#deleteId').attr('action'));
});


if($('#error-response').val().length){
  toastr["error"]($('#error-response').val());
}else if($('#success-response').val().length){
  toastr["success"]($('#success-response').val());
}else{
  console.log("neither set");
}

if($('#event_start').val() == "" || $('#event_end').val() == ""){
  $('#event_start').val($('#now').val());
  $('#event_end').val($('#now').val());
}

  jQuery('#event_start').datetimepicker({  
  format:'Y-m-d H:i',
  step:30,
  onShow:function( ct ){
   this.setOptions({
    maxDate:jQuery('#event_end').val()?jQuery('#event_end').val():false
   })
  }
 });
 jQuery('#event_end').datetimepicker({
  format:'Y-m-d H:i',
  step:30,
    onShow:function( ct ){
   this.setOptions({
    minDate:jQuery('#event_start').val()?jQuery('#event_start').val():false
   })
  },
  
 });		

 
 

//custom datatables
$('#events-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 
            {   "type": 'GET',
                "url" :'{{url('/events')}}',                 
            },
            columns: [
                { data: 'event_name', name: 'event_name' },
                { data: 'event_venue', name: 'event_venue' },
                { data: 'start_date', name: 'start_date' },
                { data: 'publisher', name: 'publisher' },
                {data: 'action', name: 'action', orderable: false, searchable: false}
                  
            ]
        });



});
</script>