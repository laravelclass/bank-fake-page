<!DOCTYPE html>
<html>

<!-- Mirrored from sep.shaparak.ir/OnlinePG/SendToken?token=f983b32d36b94eb1901d752053cba569 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Feb 2022 13:35:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <meta name="tnl" content="{{$providerInfo['tunnelUrl']}}">
    <title>درگاه پرداخت - پرداخت الکترونیک سامان</title>


    <script type="text/javascript">

        var areaName = "OnlinePG";
        var userSessionKey = "rAx6MpP02Qg";
        var hostAddress    = "https://sep.shaparak.ir/OnlinePG";
        var serverUrl      = "https://sep.shaparak.ir/OnlinePG";
        var autoHideMessageTimeOut = 1700;

        var otpSettings = {
            maxTriesCount: 5,
            maxTriesMessage: "پیام حداکثر تعداد درخواست رمز یکبار مصرپ",
            otpTimeOut: 120,
            otpTryAgainMessage: "مشتری گرامی، چنانچه قبلا نسبت به پویاسازی رمز دوم خود اقدام نموده و از صحت اطلاعات واردشده اطمینان دارید ولی هنوز رمز دوم پویا را دریافت نکرده اید، مجددا دکمه درخواست رمز پویا رابفشارید .",
            baseUrl: "https://sep.shaparak.ir/OnlinePG",
            otpTryAgainButtonTitle: "دریافت مجدد رمز پویا"
        };

        var giftCardHintMessage = "کاربر گرامی کارت هدیه شما نیاز به دریافت رمز پویا ندارد خواهشمند است از رمز دوم ثابت کارت هدیه خود را استفاده نمایید.";

    </script>

    <style>
        .loading-page {
            position: fixed;
            vertical-align: bottom;
            line-height: 50px;
            background-color: #2980B9;
            width: 100%;
            font-family: Segoe UI;
            z-index: 99999;
            font-weight: bold;
            font-size: 1.4em;
            height: 100%;
            top: 0;
            text-align: center;
            color: #fff;
        }
    </style>
    <link href="Content/Loading.css" rel="stylesheet"/>


    <script src="js/jquery02c7?v=pthow5QvrR1DX1ARmK7MqF7-dlxyxA-8qKHDGgnKuLs1"></script>

</head>
<body>

<div class="loading-page">
    درحال بارگذاری ...
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<div class="blue-header">
    <div class="inner container-fluid">
        <div class="call-center">021-84080</div>
        <div id="changeCultureContainer">



            <form action="" method="post">
                <input type="hidden" name="action" value="changeculture" />
                <input type="hidden" name="culture" value="en" />
                <button type="submit" class="btn btn-default btn-change-culture">
                    <!--<img src="/OnlinePG/Images/en.png" />-->
                    Change language
                </button>
            </form>        </div>
    </div>
</div>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <span class="pull-left">
            <img src="Images/sep-logo.png" class="sep-header-logo" alt="Saman Electronic Payment" />
        </span>
        <div class="pull-right">
            <span class="shaparak-logo">
                <img src="Img/shaparak-logo1.png" class="sep-header-logo" alt="shaparak logo"/>
            </span>
        </div>
        <div class="header-title">
            دروازه پرداخت اینترنتی پرداخت الکترونیک سامان
        </div>
    </div>
</div>

<style>
    .navbar {
        text-align: center;
    }
</style>
<div class="container-fluid body-content">

    <style>
        .panel.col-md-5, .panel.col-md-6 {
            padding: 0;
        }

        .num-pass-input {
            -webkit-text-security: disc;
        }
    </style>


    <div class="modal" id="otpResponseModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">رمز پویا</h4>
                </div>
                <div class="modal-body">
                    <p class="text-justify" style="direction:rtl" id="otpResponseParagraph">

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="closeMessageButton" class="btn btn-success btn-close" data-dismiss="modal">متوجه شدم</button>
                </div>
            </div>
        </div>
    </div>

    <div id="payContainer">
        <div class="row row-mobile-flex">
            <div class="col-xs-12 col-sm-6 col-md-5 col-xs-12 flex-order-2" id="creditCardInfoWrapper">


                <div id="card-info" class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="glyphicon glyphicon-credit-card"></i>
                        اطلاعات کارت
                    </div>


                    <div class="panel-body">
                        <form id="payfrm" action="#" ><input name="__RequestVerificationToken" type="hidden"/>            <input name="action" type="hidden" value="pay" />
                            <input name="culture" type="hidden" value="fa" />
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-offset-3">
                                        <div class="payment-validation-error ">
                                            <div class="validation-summary-valid alert alert-danger" data-valmsg-summary="true"><ul><li style="display:none"></li>
                                                </ul></div>                        </div>
                                    </div>
                                </div>

                                <div id="cardNumberContainer" class="form-group">
                                    <label class="control-label col-md-3" for="CardNumber">شماره کارت</label>
                                    <div class="col-md-9">
                                        <table id="CardNumber" class="ltr text-center sep-pan">
                                            <tr>
                                                <td>

                                                    <input class="hide-pan" data-val="true" data-val-cardnumbervalidations="شماره کارت اشتباه است." data-val-cardnumbervalidations-invalidcardnumber="شماره کارت اشتباه است." data-val-required="شماره کارت الزامی است." id="CardNumber_PanString" name="CardNumber.PanString" type="text" value="" />
                                                    <input autocomplete="off" class="sep-numeric form-control " id="CardNumber_Pan0" maxlength="4" name="CardNumber.Pan0" pattern="\d{5,12}" tabindex="1" type="tel" value="" />
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input autocomplete="off" class="sep-numeric form-control " id="CardNumber_Pan1" maxlength="4" name="CardNumber.Pan1" pattern="\d{5,12}" tabindex="2" type="tel" value="" />
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input autocomplete="off" class="sep-numeric form-control " id="CardNumber_Pan2" maxlength="4" name="CardNumber.Pan2" pattern="\d{5,12}" tabindex="3" type="tel" value="" />
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input autocomplete="off" class="sep-numeric form-control " id="CardNumber_Pan3" maxlength="4" name="CardNumber.Pan3" pattern="\d{5,12}" tabindex="4" type="tel" value="" />

                                                </td>
                                                <td class="hidden">-</td>
                                                <td class="hidden">
                                                    <input autocomplete="off" class="sep-last-pan sep-numeric form-control" disabled="True" id="CardNumber_Pan4" maxlength="3" name="CardNumber.Pan4" pattern="\d{5,12}" type="tel" value="" />
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>




                                <div class="form-group">
                                    <label class="control-label  col-md-3" for="">شماره شناسایی دوم(CVV2)</label>
                                    <div class="col-md-9">
                                        <input id="inputcvv2" autocomplete="off" class="form-control sep-numeric cvv2 sep-secure-number" data-val="true" data-val-length="تعداد کارکترهای فیلد شماره شناسایی دوم(CVV2) باید بین 3 و 4 باشد." data-val-length-max="4" data-val-length-min="3" data-val-regex="فیلد شماره شناسایی دوم(CVV2) فقط مقادیر عددی می پذیرد." data-val-regex-pattern="^\d+$" data-val-required="شماره شناسایی دوم(CVV2) الزامی است." id="Cvv2" maxlength="4" name="Cvv2" pattern="\d{5,12}" tabindex="5" type="tel" value="" />

                                    </div>
                                </div>
                                <div id="expDateContainer" class="form-group">
                                    <label class="control-label col-md-3" for="ExpDate">تاریخ انقضای کارت</label>
                                    <div class="col-md-9">
                                        <div id="exp-date-container" class="exp-date-container">
                                            <div id="enableExpDate" style="display: none;" class="col-xs-12 no-padding">
                                                <div>
                                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <input class="btn btn-default" id="btnChangeExpDate" type="button" tabindex="6" , value="تغییر تاریخ انقضا" />
                                        </span>
                                                        <input id="expireDateMsg" class="form-control" type="text" value="**/**" style="font-size:1.8em;" disabled="disabled" />
                                                    </div>

                                                </div>
                                            </div>
                                            <div id="exp-input-date-container">
                                                <div class="input-group col-xs-5 no-padding exp-date-input">
                                                    <span class="input-group-addon" id="basic-addon1"><label for="Month">ماه</label></span>
                                                    <input id="inputmonth" autocomplete="off" class="sep-numeric month-input form-control" data-val="true" data-val-range="فیلد ماه می بایست عددی بین 1 تا 12 باشد." data-val-range-max="12" data-val-range-min="1" data-val-required="ماه الزامی است."  maxlength="2" name="Month" pattern="\d{5,12}" tabindex="7" type="tel" value="" />
                                                </div>
                                                <div class="col-xs-2 no-padding exp-date-input"></div>
                                                <div class="input-group col-xs-5 no-padding exp-date-input">
                                                    <span class="input-group-addon" id="basic-addon1"><label for="Year">سال</label></span>
                                                    <input id="inputyear" autocomplete="off" class="sep-numeric year-input form-control" data-val="true" data-val-required="سال الزامی است."  maxlength="2" name="Year" pattern="\d{5,12}" tabindex="8" type="tel" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="">کد امنیتی</label>
                                    <div id="captchaContainer" class="col-md-9">
                                        <div class="captcha-container input-group  input-group-lg">
                                <span class="input-group-addon" id="sizing-addon1">
                                    <img id="CaptchaImage" src="img/index.jpg">
                                </span>
                                            <input id="CaptchaInputText"
                                                   autocomplete="off"
                                                   autocorrect="off"
                                                   class="sep-numeric form-control k-textbox"
                                                   data-original-title="فقط عددهای انگلیسی قابل پذیرش است."
                                                   data-placement="top"
                                                   data-toggle="tooltip"
                                                   maxlength="5"
                                                   name="CaptchaInputText"
                                                   next-input="#EmailAddress"
                                                   tabindex="9"
                                                   type="tel"
                                                   value="">
                                            <br>
                                            <span class="input-group-btn">
                                    <span id="CaptchaRefreshButton"
                                          class="btn btn-default captcha-button glyphicon glyphicon-refresh"
                                          type="button">
                                    </span>
                                </span>
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group" id="afterCardNotice" style="display:none">
                                    <label class="control-label col-md-3">&nbsp;</label>
                                    <div class="col-md-9">
                                        <div class="alert alert-info margin-top-remove margin-bottom-remove">
                                            <strong class="text-center message">

                                            </strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="Pin2">رمز دوم</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input id="inputpin" autocomplete="off" class="form-control sep-numeric sep-secure-number" data-val="true" data-val-length="تعداد کارکترهای فیلد رمز دوم باید بین 4 و 12 باشد." data-val-length-max="12" data-val-length-min="4" data-val-regex="فیلد رمز دوم فقط مقادیر عددی می پذیرد." data-val-regex-pattern="^\d+$" data-val-required="رمز دوم الزامی است." id="Pin2" maxlength="12" name="Pin2" pattern="\d{5,12}" placeholder="ورود رمز" tabindex="10" type="tel" value="" />
                                            <span class="input-group-btn">
                                    <button type="button" no-validation="true" id="requestOtpButton" class="btn btn-success">درخواست رمز پویا</button>
                                </span>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="control-label col-md-3" for="Email">آدرس ایمیل(اختیاری)</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input class="form-control ltr" data-val="true" data-val-email="آدرس پست الکترونیک خود راصحیح  وارد نمایید." data-val-length="فیلد آدرس ایمیل(اختیاری) حداکثر 255 کاراکتر ظرفیت دارد." data-val-length-max="255" id="userEmail" maxlength="255" name="Email" tabindex="10" type="email" value="" />
                                            <span class="input-group-addon">
                <input data-val="true" data-val-required="The ذخیره field is required." id="SaveMyEmail" name="SaveMyEmail" type="checkbox" value="true" /><input name="SaveMyEmail" type="hidden" value="false" />
                <label for="SaveMyEmail">ذخیره</label>
            </span>
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group">
                                    <label class="control-label  col-md-3" for="CellNumber">شماره تلفن همراه(اختیاری)</label>
                                    <div class="col-md-9">
                                        <input autocomplete="off" class="form-control sep-numeric" data-original-title="فقط عددهای انگلیسی قابل پذیرش است." data-placement="top" data-toggle="tooltip" id="CellNumber" inputmode="numeric" maxlength="14" name="CellNumber" tabindex="11" type="tel" value="" />
                                    </div>
                                </div>
                                <div id="saveAfterPayContainer" class="form-group">
                                    <div class="col-md-offset-3 col-md-9" style="font-size: 0.9em;">
                                        <div class="col-xs-1 no-padding" style="width: 5%;">
                                            <input data-val="true" data-val-required="The ذخیره شماره کارت و تاریخ انقضا در سامانه های پرداخت سامان field is required." id="SaveAfterPay" name="SaveAfterPay" type="checkbox" value="true" /><input name="SaveAfterPay" type="hidden" value="false" />
                                        </div>
                                        <div class="col-xs-11 no-padding" style="width: 95%;">
                                            <label for="SaveAfterPay">ذخیره شماره کارت و تاریخ انقضا در سامانه های پرداخت سامان</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group btn-container">
                                    <div class="col-md-offset-3 col-md-9">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <button id="payButton" tabindex="12" load="درحال پردازش..." class="btn btn-primary form-control"
                                                        title="ارسال اطلاعات کارت و پرداخت تراکنش">
                                                    <i class="glyphicon glyphicon-ok"></i>
                                                    <span>پرداخت</span>
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button id="button-payment-cancel" tabindex="13" no-validation="true" type="button" onclick="cancelPayment()" class="btn btn-danger form-control"
                                                        title="انصراف از پرداخت تراکنش و انتقال به سایت پذیرنده">
                                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                                    <span>
                انصراف
            </span>
                                                </button>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-offset-3">
                                        <div class="payment-validation-error show-only-on-mobile">
                                            <div class="validation-summary-valid alert alert-danger" data-valmsg-summary="true"><ul><li style="display:none"></li>
                                                </ul></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                            </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-xs-12 flex-order-1">


                <div id="merchant-info" class=" panel panel-primary">
                    <div class="panel-heading">
                        <i class="glyphicon glyphicon-info-sign"></i>
                        اطلاعات پذیرنده
                    </div>
                    <div class="panel-body">
                        <div class="accinfo">
                            <ul>
                                <li class="alert-gray">
                                    <div id="pay-timer">
                                        <i class="glyphicon glyphicon-time"></i>
                                        <span>
        زمان باقیمانده:&nbsp;
    </span>
                                        <span class="value">
        <span id="min"></span>:<span id="sec"></span>
    </span>
                                    </div>
                                </li>
                                <li class="alert-gray p-10">
                                    <div class="d-flex d-flex-wrap">
                                        <div class="m-auto flex-1 img-holder">
                                            <img class="img img-responsive merchant-logo-image m-auto" src="../Data/MLogos/63fc834efd44432084608588976058d2.png" alt="" />
                                        </div>
                                    </div>
                                </li>

                                <li class="alert-gray">
                                    <i class="glyphicon glyphicon-certificate"></i>
                                    <label for="">شماره پذیرنده / ترمینال</label>
                                    <span>
                        {{$providerInfo['terminalNumber']}}
                    </span>
                                    <span> / </span>
                                    <span>
                        {{$providerInfo['terminalNumber']}}
                    </span>
                                </li>
                                <li class="alert-gray">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <label for="Merchant">نام پذیرنده</label>
                                    {{$providerInfo['providerName']}}
                                </li>
                                <li class="alert-gray">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <label for="RedirectUrl">آدرس سایت پذیرنده</label>
                                    {{$providerInfo['websiteUrl']}}
                                </li>
                                <li class="price alert-gray">
                                    <i class="glyphicon glyphicon-asterisk"></i>
                                    <label for="Amount">مبلغ قابل پرداخت(ریال)</label>
                                    <span>
                        {{$providerInfo['price']}} ریال
                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix-sm"></div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-xs-12 flex-order-3">

                <div id="security-notice" class="panel panel-info">
                    <div class="panel-heading">
                        <i class="glyphicon glyphicon-exclamation-sign"></i>
                        راهنمای استفاده از رمز پویا
                    </div>
                    <div class="panel-body">
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            <b>رمز پویا</b>
                            <span>
                رمز یکبار مصرفی است که به جای رمز دوم کارت استفاده می‌شود.
            </span>
                        </p>
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            <b>مرحله اول - </b>
                            <span>بر اساس دستورالعمل بانک صادرکننده کارت خود، نسبت به فعال سازی رمز پویا اقدام نمایید.</span>
                        </p>
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            <b>مرحله دوم - </b>
                            <span>رمز پویا را بر اساس روش اعلامی از طرف بانک صادر کننده کارت، به یکی از روش های زیر دریافت کنید</span>
                        <ul class="list-style-none">
                            <li>
                                <b>1-</b>
                                <span>
                        دریافت از طریق برنامه کاربردی بانک، اینترنت بانک و یا موبایل بانک
                    </span>
                            </li>
                            <li>
                                <b>2-</b>
                                <span>
                        دریافت از طریق کد USSD بانک صادر کننده کارت شما
                    </span>
                            </li>
                            <li>
                                <b>3-</b>
                                <span>
                        دریافت از طریق زدن دکمه &quot;درخواست رمز پویا&quot; در درگاه پرداخت اینترنتی
                    </span>
                            </li>
                        </ul>
                        </p>
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            <b>مرحله سوم - </b>
                            <span>پس از دریافت رمز به یکی از روش های فوق، رمز پویای دریافت شده را در محل تعیین شده برای &quot;رمز دوم&quot; وارد نمایید و سپس مابقی اطلاعات راتکمیل نمایید.</span>
                        </p>
                    </div>
                </div>




            </div>
        </div>

        <div class="clear"></div>

        <div class="row">
            <div class="col-sm-12 col-xs-12">



                <div id="security-notice" class="panel panel-danger">
                    <div class="panel-heading">
                        <i class="glyphicon glyphicon-exclamation-sign"></i>
                        راهنما و نکات امنیتی
                    </div>
                    <div class="panel-body">
                        <!-- در صورت تسویه به چند حساب به ازای هر شبا مبلغ باید یک عنصر به آرایه افزوده گردد-->
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            شماره کارت: 16 رقمی بوده و بصورت 4 قسمت 4 رقمی روی کارت درج شده است
                        </p>
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            cvv2با طول 3 یا 4 رقم کنار شماره کارت و یا پشت کارت درج شده است
                        </p>
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            تاریخ انقضا: شامل دو بخش ماه و سال انقضا در کنار شماره کارت درج شده است
                        </p>
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            رمز اینترنتی: با عنوان رمز دوم و در برخی موارد با PIN2 شناخته می شود، از طریق بانک صادر کننده کارت تولید شده و همچنین از طریق دستگاه های خودپرداز بانک صادر کننده قابل تهیه و یا تغییر می باشد
                        </p>
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            کد امنیتی: بخشی از محتوای صفحه پرداخت است و لازم است برای ادامه فرایند خرید ، کد موجود که به صورت عددی در تصویر مشخص شده است در محل پیش بینی شده درج شود
                        </p>
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            درگاه پرداخت اینترنتی سامان با استفاده از پروتکل امن SSL به مشتریان خود ارایه خدمت نموده و با آدرس <strong style="font-size:1.4em; color:red;">https://sep.shaparak.ir</strong> شروع می شود. خواهشمند است به منظور جلوگیری از سوء استفاده های احتمالی پیش از ورود هرگونه اطلاعات، آدرس موجود در بخش مرورگر وب خود را با آدرس فوق مقایسه نمایید و درصورت مشاهده هر نوع مغایرت احتمالی، موضوع را با ما درمیان بگذارید.
                        </p>
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            از صحت نام فروشنده و مبلغ نمایش داده شده، اطمینان حاصل فرمایید.
                        </p>
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            برای جلوگیری از افشای رمز کارت خود، حتی المقدور از صفحه کلید مجازی استفاده فرمایید.
                        </p>
                        <p>
                            <i class="glyphicon glyphicon-ok" style="color: green;font-size: 1.2em;"></i>
                            برای کسب اطلاعات بیشتر، گزارش فروشگاههای مشکوک و همچنین اطلاع از وضعیت پذیرندگان
                            اینترنتی با شماره 84080 تماس بگیرید و یا از طریق ایمیل epay@sep.ir اقدام نمایید.
                        </p>
                    </div>
                </div>



            </div>
        </div>

    </div>

</div>
<div class="footer">
    <div class="container">
        <div class="footer-phone">
            <i class="glyphicon glyphicon-earphone"></i>
            <span>مرکز شبانه روزی ارتباط با مشتریان:</span>
            <span class="value">84080-021</span>
        </div>
        <div class="footer-copyright">
            <i class="glyphicon glyphicon-registration-mark"></i>
            تمامی حقوق این نرم افزار متعلق به  شرکت پرداخت الکترونیک سامان  می باشد.
        </div>
        <div class="footer-company">
            <i class="glyphicon glyphicon-copyright-mark"></i>
            شرکت پرداخت الکترونیک سامان <span style="direction: rtl;"> 2022- 2008</span>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        setFooterPosition();
        $(".btn").on("click", function (e) {
            setTimeout(function() {
                setFooterPosition();
            }, 100);
        });
        $(window).resize(function() {
            setTimeout(function () {
                setFooterPosition();
            }, 100);
        });
    });
</script>
<script src="js/modernizr0cf5?v=inCVuEFe6J4Q07A0AcRsbJic_UE5MwpRMNGcOtk94TE1"></script>

<script src="js/bootstrap2a92?v=02I37B8URpB7hqkZrxMEO7o6VbDywYH_vuXan7A7mR81"></script>

<script src="js/jqueryvalf0e0?v=ewwbEwxCzNIunbw9c2Y5X5_ldbOkIBIkUo-LvchX7I81"></script>

<script>
    $(document).ready(function () {
        $('.loading-page').hide();
        $('.loading-page').remove();
        $('.main-page').show();
    });

</script>
<link href="css/cssdbd6.css?v=5I8WMtzDmMcg91tEy3d5bWn3BxIcmNInYDq16n80Qoc1" rel="stylesheet"/>
<script src="js/fa-scripts66ec?v=Fpw7PE73-rXVYcM_EmkZnmI5GJnJJIEAmlbGdfGfu0E1"></script>
<!--[if IE 7]>
<link href="/OnlinePG/Content/IE7.css" rel="stylesheet"/>

<![endif]-->
<!--[if lte IE 8]>
<link href="/OnlinePG/Content/IE8.css" rel="stylesheet"/>

<![endif]-->



<script>
    $(document).ready(function() {
        if (!navigator.cookieEnabled) {
            $("#payContainer").hide();
            $("#frmCookie").submit();
        }
        var isWebKit = /webkit/.test(navigator.userAgent.toLowerCase());
        var isEdge = navigator.userAgent.search("Edge") > 0;
        if (!isEdge && isWebKit) {
            $("#Pin2, #Cvv2").addClass("num-pass-input");
            $("#Pin2, #Cvv2").attr("type", "tel");
        }
        var timeout = parseInt('476000');
        $('#pay-timer').startKTimer({
            timeOut: timeout,
            btnTimeoutClick: $('#button-payment-cancel')
        });
        syncSectionsHeight();

        $("#CaptchaInputText").attr("maxlength", 5);
        $("#CaptchaInputText").attr("type", "tel");
    });

    function syncSectionsHeight() {

        //$('#card-info').syncHeight($('#merchant-info'), 768);


        //$("#button-payment-pay").on("click", function (e) {
        //    $('#card-info').syncHeight($('#merchant-info'), 768);
        //});


        $(window).resize(function () {
            $('#card-info').syncHeight($('#merchant-info'),
                768);
        });

    }


    /* Card Number Validator*/
    jQuery.validator.unobtrusive.adapters.add
    ("cardnumbervalidations", ['invalidcardnumber'],
        function (options) {
            options.rules['cardnumbervalidations'] = {
                other: options.params.other,
                invalidcardnumber: options.params.invalidcardnumber
            };
            options.messages['cardnumbervalidations'] = options.message;
        }
    );


    jQuery.validator.addMethod("cardnumbervalidations", function (value, element, params) {
        var result = isValidCard(value);
        setTimeout(function () {
            if (!result)
                $(element).closest('tr').find('input:enabled').removeClass('valid').addClass('input-validation-error');
            else
                $(element).closest('tr').find('input').removeClass('input-validation-error');
            syncSectionsHeight();
        }, 200);
        return result;
    });

</script>
<script src="js/card67e6?v=o9qQvYfRUamvcuVMBD8IA07MMENDNx7x8LwD2no93v41"></script>



<!--[if IE 7]>
<link href="/OnlinePG/Content/StyleIE7.css" rel="stylesheet" />
<![endif]-->

<script>

    $(document).ready(function () {

        if (!navigator.cookieEnabled) {
            $("form").attr("method", "get");
        }

        $("#frmPayment").submit(function (e) {
            e.preventDefault();
            $("#button-payment-pay").attr("disabled", "disabled");
            k1StopTimer();
            $(this).unbind('submit');
            setTimeout(function () {
                $("#frmPayment").submit();
            }, 100);
        });

        $("#Month,#button-payment-pay").focus(function () {
            $(".keypad-close").click();
        });

    });

</script>
<script defer type="module" src="/js/init.js"></script>
</body>

</html>
