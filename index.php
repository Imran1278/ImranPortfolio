<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imran Ali | Portfolio</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --bg: #000000;
            --text: #ffffff;
            --grey: #888888;
            --accent: #222222;
        }

        body { 
            font-family: 'Space Grotesk', sans-serif; 
            background-color: var(--bg); 
            color: var(--text);
            overflow-x: hidden;
        }

        /* Hero Styling */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            border-bottom: 1px solid var(--accent);
        }
        .hero h1 { 
            font-family: 'Playfair Display', serif; 
            font-size: clamp(3.5rem, 10vw, 7rem); 
            line-height: 0.85;
        }

        /* Sidebar Style Headers */
        .side-head {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 5px;
            color: var(--grey);
            margin-bottom: 30px;
            display: block;
        }

        /* Grid Layout for Sections */
        .content-section {
            padding: 120px 0;
            border-bottom: 1px solid var(--accent);
        }

        /* Resume Items */
        .resume-card {
            margin-bottom: 50px;
        }
        .resume-year { color: var(--grey); font-size: 0.9rem; margin-bottom: 10px; }
        .resume-title { font-size: 1.5rem; font-weight: 700; }
        .resume-subtitle { color: var(--grey); font-style: italic; margin-bottom: 15px; }

        /* Projects Section */
        .project-row {
            padding: 40px 0;
            border-bottom: 1px solid #111;
            transition: 0.4s;
        }
        .project-row:hover { background: #080808; padding-left: 20px; }
        /* Skill Pills */
        .skill-item {
            border: 1px solid var(--accent);
            padding: 10px 20px;
            display: inline-block;
            margin: 5px;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Form Control */
        .form-control {
            background: transparent;
            border: none;
            border-bottom: 1px solid var(--accent);
            color: #fff;
            border-radius: 0;
            padding: 20px 0;
            margin-bottom: 20px;
        }
        .form-control:focus {
            background: transparent; box-shadow: none; border-color: #fff; color: #fff;
        }

        .contact-info { margin-bottom: 30px; }
        .contact-label { color: var(--grey); font-size: 0.8rem; text-transform: uppercase; }

        @media (max-width: 768px) {
            .hero { text-align: center; }
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-dark fixed-top p-4">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand fw-bold" href="index.php">SIGNED. IMRANALI</a>
            <div class="d-none d-md-block text-secondary small">PHP WEB DEVELOPER</div>
        </div>
    </nav>
    

    <header class="hero">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1500">
                <span class="side-head">Sargodha, PK • Freelance Available</span>
                <h1>PHP DEVELOPER<br><i>ARCHITECT</i></h1>
                <p class="mt-4 text-secondary lead" style="max-width: 500px;">Crafting Secure Web Applications And Robust Database Systems With PHP And MySQL</p>
            </div>
            <div class="mt-5">
                <a href="ImranAliCV-1.pdf" download class="btn btn-outline-light px-5 py-3 rounded-0 fw-bold shadow-sm text-decoration-none">
                    <i class="fas fa-file-download me-2"></i> DOWNLOAD CV
                </a>
            </div>
        </div>
    </header>

    <section class="content-section" style="background: #050505;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <span class="side-head">00 — Objective</span>
                </div>
                <div class="col-lg-9" data-aos="fade-up">
                    <h2 class="display-6 fw-bold mb-4">Professional Goal</h2>
                    <p class="lead text-secondary" style="line-height: 1.8; max-width: 800px;">
                        Enthusiastic Computer Science Student Specializing In Web And Mobile Development. Skilled In HTML, CSS, JavaScript, PHP, MySQL. Passionate About
                        Building Responsive, User-Focused Applications And Eager To Apply Academic Knowledge In A Real World Development Environment.
                    </p>
                    <div class="mt-4">
                        <p class="small text-white-50 italic">— Driven by Logic, Built with Code.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"><span class="side-head">01 — Journey</span></div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up">
                            <h4 class="mb-5 text-secondary text-uppercase small">Experience</h4>
                            <div class="resume-card">
                                <p class="resume-year">01/12/2025 — 01/06/2026</p>
                                <h3 class="resume-title">Full Stack PHP Web Developer</h3>
                                <p class="resume-subtitle">Pulse Associates</p>
                                <p class="text-secondary small">Crafting Dynamics, Full-Stack Solutions With PHP, MySQL And Modern JavaScript</p>
                            </div>
                            <div class="resume-card">
                                <p class="resume-year">04/09/2024 — 26/05/2025</p>
                                <h3 class="resume-title">Web Developer</h3>
                                <p class="resume-subtitle">University Of Sargodha</p>
                                <p class="text-secondary small">Developed And Maintained Front-End Pages Using HTML, CSS And JavaScript, Also Assisted In Database Integration Using PHP And MySQL</p>
                            </div>
                            <div class="resume-card">
                                <p class="resume-year">01/11/2025 — 28/01/2026</p>
                                <h3 class="resume-title">AI With Python</h3>
                                <p class="resume-subtitle">GCTW, Sargodha</p>
                                <p class="text-secondary small">Python-Powered AI Streamlining Secure Banking, Fraud Detection And Automated Services</p>
                            </div>
                            <div class="resume-card">
                                <p class="resume-year">04/02/2022 — 12/07/2022</p>
                                <h3 class="resume-title">Graphics Designer</h3>
                                <p class="resume-subtitle">Atta Sons Company And Freelance</p>
                                <p class="text-secondary small">Designed Marketing Visuals And UI Mockups For Client Websites</p>
                            </div>
                            <div class="resume-card">
                                <p class="resume-year">12/10/2023 — 04/03/2024</p>
                                <h3 class="resume-title">Data Entry Operator</h3>
                                <p class="resume-subtitle">Techuire Company And Freelance</p>
                                <p class="text-secondary small">Maintained And Organized Large Datasets Using Excel And Typing Master</p>
                            </div>
                            <div class="resume-card">
                                <p class="resume-year">11/10/2024 — 11/10/2025</p>
                                <h3 class="resume-title">Teaching</h3>
                                <p class="resume-subtitle">Al Dua Educators Complex School</p>
                                <p class="text-secondary small">Empowering Minds Through Knowledge, Patience And The Spark Of Curiosity</p>
                            </div>
                            <div class="resume-card">
                                <p class="resume-year">04/01/2025 — 10/09/2025</p>
                                <h3 class="resume-title">Cashier</h3>
                                <p class="resume-subtitle">Habib Bank Limited MicroFinance Department</p>
                                <p class="text-secondary small">Effieciently Managing Cash Transactions And Providing Excellent Customer Service Daily</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <h4 class="mb-5 text-secondary text-uppercase small">Education</h4>
                            <div class="resume-card">
                                <p class="resume-year">2025 — 2025</p>
                                <h3 class="resume-title">Microsoft Certified Azure AI Fundamentals</h3>
                                <p class="resume-subtitle">Government College Of Technology, Sargodha</p>
                            </div>
                            <div class="resume-card">
                                <p class="resume-year">2021 — 2025</p>
                                <h3 class="resume-title">Bachelor of Science in CS</h3>
                                <p class="resume-subtitle">University of Sargodha</p>
                            </div>
                            <div class="resume-card">
                                <p class="resume-year">2019 — 2021</p>
                                <h3 class="resume-title">Intermediate (F.Sc Pre Engineering)</h3>
                                <p class="resume-subtitle">Reader Group Of College</p>
                            </div>
                            <div class="resume-card">
                                <p class="resume-year">2017 — 2019</p>
                                <h3 class="resume-title">Metriculation (Science)</h3>
                                <p class="resume-subtitle">Govt. High School No, School</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section bg-white text-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"><span class="side-head text-dark">02 — Expertise</span></div>
                <div class="col-lg-9" data-aos="fade-up">
                    <h2 class="mb-5 display-6 fw-bold">Skills & Proficiencies</h2>
                    <div class="mb-5">
                        <div class="skill-item" style="border-color: #ddd;">C / C++</div>
                        <div class="skill-item" style="border-color: #ddd;">JavaScript, AI With Python</div>
                        <div class="skill-item" style="border-color: #ddd;">PHP, MySQL</div>
                        <div class="skill-item" style="border-color: #ddd;">HTML, CSS, Bootstrap</div>
                        <div class="skill-item" style="border-color: #ddd;">VS Code, GitHub, XAMPP, Figma, Canva, Capcut</div>
                        <div class="skill-item" style="border-color: #ddd;">Adobe Photoshop, Adobe Premiere Pro, Adobe Illustrator</div>
                        <div class="skill-item" style="border-color: #ddd;">MS Word, Excel, PowerPoint</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="contact-label text-dark">Languages</p>
                            <p class="fw-bold">English (Fluent), Urdu (Native), Punjabi, Chinese</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section" id="work">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"><span class="side-head">03 — Projects</span></div>
                <div class="col-lg-9">
                    <a href="https://github.com/Imran1278/pulseassociatessoftwarehouse" target="_blank" class="text-decoration-none text-white">
                    <div class="project-row" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="fw-bold">Pulse Software House Full Stack Website</h3>
                                <p class="text-secondary small">Professional Web Solutions, Secure User Registration And Advanced Database Management For Modern Application</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <span class="small text-secondary d-block">HTML5, CSS3, JavaScript, PHP, MySQL, Bootstrap</span>
                                <span class="small text-white-50">VIEW PROJECT</span>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="https://github.com/Imran1278/glucocare" target="_blank" class="text-decoration-none text-white">
                    <div class="project-row" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="fw-bold">GlucoCare Diabetes Website</h3>
                                <p class="text-secondary small">Professional Platform Providing Comprehensive Healtcare Solutions, Glucose Monitoring Services And Expert Medical Management</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <span class="small text-secondary d-block">HTML5, CSS3, JavaScript, PHP, MySQL, Bootstrap</span>
                                <span class="small text-white-50">VIEW PROJECT</span>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="#" target="_blank" class="text-decoration-none text-white">
                    <div class="project-row" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="fw-bold">PashuMandi World Wide Market Place Website</h3>
                                <p class="text-secondary small">Secure Livestock Market Place Featuring User Registration, OTP Verification, Real-Time Admin Broadcasts And Professional Management Dashboard</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <span class="small text-secondary d-block">HTML5, CSS3, JavaScript, PHP, MySQL, Bootstrap</span>
                                <span class="small text-white-50">VIEW PROJECT</span>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="#" target="_blank" class="text-decoration-none text-white">
                    <div class="project-row" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="fw-bold">Islamic Website</h3>
                                <p class="text-secondary small">Digital Archive Dedicated To Preserving Islamic Heritage, Spiritual Recitations And The Eternal Message</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <span class="small text-secondary d-block">HTML5, CSS3, JavaScript, PHP, MySQL, Bootstrap</span>
                                <span class="small text-white-50">VIEW PROJECT</span>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="https://github.com/Imran1278/DNTopology" target="_blank" class="text-decoration-none text-white">
                    <div class="project-row" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="fw-bold">Departmental Network Topology</h3>
                                <p class="text-secondary small">Designed A Simulated University Departmental Network Layout With Logical And Physical Connections</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <span class="small text-secondary d-block">Cisco Packet Tracer / Networking Tools / GNS3</span>
                                <span class="small text-white-50">VIEW PROJECT</span>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="https://github.com/Imran1278/scholarship-management-system" target="_blank" class="text-decoration-none text-white">
                    <div class="project-row" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="fw-bold">Student Management System</h3>
                                <p class="text-secondary small">Created A Crud Based System In C++ For Managing Student Records And Integrated Search, Update, Reporting Features</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <span class="small text-secondary d-block">C, C++, Turbo, Dev C++</span>
                                <span class="small text-white-50">VEIW PROJECT</span>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="https://github.com/Imran1278/Simple-Web-Application" target="_blank" class="text-decoration-none text-white">
                    <div class="project-row" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="fw-bold">Web Application System</h3>
                                <p class="text-secondary small">Created A BAsic Web Application Accessible Through A Browser, Simulating A Real World Online Services And Focused On Backend Logic And Responsive Frontend Design</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <span class="small text-secondary d-block">HTML, CSS3, JavaScript, PHP</span>
                                <span class="small text-white-50">VEIW PROJECT</span>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="https://github.com/Imran1278/realtime-chat-application" target="_blank" class="text-decoration-none text-white">
                    <div class="project-row" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="fw-bold">Messenger App Website</h3>
                                <p class="text-secondary small">Built A Real Time Chat Application Using PHP, MySQL, JavaScript And Designed A Responsive UI And Implemented Live Message Updates</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <span class="small text-secondary d-block">HTML, CSS, JavaScript, PHP, MySQL</span>
                                <span class="small text-white-50">VEIW PROJECT</span>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="https://github.com/Imran1278/Smart-Shopping-System" target="_blank" class="text-decoration-none text-white">
                    <div class="project-row" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="fw-bold">AI Features Smart Shopping Wesbite And Ontology</h3>
                                <p class="text-secondary small">Developed An AI Based E Commerce Platform To Recommend Products And Applied Ontology And Semantics Web Concepts For Intelligent Product Relations</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <span class="small text-secondary d-block">HTML5, CSS3, JavaScript, PHP, MySQL, Bootstrap</span>
                                <span class="small text-white-50">VEIW PROJECT</span>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="https://github.com/Imran1278/medicine-inventory-system-cpp" target="_blank" class="text-decoration-none text-white">
                        <div class="project-row" data-aos="fade-up">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="fw-bold">Medicine Inventory System In C++</h3>
                                    <p class="text-secondary small">Created A Medicine Based System In C++ For Managing All Medicine Records And Integrated Search, Update, Reporting Features</p>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <span class="small text-secondary d-block">C, C++, Turbo, Dev C++</span>
                                    <span class="small text-white-50">VEIW PROJECT</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="https://github.com/Imran1278/mediaplayerpro" target="_blank" class="text-decoration-none text-white">
                    <div class="project-row" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="fw-bold">Audio / Video Media Player</h3>
                                <p class="text-secondary small">Designed A Simple Desktop Media Player For Audio And Video Playback, Pause, Volume Adjustment</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <span class="small text-secondary d-block">C++, HTML, CSS, JavaScript</span>
                                <span class="small text-white-50">VEIW PROJECT</span>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"><span class="side-head">04 — Learning</span></div>
                <div class="col-lg-9" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <h5 class="fw-bold">Certification</h5>
                            <p class="text-secondary small">Graphics Designier — GMS University Society</p>
                            <p class="text-secondary small">Human Wefare Volunteer — Welfare University Society</p>
                            <p class="text-secondary small">Governance Volunteer  — VLG Paksitan</p>
                            <p class="text-secondary small">Web Development — Step By Step Company</p>
                            <p class="text-secondary small">Full Stack PHP Web Development — Logix College</p>
                            <p class="text-secondary small">IVD 2.0 — Alkhidmat Foundation</p>
                            <p class="text-secondary small">Azure AI Fundamentals With Python — Microsoft</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h5 class="fw-bold">Courses</h5>
                            <p class="text-secondary small">Graphics Designing — GFX Mentor</p>
                            <p class="text-secondary small">Web Development — Step By Step Company</p>
                            <p class="text-secondary small">Video Editing — GMS Society</p>
                            <p class="text-secondary small">MS Office — Techuire Software House</p>
                            <h5 class="fw-bold">Relevant Courses From University Of Sargodha</h5>
                            <p class="text-secondary small">Programming Fundamental, Discrete Structures, OOP, Software Engineering, Database, Design Analysis, OS, AI, Capston, E Commerce, Web Semantics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"><span class="side-head">05 — Reach Me</span></div>
                <div class="col-lg-6" data-aos="fade-right">
                    <form action="#" method="POST">
                        <input type="text" class="form-control" placeholder="NAME">
                        <input type="email" class="form-control" placeholder="EMAIL ADDRESS">
                        <textarea class="form-control" rows="4" placeholder="HOW CAN I HELP?"></textarea>
                        <button class="btn btn-outline-light px-5 py-3 mt-4 rounded-0">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="col-lg-3 mt-5 mt-lg-0" data-aos="fade-left">
                    <div class="contact-info">
                        <p class="contact-label">Direct Line</p>
                        <p>+92 319 3233668</p>
                        <p>+92 304 6177024</p>
                    </div>
                    <div class="contact-info">
                        <p class="contact-label">Email</p>
                        <p>imranalidev512@gmail.com</p>
                    </div>
                    <div class="contact-info">
                        <p class="contact-label">Digital Presence</p>
                        <div class="mt-2">
                            <a href="https://www.linkedin.com/in/imran-ali-708810373/" target="_blank" class="text-white d-block mb-2 small text-decoration-none">
                                <i class="fab fa-linkedin-in me-2"></i> LINKEDIN ↗
                            </a>
                            <a href="https://github.com/Imran1278" target="_blank" class="text-white d-block mb-2 small text-decoration-none">
                                <i class="fab fa-github me-2"></i> GITHUB ↗
                            </a>
                            <a href="https://www.instagram.com/framefantastic512/" target="_blank" class="text-white d-block mb-2 small text-decoration-none">
                                <i class="fab fa-instagram me-2"></i> INSTAGRAM ↗
                            </a>
                            <a href="https://www.youtube.com/@imran-vlogs1214" target="_blank" class="text-white d-block mb-2 small text-decoration-none">
                                <i class="fab fa-youtube me-2"></i> YOUTUBE ↗
                            </a>
                        </div>
                        <p class="contact-label mt-4">Professional References</p>
                        <p class="small text-secondary mb-0">Pulse Associates • Digital Solutions</p>
                        <p class="small text-secondary italic">"Exceptional logic and database management skills."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5 text-center text-secondary border-top border-dark">
        <div class="container">
            <p class="small">© <?php echo date('Y'); ?> SIGNED BY IMRAN ALI. ALL RIGHTS RESERVED.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
    </script>
</body>
</html>