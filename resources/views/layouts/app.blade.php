<!DOCTYPE html>
<html data-wf-domain="timeline-cloneable-section.webflow.io" data-wf-page="632446b2f484600f7198b501"
    data-wf-site="632446b2f4846027de98b503">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Portfolio</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="{{ asset('assets/632446b2f4846027de98b503/css/timeline-cloneable-section.webflow.c20f9ca03.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="{{ asset('assets/6304d6fb2f2a4330607aeb6b/6304d6fb2f2a43da6d7aeb78_RiseVerse-Favicon.jpg') }}"
        rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('assets/6304d6fb2f2a4330607aeb6b/6304d6fb2f2a433fb97aeb79_RiseVerse-Webclip.jpg') }}"
        rel="apple-touch-icon" />
    <script src="{{ asset('assets/ajax/libs/webfont/1.6.26/webfont.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic"]
            }
        });
    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
</head>

<body>
    <div class="page-wrapper">
        <div class="global-styles w-embed">
            <style>
                /* Snippet gets rid of top margin on first element in any rich text*/
                .w-richtext>:first-child {
                    margin-top: 0;
                }

                /* Snippet gets rid of bottom margin on last element in any rich text*/
                .w-richtext>:last-child,
                .w-richtext ol li:last-child,
                .w-richtext ul li:last-child {
                    margin-bottom: 0;
                }

                /* Snippet prevents all click and hover interaction with an element */
                .clickable-off {
                    pointer-events: none;
                }

                /* Snippet enables all click and hover interaction with an element */
                .clickable-on {
                    pointer-events: auto;
                }

                /* Snippet enables you to add class of div-square which creates and maintains a 1:1 dimension of a div.*/
                .div-square::after {
                    content: "";
                    display: block;
                    padding-bottom: 100%;
                }

                /*Hide focus outline for main content element*/
                main:focus-visible {
                    outline: -webkit-focus-ring-color auto 0px;
                }

                /* Make sure containers never lose their center alignment*/
                .container-medium,
                .container-small,
                .container-large {
                    margin-right: auto !important;
                    margin-left: auto !important;
                }

                /*Reset buttons, and links styles*/
                a {
                    color: inherit;
                    text-decoration: inherit;
                    font-size: inherit;
                }

                /*Apply "..." after 3 lines of text */
                .text-style-3lines {
                    display: -webkit-box;
                    overflow: hidden;
                    -webkit-box-orient: vertical;
                }

                /*Apply "..." after 2 lines of text */
                .text-style-2lines {
                    display: -webkit-box;
                    overflow: hidden;
                    -webkit-box-orient: vertical;
                }

                .w-webflow-badge {
                    position: fixed !important;
                    display: None !important;
                    visibility: hidden !important;
                }
            </style>

            <body>
        </div>
        <!-- Navbar -->
        <div data-animation="default" class="navbar_component w-nav" data-easing2="ease"
            fs-scrolldisable-element="smart-nav" data-easing="ease" data-collapse="medium"
            data-w-id="4ffe5aa5-3693-44de-bf1b-063581e733fc" role="banner" data-duration="400">
            <div class="navbar_container">
                <a href="{{ url('/') }}" id="w-node-_4ffe5aa5-3693-44de-bf1b-063581e733fe-7198b501"
                    class="navbar_logo-link w-nav-brand">
                    <div class="typo-logo">Projects Web <span class="text-color-gold">.</span>
                    </div>
                </a>
                <nav role="navigation" id="w-node-_4ffe5aa5-3693-44de-bf1b-063581e73403-7198b501"
                    class="navbar_menu is-page-height-tablet w-nav-menu">
                    <a href="{{ url('/') }}" class="navbar_link w-nav-link">Home</a>
                    <a href="{{ url('/portfolio') }}" class="navbar_link w-nav-link">Portfolio</a>
                    <a href="{{ url('/contact') }}" class="button is-hamburger w-button">Contact Us </a>
                </nav>
                <div id="w-node-_4ffe5aa5-3693-44de-bf1b-063581e73418-7198b501" class="navbar_button-wrapper">
                    <a href="{{ url('/contact') }}" class="button w-button">Contact Us </a>
                    <div class="navbar_menu-button w-nav-button">
                        <div class="menu-icon">
                            <div class="menu-icon2_line-top"></div>
                            <div class="menu-icon2_line-middle">
                                <div class="menu-icon_line-middle-inner"></div>
                            </div>
                            <div class="menu-icon2_line-bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main body -->
        @yield('content')

        <!-- Footer -->
        <footer class="footer_component wf-section">
            <div class="foooter-wrapper">
                <div class="footer-bottom">
                    <div class="footer-legal">
                        <div class="footer-legal-copyright">
                            <div class="copyright">Company - 2024 Copyright </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="{{ asset('assets/js/jquery-3.5.1.min.dc5e7f18c8.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/632446b2f4846027de98b503/js/webflow.60f3a8227.js') }}" type="text/javascript"></script>
