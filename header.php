<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="desktop-nav grid-container grid-x">
                <div class="cell large-2 medium-3 small-4">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri() . '/../../uploads/2019/01/anew-logo-final.png' ?>" class="nav-logo" />
                    </a>
                </div>
                <nav class="cell large-10 medium-9 small-8 grid-x">
                    <ul class="large-9 medium-8 small-12 menu medium-horizontal">
                        <li>
                            <a href="/get-started">
                                Get Started
                            </a>
                        </li>
                        <li>
                            <a href="/faq">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="/blog">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="/about-us">
                                About Us
                            </a>
                        </li>
                    </ul>
                    <ul class="large-3 medium-4 show-for-medium menu medium-horizontal align-right">
                        <li>
                            <a href="https://www.facebook.com/Anew-Accountability-and-Lifestyle-Coaching-326641551236587" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-square fa-lg"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/anew-llc/" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-linkedin fa-lg"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/yourstoryanew/" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/AnewLlc" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-twitter-square fa-lg"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Mobile Navigation -->
            <div class="header mobile-nav grid-container">
                <div class="" style="height: 55px; display: inline-block;">
                    <a href="/" style="position: absolute; top: 14px;">
                        <img src="<?php echo get_template_directory_uri() . '/../../uploads/2019/01/anew-logo-final.png' ?>" class="nav-logo" />
                    </a>
                </div>
                <div class="icon-container">
                    <div id="menuicon">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    </div>
                </div>
                <div class="mobile-menu">
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="/get-started/">Get Started</a>
                        </li>
                        <li class="menu-item">
                            <a href="/faq/">FAQ</a>
                        </li>
                        <li class="menu-item">
                            <a href="/blog/">Blog</a>
                        </li>
                        <li class="menu-item">
                            <a href="/about-us/">About Us</a>
                        </li>
                        <li class="menu-item menu-socials">
                            <a href="https://www.facebook.com/Anew-Accountability-and-Lifestyle-Coaching-326641551236587" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-square fa-lg"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/anew-llc/" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-linkedin fa-lg"></i>
                            </a>
                            <a href="https://www.instagram.com/yourstoryanew/" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                            <a href="https://twitter.com/AnewLlc" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-twitter-square fa-lg"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>