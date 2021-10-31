@extends('layouts.view')
@section('content')
        <div class="container">
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
                    @include('layouts.partials.auth_sidebar')
                    
                    <div class="col-sm-9" id="content">            <div class="breadcrumbs">
                            <a href="/"><i class="fa fa-home"></i></a>
                            <a href="#">Register</a>
                        </div>
                        <h1>My Account Information</h1>
                        <p> <small><strong class="define_note"></strong></small>If you already have an account with us, please login at the 
                            <a href="login.html">login page</a>.</p>
                        <form class="form-horizontal">
                            <div class="contentText">  
                                <fieldset id="account">
                                    <h1>Your Personal Details</h1>
                                    <div style="display: none;" class="form-group required">
                                        <label class="col-sm-2 control-label">Customer Group</label>
                                        <div class="col-sm-10">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" checked="checked" value="1" name="customer_group_id">
                                                    Default</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-firstname" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-lastname" class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="" name="lastname">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="" name="telephone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-fax" class="col-sm-2 control-label">Fax</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-fax" placeholder="Fax" value="" name="fax">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="address">
                                    <h1>Your Address</h1>
                                    <div class="form-group">
                                        <label for="input-company" class="col-sm-2 control-label">Company</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-company" placeholder="Company" value="" name="company">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-address-1" class="col-sm-2 control-label">Address 1</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="" name="address_1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-address-2" class="col-sm-2 control-label">Address 2</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-address-2" placeholder="Address 2" value="" name="address_2">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-city" class="col-sm-2 control-label">City</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-city" placeholder="City" value="" name="city">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-postcode" class="col-sm-2 control-label">Post Code</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="" name="postcode">
                                        </div>
                                    </div>
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
                                            <select class="form-control" id="input-zone" name="zone_id">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="3513">Aberdeen</option>
                                                <option value="3514">Aberdeenshire</option>
                                                <option value="3515">Anglesey</option><option value="3516">Angus</option>
                                                <option value="3517">Argyll and Bute</option>
                                                <option value="3518">Bedfordshire</option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <h1>Your Password</h1>
                                    <div class="form-group required">
                                        <label for="input-password" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-confirm" class="col-sm-2 control-label">Password Confirm</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value="" name="confirm">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <h1>Newsletter</h1>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Subscribe</label>
                                        <div class="col-sm-10">
                                            <label class="radio-inline">
                                                <input type="radio" value="1" name="newsletter">
                                                Yes</label>
                                            <label class="radio-inline">
                                                <input type="radio" checked="checked" value="0" name="newsletter">
                                                No</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="buttons">
                                    <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a>                                                        <input type="checkbox" value="1" name="agree">
                                        &nbsp;
                                        <input type="submit" class="btn btn-primary reg_button" value="Continue" >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection