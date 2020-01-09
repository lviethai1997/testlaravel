@extends('home.layouts.master')

@section('content')
<section id="content-holder" class="container-fluid container">
    <section class="row-fluid">
        <div class="heading-bar">
            <h2>Book Detail</h2>
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
                                <a href="#"><img src="images/image36.jpg" alt=""></a>
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

            <section class="b-detail-holder">
                <article class="title-holder">
                    <div class="span6">
                        <h4><strong>The Kite Runner</strong> by Khalid Hosseini</h4>
                    </div>
                    <div class="span6 book-d-nav">
                        <ul>
                            <li><a href="#">2 Reviews</a></li>
                            <li><i class="icon-envelope"></i><a href="#"> Email to a Friend</a></li>
                        </ul>
                    </div>
                </article>
                <div class="book-i-caption">

                    <div class="span6 b-img-holder">
                        <span class="zoom" id="ex1" style="position: relative; overflow: hidden;"> <img src="images/image26.jpg" height="219" width="300" id="jack" alt=""><img src="images/image26.jpg" class="zoomImg" style="position: absolute; top: -90.3241px; left: -11.2343px; opacity: 0; width: 398px; height: 530px; border: none; max-width: none;"></span>
                    </div>

                    <div class="span6">
                        <strong class="title">Quick Overview</strong>
                        <p>Vestibulum a velit at erat adipiscing volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget neque velit, suscipit volutpat ligula.</p>
                        <p>Quisque diam arcu, dignissim nec molestie sed, pellentesque a augue. Nunc sed felis libero, vitae imperdiet risus in feugiat lectus vitae elit euismod rhoncus. Suspendisse potenti. </p>
                        <p>Availability: <a href="#">In stock</a></p>
                        <div class="comm-nav">
                            <strong class="title2">Quantity</strong>
                            <ul>
                                <li>
                                    <input name="" type="text">
                                </li>
                                <li class="b-price">$68.00</li>
                                <li><a href="cart.html" class="more-btn">+ Add to Cart</a></li>
                            </ul>
                            <a href="#">Add to Wishlist</a>
                        </div>
                    </div>

                </div>

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#pane1" data-toggle="tab">Book Summary</a></li>
                        <li><a href="#pane2" data-toggle="tab">Additional Information</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="pane1" class="tab-pane active">
                            <p>Sed molestie semper ligula vitae pellentesque duis laoreet erat a pretium pulvinar, justo nisi fermentum risus, sed condimentum nisl elit vel risus. Vivamus felis dolor, consectetur vel condimentum sit amet, iaculis in orci. </p>
                            <p>Phasellus sed vehicula justo nunc quis erat vel ante ornare pulvinar cras tristique facilisis tincidunt quisque felis erat iaculis at fringilla vitae rutrum id magna. Nam pharetra scelerisque justo at vehicula aliquam erat volutpat. Quisque vulputate justo eu mattis interdum magna erat porta risus tincidunt </p>
                        </div>
                        <div id="pane2" class="tab-pane">
                            <h4>Pane 2 Content</h4>
                            <p> and so on ...</p>
                        </div>
                    </div>
                </div>

                <section class="related-book">
                    <div class="heading-bar">
                        <h2>Related Books</h2>
                        <span class="h-line"></span>
                    </div>
                    <div class="bx-wrapper" style="max-width: 674px;">
                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 319px;">
                            <div class="slider6" style="width: 860%; position: relative; transition-duration: 0s; transform: translate3d(-844px, 0px, 0px);">
                                <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 18px;">
                                    <a href="book-detail.html"><img src="images/image05.jpg" alt="" class="pro-img"></a>
                                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                    <div class="cart-price">
                                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                                        <span class="price">$129.90</span>
                                    </div>
                                </div>
                                <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 18px;">
                                    <a href="book-detail.html"><img src="images/image06.jpg" alt="" class="pro-img"></a>
                                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                    <div class="cart-price">
                                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                                        <span class="price">$129.90</span>
                                    </div>
                                </div>
                                <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 18px;">
                                    <a href="book-detail.html"><img src="images/image07.jpg" alt="" class="pro-img"></a>
                                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                    <div class="cart-price">
                                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                                        <span class="price">$129.90</span>
                                    </div>
                                </div>
                                <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 18px;">
                                    <a href="book-detail.html"><img src="images/image08.jpg" alt="" class="pro-img"></a>
                                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                    <div class="cart-price">
                                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                                        <span class="price">$129.90</span>
                                    </div>
                                </div>
                                <div class="slide" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 18px;">
                                    <a href="book-detail.html"><img src="images/image05.jpg" alt="" class="pro-img"></a>
                                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                    <div class="cart-price">
                                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                                        <span class="price">$129.90</span>
                                    </div>
                                </div>
                                <div class="slide" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 18px;">
                                    <a href="book-detail.html"><img src="images/image06.jpg" alt="" class="pro-img"></a>
                                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                    <div class="cart-price">
                                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                                        <span class="price">$129.90</span>
                                    </div>
                                </div>
                                <div class="slide" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 18px;">
                                    <a href="book-detail.html"><img src="images/image07.jpg" alt="" class="pro-img"></a>
                                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                    <div class="cart-price">
                                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                                        <span class="price">$129.90</span>
                                    </div>
                                </div>
                                <div class="slide" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 18px;">
                                    <a href="book-detail.html"><img src="images/image08.jpg" alt="" class="pro-img"></a>
                                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                    <div class="cart-price">
                                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                                        <span class="price">$129.90</span>
                                    </div>
                                </div>
                                <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 18px;">
                                    <a href="book-detail.html"><img src="images/image05.jpg" alt="" class="pro-img"></a>
                                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                    <div class="cart-price">
                                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                                        <span class="price">$129.90</span>
                                    </div>
                                </div>
                                <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 18px;">
                                    <a href="book-detail.html"><img src="images/image06.jpg" alt="" class="pro-img"></a>
                                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                    <div class="cart-price">
                                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                                        <span class="price">$129.90</span>
                                    </div>
                                </div>
                                <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 18px;">
                                    <a href="book-detail.html"><img src="images/image07.jpg" alt="" class="pro-img"></a>
                                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                    <div class="cart-price">
                                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                                        <span class="price">$129.90</span>
                                    </div>
                                </div>
                                <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 18px;">
                                    <a href="book-detail.html"><img src="images/image08.jpg" alt="" class="pro-img"></a>
                                    <span class="title"><a href="book-detail.html">A Walk Across The Sun</a></span>
                                    <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                    <div class="cart-price">
                                        <a class="cart-btn2" href="cart.html">Add to Cart</a>
                                        <span class="price">$129.90</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bx-controls bx-has-pager bx-has-controls-direction">
                            <div class="bx-pager bx-default-pager">
                                <div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link">1</a></div>
                                <div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link active">2</a></div>
                            </div>
                            <div class="bx-controls-direction"><a class="bx-prev disabled" href="">Prev</a><a class="bx-next disabled" href="">Next</a></div>
                        </div>
                    </div>
                </section>

                <section class="reviews-section">
                    <figure class="left-sec">
                        <div class="r-title-bar">
                            <strong>Customer Reviews</strong>
                        </div>
                        <ul class="review-list">
                            <li>
                                <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                <em class="">The Kite Runner</em>
                                <p>“ Suspendisse tortor lacus, suscipit eget pharetra sed, ornare sed elit. Curabitur mollis, justo sit amet fermentum ” Review by Bookshoppe’</p>
                            </li>
                            <li>
                                <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"></span>
                                <em class="">The Kite Runner</em>
                                <p>“ Suspendisse tortor lacus, suscipit eget pharetra sed, ornare sed elit. Curabitur mollis, justo sit amet fermentum ” Review by Bookshoppe’</p>
                            </li>
                        </ul>
                        <a href="#" class="grey-btn">Write Your Own Review</a>
                    </figure>
                    <figure class="right-sec">
                        <div class="r-title-bar">
                            <strong>Write Your Own Review</strong>
                        </div>
                        <ul class="review-f-list">
                            <li>
                                <label>Your name *</label>
                                <input name="" type="text">
                            </li>
                            <li>
                                <label>Summary of your review *</label>
                                <input name="" type="text">
                            </li>
                            <li>
                                <label>Your review *</label>
                                <textarea name="" cols="2" rows="20"></textarea>
                            </li>
                            <li>
                                <label>How do you rate this book? *</label>
                                <div class="rating-list">
                                    <div class="rating-box">
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Star 1
                                        </label>
                                    </div>
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Star 2
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Star 3
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Star 4
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Star 5
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="grey-btn left-btn">Write Your Own Review</a>
                    </figure>
                </section>

            </section>

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