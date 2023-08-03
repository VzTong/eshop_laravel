<x-clients-layout title="Register">

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
            <h3>Register</h3>
            <h4><a href="{{ route('home') }}">Home</a><label>/</label>Register</h4>
            <div class="clearfix"> </div>
        </div>
    </div>

    <!--login-->

    <div class="login">

        <div class="main-agileits">
            <div class="form-w3agile form1">
                <h3>Register</h3>
                <form action="{{ route('account.register') }}" method="post">
                    @csrf

                    <div class="key">
                        <i class="fa-solid fa-user-large"></i>
                        <x-app-input type="text" name="name" autocomplete="off" value="Your username" required="" />
                        <div class="clearfix"></div>
                    </div>

                    <div class="key">
                        <i class="fa-solid fa-mobile-screen"></i>
                        <x-app-input type="text" name="usr_phone" autocomplete="off" value="Your phone number" required="" />
                        <div class="clearfix"></div>
                    </div>

                    <div class="key">
                        <i class="fa-regular fa-envelope"></i>
                        <x-app-input type="text" name="usr_email" autocomplete="off"
                            value="Your email address; Eg: example@mail.com" required="" />
                        <div class="clearfix"></div>
                    </div>

                    <div class="key">
                        <i class="fa-solid fa-unlock"></i>
                        <x-app-input type="password" name="password" autocomplete="off" value="Password" required="" />
                        <div class="clearfix"></div>
                    </div>

                    <div class="key">
                        <i class="fa-solid fa-lock"></i>
                        <x-app-input type="password" name="cf_password" autocomplete="off" value="Cf_password" required="" />
                        <div class="clearfix"></div>
                    </div>
                    <button type="submit" class="input">Submit</button>
                </form>
            </div>

        </div>
    </div>
</x-clients-layout>
