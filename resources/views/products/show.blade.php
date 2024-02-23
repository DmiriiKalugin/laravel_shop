@extends('layouts.default')

@section('content')

<div class="Middle Middle_top">
    <div class="Middle-top">
        <div class="wrap">
            <div class="Middle-header">
                 @if(strlen($product->title) <= 40)
                 <h1 class="Middle-title"> {{$product->title}}
                </h1>
                 @else
                 <h1 class="Middle-title"> {{ substr($product->title,0,40)."..." }}
                </h1>
                 @endif
               
                <ul class="breadcrumbs Middle-breadcrumbs">
                    <li class="breadcrumbs-item"><a href="{{route('home')}}">Главая</a>
                    </li>
                    @if(strlen($product->slug) <= 40)
                    <li class="breadcrumbs-item breadcrumbs-item_current"><span>{{$product->slug}}</span>
                    </li>
                    @else
                    <li class="breadcrumbs-item breadcrumbs-item_current"><span>{{substr($product->slug,0,40)."..."}}</span>
                    </li>
                    @endif
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
                            <h2 class="ProductCard-title">{{$product->title}}
                            </h2>
                            <div class="ProductCard-info">
                                <div class="ProductCard-cost">
                                    <div class="ProductCard-price">${{$product->price}}
                                    </div>
                                    <div class="ProductCard-priceOld">${{$product->old_price}}
                                    </div>
                                </div>
                                <div class="ProductCard-compare"><a class="btn btn_default" href="#"><img
                                            class="btn-icon" src="/assets/img/icons/card/change.svg"
                                            alt="change.svg" /></a>
                                </div>
                            </div>
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
                            <div class="ProductCard-cartElement"><a class="btn btn_primary" href="{{route('cart.add', $product)}}"><img
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
                    <div class="Tabs-links"><a class="Tabs-link_ACTIVE Tabs-link"
                            href="#description"><span>Описание</span></a><a class="Tabs-link"
                            href="#sellers"><span>Продавцы</span></a></span></a><a class="Tabs-link" href="#reviews"><span>Reviews
                                (3)</span></a>
                    </div>
                    <div class="Tabs-wrap">
                        <div class="Tabs-block" id="description">
                            <h2>{{$product->title}}
                            </h2>
                            <p>{{$product->description}}
                            </p><img class="pict pict_right" src="/assets/img/content/home/bigGoods.png"
                                alt="bigGoods.png" />
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
                                        <td>Артикул
                                        </td>
                                        <td>{{$product->article}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Лимитированный
                                        </td>
                                        @if($product->is_limited_edition)
                                        <td>да
                                        </td>
                                        @else
                                        <td>нет
                                        </td>
                                        @endif
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
                       
                        <div class="Tabs-block" id="reviews">
                            <header class="Section-header">
                                <h3 class="Section-title">2 Reviews
                                </h3>
                            </header>
                            <div class="Comments">
                                <div class="Comment">
                                    <div class="Comment-column Comment-column_pict">
                                        <div class="Comment-avatar">
                                        </div>
                                    </div>
                                    <div class="Comment-column">
                                        <header class="Comment-header">
                                            <div>
                                                <strong class="Comment-title">Alexandra Brownie
                                                </strong><span class="Comment-date">December
                                                    25&#32;&#32;/&#32;&#32;2017&#32;&#32;/&#32;&#32;22:50</span>
                                            </div>
                                        </header>
                                        <div class="Comment-content">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit doli. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus
                                            et magnis dis
                                            parturient montesti, nascetur ridiculus mus. Donec quam felis, ultricies
                                            nec, pellentesque eutu,
                                            pretiumem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel,
                                            aliquet nec,
                                            vulputate eget, arcu. In enim justotuio, rhoncus ut loret, imperdiet a,
                                            venenatis vitae, justo.
                                            Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                            Vivamus element
                                            semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                            eu, consequat vitae.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <header class="Section-header Section-header_product">
                                <h3 class="Section-title">Add Review
                                </h3>
                            </header>
                            <div class="Tabs-addComment">
                                <form class="form" action="#" method="post">
                                    <div class="form-group">
                                        <textarea class="form-textarea" name="review" id="review"
                                            placeholder="Review"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="row-block">
                                                <input class="form-input" id="name" name="name" type="text"
                                                    placeholder="Name" />
                                            </div>
                                            <div class="row-block">
                                                <input class="form-input" id="email" name="email" type="text"
                                                    placeholder="Email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn_muted" type="submit">Submit Review
                                        </button>
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

@endsection
