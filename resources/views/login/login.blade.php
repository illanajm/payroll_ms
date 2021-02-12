@extends('master.layout')
@section('content')
    <div class="o-page--center">
        <div class="o-page__card">
            <div class="c-card u-mb-xsmall">
                <header class="c-card__header u-pt-large"> 
                    <h1>Login</h1>
                    <img src="...">  
                </header>
                
                <form class="c-card__body" method="..." action="..."> 
                    <div class="c-field u-mb-small">
                        <label class="c-field__label">Username</label> 
                        <input class="c-input" type="text" placeholder="username"> 
                    </div>

                    <div class="c-field u-mb-small"> 
                        <label class="c-field__label">Password</label> 
                        <input class="c-input" type="password" placeholder="password"> 
                    </div>

                    <button class="c-btn c-btn--info c-btn--fullwidth">
                        Sign in to Dashboard
                    </button> 
                </form>
            </div> 
        </div>
    </div>
@endsection