@extends('layouts.default')

@section('content')

    <div class="Middle Middle_top">
        <div class="Middle-top">
            <div class="wrap">
                <div class="Middle-header">
                    <h1 class="Middle-title">About {{ $title }}
                    </h1>
                    <ul class="breadcrumbs Middle-breadcrumbs">
                        <li class="breadcrumbs-item"><a href="index.html">home</a>
                        </li>
                        <li class="breadcrumbs-item breadcrumbs-item_current"><span>About Us</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Section Section_column Section_columnLeft Section_columnWide">
            <div class="wrap">
                <div class="Section-column">
                    <div class="Section-columnSection Section-columnSection_mark">
                        <div class="media media_advantage">
                            <div class="media-image"><img src="assets/img/icons/advantages/shipping.svg" alt="shipping.svg"/>
                            </div>
                            <div class="media-content">
                                <strong class="media-title">Shipping & Returns
                                </strong>
                                <p class="media-text">World wide shipping
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="Section-columnSection Section-columnSection_mark">
                        <div class="media media_advantage">
                            <div class="media-image"><img src="assets/img/icons/advantages/moneyBack.svg" alt="moneyBack.svg"/>
                            </div>
                            <div class="media-content">
                                <strong class="media-title">Money Back
                                </strong>
                                <p class="media-text">Guaranted payments
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="Section-columnSection Section-columnSection_mark">
                        <div class="media media_advantage">
                            <div class="media-image"><img src="assets/img/icons/advantages/support.svg" alt="support.svg"/>
                            </div>
                            <div class="media-content">
                                <strong class="media-title">Support Policy
                                </strong>
                                <p class="media-text">Fast support team
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="Section-columnSection Section-columnSection_mark">
                        <div class="media media_advantage">
                            <div class="media-image"><img src="assets/img/icons/advantages/quality.svg" alt="quality.svg"/>
                            </div>
                            <div class="media-content">
                                <strong class="media-title">Quality Guarantee
                                </strong>
                                <p class="media-text">Best guaranted items
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="Section-columnSection">
                        <header class="Section-header">
                            <strong class="Section-title">Follow Us
                            </strong>
                        </header>
                        <div class="Section-columnContent">
                            <div class="Footer-payments Footer-payments_column">
                                <div><img src="assets/img/icons/socialContent/fb.png" alt="fb.png"/>
                                </div>
                                <div><img src="assets/img/icons/socialContent/tw.png" alt="tw.png"/>
                                </div>
                                <div><img src="assets/img/icons/socialContent/gg.png" alt="gg.png"/>
                                </div>
                                <div><img src="assets/img/icons/socialContent/in.png" alt="in.png"/>
                                </div>
                                <div><img src="assets/img/icons/socialContent/pt.png" alt="pt.png"/>
                                </div>
                                <div><img src="assets/img/icons/socialContent/ml.png" alt="ml.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Section-content">
                    <article class="Article">
                        <div class="Article-section">
                            <div class="row row_verticalCenter row_maxHalf">
                                <div class="row-block">
                                    <div class="pict"><img src="assets/img/content/home/bigGoods.png" alt="bigGoods.png"/>
                                    </div>
                                </div>
                                <div class="row-block">
                                    <h2>{{ $title }} Store History
                                    </h2>
                                    <p>{{ $description }}
                                    </p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectetuer
                                        </li>
                                        <li>adipiscing elit doli. Aenean commodo ligula
                                        </li>
                                        <li>eget dolor. Aenean massa. Cumtipsu sociis
                                        </li>
                                        <li>natoque penatibus et magnis dis parturient
                                        </li>
                                        <li>montesti, nascetur ridiculus mus. Donec
                                        </li>
                                        <li>quam felis, ultricies nec, pellentesque eutu
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    @include('components.popular-products-block')
                </div>
            </div>
        </div>
    </div>
@endsection
