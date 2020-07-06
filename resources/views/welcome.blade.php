@extends('partials.app')

@section('content')
    <div class="optionsPanel">
        <div class="inner">
            <form method="POST" action="{{route('sign_in')}}" id="loginForm" class="swap-able active">
                <h4>Login to your account</h4>
                <div class="input-block fancy-block">
                    <span class="fa fa-user"></span>
                    <label for="usr_username">Username</label>
                    <input id="usr_username" type="text" name="username">
                </div>
                <div class="input-block fancy-block">
                    <span class="fa fa-lock"></span>
                    <label for="usr_pswrd">Password</label>
                    <input id="usr_pswrd" type="password" name="password">
                </div>
                <button type="submit" class="btn-block btn">Login</button><br>
                <a href="#">Having some trouble?</a><br>
                <a class="triggerSwap" href="#signupForm">Don't have account? sign up !</a>
                {{csrf_field()}}
            </form>

            <form id="signupForm" class="swap-able">
                <h4>Create a new account</h4>
                <div class="input-block fancy-block">
                    <span class="fa fa-user"></span>
                    <label for="usr_username2">Username</label>
                    <input id="usr_username2" type="text">
                </div>
                <div class="input-block fancy-block">
                    <span class="fa fa-lock"></span>
                    <label for="usr_pswrd2">Password</label>
                    <input id="usr_pswrd2" type="password">
                </div>
                <div class="input-block fancy-block">
                    <span class="fa fa-star"></span>
                    <label for="usr_pswrd3">Confirm Password</label>
                    <input id="usr_pswrd3" type="password">
                </div>
                <div class="input-block fancy-block">
                    <span class="fa fa-envelope"></span>
                    <label for="usr_eml">Email</label>
                    <input id="usr_eml" type="email">
                </div>
                <button type="submit" class="btn-block btn">Signup</button><br>
                <a class="triggerSwap" href="#loginForm">Already have an account? login !</a>
            </form>

        </div>
    </div>
    <main class="contentArea">
        <div class="contentAreaInner clearfix no-pad-left no-pad-right">
            <header class="page-header text-center extra-top-pad pad-long">
                <img src="assets/img/logo-2.png" alt="dumy"><br><br>
                <strong>CREATING DOCUMENTION WAS NEVER BEEN EASY</strong>
            </header>

            <div class="steps clearfix">
                <div class="step">
                    <i class="fa fa-user"></i>
                    Create an account
                </div>
                <div class="step">
                    <i class="fa fa-support"></i>
                    Open a ticket ticket
                </div>
                <div class="step">
                    <i class="fa fa-comments"></i>
                    Get the premium help
                </div>
            </div>

        </div><!--contenAreaInner-->
    </main>
@endsection
