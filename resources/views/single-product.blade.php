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
                    <div class="col-md-9 col-sm-8 col-xs-12" id="content">            
                        <div class="breadcrumbs">
                            <a href="/"><i class="fa fa-home"></i></a>
                            <a href="">Lorem</a>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="thumbnails">
                                    <li><a  href="#" class="thumbnail fix-box"><img class="changeimg" src="images/img21.jpg"></a></li>
                                    <li class="image-additional"><a title="Dianabol"  class="thumbnail"> 
                                            <img class="galleryimg" src="images/img21.jpg"></a></li>
                                    <li class="image-additional"><a title="Proviron"  class="thumbnail"> 
                                            <img class="galleryimg" src="images/img22.jpg"></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group">
                                    <button  title="" class="btn btn-default mr_5"  type="button"><i class="fa fa-heart"></i></button>
                                    <button  title="" class="btn btn-default"  type="button"><i class="fa fa-exchange"></i></button>
                                </div>
                                <h1 style="color: #39baf0">Lorem</h1>
                                <ul class="list-unstyled product-section">
                                    <li><span>Product Code:</span> SAM1</li>
                                    <li><span>Reward Points:</span> 1000</li>
                                    <li><span>Availability:</span> <span class="check-stock">Pre-Order</span></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li>
                                        <h2>€241.99</h2>
                                    </li>
                                    <li>Ex Tax: €199.99</li>
                                </ul>
                                <div id="product">
                                    <div class="form-group">
                                        <label for="input-quantity" class="control-label">Qty</label>
                                        <input type="text" class="form-control" id="input-quantity" size="2" value="1" name="quantity">
                                        <input type="hidden" value="49" name="product_id">
                                        <br>
                                        <a class="btn btn-primary btn-lg btn-block reg_button" href="/cart"><i class="fa fa-shopping-cart"></i> BUY NOW!</a>
                                    </div>
                                </div>
                                <div class="rating">
                                    <p>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <a  href="">0 reviews</a> / <a  href="">Write a review</a></p>
                                    <hr>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="nav nav-tabs">
                                    <li class=""><a data-toggle="tab" href="#tab-description" aria-expanded="false">Description</a></li>
                                    <li class="active"><a data-toggle="tab" href="#tab-review" aria-expanded="true">Reviews (0)</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-description" class="tab-pane">
                                        <div class="row ">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur metus leo, dignissim vitae bibendum et, pretium id nulla. Nulla laoreet dapibus cursus. Sed rhoncus bibendum neque non varius. Sed cursus ex id imperdiet tincidunt. Vestibulum vel lacus vel lectus vulputate condimentum pharetra ac mauris. Vivamus dictum justo in est maximus, a pretium neque sodales.</p>
                                        </div>
                                    </div>
                                    <div id="tab-review" class="tab-pane active">
                                        <form id="form-review" class="form-horizontal">

                                            <h2>Write a review</h2>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label for="input-name" class="control-label">Your Name</label>
                                                    <input type="text" class="form-control" id="input-name" value="" name="name">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label for="input-review" class="control-label">Your Review</label>
                                                    <textarea class="form-control" id="input-review" rows="5" name="text"></textarea>
                                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label">Rating</label>
                                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                    <input type="radio" value="1" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="2" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="3" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="4" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="5" name="rating">
                                                    &nbsp;Good</div>
                                            </div>
                                            <div class="buttons clearfix">
                                                <div class="pull-right">
                                                    <button class="btn btn-primary reg_button"  id="button-review" type="button">
                                                        <i class="fa fa-caret-right"></i>&nbsp;
                                                        Continue                                       
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rel-product">
                            <div class="infoBoxHeading">
                                <a>Related Product</a>
                            </div>
                            <div class="row product-layout_width">
                                <div class="product-layout col-md-4  col-sm-6 col-xs-12">
                                    <div class="product-thumb-height">
                                        <div class="product-thumb transition">
                                            <ul>

                                                <li class="li_product_image">
                                                    <div class="image">
                                                        <a href="/single-product">
                                                            <img src="images/img16.jpg"  class="img-responsive" width="200" height="200" />		
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

                                <div class="product-layout col-md-4  col-sm-6 col-xs-12">
                                    <div class="product-thumb-height">
                                        <div class="product-thumb transition">
                                            <ul>

                                                <li class="li_product_image">
                                                    <div class="image">
                                                        <a href="/single-product">
                                                            <img src="images/d15.jpg"  class="img-responsive" width="200" height="200" />		
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

                                <div class="product-layout col-md-4  col-sm-6 col-xs-12">
                                    <div class="product-thumb-height">
                                        <div class="product-thumb transition">
                                            <ul>

                                                <li class="li_product_image">
                                                    <div class="image">
                                                        <a href="/single-product">
                                                            <img src="images/d1.jpg"  class="img-responsive" width="200" height="200" />		
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

                            </div>
                        </div>
                    </div>

                </div>
            </div>
@endsection