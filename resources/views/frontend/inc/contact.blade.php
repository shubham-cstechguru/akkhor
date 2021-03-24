@extends('frontend.layout.app')
@section('content')

@include('frontend.templates.banner', ['page_title' => 'Contact Us'])

<div id="popup_main" class="otr_schdule">
    <form name="popup" method="POST" action="{{ route('home.contactus.post') }}">
        {!! csrf_field() !!}
        <div class="main-poupCntr" id="popup_back">
            <div class="schdule_form">
                <div class="cntn_wrpr">

                    <div class="mainCntnr-txtfiled" style="width: 100%;">
                        <div class="mktFormReq mktField" style="margin-top: 15px">
                            <div class="left-sctn-login">
                                <span class="txt-lgon">Your name<span style="color:red;margin-left: 5px;">*</span></span>
                            </div>
                            <div class="admin-login">
                                <input type="text" autocomplete="off" onfocus='hide(this.id);' oninput="this.value = this.value.replace(/[^0-9.^A-Z. ^a-z.^\s ^\s ]/g, ''); " id="name" class="login-form-text" name="name" placeholder="Enter your full name">
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
                            <div class="admin-login">
                                <input type="email" autocomplete="off" onfocus='hide(this.id);' id="email" class="login-form-text" name="email" placeholder="Enter your  email">
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
                            <div class="admin-login">
                                <input type="text" autocomplete="off" size="24" oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="15" id="phoneno" name="phoneno" onfocus='hide(this.id)' class="mble_input login-form-text" placeholder="Enter your contact number">
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
                                <span class="txt-lgon">Your Message</span>
                            </div>
                            <div class="admin-login">
                                <textarea type="text" autocomplete="off" id="message" name="message" onfocus='$("#message").parent(".admin-login").removeClass("errorinpt");' class="mble_input login-form-text" style=" resize: none; width: 100% !important; padding: 5px 0 5px 10px !important; line-height: 20px;" placeholder="Enter your specific requirements"></textarea>
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
</div>

@endsection