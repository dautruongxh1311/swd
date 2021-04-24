@extends('layout')
@section('content')

<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Kết Quả Tìm Kiếm </h2>
						@foreach($search_product as $key => $product)
						<a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
											<img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
											<h2>{{number_format($product->product_price).' '.'VND'}}</h2>
											<h6><a href="#">{{$product->product_name}}</a></h6>
											<a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">
                                            </i>Thêm Vào Giỏ</a>
										</div>
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Thêm yêu thích</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>So Sánh</a></li>
									</ul>
								</div>	
							</div>
						</div>
						@endforeach
					</div><!--features_items-->


					
					

@endsection                