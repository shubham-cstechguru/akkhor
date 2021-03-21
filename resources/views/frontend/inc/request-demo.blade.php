@extends('frontend.layout.app')
@section('content')

@include('frontend.templates.banner', ['page_title' => 'SCHEDULE A DEMO', 'page_description' => 'Book your schedule for a demo by filling a few details.'])

<div id="popup_main" class="otr_schdule">

    <form name="popup" method="POST" action="{{ route('home.request.post') }}" onsubmit="return false;">
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

                            <!--                        <img src="images/ThinkExam-banner.jpg" />-->

                        </span>

                    </div>

                    <div class="mainCntnr-txtfiled">



                        <div class="mktFormReq mktField" style="margin-top: 15px">

                            <div class="left-sctn-login">

                                <span class="txt-lgon">Your name<span style="color:red;margin-left: 5px;">*</span></span>



                            </div>

                            <div class="admin-login">



                                <!--<span class="request-demo-icon icon-user"></span>-->

                                <input type="text" autocomplete="off" onfocus='hide(this.id);' oninput="this.value = this.value.replace(/[^0-9.^A-Z. ^a-z.^\s ^\s ]/g, ''); " id="name" class="login-form-text" name="name" placeholder="Enter your full name">

                                <!--                 <label class="placeholder">Your Name</label>-->

                                <div class="valid-sctn" id="name_error">

                                    <img src="images/information.png" class="error_msgIcon" />

                                    <span class="helping valid-info">
                                        <div class="hlpicn">Please enter name </div>
                                    </span>

                                </div>

                            </div>

                        </div>

                        <div class="mktFormReq mktField">

                            <div class="left-sctn-login">

                                <span class="txt-lgon"> Email<span style="color: red;margin-left: 5px;">*</span></span>

                            </div>

                            <div class="admin-login">

                                <!--<span class="request-demo-icon icon-envelope"></span>-->

                                <input type="email" autocomplete="off" onfocus='hide(this.id);' id="email" class="login-form-text" name="email" placeholder="Enter your  email">

                                <!--                <label class="placeholder">Company Email</label>-->

                                <div class="valid-sctn" id="email_error">

                                    <img src="images/information.png" class="error_msgIcon" />

                                    <span class="helping valid-info">

                                        <div class="hlpicn" id="valid_email">Please enter email </div>
                                    </span>

                                </div>

                            </div>

                        </div>

                        <div class="mktFormReq mktField">

                            <div class="left-sctn-login">

                                <span class="txt-lgon">Organization</span>

                            </div>

                            <div class="admin-login">

                                <!--<span class="request-demo-icon icon-globe"></span>-->

                                <input type="text" autocomplete="off" class="login-form-text" id="company" onfocus='hide(this.id)' oninput="this.value = this.value.replace(/[^0-9.^A-Z. ^a-z.^\s ^\s ]/g, ''); " name="company" placeholder="Enter your organization name">

                                <!--                                            <label class="placeholder">Company Name</label>-->

                                <div class="valid-sctn" id="company_error">

                                    <img src="images/information.png" class="error_msgIcon" />

                                    <span class="helping valid-info">

                                        <div class="hlpicn">Please enter organization name </div>
                                    </span>

                                </div>

                            </div>

                        </div>

                        <div class="mktFormReq mktField">

                            <div class="left-sctn-login">

                                <span class="txt-lgon">Contact number<span style="color: red;margin-left: 5px;">*</span></span>

                            </div>

                            <div class="admin-login">

                                <!--<span class="request-demo-icon icon-mobile"></span>-->

                                <input type="text" autocomplete="off" size="24" oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="15" id="phoneno" name="phoneno" onfocus='hide(this.id)' class="mble_input login-form-text" placeholder="Enter your contact number">

                                <!--                                            <label class="placeholder">Contact Number</label>-->



                                <div class="valid-sctn" id="phoneno_error">

                                    <img src="images/information.png" class="error_msgIcon" />

                                    <span class="helping valid-info">

                                        <div class="hlpicn" id="valid_phoneno">Please enter valid number </div>
                                    </span>

                                </div>

                            </div>

                        </div>

                        <div class="mktFormReq mktField">

                            <div class="left-sctn-login">

                                <span class="txt-lgon">Job title</span>

                            </div>

                            <div class="admin-login">

                                <!--<span class="request-demo-icon icon-user"></span>-->

                                <input type="text" size="24" autocomplete="off" id="designation" name="designation" onfocus='hide(this.id);' class="mble_input login-form-text" placeholder="Enter your job title">

                                <!--                                            <label class="placeholder">Job Title</label>-->



                                <div class="valid-sctn" id="designation_error">

                                    <img src="images/information.png" class="error_msgIcon" />

                                    <span class="helping valid-info">

                                        <div class="hlpicn">Please enter designation </div>
                                    </span>

                                </div>

                            </div>

                        </div>

                        <div class="mktFormReq mktField">

                            <div class="left-sctn-login">

                                <span class="txt-lgon">Number of students</span>

                            </div>

                            <div class="admin-login tst_slct">

                                <!--<span class="icon-test"></span>-->

                                <select class="mble_input login-form-text" id="test" name="test" style="background: #eee; padding-bottom: 0px !important; line-height: 20px !important">

                                    <option value="Less than 500">Less than 500</option>

                                    <option value="500-1000">500-1000</option>

                                    <option value="1000-1500">1000-1500</option>

                                    <option value="1500-2000">1500-2000</option>

                                    <option value="More than 2000">More than 2000</option>

                                </select>

                                <!--                                            <label class="placeholder">Number of test taken in a month</label>-->



                                <div class="valid-sctn" id="test_error">

                                    <img src="images/information.png" class="error_msgIcon" />

                                    <span class="helping valid-info">

                                        <div class="hlpicn">Please Select At least one test </div>
                                    </span>

                                </div>

                            </div>

                        </div>

                        <div class="mktFormReq mktField">

                            <div class="left-sctn-login">

                                <span class="txt-lgon">Time to Finalize</span>

                            </div>

                            <div class="admin-login textfield tst_slct tst_slct-box " style="background: #eee">

                                <!--<span class="icon-test"></span>-->

                                <select class="mble_input login-form-text" id="daysToFinalize" name="daysToFinalize" style="background: #eee; padding-bottom: 0px !important; line-height: 20px !important">

                                    <option value="7 Days">7 Days</option>

                                    <option value="15 Days">15 Days</option>

                                    <option value="30 Days">30 Days</option>

                                    <option value="Not yet decided">Not yet decided</option>

                                </select>

                                <!--                                            <label class="placeholder">Time to Finalize</label>-->



                                <div class="valid-sctn" id="daysToFinalize_error">

                                    <img src="images/information.png" class="error_msgIcon" />

                                    <span class="helping valid-info">

                                        <div class="hlpicn">Please select days to finalize </div>
                                    </span>

                                </div>

                            </div>

                        </div>

                        <div class="mktFormReq mktField">

                            <div class="left-sctn-login">

                                <span class="txt-lgon">Website URL</span>

                            </div>

                            <div class="admin-login">

                                <input style="width:60%" type="text" autocomplete="off" class="login-form-text" id="requestedUrl" onfocus='hide(this.id);' name="requestedUrl" placeholder="Enter your website url">

                                <!--                                            <label class="placeholder">Website Address</label>-->



                                <div class="valid-sctn" id="requestedUrl_error">

                                    <img src="images/information.png" class="error_msgIcon" />

                                    <span class="helping valid-info">

                                        <div class="hlpicn" id="valid_requestedUrl">Please Enter Website </div>
                                    </span>

                                </div>

                            </div>

                        </div>

                        <div class="mktFormReq mktField">

                            <div class="left-sctn-login">

                                <span class="txt-lgon">Specific Requirements</span>

                            </div>

                            <div class="admin-login">

                                <!--<span class="request-demo-icon icon-user"></span>-->

                                <textarea type="text" size="24" autocomplete="off" id="message" name="message" onfocus='$("#message").parent(".admin-login").removeClass("errorinpt");' class="mble_input login-form-text" style=" resize: none; width: 100% !important; padding: 5px 0 5px 10px !important; line-height: 20px;" placeholder="Enter your specific requirements"></textarea>

                                <!--<input type="text" size="24" autocomplete="off"  id="message" name="message" onfocus='$("#message").parent(".admin-login").removeClass("errorinpt");'  class="mble_input login-form-text" >-->

                                <!--                                            <label class="placeholder">Enter Message</label>-->



                                <div class="valid-sctn" id="message_error">

                                    <img src="images/information.png" class="error_msgIcon" />

                                    <span class="helping valid-info">

                                        <div class="hlpicn">Specific Requirements </div>
                                    </span>

                                </div>

                            </div>

                        </div>

                        <div class="mktFormReq mktField">

                            <span class="mndtry_filds-txt">(<span style="color: red;margin-left: 5px;">*</span>Mandatory fields )</span>

                            <button id="send" name="send" class="popup_sbmtbtn">Submit</button>



                            <button style="display: none;" id="wait" name="wait" class="popup_sbmtbtn">Wait ...</button>

                            <div class="clearfix"></div>

                        </div>

                    </div>



                    <!--                                </div>-->



                    <!--            <a title="Close" class="fancybox-item fancybox-close" id="fancybox-close" href="javascript:;" onclick="close();"></a>-->





                </div>

                <div class="submt_gif">



                </div>

            </div>

        </div>

    </form>



</div>

<div class="preloaderCBT_image" style="display:none" id="preloader_request">

    <img src="images/PreloaderCBT.gif">

</div>
@endsection

@section('script')
<script type="text/javascript">
    var urlPattern = /(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/;

    var emailPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;



    function hide(id) {



        $("#" + id).parent(".admin-login").removeClass("errorinpt");

        $("#" + id + '_error').css('display', 'none');





    }

    var name_error = 0;

    var email_error = 0;

    var contact_error = 0;

    var false_flag = 0;

    $(document).ready(function() {

        $("#send").click(function() {





            // var messagetrim= $.trim($("#message").val());



            if ($.trim($("#name").val()) == '') {

                //

                $("#name").attr("placeholder", "Please Enter Name");

                name_error = 1;

                false_flag = 1;

                //alert(false_flag);

                //$("#name_error").css('display','block');

                // return false;

            } else {



                name_error = 0;

            }

            if ($.trim($("#email").val()) == '') {



                $("#email").attr("placeholder", "Please Enter Email");

                email_error = 1;

                false_flag = 1;

                // $("#email_error").css('display','block');

                $("#valid_email").html("Please Enter Email");

                //return false;

            } else {

                email_error = 0;



            }

            if (!emailPattern.test($("#email").val())) {

                // $("#email").parent('.admin-login').addClass("errorinpt");

                $("#email").attr("placeholder", "Email Not valid");

                $("#email").attr("placeholder", "Please Enter valid Email");

                email_error = 1;

                false_flag = 1;

                //$("#email_error").css('display','block');

                $("#valid_email").html("Please Enter valid Email");



                //return false;

            } else {

                email_error = 0;



            }





            /* else if ($.trim($("#company").val()) == '') {

                $("#company").parent('.admin-login').addClass("errorinpt");

                $("#company").attr("placeholder", "Please enter Company Name");

                $("#company_error").css('display','block');

                return false;

            } */



            if ($.trim($("#phoneno").val()) == '') {

                $("#phoneno").parent('.admin-login').addClass("errorinpt");

                $("#phoneno").attr("placeholder", "Please enter Contact number");

                contact_error = 1;

                false_flag = 1;

                //$("#phoneno_error").css('display','block');

                $("#valid_phoneno").html("Please Enter Number");

                //return false;

            } else {



                contact_error = 0;

            }

            if ($.trim($("#phoneno").val()).length < '10' || $.trim($("#phoneno").val()).length > '15') {

                // $("#phoneno").parent('.admin-login').addClass("errorinpt");

                $("#phoneno").attr("placeholder", "Please Enter valid Number");

                contact_error = 1;

                false_flag = 1;

                // $("#phoneno_error").css('display','block');

                $("#valid_phoneno").html("Please Enter valid Number");



                //return false;

            } else {

                contact_error = 0;

                //false_flag=0;

            }

            if (name_error == 0 && email_error == 0 && contact_error == 0) {

                false_flag = 0;



            }





            if (false_flag == 1) {

                //alert(false_flag);

                if (name_error == 1) {

                    $("#name").parent('.admin-login').addClass("errorinpt");

                    $("#name_error").css('display', 'block');

                }

                if (email_error == 1) {

                    $("#email").parent('.admin-login').addClass("errorinpt");

                    $("#email_error").css('display', 'block');

                }

                if (contact_error == 1) {

                    $("#phoneno").parent('.admin-login').addClass("errorinpt");

                    $("#phoneno_error").css('display', 'block');

                }

                if (false_flag == 1) {

                    return false;

                }



            } else {



                if ($.trim($("#requestedUrl").val()) != "" && !urlPattern.test($("#requestedUrl").val().toLowerCase())) {

                    $("#requestedUrl").parent('.admin-login').addClass("errorinpt");

                    $("#requestedUrl").attr("placeholder", "Website Not valid");

                    $("#requestedUrl_error").css('display', 'block');

                    $("#valid_requestedUrl").html("Please Enter valid Website");





                    return false;

                }



                var email = $("#email").val();

                var name = $("#name").val();

                // var employescount= $("#employescount").val();

                var test = $("#test").val();

                var phoneno = $("#phoneno").val();

                var company = $("#company").val();

                var designation = $("#designation").val();

                // var test = $("#test").val();

                var daysToFinalize = $("#daysToFinalize").val();

                var message = $("#message").val();

                var requestedUrl = $("#requestedUrl").val();

                var gclid = localStorage.getItem('gclid');

                if (gclid != '') {

                    var leadType = 'Paid';

                } else {

                    var leadType = 'Organic';

                }

                $("#wait").show();

                $("#send").hide();

                $("#preloader_request").show();







                var urldata = "email=" + email + "&name=" + name + "&test=" + test + "&phoneno=" +

                    phoneno + "&company=" + company + "&mode=" + 'reqDemo' + "&designation=" +

                    designation + "&test=" + test + "&daysToFinalize=" + daysToFinalize + "&message=" +

                    message + "&requestedUrl=" + requestedUrl.toLowerCase() + "&leadType=" + leadType;



                setTimeout(function() {

                    $.ajax({

                        type: "post",

                        url: "ajax",

                        data: urldata,

                        async: false,

                        error: function(data) {

                            // alert(data);



                            //               alert("Internet connection problem.");

                        },

                        success: function(data) {





                            //                 if($.trim(data) == '1'){

                            $("#send").show();

                            $("#wait").hide();

                            $("#preloader_request").show();

                            //                  alert("Message has been sent successfuly. ");

                            $("#popup_main").hide();

                            location.href = "demo-request-thankyou.html";

                            //                        location.reload();

                            //                 }

                            //location.reload();



                        }

                    });

                }, 500);

                //        window.open("demo-request-thankyou");

                //$("#popup_main").hide();



            }

        });



    });
</script>
@endsection