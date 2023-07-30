<x-clients-layout>
    <div data-vide-bg="{{ url('frontend/video/video') }}">
        <div class="container">
            <div class="banner-info">
                <h3>It is a long established fact that a reader will be distracted by
                    the readable</h3>
                <div class="search-form">
                    <form action="#" method="post">
                        <input type="text" placeholder="Search..." name="Search...">
                        <input type="submit" value=" ">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/js/jquery.vide.min.js') }}"></script>

    <!--content-->
    <div class="content-top">
        <div class="container">
            <div class="spec ">
                <h3>All Products Household</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>

            <div class="row">
                @foreach ($household as $item)
                    <div class="col-md-3">
                        <div class="col-m">
                            <a href="#" class="offer-img">
                                <img src="{{ URL::to('/frontend/' . $item->prd_cover) }}" class="img-responsive"
                                    alt="">
                                <div class="offer">
                                    <p><span>Offer</span></p>
                                </div>
                            </a>
                            <div class="mid-1">
                                <div class="women">
                                    <h6><a href="{{ route('products.detailsClient', ['id' => $item->id]) }}">
                                            {{ $item->prd_names }}</a>
                                        ({{ $item->prd_heft }} {{ $item->centals->centals_name ?? '' }})
                                    </h6>
                                </div>
                                <div class="mid-2">
                                    <p><label>${{ number_format($item->prd_original_price) }}</label><em
                                            class="item_price">
                                            ${{ number_format($item->prd_selling_price) }}</em></p>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="add">
                                    <button class="btn btn-danger my-cart-btn my-cart-b" data-id="{{ $item->id }}"
                                        data-name="{{ $item->prd_names }}" data-summary="summary {{ $item->id }}"
                                        data-price="{{ $item->prd_selling_price }}" data-quantity="1"
                                        data-image="{{ url('/frontend/' . $item->prd_cover) }}"> Add to
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="clearfix"></div>

            </div>

        </div>
    </div>
</div>
{{ $household->links() }}

    <!--content-->
    <div class="content-mid">
        <div class="container">

            <div class="col-md-4 m-w3ls">
                <div class="col-md1 ">
                    <a href="{{ route('products.kitchen') }}">
                        <img src="{{ URL::to('frontend/images/co1.jpg') }}" class="img-responsive img" alt="">
                        <div class="big-sa">
                            <h6>New Collections</h6>
                            <h3>Season<span>ing </span></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 m-w3ls1">
                <div class="col-md ">
                    <a href="{{ route('products.household') }}">
                        <img src="{{ URL::to('frontend/images/co.jpg') }}" class="img-responsive img" alt="">
                        <div class="big-sale">
                            <div class="big-sale1">
                                <h3>Big <span>Sale</span></h3>
                                <p>It is a long established fact that a reader </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 m-w3ls">
                <div class="col-md2 ">
                    <a href="{{ route('products.kitchen') }}">
                        <img src="{{ URL::to('frontend/images/co2.jpg') }}" class="img-responsive img1" alt="">
                        <div class="big-sale2">
                            <h3>Cooking <span>Oil</span></h3>
                            <p>It is a long established fact that a reader </p>
                        </div>
                    </a>
                </div>
                <div class="col-md3 ">
                    <a href="{{ route('products.household') }}">
                        <img src="{{ URL::to('frontend/images/co3.jpg') }}" class="img-responsive img1" alt="">
                        <div class="big-sale3">
                            <h3>Vegeta<span>bles</span></h3>
                            <p>It is a long established fact that a reader </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--content-->


    <!-- Carousel================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="{{ route('products.kitchen') }}"> <img class="first-slide" src="{{ URL::to('frontend/images/ba.jpg') }}"
                        alt="First slide"></a>

            </div>
            <div class="item">
                <a href="{{ route('products.personal_Care') }}"> <img class="second-slide " src="{{ URL::to('frontend/images/ba1.jpg') }}"
                        alt="Second slide"></a>

            </div>
            <div class="item">
                <a href="{{ route('products.household') }}"><img class="third-slide " src="{{ URL::to('frontend/images/ba2.jpg') }}"
                        alt="Third slide"></a>

            </div>
        </div>

    </div><!-- /.carousel -->


    <!-- view -->

    <!-- product 1-->
    @foreach ($household as $item)
        <div class="modal fade" id="myModal{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body modal-spa">
                        <div class="col-md-5 span-2">
                            <div class="item">
                                <img src="{{ URL::to('/frontend/' . $item->prd_cover) }}" class="img-responsive"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-7 span-1 ">
                            <h3>{{ $item->prd_names }} ({{ $item->prd_heft }}
                                {{ $item->centals->centals_name ?? '' }})</h3>
                            <p class="in-para"> Small product detail table.</p>
                            <div class="price_single">
                                <span class="reducedfrom "><del>${{ number_format($item->prd_original_price) }} </del>
                                    ${{ number_format($item->prd_selling_price) }}</span>

                                <div class="clearfix"></div>
                            </div>
                            <h4 class="quick">Quick Overview:</h4>
                            <p class="quick_desc">{{ $item->prd_details }}</p>
                            <div class="add-to">
                                <button class="btn btn-danger my-cart-btn my-cart-btn1 "
                                    data-id="{{ $item->id }}" data-name="{{ $item->prd_names }}"
                                    data-summary="summary {{ $item->id }}" data-price="1.50" data-quantity="1"
                                    data-image="{{ url('/frontend/' . $item->prd_cover) }}">Add to Cart</button>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</x-clients-layout>
