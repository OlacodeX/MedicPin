<!--This file holds the error messages.
    If error is more than 0, I loop through each error and print a message
    for all concerned field.
    This is a reusable code--->
    @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
        
    @endforeach
        
    @endif
    <!----If a session is successful, print a message and if not print error message------->
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        
    @endif
    
    @if (session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
        
    @endif