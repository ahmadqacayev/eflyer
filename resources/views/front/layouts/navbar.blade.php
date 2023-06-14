<header class="header yolo-header-style-2">
    <div class="yolo-top-bar">
        <div class="container">
            <div class="row">
                <div class="top-sidebar top-bar-left col-md-4">
                    <aside id="text-11" class="widget widget_text">
                        <div class="textwidget">
                            <div>Welcome to BeGreen - Best Plant</div>
                        </div>
                    </aside>
                </div>
                <div class="top-sidebar top-bar-right col-md-8">
                    <aside id="text-6" class="widget widget_text">
                        <div class="textwidget"><i class="fa fa-home"></i> 69 North Cleveland, Memphis <i style="margin-left: 15px" class="fa fa-phone"></i> + 46 234-623-213<i style="margin-left: 15px" class="fa fa-clock-o"></i> Mon - Fri: 9.00am - 8.00pm</div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="yolo-header-top yolo-header-top-style-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-logo">
                        <h1><a href="/"><img src="{{asset("front")}}/images/logo/logo.png" alt="logo"/></a></h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="header-customize header-customize-right">
                        <div class="custom-select-wrapper header-customize-item">
                            <form action="{{route('search')}}" method="GET">
                                <select name="category">
                                    <option value="">Categories</option>
                                    @foreach($categories as $category)
                                        <option @selected(old('category',request()->category ) == $category->id) value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                                <div class="form-input">
                                    <input style="text" required value="{{old('searchParam',request()->searchParam)}}" name="searchParam" placeholder=""/><a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </form>
                        </div>
                        <div class="custom-phone-wrapper header-customize-item"><i class="fa fa-phone"></i> + 46 234-623-213 </div>
                        <div class="shopping-cart-wrapper header-customize-item with-price">
                            <div class="widget_shopping_cart_content">
                                <div class="widget_shopping_cart_icon"><i class="wicon fa fa-shopping-bag"></i><span class="total">0</span></div>
                                <div class="sub-total-text"><span class="product-begreen-price-amount amount">$0.00</span></div>
                                <div class="cart_list_wrapper">
                                    <div class="scroll-wrapper cart_list product_list_widget scrollbar-inner">
                                        <ul class="cart_list product_list_widget scrollbar-inner scroll-content">
                                            <li class="empty">
                                                <h4>An empty cart</h4>
                                                <p>You have no item in your shopping cart</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <div class="col-3 text-left"><a href="#primary-menu"><i class="fa fa-bars"></i></a></div>
        <div class="col-3 text-center">
            <div class="logo">
                <h1><a href="index.html"><img src="{{asset("front")}}/images/logo/logo.png" alt="logo"/></a></h1>
            </div>
        </div>
        <div class="col-3 text-right">
            <div class="header-right">
                <div class="search-button-wrapper header-customize-item style-default">
                    <div class="icon-search-menu"><i class="wicon fa fa-search"></i></div>
                    <div class="yolo-search-wrapper">
                        <input id="search-ajax" placeholder="Enter keyword to search" type="search"/>
                        <button class="search"><i class="fa fa-search"></i></button>
                        <button class="close"><i class="pe-7s-close"></i></button>
                    </div>
                </div>
                <div class="shopping-cart-wrapper header-customize-item with-price">
                    <div class="widget_shopping_cart_content">
                        <div class="widget_shopping_cart_icon"><i class="wicon fa fa-shopping-bag"></i><span class="total">0</span></div>
                        <div class="cart_list_wrapper">
                            <div class="scroll-wrapper cart_list product_list_widget scrollbar-inner">
                                <ul class="cart_list product_list_widget scrollbar-inner scroll-content">
                                    <li class="empty">
                                        <h4>An empty cart</h4>
                                        <p>You have no item in your shopping cart</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">

            <div class="main-nav-wrapper">
                <div class="header-left">
                    <nav id="primary-menu" class="main-nav">
                        <ul class="nav">
                            <li class="active menu-item menu-home"><a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="index.html">Homepage Demos</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="index.html">Main Home</a></li>
                                            <li class="menu-item"><a href="home-2.html">Planter Shop Home</a></li>
                                            <li class="menu-item"><a href="home-3.html">Green Shop Home</a></li>
                                            <li class="menu-item"><a href="home-4.html">Tree Shop Home</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="home-5.html">Homepage Demos</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="home-5.html">Business Home</a></li>
                                            <li class="menu-item"><a href="home-6.html">Service Home</a></li>
                                            <li class="menu-item"><a href="home-7.html">Creative Agency Home</a></li>
                                            <li class="menu-item"><a href="home-8.html">Planter Agency Home</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="home-9.html">Homepage Demos</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="home-9.html">Personal Home</a></li>
                                            <li class="menu-item"><a href="home-10.html">Personal Artist Home</a></li>
                                            <li class="menu-item"><a href="home-11.html">Split Screen Home</a></li>
                                            <li class="menu-item"><a href="home-12.html">Blog Home</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-menu menu-item"><a href="#">MegaMenu</a>
                                <ul class="sub-menu sub-menu-mega">
                                    <li class="sub-menu-mega-item"><a href="#">What we do</a>
                                        <ul>
                                            <li>
                                                <figure><img src="{{asset("front")}}/images/demo/mega-1.jpg" alt="mega"/></figure><a href="#" class="name-mega">Easy care houseplants</a>
                                                <div class="infomation-mega"><span class="author">Admin</span><span class="time">July 2016</span><span class="comment"><i class="fa fa-comments-o"></i>0</span></div>
                                            </li>
                                            <li>
                                                <figure><img src="{{asset("front")}}/images/demo/mega-2.jpg" alt="mega"/></figure><a href="#" class="name-mega">Plaited Planter Tutorial Fall For DIY</a>
                                                <div class="infomation-mega"><span class="author">Admin</span><span class="time">July 2016</span><span class="comment"><i class="fa fa-comments-o"></i>0</span></div>
                                            </li>
                                            <li>
                                                <figure><img src="{{asset("front")}}/images/demo/mega-3.jpg" alt="mega"/></figure><a href="#" class="name-mega">These Plant Pots Make From Upcycled Ceramic</a>
                                                <div class="infomation-mega"><span class="author">Admin</span><span class="time">July 2016</span><span class="comment"><i class="fa fa-comments-o"></i>0</span></div>
                                            </li>
                                            <li>
                                                <figure><img src="{{asset("front")}}/images/demo/mega-4.jpg" alt="mega"/></figure><a href="#" class="name-mega">Plants Of The Month: Sanseivier</a>
                                                <div class="infomation-mega"><span class="author">Admin</span><span class="time">July 2016</span><span class="comment"><i class="fa fa-comments-o"></i>0</span></div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu-mega-item active-menu"><a href="#">Our latest work</a>
                                        <ul>
                                            <li>
                                                <figure><img src="{{asset("front")}}/images/demo/mega-1.jpg" alt="mega"/></figure><a href="#" class="name-mega">Easy care houseplants</a>
                                                <div class="infomation-mega"><span class="author">Admin</span><span class="time">July 2016</span><span class="comment"><i class="fa fa-comments-o"></i>0</span></div>
                                            </li>
                                            <li>
                                                <figure><img src="{{asset("front")}}/images/demo/mega-2.jpg" alt="mega"/></figure><a href="#" class="name-mega">Plaited Planter Tutorial Fall For DIY</a>
                                                <div class="infomation-mega"><span class="author">Admin</span><span class="time">July 2016</span><span class="comment"><i class="fa fa-comments-o"></i>0</span></div>
                                            </li>
                                            <li>
                                                <figure><img src="{{asset("front")}}/images/demo/mega-3.jpg" alt="mega"/></figure><a href="#" class="name-mega">These Plant Pots Make From Upcycled Ceramic</a>
                                                <div class="infomation-mega"><span class="author">Admin</span><span class="time">July 2016</span><span class="comment"><i class="fa fa-comments-o"></i>0</span></div>
                                            </li>
                                            <li>
                                                <figure><img src="{{asset("front")}}/images/demo/mega-4.jpg" alt="mega"/></figure><a href="#" class="name-mega">Plants Of The Month: Sanseivier</a>
                                                <div class="infomation-mega"><span class="author">Admin</span><span class="time">July 2016</span><span class="comment"><i class="fa fa-comments-o"></i>0</span></div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu-mega-item sale-off-mega-menu"><a href="#">Sale OFF Products</a>
                                        <ul>
                                            <li><a href="#">Featured Products</a>
                                                <ul>
                                                    <li><a href="#"><img src="{{asset("front")}}/images/demo/mega-5.jpg" alt="mg-" width="85" height="100"/></a>
                                                        <p class="mega-right"><span class="product-title">Hay Flowerpot With Saucer Huset</span><span class="price">$80.00–$100.00</span></p>
                                                    </li>
                                                    <li><a href="#"><img src="{{asset("front")}}/images/demo/mega-6.jpg" alt="mg-" width="85" height="100"/></a>
                                                        <p class="mega-right"><span class="product-title">Cactus Shaped Eraser</span><span class="price">$32.00</span></p>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Products</a>
                                                <ul>
                                                    <li><a href="#"><img src="{{asset("front")}}/images/demo/mega-7.jpg" alt="mg-" width="85" height="100"/></a>
                                                        <p class="mega-right"><span class="product-title">Hay Flowerpot With Saucer Huset</span><span class="price">$80.00–$100.00</span></p>
                                                    </li>
                                                    <li><a href="#"><img src="{{asset("front")}}/images/demo/mega-5.jpg" alt="mg-" width="85" height="100"/></a>
                                                        <p class="mega-right"><span class="product-title">Unicorn Glitter Socks</span><span class="price">$40.00</span></p>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Products Tags</a>
                                                <div class="tagcloud"><a href="#" class="tag-link tag-link-position-1">Beautiful</a><a href="#" class="tag-link tag-link-position-2">Cactus</a><a href="#" class="tag-link tag-link-position-3">Featured</a><a href="#" class="tag-link tag-link-position-4">Indoor</a><a href="#" class="tag-link tag-link-position-5">Outdoor</a><a href="#" class="tag-link tag-link-position-6">Tree</a></div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-blog"><a href="#">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="service.html">Main Services</a></li>
                                    <li><a href="why-choose-us.html">Why Choose Us</a></li>
                                    <li><a href="service-detail.html">Service Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-project"><a href="project-4-columns-portrait.html">Project</a>
                                <ul class="sub-menu">
                                    <li class="menu_style_dropdown menu-item"><a href="#">Classic layout</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-object-page"><a href="project-4-columns-portrait.html">4 Columns Portrait</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="project-4-columns-landscape.html">4 Columns Landscape</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="project-4-columns-squared.html">4 Columns Squared</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="project-4-columns-full-width.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu_style_dropdown menu-item"><a href="#">Masonry layout</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-object-page"><a href="project-masonry-no-padding.html">Masonsy no padding</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="project-masonry-with-padding.html">Masonsy with padding</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="project-portlio-packery.html">Porfolio packery</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu_style_dropdown menu-item"><a href="project-single.html">Single item</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-object-page"><a href="project-single.html">Single Image</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="project-single-gallery.html">Single Gallery</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="project-sidebar.html">Single Vertical Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu_style_dropdown menu-item"><a href="project-top-title.html">Title box layout</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-object-page"><a href="project-none.html">None   </a></li>
                                            <li class="menu-item menu-item-object-page"><a href="project-top-title.html">Top title</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="project-bottom-title.html">Bottom title</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-shop"><a href="product-shop.html">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu_style_dropdown menu-item"><a href="#">Products Listing</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-object-page"><a href="products-grid-4-columns.html">Products Grid 4 Columns</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="products-grid-3-columns.html">Products Grid 3 Columns</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="products-grid-3-columns-width-sidebar.html">Products 3 Columns with Sidebar</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="products-grid-2-columns-width-sidebar.html">Products 2 Columns with Sidebar</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="products-list.html">Product List</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu_style_dropdown menu-item"><a href="product-shop.html">Products Types</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-object-page"><a href="product-single.html">Simple Product</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="product-available.html">Variable Product</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="product-out-of-stock.html">Out Of Stock Product</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="product-group.html">Grouped Product</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="product-affiliate-external.html">Affiliate/ External Product</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu_style_dropdown menu-item"><a href="product-shop.html">Woo Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-object-page"><a href="product-cart.html">Cart</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="product-check-out.html">Checkout</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="product-my-acount.html">My Account</a></li>
                                            <li class="menu-item menu-item-object-page"><a href="product-wishlist.html">Wishlist</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-blog"><a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                    <li><a href="blog-2-columns-with-sidebar.html">Blog 2 Columns with Sidebar</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-detail.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-blog"><a href="#">Page</a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="book-service.html">Book Service</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- .header-main-nav-->
                </div>

            </div>
        </div>
    </div>
    <nav class="yolo-canvas-menu-wrapper dark ps-container"><a href="#" class="yolo-canvas-menu-close"><i class="fa fa-close"></i></a>
        <div class="yolo-canvas-menu-inner sidebar">
            <aside id="text-12" class="widget widget_text">
                <div class="textwidget">
                    <div class="begreen-widget ad-spot text-center">
                        <div class="about-image"><img src="{{asset("front")}}/images/demo/off-menu.png" alt="demo"/></div>
                        <h2 class="name_author">Be Green</h2>
                        <div class="about-description text-center">I love life and the unique position of being a working artist. I love the thrill of the hunt and am an avid vintage hound, sniffing out the best one-of-a-kinds.</div>
                    </div>
                </div>
            </aside>
            <aside id="text-13" class="widget widget_text">
                <div class="textwidget"><a href="#"><img src="{{asset("front")}}/images/demo/bn-bs.jpg" alt="demo"/></a></div>
            </aside>
            <aside id="yolo-social-profile-6" class="widget widget-social-profile">
                <ul class="social-profile social-icon-bordered">
                    <li><a title="Facebook" href="#" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
                    <li><a title="Twitter" href="#" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></li>
                    <li><a title="Skype" href="#" target="_blank"><i class="fa fa-skype"></i>Skype</a></li>
                    <li><a title="Youtube" href="#" target="_blank"><i class="fa fa-youtube"></i>Youtube</a></li>
                </ul>
            </aside>
        </div>
    </nav>
</header>
