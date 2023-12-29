@if (Route::has('login'))

    <div style="float: right !important;">
        @auth
            <a href="{{ url('/home') }}" class="btn">Home</a>
            
        @else
            <a href="{{ route('login') }}" class="btn">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn">Register</a>
               
            @endif
        @endif
    </div>
@endif
        
@extends('tablar::index.mensagem')
  
