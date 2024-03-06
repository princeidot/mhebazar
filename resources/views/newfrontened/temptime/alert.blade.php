  @if (Session::has('success'))
                    <div class="alert alert-success">
                        <div class="row">
                            <div class="col-md-8 m-auto">
                                {{ Session::get('success') }}
                            </div>
                            @php
                                $compareCount = count(session('compare', []));
                            @endphp
                            @if (($compareCount == 2) || ($compareCount == 3) || ($compareCount == 4))
                                <div class="col-md-4">
                                    <div class="pl-130">
                                        <a class="btn btn-cart" href="{{ route('compare') }}">View Compare Product</a>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-4">
                                    Add One More Product
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        <div class="row">
                            <div class="col-md-8 m-auto">
                                {{ Session::get('error') }}
                            </div>
                            @php
                                $compareCount = count(session('compare', []));
                            @endphp
                            @if (($compareCount == 2) || ($compareCount == 3) || ($compareCount == 4))
                                <div class="col-md-4">
                                    <div class="pl-130">
                                        <a class="btn btn-cart" href="{{ route('compare') }}">View Compare Product</a>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-4">
                                    Add One More Product
                                </div>
                            @endif
                        </div>


                    </div>
                @endif
                  @if (Session::has('wsuccess'))
                    <div class="alert alert-success">
                        <div class="row">
                            <div class="col-md-8 m-auto">
                                {{ Session::get('wsuccess') }}
                            </div>                           
                                <div class="col-md-4">
                                    <div class="pl-130">
                                        <a class="btn btn-cart" href="{{ route('wishlist') }}">View Wishlist</a>
                                    </div>
                                </div>                          
                        </div>
                    </div>
                @endif
                @if (Session::has('werror'))
                    <div class="alert alert-danger">
                        <div class="row">
                            <div class="col-md-8 m-auto">
                                {{ Session::get('werror') }}
                            </div>
                     
                                <div class="col-md-4">
                                    <div class="pl-130">
                                        <a class="btn btn-cart" href="{{ route('wishlist') }}">View Wishlist</a>
                                    </div>
                                </div>
                            
                        </div>


                    </div>
                @endif
                  
                   @if (Session::has('csuccess'))
                    <div class="alert alert-success">
                        <div class="row">
                            <div class="col-md-8 m-auto">
                                {{ Session::get('csuccess') }}
                            </div>                           
                                <div class="col-md-4">
                                    <div class="pl-130">
                                        <a class="btn btn-cart" href="{{ route('cart') }}">View Cart</a>
                                    </div>
                                </div>                          
                        </div>
                    </div>
                @endif
                @if (Session::has('cerror'))
                    <div class="alert alert-danger">
                        <div class="row">
                            <div class="col-md-8 m-auto">
                                {{ Session::get('cerror') }}
                            </div>
                     
                                <div class="col-md-4">
                                    <div class="pl-130">
                                        <a class="btn btn-cart" href="{{ route('cart') }}">View Cart</a>
                                    </div>
                                </div>
                            
                        </div>


                    </div>
                @endif
                 @if (Session::has('email'))
                    <div class="alert alert-success">
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                {{ Session::get('email') }}
                            </div>
                        </div>
                    </div>
                  @endif