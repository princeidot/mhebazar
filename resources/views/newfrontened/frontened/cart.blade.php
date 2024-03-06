<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
   <meta name='robots' content='noindex, nofollow' />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Cart </title>
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

        .item-wishlist .wishlist-action {
            width: 22%;
            text-align: center;
        }

        .box-quantity .input-quantity .plus-carta {
            position: absolute;
            top: 0px;
            right: 0px;
            height: 36px;
            width: 18px;
            cursor: pointer;
            background: url('css/newassets/imgs/page/product/plus.svg') no-repeat 0px 7px;
        }
        .box-quantity .input-quantity .minus-carta {
            position: absolute;
            top: 0px;
            left: 0px;
            height: 36px;
            width: 18px;
            cursor: pointer;
            background: url('css/newassets/imgs/page/product/minus.svg') no-repeat 0px 7px;
        }
        h4{
            font-size:16px;
        }
        .preloader{
            background-color:#00000069;
        }
    </style>
</head>

<body>

  <div id="loading" style="display:none">
        <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center">
            <div class="preloader-dots"></div>
          </div>
        </div>
      </div>
       
    </div>

    @include('layouts.frontened.header')

    @include('layouts.frontened.sidebar')


    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ url('') }}">Home</a></li>
                        <li><a class="font-xs color-gray-500">Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">
                {{-- Alert Megg --}}
                @include('newfrontened.temptime.alert')
                {{-- End Alert --}}

                <div class="row">
                    <div class="col-lg-9">
                        <div class="box-carts">
                            <div class="head-wishlist">
                                <div class="item-wishlist">

                                    <div class="wishlist-product"><span
                                            class="font-md-bold color-brand-3">Product</span></div>
                                    <div class="wishlist-price"><span class="font-md-bold color-brand-3">Unit
                                            Price</span></div>
                                    <div class="wishlist-status"><span
                                            class="font-md-bold color-brand-3">Quantity</span></div>
                                    <div class="wishlist-action"><span
                                            class="font-md-bold color-brand-3">Subtotal</span></div>
                                    <div class="wishlist-action"><span class="font-md-bold color-brand-3">Action</span></div>        
                                    <div class="wishlist-remove"><span class="font-md-bold color-brand-3">Remove</span>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wishlist mb-20">
                                @if (count($cartItems) > 0)
                                    @foreach ($cartItems as $item)
                                    
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
                                                                src="{{ url('css/asset/image/' . $item->product->img1) }}"
                                                                alt="{{ $item->product->img1 }}"></a>
                                                    </div>
                                                    <div class="product-info"><a href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                            <h6 class="color-brand-3">{{ $item->product->title }}</h6>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wishlist-price">
                                                @if (!$item->product->price == null)
                                                    <h4 class="color-brand-3">Rs.
                                                        {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $item->product->price) }}
                                                    </h4>
                                                @else
                                                    <h4 class="color-brand-3">Rs. <span id="blurtext">********</span>
                                                    </h4>
                                                @endif
                                            </div>
                                            <div class="wishlist-status">

                                                <div class="box-quantity">
                                                    <div class="input-quantity">
                                                        <input class="font-xl color-brand-3" type="text"
                                                            value="{{ $item->quantity }}"
                                                            id="quantity_{{ $item->product->id }}">
                                                        <span class="minus-carta"
                                                            data-productid="{{ $item->product->id }}"></span>
                                                        <span class="plus-carta"
                                                            data-productid="{{ $item->product->id }}"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="wishlist-action">
                                               @if (!$item->product->price == null)
                                                    @php
                                                        $Total = $item->quantity * $item->product->price;
                                                    @endphp
                                                    <h4 class="color-brand-3">
                                                        {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $Total) }}
                                                    </h4>
                                                @else
                                                @endif
                                            </div>
                                            <div class="wishlist-action"><a class="btn btn-cart font-sm-bold"
                                        href="{{ route('wishlist.add', ['productId' => $item->product->id]) }}">Move to Wishlist</a></div>
                                            <div class="wishlist-remove"><a class="btn btn-delete"
                                                    href="{{ route('cart.remove', ['productId' => $item->product->id]) }}"></a>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p>Your wishlist is empty.</p>
                                @endif

                            </div>
                            <div class="row mb-40">
                                <div class="col-lg-6 col-md-6 col-sm-6-col-6"><a
                                        class="btn btn-buy w-auto arrow-back mb-10"
                                        href="{{ url()->previous() }}">Continue
                                        shopping</a></div>
                                <div class="col-lg-6 col-md-6 col-sm-6-col-6 text-md-end"><a
                                        class="btn btn-buy w-auto update-cart mb-10" href="{{ route('cart') }}">Update
                                        cart</a></div>
                            </div>
                            @if (count($cartItems) > 0)
                                <div class="row mb-50">
                                    {{-- <div class="col-lg-6 col-md-6">
                                    <div class="box-cart-left">
                                        <h5 class="font-md-bold mb-10">Calculate Shipping</h5><span
                                            class="font-sm-bold mb-5 d-inline-block color-gray-500">Flat
                                            rate:</span><span
                                            class="font-sm-bold d-inline-block color-brand-3">5%</span>
                                        <div class="form-group">
                                            <select class="form-control select-style1 color-gray-700">
                                                <option value="1">USA</option>
                                                <option value="1">EURO</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-10">
                                                <input class="form-control" placeholder="Stage / Country">
                                            </div>
                                            <div class="col-lg-6 mb-10">
                                                <input class="form-control" placeholder="PostCode / ZIP">
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                    <div class="col-lg-6 col-md-6">
                                        <div class="box-cart-right p-20">
                                            <h5 class="font-md-bold mb-10">Apply Coupon</h5><span
                                                class="font-sm-bold mb-5 d-inline-block color-gray-500">Using A Promo
                                                Code?</span>
                                            <div class="form-group d-flex">
                                                <input class="form-control mr-15" placeholder="Enter Your Coupon">
                                                <button class="btn btn-buy w-auto">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3">
                       
                            <div class="summary-cart">
                                  @if ($cartTotal)
                                <div class="border-bottom mb-10">
                                    <div class="row">
                                        <div class="col-6"><span class="font-md-bold color-gray-500">Subtotal</span>
                                        </div>
                                        
                                        <div class="col-6 text-end">
                                            <h4> {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $cartTotal['totalPrice']) }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom mb-10">
                                    <div class="row">
                                        <div class="col-6"><span class="font-md-bold color-gray-500">Shipping</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <h4> Free</h4>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="mb-10">
                                    <div class="row">
                                        <div class="col-4"><span class="font-md-bold color-gray-500">Total</span>
                                        </div>
                                        <div class="col-8 text-end">
                                            <h4>Rs. {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $cartTotal['totalPrice']) }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-button"><a class="btn btn-buy" href="">Proceed To
                                        CheckOut</a></div> 
                            </div>
                           
                            @else
                            <p>Cart is empty or user not logged in</p>
                        @endif
                      
                    </div>
                </div>


            </div>
        </section>


        @include('layouts.frontened.abovefooter')
    </main>

    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')

     <script>
        $(document).ready(function() {
            // Increment quantity
            $(".plus-carta").on('click', function() {
                let productId = $(this).data("productid");
                let quantityField = $("#quantity_" + productId);
                let currentQuantity = parseInt(quantityField.val());
                let newQuantity = currentQuantity + 1; // Increment by 1

                // Show loading icon
                $('#loading').show();

                let token = $('meta[name="csrf-token"]').attr('content');

                // AJAX request to update the quantity
                $.ajax({
                    url: '/cart/update/' + productId,
                    type: 'POST',
                    data: {
                        _token: token,
                        quantity: newQuantity
                    },
                    success: function(response) {
                        // Handle success response if needed
                        // Hide loading icon
                        $('#loading').hide();
                        // Refresh the page
                        location.reload();
                    },
                    error: function(xhr) {
                        // Handle error response if needed
                        // Hide loading icon
                        $('#loading').hide();
                    }
                });
            });

            // Decrement quantity
            $(".minus-carta").on('click', function() {
                let productId = $(this).data("productid");
                let quantityField = $("#quantity_" + productId);
                let currentQuantity = parseInt(quantityField.val());
                if (currentQuantity > 1) {
                    let newQuantity = currentQuantity - 1; // Decrement by 1

                    // Show loading icon
                    $('#loading').show();

                    let token = $('meta[name="csrf-token"]').attr('content');

                    // AJAX request to update the quantity
                    $.ajax({
                        url: '/cart/update/' + productId,
                        type: 'POST',
                        data: {
                            _token: token,
                            quantity: newQuantity
                        },
                        success: function(response) {
                            // Handle success response if needed
                            // Hide loading icon
                            $('#loading').hide();
                            // Refresh the page
                            location.reload();
                        },
                        error: function(xhr) {
                            // Handle error response if needed
                            // Hide loading icon
                            $('#loading').hide();
                        }
                    });
                }
            });
        });
    </script>
</body>


</html>
