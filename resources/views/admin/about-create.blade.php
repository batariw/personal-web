@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('about.store')}}" enctype="multipart/form-data">
        @csrf
        @include('layouts.error-form')
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create About Me</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Image</label>  
            <div class="col-md-4">
                <input id="textinput" name="image" type="file" placeholder="Image" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Title</label>  
            <div class="col-md-4">
                <input id="textinput" name="title" type="text" placeholder="Title" class="form-control input-md">
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
