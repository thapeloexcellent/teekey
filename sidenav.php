<!-- Add the Navbar to the right side of the website -->

<nav class="active" id="sidebar" style="z-index: 9999999999999999999999999999;">
    <div class="custom-menu" style="z-index: 9999999999999999999999999999;">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
    <div class="p-4">
        <h1>
            <a href="index.html" class="logo">AWE <span>Africa</span></a>
        </h1>

        <?php wp_nav_menu([
                'theme_location' => 'primary',
                'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container' => 'div',
                'container_class' => 'sidenav',
                'menu_class' => 'list-unstyled components mb-5',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            ]);
        ?>

        <div class="mb-5">
            <h3 class="h6 mb-3">Subscribe for newsletter</h3>
            <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                    <div class="icon"><span class="icon-paper-plane"></span></div>
                    <input type="text" class="form-control" placeholder="Enter Email Address" />
                </div>
            </form>
        </div>

        <div class="footer">
            <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                document.write(new Date().getFullYear());
                </script>
                All rights reserved | Created by
                <a href="https://kayiseit.co.za" target="_blank">KAYISE IT</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
</nav>