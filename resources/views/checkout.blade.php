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
            <div class="container checkout">
                <div class="breadcrumbs">
                    <a href="/"><i class="fa fa-home"></i></a>
                    <a href="/checkout">Checkout</a>
                </div>
                <h2 class="text-center text-uppercase text-bold">checkout</h2>
                <hr class="small-line">
                <div id="accordion" class="panel-group margin-top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-option">Step 1: Checkout Options <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapse-checkout-option" class="panel-collapse collapse" aria-expanded="false">
                            <div class="panel-body"><div class="row">
                                    <div class="col-sm-6">
                                        <h2>New Customer</h2>
                                        <p>Checkout Options:</p>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" checked="checked" value="register" name="account">
                                                Register Account</label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="guest" name="account">
                                                Guest Checkout</label>
                                        </div>
                                        <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                        <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-account" value="Continue">
                                    </div>
                                    <div class="col-sm-6">
                                        <h2>Returning Customer</h2>
                                        <p>I am a returning customer</p>
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">E-Mail</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-password" class="control-label">Password</label>
                                            <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
                                            <br/>
                                            <a href="#">Forgot Password</a></div>
                                        <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-login" value="Login">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-payment-address">Step 2: Account &amp; Billing Details <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div class="panel-collapse collapse in" id="collapse-payment-address" style="height: auto;">
                            <div class="panel-body"><div class="row">
                                    <div class="col-sm-6">
                                        <fieldset id="account">
                                            <legend>Your Personal Details</legend>
                                            <div style="display: none;" class="form-group">
                                                <label class="control-label">Customer Group</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" checked="checked" value="1" name="customer_group_id">
                                                        Default</label>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-firstname" class="control-label">First Name</label>
                                                <input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="" name="firstname">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-lastname" class="control-label">Last Name</label>
                                                <input type="text" class="form-control" id="input-payment-lastname" placeholder="Last Name" value="" name="lastname">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-email" class="control-label">E-Mail</label>
                                                <input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="" name="email">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-telephone" class="control-label">Telephone</label>
                                                <input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="" name="telephone">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-payment-fax" class="control-label">Fax</label>
                                                <input type="text" class="form-control" id="input-payment-fax" placeholder="Fax" value="" name="fax">
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend>Your Password</legend>
                                            <div class="form-group required">
                                                <label for="input-payment-password" class="control-label">Password</label>
                                                <input type="password" class="form-control" id="input-payment-password" placeholder="Password" value="" name="password">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-confirm" class="control-label">Password Confirm</label>
                                                <input type="password" class="form-control" id="input-payment-confirm" placeholder="Password Confirm" value="" name="confirm">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-6">
                                        <fieldset id="address" class="required">
                                            <legend>Your Address</legend>
                                            <div class="form-group">
                                                <label for="input-payment-company" class="control-label">Company</label>
                                                <input type="text" class="form-control" id="input-payment-company" placeholder="Company" value="" name="company">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-address-1" class="control-label">Address 1</label>
                                                <input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="" name="address_1">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-payment-address-2" class="control-label">Address 2</label>
                                                <input type="text" class="form-control" id="input-payment-address-2" placeholder="Address 2" value="" name="address_2">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-city" class="control-label">City</label>
                                                <input type="text" class="form-control" id="input-payment-city" placeholder="City" value="" name="city">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-postcode" class="control-label">Post Code</label>
                                                <input type="text" class="form-control" id="input-payment-postcode" placeholder="Post Code" value="" name="postcode">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-country" class="control-label">Country</label>
                                                <select class="form-control" id="input-payment-country" name="country_id">
                                                    <option value=""> --- Please Select --- </option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">American Samoa</option>
                                                    <option value="5">Andorra</option>
                                                    <option value="6">Angola</option>
                                                    <option value="7">Anguilla</option>

                                                </select> 
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-zone" class="control-label">Region / State</label>
                                                <select class="form-control" id="input-payment-zone" name="zone_id">
                                                    <option value=""> --- Please Select --- </option><option value="3513">Aberdeen</option>
                                                    <option value="3514">Aberdeenshire</option><option value="3515">Anglesey</option>
                                                    <option value="3516">Angus</option><option value="3517">Argyll and Bute</option>
                                                    <option value="3518">Bedfordshire</option><option value="3519">Berkshire</option>
                                                    <option value="3520">Blaenau Gwent</option>
                                                    <option value="3521">Bridgend</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label for="newsletter">
                                        <input type="checkbox" id="newsletter" value="1" name="newsletter">
                                        I wish to subscribe to the PrintStore online store newsletter.</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked" value="1" name="shipping_address">
                                        My delivery and billing addresses are the same.</label>
                                </div>
                                <div class="buttons clearfix">
                                    <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a> &nbsp;
                                        <input type="checkbox" value="1" name="agree" style="vertical-align: text-bottom">
                                        <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-register" value="Continue">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="true">Step 3: Delivery Details <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body"><form class="form-horizontal">
                                    <div class="form-group required">
                                        <label for="input-shipping-firstname" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-firstname" placeholder="First Name" value="mm" name="firstname">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-shipping-lastname" class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-lastname" placeholder="Last Name" value="mm" name="lastname">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-shipping-company" class="col-sm-2 control-label">Company</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-company" placeholder="Company" value="" name="company">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-shipping-address-1" class="col-sm-2 control-label">Address 1</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-address-1" placeholder="Address 1" value="aaaa" name="address_1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-shipping-address-2" class="col-sm-2 control-label">Address 2</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-address-2" placeholder="Address 2" value="" name="address_2">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-shipping-city" class="col-sm-2 control-label">City</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-city" placeholder="City" value="aaaaa" name="city">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-shipping-postcode" class="col-sm-2 control-label">Post Code</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-postcode" placeholder="Post Code" value="41523" name="postcode">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-shipping-country" class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="input-shipping-country" name="country_id">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="244">Aaland Islands</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">American Samoa</option>
                                                <option value="5">Andorra</option>
                                                <option value="6">Angola</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-shipping-zone" class="col-sm-2 control-label">Region / State</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="input-shipping-zone" name="zone_id">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="3513">Aberdeen</option>
                                                <option value="3514">Aberdeenshire</option>
                                                <option value="3515">Anglesey</option>
                                                <option value="3516">Angus</option>
                                                <option value="3517">Argyll and Bute</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <div class="pull-right">
                                            <input type="button" class="btn btn-primary"  id="button-guest-shipping" value="Continue">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-method">Step 4: Delivery Method <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapse-shipping-method" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body"><p>Please select the preferred shipping method to use on this order.</p>
                                <p><strong>Flat Rate</strong></p>
                                <div class="radio">
                                    <label>
                                        <input type="radio" checked="checked" value="flat.flat" name="shipping_method">
                                        Flat Shipping Rate - $8.00</label>
                                </div>
                                <p><strong>Add Comments About Your Order</strong></p>
                                <p>
                                    <textarea class="form-control" rows="8" name="comment"></textarea>
                                </p>
                                <div class="buttons">
                                    <div class="pull-right">
                                        <input type="button" class="btn btn-primary"  id="button-shipping-method" value="Continue">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-payment-method" aria-expanded="true">Step 5: Payment Method <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapse-payment-method" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body"><p>Please select the preferred payment method to use on this order.</p>
                                <div class="radio">
                                    <label>
                                        <input type="radio" checked="checked" value="cod" name="payment_method">
                                        Cash On Delivery      </label>
                                </div>
                                <p><strong>Add Comments About Your Order</strong></p>
                                <p>
                                    <textarea class="form-control" rows="8" name="comment"></textarea>
                                </p>
                                <div class="buttons">
                                    <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a>        <input type="checkbox" value="1" name="agree">
                                        &nbsp;
                                        <input type="button" class="btn btn-primary"  id="button-payment-method" value="Continue">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">Step 6: Confirm Order <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapse-checkout-confirm" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body"><div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td class="text-left">Product Name</td>
                                                <td class="text-left">Model</td>
                                                <td class="text-right">Quantity</td>
                                                <td class="text-right">Unit Price</td>
                                                <td class="text-right">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left"><a href="#">demo product</a>
                                                </td>
                                                <td class="text-left">Product 6</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$242.00</td>
                                                <td class="text-right">$242.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                                <td class="text-right">$200.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4">Coupon Code:</td>
                                                <td class="text-right">$0</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4">Gift Voucher:</td>
                                                <td class="text-right">$0</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4">Flat Shipping Rate:</td>
                                                <td class="text-right">$5.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4">Eco Tax (-2.00):</td>
                                                <td class="text-right">$4.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4">VAT (20%):</td>
                                                <td class="text-right">$41.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4"><strong>Order Total:</strong></td>
                                                <td class="text-right">$250.00</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="buttons">
                                    <div class="pull-right">
                                        <input type="button"  class="btn btn-primary" id="button-confirm" value="Confirm Order">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



</div>
@endsection