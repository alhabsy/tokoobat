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
                                <!--                                <span class="input-group-addon" style="border-radius: 0px 20px 20px 0; padding: 0 15px">
                                                                    <a href="#" style="color:white" id="testt">
                                                                        <span class="glyphicon glyphicon-chevron-down"></span>
                                                                    </a>
                                                                </span>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="container cart-block-style">          
                <div class="breadcrumbs">
                    <a href="/"><i class="fa fa-home"></i></a>
                    <a href="#">Shopping Cart</a>
                </div>
                <div class="contentText">
                    <h1>Shopping Cart                                &nbsp;(0.00kg)
                    </h1>
                </div>
                <form>
                    <div class="table-responsive margin-top">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-left">PRODUCT NAME</td>
                                    <td class="text-left">MODEL</td>
                                    <td class="text-left">QUANTITY</td>
                                    <td class="text-right">UNIT PRICE</td>
                                    <td class="text-right">TOTAL</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">                                   
                                        <a href="single-product">
                                            <img title="ana"  src="images/img1.png" style="width: 100px; height: 80px;">
                                        </a>
                                    </td>
                                    <td class="text-left"><a href="#">Anabel</a>
                                        <br>
                                        <small>Select: Blue</small>
                                        <br>
                                        <small>Reward Points: 200</small>
                                    </td>
                                    <td class="text-left"><br>Product 3</td>
                                    <td class="text-left"><br><div style="max-width: 200px;" class="input-group btn-block">
                                            <input type="text" class="form-control input-sm" size="1" value="1">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="submit" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                                <button class="btn btn-danger"  type="button" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                                            </span></div></td>
                                    <td class="text-right"><br>$98.00</td>
                                    <td class="text-right"><br>$98.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
                <h2>What would you like to do next?</h2>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                <div id="accordion" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" href="#collapse-coupon" aria-expanded="true">Use Coupon Code <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div class="panel-collapse collapse in" id="collapse-coupon" style="" aria-expanded="true">
                            <div class="panel-body">
                                <label for="input-coupon" class="col-sm-2 control-label">Enter your coupon Code here</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon Code here" value="" name="coupon">
                                    <span class="input-group-btn">
                                        <input type="button" class="btn btn-primary"  id="button-coupon" value="Apply Coupon">
                                    </span></div>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed" href="#collapse-shipping" aria-expanded="false">Estimate Shipping &amp; Taxes <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse-shipping" style="height: 0px;" aria-expanded="false">
                            <div class="panel-body">
                                <p>Enter your destination to get a shipping estimate.</p>
                                <div class="form-horizontal">
                                    <div class="form-group required">
                                        <label for="input-country" class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="input-country" name="country_id">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="244">India</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">American Samoa</option>
                                                <option value="5">Andorra</option>
                                                <option value="6">Angola</option>
                                                <option value="7">Anguilla</option>
                                                <option value="8">Antarctica</option>
                                                <option value="9">Antigua and Barbuda</option>
                                                <option value="10">Argentina</option>


                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-zone" class="col-sm-2 control-label">Region / State</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="input-zone" name="zone_id"><option value=""> --- Please Select --- </option>
                                                <option value="3513">Aberdeen</option>
                                                <option value="3514">Aberdeenshire</option>
                                                <option value="3515">Anglesey</option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-postcode" class="col-sm-2 control-label">Post Code</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="" name="postcode">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary"  id="button-quote" type="button">Get Quotes</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-voucher">Use Gift Certificate <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse-voucher">
                            <div class="panel-body">
                                <label for="input-voucher" class="col-sm-2 control-label">Enter your gift certificate code here</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="input-voucher" placeholder="Enter your gift certificate code here" value="" name="voucher">
                                    <span class="input-group-btn">
                                        <input type="submit" class="btn btn-primary"  id="button-voucher" value="Apply Gift Certificate">
                                    </span> </div>

                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <table class="table table-bordered">
                            <tbody><tr>
                            <strong style="font-size: 30px;float: right">Pricing Details</strong>
                            <td class="text-right"><strong>Sub-Total:</strong></td>
                            <td class="text-right">$80.00</td>
                            </tr>
                            <tr>
                                <td class="text-right">Coupon Code:</td>
                                <td class="text-right">$0</td>
                            </tr>
                            <tr>
                                <td class="text-right">Gift Voucher:</td>
                                <td class="text-right">$0</td>
                            </tr>
                            <tr>
                                <td class="text-right">Eco Tax (-2.00):</td>
                                <td class="text-right">$2.00</td>
                            </tr>
                            <tr>
                                <td class="text-right">VAT (20%):</td>
                                <td class="text-right">$16.00</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Order Total:</strong></td>
                                <td class="text-right">$98.00</td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="buttons">
                    <div class="pull-left"><a class="btn btn-default" href="/product"><i class="fa fa-caret-right"></i>&nbsp;Continue Shopping</a></div>
                    <div class="pull-right"><a class="btn btn-primary reg_button" href="/checkout">Checkout</a></div>
                </div>
            </div>
@endsection