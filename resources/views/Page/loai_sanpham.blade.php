

@extends('master');
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
						@foreach($type_product as $l)
						 <li><a href="/type/{{$l->id}}">{{$l->name}}</a></li>
						 @endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<<br>
							@foreach($type_product as $loai)
							@if($sp_theoloai[0]->id_type==$loai->id)
							<h4>{{$loai->name}}</h4>
							@endif
							@endforeach
							<div class="beta-products-details">
							<p class="pull-left">{{count($sp_theoloai)}} style found</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							@foreach($sp_theoloai as $sp)
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
										<p class="single-item-title">{{$sp->name}}</p>
											<p class="single-item-price">
											@if($sp->promotion_price==0)
												<span class="flash-sale">{{number_format($sp->unit_price)}} đồng</span>
												@else
												<span class="flash-del">{{number_format($sp->unit_price)}} đồng</span>
												<span class="flash-sale">{{number_format($sp->promotion_price)}} đồng</span>
												@endif
											</p>
											
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								
							</div>
						</div> <!-- .beta-products-list -->
						 <!-- .beta-products-list -->
					</div>
					<div class="space50">&nbsp;</div>

					<h4>Sản phẩm khác</h4>
					<div class="beta-products-details">
							
								<p class="pull-left">{{count($sp_khac)}} found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							@foreach($sp_khac as $khac)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
										<a href="product.html"><img src="source/images/product/{{$khac->image}} "alt=""></a>
									</div>
									@if($khac->promotion_price==!0)
										<div class="ribbion-wrapper">
											<div class="ribbion sale">Sale</div>
										</div>
									@endif
										<div class="single-item-body">
										
											<p class="single-item-title">{{$khac->name}}</p>
											<p class="single-item-price">
											
												@if($khac->promotion_price==0)
												<span class="flash-sale">{{number_format($khac->unit_price)}} đồng</span>
												@else
												<span class="flash-del">{{number_format($khac->unit_price)}} đồng</span>
												<span class="flash-sale">{{number_format($khac->promotion_price)}} đồng</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
										</div>
									</div>
								</div>
							@endforeach
						</div>
						
						<div class="row">{{$sp_khac->links("pagination::bootstrap-4")}}</div>
							<div class="space40">&nbsp;</div>	
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	 <!-- .container -->
    @endsection