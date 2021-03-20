<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTestimonials" aria-expanded="false" aria-controls="collapseTestimonials">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Testimonials
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseTestimonials" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="">Add Testimonials</a>
                    <a class="nav-link" href="">View Testimonials</a>
                </nav>
            </div>
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
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Pages
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="">Add Pages</a>
                    <a class="nav-link" href="">View Pages</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        {{ auth()->guard('admin')->user()->name }}
    </div>
</nav>