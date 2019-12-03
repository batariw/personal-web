@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('education.store')}}">
        @csrf
        @include('layouts.error-form')
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create Education</legend>

        <!-- Text input-->
      
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Name</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Year</label>  
            <div class="col-md-4">
                <input id="textinput" name="year" type="text" placeholder="Year" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Description</label>  
            <div class="col-md-4">
                <textarea name="description" placeholder="Description" class="form-control input-md" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
       
       
       
        <!-- Text input-->
       <br>
        

        <!-- Text input-->

        <div class="form-group text-center">
                  <button class="btn btn-primary" type="submit">Simpan</button>
        </div>

        </fieldset>
        </form>
@endsection        
