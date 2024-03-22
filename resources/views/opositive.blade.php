
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

    <title>O Positive - Buzzworthy Case Study</title>
    <link rel="preload" href="dist/css/normalize.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!-- <noscript>
        <link rel="stylesheet" href="dist/css/normalize.css">
    </noscript> -->
    <link rel="preload" href="dist/css/styles.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!-- <noscript>
        <link rel="stylesheet" href="dist/css/styles.css">
    </noscript> -->

    <style type="text/css">
        body, #hero {
            min-height: 100vh;
        }
        #loading-overlay {
            position: fixed;
            opacity: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #121212;
            z-index: 9999;
            pointer-events: none;
            transition: opacity 600ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
        }

        .loading #loading-overlay {
            opacity: 1;
            pointer-events: auto;
        }
    </style>

</head>

<body class="loading">
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
        <a href="contact" id="fixed-cta" title="Contact us">
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
        
        <div id="split-cursor">
            <span><i></i><i></i></span>
        </div>

        <!-- SMOOTH SCROLLING CONTENT -->
        <div class="content work-detail webglActive" data-work="op">

            <div id="breadcrumb">
                <span class="bs-tech hero-in"><a href="" class="text-link">Buzzworthy</a></span>
                <span class="bs-tech hero-in"><a href="work.html" class="text-link">Work</a></span>
                <span class="bs-tech active hero-in">O Positive</span>
            </div>

            <!-- HERO SECTION -->
            <section id="hero" class="grid-inner">
                <h1 class="bs-240 upper center hero-split chars">O Positive</h1>
                <span class="date bs-14 bs-tech upper hero-in">TBD 2023</span>
                <span class="scroll-to bs-14 bs-tech upper hero-in" data-scroll="workIntro">scroll for details</span>
            </section>

            <!-- LISTING -->
            <section id="workIntro" class="grid-inner xl-top-1">
                <div class="line-anim">
                    <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                        <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145"
                            stroke="#EEEEF2" fill-rule="evenodd" />
                    </svg>
                    <div></div>
                    <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                        <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145"
                            stroke="#EEEEF2" fill-rule="evenodd" />
                    </svg>
                </div>
                <div class="bs-grid xl-top-3 xs-top-2 xl-bottom-3 xs-bottom-2 sm-wrap">
                    <aside class="bs-xl-4 bs-sm-6 bs-xs-20">
                        <h3 class="bs-tech upper bs-12 xl-bottom-1">Services</h3>
                        <ul class="split lines">
                            <li>Digital Strategy</li>
                            <li>Web Design</li>
                            <li>Motion Design</li>
                            <li>Front-end Development</li>
                            <li>Prismic CMS</li>
                            <li>SEO</li>
                            <li>Website Support</li>
                        </ul>
                    </aside>
                    <div class="bs-xl-12 bs-xl-os-2 bs-sm-11 bs-sm-os-1 bs-xs-20 bs-xs-os-0 xs-top-2">
                        <div>
                            <h3 class="bs-tech upper bs-12 xl-bottom-1">The Project</h3>
                            <p class="split lines bs-40">A globally acclaimed production company featuring a roster of directors with expertise in comedic storytelling and animal husbandry. O-Positive has many commercials with famous actors that we see on the daily, including our favorite Bill Murray, so when they approached us to bring that storytelling to life, we knew we had to keep it funny.</p>    
                        </div>                       
                    </div>
                </div>
                <div class="line-anim">
                    <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                        <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145"
                            stroke="#EEEEF2" fill-rule="evenodd" />
                    </svg>
                    <div></div>
                    <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                        <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145"
                            stroke="#EEEEF2" fill-rule="evenodd" />
                    </svg>
                </div>
            </section>

            <!-- GALLERY -->
            <section id="project-gallery" class="grid-inner xl-top-2">
                <div id="gallery-btn">
                    <i></i>
                    <span class="bs-tech">next</span>
                </div>
                <div class="bs-grid grid-start xs-wrap">
                    <div class="bs-xl-7 bs-xs-16 pg-left view">
                        <figure class="bs-img pg-first selected" data-list="0">
                            <img class="lazy" src="img/work/op/g-01-prel.webp"
                                data-src="img/work/op/g-01-1x.webp"
                                data-src-mobile="img/work/op/g-01-m.webp"
                                data-src-big="img/work/op/g-01-2x.webp" alt="Mike Tyson Ad">
                        </figure>
                        <figure class="bs-img" data-list="2">
                            <img class="lazy" src="img/work/op/g-03-prel.webp"
                                data-src="img/work/op/g-03-1x.webp"
                                data-src-mobile="img/work/op/g-03-m.webp"
                                data-src-big="img/work/op/g-03-2x.webp" alt="Man in bar smiling while holding beer">
                        </figure>
                        <figure class="bs-img" data-list="4">
                            <img class="lazy" src="img/work/op/g-05-prel.webp"
                                data-src="img/work/op/g-05-1x.webp"
                                data-src-mobile="img/work/op/g-05-m.webp"
                                data-src-big="img/work/op/g-05-2x.webp" alt="Jason Momoa looking very slim holding guitar">
                        </figure>
                        <figure class="bs-img" data-list="6">
                            <img class="lazy" src="img/work/op/g-07-prel.webp"
                                data-src="img/work/op/g-07-1x.webp"
                                data-src-mobile="img/work/op/g-07-m.webp"
                                data-src-big="img/work/op/g-07-2x.webp" alt="Man with pixelated hand with beer at the garden party">
                        </figure>
                    </div>
                    <div class="bs-xl-10 bs-xl-os-1 bs-xs-16 bs-xs-os-4 pg-right xs-top-1 view">
                        <figure class="bs-img pg-first selected" data-list="1">
                            <img class="lazy" src="img/work/op/g-02-prel.webp"
                                data-src="img/work/op/g-02-1x.webp"
                                data-src-mobile="img/work/op/g-02-m.webp"
                                data-src-big="img/work/op/g-02-2x.webp" alt="Woman sleeping on couch with her bottom up">
                        </figure>
                        <figure class="bs-img" data-list="3">
                            <img class="lazy" src="img/work/op/g-06-prel.webp"
                                data-src="img/work/op/g-06-1x.webp"
                                data-src-mobile="img/work/op/g-06-m.webp"
                                data-src-big="img/work/op/g-06-2x.webp" alt="Actor sitting on iceberg with illustration figure on right">
                        </figure>
                        <figure class="bs-img" data-list="5">
                            <img class="lazy" src="img/work/op/g-04-prel.webp"
                                data-src="img/work/op/g-04-1x.webp"
                                data-src-mobile="img/work/op/g-04-m.webp"
                                data-src-big="img/work/op/g-04-2x.webp" alt="Actor holding a packed bread in the kitchen">
                        </figure>
                        <figure class="bs-img" data-list="7">
                            <img class="lazy" src="img/work/op/g-08-prel.webp"
                                data-src="img/work/op/g-08-1x.webp"
                                data-src-mobile="img/work/op/g-08-m.webp"
                                data-src-big="img/work/op/g-08-2x.webp" alt="A cop aiming with a battery to a driver near his window">
                        </figure>
                    </div>
                </div>
                <div
                    class="work-copy-box bs-xl-10 bs-xl-os-8 bs-sm-14 bs-sm-os-2 bs-xs-20 bs-xs-os-0 xl-top-2 xs-top-1">
                    <h2 class="bs-80 upper split chars">Small but mighty</h2>
                    <div class="bs-grid xl-top-1">
                        <div class="bs-xl-3 bs-sm-5 bs-xs-8">
                            <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i>Challenge</h2>
                        </div>
                        <div class="box-copy bs-xl-6 bs-sm-9 bs-xs-12">
                            <p class="bs-14 split lines">A team of just 8 directors proves that size doesn't limit them from collaborating with the world's most prestigious companies and delivering top-tier work. We've incorporated high-quality imagery throughout the site, featuring some of the industry's biggest names. This not only spotlights the star power but also underscores the excellence of their work through riveting visuals. </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- BGIMG SINGLE SCREEN IMAGE -->
            <section class="big-image center xl-top-4 xs-top-3">
                <figure class="bs-img">
                    <div class="parallax-img">
                        <img class="lazy" src="img/work/op/big-01-prel.webp"
                        data-src="img/work/op/big-01-1x.webp"
                        data-src-mobile="img/work/op/mobile-big-01-m.webp"
                        data-src-big="img/work/op/big-01-2x.webp" alt="Arizona scenery">
                    </div>
                </figure>
                <div class="grid-inner bs-grid grid-middle">
                    <div class="screen img-view">
                        <video class="video" autoplay loop muted playsinline poster="img/work/op/screen-01-1x.webp">
                            <source src="video/op/opos-mix.mp4" type="video/mp4">
                            Your browser does not support the video tag
                        </video>
                    </div>
                </div>
            </section>

            <!-- 3 MOBILES -->
            <section class="mobiles-only xl-top-4 xs-top-3">
                <div class="grid-inner">
                    <div class="bs-grid xl-top-3">
                        <div class="mobile bs-xl-5 bs-xs-8">
                            <figure class="bs-img">
                                <img class="lazy" src="img/work/op/mobile-01-prel.webp"
                                    data-src="img/work/op/mobile-01-1x.webp"
                                    data-src-mobile="img/work/op/mobile-01-m.webp"
                                    data-src-big="img/work/op/mobile-01-2x.webp" alt="Mobile screen of intro loading screen">
                            </figure>
                        </div>
                        <div class="mobile bs-xl-5 bs-xl-os-8 bs-xs-8 bs-xs-os-4" data-speed=".8">
                            <figure class="bs-img">
                                <img class="lazy" src="img/work/op/mobile-02-prel.webp"
                                    data-src="img/work/op/mobile-02-1x.webp"
                                    data-src-mobile="img/work/op/mobile-02-m.webp"
                                    data-src-big="img/work/op/mobile-02-2x.webp" alt="Mobile screen of director detail page">
                            </figure>
                        </div>
                    </div>
                    <div class="mobile bs-xl-5 bs-xl-os-4 bs-xs-8 bs-xs-os-2 xl-top-3 xs-top-2">
                        <figure class="bs-img">
                            <img class="lazy" src="img/work/op/mobile-03-prel.webp"
                                data-src="img/work/op/mobile-03-1x.webp"
                                data-src-mobile="img/work/op/mobile-03-m.webp"
                                data-src-big="img/work/op/mobile-03-2x.webp" alt="Mobile screen of about page">
                        </figure>
                    </div>
                </div>
            </section>

            <!-- BIG PAGE SHOWCASE  -->
            <section class="big-page-wrap grid-inner img-view">
                <div class="work-copy-box bs-xl-9 bs-xl-os-4 bs-xs-20 bs-xs-os-0 xl-top-4 xs-top-3">
                    <h2 class="bs-80 upper split chars">Sleek, Striking and Sophisticated</h2>
                    <div class="bs-grid xl-top-1 sm-wrap">
                        <div class="bs-xl-3 bs-sm-9 bs-xs-8">
                            <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i>Visual Design</h2>
                        </div>
                        <div class="box-copy bs-xl-6 bs-sm-9 bs-xs-12 sm-top-1 xs-top-0">
                            <p class="bs-14 split lines">O-Positive videos stop you in your tracks. To mirror this style, we've ensured their website demands that same attention. Featuring a cinematic dark backdrop, bold and imposing fonts, and a vibrant secondary orange font that leaps off the screen, our native design is a true reflection of their purely original work.</p>
                        </div>
                    </div>
                </div>
                <div class="big-page xl-top-3 xs-top-1">
                    <figure class="bs-img">
                        <img class="lazy" src="img/work/op/big-page-a-1-prel.webp"
                            data-src="img/work/op/big-page-a-1-1x.webp"
                            data-src-mobile="img/work/op/big-page-a-1-m.webp"
                            data-src-big="img/work/op/big-page-a-1-2x.webp" alt="Website screen for about page part 1">
                    </figure>
                </div>
            </section>

             <!-- BGIMG TOP OFFSET SCREEN IMAGE -->
             <section class="big-image double-offset big-plus-screen">
                <figure class="bs-img">
                    <div class="parallax-img">
                        <img class="lazy" src="img/work/op/big-02-prel.webp"
                        data-src="img/work/op/big-02-1x.webp" data-src-mobile="img/work/op/big-02-m.webp"
                        data-src-big="img/work/op/big-02-2x.webp" alt="Two movie reflectors aiming into the center of the scene">
                    </div>
                </figure>
                <div class="grid-inner">
                    <figure class="bs-img">
                        <img class="lazy" src="img/work/op/big-page-a-2-prel.webp"
                            data-src="img/work/op/big-page-a-2-1x.webp"
                            data-src-mobile="img/work/op/big-page-a-2-m.webp"
                            data-src-big="img/work/op/big-page-a-2-2x.webp" alt="Website screen for about page part 1">
                    </figure>
                    <div class="screen img-view">
                        <video class="video" autoplay loop muted playsinline poster="img/work/op/screen-01-1x.webp">
                            <source src="video/op/vid-02.mp4" type="video/mp4">
                            Your browser does not support the video tag
                        </video>
                    </div>
                </div>
            </section>

            <!-- MOOD GALLERY SECTION -->
            <section class="mood-gallery grid-inner">
                <div class="bs-grid xl-top-4 xs-top-3 grid-force ">
                    <div class="bs-xl-9 bs-xs-14">
                        <figure class="bs-img page img-view">
                            <img class="lazy" src="img/work/op/mood-01-prel.webp"
                                data-src="img/work/op/mood-01-1x.webp"
                                data-src-mobile="img/work/op/mood-01-m.webp"
                                data-src-big="img/work/op/mood-01-2x.webp"
                                alt="Man with crazy face looking top left from side">
                        </figure>
                    </div>
                    <div class="bs-xl-7 bs-xs-9">
                        <figure class="bs-img page img-view">
                            <img class="lazy" src="img/work/op/mood-02-prel.webp"
                                data-src="img/work/op/mood-02-1x.webp"
                                data-src-mobile="img/work/op/mood-02-m.webp"
                                data-src-big="img/work/op/mood-02-2x.webp"
                                alt="Eduard scissor hand in the kitche with Uma Turman">
                        </figure>
                    </div>
                </div>
                <div class="bs-grid grid-bottom sm-grid-top sm-top-4 xs-top-2 xs-wrap">
                    <div class="work-copy-box bs-xl-9 bs-xs-20">
                        <h2 class="bs-80 upper split chars">Humble Masterminds of Laughter</h2>
                        <div class="bs-grid xl-top-1 sm-wrap">
                            <div class="bs-xl-3 bs-sm-9 bs-xs-8">
                                <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i>General tone</h2>
                            </div>
                            <div class="box-copy bs-xl-6 bs-sm-9 bs-xs-12 sm-top-1 xs-top-0">
                                <p class="bs-14 split lines">Just as O-Positive infuses laughter with remarkable and unparalleled ideas, our website mirrors this approach. They tickle your funny bone with concepts you don't find everyday, and we've woven that humor into their brand essence. The design is both surprising and subtly connected to their brand, ensuring a truly unique user experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bs-xl-7 bs-xl-os-2 bs-xs-20 bs-xs-os-0 xs-top-1">
                        <figure class="bs-img page img-view">
                            <img class="lazy" src="img/work/op/mood-03-prel.webp"
                                data-src="img/work/op/mood-03-1x.webp"
                                data-src-mobile="img/work/op/mood-03-m.webp"
                                data-src-big="img/work/op/mood-03-2x.webp"
                                alt="Two cops in desert looking towards the camera">
                        </figure>
                    </div>
                </div>
            </section>

            <!-- SPLIT SCREENS RIGHT -->
            <section class="split-screens bs-grid xl-top-4 xs-top-3 xs-wrap">
                <div class="bs-xl-11 split-item split-left bs-xs-20 bs-xs-os-2" data-target="split-01"
                    data-scroll="split-01">
                    <figure class="bs-img page img-view">
                        <img class="lazy" src="img/work/op/big-page-b-1-prel.webp" data-src="img/work/op/big-page-b-1-1x.webp" data-src-mobile="img/work/op/big-page-b-1-m.webp" data-src-big="img/work/op/big-page-b-1-2x.webp" alt="Screen of contact page part 1">
                        <img class="lazy" src="img/work/op/big-page-b-2-prel.webp" data-src="img/work/op/big-page-b-2-1x.webp" data-src-mobile="img/work/op/big-page-b-2-m.webp" data-src-big="img/work/op/big-page-b-2-2x.webp" alt="Screen of contact page part 2">
                    </figure>
                </div>
                <div class="bs-xl-11 bs-xl-os-2 bs-xs-20 split-item split-right" data-target="split-02"
                    data-scroll="split-02">
                    <figure class="bs-img page img-view">
                        <img class="lazy" src="img/work/op/big-page-c-prel.webp" data-src="img/work/op/big-page-c-1x.webp" data-src-mobile="img/work/op/big-page-c-m.webp" data-src-big="img/work/op/big-page-c-2x.webp" alt="Screenshot of press page">
                    </figure>
                </div>
            </section>

            <!-- BGIMG DOUBLE OFFSET SCREEN IMAGE -->
            <section class="big-image double-offset xl-top-4 xs-top-3">
                <figure class="bs-img">
                    <div class="parallax-img">
                        <img class="lazy" src="img/work/op/big-03-prel.webp"
                        data-src="img/work/op/big-03-1x.webp"
                        data-src-mobile="img/work/op/mobile-big-03-m.webp"
                        data-src-big="img/work/op/big-03-2x.webp" alt="Director chair with clean dark background">
                    </div>
                </figure>
                <div class="grid-inner">
                    <div class="screen img-view">
                        <video class="video" autoplay loop muted playsinline
                            poster="img/work/op/screen-01-1x.webp">
                            <source src="video/op/vid-03.mp4" type="video/mp4">
                            Your browser does not support the video tag
                        </video>
                    </div>
                    <div class="screen img-view">
                        <figure class="bs-img">
                            <img class="lazy" src="img/work/op/screen-04-prel.webp"
                                data-src="img/work/op/screen-04-1x.webp" data-src-mobile="img/work/op/screen-04-m.webp"
                                data-src-big="img/work/op/screen-04-2x.webp" alt="Video modal website screen">
                        </figure>
                    </div>
                </div>
            </section>

            <!-- RESULTS -->
            <section class="work-results xl-top-4 xs-top-3">
                <div class="grid-inner">
                    <div class="line-anim">
                        <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                            <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145"
                                stroke="#EEEEF2" fill-rule="evenodd" />
                        </svg>
                        <div></div>
                        <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                            <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145"
                                stroke="#EEEEF2" fill-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="bs-grid xl-top-3 xl-bottom-3 xs-top-2 xs-bottom-2 grid-bottom sm-wrap xs-wrap">
                        <div class="bs-xl-7 bs-sm-9 bs-xs-20">
                            <h3 class="upper bs-80 split chars">Awards &amp; Recognitions</h3>
                        </div>
                        <div class="bs-xl-5 bs-xl-os-3 bs-sm-8 bs-xs-20 bs-xs-os-0 xs-top-1">
                            <p class="bs-20">TBD 2023</p>
                        </div>
                    </div>

                    <div class="line-anim">
                        <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                            <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145"
                                stroke="#EEEEF2" fill-rule="evenodd" />
                        </svg>
                        <div></div>
                        <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                            <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145"
                                stroke="#EEEEF2" fill-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </section>

            <!-- RECENT WORK -->
            <section class="xl-top-3 xs-top-3 work-listing next-project" id="work">
                <div class="grid-inner">
                    <div class="bs-grid xs-wrap">
                        <div class="bs-xl-7 bs-xs-22">
                            <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i>NEXT PROJECT</h2>
                            <h3 class="bs-120 upper xl-top-1 xs-top-0"><a href="work/hoboken-yogi" class="text-link split chars">Hoboken Yogi</a></h3>
                        </div>
                        <article class="bs-xl-9 bs-xl-os-2 bs-xs-22 bs-xs-os-0">
                            <a href="work/hoboken-yogi">
                                <figure class="nextP">
                                    <i class="work-lottie">
                                        <svg viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="imgMask1">
                                                <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H659.5C659.776 0 660 0.223858 660 0.5V0.5C660 0.776142 659.829 1 659.553 1C653.058 1 577.308 1 528 1C476.451 1 447.549 1 396 1C344.451 1 315.549 1 264 1C212.451 1 183.549 1 132 1C82.6923 1 6.94176 1 0.447341 1C0.171199 1 0 0.776142 0 0.5V0.5Z" fill="black"/>
                                            </mask>
                                            <image width="100%" height="100%" mask="url(#imgMask1)" href="img/work/thumb-hy-1x.webp" />
                                        </svg>
                                    </i>
                                </figure>
                            </a>
                        </article>
                    </div>
                </div>
            </section>

            <!--footer-->
            <footer id="footer" class="xl-top-5 xs-top-3">
                <div class="bs-xl-22 bs-xl-os-1">
                    <div class="bs-xl-10 bs-xl-os-9 bs-xs-22 bs-xs-os-0">
                        <h3 class="contact-link bs-120 upper"><a href="contact" class="mask-link" data-id="LET’S TALK"  aria-label="LET’S TALK"><span>LET’S TALK</span><i
                            class="dot work-dot"><svg viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z"
                                    fill="#C49E76" />
                            </svg></i></a>
                        </h3>
                    </div>
                    <div class="line-anim">
                        <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                            <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145"
                                stroke="#EEEEF2" fill-rule="evenodd" />
                        </svg>
                        <div></div>
                        <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                            <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145"
                                stroke="#EEEEF2" fill-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="bs-grid xs-wrap">
                        <div class="bs-xl-8 bs-xs-22">
                            <h3 class="bs-120 upper"><a href="studio" class="mask-link" data-id="Studio"  aria-label="Studio"><span>Studio</span><i
                                        class="dot work-dot"><svg viewBox="0 0 10 11" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z"
                                                fill="#C49E76" />
                                        </svg></i></a>
                            </h3>
                            <address class="bs-xl-6 bs-xs-22 xl-top-1">
                                81 Prospect St, Suite 9069,<br>
                                Brooklyn, NY 11201<br>
                            </address>
                        </div>

                        <div class="bs-xl-13 bs-xl-os-1 bs-xs-22 bs-xs-os-0 xs-top-1">
                            <div class="bs-grid grid-between grid-bottom xs-wrap">
                                <div class="bs-xl-4 bs-xs-14">
                                    <ul class="service-links">
                                        <li><a class="text-link" href="services/website-design"><span>Website design </span></a></li>
                                        <li><a class="text-link" href="services/motion-design"><span>Motion Design</span></a></li>
                                        <li><a class="text-link" href="services/front-end-development"><span>Front-end development</span></a></li>
                                        <li><a class="text-link" href="services/back-end-development"><span>Back-end development</span></a></li>
                                        <li><a class="text-link" href="services/shopify-development"><span>Shopify development</span></a></li>
                                        <li><a class="text-link" href="services/website-support"><span>Website Support</span></a></li>
                                        <li><a class="text-link" href="services/paid-search-advertising"><span>Paid Search Advertising</span></a></li>
                                        <li><a class="text-link" href="services/social-media-advertising"><span>Social Media Advertising</span></a></li>
                                        <li><a class="text-link" href="services/email-marketing"><span>Email Marketing</span></a></li>
                                        <li><a class="text-link" href="services/seo"><span>SEO</span></a></li>
                                    </ul>
                                </div>
                                <div class="bs-xl-9 right bs-xs-12">
                                    <h3 class="bs-120 upper">
                                        <a href="services/" class="mask-link" data-id="Services" aria-label="Services">
                                            <span>Services</span><i class="dot work-dot">
                                                <svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z" fill="#C49E76" />
                                                </svg>
                                            </i>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                            <div class="line-anim">
                                <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145"
                                        stroke="#EEEEF2" fill-rule="evenodd" />
                                </svg>
                                <div></div>
                                <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145"
                                        stroke="#EEEEF2" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="bs-120 upper"><a href="work.html" class="mask-link" data-id="work"
                                    aria-label="Work"><span>Work</span><i class="dot work-dot">
                                        <svg
                                            viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z"
                                                fill="#C49E76" />
                                        </svg></i>
                                    </a>
                            </h3>
                        </div>
                    </div>

                    <div class="bs-grid footer-bottom grid-bottom xs-top-1 sm-wrap">
                        <div id="newsletter" class="bs-xl-8 bs-sm-22 sm-top-1">
                            <h2 class="bs-tech">Newsletter</h2>
                            <form action="">
                                <input type="email" placeholder="Your Email" name="mail" required>
                                <div class="email-underline"></div>
                                <input id="nl-submit" type="submit" value="Subscribe">
                                <div class="arrow-link al-hover bs-tech"><i>
                                    <svg viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-width="2" >
                                        <path vector-effect="non-scaling-stroke" class="nl-line" d="M0.852905 4.35493L8.81351 4.35352" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path vector-effect="non-scaling-stroke" class="nl-tip" fill-rule="evenodd" clip-rule="evenodd" d="M8.79297 1.37402L11.777 4.35801L8.79721 7.33776L8.79297 1.37402Z" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                    
                                    </i>
                                </div>
                            </form>
                        </div>
                        <div class="bs-xl-13 bs-xl-os-1 bs-sm-22 bs-sm-os-0 sm-top-1">
                            <div class="bs-grid grid-between xs-wrap">
                                <div class="bs-xl-5 bs-sm-8 bs-xs-22 xs-center">
                                    <small class="bs-14">&copy;2023 Buzzworthy Studio</small>
                                </div>
                                <div class="bs-xl-8 bs-sm-14 bs-xs-22 right xs-center xs-top-1">
                                    <ul class="bs-14">
                                        <li><a href="https://www.linkedin.com/company/buzzworthystudio/" target="_blank"
                                                class="text-link" aria-label="Linkedin">Linkedin</a>
                                        </li>
                                        <li><a href="https://www.instagram.com/buzzworthy.studio/" target="_blank"
                                                class="text-link"
                                                aria-label="Instagram">Instagram</a></li>
                                        <li><a href="https://twitter.com/getbuzzworthy" target="_blank"
                                                class="text-link" aria-label="Twitter">Twitter</a>
                                        </li>
                                        <li><a href="https://www.behance.net/BuzzworthyStudio" target="_blank"
                                                class="text-link" aria-label="Behance">Behance</a>
                                        </li>
                                        <li><a href="https://dribbble.com/Buzzworthy/" target="_blank" class="text-link"
                                                aria-label="Dribbble">Dribbble</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

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