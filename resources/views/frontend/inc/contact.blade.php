@extends('frontend.layout.app')

@section('title', 'Contact Us')

@section('description', 'Contact Us Page')

@section('keywords', 'Contact Us Page')

@section('content')

@include('frontend.templates.banner', ['page_title' => 'Contact Us'])

<div class="main-products">
    <div class="wrapper-fix">
        <form name="popup" method="POST" action="{{ route('home.contactus.post') }}">
            {!! csrf_field() !!}

            <div class="main-poupCntr" id="popup_back">
                <div class="schdule_form">
                    <div class="cntn_wrpr">

                        <div class="mainCntnr-txtfiled" style="width: 100%;">
                            @if(\Session::get('status'))
                            <div class="msgIcon" role="alert">
                                {{ \Session::get('status') }}
                                <button type="button" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endif
                            <div class="mktFormReq mktField" style="margin-top: 15px">
                                <div class="left-sctn-login">
                                    <span class="txt-lgon">Your name<span style="color:red;margin-left: 5px;">*</span></span>
                                </div>
                                <div class="admin-login form-group">
                                    <input required type="text" autocomplete="off" onfocus='hide(this.id);' oninput="this.value = this.value.replace(/[^A-Z. ^a-z.^\s ^\s ]/g, ''); " id="name" class="login-form-text name" name="name" placeholder="Enter your full name">
                                    @if($errors->has('name'))
                                    <div class="valid-sctn" id="name_error">
                                        <img src="images/information.png" class="error_msgIcon" />
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
                                        <img src="images/information.png" class="error_msgIcon" />
                                        <span class="helping valid-info">
                                            <div class="hlpicn">{{ $errors->first('email') }}</div>
                                        </span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="mktFormReq mktField">
                                <div class="left-sctn-login">
                                    <span class="txt-lgon">Contact number<span style="color: red;margin-left: 5px;">*</span></span>
                                </div>
                                <div class="admin-login form-group">
                                    <input required type="tel" autocomplete="off" size="24" oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="15" id="phoneno" name="phoneno" onfocus='hide(this.id)' class="mble_input login-form-text" placeholder="Enter your contact number">
                                    @if($errors->has('phoneno'))
                                    <div class="valid-sctn" id="name_error">
                                        <img src="images/information.png" class="error_msgIcon" />
                                        <span class="helping valid-info">
                                            <div class="hlpicn">{{ $errors->first('phoneno') }}</div>
                                        </span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="mktFormReq mktField">
                                <div class="left-sctn-login">
                                    <span class="txt-lgon">Your Message<span style="color: red;margin-left: 5px;">*</span></span>
                                </div>
                                <div class="admin-login form-group">
                                    <textarea required type="text" autocomplete="off" id="message" name="message" onfocus='$("#message").parent(".admin-login").removeClass("errorinpt");' class="mble_input login-form-text" style=" resize: none; width: 100% !important; padding: 5px 0 5px 10px !important; line-height: 20px;" placeholder="Enter your specific requirements"></textarea>
                                    @if($errors->has('message'))
                                    <div class="valid-sctn" id="name_error">
                                        <img src="images/information.png" class="error_msgIcon" />
                                        <span class="helping valid-info">
                                            <div class="hlpicn">{{ $errors->first('message') }}</div>
                                        </span>
                                    </div>
                                    @endif
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
                </div>
            </div>
        </form>
        <article class="cnct_right-wrapper">

            <h2 class="smallhdng">Communication Details</h2>
            <h5 class="smallhdng-content">Feel free to get in touch with our team!</h5>
            <ul class='contactul'>
                <li>
                    <span class="contacticon contact-email"></span>
                    <div class='contact_cntnt'>
                        <span class='cntctinrhdng'>WRITE TO US</span>
                        <span class="cntctinrinfo info-links"><a href="mailto:{{$setting->email ?? ''}}">{{ $setting->email ?? '' }}</a></span>
                    </div>
                </li>
                <li>
                    <span class="contacticon contact-mobile"></span>
                    <div class='contact_cntnt'>
                        <span class='cntctinrhdng'>TALK TO AN EXPERT</span>
                        <span class="cntctinrinfo"><a href="tel:{{$setting->mobile ?? ''}}">{{ $setting->mobile ?? '' }}</a></span>
                    </div>
                </li>
                <li>
                    <span class="contacticon contact-address"></span>
                    <div class='contact_cntnt'>
                        <span class='cntctinrhdng'>REACH US AT</span>
                        <span class="cntctinrinfo">{{ $setting->address ?? '' }}</span>
                    </div>
                </li>
            </ul>
            <div class="contact-map">
                {!! $setting->google_maps ?? '' !!}
            </div>
        </article>
        <div class="clear_fix"></div>
    </div>
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