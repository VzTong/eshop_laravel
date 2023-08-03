<x-clients-layout title="Login">

    @if (!empty(session('_success_msg')))
        <div class=" mt-2 alert alert-info alert-dismissible fade show" role="alert">
            {{ session('_success_msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (!empty(session('_destroy_msg')))
        <div class=" mt-2 alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('_destroy_msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (!empty(session('_err_msg')))
        <div class=" mt-2 alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('_err_msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!--banner-->
    <div class="banner-top">
        <div class="container">
            <h3>Login</h3>
            <h4><a href="{{ route('home') }}">Home</a><label>/</label>Login</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--login-->

    <div class="login">

        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Login</h3>
                <form action="{{ route('account.login') }}" method="POST">
                    @csrf

                    <div class="key">
                        <i class="fa-solid fa-user-large"></i>
                        <x-app-input name="name" type="text" value="Your Username" required="" />
                        <div class="clearfix"></div>
                    </div>

                    <div class="key">
                        <i class="fa-solid fa-key"></i>
                        <x-app-input name="password" type="password" value="Password" required="" />
                        <div class="clearfix"></div>
                    </div>

                    <button type="submit" class="btn btn-outline-success input">Login</button>
                </form>
            </div>
            <div class="forg">
                <a href="#" class="forg-left">Forgot Password?</a>
                <p class="forg-right">Don't have an account
                    <a href="{{ route('account.register') }}">Register</a> Now!
                </p>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</x-clients-layout>
