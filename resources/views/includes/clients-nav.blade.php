<a href="{{ route('products.special_offers') }}"><img src="{{ URL::to('frontend/images/download.png') }}" class="img-head" alt=""></a>

<div class="header">

    <div class="container">

        <div class="logo">
            <h1><a href="{{ route('home') }}"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
        </div>

        <div class="head-t">
            <ul class="card">
                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
                @if (Auth::check())
                    <li class="nav-item">
                        <a href="">
                            <i class="fa-solid fa-user-large"></i>Xin chào
                            <span class="text-warning">{{ Auth::user()->name }}</span>
                        </a>

                    </li>

                    <li>
                        <a href="{{ route('account.logout') }}">
                            <i class="fa-solid fa-right-to-bracket fa-rotate-180"></i>Log Out
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('account.login') }}">
                            <i class="fa-solid fa-user-large"></i>Login</a>
                    </li>
                    <li>
                        <a href="{{ route('account.register') }}">
                            <i class="fa-solid fa-right-to-bracket"></i>Register</a>
                    </li>
                @endif

                <li><a href="shipping"><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
            </ul>
        </div>

        <div class="header-ri">
            <ul class="social-top">
                <li>
                    <a href="https://www.facebook.com/" class="icon facebook">
                        <i class="fa-brands fa-facebook-f"></i><span></span>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/" class="icon twitter">
                        <i class="fa-brands fa-twitter"></i><span></span>
                    </a>
                </li>
                <li>
                    <a href="https://www.pinterest.com/" class="icon pinterest">
                        <i class="fa-brands fa-pinterest-p"></i><span></span>
                    </a>
                </li>
                <li>
                    <a href="https://dribbble.com/" class="icon dribbble">
                        <i class="fa-brands fa-dribbble"></i><span></span>
                    </a>
                </li>
            </ul>
        </div>


        <div class="nav-top">
            <nav class="navbar navbar-default">

                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                        data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav ">
                        <li class="active"><a href="{{ route('home') }}" class="hyper "><span>Home</span></a></li>

                        <li class=""><a href="{{ route('products.kitchen') }}" class="hyper "><span>Kitchen</span></a></li>

                        <li class=""><a href="{{ route('products.personal_Care') }}" class="hyper "><span>Personal Care</span></a></li>

                        <li class=""><a href="{{ route('products.household') }}" class="hyper "><span>Household</span></a></li>
                    </ul>
                </div>
            </nav>

            <div class="cart">
                <span class="fa fa-shopping-cart my-cart-icon">
                    <span class="badge badge-notify my-cart-badge"></span>
                </span>
            </div>

            <div class="clearfix"></div>
        </div>

    </div>
</div>
<script type='text/javascript' src="{{ asset('frontend/js/jquery.mycart.js') }}"></script>


<script type="text/javascript">
    $(function() {

        var goToCartIcon = function($addTocartBtn) {
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>')
                .css({
                    "position": "fixed",
                    "z-index": "999"
                });
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({
                top: position.top,
                left: position.left
            }, 500, "linear", function() {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function(products) {
                $.each(products, function() {
                    console.log(this);
                });
            },
            clickOnAddToCart: function($addTocart) {
                goToCartIcon($addTocart);
            },
            getDiscountPrice: function(products) {
                var total = 0;
                $.each(products, function() {
                    total += this.quantity * this.price;
                });
                return total * 1;
            }
        });

    });
</script>
