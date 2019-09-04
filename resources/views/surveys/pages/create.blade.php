@extends('surveys.master')
@section('body')

  <section class="content-header">
    <h1>
      Create Survey
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
                  <!-- form start -->
                  {!! Form::open(['route' => 'survey.store']) !!}

                    <div class="box-body" style="width: 70%; height: 100%;">   

                      <div class="form-group">
                        <label>Customer Name</label>
                        <input class="form-control" type="text" name="c_name" >
                      </div>

                      <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control" type="text" name="phone" >
                      </div>

                      <div class="form-group">
                        <label>Crops Cultivated</label>
                        <input class="form-control" type="text" name="crops_cultivated" >
                      </div>

                    <a class="btn btn-xs btn-success" onclick="createInput()">Add new input</a>

                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>



                  {!! Form::close() !!}

                  <!-- <div class="box-footer">
                      <button onclick="createInput()" class="btn btn-primary">TEST</button>
                    </div> -->
                </div>
      </div>
    </div>
  </section>
@stop

@section('page_scripts')

<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.js"></script> -->
<script type="text/javascript">
    function createInput(){
      console.log('DONE');
      $( ".box-body" ).append( `<div class='form-group'>
                              <input class='form-control' name='input[name][]' placeholder='input name' type='text'>
                              <input class='form-control' name='input[val][]' placeholder='input value' type='text'>
                              </div>` );


      // $( ".box-body" ).append( "<div class='form-group'><input class='form-control' name='one[val][]' placeholder='test2' type='text'></div>" );
    }

  </script>

@stop
