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
                        <div class="contentText">
                            <div class="breadcrumbs">
                                <a href="/"><i class="fa fa-home"></i></a>
                                <a href="#">Product</a>
                            </div>
                            <h1>Lorem</h1>
                            <div class="row">
                                <div class="col-sm-2 col-xs-6"><img class="img-thumbnail"  src="images/img15.jpg"></div>
                                <div class="col-sm-10 col-xs-6"><p>
                                        Example of category description text</p>
                                </div>
                            </div>
                            <hr>
                            <h3>Refine Search</h3>
                            <div class="row">
                                <div class="col-sm-3">
                                    <ul>
                                        <li><a href="#">Ab (0)</a></li>
                                        <li><a href="#">AB-one (1)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a id="compare-total" href="#">Product Compare (0)</a></p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="btn-group hidden-xs">
                                        <a class="btn btn-default" id="list-view" href="/product-list"><i class="fa fa-th-list"></i></a>
                                        <a class="btn btn-default" id="grid-view"><i class="fa fa-th"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-2 text-right txt-left">
                                    <label for="input-sort" class="control-label" style="margin-top: 7px">Sort By:</label>
                                </div>
                                <div class="col-md-3 text-right">
                                    <select  class="form-control" id="input-sort">
                                        <option selected="selected">Default</option>
                                        <option>Name (Z - A)</option>
                                    </select>
                                </div>
                                <div class="col-md-1 text-right txt-left">
                                    <label for="input-limit" class="control-label" style="margin-top: 7px">Show:</label>
                                </div>
                                <div class="col-md-2 text-right">
                                    <select  class="form-control" id="input-limit">
                                        <option selected="selected">15</option>
                                        <option>25</option>
                                        <option>50</option>
                                        <option>75</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row margin-top product-layout_width">
                                <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image"><a href="/single-product"><img class="img-responsive"  src="images/img16.jpg" width="200" height="200"></a></div>
                                        <div>
                                            <div class="caption">
                                                <h4 class="product_title"><a href="/single-product">Lorem small</a></h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p>
                                                <p class="price">
                                                    <span class="new_price">€110.00</span> 
                                                    <span class="old_price">€122.00</span>
                                                    <span class="price-tax">Ex Tax: €90.00</span>
                                                </p>
                                            </div>
                                            <!--<div class="button-group">!-->
                                            <a class="btn book-btn btn-default reg_button" href="/cart">BUY NOW!</a>
                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image"><a href="/single-product"><img class="img-responsive"  src="images/img17.jpg" width="200" height="200" ></a></div>
                                        <div>
                                            <div class="caption">
                                                <h4 class="product_title"><a href="/single-product">Simphny</a></h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p>
                                                <p class="price">
                                                    <span class="new_price">€81.00</span> 

                                                    <span class="price-tax">Ex Tax: €90.00</span>
                                                </p>
                                            </div>
                                            <!--<div class="button-group">!-->
                                            <a class="btn book-btn btn-default reg_button" href="/cart">BUY NOW!</a>
                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image"><a href="/single-product"><img class="img-responsive"  src="images/img4.jpg" width="200" height="200" ></a></div>
                                        <div>
                                            <div class="caption">
                                                <h4 class="product_title"><a href="/single-product">Lorem block</a></h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p>
                                                <p class="price">
                                                    <span class="new_price">€81.00</span> 

                                                    <span class="price-tax">Ex Tax: €90.00</span>
                                                </p>
                                            </div>
                                            <!--<div class="button-group">!-->
                                            <a class="btn book-btn btn-default reg_button" href="/cart">BUY NOW!</a>
                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>

                                <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image"><a href="/single-product"><img class="img-responsive"  src="images/d21.jpg" width="200" height="200" ></a></div>
                                        <div>
                                            <div class="caption">
                                                <h4 class="product_title"><a href="/single-product">Officiis phaedrum</a></h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.... </p>
                                                <p class="price">
                                                    <span class="new_price">€26.00</span> 
                                                    <span class="old_price">€34.00</span>
                                                    <span class="price-tax">Ex Tax: €21.00</span>
                                                </p>
                                            </div>
                                            <!--<div class="button-group">!-->
                                            <a class="btn book-btn btn-default reg_button" href="/cart">BUY NOW!</a>
                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image"><a href="/single-product"><img class="img-responsive"  src="images/d23.jpg" width="200" height="200"></a></div>
                                        <div>
                                            <div class="caption">
                                                <h4 class="product_title"><a href="/single-product">Lorem ipsum dolor</a></h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p>
                                                <p class="price">
                                                    <span class="new_price">€199.00</span> 

                                                    <span class="price-tax">Ex Tax: €180.00</span>
                                                </p>
                                            </div>
                                            <!--<div class="button-group">!-->

                                            <a class="btn book-btn book-btn btn-default reg_button" href="/cart">BUY NOW!</a>

                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image"><a href="/single-product"><img class="img-responsive"  src="images/d15.jpg" width="200" height="200"></a></div>
                                        <div>
                                            <div class="caption">
                                                <h4 class="product_title"><a href="/single-product">Cicero famously</a></h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.... </p>
                                                <p class="price">
                                                    <span class="new_price">€171.00</span> 

                                                    <span class="price-tax">Ex Tax: €162.00</span>
                                                </p>
                                            </div>
                                            <!--<div class="button-group">!-->
                                            <a class="btn book-btn btn-default reg_button" href="/cart">BUY NOW!</a>
                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 text-left"></div>
                                <div class="col-sm-6 text-right">Showing 1 to 12 of 12 (1 Pages)</div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
@endsection