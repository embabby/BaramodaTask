@extends('surveys.master')
@section('body')


  <section class="content-header">
    <h1>
      Edit Survey
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
                  <!-- form start -->
                  {!! Form::model($survey, ['route' => ['survey.update', $survey->id]]) !!}
                  {{ method_field('PUT') }}

                    <div class="box-body" style="width: 70%; height: 100%;">
                                    
                      <div class="form-group">
                        <label>Customer Name</label>
                        <input class="form-control" type="text" name="c_name" value="{{$survey->c_name}}" >
                      </div>

                      <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control" type="text" name="phone" value="{{$survey->phone}}" >
                      </div>

                      <div class="form-group">
                        <label> Crops Cultivated </label>
                        <input class="form-control" type="text" name="crops_cultivated" value="{{$survey->crops_cultivated}}" >
                      </div>                                                    
                     
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  {!! Form::close() !!}
                </div>
      </div>
    </div>
  </section>
@stop
