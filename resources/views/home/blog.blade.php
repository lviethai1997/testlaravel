@extends('home.layouts.master')
@section('content')
<section id="content-holder" class="container-fluid container">
    <section class="row-fluid">
        <div class="heading-bar">
            <h2>Blog</h2>
            <span class="h-line"></span>
        </div>

        <section class="span9 first">

            <div class="blog-sec-slider">
                <div class="bx-wrapper" style="max-width: 870px;">
                    <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 169px;">
                        <div class="slider5" style="width: 645%; position: relative; left: -538px;">
                            <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 538px;">
                                <a href="#"><img src="assets/home/images/image22.jpg" alt=""></a>
                            </div>
                            <div class="slide" style="float: left; list-style: none; position: relative; width: 538px;">
                                <a href="#"><img src="assets/home/images/image22.jpg" alt=""></a>
                            </div>
                            <div class="slide" style="float: left; list-style: none; position: relative; width: 538px;">
                                <a href="#"><img src="assets/home/images/image36.jpg" alt=""></a>
                            </div>
                            <div class="slide" style="float: left; list-style: none; position: relative; width: 538px;">
                                <a href="#"><img src="assets/home/images/image22.jpg" alt=""></a>
                            </div>
                            <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 538px;">
                                <a href="#"><img src="assets/home/images/image22.jpg" alt=""></a>
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
                            <a href="#" class="grid-view">Grid View</a>
                        </li>
                        <li>
                            <a href="#" class="list-view">List View</a>
                        </li>
                    </ul>
                </div>
            </div>

            <article class="b-post">
                <h3>Demo post title</h3>
                <div class="b-post-img">
                    <img src="assets/home/images/image37.jpg" alt="Blog Post">
                </div>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It was popularised in the release of Letraset sheets containin...</p>
                <div class="b-post-bottom">
                    <ul class="post-nav">
                        <li>Posted by <a href="#">Admin </a></li>
                        <li>on May 07, 2013</li>
                        <li><a href="#">2 Comments</a></li>
                    </ul>
                    <a href="blog-detail.html" class="more-btn">Read More</a>
                </div>
            </article>

            <article class="b-post">
                <h3>Demo post title</h3>
                <div class="b-post-img">
                    <img src="assets/home/images/image23.jpg" alt="Blog Post">
                </div>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It was popularised in the release of Letraset sheets containin...</p>
                <div class="b-post-bottom">
                    <ul class="post-nav">
                        <li>Posted by <a href="#">Admin </a></li>
                        <li>on May 07, 2013</li>
                        <li><a href="#">2 Comments</a></li>
                    </ul>
                    <a href="blog-detail.html" class="more-btn">Read More</a>
                </div>
            </article>

            <article class="b-post">
                <h3>Demo post title</h3>
                <div class="b-post-img">
                    <img src="assets/home/images/image37.jpg" alt="Blog Post">
                </div>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It was popularised in the release of Letraset sheets containin...</p>
                <div class="b-post-bottom">
                    <ul class="post-nav">
                        <li>Posted by <a href="#">Admin </a></li>
                        <li>on May 07, 2013</li>
                        <li><a href="#">2 Comments</a></li>
                    </ul>
                    <a href="blog-detail.html" class="more-btn">Read More</a>
                </div>
            </article>

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
                    <li><a class="grid-view" href="#">Grid View</a></li>
                    <li><a class="list-view" href="#">List View</a></li>
                </ul>
            </div>

        </section>

        <section class="span3">
            <div class="side-holder">
                <article class="banner-ad"><img src="assets/home/images/image20.jpg" alt="Banner Ad"></article>
            </div>

            <div class="side-holder">
                <article class="shop-by-list">
                    <h2>Shop by</h2>
                    <div class="side-inner-holder">
                        <strong class="title">Category</strong>
                        <ul class="side-list">
                            <li><a href="#">Fiction (15)</a></li>
                            <li><a href="#">Healthcare (15)</a></li>
                            <li><a href="#">Technology (15)</a></li>
                            <li><a href="#">Science(15)</a></li>
                        </ul>
                        <strong class="title">Price</strong>
                        <ul class="side-list">
                            <li><a href="#">$0.00 - $10,00.00 (13)</a></li>
                            <li><a href="#">$10,00.00 - $20,00.00 (2)</a></li>
                        </ul>
                        <strong class="title">Author</strong>
                        <ul class="side-list">
                            <li><a href="#">Khalid Hoessini (9)</a></li>
                            <li><a href="#">William Blake (2)</a></li>
                            <li><a href="#">Anna Kathrinena (1)</a></li>
                            <li><a href="#">Gray Alvin (3)</a></li>
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
                                <img src="assets/home/images/image21.jpg">
                                <div class="r-det-holder">
                                    <strong class="r-author"><a href="#">The Kite Runner</a></strong>
                                    <span class="r-by">by Khalid Hoessini</span>
                                    <span class="rating-bar"><img src="assets/home/images/rating-star.png" alt="Rating Star"></span>
                                </div>
                            </div>
                            <span class="r-type">Vivamus bibendum massa</span>
                            <p>“ Suspendisse tortor lacus, suscipit eget pharetra sed, ornare sed elit. Curabitur mollis, justo sit amet fermentum ” </p>
                            <span class="r-author">Review by BookShoppe’</span>
                        </article>
                        <article class="r-post">
                            <div class="r-img-title">
                                <img src="assets/home/images/image21.jpg">
                                <div class="r-det-holder">
                                    <strong class="r-author"><a href="#">The Kite Runner</a></strong>
                                    <span class="r-by">by Khalid Hoessini</span>
                                    <span class="rating-bar"><img src="assets/home/images/rating-star.png" alt="Rating Star"></span>
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