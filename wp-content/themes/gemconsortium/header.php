<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <?php 
    wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
    <div class="content-wrapper">
        <!-- <header class="wrapper bg-light">
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light pt-0">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand me-lg-7">
                    <?php
                    the_custom_logo();
                    ?>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                    <?php
                        the_custom_logo();
                    ?>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="#">Who we are</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">What we research</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">What’s new</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Who we impact</a>
                        </li>               
                    </ul>
                    <ul class="navbar-nav d-flex flex-column gap-3 d-md-none mt-3">
                        <li class="nav-item">
                        <a href="#" class="btn btn-sm w-100 btn-orange">
                        <svg class='me-1' width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.15933 12.3247C4.89565 12.0503 4.43394 12.0162 4.13257 12.245L4.12465 12.2399L3.44263 12.9219C3.29309 13.071 3.2111 13.2699 3.2111 13.4814C3.2021 13.9074 3.57712 14.2816 4.0026 14.2729C4.25029 14.2769 4.47088 14.1531 4.63244 13.9711L5.15933 13.4442C5.26974 13.3338 5.34381 13.1963 5.37456 13.0468C5.42976 12.7881 5.34815 12.5108 5.15933 12.3247Z" fill="white"/>
                            <path d="M3.26415 10.0049C2.95542 9.69612 2.45378 9.69645 2.14468 10.0049C2.07284 10.0771 1.6299 10.5198 1.54791 10.6021C0.835934 11.3748 1.89381 12.4331 2.66691 11.7216C2.66691 11.7216 3.18486 11.2036 3.26415 11.1244C3.57306 10.816 3.57306 10.3138 3.26415 10.0049Z" fill="white"/>
                            <path d="M6.77796 14.1328C6.56646 14.1328 6.36754 14.2153 6.218 14.3648L5.62076 14.9621C5.61797 14.9648 5.61517 14.9676 5.61238 14.9709C5.31311 15.2666 5.31758 15.7902 5.62076 16.0815C5.92963 16.3899 6.43183 16.3899 6.74023 16.0815L7.33793 15.4838C7.83296 14.9901 7.47713 14.1302 6.77796 14.1328Z" fill="white"/>
                            <path d="M12.0925 5.34241C10.8705 6.11295 9.2321 5.96667 8.16854 4.9031L6.78399 3.51903L8.51188 1.79115C6.65602 -0.291491 3.39266 -0.423609 1.41722 1.56525C-0.56894 3.5379 -0.44162 6.79739 1.63664 8.65381C3.15013 7.8079 5.0113 8.98941 4.88882 10.7129C5.89098 10.8212 6.73941 11.7296 6.78535 12.732C7.72774 12.7118 8.66384 13.4176 8.89337 14.3485C9.67793 14.1382 10.5572 14.3987 11.0946 15.0203L11.1104 15.0016C11.8894 15.4693 12.7135 14.5087 12.126 13.809L12.1274 13.8072C12.1153 13.7955 8.98142 10.6617 8.98142 10.6617C9.22767 10.4154 9.72331 9.91979 9.96951 9.67358L13.0796 12.7837C13.8522 13.4955 14.9108 12.4369 14.1986 11.6642L11.089 8.55411C11.3352 8.30786 11.8309 7.81223 12.0771 7.56602C12.7761 8.26495 14.4718 9.96078 15.1872 10.6761C15.4817 10.9829 16.0121 10.9828 16.3066 10.6761C16.615 10.3672 16.615 9.86505 16.3066 9.55665L12.0925 5.34241Z" fill="white"/>
                            <path d="M17.5798 1.56839C15.6861 -0.324878 12.6049 -0.324878 10.7112 1.56839C10.343 1.93684 9.10558 3.17449 8.75781 3.52221L9.1538 3.91819C9.84234 4.60674 10.9623 4.60674 11.6504 3.91819L12.1446 3.42391C12.4074 3.6896 17.2314 8.50531 17.3669 8.65042C19.4402 6.79331 19.5631 3.53847 17.5798 1.56839Z" fill="white"/>
                            <path d="M10.0096 15.9112C9.70073 15.6027 9.19891 15.6023 8.89018 15.9112L8.29294 16.5084C7.98562 16.803 7.98576 17.3332 8.29294 17.6279C8.58798 17.9345 9.11757 17.9343 9.41241 17.6279L10.0096 17.0306C10.3163 16.7364 10.3163 16.2047 10.0096 15.9112Z" fill="white"/>
                        </svg>
                            Support GEM</a>
                        </li>
                        <li class="nav-item">
                        <a href="" class="btn btn-sm w-100 btn-primary">Join GEM</a>
                        </li>
                        <li class="nav-item">
                        <a href="" class="btn btn-sm w-100 btn-primary">Login</a>
                        </li>
                    </ul>
                    
                    </div>
                </div>
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                    
                    <li class="nav-item">
                        <button href="#" class="search-btn bg-light rounded-2 border p-3 p-lg-2 p-xl-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><svg width="21" height="21" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2808_232)">
                            <path d="M3.09961 13.6138C4.53369 15.0479 6.2881 15.7655 8.35672 15.7655C9.19211 15.7655 9.98131 15.6325 10.7237 15.3661C11.4342 15.111 12.0674 14.768 12.6224 14.3367L18.858 20.5723C19.0845 20.7988 19.3729 20.9105 19.7151 20.9105C20.0573 20.9105 20.3457 20.7988 20.5723 20.5723C20.7988 20.3457 20.9105 20.0573 20.9105 19.7151C20.9105 19.3729 20.7988 19.0845 20.5723 18.858L14.3367 12.6224C14.768 12.0674 15.111 11.4342 15.3661 10.7237C15.6325 9.98131 15.7655 9.19211 15.7655 8.35672C15.7655 6.2881 15.0479 4.53369 13.6138 3.09961C12.1798 1.66552 10.4254 0.947969 8.35672 0.947969C6.2881 0.947969 4.53369 1.66552 3.09961 3.09961C1.66552 4.53369 0.947969 6.2881 0.947969 8.35672C0.947969 10.4254 1.66552 12.1798 3.09961 13.6138ZM11.8714 11.8714C10.9062 12.8367 9.73653 13.3185 8.35672 13.3185C6.97692 13.3185 5.80728 12.8367 4.84202 11.8714C3.87676 10.9062 3.39497 9.73653 3.39497 8.35672C3.39497 6.97692 3.87676 5.80728 4.84202 4.84202C5.80728 3.87676 6.97692 3.39497 8.35672 3.39497C9.73653 3.39497 10.9062 3.87676 11.8714 4.84202C12.8367 5.80728 13.3185 6.97692 13.3185 8.35672C13.3185 9.73653 12.8367 10.9062 11.8714 11.8714Z" fill="#1A1A1A" stroke="#1A1A1A" stroke-width="0.197813"/>
                            </g><defs><clipPath id="clip0_2808_232"><rect width="21" height="21" fill="white" transform="translate(0.429688 0.429688)"/></clipPath></defs></svg>
                        </button>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="#" class="btn btn-sm btn-orange">
                        <svg class='me-1' width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.15933 12.3247C4.89565 12.0503 4.43394 12.0162 4.13257 12.245L4.12465 12.2399L3.44263 12.9219C3.29309 13.071 3.2111 13.2699 3.2111 13.4814C3.2021 13.9074 3.57712 14.2816 4.0026 14.2729C4.25029 14.2769 4.47088 14.1531 4.63244 13.9711L5.15933 13.4442C5.26974 13.3338 5.34381 13.1963 5.37456 13.0468C5.42976 12.7881 5.34815 12.5108 5.15933 12.3247Z" fill="white"/>
                            <path d="M3.26415 10.0049C2.95542 9.69612 2.45378 9.69645 2.14468 10.0049C2.07284 10.0771 1.6299 10.5198 1.54791 10.6021C0.835934 11.3748 1.89381 12.4331 2.66691 11.7216C2.66691 11.7216 3.18486 11.2036 3.26415 11.1244C3.57306 10.816 3.57306 10.3138 3.26415 10.0049Z" fill="white"/>
                            <path d="M6.77796 14.1328C6.56646 14.1328 6.36754 14.2153 6.218 14.3648L5.62076 14.9621C5.61797 14.9648 5.61517 14.9676 5.61238 14.9709C5.31311 15.2666 5.31758 15.7902 5.62076 16.0815C5.92963 16.3899 6.43183 16.3899 6.74023 16.0815L7.33793 15.4838C7.83296 14.9901 7.47713 14.1302 6.77796 14.1328Z" fill="white"/>
                            <path d="M12.0925 5.34241C10.8705 6.11295 9.2321 5.96667 8.16854 4.9031L6.78399 3.51903L8.51188 1.79115C6.65602 -0.291491 3.39266 -0.423609 1.41722 1.56525C-0.56894 3.5379 -0.44162 6.79739 1.63664 8.65381C3.15013 7.8079 5.0113 8.98941 4.88882 10.7129C5.89098 10.8212 6.73941 11.7296 6.78535 12.732C7.72774 12.7118 8.66384 13.4176 8.89337 14.3485C9.67793 14.1382 10.5572 14.3987 11.0946 15.0203L11.1104 15.0016C11.8894 15.4693 12.7135 14.5087 12.126 13.809L12.1274 13.8072C12.1153 13.7955 8.98142 10.6617 8.98142 10.6617C9.22767 10.4154 9.72331 9.91979 9.96951 9.67358L13.0796 12.7837C13.8522 13.4955 14.9108 12.4369 14.1986 11.6642L11.089 8.55411C11.3352 8.30786 11.8309 7.81223 12.0771 7.56602C12.7761 8.26495 14.4718 9.96078 15.1872 10.6761C15.4817 10.9829 16.0121 10.9828 16.3066 10.6761C16.615 10.3672 16.615 9.86505 16.3066 9.55665L12.0925 5.34241Z" fill="white"/>
                            <path d="M17.5798 1.56839C15.6861 -0.324878 12.6049 -0.324878 10.7112 1.56839C10.343 1.93684 9.10558 3.17449 8.75781 3.52221L9.1538 3.91819C9.84234 4.60674 10.9623 4.60674 11.6504 3.91819L12.1446 3.42391C12.4074 3.6896 17.2314 8.50531 17.3669 8.65042C19.4402 6.79331 19.5631 3.53847 17.5798 1.56839Z" fill="white"/>
                            <path d="M10.0096 15.9112C9.70073 15.6027 9.19891 15.6023 8.89018 15.9112L8.29294 16.5084C7.98562 16.803 7.98576 17.3332 8.29294 17.6279C8.58798 17.9345 9.11757 17.9343 9.41241 17.6279L10.0096 17.0306C10.3163 16.7364 10.3163 16.2047 10.0096 15.9112Z" fill="white"/>
                        </svg>
                            Support GEM</a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="" class="btn btn-sm btn-primary">Join GEM</a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="" class="btn btn-sm btn-primary">Login</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
            <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
                <div class="container d-flex flex-row py-6">
                <form class="search-form w-100">
                    <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            </div>
        </header> -->

        <header class="wrapper bg-light">
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light pt-0">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand me-lg-7">
                <?php
                    the_custom_logo();
                ?>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                    <?php
                        the_custom_logo();
                    ?>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown">Who we are</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Mission & Values</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Silver Anniversary</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Global Team</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">National Teams</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Governance</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Founding Organisations</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Business Model</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">National Team Funders</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">GEM Global Funders</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Donate</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown">What we research</a>
                        <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu dropend"><a class="fs-18 fw-semibold dropdown-item dropdown-toggle" href="#"
                                data-bs-toggle="dropdown">Topics</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Global Entrepreneurship</a></li>
                                <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Women’s Entrepreneurship</a></li>
                                <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Entrepreneurship & Sustainability (SDG’s)&nbsp;</a></li>
                                <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Other special topics</a></li>
                            </ul>
                            </li>
                            <li class="dropdown dropdown-submenu dropend"><a class="fs-18 fw-semibold dropdown-item dropdown-toggle" href="#"
                            data-bs-toggle="dropdown">Data</a>
                            <ul class="dropdown-menu">
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Adult Population Survey (APS):<br/>
                                Entrepreneurial Behaviour & Attitudes</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">National Expert Survey (NES) : <br/>
                                Entrepreneurial Framework Conditions&nbsp;</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Entrepreneurial Ecosystems Index (ESI)</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Key Indicators and Terminology</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Economy Profiles</a></li>
                        <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Papers</a></li>
                        </ul>

                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link" href="#">What’s new</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Research Summaries</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Opinion and Analysis</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Team Features</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">GEM News</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link" href="#">Who we impact</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Academia</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Corporations</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Entrepreneurs</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Foundations</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Government</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">International Organizations</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Non-Profit Organizations</a></li>
                            <li class="nav-item"><a class="fs-18 fw-semibold dropdown-item" href="#">Research Centers</a></li>

                        </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex flex-column gap-3 d-md-none mt-3">
                        <li class="nav-item">
                        <a href="#" class="btn btn-sm w-100 btn-orange">
                        <svg class='me-1' width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.15933 12.3247C4.89565 12.0503 4.43394 12.0162 4.13257 12.245L4.12465 12.2399L3.44263 12.9219C3.29309 13.071 3.2111 13.2699 3.2111 13.4814C3.2021 13.9074 3.57712 14.2816 4.0026 14.2729C4.25029 14.2769 4.47088 14.1531 4.63244 13.9711L5.15933 13.4442C5.26974 13.3338 5.34381 13.1963 5.37456 13.0468C5.42976 12.7881 5.34815 12.5108 5.15933 12.3247Z" fill="white"/>
                            <path d="M3.26415 10.0049C2.95542 9.69612 2.45378 9.69645 2.14468 10.0049C2.07284 10.0771 1.6299 10.5198 1.54791 10.6021C0.835934 11.3748 1.89381 12.4331 2.66691 11.7216C2.66691 11.7216 3.18486 11.2036 3.26415 11.1244C3.57306 10.816 3.57306 10.3138 3.26415 10.0049Z" fill="white"/>
                            <path d="M6.77796 14.1328C6.56646 14.1328 6.36754 14.2153 6.218 14.3648L5.62076 14.9621C5.61797 14.9648 5.61517 14.9676 5.61238 14.9709C5.31311 15.2666 5.31758 15.7902 5.62076 16.0815C5.92963 16.3899 6.43183 16.3899 6.74023 16.0815L7.33793 15.4838C7.83296 14.9901 7.47713 14.1302 6.77796 14.1328Z" fill="white"/>
                            <path d="M12.0925 5.34241C10.8705 6.11295 9.2321 5.96667 8.16854 4.9031L6.78399 3.51903L8.51188 1.79115C6.65602 -0.291491 3.39266 -0.423609 1.41722 1.56525C-0.56894 3.5379 -0.44162 6.79739 1.63664 8.65381C3.15013 7.8079 5.0113 8.98941 4.88882 10.7129C5.89098 10.8212 6.73941 11.7296 6.78535 12.732C7.72774 12.7118 8.66384 13.4176 8.89337 14.3485C9.67793 14.1382 10.5572 14.3987 11.0946 15.0203L11.1104 15.0016C11.8894 15.4693 12.7135 14.5087 12.126 13.809L12.1274 13.8072C12.1153 13.7955 8.98142 10.6617 8.98142 10.6617C9.22767 10.4154 9.72331 9.91979 9.96951 9.67358L13.0796 12.7837C13.8522 13.4955 14.9108 12.4369 14.1986 11.6642L11.089 8.55411C11.3352 8.30786 11.8309 7.81223 12.0771 7.56602C12.7761 8.26495 14.4718 9.96078 15.1872 10.6761C15.4817 10.9829 16.0121 10.9828 16.3066 10.6761C16.615 10.3672 16.615 9.86505 16.3066 9.55665L12.0925 5.34241Z" fill="white"/>
                            <path d="M17.5798 1.56839C15.6861 -0.324878 12.6049 -0.324878 10.7112 1.56839C10.343 1.93684 9.10558 3.17449 8.75781 3.52221L9.1538 3.91819C9.84234 4.60674 10.9623 4.60674 11.6504 3.91819L12.1446 3.42391C12.4074 3.6896 17.2314 8.50531 17.3669 8.65042C19.4402 6.79331 19.5631 3.53847 17.5798 1.56839Z" fill="white"/>
                            <path d="M10.0096 15.9112C9.70073 15.6027 9.19891 15.6023 8.89018 15.9112L8.29294 16.5084C7.98562 16.803 7.98576 17.3332 8.29294 17.6279C8.58798 17.9345 9.11757 17.9343 9.41241 17.6279L10.0096 17.0306C10.3163 16.7364 10.3163 16.2047 10.0096 15.9112Z" fill="white"/>
                        </svg>
                            Support GEM</a>
                        </li>
                        <li class="nav-item">
                        <a href="" class="btn btn-sm w-100 btn-primary">Join GEM</a>
                        </li>
                        <li class="nav-item">
                        <a href="" class="btn btn-sm w-100 btn-primary">Login</a>
                        </li>
                    </ul>
                    <!-- <div class="offcanvas-footer d-lg-none">
                        <div>
                        <a href="" class="link-inverse"><span class="__cf_email__"
                            data-cfemail="e38a8d858ca3868e828a8fcd808c8e">[email&#160;protected]</span></a>
                        <br /> 00 (123) 456 78 90 <br />
                        <nav class="nav social social-white mt-4">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        </div>
                    </div> -->
                    </div>
                </div>
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                    <li class="nav-item">
                        <button href="#" class="search-btn bg-light rounded-2 border p-3 p-lg-2 p-xl-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><svg width="21" height="21" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2808_232)">
                            <path d="M3.09961 13.6138C4.53369 15.0479 6.2881 15.7655 8.35672 15.7655C9.19211 15.7655 9.98131 15.6325 10.7237 15.3661C11.4342 15.111 12.0674 14.768 12.6224 14.3367L18.858 20.5723C19.0845 20.7988 19.3729 20.9105 19.7151 20.9105C20.0573 20.9105 20.3457 20.7988 20.5723 20.5723C20.7988 20.3457 20.9105 20.0573 20.9105 19.7151C20.9105 19.3729 20.7988 19.0845 20.5723 18.858L14.3367 12.6224C14.768 12.0674 15.111 11.4342 15.3661 10.7237C15.6325 9.98131 15.7655 9.19211 15.7655 8.35672C15.7655 6.2881 15.0479 4.53369 13.6138 3.09961C12.1798 1.66552 10.4254 0.947969 8.35672 0.947969C6.2881 0.947969 4.53369 1.66552 3.09961 3.09961C1.66552 4.53369 0.947969 6.2881 0.947969 8.35672C0.947969 10.4254 1.66552 12.1798 3.09961 13.6138ZM11.8714 11.8714C10.9062 12.8367 9.73653 13.3185 8.35672 13.3185C6.97692 13.3185 5.80728 12.8367 4.84202 11.8714C3.87676 10.9062 3.39497 9.73653 3.39497 8.35672C3.39497 6.97692 3.87676 5.80728 4.84202 4.84202C5.80728 3.87676 6.97692 3.39497 8.35672 3.39497C9.73653 3.39497 10.9062 3.87676 11.8714 4.84202C12.8367 5.80728 13.3185 6.97692 13.3185 8.35672C13.3185 9.73653 12.8367 10.9062 11.8714 11.8714Z" fill="#1A1A1A" stroke="#1A1A1A" stroke-width="0.197813"/>
                            </g><defs><clipPath id="clip0_2808_232"><rect width="21" height="21" fill="white" transform="translate(0.429688 0.429688)"/></clipPath></defs></svg>
                        </button>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="#" class="btn btn-sm btn-orange">
                        <svg class='me-1' width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.15933 12.3247C4.89565 12.0503 4.43394 12.0162 4.13257 12.245L4.12465 12.2399L3.44263 12.9219C3.29309 13.071 3.2111 13.2699 3.2111 13.4814C3.2021 13.9074 3.57712 14.2816 4.0026 14.2729C4.25029 14.2769 4.47088 14.1531 4.63244 13.9711L5.15933 13.4442C5.26974 13.3338 5.34381 13.1963 5.37456 13.0468C5.42976 12.7881 5.34815 12.5108 5.15933 12.3247Z" fill="white"/>
                            <path d="M3.26415 10.0049C2.95542 9.69612 2.45378 9.69645 2.14468 10.0049C2.07284 10.0771 1.6299 10.5198 1.54791 10.6021C0.835934 11.3748 1.89381 12.4331 2.66691 11.7216C2.66691 11.7216 3.18486 11.2036 3.26415 11.1244C3.57306 10.816 3.57306 10.3138 3.26415 10.0049Z" fill="white"/>
                            <path d="M6.77796 14.1328C6.56646 14.1328 6.36754 14.2153 6.218 14.3648L5.62076 14.9621C5.61797 14.9648 5.61517 14.9676 5.61238 14.9709C5.31311 15.2666 5.31758 15.7902 5.62076 16.0815C5.92963 16.3899 6.43183 16.3899 6.74023 16.0815L7.33793 15.4838C7.83296 14.9901 7.47713 14.1302 6.77796 14.1328Z" fill="white"/>
                            <path d="M12.0925 5.34241C10.8705 6.11295 9.2321 5.96667 8.16854 4.9031L6.78399 3.51903L8.51188 1.79115C6.65602 -0.291491 3.39266 -0.423609 1.41722 1.56525C-0.56894 3.5379 -0.44162 6.79739 1.63664 8.65381C3.15013 7.8079 5.0113 8.98941 4.88882 10.7129C5.89098 10.8212 6.73941 11.7296 6.78535 12.732C7.72774 12.7118 8.66384 13.4176 8.89337 14.3485C9.67793 14.1382 10.5572 14.3987 11.0946 15.0203L11.1104 15.0016C11.8894 15.4693 12.7135 14.5087 12.126 13.809L12.1274 13.8072C12.1153 13.7955 8.98142 10.6617 8.98142 10.6617C9.22767 10.4154 9.72331 9.91979 9.96951 9.67358L13.0796 12.7837C13.8522 13.4955 14.9108 12.4369 14.1986 11.6642L11.089 8.55411C11.3352 8.30786 11.8309 7.81223 12.0771 7.56602C12.7761 8.26495 14.4718 9.96078 15.1872 10.6761C15.4817 10.9829 16.0121 10.9828 16.3066 10.6761C16.615 10.3672 16.615 9.86505 16.3066 9.55665L12.0925 5.34241Z" fill="white"/>
                            <path d="M17.5798 1.56839C15.6861 -0.324878 12.6049 -0.324878 10.7112 1.56839C10.343 1.93684 9.10558 3.17449 8.75781 3.52221L9.1538 3.91819C9.84234 4.60674 10.9623 4.60674 11.6504 3.91819L12.1446 3.42391C12.4074 3.6896 17.2314 8.50531 17.3669 8.65042C19.4402 6.79331 19.5631 3.53847 17.5798 1.56839Z" fill="white"/>
                            <path d="M10.0096 15.9112C9.70073 15.6027 9.19891 15.6023 8.89018 15.9112L8.29294 16.5084C7.98562 16.803 7.98576 17.3332 8.29294 17.6279C8.58798 17.9345 9.11757 17.9343 9.41241 17.6279L10.0096 17.0306C10.3163 16.7364 10.3163 16.2047 10.0096 15.9112Z" fill="white"/>
                        </svg>
                            Support GEM</a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="" class="btn btn-sm btn-primary">Join GEM</a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="" class="btn btn-sm btn-primary">Login</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
            <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
                <div class="container d-flex flex-row py-6">
                <form class="search-form w-100">
                    <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            </div>
        </header>
