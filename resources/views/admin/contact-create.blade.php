@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('education.store')}}">
        @csrf
        @include('layouts.error-form')
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create Contact</legend>

        <!-- Text input-->
      
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Name</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email</label>  
            <div class="col-md-4">
                <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Message</label>  
            <div class="col-md-4">
                <textarea name="message" placeholder="Message" class="form-control input-md" id="" cols="30" rows="10"></textarea>
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
