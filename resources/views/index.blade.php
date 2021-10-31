@extends('layouts.view')
@section('content')
        <div class="container" >
            <div class="row" id="search_manu" style="margin-top: 10px">
                <div class="col-md-6 col-xs-12">
                    <form  name="quick_find">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" placeholder="Enter search keywords here" class="form-control input-lg" id="inputGroup"/>
                                <span class="input-group-addon">
                                    <a href="#" style="color:white">Search</a>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-xs-12">

                    <form  name="manufacturers"> 
                        <div class="form-group">
                            <div class="">
                                <select  style="font-size: 14px; background: #EAEAEA; border: none;" name="manufacturers_id"  size="1" class="input-lg form-control arrow-hide date_class">
                                    <option value="" selected="selected">Please Select manufacturers</option>
                                    <option>lorem</option>
                                    <option>lorem</option>
                                    <option>lorem</option>
                                    <option>lorem</option>
                                </select>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="site_content">
            <div class="container">
                <div class="row">
                    @include('layouts.partials.category_sidebar')
                    <div class="col-md-9 col-sm-8 col-xs-12 right_sidebar1">
                        <div id="right_part">
                            <div class="contentContainer">
                                <div class="contentText">
                                    <div class="breadcrumbs">
                                        <a href="/" class="headerNavigation"><i class="fa fa-home"></i></a>			
                                    </div>
                                </div>

                                <!----slidder start-!-->
                                <div class="contentText">
                                    <div class="infoBoxHeading">Today Bestsellers</div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12"  >
                                            <!--                                        <div class="bg_best">-->
                                            <div class="bg_best">
                                                <div class="owl-carousel">
                                                    <div class="item">
                                                        <span>
                                                            <a href="/single-product">
                                                                <img class="carasoul_image" src="images/d1.jpg">
                                                            </a></span>
                                                        <a class="btn btn-default"  href="/cart" role="button" >
                                                            Buy Now!
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                            <a href="/single-product">
                                                                <img class="carasoul_image" src="images/img4.jpg">
                                                            </a>
                                                        </span>
                                                        <a class="btn btn-default"  href="/cart" role="button" >
                                                            Buy Now!
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                            <a href="/single-product">
                                                                <img class="carasoul_image" src="images/img6.jpg">
                                                            </a></span>
                                                        <a class="btn btn-default"  href="/cart" role="button" >
                                                            Buy Now!
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                            <a href="/single-product">
                                                                <img class="carasoul_image" src="images/img13.jpg">
                                                            </a></span>
                                                        <a class="btn btn-default"  href="/cart" role="button" >
                                                            Buy Now!
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                            <a href="/single-product">
                                                                <img class="carasoul_image" src="images/img14.jpg">
                                                            </a></span>
                                                        <a class="btn btn-default"  href="/cart" role="button" >
                                                            Buy Now!
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                            <a href="/single-product">
                                                                <img class="carasoul_image" src="images/img16.jpg">
                                                            </a></span>
                                                        <a class="btn btn-default"  href="/cart" role="button" >
                                                            Buy Now!
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                            <a href="/single-product">
                                                                <img class="carasoul_image" src="images/img15.jpg">
                                                            </a></span>
                                                        <a class="btn btn-default"  href="/cart" role="button" >
                                                            Buy Now!
                                                        </a>
                                                    </div>
                                                    <!--                                                    <div class="item">
                                                                                                            <span>
                                                                                                                <a href="/single-product">
                                                                                                                    <img class="carasoul_image" src="images/d25.jpg">
                                                                                                                </a></span>
                                                                                                            <a class="btn btn-default"  href="/cart" role="button" >
                                                                                                                Buy Now!
                                                                                                            </a>
                                                                                                        </div>-->
                                                    <div class="item">
                                                        <span>
                                                            <a href="/single-product">
                                                                <img class="carasoul_image" src="images/img1.png">
                                                            </a></span>
                                                        <a class="btn btn-default"  href="/cart" role="button" >
                                                            Buy Now!
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                            <a href="/single-product">
                                                                <img class="carasoul_image" src="images/d2.jpg">
                                                            </a></span>
                                                        <a class="btn btn-default"  href="/cart" role="button" >
                                                            Buy Now!
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                            <a href="/single-product">
                                                                <img class="carasoul_image" src="images/d7.jpg">
                                                            </a></span>
                                                        <a class="btn btn-default"  href="/cart" role="button" >
                                                            Buy Now!
                                                        </a>
                                                    </div>
                                                </div>

                                                <script>
                                                    $(document).ready(function () {
                                                        $('.owl-carousel').owlCarousel({
                                                            loop: true,
                                                            margin: 10,
                                                            responsiveClass: true,
                                                            responsive: {
                                                                0: {
                                                                    items: 2,
                                                                    nav: true
                                                                },
                                                                600: {
                                                                    items: 3,
                                                                    nav: false
                                                                },
                                                                1000: {
                                                                    items: 5,
                                                                    nav: true,
                                                                    loop: false,
                                                                    margin: 20
                                                                }

                                                            }
                                                        })
                                                    })
                                                </script>
                                            </div>
                                            <!--                                    </div>-->
                                        </div>
                                    </div>
                                </div>
                                <!----slidder End-!-->
                                <!----content_1--!-->
                                <div class="contentText Static">
                                    <h1>What is Lorem Ipsum?</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                                    <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                <!----content_1 End--!-->


                                <!----content_2 For New Products--!-->
                                <div class="contentText">
                                    <h1>New Products For March</h1>
                                    <div class="row margin-top product-layout_width">
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Lorem Ipsum</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/d1.jpg" class="img-responsive" width="200" height="200" />
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€134.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Lorem second</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/img4.jpg"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€21.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Lorem BIG-PACK</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/img6.jpg"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€159.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Officiis phaedrum</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/img13.jpg"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€26.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Et vel atqui putent, eum ad quidam adipiscing inciderint
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Munere vulputate</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/img14.jpg"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€120.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    At affert congue mea, ea est tritani tacimates petentium
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Lorem ipsum dolor</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/img15.jpg"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€199.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Professional context</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/img16.jpg"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€126.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    In a professional context it often happens that private
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Dolorem ipsum</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/img17.jpg"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€119.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Cicero famously</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/img1.png"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€171.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!----content_2 End--!-->

                                <!----content_3--!-->
                                <div class="contentText">
                                    <h1>Specials</h1>
                                    <div class="row margin-top product-layout_width">
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Aroma Therapy</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/d17.jpg" class="img-responsive" width="200" height="200"/>
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€134.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Herbal</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/d21.jpg"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€21.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Pills Drug</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/d23.jpg"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€235.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Capsule Pill</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/d2.jpg"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€137.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">Medication Cure</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/d7.jpg"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€212.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="/single-product">China GuangDong Seeds</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="/single-product">
                                                                    <img src="images/d15.jpg"  class="img-responsive" width="200" height="200" />		
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€129.00</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="/cart" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!----content_3 End--!-->
                            </div>

                        </div>

                    </div>

                </div>
            </div>

@endsection