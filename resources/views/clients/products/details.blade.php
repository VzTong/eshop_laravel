<x-clients-layout title="Products Detail">
    <!--banner-->
    <div class="banner-top">
        <div class="container">
            <h3>Product details</h3>
            <h4><a href="{{ route('home') }}">Home</a><label>/</label>Details</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="single">
        <div class="container">
            <div class="single-top-main">
                <div class="col-md-5 single-top">
                    <div class="single-w3agile">

                        <div id="picture-frame">
                            <img src="{{ URL::to('/frontend/'.$data->prd_cover) }}" data-src="{{ URL::to('/frontend/'.$data->prd_cover) }}" alt=""
                                class="img-responsive" />
                        </div>
                        <script src="{{ asset('js/jquery.zoomtoo.js') }}"></script>
                        <script>
                            $(function() {
                                $("#picture-frame").zoomToo({
                                    magnify: 2
                                });
                            });
                        </script>

                    </div>
                </div>
                <div class="col-md-7 single-top-left ">
                    <div class="single-right">
                        <h3>{{ $data->prd_names }}</h3>

                        <div class="pr-single">
                            <p class="reduced "><del>${{ number_format($data->prd_original_price) }}</del>${{ number_format($data->prd_selling_price) }}</p>
                        </div>
                        <div class="block block-w3">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <p class="in-pa">{{ $data->prd_details }}</p>

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
                        <div class="add add-3">
                            <button class="btn btn-danger my-cart-btn my-cart-b"
                                                    data-id="{{ $data->id }}" data-name="{{ $data->prd_names }}"
                                                    data-summary="summary {{ $data->id }}"
                                                    data-price="{{ $data->prd_selling_price }}" data-quantity="1"
                                                    data-image="{{ url('/frontend/' . $data->prd_cover) }}"> Add to Cart
                                                </button>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>


        </div>
    </div>
    <!---->

    <div class="content-top offer-w3agile">
        <div class="container ">
            <div class="spec ">
                <h3>Special Offers</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
            <div class=" con-w3l wthree-of">
                @foreach ($Special_Offer as $item)
                    <div class="col-md-3 m-wthree">
                        <div class="col-m">
                            <a href="#" data-toggle="modal" data-target="#myModal{{ $item->id }}"
                                class="offer-img">
                                <img src="{{ URL::to('/frontend/' . $item->prd_cover) }}" class="img-responsive"
                                    alt="">
                                <div class="offer">
                                    <p><span>Offer</span></p>
                                </div>
                            </a>
                            <div class="mid-1">

                                <div class="women">
                                    <h6><a href="single.php"> {{ $item->prd_names }}</a>
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
                                        data-image="{{ url('/frontend/' . $item->prd_cover) }}"> Add to Cart
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



    <!--footer-->
    <!-- //footer-->

    <!-- product -->
    @foreach ($Special_Offer as $item)
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
