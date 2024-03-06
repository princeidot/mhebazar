 <section class="section-box mt-90 mb-50">
            <div class="container">
                <ul class="list-col-5">
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{url('css/newassets/imgs/template/delivery.svg')}}" alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Worldwide Delivery</h5>
                                <p class="font-sm color-gray-500">MHEBazar delivers products globally.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{url('css/newassets/imgs/template/support.svg')}}" alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Support 24/7</h5>
                                <p class="font-sm color-gray-500">Reach our experts today!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{url('css/newassets/imgs/template/voucher.svg')}}" alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">First Purchase Discount</h5>
                                <p class="font-sm color-gray-500">Up to 10% discount</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{url('css/newassets/imgs/template/return.svg')}}" alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Easy Returns</h5>
                                <p class="font-sm color-gray-500">Read our return policy</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{url('css/newassets/imgs/template/secure.svg')}}" alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Secure payment</h5>
                                <p class="font-sm color-gray-500">100% Protected</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="section-box box-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <h3 class="color-white" style="font-size:30px">Subscribe &amp; Get <span class="color-warning">10%</span> Discount
                        </h3>
                        <p class="font-lg color-white">Get E-mail updates about our latest shop and <span
                                class="font-lg-bold">special offers.</span></p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <div class="box-form-newsletter mt-15">
                            <form class="form-newsletter" method="post" action="{{route('newsletter')}}">
                                @csrf
                                <input class="input-newsletter font-xs" name="email" value=""
                                    placeholder="Your email Address">
                                <button class="btn btn-brand-2">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>