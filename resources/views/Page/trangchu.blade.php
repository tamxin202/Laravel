
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <base href="{{asset('')}}"></base>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
    <link rel="stylesheet" href="source/assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">

</head>
<body>
    @extends('master')
    @section('content')

<div class="fullwidthbanner-container">
                    <div class="fullwidthbanner">
                        <div class="bannercontainer" >
                        <div class="banner" >
                                <ul>
                                    @foreach($slide as $sl)
                                    <!-- THE FIRST SLIDE -->
                                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="/source/image/slide/{{$sl->image}}" data-src="/source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('/source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                                    </div>
                                                </div>

                                </li>
                               
                                @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
                <!--slider-->
    
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        
					<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{$countNewPro}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							@foreach($new_product as $new)
								<div class="col-sm-3">
									<div class="single-item">
										@if ($new->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon-sale">I love you</div></div>
										@endif
										<div class="single-item-header">
											<a href="product.html"><img src="source/image/product/{{$new->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price">
											@if($new->promotion_price==0)
												<span class="flash-sale">{{$new->unit_price}} đồng</span>
											@else
												<span class="flash-del">{{$new->unit_price}} đồng</span>
												<span class="flash-sale">{{$new->promotion_price}} đồng</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="detail/{{$new->id}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								<div class="row">{{$new_product->links("pagination::bootstrap-4")}}</div>
							</div> <!-- .beta-products-list -->
                        </div>
						<div class="space50">&nbsp;</div>
							
                    <div class="beta-products-list">
							<h4>Sản phẩm nổi bật</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{$countnoibat_Pro}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							@foreach($noibat_pro as $noibat)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="/source/image/product/{{$noibat->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$noibat->name}}</p>
                                            
											<p class="single-item-price">
                                            @if($noibat->promotion_price==0)
												<span class="flash-sale">{{$noibat->unit_price}} đồng</span>
											@else
												<span class="flash-del">{{$noibat->unit_price}} đồng</span>
												<span class="flash-sale">{{$noibat->promotion_price}} đồng</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="detail/{{$noibat->id}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
							<div class="row">{{$noibat_pro->links("pagination::bootstrap-4")}}</div></div>
							</div>
						</div>
					</div>
				</div> 

			</div> 
		</div> 
 

 <!-- .container -->
                           

@endsection
<script src="source/assets/dest/js/jquery.js"></script>
    <script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
    <script src="source/assets/dest/vendors/animo/Animo.js"></script>
   