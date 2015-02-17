@extends('...layouts.master')

@section('content')
<section class="section bg-none">
<div class="row">
                <div class="new-appointment">
                   <div><p>New Appointment</p></div>
                    <div><a href="{{ URL::to('newAppointment') }}" class="button">Start</a></div>
                </div>
             </div>




 <div class="row">
                <div class="section-header existing-appointments light-tan">
                   <div> <p>Previous Appointments</p></div><div>&nbsp;</div>
                </div>
 <div class="tablesaw-container">

   {{ HTML::build_table($model->pastAppointmentListViewModel->data,$model->pastAppointmentListViewModel->header ,
   array('class'=>'table display responsive no-wrap tablesaw','id'=>'pastAppts','data-tablesaw-mode'=>"stack"))}}

 </div>

 </div>


</section>

@stop

@section('javascript')

<!-- Render this partial view when you want to enable client-side sorting, pagination and filtering of a table. -->
{{ HTML::script('js/jquery.dataTables.js')}}
{{ HTML::script('js/tablesaw.stackonly.js')}}


<script type="text/javascript">
    $(document).ready(function() {
        $('table#pastAppts').dataTable({
            responsive: true,
            'bJQueryUI': false,
            'bProcessing': true,
            'bSortClasses': false,
            'aaSorting': [],
            'asStripClasses': ['odd', 'even'],
            'sLength': 'inline-help',
            'sInfo': 'inline-help',
            "paging":   false


        });

    });

</script>
@stop


