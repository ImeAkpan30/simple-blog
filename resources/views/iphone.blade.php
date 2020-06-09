@extends('layouts.master')
@section('title', 'Create Post')
    <div class="row">
        <div class="col-sm-12" style="text-align:center; margin-top:20px">
                
            <div class="pull-left">
                <h1 style="color:red">Create Post</h1>
                <hr style="width:600px">
            </div>
        </div>
    </div>


    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!! </strong> There were some problems with your input. <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card-body" style="text-align:center; font-weight:bold">
		Welcome! {{ ucfirst(Auth()->user()->email) }}
	</div>
    <div class="container jumbotron " style="margin-top:30px; width: 800px; border-radius: 30px;
    box-shadow:  2px 2px 2px 2px gray;">
        
        <a href="{{route('database')}}" class="btn btn-primary float-right">View Posts</a>
    <div class="row">
        <div class="col-sm-8 col-md-8 offset-sm-2">
                 @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                @endif
            <form action="{{('store')}}" method = "post">
                @csrf
            <div class="form-group">  
                <input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-8 offset-sm-2">
            <div class="form-group">
                <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-8 offset-sm-2">
            <div class="form-group">
                <textarea name="body" id="body" placeholder="Enter text here..." class="form-control" style="height:200px" required></textarea>
            </div>
        </div>
        <div class="col-sm-8 offset-sm-2">
            
            <button type="submit" class="btn btn-primary" name="button">Submit</button>
            <a class="small" style="color:red" href="{{route('logout')}}">Logout</a>
        </div>
        
        </form>
    </div>
</div>
@section('content')