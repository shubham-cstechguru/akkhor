<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Master</div>
            <a class="nav-link" href="{{ route('admin.religion.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Religion
            </a>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocation" aria-expanded="false" aria-controls="collapseLocation">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Location
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLocation" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('admin.country.index') }}">Country</a>
                    <a class="nav-link" href="{{ route('admin.city.index') }}">City</a>
                    <a class="nav-link" href="{{ route('admin.state.index') }}">State</a>
                </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseBlogs" aria-expanded="false" aria-controls="collapseBlogs">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Blogs
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseBlogs" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('admin.blog.create') }}">Add Blogs</a>
                    <a class="nav-link" href="{{ route('admin.blog.index') }}">View Blogs</a>
                </nav>
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#pagesCategories" aria-expanded="false" aria-controls="pagesCategories">
                        Categories
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCategories" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('admin.blogcategory.create') }}">Add Categories</a>
                            <a class="nav-link" href="{{ route('admin.blogcategory.index') }}">View Categories</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#pagesTags" aria-expanded="false" aria-controls="pagesTags">
                        Tags
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesTags" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('admin.blogtags.create') }}">Add Tags</a>
                            <a class="nav-link" href="{{ route('admin.blogtags.index') }}">View Tags</a>
                        </nav>
                    </div>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServices" aria-expanded="false" aria-controls="collapseServices">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Services
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseServices" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('admin.services.create') }}">Add Services</a>
                    <a class="nav-link" href="{{ route('admin.services.index') }}">View Services</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSchool" aria-expanded="false" aria-controls="collapseSchool">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                School
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseSchool" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('admin.school.create') }}">Add School</a>
                    <a class="nav-link" href="{{ route('admin.school.index') }}">View School</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePricing" aria-expanded="false" aria-controls="collapsePricing">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Pricing
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePricing" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('admin.pricing.create') }}">Add Pricing</a>
                    <a class="nav-link" href="{{ route('admin.pricing.index') }}">View Pricing</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTestimonial" aria-expanded="false" aria-controls="collapseTestimonial">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Testimonials
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseTestimonial" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('admin.testimonial.create') }}">Add Testimonial</a>
                    <a class="nav-link" href="{{ route('admin.testimonial.index') }}">View Testimonial</a>
                </nav>
            </div>
            <a class="nav-link" href="{{ route('admin.home') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Home Edit
            </a>
            <a class="nav-link" href="{{ route('admin.pages.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Pages
            </a>
            <a class="nav-link" href="{{ route('admin.request') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Demo Enquiry
            </a>
            <a class="nav-link" href="{{ route('admin.contact') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Contact Enquiry
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        {{ auth()->guard('admin')->user()->name }}
    </div>
</nav>