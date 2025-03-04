<head>
    <script>
        // Immediately apply the saved theme before page rendering
        (function () {
            let savedTheme = sessionStorage.getItem('selectedTheme') || 'orange';
            let themeStyles = {
                orange: {
                    '--ed-color-text-body': 'white',
                    '--text-color': 'black',
                    '--primary-color': '#BD6716'
                },
                blue: {
                    '--ed-color-text-body': '#e0f7fa',
                    '--text-color': '#004d40',
                    '--primary-color': 'rgb(22, 47, 106)'
                }
            };

            let theme = themeStyles[savedTheme];
            for (let key in theme) {
                document.documentElement.style.setProperty(key, theme[key]);
            }
        })();
    </script>
</head>
<body>

    <script>
        function applyTheme(theme) {
            let themeStyles = {
                orange: {
                    '--ed-color-text-body': 'white',
                    '--text-color': 'black',
                    '--primary-color': '#BD6716'
                },
                blue: {
                    '--ed-color-text-body': '#e0f7fa',
                    '--text-color': '#004d40',
                    '--primary-color': 'rgb(22, 47, 106)'
                }
            };

            let selectedTheme = themeStyles[theme];
            for (let key in selectedTheme) {
                document.documentElement.style.setProperty(key, selectedTheme[key]);
            }
        }

        function switchTheme(theme) {
            applyTheme(theme);
            sessionStorage.setItem('selectedTheme', theme);
        }
    </script>
</body>

<header class="header header-1 header-3 sticky-active">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-inner">
                <div class="top-bar-left">
                    <ul class="top-bar-list">
                        <li><span>भारत सरकार<br>
                                Government of India</span></li>

                        <li><span>मिनिस्ट्री ऑफ़ जलशक्ति<br>
                                Ministry of Jalskti</span></li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <div class="register-box">

                        <a href="#">Skip to Main Content
                        </a>
                    </div>
                    <div class="register-box">

                        <a href="#">Screen Reader Access
                        </a>
                    </div>
                    <div class="register-box">

                        <a href="#" style="width:20px; height:20px ; text-align: center; background: #fff;">A-
                        </a>
                        <a href="#" style="width:20px; height:20px ; text-align: center; background: #fff;">A
                        </a>
                        <a href="#" style="width:20px; height:20px ; text-align: center; background: #fff;">A+
                        </a>
                        <a href="#"
                            style="width:20px; height:20px ; text-align: center; background: #000000; color:#fff">A
                        </a>
                        <a href="#" style="width:20px; height:20px ; text-align: center; background: #fff;">A
                        </a>
                        <a href="#" style="width:20px; height:20px ; text-align: center; background: #BD6716;"
                            onclick="switchTheme('orange')">
                        </a>
                        <a href="#"
                            style="width:20px; height:20px ; text-align: center; background: rgb(22, 47, 106);"
                            onclick="switchTheme('blue')">
                        </a>
                    </div>
                    <div class="register-box">
                        <a href="#" onclick="changeLanguage('hi')">हिन्दी</a> 
                    </div>

                    <div class="top-social-wrap">

                        <ul class="social-list">


                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mid-header">
        <div class="container">
            <div class="mid-header-inner">
                <div class="header-logo d-lg-block">
                    <a href="index.html">
                        <img src="{{ asset('assets/logo-jalskti.png') }}" alt="Logo" width="550">
                    </a>
                </div>

                <div class="mid-header-right">
                    <div class="category-form-wrap ">
                        <form class="header-form" action="mail.php">
                            <input class="form-control" type="text" name="search" placeholder="Search here...">
                            <button class="submit ed-primary-btn"><i
                                    class="fa-regular fa-magnifying-glass"></i>Search</button>
                        </form>

                    </div>
                    <div class="header-right-icon shop-btn">
                        <img src="{{ asset('assets/image/hd.png') }}" width="80" alt="Logo">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="primary-header">
        <div class="container">
            <div class="primary-header-inner">
                <div class="header-logo d-lg-none">
                    <a href="index.html">
                        <img src="assets/logo-jalskti.png" alt="Logo">
                    </a>
                </div>
                <div class="header-left-inner">
                    <div class="category-area">
                        <div class="category-btn">
                            <i class="fa-sharp fa-solid fa-grid-2"></i>

                            <ul class="category-sub-menu">
                                <li>
                                    <ul>
                                        <li><a class="menu-item" href="#">Director's Message</a></li>
                                        <li><a class="menu-item" href="#">Who's Who</a></li>
                                        <li><a class="menu-item" href="#">ER Sheets</a></li>
                                        <li><a class="menu-item" href="#">Publications</a></li>
                                        <li><a class="menu-item" href="#">Library</a></li>
                                        <li><a class="menu-item" href="#">Forms</a></li>
                                        <li><a class="menu-item" href="#">Field Hostel</a></li>
                                        <li><a class="menu-item" href="#">FAQ</a></li>
                                        <li><a class="menu-item" href="#">Did You Know</a></li>
                                        <li><a class="menu-item" href="#">Public Grievances</a></li>
                                        <li><a class="menu-item" href="#">Liaison Cell</a></li>
                                        <li><a class="menu-item" href="#">Sexual Harassment Committee</a>
                                        </li>
                                        <li><a class="menu-item" href="#">Vigilance</a></li>
                                        <li><a class="menu-item" href="#">Recruitments</a></li>
                                        <li><a class="menu-item" href="#">Property Return</a></li>
                                        <li><a class="menu-item" href="#">Related Links</a></li>
                                        <li><a class="menu-item" href="#">Feedback</a></li>
                                        <li><a class="menu-item" href="#">Office Circulars</a></li>
                                        <li><a class="menu-item" href="#">Swachh Bharat Abhiyaan</a></li>
                                        <li><a class="menu-item" href="#">ISO 9001-2015</a></li>
                                        <li><a class="menu-item" href="#">e-HRMS</a></li>
                                        <li><a class="menu-item" href="#">e-Office</a></li>
                                        <li><a class="menu-item" href="#">Significant Achievements</a></li>
                                        <li><a class="menu-item" href="#">Social Media</a></li>
                                        <li><a class="menu-item" href="#">Miscellaneous</a></li>
                                        <li><a class="menu-item" href="#">Seniority Lists</a></li>
                                        <li><a class="menu-item" href="#">Administration</a></li>
                                        <li><a class="menu-item" href="#">Azadi Ka Amrit Mahotsava</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-menu-wrap">
                        <div class="mobile-menu-items">
                            <ul class="sub-menu">

                                <li class="menu-item-has-children">
                                    <a href="#">About us</a>
                                    <ul>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Vision and Mission</a></li>
                                        <li><a href="#">Objective</a></li>
                                        <li><a href="#">Citizen Charter</a></li>
                                        <li><a href="#">Organisation Chart</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Mandates</a>
                                    <ul>
                                        <li><a href="#">Investigations</a></li>
                                        <li><a href="#">Consultancy</a></li>
                                        <li><a href="#">Research</a></li>
                                        <li><a href="#">Dissemination of Information</a></li>
                                        <li><a href="#">Training</a></li>
                                        <li><a href="#">Appraisal of DPR</a></li>
                                        <li><a href="#">Linkages</a></li>
                                        <li><a href="#">Miscellaneous</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Groups</a>
                                    <ul>
                                        <li><a href="#">Soil Mechanics</a></li>
                                        <li><a href="#">Rockfill Soil Dynamics</a></li>
                                        <li><a href="#">Rock Mechanics - Field</a></li>
                                        <li><a href="#">Rock Mechanics-Lab</a></li>
                                        <li><a href="#">Concrete Technology</a></li>
                                        <li><a href="#">Concrete Diagnostics and Chemistry</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Projects</a>
                                    <ul>
                                        <li><a href="#">Recent Projects</a></li>
                                        <li><a href="#">Investigation</a></li>
                                        <li><a href="#">MoU Signed</a></li>
                                        <li><a href="#">Enhanced Testing Capabilities</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">RTI</a>
                                    <ul>
                                        <li><a href="#">CSMRS CPIO</a></li>
                                        <li><a href="#">CSMRS RTI Manual</a></li>
                                        <li><a href="#">RTI Portal</a></li>
                                        <li><a href="#">Application form</a></li>
                                        <li><a href="#">RTI Replies</a></li>
                                        <li><a href="#">Transparency Audit Report</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#">Tenders</a>
                                    <ul>
                                        <li><a href="#">Procurement Officer</a></li>
                                        <li><a href="#">Current Tenders</a></li>
                                        <li><a href="#">Tenders Awarded</a></li>
                                        <li><a href="#">Purchase manual</a></li>
                                        <li><a href="#">Link to E-procurement</a></li>
                                        <li><a href="#">Government e Marketplace</a></li>
                                        <li><a href="#">Annual Procurement</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.header-menu-wrap -->
                </div>
                <div class="header-right-wrap">
                    <div class="header-right">
                        <div class="header-right-btn">
                            <a href="#" class="ed-primary-btn">Contact Us</a>
                        </div>
                        <div class="header-logo d-none d-lg-none">
                            <a href="#">
                                <img src="assets/logo-jalskti.png" alt="Logo">
                            </a>
                        </div>
                        <div class="header-right-item d-lg-none d-md-block">
                            <a href="javascript:void(0)" class="mobile-side-menu-toggle"><i
                                    class="fa-sharp fa-solid fa-bars"></i></a>
                        </div>
                    </div>
                    <!-- /.header-right -->
                </div>
            </div>
            <!-- /.primary-header-inner -->
        </div>
    </div>
</header>

