@extends('surveys.master')
@section('body')

<style type="text/css">
  th{
    cursor: default;
  }
</style>
  <section class="content-header">
    <h1>
      {{$survey->c_name}} Extra Inputs 
  <a style="margin-left: 10px;" href="{{route('custom.create',['id' => $survey->id])}}" class="btn btn-xs btn-primary">Add Extra Input</a>
    </h1>



  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
    <div class="box-header">
      <h3 class="box-title"></h3>
    </div><!-- /.box-header -->
  <table class="table table-bordered table-striped" id="surveys">
    <thead>
      <tr>
        <th>Input Name</th>
        <th>Input Value</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($survey->customs as $custom)
            <tr>
              <td>{{$custom->input_name}}</td>
              <td>{{$custom->input_value}}</td>
              
                <td><a href="{{route('custom.edit',$custom->id)}}" class="btn btn-xs btn-primary">Edit</a>
                <a href="{{route('custom.delete',['id' => $custom->id])}}" class="delete btn btn-xs btn-danger">Delete</a>
               </td> 
            </tr>
            
            @endforeach
    </tbody>
  </table>


</div>
      </div>
    </div>
  </section>
@stop

@section('page_scripts')
<script type="text/javascript">
  $('#surveys').DataTable({
    "fnDrawCallback": function(oSettings) {
        if ($('#users tr').length < 11) {
            $('.dataTables_paginate').hide();
        }
    },
    "language": {
          "emptyTable": "There are no Extra Inputs!"
        }
  });
</script>
@stop
