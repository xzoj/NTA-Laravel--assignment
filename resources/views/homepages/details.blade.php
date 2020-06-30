@extends('homepages.layout')
@section('content')
    <div class="col-sm-9 padding-right">
        <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                    <img src="{{$product->img}}" alt="">
                    <h3>ZOOM</h3>
                </div>
                <div id="similar-product" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item">
                            <a href=""><img src="home/images/product-details/similar1.jpg" alt=""></a>
                            <a href=""><img src="home/images/product-details/similar2.jpg" alt=""></a>
                            <a href=""><img src="home/images/product-details/similar3.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href=""><img src="home/images/product-details/similar1.jpg" alt=""></a>
                            <a href=""><img src="home/images/product-details/similar2.jpg" alt=""></a>
                            <a href=""><img src="home/images/product-details/similar3.jpg" alt=""></a>
                        </div>


                    </div>

                    <!-- Controls -->
                    <a class="left item-control" href="#similar-product" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#similar-product" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
            <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                    <img src="home/images/product-details/new.jpg" class="newarrival" alt="">
                    <h2>{{$product->name}}</h2>
                    <img src="home/images/product-details/rating.png" alt="">
                    <span>
									<span>US ${{$product->price}}</span>

									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
                    <p><b>Description:</b> {{$product->description}}</p>

                    <a href=""><img src="home/images/product-details/share.png" class="share img-responsive" alt=""></a>
                </div><!--/product-information-->
            </div>
        </div><!--/product-details-->





    </div>
@endsection
