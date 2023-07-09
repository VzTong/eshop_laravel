
<a href="{{ route("#") }}"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

  <div class="container">

    <div class="logo">
      <h1><a href="index.php"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
    </div>
    <div class="head-t">
      <ul class="card">
        <li><a href="wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>


        @if(Auth::check())

            <li class="nav-item">
            <span class="nav-link text-info">Xin chào {{Auth::user()->name}}</span>
            </li>

            <li><a href="logout.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>Log Out</a></li>

        @else

            <li><a href="{{ route("account.register") }}"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
            <li><a href="{{ route("account.login") }}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>

        @endif

        <li><a href="about.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
        <li><a href="shipping.php"><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
      </ul>
    </div>

    <div class="header-ri">
      <ul class="social-top">
        <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
        <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
        <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
        <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
      </ul>
    </div>


    <div class="nav-top">
      <nav class="navbar navbar-default">

        <div class="navbar-header nav_2">
          <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>


        </div>
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
          <ul class="nav navbar-nav ">
            <li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>

            <li class="dropdown ">
              <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown"><span>Kitchen<b class="caret"></b></span></a>
              <ul class="dropdown-menu multi">
                <div class="row">
                  <div class="col-sm-3">
                    <ul class="multi-column-dropdown">

                      <li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Water & Beverages</a></li>
                      <li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruits & Vegetables</a></li>
                      <li><a href="kitchen.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Staples</a></li>
                      <li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Branded Food</a></li>

                    </ul>

                  </div>
                  <div class="col-sm-3">

                    <ul class="multi-column-dropdown">
                      <li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Breakfast &amp; Cereal</a></li>
                      <li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Snacks</a></li>
                      <li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Spices</a></li>
                      <li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Biscuit &amp; Cookie</a></li>
                      <li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Sweets</a></li>

                    </ul>

                  </div>
                  <div class="col-sm-3">

                    <ul class="multi-column-dropdown">
                      <li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pickle & Condiment</a></li>
                      <li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Instant Food</a></li>
                      <li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Dry Fruit</a></li>
                      <li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Tea &amp; Coffee</a></li>

                    </ul>
                  </div>
                  <div class="col-sm-3 w3l">
                    <a href="kitchen.php"><img src="<?php asset("images/me.png") ?>" class="img-responsive" alt=""></a>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </ul>
            </li>
            <li class="dropdown">

              <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> Personal Care <b class="caret"></b></span></a>
              <ul class="dropdown-menu multi multi1">
                <div class="row">
                  <div class="col-sm-3">
                    <ul class="multi-column-dropdown">
                      <li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayurvedic </a></li>
                      <li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Baby Care</a></li>
                      <li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
                      <li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Purfumes</a></li>

                    </ul>

                  </div>
                  <div class="col-sm-3">

                    <ul class="multi-column-dropdown">
                      <li><a href="care.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
                      <li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Oral Care</a></li>
                      <li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Personal Hygiene</a></li>
                      <li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>

                    </ul>

                  </div>
                  <div class="col-sm-3">

                    <ul class="multi-column-dropdown">
                      <li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Fashion Accessories </a></li>
                      <li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Grooming Tools</a></li>
                      <li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Shaving Need</a></li>
                      <li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Sanitary Needs</a></li>

                    </ul>
                  </div>
                  <div class="col-sm-3 w3l">
                    <a href="care.php"><img src="<?php asset("images/me1.png") ?>" class="img-responsive" alt=""></a>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span>Household<b class="caret"></b></span></a>
              <ul class="dropdown-menu multi multi2">
                <div class="row">
                  <div class="col-sm-3">
                    <ul class="multi-column-dropdown">
                      <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cleaning Accessories</a></li>
                      <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>CookWear</a></li>
                      <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
                      <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>

                    </ul>

                  </div>
                  <div class="col-sm-3">

                    <ul class="multi-column-dropdown">
                      <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Kitchen & Dining</a></li>
                      <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>KitchenWear</a></li>
                      <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pet Care</a></li>
                      <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Plastic Wear</a></li>

                    </ul>

                  </div>
                  <div class="col-sm-3">

                    <ul class="multi-column-dropdown">
                      <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pooja Needs</a></li>
                      <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Serveware</a></li>
                      <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Safety Accessories</a></li>
                      <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Festive Decoratives </a></li>

                    </ul>
                  </div>
                  <div class="col-sm-3 w3l">
                    <a href="hold.php"><img src="<?php asset("images/me2.png") ?>" class="img-responsive" alt=""></a>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </ul>
            </li>

            <li><a href="admin.php" class="hyper"> <span>Admin</span></a></li>
            <li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
          </ul>
        </div>
      </nav>
      <div class="cart">

        <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
      </div>
      <div class="clearfix"></div>
    </div>

  </div>
</div>