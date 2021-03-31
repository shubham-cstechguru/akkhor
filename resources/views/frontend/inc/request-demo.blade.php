@extends('frontend.layout.app')

@section('title', 'Schedule a Demo | Request a Demo')

@section('description', 'Demo Page')

@section('keywords', 'Demo Page')

@section('content')

<div class="container prcngcntnr">
    <div class="headercopntent pagesheader pricing-box">
        <h1 class="pagename feature-head">Schedule a Demo</h1>
        <!-- <h2 class="hdng hd-top">Try out School ERP free for 7 days. You’ll never want to go back.</h2> -->
        <p class="cancel-card new-p-data">Call our sales line at <span>+91 7972303958</span></p>
        <p class="no-credit-card new-p-data" style="margin-bottom: 95px;">Book your schedule for a demo by filling a few details.</p>
    </div>
</div>

<div id="popup_main" class="otr_schdule">
    <form name="popup" method="POST" action="{{ route('home.request.post') }}">
        {!! csrf_field() !!}
        <div class="main-poupCntr" id="popup_back">
            <div class="schdule_form">
                <div class="cntn_wrpr">
                    <div class="imgeCntnr-field">
                        <span class="backgrnd-imgeDemo">
                            <div class="topHdr">
                                <h3>Schedule a Demo</h3>
                                <p>Add your professional information.</p>
                            </div>
                            <span class="txt-1">Your ultimate destination for online assessment</span>
                            <span class="txt-2">Prepare your teachers, staff, students and their staff for online education.</span>
                        </span>
                    </div>
                    <div class="mainCntnr-txtfiled">
                        <div class="mktFormReq mktField" style="margin-top: 15px">
                            <div class="left-sctn-login">
                                <span class="txt-lgon">Your name<span style="color:red;margin-left: 5px;">*</span></span>
                            </div>
                            <div class="admin-login form-group">
                                <input required type="text" autocomplete="off" onfocus='hide(this.id);' oninput="this.value = this.value.replace(/[^A-Z. ^a-z.^\s ^\s ]/g, '');" id="name" class="login-form-text name" name="name" placeholder="Enter your full name">
                                @if($errors->has('name'))
                                <div class="valid-sctn" id="name_error">
                                    <img src="{{ asset('images/information.png') }}" class="error_msgIcon" />
                                    <span class="helping valid-info">
                                        <div class="hlpicn">{{ $errors->first('name') }}</div>
                                    </span>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="mktFormReq mktField">
                            <div class="left-sctn-login">
                                <span class="txt-lgon">Email<span style="color: red;margin-left: 5px;">*</span></span>
                            </div>
                            <div class="admin-login form-group">
                                <input required type="email" autocomplete="off" onfocus='hide(this.id);' oninput="this.value = this.value.replace(/[^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$]/g, '');" id="email" class="login-form-text" name="email" placeholder="Enter your  email">
                                @if($errors->has('email'))
                                <div class="valid-sctn" id="name_error">
                                    <img src="{{ asset('images/information.png') }}" class="error_msgIcon" />
                                    <span class="helping valid-info">
                                        <div class="hlpicn">{{ $errors->first('email') }}</div>
                                    </span>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="mktFormReq mktField">
                            <div class="left-sctn-login">
                                <span class="txt-lgon">Organization</span>
                            </div>
                            <div class="admin-login">
                                <input type="text" autocomplete="off" class="login-form-text" id="company" onfocus='hide(this.id)' oninput="this.value = this.value.replace(/[^0-9.^A-Z. ^a-z.^\s ^\s ]/g, '');" name="company" placeholder="Enter your organization name">
                            </div>
                        </div>
                        <div class="mktFormReq mktField">
                            <div class="left-sctn-login">
                                <span class="txt-lgon">Contact number<span style="color: red;margin-left: 5px;">*</span></span>
                            </div>
                            <div class="admin-login form-group">
                                <input required type="tel" autocomplete="off" size="24" oninput="this.value = this.value.replace(/[^0-9.{10}]/g, '');" maxlength="15"  id="phoneno" name="phoneno" onfocus='hide(this.id)' class="mble_input login-form-text" placeholder="Enter your contact number">
                                @if($errors->has('phoneno'))
                                <div class="valid-sctn" id="name_error">
                                    <img src="{{ asset('images/information.png') }}" class="error_msgIcon" />
                                    <span class="helping valid-info">
                                        <div class="hlpicn">{{ $errors->first('phoneno') }}</div>
                                    </span>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="mktFormReq mktField">
                            <div class="left-sctn-login">
                                <span class="txt-lgon">Job title</span>
                            </div>
                            <div class="admin-login">
                                <input type="text" size="24" autocomplete="off" id="designation" name="designation" onfocus='hide(this.id);' class="mble_input login-form-text" placeholder="Enter your job title">
                            </div>
                        </div>
                        <div class="mktFormReq mktField">
                            <div class="left-sctn-login">
                                <span class="txt-lgon">Number of students</span>
                            </div>
                            <div class="admin-login tst_slct">
                                <select class="mble_input login-form-text" id="test" name="test" style="background: #eee; padding-bottom: 0px !important; line-height: 20px !important">
                                    <option value="Less than 500">Less than 500</option>
                                    <option value="500-1000">500-1000</option>
                                    <option value="1000-1500">1000-1500</option>
                                    <option value="1500-2000">1500-2000</option>
                                    <option value="More than 2000">More than 2000</option>
                                </select>
                            </div>
                        </div>
                        <div class="mktFormReq mktField">
                            <div class="left-sctn-login">
                                <span class="txt-lgon">Time to Finalize</span>
                            </div>
                            <div class="admin-login textfield tst_slct tst_slct-box " style="background: #eee">
                                <select class="mble_input login-form-text" id="daysToFinalize" name="daysToFinalize" style="background: #eee; padding-bottom: 0px !important; line-height: 20px !important">
                                    <option value="7 Days">7 Days</option>
                                    <option value="15 Days">15 Days</option>
                                    <option value="30 Days">30 Days</option>
                                    <option value="Not yet decided">Not yet decided</option>
                                </select>
                            </div>
                        </div>
                        <div class="mktFormReq mktField">
                            <div class="left-sctn-login">
                                <span class="txt-lgon">Website URL</span>
                            </div>
                            <div class="admin-login form-group">
                                <input style="width:60%" type="text" autocomplete="off" class="login-form-text web" id="requestedUrl" onfocus='hide(this.id);' oninput="this.value = this.value.replace(/[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi, '');" name="requestedUrl" placeholder="Enter your website url">
                            </div>
                        </div>
                        <div class="mktFormReq mktField">
                            <div class="left-sctn-login">
                                <span class="txt-lgon">Specific Requirements</span>
                            </div>
                            <div class="admin-login">
                                <textarea type="text" size="24" autocomplete="off" id="message" name="message" onfocus='$("#message").parent(".admin-login").removeClass("errorinpt");' class="mble_input login-form-text" style=" resize: none; width: 100% !important; padding: 5px 0 5px 10px !important; line-height: 20px;" placeholder="Enter your specific requirements"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                            @if($errors->has('recaptcha_token'))
                            {{$errors->first('recaptcha_token')}}
                            @endif
                        <div class="mktFormReq mktField">
                            <span class="mndtry_filds-txt">(<span style="color: red;margin-left: 5px;">*</span>Mandatory fields )</span>
                            <button type="submit" id="send" name="send" class="popup_sbmtbtn">Submit</button>
                            <button style="display: none;" id="wait" name="wait" class="popup_sbmtbtn">Wait ...</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="submt_gif">
                </div>
            </div>
        </div>
    </form>
</div>
<div class="preloaderCBT_image" style="display:none" id="preloader_request">
    <img src="{{ asset('images/PreloaderCBT.gif') }}">
</div>
@endsection

@section('script')

{{ Html::script('js/validation.js') }}

<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITEKEY') }}"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ env('RECAPTCHA_SITEKEY') }}').then(function(token) {
            if (token) {
                document.getElementById('recaptcha_token').value = token;
            }
        });
    });
</script>
@endsection