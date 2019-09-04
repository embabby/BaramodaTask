@extends('surveys.master')
@section('body')

<style type="text/css">
  th{
    cursor: default;
  }
</style>
  <section class="content-header">
    <h1>
      All Surveys
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
        <th>Customer Name</th>
        <th>Phone</th>
        <th>Crops Cultivated</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($surveys as $survey)
            <tr>
              <td>{{$survey->c_name}}</td>
              <td>{{$survey->phone}}</td>
              <td>{{$survey->crops_cultivated}}</td>
              
                <td><a href="{{route('survey.edit',$survey->id)}}" class="btn btn-xs btn-primary">Edit</a>
                <a href="{{route('survey.settings',['id' => $survey->id])}}" class="btn btn-xs btn-success">Settings</a>
                <a href="{{route('custom.create',['id' => $survey->id])}}" class="btn btn-xs btn-warning">New Input</a>
                <a href="{{route('survey.delete',['id' => $survey->id])}}" class="delete btn btn-xs btn-danger">Delete</a>
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
          "emptyTable": "There are no surveys!"
        }
  });
</script>
@stop
