<div class="footer-bottom main-ft">
    <div class="wrapper-fix outer-footer">
        <div class="main-footer-update">
            <div class="logo-data-new">
                @if($setting->logo ?? '' !='')
                <img src="{{ asset('/storage/logo/'.$setting->logo) }}" title="Onine School ERP" alt="School Management Software" class="logowhite">
                @else
                <img src="{{ asset('/images/logo.png') }}" title="Onine School ERP" alt="School Management Software" class="logowhite">
                @endif
            </div>
            <div class="outer-part">
                <div class="left-part-about">
                    <ul>
                        <li><a href="{{ route('home.pages', 'about-us') }}">About Us</a></li>
                        <li><a href="{{ route('home.pages', 'advisors') }}">advisors</a></li>
                        <li><a href="{{ route('home.pages', 'whats-new') }}">What's New</a></li>
                        <li><a href="{{ route('home.pages', 'clients') }}">clients</a></li>
                        <li><a href="{{ route('home.testimonials') }}">Testimonials</a></li>
                        <li><a href="{{ route('home.contactus') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="lft-pro-ul-data">
                    <ul>
                        <li class="">Business </li>
                        <li><a href="{{ route('home.pages', 'communication') }}">Communication</a></li>
                        <li><a href="{{ route('home.pages', 'performance-management') }}">Performance Management</a></li>
                        <li><a href="{{ route('home.pages', 'recruitment') }}">Recruitment</a></li>
                        <li><a href="{{ route('home.pages', 'talent-management') }}">Talent Management</a></li>
                        <li><a href="{{ route('home.pages', 'partner') }}">Partner</a></li>
                    </ul>
                </div>
                <div class="lft-pro-ul-data">
                    <ul>
                        <li>Industry</li>
                        <li><a href="{{ route('home.pages', 'education') }}">Education</a></li>
                        <li><a href="{{ route('home.pages', 'corporate') }}">Corporate </a></li>
                        <li><a href="{{ route('home.pages', 'government') }}">Government</a></li>
                    </ul>
                </div>
                <div class="lft-pro-ul-data right-footer-links">
                    <ul>
                        <li>Resources</li>
                        <li><a href="{{ route('home.blog') }}">Blog</a></li>
                        <li><a href="{{ route('home.pages', 'help-support') }}">Help & Support</a></li>
                        <li>Follow Us
                            <div class="social-icon">
                                <a href="{{ $setting->facebook ?? '' }}" target="_blank"><img src="{{asset('/images/fb.png')}}">
                                    <!--<span class="fbicn"></span>-->
                                </a>
                                <a href="{{ $setting->linkedin ?? '' }}" target="_blank"><img src="{{asset('/images/link.png')}}">
                                    <!--<span class="linkedIn"></span>-->
                                </a>
                                <a href="{{ $setting->twitter ?? '' }}" target="_blank"><img src="{{asset('/images/twt.png')}}">
                                    <!--<span class="twticn"></span>-->
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear-shadow"></div>
    </div>
</div>
</div>
<a href="tel:{{ $setting->mobile ?? '' }}" class="footer-contact-button footer-contact-popup animated"><span>{{ $setting->mobile ?? '' }}</span></a>
</div>
<div class="bottom-ft-main">
    <div class="wrapper-fix">
        <div class="related-website">
            <ul>
                <li><a href="{{ route('home.pages', 'term-of-use') }}">Terms of use</a></li>
                <li><a href="{{ route('home.pages', 'privacy-policy') }}">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="ftrcntnt" style="margin: 0;"> © 2020 Suncity Techno, All rights reserved | <a class="footer-link" href="./">Powered by dossierbox.com</a></div>
    </div>
</div>
<div class="scroll-to-top" title="Go to top"></div>