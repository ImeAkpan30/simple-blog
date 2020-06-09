@extends('layouts.master')

@section('content')

    <div class="container jumbotron " style="margin-top:30px;  border-radius: 30px;
    box-shadow:  2px 2px 2px 2px gray;">
        
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <h3 style="text-align:center">Registration Panel!</h3><br>
                    <form action="{{route('register')}}" method = "post">
                    @csrf
            
                    <div class="form-group">  
                         
                        <input type="text" name="first_name" placeholder="Enter Your First Name" class="form-control" required>
                    </div> 
        
                    <div class="form-group">
                        
                        <input type="text" name="last_name" placeholder="Enter Your Last Name" class="form-control" required>
                    </div>
        
        
                    <div class="form-group">
                        
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" >
                    </div>           
            
        
                    <div class="form-group">
                    
                        <input type="password" name="password" class="form-control" placeholder="password min length-6">
                        
                    </div>
                    <div class="form-group">
            
                        <button type="submit" class="btn btn-primary" name="button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    
    

        <div class="col-md-6">
            <div class="container">
                <h3 style="text-align:center">Login Here!</h3><br>
                @if(session()->has('message'))
                        <div class="alert alert-danger">
                            {{session()->get('message')}}
                        </div>
                @endif
                <form action="{{route('login')}}" method = "post">
                @csrf
            
                <div class="form-group">   
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Enter Your Email" >
                </div>           
                <div class="form-group">      
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Enter Your Password"> 
                </div>
                        <div class="form-group">
            
                            <button type="submit" class="btn btn-primary" name="button">Login</button>
                            
                        </div>
                        </form>
                    
                </div>
    </div>
</div>
    </div>
</div>
@endsection