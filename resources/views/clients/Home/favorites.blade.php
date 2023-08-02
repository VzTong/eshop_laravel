<div class="banner-top">
    <div class="container">
        <h3>Wishlist</h3>
        <h4><a href="{{ route('home') }}">Home</a><label>/</label>Wishlist</h4>
        <div class="clearfix"> </div>
    </div>
</div>

<!-- contact -->
<div class="check-out">
    <div class="container">
        <div class="spec ">
            <h3>Wishlist</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <script>
            $(document).ready(function(c) {
                $('.close').on('click', function(c) {
                    var elementId = $(this).closest('.cross').attr('id');
                    $('#' + elementId).fadeOut('slow', function(c) {
                        $('#' + elementId).remove();
                    });
                });
            });
        </script>
        <table class="table ">
            <thead>
                <tr>
                    <th class="t-head head-it ">Products</th>
                    <th class="t-head">Price</th>
                    <th class="t-head">Quantity</th>

                    <th class="t-head">Purchase</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($favorites as $item)
                    <tr class="cross" id="id_{{ $item->id }}">
                        <td class="ring-in t-data">
                            <a href="{{ route('products.detailsClient', ['id' => $item->id]) }}" class="at-in">
                                <img src="{{ URL::to('/frontend/' . $item->prd_cover) }}" class="img-responsive" alt="">
                            </a>
                            <div class="sed">
                                <h5>{{ $item->prd_names }}</h5>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="close1"> <i class="fa fa-times" aria-hidden="true"></i></div>
                        </td>
                        <td class="t-data">${{ number_format($item->prd_selling_price) }}</td>
                        <td class="t-data">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value"><span class="span-1">1</span></div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>

                        </td>

                        <td class="t-data t-w3l">
                            <a class=" add-1" href="{{ route('products.detailsClient', ['id' => $item->id]) }}">Add To Cart</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>


        </table>
    </div>
</div>

<!--quantity-->
<script>
    $('.value-plus').on('click', function() {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) + 1;
        divUpd.text(newVal);
    });

    $('.value-minus').on('click', function() {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) - 1;
        if (newVal >= 1) divUpd.text(newVal);
    });
</script>
<!--quantity-->
