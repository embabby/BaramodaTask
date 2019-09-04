@extends('surveys.master')
@section('body')


  <section class="content-header">
    <h1>
      Edit Custom Input
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
                  <!-- form start -->
                  {!! Form::model($custom_input, ['route' => ['custom.update', $custom_input->id]]) !!}
                  {{ method_field('PUT') }}

                    <div class="box-body" style="width: 70%; height: 100%;">
                                    
                      <div class="form-group">
                        <label>Input Name</label>
                        <input class="form-control" type="text" name="input_name" value="{{$custom_input->input_name}}" >
                      </div>

                      <div class="form-group">
                        <label>Input Value</label>
                        <input class="form-control" type="text" name="input_value" value="{{$custom_input->input_value}}" >
                      </div>
                                                            
                     
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
