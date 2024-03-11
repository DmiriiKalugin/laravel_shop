<?php
/**  @var $products */
/**  @var $request */
/**  @var $sellers */
/**  @var $foundProductsMinPrice */
/**  @var $foundProductsMaxPrice */
?>
@extends('layouts.default')

@section('content')
    <div class="Middle Middle_top">
        <div class="Middle-top">
            <div class="wrap">
                <div class="Middle-header">
                    <h1 class="Middle-title">Каталог товаров
                    </h1>
                    <ul class="breadcrumbs Middle-breadcrumbs">
                        <li class="breadcrumbs-item"><a href="/">Главная</a>
                        </li>
                        <li class="breadcrumbs-item breadcrumbs-item_current"><span>Каталог</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Section Section_column Section_columnLeft">
            <div class="wrap">
                <div class="Section-column">
                    <div class="Section-columnSection">
                        <header class="Section-header">
                            <strong class="Section-title">Поиск
                            </strong>
                        </header>
                        <div class="Section-columnContent">
                            <form name="find-users" id="find-users" method="get" action="{{url('catalog')}}">
                                @csrf
                                <div class="form-group row">
                                    <div class="">
                                        <label for="price_from">Цена от:</label>
                                        <input type="text" id="price_from" name="filter[price_from_to][]"
                                               class="form-control"
                                               value="{{$request->filter['price_from_to'][0] ?? $foundProductsMinPrice }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="">
                                        <label for="price_to">и до:</label>
                                        <input type="text" id="price_to" name="filter[price_from_to][]"
                                               class="form-control"
                                               value="{{$request->filter['price_from_to'][1] ?? $foundProductsMaxPrice }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title">Название: </label>
                                    <input type="text" id="title" name="filter[title]" class="form-control"
                                           value="{{$request->filter['title'] ?? ''}}">
                                </div>
                                <div class="form-section">
                                    <label for="genre">Продавец:
                                        <select class="form-select" name="filter[seller_id]" id="seller">
                                            <option value="">--Выберите продавца--</option>
                                            @foreach($sellers as $seller)
                                                <option value={{$seller->id}}
                                @if(isset($request->filter['seller_id']) && ($request->filter['seller_id'] == $seller->id))
                                    selected
                                                    @endif
                                                >{{$seller->title}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="form-section col-6">
                                        <label for="products_in_stock">
                                            <input type="checkbox" name="filter[products_in_stock]" value="1"
                                                   id="products_in_stock"
                                                   @if($request->filter['products_in_stock'] ?? 0)
                                                       checked
                                                @endif
                                            ><span class="toggle-box"></span>
                                            <span class="toggle-text"> Только товары в наличии. </span>
                                        </label>
                                    </div>
                                    <div class="form-section col-6">
                                        <label for="free_delivery">
                                            <input type="checkbox"
                                                   disabled
                                                {{--                               name="filter[free_delivery]"--}}
                                                {{--                               value="1"--}}
                                                {{--                                @if($request->filter['free_delivery'] ?? 0)--}}
                                                {{--                                   checked--}}
                                                {{--                                @endif--}}
                                            ><span class="toggle-box"></span>
                                            <span class="toggle-text"> С бесплатной доставкой. </span>
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn_square btn_dark btn_narrow">Найти</button>
                            </form>
                            <br>
                            <a href="/public/catalog">
                                <button class="btn btn_square btn_dark btn_narrow" value="">Очистить фильтр поиска
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="Section-content">
                    <div class="Sort">
                        <strong class="Sort-title">Сортировка:</strong>
                        <div class="Sort-variants row">
                            <div class="col-sm-6 col-md-3">
                                <b>По цене</b>
                                <a class="Sort-sortBy Sort-sortBy_dec" href="/public/catalog?sort=price"></a>
                                <a class="Sort-sortBy Sort-sortBy_inc" href="/public/catalog?sort=-price"></a>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <b>По новизне</b>
                                <a class="Sort-sortBy Sort-sortBy_dec" href="/public/catalog?sort=updated_at"></a>
                                <a class="Sort-sortBy Sort-sortBy_inc" href="/public/catalog?sort=-updated_at"></a>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <b>По популярности</b>
                                <a class="Sort-sortBy Sort-sortBy_dec" href="/public/catalog?"></a>
                                <a class="Sort-sortBy Sort-sortBy_inc" href="/public/catalog?"></a>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <b>По отзывам</b>
                                <a class="Sort-sortBy Sort-sortBy_dec" href="/public/catalog?"></a>
                                <a class="Sort-sortBy Sort-sortBy_inc" href="/public/catalog?"></a>
                            </div>
                        </div>
                    </div>
                    <div class="Cards">
                        @foreach($products as $product)
                            @include('components.products.product-card', ['product' => $product])
                        @endforeach
                    </div>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
