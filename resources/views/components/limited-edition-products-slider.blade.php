
<div class="Slider Slider_carousel">
    <header class="Section-header Section-header_close">
        <h2 class="Section-title">Limited edition
        </h2>
        <div class="Section-control">
            <div class="Slider-navigate">
            </div>
        </div>
    </header>
    <div class="Slider-box Cards">
        <div class="Slider-item">
            <div class="Slider-content">
                @foreach($products as $banner)
                <div class="Card"><a class="Card-picture" href="#"><img
                            src="assets/img/content/home/card.jpg" alt="card.jpg" /></a>
                    <div class="Card-content">
                        <strong class="Card-title"><a href="#">{{$banner->title}}</a>
                        </strong>
                        <div class="Card-description">
                            <div class="Card-cost"><span class="Card-priceOld">$115.00</span><span
                                    class="Card-price">$85.00</span>
                            </div>
                            <div class="Card-category">Games / xbox
                            </div>
                            <div class="Card-hover"><a class="Card-btn" href="#"><img
                                        src="assets/img/icons/card/bookmark.svg"
                                        alt="bookmark.svg" /></a><a class="Card-btn" href="#"><img
                                        src="assets/img/icons/card/cart.svg" alt="cart.svg" /></a><a
                                    class="Card-btn" href="compare.html"><img
                                        src="assets/img/icons/card/change.svg"
                                        alt="change.svg" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="Card-sale">-60%
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
