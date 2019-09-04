@extends('surveys.master')
@section('body')

  <section class="content-header">
    <h1>
      Create Custom Inputs for {{$survey->c_name}}
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
                  <!-- form start -->
                  {!! Form::model($survey, ['route' => ['custom.store', $survey->id]]) !!}


                    <div class="box-body" style="width: 70%; height: 100%;">   

                    <a class="btn btn-xs btn-success" onclick="createInput()">Add new input</a>

                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>


                  {!! Form::close() !!}

                </div>
      </div>
    </div>
  </section>
@stop

@section('page_scripts')

<script type="text/javascript">
    function createInput(){
      console.log('DONE');
      $( ".box-body" ).append( `<div class='form-group'>
                              <input class='form-control' name='input[name][]' placeholder='input name' type='text'>
                              <input class='form-control' name='input[val][]' placeholder='input value' type='text'>
                              </div>` );

    }

  </script>

@stop
