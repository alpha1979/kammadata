@extends('layouts.template')
@section('content')
<div class="container ">
    
        <div class="container border border-dark rounded ui-middle shadow">
            
             
                <h3>Send to a friend</h2>
                <p>Share this great deal with friends!</p>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <form method="POST" action="" >
                            @csrf
                            @if($errors->any())
                            {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                            @endif
                            @if(Session::has('message'))
                            <p >{{ Session::get('message') }}</p>
                            @endif
                            <div class="form-group row">
                                
                                <label for="name" class="col-sm-2 col-form-label">Your name*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="friend_name" class="col-sm-2 col-form-label">Friend's name*</label>
                                <div class="col-sm-8">
                                <input type="text" name="friend_name" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="friend_email" class="col-sm-2 col-form-label">Friend's email*</label>
                                <div class="col-sm-8">
                                <input type="text" name="friend_email" class="form-control" required/>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    
                                </div>
                                <div class="col-sm-10">
                                    
                                    <button type="submit" class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                                    </svg></button>
                                    SUBMIT
                                </div>
                           </div>
                    </div>
                   
                </div>
                
                </form>
        </div>        
</div>
@endsection