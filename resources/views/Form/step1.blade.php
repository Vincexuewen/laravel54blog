<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/8/11
 * Time: 11:19
 */
?>
<html>
    <head>
        <title></title>
        @include('Form.css')
    </head>
    <body>
    <div class="container" style="margin-top: 1%;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-body">
                        <!-- start: WIZARD FORM -->
                        <form action="#" role="form" class="smart-wizard" id="form">
                            <div id="wizard" class="swMain">
                                <!-- start: WIZARD SEPS -->
                                <ul>
                                    <li>
                                        <a href="#step-1" class="selected">
                                            <div class="stepNumber">1</div>
                                            <span class="stepDesc"><small> 创建 </small></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <div class="stepNumber">2</div>
                                            <span class="stepDesc"> <small> 填写个人资料 </small></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3">
                                            <div class="stepNumber">3</div>
                                            <span class="stepDesc"> <small> 附加信息 </small> </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-4">
                                            <div class="stepNumber">4</div>
                                            <span class="stepDesc"> <small> 审核&提交 </small> </span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- end: WIZARD SEPS -->
                                <!-- start: WIZARD STEP 1 -->
                                <div id="step-1">
                                    <div class="row">
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="padding-30">
                                                <h2 class="StepTitle">
                                                    开启真实账户
                                                </h2>
                                                <p>
                                                    只需要花费15分钟时间就能完成开户申请
                                                </p>
                                                <p class="text-small">
                                                    Blackwell Global所提供的产品和服务不仅仅只给予公民、法人或业务伙伴以及拥有自己居所或注册办公室的公司。 为遵守国际反洗钱法条例，您须递交/上传以下证明文件：
                                                </p>
                                                <h5><b>1）身份证明</b></h5>
                                                <p>有效期内身份证/护照认证复印件</p>
                                                <ul>
                                                    <li>复印件文件须清晰可读</li>
                                                    <li>复印件须公证人、政府机关或律师认证</li>
                                                    <li>复印件须为彩色影印</li>
                                                    <li>复印件须附有清晰、可识别照片</li>
                                                    <li>复印件有签名栏须与此表格签署栏位签名样式相同</li>
                                                </ul>
                                                <h5><b>2）资产证明</b></h5>
                                                <p>持有中国大陆有效期内银行借记卡/储蓄卡复印件</p>
                                                <ul>
                                                    <li>复印件文件须清晰可读</li>
                                                    <li>复印件须为彩色影印</li>
                                                    <li>复印件须以申请人的名义发出</li>
                                                    <li>复印件签名栏须与此表格签署栏位签名样式相同</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <legend>
                                                    Personal Information
                                                </legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label> First Name <span class="symbol required"></span> </label>
                                                            <input type="text" placeholder="Enter your First Name" class="form-control" name="firstName"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label"> Last Name <span class="symbol required"></span> </label>
                                                            <input type="text" placeholder="Enter your Last Name" class="form-control" name="lastName" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="block"> Gender </label>
                                                            <div class="clip-radio radio-primary">
                                                                <input type="radio" id="wz-female" name="gender" value="female">
                                                                <label for="wz-female"> Female </label>
                                                                <input type="radio" id="wz-male" name="gender" value="male">
                                                                <label for="wz-male"> Male </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label> Choose your country or region </label>
                                                            <select class="form-control" name="country">
                                                                <option value="">&nbsp;</option>
                                                                <option value="AL">Alabama</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="AZ">Arizona</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="CA">California</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="FL">Florida</option>
                                                                <option value="GA">Georgia</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="IL">Illinois</option>
                                                                <option value="IN">Indiana</option>
                                                                <option value="IA">Iowa</option>
                                                                <option value="KS">Kansas</option>
                                                                <option value="KY">Kentucky</option>
                                                                <option value="LA">Louisiana</option>
                                                                <option value="ME">Maine</option>
                                                                <option value="MD">Maryland</option>
                                                                <option value="MA">Massachusetts</option>
                                                                <option value="MI">Michigan</option>
                                                                <option value="MN">Minnesota</option>
                                                                <option value="MS">Mississippi</option>
                                                                <option value="MO">Missouri</option>
                                                                <option value="MT">Montana</option>
                                                                <option value="NE">Nebraska</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="NH">New Hampshire</option>
                                                                <option value="NJ">New Jersey</option>
                                                                <option value="NM">New Mexico</option>
                                                                <option value="NY">New York</option>
                                                                <option value="NC">North Carolina</option>
                                                                <option value="ND">North Dakota</option>
                                                                <option value="OH">Ohio</option>
                                                                <option value="OK">Oklahoma</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="PA">Pennsylvania</option>
                                                                <option value="RI">Rhode Island</option>
                                                                <option value="SC">South Carolina</option>
                                                                <option value="SD">South Dakota</option>
                                                                <option value="TN">Tennessee</option>
                                                                <option value="TX">Texas</option>
                                                                <option value="UT">Utah</option>
                                                                <option value="VT">Vermont</option>
                                                                <option value="VA">Virginia</option>
                                                                <option value="WA">Washington</option>
                                                                <option value="WV">West Virginia</option>
                                                                <option value="WI">Wisconsin</option>
                                                                <option value="WY">Wyoming</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    <a href="javascript:void(0)" data-content="Your personal information is not required for unlawful purposes, but only in order to proceed in this tutorial" data-title="Don't worry!" data-placement="top" data-toggle="popover"> Why do you need my personal information? </a>
                                                </p>
                                            </fieldset>
                                            <fieldset>
                                                <legend>
                                                    Security question
                                                </legend>
                                                <p>
                                                    Enter security questions in case you lose access to your account. <span class="text-small block">Be sure to pick questions that you will remember the answers to.</span>
                                                </p>
                                                <div class="panel-group accordion" id="accordion">
                                                    <div class="panel panel-white">
                                                        <div class="panel-heading">
                                                            <h5 class="panel-title">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                    <i class="icon-arrow"></i> What was the name of your first stuffed animal?
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="stuffedAnimal" placeholder="Enter the the name of your first stuffed animal">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-white">
                                                        <div class="panel-heading">
                                                            <h5 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> <i class="icon-arrow"></i> What is your grandfather's first name? </a></h5>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="grandfatherName" placeholder="Enter your grandfather's first name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-white">
                                                        <div class="panel-heading">
                                                            <h5 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> <i class="icon-arrow"></i> In what city your grandmother live? </a></h5>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="grandmotherCity" placeholder="Enter your grandmother's city">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-o next-step btn-wide pull-right">
                                                    Next <i class="fa fa-arrow-circle-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: WIZARD STEP 1 -->
                                <!-- start: WIZARD STEP 2 -->
                                <div id="step-2" style="display: none">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="padding-30">
                                                <h2 class="StepTitle">Create an account <span class="text-large block">to manage everything you do with Clip-Two</span></h2>
                                                <p>
                                                    You’ll enjoy personal services and great benefits including:
                                                </p>
                                                <p class="text-small">
                                                <ul class="no-margin">
                                                    <li>
                                                        Access to exclusive releases and limited products.
                                                    </li>
                                                    <li>
                                                        ng-Clip services, benefits and promotions.
                                                    </li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <fieldset>
                                                <legend>
                                                    Account Credential
                                                </legend>
                                                <div class="form-group">
                                                    <label class="control-label"> Email <span class="symbol required"></span> </label>
                                                    <input type="email" placeholder="Enter a valid E-mail" class="form-control" name="email">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label"> Password <span class="symbol required"></span> </label>
                                                            <input type="password" placeholder="Enter a Password" class="form-control" name="password" id="password"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label"> Repeat Password <span class="symbol required"></span> </label>
                                                            <input type="password" placeholder="Repeat Password" class="form-control" name="password2"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-o back-step btn-wide pull-left">
                                                    <i class="fa fa-circle-arrow-left"></i> Back
                                                </button>
                                                <button class="btn btn-primary btn-o next-step btn-wide pull-right">
                                                    Next <i class="fa fa-arrow-circle-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: WIZARD STEP 2 -->
                                <!-- start: WIZARD STEP 3 -->
                                <div id="step-3" style="display: none">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="padding-30">
                                                <h2 class="StepTitle">Enter billing details</h2>
                                                <p class="text-large">
                                                    You will need to enter your billing address and select your payment method.
                                                </p>
                                                <p class="text-small">
                                                    You can use most major credit card, as well as PayPal.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <fieldset>
                                                <legend>
                                                    Payment Method
                                                </legend>
                                                <label> Payment type </label>
                                                <div class="form-group">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-primary active">
                                                            <input type="radio" name="paymentMethod" id="option1" autocomplete="off" value="credit card">
                                                            <i class="fa fa-cc-visa" ></i> <i class="fa fa-cc-mastercard" ></i> Credit Card </label>
                                                        <label class="btn btn-primary">
                                                            <input type="radio" name="paymentMethod" id="option2" autocomplete="off" value="paypal">
                                                            <i class="fa fa-cc-paypal" ></i> PayPal </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label> Card Number </label>
                                                    <input type="text" class="form-control" name="cardNumber" placeholder="Enter Your Card Number">
                                                </div>
                                                <label> Expires </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="form-group">
                                                            <select class="cs-select cs-skin-slide">
                                                                <option value="" disabled>Month</option>
                                                                <option value="January">January</option>
                                                                <option value="February">February</option>
                                                                <option value="March">March</option>
                                                                <option value="April">April</option>
                                                                <option value="May">May</option>
                                                                <option value="June">June</option>
                                                                <option value="July">July</option>
                                                                <option value="August">August</option>
                                                                <option value="September">September</option>
                                                                <option value="October">October</option>
                                                                <option value="November">November</option>
                                                                <option value="December">December</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="form-group">
                                                            <select class="cs-select cs-skin-slide">
                                                                <option value="" disabled>Year</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <label> Security code </label>
                                                        <div class="row">
                                                            <div class="col-xs-3">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="securityCode" placeholder="Security code">
                                                                </div>
                                                            </div>
                                                            <span class="help-inline col-xs-4"> <a href="javascript:void(0)" data-content="The security code is a three-digit number on the back of your credit card, immediately following your main card number." data-title="How to find the security code" data-placement="top" data-toggle="popover"> <i class="ti-help-alt text-large text-primary"></i> </a> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-o back-step btn-wide pull-left">
                                                    <i class="fa fa-circle-arrow-left"></i> Back
                                                </button>
                                                <button class="btn btn-primary btn-o next-step btn-wide pull-right">
                                                    Next <i class="fa fa-arrow-circle-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: WIZARD STEP 3 -->
                                <!-- start: WIZARD STEP 4 -->
                                <div id="step-4" style="display: none">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <h1 class=" ti-check block text-primary"></h1>
                                                <h2 class="StepTitle">Congratulations!</h2>
                                                <p class="text-large">
                                                    Your tutorial is complete.
                                                </p>
                                                <p class="text-small">
                                                    Thank you for your registration. Your transaction has been completed, and a receipt for your purchase has been emailed to you.  You may log into your account to view details of this transaction.
                                                </p>
                                                <a class="btn btn-primary btn-o go-first" href="javascript:void(0)"> Back to first step </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: WIZARD STEP 4 -->
                            </div>
                        </form>
                        <!-- end: WIZARD FORM -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    @include('Form.js')
</html>
