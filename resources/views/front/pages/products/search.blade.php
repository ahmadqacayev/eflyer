@extends('front.layouts.master')

@section('content')

        <div class="div-box ">
            <div class="banner-subpage">
                <figure><img src="{{asset('front')}}/images/background/bg-banner.jpg" alt="bg-banner"/></figure>
                <div class="banner-subpage-content">
                    <h2>Shop</h2>
                    <div class="desc">
                        <p>Home </p>
                        <p>Shop </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-box mb" style="margin-top: 100px">
            <div class="container">
                <div data-js-module="filtering-demo" class="big-demo go-wide">
                    <div class="sidebar-shop-col toggle-sidebar-shop mb-20 dib-none">
                        <div class="sidebar-product-style-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <aside class="sort-by">
                                        <h4 class="mb-20">Sort By</h4>
                                        <ul>
                                            <li>Default</li>
                                            <li><a href="#">Popularity</a></li>
                                            <li><a href="#">Average rating</a></li>
                                            <li><a href="#">Newness</a></li>
                                            <li><a href="#">Price: Low to High</a></li>
                                            <li><a href="#">Price: High to Low</a></li>
                                        </ul>
                                    </aside>
                                </div>
                                <div class="col-md-3">
                                    <aside class="sort-by">
                                        <h4 class="mb-20">Filter by price</h4>
                                        <ul class="categories">
                                            <li>All</li>
                                            <li><a href="#">$0.00 - $50.00</a></li>
                                            <li><a href="#">$50.00 - $100.00</a></li>
                                            <li><a href="#">$100.00 - $150.00</a></li>
                                            <li><a href="#">$150.00 - $200.00</a></li>
                                            <li><a href="#">$200.00 - $250.00</a></li>
                                            <li><a href="#">$250.00 - $300.00</a></li>
                                            <li><a href="#">$300.00 - $350.00</a></li>
                                            <li><a href="#">$350.00 - $400.00</a></li>
                                            <li><a href="#">$400.00+</a></li>
                                        </ul>
                                    </aside>
                                </div>
                                <div class="col-md-3">
                                    <aside class="categorie">
                                        <h4 class="mb-20">Product Categories</h4>
                                        <ul class="categories">
                                            <li><a href="#">Chair</a></li>
                                            <li><a href="#">Decoration</a></li>
                                            <li><a href="#">Essential</a></li>
                                            <li><a href="#">Lamp</a></li>
                                            <li><a href="#">Sofas</a></li>
                                        </ul>
                                    </aside>
                                </div>
                                <div class="col-md-3">
                                    <aside class="tagcloud">
                                        <h4 class="mb-20">tags</h4>
                                        <ul class="tagcloud">
                                            <li><a href="#">Bag</a></li>
                                            <li><a href="#">Comb</a></li>
                                            <li><a href="#">Chair</a></li>
                                            <li><a href="#">Classic</a></li>
                                            <li><a href="#">Desk</a></li>
                                            <li><a href="#">Gel</a></li>
                                            <li><a href="#">Lamp</a></li>
                                            <li><a href="#">Glass</a></li>
                                            <li><a href="#">Office</a></li>
                                            <li><a href="#">Table Tiles</a></li>
                                            <li><a href="#">Socks</a></li>
                                        </ul>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="grid shortcode-product-wrap product-begreen columns-3">
                        @foreach($results as $product)
                            <li data-category="outdoor" class="element-item product-item-wrap product-style_1 featured indoor new seeds">
                                <div class="product-item-inner">
                                    <div class="product-thumb">
                                        <div class="product-flash-wrap"></div>
                                        <div class="product-thumb-primary"><img src="{{asset('uploads/'.$product->image)}}" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                                            <div class="product-hover-sign">
                                                <hr/>
                                                <hr/>
                                            </div></a>
                                        <div class="product-info">
                                            <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                                                <h3>{{$product->name}} - {{$product->category->category_name}}</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>{{$product->price}}</span></span>
                                        </div>
                                        <div class="product-actions">
                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                                <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                            </div>
                                            <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <p class="button-product text-center mt-20"><a class="btn btn-15">Load more</a></p>
            </div>
        </div>



@endsection
