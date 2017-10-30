<div class="sidebar">
    <div class="sidebar-wrapper">
        <a href="/" class="logo">
          <img src="/images/yarwest_logo.png" alt="Yarwest Logo" class="img-responsive">
            <p>
                Yarwest
            </p>
        </a>
        <ul class="nav">
            <li class="{{ Request::segment(2) === null ? 'active' : '' }}">
                <a href="/admin">
                    <i class="fa fa-dashboard fa-lw"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::segment(2) === 'site_meta' ? 'active' : '' }}">
                <a href="/admin/site_meta/">
                    <i class="fa fa-map fa-lw"></i>
                    <p>Site Meta</p>
                </a>
            </li>
            <li class="{{ Request::segment(2) === 'blog' ? 'active' : '' }}">
                <a href="/admin/blog/">
                    <i class="fa fa-map fa-lw"></i>
                    <p>Blogs</p>
                </a>
            </li>
            <li class="{{ Request::segment(2) === 'portfolio_items' ? 'active' : '' }}">
                <a href="/admin/portfolio/">
                    <i class="fa fa-map fa-lw"></i>
                    <p>Portfolio Items</p>
                </a>
            </li>
            <li>
                <a href="/logout">
                    <i class="fa fa-sign-out fa-lw"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>
