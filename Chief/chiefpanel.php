<?php
include_once '../php/autoheader.php';
?>

<body>
    <!-- root-app -->
    <div class="panel">
        <div class="home-nav" id="home-nav">
            <svg class="icon icon-home" viewBox="0 0 24 24">
                <path fill="#A3A5A4" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z" />
            </svg>
        </div>
        <script>
            $('#home-nav').click(function() {
                $('#side-bar').toggleClass('visible');
            });
        </script>
        <div class="side-bar collapse visible" id="side-bar">
            <!-- contain the sidebar nav -->
            <div class="sidebar-logo">
                <svg class="bar-logo" version="1.1" id="svg2" width="324" height="216" viewBox="0 0 324 216" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                    <defs id="defs6" />
                    <sodipodi:namedview id="namedview4" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" showgrid="false" />
                    <g inkscape:groupmode="layer" inkscape:label="Image" id="g8">
                        <image width="324" height="216" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUQAAADYCAYAAACTOZpKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdp
bj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6
eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQwIDc5LjE2
MDQ1MSwgMjAxNy8wNS8wNi0wMTowODoyMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJo
dHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlw
dGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAv
IiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RS
ZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpD
cmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTggKE1hY2ludG9zaCkiIHhtcE1NOklu
c3RhbmNlSUQ9InhtcC5paWQ6NUJBNUFERkNDM0Q2MTFFOEJEQzBFQ0NDMTMzNDYwRjMiIHhtcE1N
OkRvY3VtZW50SUQ9InhtcC5kaWQ6NUJBNUFERkRDM0Q2MTFFOEJEQzBFQ0NDMTMzNDYwRjMiPiA8
eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1QkE1QURGQUMzRDYx
MUU4QkRDMEVDQ0MxMzM0NjBGMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1QkE1QURGQkMz
RDYxMUU4QkRDMEVDQ0MxMzM0NjBGMyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8
L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv2zO6QAADwFSURBVHja7H0JfFTV2f47bJEQ
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
" id="image10" />
                    </g>
                </svg>
            </div>
            <div class="navbar-contained">
                <!-- sidebar nav items -->
                <div class="sidebar-nav-items">
                    <a href="#" class="sidebar-link" id="dashboard">
                        <svg class="icon icon-bar" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10H7C7.26522 10 7.51957 9.89464 7.70711 9.70711C7.89464 9.51957 8 9.26522 8 9V1C8 0.734784 7.89464 0.48043 7.70711 0.292893C7.51957 0.105357 7.26522 0 7 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1V9C0 9.26522 0.105357 9.51957 0.292893 9.70711C0.48043 9.89464 0.734784 10 1 10ZM0 17C0 17.2652 0.105357 17.5196 0.292893 17.7071C0.48043 17.8946 0.734784 18 1 18H7C7.26522 18 7.51957 17.8946 7.70711 17.7071C7.89464 17.5196 8 17.2652 8 17V13C8 12.7348 7.89464 12.4804 7.70711 12.2929C7.51957 12.1054 7.26522 12 7 12H1C0.734784 12 0.48043 12.1054 0.292893 12.2929C0.105357 12.4804 0 12.7348 0 13V17ZM10 17C10 17.2652 10.1054 17.5196 10.2929 17.7071C10.4804 17.8946 10.7348 18 11 18H17C17.2652 18 17.5196 17.8946 17.7071 17.7071C17.8946 17.5196 18 17.2652 18 17V10C18 9.73478 17.8946 9.48043 17.7071 9.29289C17.5196 9.10536 17.2652 9 17 9H11C10.7348 9 10.4804 9.10536 10.2929 9.29289C10.1054 9.48043 10 9.73478 10 10V17ZM11 7H17C17.2652 7 17.5196 6.89464 17.7071 6.70711C17.8946 6.51957 18 6.26522 18 6V1C18 0.734784 17.8946 0.48043 17.7071 0.292893C17.5196 0.105357 17.2652 0 17 0H11C10.7348 0 10.4804 0.105357 10.2929 0.292893C10.1054 0.48043 10 0.734784 10 1V6C10 6.26522 10.1054 6.51957 10.2929 6.70711C10.4804 6.89464 10.7348 7 11 7Z" fill="#A3A5A4" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                    <a href="#" class="sidebar-link" id="user">
                        <svg class="icon icon-bar" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.7 9.35L16.7 10.35L14.65 8.3L15.65 7.3C15.7528 7.19923 15.891 7.14278 16.035 7.14278C16.179 7.14278 16.3172 7.19923 16.42 7.3L17.7 8.58C17.91 8.79 17.91 9.14 17.7 9.35ZM8 14.94L14.06 8.88L16.11 10.93L10.06 17H8V14.94ZM8 10C3.58 10 0 11.79 0 14V16H6V14.11L10 10.11C9.34 10.03 8.67 10 8 10ZM8 0C6.93913 0 5.92172 0.421427 5.17157 1.17157C4.42143 1.92172 4 2.93913 4 4C4 5.06087 4.42143 6.07828 5.17157 6.82843C5.92172 7.57857 6.93913 8 8 8C9.06087 8 10.0783 7.57857 10.8284 6.82843C11.5786 6.07828 12 5.06087 12 4C12 2.93913 11.5786 1.92172 10.8284 1.17157C10.0783 0.421427 9.06087 0 8 0Z" fill="#A3A5A4" />
                        </svg>
                        <span>User Management</span>
                    </a>
                    <a href="#" class="sidebar-link" id="alert">
                        <svg class="icon icon-alert" viewBox="0 0 16 20" fill="none" version="1.1" id="svg123" sodipodi:docname="alert.svg" width="16" height="20" inkscape:version="1.2.1 (9c6d41e410, 2022-07-14)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <sodipodi:namedview id="namedview7" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" showgrid="false" inkscape:zoom="25.85" inkscape:cx="8.0077369" inkscape:cy="9.9806576" inkscape:window-width="1366" inkscape:window-height="697" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" inkscape:current-layer="svg123" />
                            <path d="m 7,13 h 2 v -2 h 2 V 9 H 9 V 7 H 7 V 9 H 5 v 2 H 7 Z M 0,17 V 15 H 2 V 8 C 2,6.617 2.4167,5.387 3.25,4.312 4.0833,3.237 5.1667,2.533 6.5,2.2 V 1.5 C 6.5,1.083 6.646,0.729 6.938,0.438 7.2293,0.146 7.5833,0 8,0 8.4167,0 8.7707,0.146 9.062,0.438 9.354,0.729 9.5,1.083 9.5,1.5 v 0.7 c 1.3333,0.333 2.4167,1.037 3.25,2.112 C 13.5833,5.387 14,6.617 14,8 v 7 h 2 v 2 z m 8,3 C 7.45,20 6.9793,19.804 6.588,19.413 6.196,19.021 6,18.55 6,18 h 4 C 10,18.55 9.8043,19.021 9.413,19.413 9.021,19.804 8.55,20 8,20 Z" fill="#a3a5a4" id="path28" />
                            <defs id="defs121" />
                        </svg>

                        <span>Alert services</span>
                    </a>
                    <a href="#" class="sidebar-link" id="account">
                        <svg class="icon icon-bar" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 16V13.2C0 12.6333 0.141667 12.1123 0.425 11.637C0.708333 11.1623 1.1 10.8 1.6 10.55C2.6 10.05 3.63767 9.66667 4.713 9.4C5.78767 9.13333 6.88333 9 8 9C8.41667 9 8.83333 9.029 9.25 9.087C9.66667 9.14567 10.0833 9.21667 10.5 9.3V10.875C9.75 11.2417 9.146 11.725 8.688 12.325C8.22933 12.925 8 13.7083 8 14.675V16H0ZM10 16V14.6C10 14.2 10.104 13.8293 10.312 13.488C10.5207 13.146 10.8167 12.9 11.2 12.75C11.8 12.5 12.421 12.3127 13.063 12.188C13.7043 12.0627 14.35 12 15 12C15.65 12 16.296 12.0627 16.938 12.188C17.5793 12.3127 18.2 12.5 18.8 12.75C19.1833 12.9 19.4793 13.146 19.688 13.488C19.896 13.8293 20 14.2 20 14.6V16H10ZM15 11C14.3 11 13.7083 10.7583 13.225 10.275C12.7417 9.79167 12.5 9.2 12.5 8.5C12.5 7.8 12.7417 7.20833 13.225 6.725C13.7083 6.24167 14.3 6 15 6C15.7 6 16.2917 6.24167 16.775 6.725C17.2583 7.20833 17.5 7.8 17.5 8.5C17.5 9.2 17.2583 9.79167 16.775 10.275C16.2917 10.7583 15.7 11 15 11ZM8 8C6.9 8 5.95833 7.60833 5.175 6.825C4.39167 6.04167 4 5.1 4 4C4 2.9 4.39167 1.95833 5.175 1.175C5.95833 0.391667 6.9 0 8 0C9.1 0 10.0417 0.391667 10.825 1.175C11.6083 1.95833 12 2.9 12 4C12 5.1 11.6083 6.04167 10.825 6.825C10.0417 7.60833 9.1 8 8 8Z" fill="#A3A5A4" />
                        </svg>
                        <span>Account</span>
                    </a>
                    <a href="#" class="sidebar-link" id="proofing">
                        <svg class="icon icon-proofing" viewBox="0 0 19.800001 20" fill="none" version="1.1" id="svg123" width="19.800001" height="20" sodipodi:docname="proofing-1.svg" inkscape:export-filename="proofing-1.svg" inkscape:export-xdpi="96" inkscape:export-ydpi="96" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <sodipodi:namedview id="namedview3404" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" showgrid="false" />
                            <path d="m 15.05,19.16 -2.75,-3 1.16,-1.16 1.59,1.59 3.59,-3.59 1.16,1.41 z M 9.3000001,16 c 0,-1.54 0.59,-2.94 1.5399999,-4 l -1.5399999,0.89 -2.5,-1.45 V 8.5600006 l 2.5,-1.4500004 L 11.8,8.5600006 V 11.13 c 0.5919,-0.423 1.2561,-0.735 1.96,-0.92 V 8.5600006 l 2,-1.1300004 2.33,0.62 0.52,-1.93 -1.77,-0.47 0.46,-1.77 -1.93,-0.5200001 -0.62,2.3300001 -2,1.13 -2.45,-1.44 v -2.26 l 1.71,-1.71 L 10.59,1.7733765e-7 9.3000001,1.2900002 8.0100001,1.7733765e-7 6.5900001,1.4100002 l 1.71,1.7099999 v 2.2600001 l -2.5000003,1.44 -2,-1.13 -0.58,-2.33 -1.92,0.52 0.47,1.77 -1.76999997550481,0.47 0.51999999550481,1.93 2.32999998,-0.62 2,1.1300004 V 11.45 l -2,1.13 L 0.51999982,11.96 -1.7550481e-7,13.89 1.7699998,14.36 l -0.47,1.76 1.93,0.52 0.62,-2.33 2,-1.13 2.4500003,1.44 v 2.26 l -1.71,1.71 1.42,1.41 1.29,-1.29 L 10.59,20 10.72,19.87 C 9.7995001,18.791 9.2957001,17.418 9.3000001,16 Z" fill="#a3a5a4" id="path24" inkscape:export-filename="proofing.svg" inkscape:export-xdpi="96" inkscape:export-ydpi="96" />
                            <defs id="defs121" />
                        </svg>

                        <span>Proofing</span>
                    </a>
                    <a href="#" class="sidebar-link" id="search">
                        <svg class="icon icon-search" viewBox="0 0 17.49 17.489964" fill="none" version="1.1" id="svg484" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <sodipodi:namedview id="namedview486" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" showgrid="false" />
                            <path d="m 12.5,10.999963 h -0.79 l -0.28,-0.27 C 12.4439,9.5539634 13.0011,8.0529634 13,6.4999634 c 0,-1.286 -0.3812,-2.542 -1.0954,-3.611 -0.7143,-1.069 -1.7294,-1.90200004 -2.9171997,-2.39400004 -1.1877,-0.492 -2.4946,-0.621 -3.7555,-0.37 -1.2609,0.251 -2.4191,0.87 -3.3281,1.77900004 -0.90899998,0.909 -1.52809998,2.067 -1.77889998,3.328 -0.2508,1.261 -0.1221,2.568 0.3699,3.755 0.492,1.1879996 1.32509998,2.2029996 2.39399998,2.9179996 1.0689,0.714 2.3256,1.095 3.6112,1.095 1.61,0 3.09,-0.59 4.2299997,-1.57 l 0.27,0.28 v 0.79 l 5,4.99 1.49,-1.49 z m -5.9999997,0 c -2.49,0 -4.5,-2.0099996 -4.5,-4.4999996 0,-2.49 2.01,-4.5 4.5,-4.5 2.49,0 4.4999997,2.01 4.4999997,4.5 0,2.49 -2.0099997,4.4999996 -4.4999997,4.4999996 z m -2.17,-1.4999996 2.14,-1.53 2.14,1.53 -0.83,-2.46 2.15,-1.5 h -2.62 l -0.84,-2.54 -0.84,2.54 h -2.63 l 2.14,1.49 z" fill="#a3a5a4" id="path381" inkscape:export-filename="..\Chief-search.svg" inkscape:export-xdpi="96" inkscape:export-ydpi="96" />
                            <defs id="defs482" />
                        </svg>

                        <span>Search</span>
                    </a>
                    <a href="#" class="sidebar-link" id="chat">
                        <svg class="icon icon-bar" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.8 14.4H14.4V12H4.8V14.4ZM4.8 10.8H19.2V8.4H4.8V10.8ZM4.8 7.2H19.2V4.8H4.8V7.2ZM0 24V2.4C0 1.74 0.2352 1.1748 0.7056 0.7044C1.1752 0.2348 1.74 0 2.4 0H21.6C22.26 0 22.8252 0.2348 23.2956 0.7044C23.7652 1.1748 24 1.74 24 2.4V16.8C24 17.46 23.7652 18.0252 23.2956 18.4956C22.8252 18.9652 22.26 19.2 21.6 19.2H4.8L0 24Z" fill="#A3A5A4" />
                        </svg>
                        <span>Chat</span>
                    </a>
                </div>
                <!-- log out footer -->
                <div class="sidebar-footer">
                    <a href="/index.php" class="footer-link">
                        <svg class="icon icon-bar" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 9C5.5 8.80109 5.57902 8.61032 5.71967 8.46967C5.86032 8.32902 6.05109 8.25 6.25 8.25H13V3.375C13 1.875 11.4161 0.75 10 0.75H2.875C2.17904 0.750744 1.51179 1.02755 1.01967 1.51967C0.527545 2.01179 0.250744 2.67904 0.25 3.375V14.625C0.250744 15.321 0.527545 15.9882 1.01967 16.4803C1.51179 16.9725 2.17904 17.2493 2.875 17.25H10.375C11.071 17.2493 11.7382 16.9725 12.2303 16.4803C12.7225 15.9882 12.9993 15.321 13 14.625V9.75H6.25C6.05109 9.75 5.86032 9.67098 5.71967 9.53033C5.57902 9.38968 5.5 9.19891 5.5 9ZM19.5302 8.46984L15.7802 4.71984C15.6384 4.58513 15.4495 4.51114 15.254 4.51364C15.0584 4.51614 14.8715 4.59495 14.7332 4.73325C14.5949 4.87155 14.5161 5.0584 14.5136 5.25398C14.5111 5.44955 14.5851 5.63836 14.7198 5.78016L17.1892 8.25H13V9.75H17.1892L14.7198 12.2198C14.6473 12.2888 14.5892 12.3716 14.5492 12.4633C14.5091 12.555 14.4878 12.6539 14.4865 12.754C14.4852 12.8541 14.504 12.9534 14.5417 13.0461C14.5794 13.1389 14.6353 13.2231 14.7061 13.2939C14.7769 13.3647 14.8611 13.4206 14.9539 13.4583C15.0466 13.496 15.1459 13.5148 15.246 13.5135C15.3461 13.5122 15.445 13.4909 15.5367 13.4508C15.6284 13.4108 15.7112 13.3527 15.7802 13.2802L19.5302 9.53016C19.6707 9.38952 19.7497 9.19883 19.7497 9C19.7497 8.80117 19.6707 8.61048 19.5302 8.46984Z" fill="#A3A5A4" />
                        </svg>
                        <span>Log out</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-section">
            <!-- the main content -->
            <script>
                // id
                var alert = "#alert";
                var chatMng = "#chat";
                var search = "#search";
                var userMng = "#user";
                var account = "#account";
                var proofing = "#proofing";
                var dashboard = "#dashboard";
                // class
                var activeLink = "active-link";
                // view point or main content
                var mainSection = ".main-section";

                //page
                var userpage = "./view/userManagement.php";
                var dashboardPage = "./view/dashboard.php";
                var chatPage = "./view/chat.php";
                var alertPage = "./view/alertService.php";
                var proofingPage = "./view/proofing.php";
                var accountPage = "./view/account.php";
                var searchPage = "./view/search.php";

                // jquery function
                // dashboard content
                $(mainSection).load(dashboardPage);
                $(dashboard).addClass(activeLink);
                $(dashboard).click(function() {
                    $(mainSection).load(dashboardPage);
                    $(dashboard).addClass(activeLink);
                    $(userMng).removeClass(activeLink);
                    $(account).removeClass(activeLink);
                    $(chatMng).removeClass(activeLink);
                    $(search).removeClass(activeLink);
                    $(proofing).removeClass(activeLink);
                    $(alert).removeClass(activeLink);
                });
                //user management content
                $(userMng).click(function() {
                    $(mainSection).load(userpage);
                    $(userMng).addClass(activeLink);
                    $(account).removeClass(activeLink);
                    $(chatMng).removeClass(activeLink);
                    $(dashboard).removeClass(activeLink);
                    $(search).removeClass(activeLink);
                    $(proofing).removeClass(activeLink);
                    $(alert).removeClass(activeLink);
                });
                //alert management content
                $(alert).click(function() {
                    $(mainSection).load(alertPage);
                    $(userMng).removeClass(activeLink);
                    $(account).removeClass(activeLink);
                    $(chatMng).removeClass(activeLink);
                    $(dashboard).removeClass(activeLink);
                    $(search).removeClass(activeLink);
                    $(proofing).removeClass(activeLink);
                    $(alert).addClass(activeLink);
                });
                //account management content
                $(account).click(function() {
                    $(mainSection).load(accountPage);
                    $(userMng).removeClass(activeLink);
                    $(account).addClass(activeLink);
                    $(chatMng).removeClass(activeLink);
                    $(dashboard).removeClass(activeLink);
                    $(search).removeClass(activeLink);
                    $(proofing).removeClass(activeLink);
                    $(alert).removeClass(activeLink);
                });
                //proofing management content
                $(proofing).click(function() {
                    $(mainSection).load(proofingPage);
                    $(userMng).removeClass(activeLink);
                    $(account).removeClass(activeLink);
                    $(chatMng).removeClass(activeLink);
                    $(dashboard).removeClass(activeLink);
                    $(search).removeClass(activeLink);
                    $(proofing).addClass(activeLink);
                    $(alert).removeClass(activeLink);
                });
                //search management content
                $(search).click(function() {
                    $(mainSection).load(searchPage);
                    $(userMng).removeClass(activeLink);
                    $(account).removeClass(activeLink);
                    $(chatMng).removeClass(activeLink);
                    $(dashboard).removeClass(activeLink);
                    $(search).addClass(activeLink);
                    $(proofing).removeClass(activeLink);
                    $(alert).removeClass(activeLink);
                });
                //chat management content
                $(chatMng).click(function() {
                    $(mainSection).load(chatPage);
                    $(userMng).removeClass(activeLink);
                    $(account).removeClass(activeLink);
                    $(chatMng).addClass(activeLink);
                    $(dashboard).removeClass(activeLink);
                    $(search).removeClass(activeLink);
                    $(proofing).removeClass(activeLink);
                    $(alert).removeClass(activeLink);
                });
            </script>
        </div>
    </div>
</body>

</html>