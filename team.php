
<?php 
 include './header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Education & Skilling</title>
    <link rel="icon" href="assets/icons/iit_icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap-5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="assets/css/styleTeam.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <style>
        @media (max-width: 768px) {
            .team-card-container {
                max-width: 350px !important;
                height: 300px !important;
            }

            .profile-img {
                width: 130px !important;
                height: 180px !important;
                margin-bottom: 10px;
            }

            .team-card-front {
                flex-direction: column !important;
                text-align: left !important;
                padding: 15px !important;
            }

            .team-card h5 {
                font-size: 1rem !important;
            }

            .team-card p {
                font-size: 0.85rem !important;
            }
        }
    </style>

</head>

<body class="bg-light">
    <!-- <div id="navbar-placeholder"></div> -->

    <div class="container mt-4" id="idOnlineStaffs">
        <h2 class="text-center mb-4">People handling Online Degree Programmes</h2>

        <div class="row g-6 justify-content-center" style="display: flex; align-items: center; text-align: left;">
            <h2 style="width: 100%;">
                <center><u>Dean</u></center>
            </h2>
            <div class="col-lg-5 col-md-6 col-sm-10">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/HBK_2024.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Prof. Hemant B. Kaushik</h5>
                                <p class="text-muted">Dean of Online Education and Skilling</p>
                                <!-- <p><strong>Responsibility:</strong> Administration of Academic Affairs of all Online
                                    Degree Programmes.</p> -->
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️does@iitg.ac.in</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br />
        <!-- for HOS -->
        <div class="row g-6 justify-content-center" style="display: flex; align-items: center; text-align: left;">
            <h2 style="width: 100%;">
                <center><u>HoS</u></center>
            </h2>
            <div class="col-lg-5 col-md-6 col-sm-10">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/JibonChDas.jpg" class="profile-img" alt="HoS">
                            <div>
                                <h5 class="fw-bold">Mr Jiban Chandra Barman</h5>
                                <p class="text-muted">HoS, Online Education and Skilling</p>
                                
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️ jbarman @ iitg.ac.in</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br />


        <div class="row g-4">
            <!-- Team Member Card -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/karukriti.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Dr. Karukriti Kaushik Ghosh</h5>
                                <p class="text-muted">Project Officer</p>
                                <p><strong>Responsibility:</strong> Responsible for overseeing all aspects of the Online
                                    Degree Programs.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️ </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat for other members -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/rashid1.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Mr. Rashiduzzaman Prodhani</h5>
                                <p class="text-muted">Senior Project Engineer</p>
                                <p><strong>Responsibility:</strong> Responsible for managing all aspects of the Online
                                    Portal and Database Operations.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️ </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/injamul.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Mr. Syed Injamul Haque</h5>
                                <p class="text-muted">Project Engineer</p>
                                <p><strong>Responsibility:</strong> Responsible for managing all aspects of the Online
                                    Portal and Database Operations.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️ </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/anusha.jpeg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Ms. Anusha Narne</h5>
                                <p class="text-muted">Asst. Project Engineer</p>
                                <p><strong>Responsibility:</strong> Responsible for ..........</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️ </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/ankur.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Mr. Ankur Jyoti Konwar</h5>
                                <p class="text-muted">Asst. Project Engineer</p>
                                <p><strong>Responsibility:</strong> Responsible for .......</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️ </p>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/celvin.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Mr. Celvin Abraham</h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/hemagni.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Ms. Hemagni Deka</h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/sweety.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Ms. Sweety Kumari Singh</h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️ </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/laxmi.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Ms. Laxmi Mall</h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/deepjyoti.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Mr. Deepjyoti Patowary</h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/sunayan.jpeg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Mr. Sunayan Deka</h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/shubhankar.png" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Mr. Shubhankar Purkayastha</h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/kotana.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Mr. Kotana Madhu Krishna</h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/prasenjit.png" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Mr. Prasenjit Biswas</h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/sakil.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Mr. Sakil Ahmed</h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/sushmita.jpeg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Ms. Sushmita Sutradhar </h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/priyanka.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Ms. Priyanka Gogoi</h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️ </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-card-container">
                    <div class="team-card">
                        <div class="team-card-front">
                            <img src="assets/images/staffs/dipanjan.jpg" class="profile-img" alt="Profile">
                            <div>
                                <h5 class="fw-bold">Dipanjan Karmakar</h5>
                                <p class="text-muted">Project Assistant</p>
                                <p><strong>Responsibility:</strong> Responsible for assisting with all matters related
                                    to the online degree program.</p>
                            </div>
                        </div>
                        <div class="team-card-back">
                            <h5 class="fw-bold">Contact Info</h5>
                            <p>📞 0361-258 XXXX</p>
                            <p>✉️</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="footer-placeholder"></div> -->
    <div class="scroll-top" onclick="scrollToTop()">
        <i class="fa-solid fa-arrow-up"></i>
    </div>

    <script src="assets/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>


</body>
<script>
    // $(document).ready(function () {
    //     $("#navbar-placeholder").load("header.html");
    //     $("#footer-placeholder").load("footer.html");
    // });
    window.addEventListener("scroll", function () {
        document.querySelector(".scroll-top").style.display =
            window.scrollY > 200 ? "block" : "none";
    });

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }

</script>

</html>
<?php 
    include './footer.php';
 ?>