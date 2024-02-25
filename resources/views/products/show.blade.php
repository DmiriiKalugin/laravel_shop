@extends('layouts.default')
@section('head')
    @vite('resources/css/rating.css')
@endsectionq
@section('content')

<div class="Middle Middle_top">
    <div class="Middle-top">
        <div class="wrap">
            <div class="Middle-header">
                <h1 class="Middle-title">Megano Product
                </h1>
                <ul class="breadcrumbs Middle-breadcrumbs">
                    <li class="breadcrumbs-item"><a href="index.html">home</a>
                    </li>
                    <li class="breadcrumbs-item breadcrumbs-item_current"><span>Product</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="Section">
        <div class="wrap">
            <div class="Product">
                <div class="ProductCard">
                    <div class="ProductCard-look">
                        <div class="ProductCard-photo">
                            <div class="ProductCard-sale">-15%
                            </div><img src="/assets/img/content/home/bigGoods.png" alt="bigGoods.png" />
                        </div>
                        <div class="ProductCard-picts"><a class="ProductCard-pict ProductCard-pict_ACTIVE"
                                href="/assets/img/content/home/bigGoods.png"><img
                                    src="/assets/img/content/home/bigGoods.png" alt="bigGoods.png" /></a><a
                                class="ProductCard-pict" href="/assets/img/content/home/slider.png"><img
                                    src="/assets/img/content/home/slider.png" alt="slider.png" /></a><a
                                class="ProductCard-pict" href="/assets/img/content/home/videoca.png"><img
                                    src="/assets/img/content/home/videoca.png" alt="videoca.png" /></a>
                        </div>
                    </div>
                    <div class="ProductCard-desc">
                        <div class="ProductCard-header">
                            <h2 class="ProductCard-title">Barand New Phone Smart Busines
                            </h2>
                            <div class="ProductCard-info">
                                <div class="ProductCard-cost">
                                    <div class="ProductCard-price">$55.00
                                    </div>
                                    <div class="ProductCard-priceOld">$115.00
                                    </div>
                                </div>
                                <div class="ProductCard-compare"><a class="btn btn_default" href="#"><img
                                            class="btn-icon" src="/assets/img/icons/card/change.svg"
                                            alt="change.svg" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ProductCard-text">
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod
                                </li>
                                <li>tempor incididunt ut labore et dolore magna aliqua. Lorem
                                </li>
                                <li>ipsum dolor sit ameabore et dolore magna aliqua. Lorem ipsum
                                </li>
                            </ul>
                        </div>
                        <div class="ProductCard-cart">
                            <div class="ProductCard-cartElement ProductCard-cartElement_amount">
                                <div class="Amount Amount_product">
                                    <button class="Amount-remove" type="button">
                                    </button>
                                    <input class="Amount-input form-input" name="amount" type="text" value="1" />
                                    <button class="Amount-add" type="button">
                                    </button>
                                </div>
                            </div>
                            <div class="ProductCard-cartElement"><a class="btn btn_primary" href="#"><img
                                        class="btn-icon" src="/assets/img/icons/card/cart_white.svg"
                                        alt="cart_white.svg" /><span class="btn-content">Add To
                                        Cart</span></a>
                            </div>
                        </div>
                        <div class="ProductCard-footer">
                            <div class="ProductCard-tags">
                                <strong class="ProductCard-tagsTitle">Tags:
                                </strong><a href="#">Accesories</a>,<a href="#">Creative</a>,<a href="#">Design</a>,<a
                                    href="#">Gaming</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Tabs Tabs_default">
                    <div class="Tabs-links">
                        <a class="Tabs-link_ACTIVE Tabs-link" href="#description">
                            <span>Описание</span></a>
                        <a class="Tabs-link" href="#sellers">
                            <span>Продавцы</span></a>
                        <a class="Tabs-link" href="#addit">
                            <span>Дополнительная информация</span></a>
                        <a class="Tabs-link" href="#reviews">
                            <span>Отзывы ({{ $reviewCount }})</span>
                        </a>
                    </div>
                    <div class="Tabs-wrap">
                        <div class="Tabs-block" id="description">
                            <h2>Megano Store Hystory
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer&#32;
                                <strong>adipiscing</strong>
                                &#32;elit doli. Aenean commodo ligula eget dolor. Aenean massa.&#32;
                                <a href="#">Cumtipsu</a>
                                &#32;sociis natoque penatibus et magnis dis parturient montesti, nascetur
                                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eutu, pretiumem.
                            </p>
                            <img class="pict pict_right" src="/assets/img/content/home/bigGoods.png" alt="bigGoods.png" />
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetuer
                                </li>
                                <li>adipiscing elit doli.&#32;<em>Aenean</em>&#32;commodo ligula
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
                            <div class="clearfix">
                            </div>
                            <div class="table">
                                <table>
                                    <tr>
                                        <th>Характеристика
                                        </th>
                                        <th>Значение
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>ываыв
                                        </td>
                                        <td>llslssl
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="Tabs-block" id="sellers">
                            <div class="Categories Categories_product">
                                <div class="Categories-row">
                                    <div class="Categories-block Categories-block_info">
                                        <div class="Categories-info">
                                            <strong>Очень дешево
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="Categories-splitProps">
                                    </div>
                                    <div class="Categories-block Categories-price">
                                        <strong>€&#32;40.58
                                        </strong>
                                    </div>
                                    <div class="Categories-block Categories-button"><a class="btn btn_primary"
                                            href="#"><img class="btn-icon" src="/assets/img/icons/card/cart_white.svg"
                                                alt="cart_white.svg" /><span class="btn-content">Купить</span></a>
                                    </div>
                                </div>
                                <div class="Categories-row">
                                    <div class="Categories-block Categories-block_info">
                                        <div class="Categories-info">
                                            <strong>pleer.ru
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="Categories-splitProps">
                                    </div>
                                    <div class="Categories-block Categories-price">
                                        <strong>€&#32;69.04
                                        </strong>
                                    </div>
                                    <div class="Categories-block Categories-button"><a class="btn btn_primary"
                                            href="#"><img class="btn-icon" src="/assets/img/icons/card/cart_white.svg"
                                                alt="cart_white.svg" /><span class="btn-content">Купить</span></a>
                                    </div>
                                </div>
                                <div class="Categories-row">
                                    <div class="Categories-block Categories-block_info">
                                        <div class="Categories-info">
                                            <strong>citilink.ru
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="Categories-splitProps">
                                    </div>
                                    <div class="Categories-block Categories-price">
                                        <strong>€&#32;112.69
                                        </strong>
                                    </div>
                                    <div class="Categories-block Categories-button"><a class="btn btn_primary"
                                            href="#"><img class="btn-icon" src="/assets/img/icons/card/cart_white.svg"
                                                alt="cart_white.svg" /><span class="btn-content">Купить</span></a>
                                    </div>
                                </div>
                                <div class="Categories-row">
                                    <div class="Categories-block Categories-block_info">
                                        <div class="Categories-info">
                                            <strong>М.Видео
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="Categories-splitProps">
                                    </div>
                                    <div class="Categories-block Categories-price">
                                        <strong>€&#32;197.32
                                        </strong>
                                    </div>
                                    <div class="Categories-block Categories-button"><a class="btn btn_primary"
                                            href="#"><img class="btn-icon" src="/assets/img/icons/card/cart_white.svg"
                                                alt="cart_white.svg" /><span class="btn-content">Купить</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Tabs-block" id="addit">
                            <div class="Product-props">
                                <div class="Product-prop">
                                    <strong>Lorem
                                    </strong><span> Pfizer</span>
                                </div>
                                <div class="Product-prop">
                                    <strong>ipsum
                                    </strong><span> Lorem ipsum dolor sit</span>
                                </div>
                                <div class="Product-prop">
                                    <strong>dolor sit
                                    </strong><span> 5 ans</span>
                                </div>
                                <div class="Product-prop">
                                    <strong>psum dolo
                                    </strong><span> 2–3 jours</span>
                                </div>
                            </div>
                        </div>
                        @include('components.reviews.product-review-block')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
