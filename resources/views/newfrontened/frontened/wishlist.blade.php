<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="" />
    <meta name="description"
        content="" />
   <meta name='robots' content='noindex, nofollow' />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Wishlist</title>
    @include('layouts.headtag')
    <style>
        .hide {
            display: none;
        }
        #blurtext {
    color: transparent;
    text-shadow: 0 0 5px #000;
}

.item-wishlist .wishlist-price {
    width: 23%;
    text-align: center;
}
    </style>
</head>

<body>



    @include('layouts.frontened.header')

    @include('layouts.frontened.sidebar')


    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ url('') }}">Home</a></li>
                        <li><a class="font-xs color-gray-500">Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">
                {{-- Alert Megg --}}
                 @include('newfrontened.temptime.alert')
                {{-- End Alert --}}
                
                <div class="box-wishlist">
                    <div class="head-wishlist">
                        <div class="item-wishlist">
                           
                            <div class="wishlist-product"><span class="font-md-bold color-brand-3">Product</span></div>
                            <div class="wishlist-price"><span class="font-md-bold color-brand-3">Price</span></div>
                            {{-- <div class="wishlist-status"><span class="font-md-bold color-brand-3">Stock status</span>
                            </div> --}}
                            <div class="wishlist-action"><span class="font-md-bold color-brand-3">Action</span></div>
                            <div class="wishlist-remove"><span class="font-md-bold color-brand-3">Remove</span></div>
                        </div>
                    </div>
                    <div class="content-wishlist">
                        @if (count($wishlistItems) > 0)
                          @foreach($wishlistItems as $item)
                          @php
                                        if ($item->product->category->id == 9) {
                                            $urlcategory = 'electric-pallet-truck';
                                        } else {
                                            $urlcategory = strtolower(str_replace(' ', '-', $item->product->category->name));
                                        }

                                        if ($item->product->category->id == 1) {
                                            $urltitle = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $item->product->title))) . '/' . $item->product->id;
                                        } else {
                                            $urltitle = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $item->product->title)));
                                        }
                                    @endphp
                          
                            <div class="item-wishlist">
                                
                                <div class="wishlist-product">
                                    <div class="product-wishlist">
                                        <div class="product-image"><a href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}"><img
                                                    src="{{ url('css/asset/image/' . $item->product->img1) }}" alt=""></a></div>
                                        <div class="product-info"><a href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                <h6 class="color-brand-3">{{$item->product->title}}</h6>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="wishlist-price">
                                    @if (!$item->product->price == null)
                                    <h4 class="color-brand-3">Rs. {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $item->product->price) }}</h4>
                                    @else
                                    <h4 class="color-brand-3">Rs. <span id="blurtext">********</span></h4>
                                    @endif
                                </div>
                                {{-- <div class="wishlist-status"><span class="btn btn-gray font-md-bold color-brand-3">In
                                        Stock</span></div> --}}
                                <div class="wishlist-action"><a class="btn btn-cart font-sm-bold"
                                        href="{{ route('cart.add', ['productId' => $item->product->id]) }}">Move to Cart</a></div>
                                <div class="wishlist-remove"><a class="btn btn-delete" href="{{ route('wishlist.remove', ['productId' => $item->product->id]) }}"></a></div>
                            </div>
                              @endforeach
                        @else
                            <p>Your wishlist is empty.</p>
                        @endif
                    </div>
                </div>
                
             
            </div>
        </section>


        @include('layouts.frontened.abovefooter')
    </main>

    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')


</body>


</html>
