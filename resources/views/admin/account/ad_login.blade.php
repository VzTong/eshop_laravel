<x-admin-layout title="Admin login">

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
            <h3>Admin login</h3>
            <h4><a href="{{ route('ad_home') }}">Home</a><label>/</label>Admin login</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--login-->

    <div class="login">


        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>AD Login</h3>
                <form action="{{ route('admin.account.login') }}" method="POST">
                    @csrf

                    <div class="key">
                        <i class="fa-solid fa-user-large"></i>
                        <input name="ad_email" type="text" value="Your Email" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Your Email';}" required="" />
                        <div class="clearfix"></div>
                    </div>

                    <div class="key">
                        <i class="fa-solid fa-key"></i>
                        <input name="password" type="password" value="Password" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Password';}" required="" />
                        <div class="clearfix"></div>
                    </div>

                    <input type="submit" class="btn btn-outline-success" value="Login" />
                </form>
            </div>
            <div class="forg">
                <a href="#" class="forg-left">Forgot Password?</a>
                <p class="forg-right">Don't have an account
                    <a href="{{ route('admin.account.register') }}">Register</a> Now!
                </p>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</x-admin-layout>
