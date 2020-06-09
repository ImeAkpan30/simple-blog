@extends('layouts.master')
@section('title', 'Show Post')
@section('content')

        <div class="row">
            <div class="col-lg-12">
                <div style="text-align:center; margin-top:20px; font-weight:900;">
                    <h2><strong>Show Post</strong></h2> 
                </div>
            </div>
        </div>

    <div class="container jumbotron" style="margin-top:50px; width:500px; border-radius: 30px;
    box-shadow:  2px 2px 2px 2px gray;">
        

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Name : </strong>
                    {{ $iphone->name }}
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Title : </strong>
                    {{ $iphone->title }}
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Body : </strong>
                    {{ $iphone->body }}
                </div>
            </div>
        </div>
        <a class="btn btn-primary" href="{{ route('database') }}" style="margin-left:180px; margin-top:20px">Back</a>
    </div>
    
@endsection