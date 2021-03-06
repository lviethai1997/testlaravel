@extends('home.layouts.master')

@section('content')
<section id="content-holder" class="container-fluid container">
    <section class="row-fluid">
        <div class="heading-bar">
            <h2>Grid View</h2>
            <span class="h-line"></span>
        </div>

        <section class="span9 first">

            <div class="blog-sec-slider">
                <div class="bx-wrapper" style="max-width: 870px;">
                    <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 169px;">
                        <div class="slider5" style="width: 645%; position: relative; left: -538px;">
                            <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 538px;">
                                <a href="#"><img src="images/image22.jpg" alt=""></a>
                            </div>
                            <div class="slide" style="float: left; list-style: none; position: relative; width: 538px;">
                                <a href="#"><img src="images/image22.jpg" alt=""></a>
                            </div>
                            <div class="slide" style="float: left; list-style: none; position: relative; width: 538px;">
                                <a href="#"><img src="images/image22.jpg" alt=""></a>
                            </div>
                            <div class="slide" style="float: left; list-style: none; position: relative; width: 538px;">
                                <a href="#"><img src="images/image22.jpg" alt=""></a>
                            </div>
                            <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 538px;">
                                <a href="#"><img src="images/image22.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="bx-controls bx-has-pager bx-has-controls-direction">
                        <div class="bx-pager bx-default-pager">
                            <div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link active">1</a></div>
                            <div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link">2</a></div>
                            <div class="bx-pager-item"><a href="" data-slide-index="2" class="bx-pager-link">3</a></div>
                        </div>
                        <div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div>
                    </div>
                </div>
            </div>

            <div class="product_sort">
                <div class="row-1">
                    <div class="left">
                        <span class="s-title">Sort by</span>
                        <span class="list-nav">
<select name="">
<option>Position</option>
<option>Position 2</option>
<option>Position 3</option>
<option>Position 4</option>
</select>
</span>
                    </div>
                    <div class="right">
                        <span>Show</span>
                        <span>
<select name="">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
</select>
</span>
                        <span>per page</span>
                    </div>
                </div>
                <div class="row-2">
                    <span class="left">Items 1 to 9 of 15 total</span>
                    <ul class="product_view">
                        <li>View as:</li>
                        <li>
                            <a class="grid-view" href="grid-view.html">Grid View</a>
                        </li>
                        <li>
                            <a class="list-view" href="list-view.html">List View</a>
                        </li>
                    </ul>
                </div>
            </div>
            <section class="grid-holder features-books">
                <figure class="span4 slide">
                    <a href="book-detail.html"><img src="images/image25.jpg" alt="" class="pro-img"></a>
                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                    <div class="cart-price">
                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                        <span class="price">$129.90</span>
                    </div>
                </figure>
                <figure class="span4 slide">
                    <a href="book-detail.html"><img src="images/image38.jpg" alt="" class="pro-img"></a>
                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                    <div class="cart-price">
                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                        <span class="price">$129.90</span>
                    </div>
                </figure>
                <figure class="span4 slide">
                    <a href="book-detail.html"><img src="images/image39.jpg" alt="" class="pro-img"></a>
                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                    <div class="cart-price">
                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                        <span class="price">$129.90</span>
                    </div>
                </figure>
                <hr>
                <figure class="span4 slide first">
                    <a href="book-detail.html"><img src="images/image40.jpg" alt="" class="pro-img"></a>
                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                    <div class="cart-price">
                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                        <span class="price">$129.90</span>
                    </div>
                </figure>
                <figure class="span4 slide">
                    <a href="book-detail.html"><img src="images/image41.jpg" alt="" class="pro-img"></a>
                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                    <div class="cart-price">
                        <a class="cart-btn2" href="about-us.html">Add to Cart</a>
                        <span class="price">$129.90</span>
                    </div>
                </figure>
                <figure class="span4 slide">
                    <a href="book-detail.html"><img src="images/image25.jpg" alt="" class="pro-img"></a>
                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                    <div class="cart-price">
                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                        <span class="price">$129.90</span>
                    </div>
                </figure>
                <hr>
                <figure class="span4 slide first">
                    <a href="book-detail.html"><img src="images/image39.jpg" alt="" class="pro-img"></a>
                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                    <div class="cart-price">
                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                        <span class="price">$129.90</span>
                    </div>
                </figure>
                <figure class="span4 slide">
                    <a href="book-detail.html"><img src="images/image42.jpg" alt="" class="pro-img"></a>
                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                    <div class="cart-price">
                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                        <span class="price">$129.90</span>
                    </div>
                </figure>
                <figure class="span4 slide">
                    <a href="book-detail.html"><img src="images/image38.jpg" alt="" class="pro-img"></a>
                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                    <div class="cart-price">
                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                        <span class="price">$129.90</span>
                    </div>
                </figure>
            </section>
            <div class="blog-footer">
                <div class="pagination">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
                <ul class="product_view">
                    <li>View as:</li>
                    <li><a class="grid-view" href="cart.html">Grid View</a></li>
                    <li><a class="list-view" href="list-view.html">List View</a></li>
                </ul>
            </div>

        </section>

        <section class="span3">
            <div class="side-holder">
                <article class="banner-ad"><img src="images/image20.jpg" alt="Banner Ad"></article>
            </div>

            <div class="side-holder">
                <article class="shop-by-list">
                    <h2>Shop by</h2>
                    <div class="side-inner-holder">
                        <strong class="title">Category</strong>
                        <ul class="side-list">
                            <li><a href="grid-view.html">Fiction (15)</a></li>
                            <li><a href="grid-view.html">Healthcare (15)</a></li>
                            <li><a href="grid-view.html">Technology (15)</a></li>
                            <li><a href="grid-view.html">Science(15)</a></li>
                        </ul>
                        <strong class="title">Price</strong>
                        <ul class="side-list">
                            <li><a href="#">$0.00 - $10,00.00 (13)</a></li>
                            <li><a href="#">$10,00.00 - $20,00.00 (2)</a></li>
                        </ul>
                        <strong class="title">Author</strong>
                        <ul class="side-list">
                            <li><a href="book-detail.html">Khalid Hoessini (9)</a></li>
                            <li><a href="book-detail.html">William Blake (2)</a></li>
                            <li><a href="book-detail.html">Anna Kathrinena (1)</a></li>
                            <li><a href="book-detail.html">Gray Alvin (3)</a></li>
                        </ul>
                    </div>
                </article>
            </div>

            <div class="side-holder">
                <article class="l-reviews">
                    <h2>Latest Reviews</h2>
                    <div class="side-inner-holder">
                        <article class="r-post">
                            <div class="r-img-title">
                                <img src="images/image21.jpg">
                                <div class="r-det-holder">
                                    <strong class="r-author"><a href="book-detail.html">The Kite Runner</a></strong>
                                    <span class="r-by">by Khalid Hoessini</span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                </div>
                            </div>
                            <span class="r-type">Vivamus bibendum massa</span>
                            <p>“ Suspendisse tortor lacus, suscipit eget pharetra sed, ornare sed elit. Curabitur mollis, justo sit amet fermentum ” </p>
                            <span class="r-author">Review by BookShoppe’</span>
                        </article>
                        <article class="r-post">
                            <div class="r-img-title">
                                <img src="images/image21.jpg">
                                <div class="r-det-holder">
                                    <strong class="r-author"><a href="book-detail.html">The Kite Runner</a></strong>
                                    <span class="r-by">by Khalid Hoessini</span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                </div>
                            </div>
                            <span class="r-type">Vivamus bibendum massa</span>
                            <p>“ Suspendisse tortor lacus, suscipit eget pharetra sed, ornare sed elit. Curabitur mollis, justo sit amet fermentum ” </p>
                            <span class="r-author">Review by BookShoppe’</span>
                        </article>
                    </div>
                </article>
            </div>

            <div class="side-holder">
                <article class="price-range">
                    <h2>Price Range</h2>
                    <div class="side-inner-holder">
                        <p>Select the price range for better search</p>
                        <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 15%; width: 45%;"></div>
                            <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 15%;"></a>
                            <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 60%;"></a>
                        </div>
                        <p>
                            <input type="text" id="amount" class="r-input"> </p>
                    </div>
                </article>
            </div>

            <div class="side-holder">
                <article class="price-range">
                    <h2>Community Poll</h2>
                    <div class="side-inner-holder">
                        <p>Who is your favourite American author?</p>
                        <label class="radio">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Jane Austin
                        </label>
                        <label class="radio">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> William Blake
                        </label>
                        <label class="radio">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Keith Urban
                        </label>
                        <label class="radio">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Anna Smith
                        </label>
                        <a href="#" class="vote-btn">Vote</a>
                    </div>
                </article>
            </div>

        </section>

    </section>
</section>
@endsection