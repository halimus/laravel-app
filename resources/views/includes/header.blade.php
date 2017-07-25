<header>
    <div id="logo">
        <a href="{{ url('/') }}"><img src="{{ URL::asset('images/laravel.png') }}"></a>
    </div>
    <div id="menu">
        
        @if(isset(Auth::user()->first_name))
            <div style="float: left; border: 1px solid re;">
                <a href="{{ url('patient') }}">Patient List</a> | 
                <a href="{{ url('patient.html') }}">Patient List Datatables</a> | 
                <a href="{{ url('patient/add') }}">New patient</a> | 
                <a href="{{ url('users') }}">Users List</a>
            </div>
        @endif
       
        <div>
            @if(isset(Auth::user()->first_name))
                <a href="{{ url('profile') }}">{{ Auth::user()->first_name }}</a> | <a href="{{ url('logout') }}">Logout</a>
            @else    
                <a href="{{ url('login') }}">Login</a>
            @endif
        </div>
        
    </div>
</header>
