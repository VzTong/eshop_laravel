<x-clients-layout>

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
		<h3>Cart</h3>
		<h4><a href="{{ route('home') }}">Home</a><label>/</label>Cart</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3>Cart</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
		<div class=" contact-w3">
			<div class="col-md-5 contact-right grid">
				<h4>Cart Information</h4>

                <form action=""></form>
			</div>
			<div class="col-md-7 contact-left">

				{{-- <p> Nemo enim ipsam voluptatem quia voluptas sit aspernatur
					aut odit aut fugit, sed quia consequuntur magni dolores eos
					qui ratione voluptatem sequi nesciunt. Neque porro quisquam
					est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
				<ul class="contact-list">
					<li> <i class="fa fa-map-marker" aria-hidden="true"></i> 756 Global Place, New York.</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com">mail@example.com</a></li>
					<li> <i class="fa fa-phone" aria-hidden="true"></i>+123 2222 222</li>
				</ul> --}}
				<div id="container">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<div class="resp-tabs-container hor_1">
							<div>
								{{-- <form action="#" method="post">
									<input type="text" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
									<input type="email" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
									<textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
									<input type="submit" value="Submit">
								</form> --}}
							</div>
							{{-- <div>
								<div class="map-grid">
									<h5>Our Branches</h5>
									<ul>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>756 Global Place, New York.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>889 diamond street, USA.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>756 global Place, New York.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>889 diamond street, USA.</li>
									</ul>
								</div>
							</div>
							<div>
								<div class="map-grid">
									<h5>Contact Me Through</h5>
									<ul>
										<li>Mobile No : +123 456 7890</li>
										<li>Office No : +123 222 2222</li>
										<li>Home No : +123 456 7890</li>
										<li>Fax No : +123 456 7890</li>
									</ul>
								</div>
							</div> --}}
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d502745.7236969385!2d105.20251891271758!3d10.12354502926173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629f927382cd%3A0x72a463d91109ec67!2zQ-G6p24gVGjGoSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1682072276208!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
						</div>
					</div>
				</div>

				<!--Plug-in Initialisation-->
				<script type="text/javascript">
					$(document).ready(function() {
						$('#parentHorizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion
							width: 'auto', //auto or any width like 600px
							fit: true, // 100% fit in a container
							tabidentify: 'hor_1', // The tab groups identifier
							activate: function(event) { // Callback function if tab is switched
								var $tab = $(this);
								var $info = $('#nested-tabInfo');
								var $name = $('span', $info);
								$name.text($tab.text());
								$info.show();
							}
						});

						// Child Tab
						$('#ChildVerticalTab_1').easyResponsiveTabs({
							type: 'vertical',
							width: 'auto',
							fit: true,
							tabidentify: 'ver_1', // The tab groups identifier
							activetab_bg: '#fff', // background color for active tabs in this group
							inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
							active_border_color: '#c1c1c1', // border color for active tabs heads in this group
							active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
						});

						//Vertical Tab
						$('#parentVerticalTab').easyResponsiveTabs({
							type: 'vertical', //Types: default, vertical, accordion
							width: 'auto', //auto or any width like 600px
							fit: true, // 100% fit in a container
							closed: 'accordion', // Start closed if in accordion view
							tabidentify: 'hor_1', // The tab groups identifier
							activate: function(event) { // Callback function if tab is switched
								var $tab = $(this);
								var $info = $('#nested-tabInfo2');
								var $name = $('span', $info);
								$name.text($tab.text());
								$info.show();
							}
						});
					});
				</script>

			</div>

			<div class="clearfix"></div>
		</div>
	</div>
</div>

<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default',
			width: 'auto',
			fit: true
		});
	});
</script>

</x-clients-layout>