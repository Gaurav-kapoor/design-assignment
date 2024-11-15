
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="<?php echo get_template_directory_uri(); ?>/styles/hero-banner.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/styles/header.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/styles/cards-with-content.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/styles/tabs-two-column.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/styles/caseStudy.css" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        html {
            font-family: "Lato", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            scroll-behavior: smooth;
        }

        .container {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 80px;
            position: relative;
        }

        section {
            position: relative;
            width: 100%;
            height: 100%;
            padding: 20px 0;
        }

        .btn-prim {
            padding: 10px 14px;
            border-radius: 0px;
            appearance: none;
            box-shadow: none;
            border: 1px solid #2699F6;
            border-width: 0;
            border-left-width: 4px;
            position: relative;
            background: #054C7E;
            cursor: pointer;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            font-family: "Lato", serif;

        }

        .title {
            text-align: center;
        }

        .title h2 {
            color: #054C7E;
            font-size: 40px;
            font-weight: 700;
            line-height: 50px;
        }

        .title h2 span {
            color: #2699F6;
            font-size: 40px;
            font-weight: 700;
            line-height: 50px;
        }

        .title p {
            color: #596F98;
            font-size: 17px;
            font-weight: 400;
            line-height: 35px;
        }
    </style>
</head>

<body>
    <header>
        <div class="top-nav">
            <div class="container">
                <div class="wrapper">
                    <div class="socialMedia">
                        <ul>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Linkdien.svg"></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg"></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/x.svg"></a></li>
                        </ul>
                    </div>
                    <div class="sales">
                        <button type="button" class="btn-prim">Talk To Sales</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#">Behavioral Health Management Services</a></li>
                        <li><a href="#">Mental Health Outcomes</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Resources</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section id="hero-banner">
        <div class="container">
            <div class="column-wrapper wow animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="content-wrapper">
                    <h1><span>Behavioral Health</span> Solutions for Evidence-Based Care</h1>
                    <p>Customizable. Scalable. Seamless.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="cards-with-content">
        <div class="container">
            <div class="cards-wrapper">
                <div class="cards wow animate__slideInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sitemap.svg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sitemap1.svg" class="hoverImg">
                    <p>Full-Service Behavioral
                        Health Management
                    </p>
                </div>
                <div class="cards wow animate__slideInUp" data-wow-duration="0.7s" data-wow-delay="0.7s">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/message.svg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/message1.svg" class="hoverImg">
                    <p>Behavioral Health
                        Consulting
                    </p>
                </div>
                <div class="cards wow animate__slideInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/chartgantt.svg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/chartgantt1.svg" class="hoverImg">
                    <p>Mental Health Outcomes
                        Data Analytics
                    </p>
                </div>
                <div class="cards wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pills.svg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pills1.svg" class="hoverImg">
                    <p>Med Detox Behavioral
                        Health Management
                    </p>
                </div>
                <div class="cards wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/house-medical.svg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/house-medical1.svg" class="hoverImg">
                    <p>Outpatient Behavioral
                        Health Management
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="caseStudy">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/case- study.png">
        </div>
    </section>

    <section id="tabs-two-column">
        <div class="container">
            <div class="title wow animate__fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <p>More than 40,000 lives served</p>
                <h2><span>Why</span> Horizon Health</h2>
            </div>
            <div class="tabs">
                <p>Starting a New Behavioral Health Program</p>
                <p>Improving an Existing Program</p>
                <p>Solving challenges where you need help</p>
            </div>
            <div class="tabs-wrapper">
                <div class="show-tabs show">
                    <div class="content">
                        <h4>Build a Behavioral Health Program that Works</h4>
                        <p>Horizon Health has a proven history of assisting hospitals in managing their behavioral
                            health programs.
                            Provide your patients with better services by partnering with an experienced behavioral
                            health
                            management company that builds stable, effective psychiatric programs.
                        </p>
                        <button type="button" class="btn-prim">Take Our New Program Assessment</button>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image550.png">
                </div>
                <div class="show-tabs">
                    <div class="content">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac ornare justo.
                             Sed eget tincidunt sem. Sed convallis egestas dui dignissim rhoncus. Aliquam cursus
                              erat nec pellentesque convallis. Aliquam odio lorem, pellentesque sed ultricies ut, 
                              ultrices in nibh. Nullam ex elit, ultricies sit amet dui sed,
                        </p>
                        <button type="button" class="btn-prim">Take Our New Program Assessment</button>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image550.png">
                </div>
                <div class="show-tabs">
                    <div class="content">
                        <h4>Aliquam ac ornare justo</h4>
                        <p>Horizon Health has a proven history of assisting hospitals in managing their behavioral
                            health programs.
                            Provide your patients with better services by partnering with an experienced behavioral
                            health
                            management company that builds stable, effective psychiatric programs.
                        </p>
                        <button type="button" class="btn-prim">Take Our New Program Assessment</button>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image550.png">
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"
        integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new WOW({ animateClass: 'animate__animated' }).init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js"
        integrity="sha512-KgffulL3mxrOsDicgQWA11O6q6oKeWcV00VxgfJw4TcM8XRQT8Df9EsrYxDf7tpVpfl3qcYD96BpyPvA4d1FDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js"
        integrity="sha512-KgffulL3mxrOsDicgQWA11O6q6oKeWcV00VxgfJw4TcM8XRQT8Df9EsrYxDf7tpVpfl3qcYD96BpyPvA4d1FDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/header.js"></script>
</body>

</html>