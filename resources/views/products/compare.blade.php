@extends('layouts.default')

@section('content')
    <div class="Middle Middle_top">
        <div class="Middle-top">
            <div class="wrap">
                <div class="Middle-header">
                    <h1 class="Middle-title">Сравнение товаров
                    </h1>
                    <ul class="breadcrumbs Middle-breadcrumbs">
                        <li class="breadcrumbs-item"><a href="index.html">home</a>
                        </li>
                        <li class="breadcrumbs-item breadcrumbs-item_current"><span>Сравнение товаров</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Section">
            <div class="wrap">
                <article class="Article">
                    <p>Разнообразный и богатый опыт постоянный количественный рост и сфера нашей активности обеспечивает
                        широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует
                        насущным потребностям. Идейные соображения высшего порядка, а также консультация с широким
                        активом требуют определения и уточнения соответствующий условий активизации.
                    </p>
                </article>
                @foreach($productByCategory as $category_id => $products)
                    <div class="Compare">
                        <div class="Compare-header">
                            <h3>{{ $products->first()->category->name }}</h3>
                        </div>
                        <div class="Compare-row">
                            @foreach($products as $product)
                                <div class="Compare-title Compare-title_blank"></div>
                                <div class="Compare-products">
                                    <div class="Compare-product">
                                        <div class="Compare-nameProduct Compare-nameProduct_main"></div>
                                        <div class="Compare-feature">
                                            <img class="Compare-pict"
                                                 src="{{ asset('assets/img/content/home/card.jpg') }}"
                                                 alt="card.jpg"/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="Compare-row">
                            @foreach($products as $product)
                                <div class="Compare-title Compare-title_blank"></div>
                                <div class="Compare-products">
                                    <div class="Compare-product">
                                        <div class="Compare-nameProduct">{{ $product->title }}</div>
                                        <div class="Compare-feature">
                                            <a class="Compare-btn" href="#">
                                                <img src="{{ asset('assets/img/icons/card/cart.svg') }}"
                                                     alt="cart.svg"/>
                                            </a>
                                            <a class="Compare-btn delete" data-id="{{ $product->id }}" href="#">
                                                <img src="{{ asset('assets/img/icons/card/delete.svg') }}"
                                                     alt="delete.svg"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @foreach($specifications->get($category_id) as $specification)
                            <div class="Compare-row">
                                    <div class="Compare-title">{{ $specification->name }}</div>
                                    @foreach($products as $product)
                                        <div class="Compare-products">
                                            <div class="Compare-product">
                                                <div class="Compare-nameProduct">{{ $product->title }}</div>
                                                <div class="Compare-feature">
                                                    {{
                                                        $specification->products->where('id', $product->id)->first()?->pivot->value
                                                        ? sprintf('%s %s', $specification->products->where('id', $product->id)->first()?->pivot->value, $specification->measure)
                                                        : '-'
                                                    }}
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
