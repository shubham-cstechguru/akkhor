<header id='header' class="header">
    <div id="mainnav_bar">
        <div class='wrapper-fix logowrapper'>
            <div class="top-header">
                <a class="logo" href="{{ route('home.index') }}" title="School Management Software it's that easy as thinking">
                    <img src='{{ asset("/storage/logo/".$setting->logo) }}' title="Onine School ERP" alt="School Management Software" class='logowhite' />
                    <img src='{{ asset("/storage/logo/".$setting->logo) }}' title="Onine School ERP" alt="School Management Software" class='logoblue' />
                </a>
                <nav class="top_nav">
                    <a class="toggleMenu" href="#">
                        <div id="nav-icon4">
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>
                    </a>
                    <ul class='nav familiar_probold'>

                        <li><a href="{{ route('home.pricing') }}" title="Price">Pricing</a></li>

                        <ul class='dropdownul'>
                            <li>
                                <a href='#'>Support</a>
                            </li>
                            <li>
                                <a href='#'>FAQ</a>
                            </li>
                        </ul>


                        <li><a href="{{ route('home.request') }}" title="Request Demo">Request Demo</a></li>
                        <li><a href='http://acc.suncitytechno.com/school-management/get-started' target="_blank" id="" title="Log in">log in</a></li>
                        <li><a href="http://acc.suncitytechno.com/school-management/get-started" target="_blank" class="signupbtn">Sign up</a></li>
                    </ul>
                </nav>
            </div>
            <div id="subMenu" style="display:none;">
                <div class="hdr_sw_itm light_font">
                    <span class="hdr_lnk_name">If you have any question? <a class="blue" href="#" onclick="show()">Send an <b>enquiry</b><span class="sprite submnu_icon1"></span></a>
                        <span style="margin:0 16px;">or</span>Call us at <strong>9871871211</strong>
                    </span>
                    <span class="hdr_lnk_name"><a class="green" href="#" onclick="return popitup('http://www.omrhome.com/phplive/phplive.php?d=0&amp;token=0aeb69e1e3536c1a62ba22b575772678&amp;onpage=hphp%3A%2F%2Fwww.omrhome.com%2F&amp;title=OMR%20Software%20for%20Scanning%20%26%20Sheet%20Reading&amp;&amp;popout=0&amp;theme=&amp;js_name=&amp;js_email=&amp;&amp;custom=')">Live Chat <b>Online</b><span class="sprite submnu_icon2"></span></a></span>
                    <span class="hdr_lnk_name">
                        <a class="orange last" href="get_a_quote.php">Get a <b>quote</b><span class="sprite submnu_icon3"></span></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>