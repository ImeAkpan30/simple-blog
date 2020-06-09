@extends('layouts.master')
@section('title', 'Edit Post')
    <div class="row">
        <div class="col-sm-12" style="text-align:center; margin-top:20px">
            <div class="pull-left">
                <h1 style="color:red">Edit Post</h1>
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

    <div class="container jumbotron " style="margin-top:30px; width: 600px; border-radius: 30px;
    box-shadow:  2px 2px 2px 2px gray;">
        
    <div class="row">
        <div class="col-sm-8 col-md-8 offset-sm-2">
                 @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                @endif
            <form action="{{route('update',$iphone->id)}}" method = "post">
                @csrf
                @Method('put')
            <div class="form-group">  
                <input type="text" name="name" id="name" placeholder="Name" class="form-control" required value = "{{$iphone->name}}">
            </div>
        </div>
        <div class="col-sm-8 offset-sm-2">
            <div class="form-group">
                <input type="text" name="title" id="title" placeholder="Title" class="form-control" required value = "{{$iphone->title}}">
            </div>
        </div>
        <div class="col-sm-8 offset-sm-2">
            <div class="form-group">
                <textarea name="body" id="body" placeholder="Enter text here..." class="form-control" required value = "{{$iphone->body}}" style="height:150px"></textarea>
            </div>
        </div>
        <div class="col-sm-8 offset-sm-2">
            
            <button type="submit" class="btn btn-primary" name="button">Update</button>
        </div>
        </form>
    </div>
</div>
@section('content')