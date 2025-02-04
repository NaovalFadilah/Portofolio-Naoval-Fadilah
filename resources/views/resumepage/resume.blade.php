<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Personal - Start Bootstrap Template</title>
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('resume') }}">Resume</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('project') }}">Projects</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                                <a class="btn btn-primary px-4 py-3" href="assets/CV DAN PORTOFOLIO NAOVAL FADILAH 2024_20240813_130424_0000-4 (1).pdf" download="CV Naoval Fadilah.pdf">
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Download Resume
                                </a>
                            </div>
                            <!-- Experience Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">PT Phiraka Sinergi Indonesia</div>
                                                <div class="small fw-bolder">Web Developer - Full Stack</div>
                                                <div class="small text-muted">Sep 2023 - Des 2023</div>
                                                <div class="small text-muted">Tebet, Jakarta Raya, Indonesia · On-Site</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>As a Full Stack Developer intern at PT Phiraka Sinergi Indonesia, located in Tebet, South Jakarta, I am responsible for the development of web applications from both the front-end and back-end. I am involved in designing and implementing user interfaces, managing databases, and integrating APIs. During my internship, I collaborate with the development team to ensure that each project meets high-quality standards and user requirements.</div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">InKanteen</div>
                                                <div class="small fw-bolder">Quality Assurance Specialist</div>
                                                <div class="small text-muted">Jan 2024 - Feb 2024</div>
                                                <div class="small text-muted">Cempaka Putih, Jakarta Raya, Indonesia · On-Site</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>As a Quality Assurance Merchant Intern at InKanteen, located in Cempaka Putih, Jakarta, I am responsible for ensuring the quality and compliance of merchant products with company standards. I evaluate and oversee operational processes and provide recommendations for improvements to enhance service quality.</div></div>
                                    </div>
                                </div>
                            </div>
                        <!-- Experience Card 3-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">NAT Indonesia</div>
                                            <div class="small fw-bolder">Quality Assurance Specialist</div>
                                            <div class="small text-muted">Jul 2024 - Agu 2024</div>
                                            <div class="small text-muted">Cilandak, Jakarta Raya, Indonesia · Hybrid</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8"><div>Perform manual testing on the application to ensure system quality and stability.
                                        Prepare and execute test cases and test scenarios that align with the application's requirements.
                                        Document testing results using spreadsheets and compile detailed test reports.
                                        Identify, track, and report bugs for follow-up by the development team.
                                        Contribute to the Pakarangan project for efficient IT infrastructure management.
                                        Successfully completed 145 test cases on the LP360 application with no failures, identifying and fixing 3 bugs.</div></div>
                                </div>
                            </div>
                        </div>
                        </section>
                        <!-- Education Section -->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                            <!-- Education Card 1 -->
                            <div class="card shadow border-0 rounded-4 mb-4">
                                <div class="card-body p-4">
                                    <div class="row align-items-center gx-4">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">SMK Taruna Bhakti</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">PPLG (Pengembangan Perangkat Lunak dan Game)</div>
                                                    <div class="small text-muted">2021 - 2024</div>
                                                    <div class="small text-muted">Cimanggis, Depok City, West Java</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>SMK Taruna Bhakti Depok is a vocational high school focused on IT and technology fields. The school offers various programs, including PPLG (Software and Game Development), TJKT (Computer Network Engineering and Telecommunications), TE (Electronics Engineering), Animation, and Broadcasting. With supporting facilities, SMK Taruna Bhakti aims to prepare students with practical skills that are ready to be applied in the industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Education Card 2 -->
                            <div class="card shadow border-0 rounded-4 mb-4">
                                <div class="card-body p-4">
                                    <div class="row align-items-center gx-4">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">Universitas Terbuka</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">Sistem Informasi</div>
                                                    <div class="small text-muted">2024 - Present</div>
                                                    <div class="small text-muted">Bogor City, West Java</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>Universitas Terbuka (UT) is a public university in Indonesia that operates through a distance learning system. Established in 1984, UT aims to provide flexible higher education access to the community, especially those with time and location constraints. UT offers various undergraduate and postgraduate programs that can be followed through technology-based learning, with course materials available online. As an open education institution, UT provides opportunities for anyone to study, regardless of age or location.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Attention to Detail </div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Analytical Thinking</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Communication Skills</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Manual Testing</div></div><div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Bug Tracking Tools</div></div><div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Test Documentation</div></div><div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">UI/UX</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JIRA</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Microsoft Office</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">SQL Server</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">MySQL</div></div>
                                        </div>
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Laravel</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Bootstrap</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Tailwind</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="text-secondary fw-bolder mb-4">Certificate & Lisense</h2>
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">IT Specialist - Databases</h2>
                                            <h5>Certiport</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                                        </div>
                                        <img class="img-fluid" src="assets/Certiport.png" alt="..." style="height: 200px; margin-right: 10px; border-radius: 5%;"/>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Microsoft Office Specialist: Excel Associate (Office 2019)</h2>
                                            <h5>Microsoft</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                                        </div>
                                        <img class="img-fluid" src="assets/Microsoft.png" alt="..." style="height: 200px; margin-right: 10px; border-radius: 5%;"/>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Teaching English to Speakers Other than English</h2>
                                            <h5>Teachcast With Oxford</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                                        </div>
                                        <img class="img-fluid" src="assets/Oxforf.jpg" alt="..." style="height: 200px; margin-right: 10px; border-radius: 5%;"/>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
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
