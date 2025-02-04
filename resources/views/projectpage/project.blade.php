<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">VistaResume</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('resume') }}">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('project') }}">Projects</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">My Projects Portofolio</span></h1>
                    </div>
        <h2 class="text-center fw-bold mb-4">Web Developer Projects</h2>

                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Mitra Care</h2>
                                            <p>MitraCare is a Laravel-based application that provides medical services, digital pharmacy, payments, and online consultations with doctors, all within a single, secure, and easily accessible platform 24/7. This application is built using the Laravel framework to ensure optimal performance and user data security.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/mitra.png" alt="..." style="height: 200px; margin-right: 10px; border-radius: 5%;"/>
                                    </div>
                                </div>
                            </div>
                            <!-- Project Card 2-->
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">O-PAY</h2>
                                            <p>
                                                O-Pay is a Laravel-based application designed to simplify transactions for purchasing mobile data, prepaid credit, electricity tokens, and other essential services. Unlike global digital wallet applications, O-Pay focuses specifically on enabling users to easily top-up their mobile data, credit, and utility tokens, providing a seamless and efficient platform for local transactions.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/Opay.jpg" alt="..." style="height: 200px; margin-right: 10px; border-radius: 5%;"/>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">StarbhakCanteen</h2>
                                            <p>StarbhakCanteen is a Laravel-based application designed to facilitate food and beverage orders at the cafeteria. The application features a digital payment system through QRIZZ, allowing users to top up their balance with all available payment methods. Every transaction made on the platform earns users points, which can be redeemed for discount vouchers, providing an enhanced and rewarding dining experience.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/nabati.jpg" alt="..." style="height: 200px; margin-right: 10px; border-radius: 5%;"/>
                                    </div>
                                </div>
                            </div>
                             <br>
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">StarbhakCounseling</h2>
                                            <p>StarbhacCounseling is a Laravel-based application designed for private consultations between students and counseling teachers, ensuring confidentiality between both parties. The application also features a monitoring system for tracking attendance, allowing both teachers and students to easily check who was absent during a particular lesson.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/konselingdashboard.png" alt="..." style="height: 200px; margin-right: 10px; border-radius: 5%;"/>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">HomePlay</h2>
                                            <p>HomePlay is a Laravel-based application designed to facilitate players in finding companions to play with. The application provides features for game top-ups with support for all available payment methods, as well as the ability to play alongside other players, enhancing the social gaming experience.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/homeplay.png" alt="..." style="height: 200px; margin-right: 10px; border-radius: 5%;"/>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">StarbhakCanteen</h2>
                                            <p>StarbhakCanteen is a Laravel-based application similar to the previous version, with the key difference being that it is managed by the tenant. This application facilitates the conversion of accumulated balance into cash once the required threshold is met, with the amount being automatically transferred to the bank application used by the tenant.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/starbhakcanteen.png" alt="..." style="height: 200px; margin-right: 10px; border-radius: 5%;"/>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </section>
                <!-- Section My Projects -->
    <section class="container my-5">
        <h2 class="text-center fw-bold mb-4">QA Projects</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <!-- Project 1 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">ITDP LP360 - Bank BJB</h5>
                        <p class="card-text">The manual testing of the ITDP LP360 application at Bank BJB covers 145 test cases designed to ensure the quality and performance of the application according to the established standards. Each test case is conducted thoroughly to identify issues or bugs, ensuring that all features function properly and providing an optimal user experience.</p>
                        <span class="badge bg-success">Selesai</span>
                        <a href="https://docs.google.com/spreadsheets/d/1hcUi0gqaD7wZ9NR1rPTt4LwvBVRPn2JMvialMY1JWMo/edit?usp=sharing" class="btn btn-primary btn-sm mt-2" style="margin-left: 2%;">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Pakarangan Glamping</h5>
                        <p class="card-text">Pakarangan Glamping Resort is an application for managing resort operations, including reservations and customer services. The application has been tested to ensure its functionality runs smoothly, but unfortunately, it has been put on hold due to issues between the company and the customers, causing a delay in further implementation.</p>
                        <span class="badge bg-warning text-dark">On-Hold</span>
                        <a href="https://docs.google.com/spreadsheets/d/1Vw_VXuID9R478ITjwZlD8LBqyyJ1xyDfIHY2CnsCM-4/edit?usp=sharing" class="btn btn-primary btn-sm mt-2" style="margin-left: 2%;">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Merchant QA - InKanteen</h5>
                        <p class="card-text">includes evaluating the quality of merchant services to ensure compliance with company standards and testing the ordering system to ensure smooth processing from start to finish. The goal is to ensure that merchant services meet expected quality and provide an optimal user experience.</p>
                        <span class="badge bg-success">Selesai</span>
                        <a href="https://docs.google.com/spreadsheets/d/1QK2gsfZ_xKllSZId6JgGN_dHNkw6lqtXxq_59et9JAE/edit?usp=sharing" class="btn btn-primary btn-sm mt-2" style="margin-left: 2%;">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <footer class="bg-dark text-white py-4 mt-5">
                <div class="container text-center">
                    <h5 class="fw-bold">Terima Kasih Telah Mengunjungi Portofolio Saya!</h5>
                    <p class="mb-3">Jangan ragu untuk menghubungi saya jika tertarik bekerja sama.</p>

                    <!-- Media Sosial -->
                    <div class="d-flex justify-content-center gap-3">
                        <a href="https://github.com/username" class="text-white text-decoration-none" target="_blank">
                            <i class="fab fa-github fa-lg"></i> GitHub
                        </a>
                        <a href="https://www.linkedin.com/in/username" class="text-white text-decoration-none" target="_blank">
                            <i class="fab fa-linkedin fa-lg"></i> LinkedIn
                        </a>
                        <a href="mailto:email@example.com" class="text-white text-decoration-none">
                            <i class="fas fa-envelope fa-lg"></i> Email
                        </a>
                    </div>

                    <hr class="border-light my-3">

                    <p class="mb-0">&copy; 2024 Naoval Fadilah | All Rights Reserved</p>
                </div>
            </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
