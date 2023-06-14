@extends('front.layouts.master')

@section('content')

        <div class="div-box">
            <div class="slider-home slider-home-2">
                <div data-number="1" data-margin="100" data-loop="yes" data-navcontrol="yes" class="begreen-owl-carousel">

                    @foreach($sliders as $key=>$slider)
                        <div class="slider-1" style="background: rgba(0, 0, 0, 0) url({{ asset('uploads/' . $slider->image) }}) repeat scroll right center / cover !important;">

                            <div class="slider-content slider-1-content" style="background: #00000075;">
                                <h2>{{$slider->title}}</h2>
                                <p>{!! $slider->description !!}</p>
                                <div class="slider-1-content-bottom @if($slider->button_active === 'passive') hidden @endif"><a href="#" class="btn btn-3">buy now</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <div class="div-box mb mt-2" style="margin-top:80px">
            <div class="home-2-new-collections">
                <div class="container">
                    <h2 class="title-style title-style-1 text-center"><span class="title-left">New </span><span class="title-right">Collections</span></h2>
                    <div data-js-module="filtering-demo" class="big-demo go-wide">
                        <div class="filter-button-group button-group js-radio-button-group container">
                            @foreach($categories as $category)
                                <button data-filter="*" class="button">{{$category->category_name}}</button>
                            @endforeach
                        </div>
                        <ul class="grid shortcode-product-wrap product-begreen columns-4">
                            @foreach($products as $product)
                                <li data-category="outdoor" class="element-item product-item-wrap product-style_1 pots seeds indoor">
                                    <div class="product-item-inner">
                                        <div class="product-thumb">
                                            <div class="product-flash-wrap"></div>
                                            <div class="product-thumb-primary"><img src="{{asset('uploads/'.$product->image)}}" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="{{route('show_product',[$product->id])}}" class="product-link">
                                                <div class="product-hover-sign">
                                                    <hr/>
                                                    <hr/>
                                                </div></a>
                                            <div class="product-info">
                                                <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                                                    <h3>{{$product->name}}</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>{{$product->price}}</span></span>
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
                </div>
            </div>
        </div>


        <div class="div-box mt mb">
            <div class="home-2-coundown text-center">
                <div class="home-2-coundown-content container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h2 class="title-style title-style-1 font-68"><span class="title-left">Special </span><span class="title-right">Gift</span></h2>
                            <div class="desc">Lorem ipsum dolor <b>safe 25%</b> amet, pede ultrices <b>1500s</b> ultrices aspernatur facilisis <br/>vestil ut suspendisse morbi fringilla</div>
                            <div class="countdown countdown-container">
                                <div class="clock row">
                                    <div class="clock-item clock-days countdown-time-value col-sm-3 col-md-3 col-xs-6">
                                        <div class="wrap">
                                            <div class="inner">
                                                <div id="canvas-days" class="clock-canvas"></div>
                                                <div class="text">
                                                    <p class="val">0</p>
                                                    <p class="type-days type-time">Days</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clock-item clock-hours countdown-time-value col-sm-3 col-md-3 col-xs-6">
                                        <div class="wrap">
                                            <div class="inner">
                                                <div id="canvas-hours" class="clock-canvas"></div>
                                                <div class="text">
                                                    <p class="val">0</p>
                                                    <p class="type-hours type-time">Hour</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clock-item clock-minutes countdown-time-value col-sm-3 col-md-3 col-xs-6">
                                        <div class="wrap">
                                            <div class="inner">
                                                <div id="canvas-minutes" class="clock-canvas"></div>
                                                <div class="text">
                                                    <p class="val">0</p>
                                                    <p class="type-minutes type-time">Minutes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clock-item clock-seconds countdown-time-value col-sm-3 col-md-3 col-xs-6">
                                        <div class="wrap">
                                            <div class="inner">
                                                <div id="canvas-seconds" class="clock-canvas"></div>
                                                <div class="text">
                                                    <p class="val">0</p>
                                                    <p class="type-seconds type-time">Seconds</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a href="#" class="btn btn-12">PURCHASE NOW</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="div-box" style="margin-top: 80px;">
            <div class="home-2-recent-news recent-news-home_4">
                <div class="container">
                    <h2 class="title-style title-style-1 text-center mb" style="margin-bottom: 40px"><span class="title-left">Recent </span><span class="title-right">Posts</span></h2>
                    <div data-number="2" data-margin="15" data-loop="yes" data-navcontrol="yes" class="begreen-owl-carousel">
                        @foreach($posts as $post)
                            <div class="recent-news-container">
                                <article class="recent_news_item">
                                    <div class="post-meta">
                                        <div class="post-meta-inner"><span class="post-day">{{$post->created_at->format('d')}} </span><span class="post-month">{{$post->created_at->format('M')}} </span></div>
                                    </div>
                                    <div class="post-thumbnail"><a href="#">
                                            <div class="post-image"><img src="{{asset('uploads/'.$post->image)}}" alt="blog4" width="300" height="203" class="attachment-medium size-medium wp-post-image"/></div></a>
                                        <div class="post-content">
                                            <div class="post-main-content">
                                                <h4 class="entry-title"><a href="#">{{$post->title}}</a></h4><span class="post-author"><i class="fa fa-user"></i>{{$post->publisher}}</span>
                                                <p class="post-excerpt">{{$post->content}}</p><a href="#" class="btn-readmore"><span class="span-text">Read more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


@endsection

