
<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta name="robots" content="all">
    <meta name="author" content="Buzzworthy Studio">
    <meta name="description" content="">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://buzzworthystudio.com/">
    <meta property="og:title" content="Buzzworthy Studio — Creative websites that convert">
    <meta property="og:description" content="">
    <meta property="og:image" content="https://buzzworthystudio.com/img/social.jpg">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="672">

    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="canonical" href="https://buzzworthystudio.com" />

    <title>Creative Projects - Buzzworthy Studio</title>
    <link rel="preload" href="dist/css/normalize.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!-- <noscript>
        <link rel="stylesheet" href="dist/css/normalize.css">
    </noscript> -->
    <link rel="preload" href="dist/css/styles.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!-- <noscript>
        <link rel="stylesheet" href="dist/css/styles.css">
    </noscript> -->
    <style type="text/css">
        #loading-overlay {
            position: fixed;
            opacity: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #1D2145;
            z-index: 9999;
            pointer-events: none;
            transition: opacity 600ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
        }

        .loading #loading-overlay {
            opacity: 1;
            pointer-events: auto;
        }

        .dg.ac {
            z-index: 1000 !important;
        }
    </style>

</head>

<body class="loading default">
    <section id="webglBubble"></section>

    <div id="hamburger">
        <svg width="30" height="61" viewBox="0 0 30 61" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1490_325)">
                <path class="lineA" d="M5.07849 11V60" stroke="#EEEEF2" stroke-width="2"/>
                <path class="lineB" d="M15.0785 16V45" stroke="#EEEEF2" stroke-width="2"/>
                <path class="lineC" d="M25.0784 1V50" stroke="#EEEEF2" stroke-width="2"/>
                <path class="pointA" fill-rule="evenodd" clip-rule="evenodd" d="M5.07843 11L9 8.4482L9 3.61273L5.07843 1L1.07843 3.61273L1 8.4482L5.07843 11Z" stroke="#EEEEF2" stroke-width="2"/>
                <path class="pointB" fill-rule="evenodd" clip-rule="evenodd" d="M25.0784 60L29 57.4482V52.6127L25.0784 50L21.0784 52.6127L21 57.4482L25.0784 60Z" stroke="#EEEEF2" stroke-width="2"/>
            </g>
        </svg>
    </div>
    <a href="" id="logo" class="nav-link" aria-label="Get back to the home page">
        <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M30 60.0371C46.5652 60.0371 60 46.6117 60 30.0371C60 13.4625 46.5652 0.0371094 30 0.0371094C13.4348 0.0371094 0 13.4625 0 30.0371C0 46.6117 13.4348 60.0371 30 60.0371ZM15.1902 35.6029L19.4911 9.18965L25.8292 16.5129C27.3329 18.0928 29.548 19.3106 32.7009 19.36H35.7406C35.9831 19.3435 36.2256 19.3435 36.4519 19.3435H36.452C45.1507 19.3435 48.2713 23.6717 46.5413 34.3357C45.1346 43.0085 39.5887 48.6038 32.0541 48.8507H30.8253H25.6998C16.322 48.8507 14.3009 42.5641 15.1902 35.6029ZM36.8655 34.1049C36.2242 38.0439 33.6587 40.7151 30.4013 40.7151C27.2452 40.7151 25.4899 38.027 26.1312 34.1049C26.7726 30.1658 29.3886 27.4947 32.5448 27.4947C35.8191 27.4947 37.5069 30.1658 36.8655 34.1049Z" fill="#fff" />
        </svg>
    </a>
    
    <!-- MENU -->
    <div id="menu-slide">
        <div>
            <nav id="links">
                <div>
                    <a class="nav-link mask-link" data-id="work" href="work.html" aria-label="Work"><span>Work</span>
                        <i class="dot work-dot">
                        <svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z" />
                            </svg>
                        </i>
                    </a>
                    <a class="nav-link mask-link" data-id="Services" href="services/" aria-label="Services"><span>Services</span>
                        <i class="dot work-dot"><svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z" />
                            </svg>
                        </i>
                    </a>
                    <a class="nav-link mask-link" data-id="Studio" href="studio" aria-label="Studio"><span>Studio</span>
                        <i class="dot work-dot">
                            <svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z" />
                            </svg>
                        </i>
                    </a>
                    <a class="nav-link mask-link" data-id="Contact" href="contact" aria-label="Contact"><span>Contact</span>
                        <i class="dot work-dot">
                            <svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z" />
                            </svg>
                        </i>
                    </a>
                </div>
            </nav>
            <div class="social bs-12">
                <a href="https://www.linkedin.com/company/buzzworthystudio/" target="_blank" class="text-link" aria-label="Linkedin">Linkedin</a>
                <a href="https://www.instagram.com/buzzworthy.studio/" target="_blank" class="text-link" aria-label="Instagram">Instagram</a>
                <a href="https://twitter.com/getbuzzworthy" target="_blank" class="text-link" aria-label="Twitter">Twitter</a>
                <a href="https://www.behance.net/BuzzworthyStudio" target="_blank" class="text-link" aria-label="Behance">Behance</a>
                <a href="https://dribbble.com/Buzzworthy/" target="_blank" class="text-link" aria-label="Dribbble">Dribbble</a>
            </div>
        </div>
    </div>

    <div class="page-to-page">
        <svg viewBox="0 0 1420 880" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path id="pageBgAnim2" d="M0 20C0 8.95429 8.86995 0 19.9156 0C68.0089 0 189.957 0 236.667 0C317.505 0 392.495 0 473.333 0C556.906 0 626.428 0 710 0C800.016 0 856.651 0 946.667 0C1067.34 0 1062.66 0 1183.33 0C1273.85 0 1361.73 0 1400 0C1411.05 0 1420 8.95431 1420 20V860C1420 871.046 1411.05 880 1400 880H20C8.95432 880 0 871.046 0 860V20Z" fill="#1D2145"/>
        </svg>
        <svg viewBox="0 0 1420 880" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path id="pageBgAnim" d="M0 20C0 8.95429 8.86995 0 19.9156 0C68.0089 0 189.957 0 236.667 0C317.505 0 392.495 0 473.333 0C556.906 0 626.428 0 710 0C800.016 0 856.651 0 946.667 0C1067.34 0 1062.66 0 1183.33 0C1273.85 0 1361.73 0 1400 0C1411.05 0 1420 8.95431 1420 20V860C1420 871.046 1411.05 880 1400 880H20C8.95432 880 0 871.046 0 860V20Z" fill="#1D2145" />
        </svg>
    </div>

    <!-- AJAX CONTENT HOLDER -->
    <main id="smooth-wrapper">
        <a href="contact" id="fixed-cta" title="Contact us" class="nav-link">
            <i></i>
            <span>
                <svg viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L13 11.5858L24.2929 0.292893C24.6834 -0.0976311 25.3166 -0.0976311 25.7071 0.292893C26.0976 0.683417 26.0976 1.31658 25.7071 1.70711L14.4142 13L25.7071 24.2929C26.0976 24.6834 26.0976 25.3166 25.7071 25.7071C25.3166 26.0976 24.6834 26.0976 24.2929 25.7071L13 14.4142L1.70711 25.7071C1.31658 26.0976 0.683419 26.0976 0.292895 25.7071C-0.0976295 25.3166 -0.0976295 24.6834 0.292895 24.2929L11.5858 13L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683418 0.292893 0.292893Z"
                        fill="white" />
                    <path
                        d="M16.9996 9.0001C17.9996 7.5001 16.8483 8.11453 17.0991 7.5C14.0991 10.5 11.8892 10.4868 8.88916 7.48682C9.72249 8.82015 11.4996 11.6 11.4996 12C11.4996 12.4 12.8329 12.5 13.4996 12.5L16.9996 9.0001Z"
                        fill="white" />
                    <path
                        d="M8.99473 9.00777C7.49473 8.00777 8.10916 9.15899 7.49463 8.9082C10.4946 11.9082 10.4814 14.1182 7.48145 17.1182C8.81478 16.2848 11.5946 14.5078 11.9946 14.5078C12.3946 14.5078 12.4946 13.1744 12.4946 12.5078L8.99473 9.00777Z"
                        fill="white" />
                    <path
                        d="M8.99087 16.9936C7.99087 18.4936 9.14208 17.8792 8.89129 18.4937C11.8913 15.4937 14.1013 15.5069 17.1013 18.5069C16.2679 17.1736 14.4909 14.3937 14.4909 13.9937C14.4909 13.5937 13.1575 13.4937 12.4909 13.4937L8.99087 16.9936Z"
                        fill="white" />
                    <path
                        d="M16.9867 16.9861C18.4867 17.9861 17.8722 16.8349 18.4868 17.0857C15.4868 14.0857 15.5 11.8757 18.5 8.8757C17.1666 9.70903 14.3868 11.4861 13.9868 11.4861C13.5868 11.4861 13.4868 12.8194 13.4868 13.4861L16.9867 16.9861Z"
                        fill="white" />
                </svg>
            </span>
            <svg id="pencil" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="handle-a" fill-rule="evenodd" clip-rule="evenodd" d="M12.2601 16.0778C12.1641 16.1738 12.2321 16.3379 12.3679 16.3379V16.3379C12.4073 16.3379 12.4452 16.3226 12.4736 16.2953L14.9293 13.9292L17.3586 11.4999C17.4027 11.4558 17.4215 11.3924 17.4085 11.3314V11.3314C17.3781 11.1886 17.2015 11.1364 17.0983 11.2396L12.2601 16.0778Z" stroke="white" stroke-width="2"/>
                <path class="tip-a" fill-rule="evenodd" clip-rule="evenodd" d="M14.9293 13.9292L12.5735 15.5735L16.5735 11.5735L14.9293 13.9292Z" fill="white"/>
                <path class="handle-b" fill-rule="evenodd" clip-rule="evenodd" d="M27.4142 29.9237C26.6332 30.7047 26.6332 31.9711 27.4142 32.7521L43.5938 48.9316C43.8613 49.1992 44.1993 49.3854 44.5684 49.4685L50.8933 50.8933L49.4685 44.5685C49.3854 44.1993 49.1992 43.8613 48.9316 43.5938L32.7521 27.4142C31.971 26.6332 30.7047 26.6332 29.9237 27.4142L27.4142 29.9237Z" stroke="white" stroke-width="2"/>
                <path class="tip-b" fill-rule="evenodd" clip-rule="evenodd" d="M49.7919 50.1349L45 49L49 45L49.7919 50.1349Z" fill="white"/>
            </svg>
        </a>

        <!-- SMOOTH SCROLLING CONTENT -->
        <div class="content work webglActive" data-work="default">
            <div id="breadcrumb">
                <span class="bs-tech hero-in"><a href="index.html" class="text-link">Buzzworthy</a></span>
                <span class="bs-tech active hero-in">Work</span>
            </div>


            <!-- SLIDER  -->
            <section class="work-slider grid-inner">
                <div class="swipe-info bs-tech" data-layout="1">Swipe to change</div>
                <div id="work-switch">
                    <div class="icon">
                        <div>
                            <i></i><i></i><i></i><i></i><i></i>
                        </div>
                        <div class="close-icon">
                            <i></i><i></i>
                        </div>
                    </div>
                    <span class="bs-14 bs-tech upper open-thumbs">All projects</span>
                    <span class="bs-14 bs-tech upper close-thumbs">Close</span>
                </div>

                <!-- LAYOUT A -->
                <div class="project-link" data-layout="1">
                    <a href="#" class="circle-link view" aria-label="View our latest award">
                        <div class="circle-icon"><span></span></div>
                    </a>
                </div>
                <div id="slide-count" data-layout="1">
                    <ul class="bs-12 bs-tech">
                        <li id="slide-prev">009</li>
                        <li id="slide-cur">001</li>
                        <li id="slide-next">002</li>
                    </ul>
                    <span class="bs-12 bs-tech">&nbsp;&nbsp; / &nbsp; 009</span>
                </div>
                <div class="slider-inner" data-layout="1">
                    <div class="work-service bs-tech bs-xl-5 bs-xl-os-13 bs-xs-os-0">
                        <div>
                            <ul id="prevService" class="upper">
                                <li>Website Design</li>
                                <li>Development</li>
                                <li>Marketing, SEO</li>
                            </ul>
                            <ul id="curService" class="upper">
                                <li>Website Design</li>
                                <li>Development</li>
                                <li>Shopify</li>
                                <li>SEO</li>
                            </ul>
                            <ul id="nextService" class="upper">
                                <li>Website Design</li>
                                <li>Animations</li>
                                <li>Creative Development</li>
                                <li>SEO</li>
                            </ul>
                        </div>
                    </div>
                    <div class="work-slide bs-grid grid-middle xs-wrap">
                        <div class="bs-xl-9">
                            <figure>
                                <img data-page="8" src="img/work/thumb-md-1x.webp" alt="Modern MD view of the Brooklyn bridge">
                                <img data-page="7" src="img/work/thumb-ho-1x.webp" alt="Helias oils image of hand holding herbs">
                                <img data-page="6" src="img/work/thumb-hp-1x.webp" alt="Hudson properties building render view with palms">
                                <img data-page="5" src="img/work/thumb-be-1x.webp" alt="Beemok girl standing in the evening in front of a tree">
                                <img data-page="4" src="img/work/thumb-oa-1x.webp" alt="Ocean Agency picture of sea turtle in azure sea">
                                <img data-page="3" src="img/work/thumb-hy-1x.webp" alt="Hoboken Yogi sand beach with palm view">
                                <img data-page="2" src="img/work/thumb-va-1x.webp" alt="Valaclava 3d render with garment">
                                <img data-page="1" src="img/work/thumb-op-1x.webp" alt="Shot from the ad">
                                <img data-page="0" class="lazy selected" src="img/work/thumb-ssi-1x.webp" data-src="img/work/thumb-ssi-1x.webp" data-src-big="img/work/thumb-ssi-2x.webp"   alt="Cosmonaut in space">
                            </figure>
                        </div>
                        <div id="work-titles" class="bs-xl-8 bs-xl-os-4 bs-xs-22 bs-xs-os-0 bs-50 upper">
                            <ul class="xs-center">
                                <li>
                                    <h2 id="prevTitle"><a href="work/modern-md" class="circle-link">
                                        <div class="circle-icon">
                                            <i></i>
                                            <span><img src="img/svg/arrow-hex.svg" alt="arrow icon with hexagon tip"><img src="img/svg/arrow-hex.svg" alt="arrow icon with hexagon tip"></span>
                                        </div>
                                        Modern&nbsp;MD</a>
                                    </h2>
                                </li>
                                <li>
                                    <h2 id="curTitle"><a href="work/slingshot.html" class="circle-link">
                                        <div class='circle-icon'>
                                            <i></i>
                                            <span><img src='img/svg/arrow-hex.svg'><img src='img/svg/arrow-hex.svg'></span>
                                        </div>
                                        Sling&nbsp;Shot</a>
                                    </h2>
                                </li>
                                <li>
                                    <h2 id="nextTitle"><a href="work/opositive" class="circle-link"><div class="circle-icon">
                                        <i></i>
                                        <span><img src="img/svg/arrow-hex.svg" alt="arrow icon with hexagon tip"><img src="img/svg/arrow-hex.svg" alt="arrow icon with hexagon tip"></span>
                                    </div>O&nbsp;Positive</a></h2>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- LAYOUT 2 -->
                <div class="layout-b scaled" data-layout="2">
                    <div class="bs-grid grid-around">
                        <article data-thumb="0">
                            <a href="work/slingshot">
                                <figure>
                                    <img class="lazy selected" src="img/work/thumb-ssi-prel.webp" data-src="img/work/thumb-ssi-1x.webp" data-src-big="img/work/thumb-ssi-2x.webp" alt="Cosmonaut in space">
                                </figure>
                                <h2 class="bs-30 upper">Sling Shot</h2>
                            </a>
                        </article>
                        <article data-thumb="1">
                            <a href="work/opositive">
                                <figure>
                                    <img class="lazy selected" src="img/work/thumb-op-prel.webp"
                                        data-src="img/work/thumb-op-1x.webp" data-src-big="img/work/thumb-op-2x.webp"
                                        alt="Man with woman at the garden party">
                                </figure>
                                <h2 class="bs-30 upper">O Positive</h2>
                            </a>
                        </article>
                        <article data-thumb="2">
                            <a href="work/valaclava">
                                <figure>
                                    <img class="lazy selected" src="img/work/thumb-va-prel.webp"
                                        data-src="img/work/thumb-va-1x.webp" data-src-big="img/work/thumb-va-2x.webp"
                                        alt="Valaclava 3d render with garment">
                                </figure>
                                <h2 class="bs-30 upper">Valaclava</h2>
                            </a>
                        </article>
                        <article data-thumb="3">
                            <a href="work/hoboken-yogi">
                                <figure>
                                    <img class="lazy selected" src="img/work/thumb-hy-prel.webp"
                                        data-src="img/work/thumb-hy-1x.webp" data-src-big="img/work/thumb-hy-2x.webp"
                                        alt="Sandy beach with palms">
                                </figure>
                                <h2 class="bs-30 upper">Hoboken Yogi</h2>
                            </a>
                        </article>
                        <article data-thumb="4">
                            <a href="work/ocean-agency">
                                <figure>
                                    <img class="lazy selected" src="img/work/thumb-oa-prel.webp"
                                        data-src="img/work/thumb-oa-1x.webp" data-src-big="img/work/thumb-oa-2x.webp"
                                        alt="Fish in coral">
                                </figure>
                                <h2 class="bs-30 upper">Ocean Agency</h2>
                            </a>
                        </article>
                        <article data-thumb="5">
                            <a href="work/beemok">
                                <figure>
                                    <img class="lazy selected" src="img/work/thumb-be-prel.webp"
                                        data-src="img/work/thumb-be-1x.webp" data-src-big="img/work/thumb-be-2x.webp"
                                        alt="Hotel garden with fireplace">
                                </figure>
                                <h2 class="bs-30 upper">Beemok</h2>
                            </a>
                        </article>
                        <article data-thumb="6">
                            <a href="work/hudson-properties">
                                <figure>
                                    <img class="lazy selected" src="img/work/thumb-hp-prel.webp"
                                        data-src="img/work/thumb-hp-1x.webp" data-src-big="img/work/thumb-hp-2x.webp"
                                        alt="Holywood modern building">
                                </figure>
                                <h2 class="bs-30 upper">Hudson Prop.</h2>
                            </a>
                        </article>
                        <article data-thumb="7">
                            <a href="work/helias">
                                <figure>
                                    <img class="lazy selected" src="img/work/thumb-ho-prel.webp"
                                        data-src="img/work/thumb-ho-1x.webp" data-src-big="img/work/thumb-ho-2x.webp"
                                        alt="Oily hand with herbs">
                                </figure>
                                <h2 class="bs-30 upper">Helias Oils</h2>
                            </a>
                        </article>
                        <article data-thumb="8">
                            <a href="work/modern-md">
                                <figure>
                                    <img class="lazy selected" src="img/work/thumb-md-prel.webp"
                                        data-src="img/work/thumb-md-1x.webp" data-src-big="img/work/thumb-md-2x.webp"
                                        alt="Brooklyn bridge">
                                </figure>
                                <h2 class="bs-30 upper">Modern MD</h2>
                            </a>
                        </article>
                    </div>
                </div>
                <div class="blur-circle"></div>
            </section>

        </div>
    </main>


    <!-- scripts -->
    <script src="dist/js/app.min.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.147.0/three.min.js"
        integrity="sha512-GWXLkqxMENYgBdQvA/lTeOV+R2auhasgKQxjMTWBFt3Z6GJVZ9owiyAMOzz0Wt6J1ri8bf/g2kHJV0uvWpJTuw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="dist/js/utils/shaderUtils.js"></script>
    <script src="dist/js/honey-ball-src/shaders/bubble-shaders.js"></script>
    <script src="dist/js/honey-ball-src/shaders/honey-ball-shaders.js"></script>
    <script src="dist/js/honey-ball-src/bubbles-fbo.js"></script>
    <script src="dist/js/honey-ball-src/cam-parallax.js"></script>
    <script src="dist/js/honey-ball-src/honey-ball.js"></script>
    <script src="dist/js/honey-ball-src/main-three-scene.js"></script>
    <script src="dist/js/main.js"></script>


</body>

</html>