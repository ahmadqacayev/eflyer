@extends('front.layouts.master')

@section('content')
    <div id="example-wrapper">
        <div class="div-box">
            <div class="banner-subpage">
                <figure><img src="{{asset('uploads/'.$product->category->bg_image)}}" style="object-fit: cover" alt="bg-banner"/></figure>
                <div class="banner-subpage-content">
{{--                    @dd($product->category);--}}
                    <h2>{{$product->category->category_name}}</h2>
                    <div class="desc">
                        <p>Home </p>
                        <p>{{$product->category->category_name}}</p>
                        <p>{{$product->name}} </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="div-box mb mt">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="single-product-slider">
                            <div class="item">
                                <figure><img src="{{asset('uploads/'.$product->image)}}" alt="slide" width="1080"
                                             height="768"/></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="single-product-content">
                            <div class="summary-product entry-summary">
                                <h2 class="product_title mb-45">{{$product->name}}</h2>
                                <div>
                                    <p class="price"><span class="product-begreen-price-amount amount"><span
                                                class="product-begreen-price-currencysymbol">$</span>{{$product->price}}</span>
                                    </p>
                                </div>
                                <div class="product-single-short-description truncated" id="desc">
                                    <p>{!!$product->description !!}</p>

                                </div>
                                <span><a id="show-more" class="btn-sm btn-info" href="javascript:void(0)">show more</a></span>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>


                            <div class="product_meta">
                                <span class="product-stock-status-wrapper">
                            <label>Availability:</label>
                                    <span class="product-stock-status in-stock">@if($product->stock_status == 0)
                                       <span>Yok</span>
                                        @else
                                                <span>Var</span>
                                        @endif</span>
                                </span>
                                    <span class="posted_in">
                                    <br>
                            <label>Categories:</label>  {{$product->category->category_name}} <br></span>
                                    <span class="tagged_as">
                            <label>Delivery:</label> @if($product->delivery == 0)
                                            <span>Pending</span>
                                        @else
                                            <span>Delivered</span>
                                        @endif</span>
                            </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="div-box mt mb">
        <div class="product-begreen-tabs">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                            <li><a href="#tab-reviews" data-toggle="tab">Reviews (0)</a></li>
                        </ul>
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <div class="desc-review-content tab-content clearfix">
                            <div id="tab-description" class="tab-pane active">
                                <h2 class="mb-20" style="margin-bottom: 10px">Product Description</h2>
                                <p>{!! $product->description !!} </p>
                            </div>
                            <div id="tab-reviews" class="tab-pane dib-none">
                                <div id="reviews" class="product-begreen-reviews">
                                    <div id="comments">
                                        <h2 class="product-begreen-reviews-title">Reviews</h2>
                                        <p class="product-begreen-noreviews">There are no reviews yet.</p>
                                    </div>
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">Be the first to review
                                                    “The Calvert with Succulents” <small></small></h3>
                                                <form id="commentform" class="comment-form">
                                                    <div class="comment-notes"><span id="email-notes">Your email address will not be published.</span>
                                                        Required fields are marked <span class="required">*</span></div>
                                                    <div class="comment-form-rating mb-20 mt-20">
                                                        <label>Your Rating</label>
                                                    </div>
                                                    <div class="star-rating"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-o"></i></div>
                                                    <div class="comment-form-comment">
                                                        <label class="mb-20 mt-20">Your Review *</label>
                                                        <textarea id="comment" name="comment" cols="45" rows="8"
                                                                  required=""></textarea>
                                                    </div>
                                                    <div class="comment-fields-wrap">
                                                        <div class="comment-fields-inner clearfix">
                                                            <p class="comment-form-author">
                                                                <label class="mb-20 mt-20">Name *</label>
                                                                <input id="author" type="text"/>
                                                            </p>
                                                            <p class="comment-form-email">
                                                                <label class="mb-20 mt-20">Email *</label>
                                                                <input id="email" name="email" size="30" required=""
                                                                       type="email"/>
                                                            </p>
                                                            <p class="form-submit mt-20">
                                                                <input id="submit" name="submit" value="Submit"
                                                                       type="submit" class="submit"/>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="div-box mb" style="margin-top: 40px">
        <div class="container" style="margin-bottom: 40px">
            <div class="title-style title-style-2 text-center mb-20">
                <h2>Related Projects </h2>
            </div>
            <div data-number="4" data-margin="0" data-loop="no" data-navcontrol="yes"
                 class="shortcode-product-wrap product-begreen begreen-owl-carousel">
                @foreach($product_related as $product)
                    <div class="product-item-wrap product-style_1">
                        <div class="product-item-inner">

                            <div class="product-thumb">
                                <div class="product-thumb-primary"><img src="{{asset('uploads/'.$product->image)}}"
                                                                        alt="product1" width="375" height="450"
                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                </div>
                                <a href="#" class="product-link">
                                    <div class="product-hover-sign">
                                        <hr/>
                                        <hr/>
                                    </div>
                                </a>
                                <div class="product-info">
                                    <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                                    <a href="#">
                                        <h3>{{$product->name}}</h3></a>
                                    <span class="price">
                           <span class="product-begreen-price-amount amount"><span
                                   class="product-begreen-price-currencysymbol">$</span>{{$product->price}}</span></span>
                                </div>
                                <div class="product-actions">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                        <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i
                                                    class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                    </div>
                                    <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                class="fa fa-cart-plus"></i> Add to cart</a></div>
                                    <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </div>


    <div class="div-box">
        <footer id="yolo-footer-wrapper">
            <div class="yolo-footer-wrapper footer-3">
                <div class="footer-col">
                    <h2><a href="index.html" class="logo"><img src="{{asset('front/images/logo/logo-footer.png')}}"
                                                               alt="logo1" width="84" height="63"
                                                               class="vc_single_image-img attachment-full"/></a></h2>
                    <ul id="social-footer">
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                    <p class="copyright">BeGreen © Yolo 2016 Copyright, All Right Reserved 2016 Designed by <a href="#">Yolo</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>

    </div>

@endsection

@section('additional')
    <script !src="">
        $(document).ready(function () {
            let more = $('#show-more')
            let desc = $('#desc');
            $('#show-more').click(function () {
                if (desc.hasClass('truncated')) {
                    $('#desc').removeClass('truncated')
                    $(this).html('show less')
                } else {
                    $('#desc').addClass('truncated')
                    $(this).html('show more')
                }
            })
        })
    </script>
@endsection
