<?php
//session_start();
header("Location: https://www.mitsde.com/");
exit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FDP on Generative AI for Educators.</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="static/css/style.css">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Join our AI Classroom Makeover FDP to transform your teaching methods with Generative AI tools. Learn to implement AI in education through practical demonstrations.">
    <meta name="keywords"
        content="AI in education, generative AI, FDP for educators, education technology, AI classroom, teaching innovation">
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/validate.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="100">

    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="https://mitsde.com/"><img src="static/img/mit-logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#agenda">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#instructor">Instructor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link register-btn" href="#">Register Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="fw-bold mt-5">FDP on Generative AI for Educators:</h1>
                    <p class="mb-4">From Prompting to Pedagogy, Research & Gamification</p>
                    <p>FDP Fee: ₹499 (Includes an  E - Certificate, Toolkit Access, Resource Pack &
                                Badge)</p>
                    <!-- <p class="lead mb-4">Welcome to "Gen AI for Educators" — a hands-on, immersive FDP crafted to
                        help educators explore, understand, and implement Generative AI tools that revolutionize the
                        classroom experience.</p> -->
                    <div class="hero-btns">
                        <a href="#" class="btn btn-primary btn-lg me-3">Register Now</a>
                        <a href="#about" class="btn btn-outline-light btn-lg">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4 mt-5">
                    <div class="hero-form">
                        <div class="card shadow">
                            <div class="card-body">
                                <h3 class="text-center mb-4">Register Now</h3>
                                <?php //include "quickcontactform.php" ?>
                                <?php   include "contactform.php" ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Education is Evolving</h2>
                    <div class="section-divider"></div>
                    <h3 class="section-subtitle">Are You Ready to Lead the Change?</h3>
                </div>
            </div>

            <!-- Questions Section -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                    <div class="question-box mb-4">
                        <p><i class="fas fa-question-circle"></i> What if your next lesson plan could be co-created with
                            Artificial Intelligence?</p>
                    </div>
                    <div class="question-box mb-4">
                        <p><i class="fas fa-question-circle"></i> What if you could generate personalized learning
                            resources in minutes, not hours?</p>
                    </div>
                    <div class="question-box mb-4">
                        <p><i class="fas fa-question-circle"></i> What if you could empower students with tools that
                            mirror tomorrow's world?</p>
                    </div>
                </div>
            </div>

            <!-- FDP Overview Section -->
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-heading mb-4">
                            <h3>FDP Overview</h3>
                        </div>
                        <p class="lead">Welcome to "Gen AI for Educators" — a hands-on, immersive FDP crafted to
                            help educators explore, understand, and implement Generative AI tools that revolutionize the
                            classroom experience.</p>
                        <p>It's not just about tools – it's about simplifying educators' administrative work, so they can
                            focus on what matters most: academics.</p>
                        <div class="highlight-box mt-4">
                            <h4>FDP Title:</h4>
                            <p>Gen AI for Educators – Empowering the Future of Learning</p>
                            <h4 class="mt-3">🎯 New Highlight – "AI Classroom Makeover" Live Demo</h4>
                            <p>Witness a traditional textbook lesson plan get transformed LIVE using Gen AI tools—right
                                before your eyes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="about-img">
                        <img style="width:500px; height: 500px;" src="static/img/ai-image.png" alt="">
                        <!-- <svg class="smaller-svg" viewBox="0 0 600 400" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#6c63ff"
                                d="M361.528 150.191c30.087 13.953 46.686 45.775 46.686 78.527 0 32.752-16.452 66.574-48.229 86.812-31.933 20.204-79.211 26.794-115.315 9.056-36.084-17.594-61.001-59.38-52.536-96.428 8.609-37.214 50.547-69.698 90.329-73.028 39.638-3.305 77.702 22.423 106.567 36.399v-.021Z" />
                            <path fill="#3f3d56"
                                d="M200.123 121.538h259.754c3.452 0 6.25-2.798 6.25-6.25v-62.5c0-3.452-2.798-6.25-6.25-6.25H200.123c-3.452 0-6.25 2.798-6.25 6.25v62.5c0 3.452 2.798 6.25 6.25 6.25Z" />
                            <path fill="#fff" d="M453.877 112.038H206.123V58.788h247.754v53.25z" />
                            <path fill="#6c63ff"
                                d="M267.623 91.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM297.623 91.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM327.623 91.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM357.623 91.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM387.623 91.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM417.623 91.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0Z" />
                            <path fill="#3f3d56"
                                d="M200.123 246.538h259.754c3.452 0 6.25-2.798 6.25-6.25v-62.5c0-3.452-2.798-6.25-6.25-6.25H200.123c-3.452 0-6.25 2.798-6.25 6.25v62.5c0 3.452 2.798 6.25 6.25 6.25Z" />
                            <path fill="#fff" d="M453.877 237.038H206.123v-53.25h247.754v53.25z" />
                            <path fill="#6c63ff"
                                d="M267.623 210.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM297.623 210.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM327.623 210.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM357.623 210.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM387.623 210.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM417.623 210.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0Z" />
                            <path fill="#3f3d56"
                                d="M200.123 371.538h259.754c3.452 0 6.25-2.798 6.25-6.25v-62.5c0-3.452-2.798-6.25-6.25-6.25H200.123c-3.452 0-6.25 2.798-6.25 6.25v62.5c0 3.452 2.798 6.25 6.25 6.25Z" />
                            <path fill="#fff" d="M453.877 362.038H206.123v-53.25h247.754v53.25z" />
                            <path fill="#6c63ff"
                                d="M267.623 335.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM297.623 335.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM327.623 335.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM357.623 335.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM387.623 335.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0ZM417.623 335.538a10 10 0 1 1-20 0 10 10 0 0 1 20 0Z" />
                            <path fill="#f2f2f2"
                                d="M140 280c-38.66 0-70-31.34-70-70s31.34-70 70-70 70 31.34 70 70-31.34 70-70 70Zm0-130c-33.08 0-60 26.92-60 60s26.92 60 60 60 60-26.92 60-60-26.92-60-60-60Z" />
                            <path fill="#6c63ff"
                                d="M100 200h20v20h-20zM140 200h20v20h-20zM160 160h20v20h-20zM120 160h20v20h-20zM80 160h20v20h-20z" />
                        </svg> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FDP Objective Section -->
    <section id="objective" class="section-padding bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-2">
                    <h2 class="section-title">FDP Objective</h2>
                    <div class="section-divider"></div>
                    <p class="lead">To introduce educators to the world of Generative AI through practical
                        demonstrations and curated tools, enabling them to reimagine teaching methods and drive
                        meaningful innovation within their institutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Attend Section -->
    <section id="why-attend" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <h2 class="section-title">Why Attend?</h2>
                    <div class="section-divider"></div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="why-attend-card">
                                <div class="why-attend-icon">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <h4>Live AI Demonstrations</h4>
                                <p>Experience live AI demonstrations tailored specifically for educators and classroom
                                    implementation.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-attend-card">
                                <div class="why-attend-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h4>Expert Insights</h4>
                                <p>Learn from academic leaders and industry experts with practical experience in EdTech
                                    implementation.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-attend-card">
                                <div class="why-attend-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h4>Exclusive Resources</h4>
                                <p>Get exclusive e-books, templates, and resources to deepen your learning
                                    post-FDP.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-attend-card">
                                <div class="why-attend-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <h4>Certification</h4>
                                <p>Receive a Certificate of Participation and digital badge to showcase your new skills.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Highlights Section</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Prompting Techniques for Educators</h4>
                            <p>Craft powerful prompts to generate lesson plans, assessments, feedback, and more using tools like ChatGPT and NotebookLM.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="feature-content">
                            <h4>AI-Powered Teaching Tools</h4>
                            <p>Explore tools like MagicSchool, Eduaide, and Diffit to automate and personalize classroom content with ease.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Ethical and Responsible AI Use</h4>
                            <p>Understand the ethical considerations and responsible ways to implement AI in your
                                classroom.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="feature-content">
                            <h4> Research & Academic Writing Support</h4>
                            <p>Use tools like Research Rabbit, Elicit, and Scite to speed up literature reviews, citations, and research summaries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="feature-content">
                            <h4> Gamification & Engagement Tools</h4>
                            <p>Leverage AI with platforms like Curipod, Quizizz AI, and Kahoot to build interactive learning games in minutes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="feature-content">
                            <h4> Responsible AI Use & Ethics</h4>
                            <p>Understand the frameworks for privacy, misinformation, and ethical integration in academic environments.</p>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>

    <!-- Designed For Section -->
    <section id="designed-for" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Designed For</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="designed-card">
                        <div class="designed-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <h4>Principals, Teachers & University Faculty</h4>
                        <p>Educational leaders seeking to implement AI in their institutions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="designed-card">
                        <div class="designed-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>School & College Educators</h4>
                        <p>K–12 and Higher Education professionals looking to enhance teaching.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="designed-card">
                        <div class="designed-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4>Curriculum Designers</h4>
                        <p>EdTech Professionals & Instructional Designers creating modern learning experiences.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="designed-card">
                        <div class="designed-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h4>Training & Development Professionals</h4>
                        <p>Corporate L&D teams responsible for employee education.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="designed-card">
                        <div class="designed-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Special Education Teachers</h4>
                        <p>B.Ed./M.Ed. Program Heads implementing inclusive education.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="designed-card">
                        <div class="designed-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>EdLeaders & Policy Makers</h4>
                        <p>Anyone looking to upskill in AI-powered teaching methods.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">What You'll Learn</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Transforming the Education Ecosystem</h4>
                            <p>Learn how Gen AI is revolutionizing the entire educational landscape, from content
                                creation to assessment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Practical Tools for Educators</h4>
                            <p>Discover and practice with AI tools designed to enhance content creation, teaching
                                methods, and assessments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Ethical and Responsible AI Use</h4>
                            <p>Understand the ethical considerations and responsible ways to implement AI in your
                                classroom.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Hands-on Session</h4>
                            <p>Build lesson plans, quizzes, and presentations with AI assistance during guided FDP
                                activities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Leadership Strategies</h4>
                            <p>Learn effective approaches to lead Gen AI adoption within your educational institution.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="feature-content">
                            <h4>AI Teaching Persona</h4>
                            <p>Discover your unique AI teaching style with a fun pre-FDP quiz and develop your
                                approach.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Learning Outcomes</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="outcome-card">
                        <div class="outcome-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h4>Master 5+ Gen AI Tools</h4>
                        <p>Boost productivity and creativity in teaching with practical AI applications.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="outcome-card">
                        <div class="outcome-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h4>Design AI-powered Materials</h4>
                        <p>Create lesson plans, assessments, and learning modules with AI assistance.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="outcome-card">
                        <div class="outcome-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h4>Discover Your AI Teaching Persona</h4>
                        <p>Find your teaching style with a fun pre-FDP quiz.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="outcome-card">
                        <div class="outcome-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h4>Learn Prompt Engineering</h4>
                        <p>Master the art of crafting effective AI prompts for classroom innovation.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="outcome-card">
                        <div class="outcome-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h4>Experience Live Transformation</h4>
                        <p>Witness a classroom transformation using Gen AI in real-time.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="outcome-card">
                        <div class="outcome-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h4>Receive Future-Ready Badge</h4>
                        <p>Walk away with a badge and LinkedIn post templates to showcase your skills.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agenda Section -->
    <section id="agenda" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Detailed Agenda</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="agenda-table">
                        <div class="agenda-item">
                            <div class="agenda-time">09:30 AM – 10:00 AM</div>
                            <div class="agenda-content">
                                <h4>Welcome, Icebreaker & AI Personality Quiz</h4>
                                <p>Get to know fellow educators and discover your AI teaching persona.</p>
                            </div>
                        </div>
                        <div class="agenda-item">
                            <div class="agenda-time">10:00 AM – 11:00 AM</div>
                            <div class="agenda-content">
                                <h4>Demystifying Generative AI in Education</h4>
                                <p>Understand the foundations of Gen AI and its applications in teaching.</p>
                            </div>
                        </div>
                        <div class="agenda-item">
                            <div class="agenda-time">11:00 AM – 12:00 PM</div>
                            <div class="agenda-content">
                                <h4>Top AI Tools for Educators</h4>
                                <p>Explore the most impactful AI tools designed specifically for education.</p>
                            </div>
                        </div>
                        <div class="agenda-item">
                            <div class="agenda-time">12:00 PM – 01:00 PM</div>
                            <div class="agenda-content">
                                <h4>AI in Content Creation</h4>
                                <p>Learn to create engaging educational content with AI assistance.</p>
                            </div>
                        </div>
                        <div class="agenda-item">
                            <div class="agenda-time">01:00 PM – 02:00 PM</div>
                            <div class="agenda-content">
                                <h4>Lunch Break</h4>
                                <p>Network with peers and discuss morning insights.</p>
                            </div>
                        </div>
                        <div class="agenda-item">
                            <div class="agenda-time">02:00 PM – 02:30 PM</div>
                            <div class="agenda-content">
                                <h4>Power Talk / Keynote – Vision 2030</h4>
                                <p>Inspirational talk on the future of AI in education.</p>
                            </div>
                        </div>
                        <div class="agenda-item">
                            <div class="agenda-time">02:30 PM – 03:30 PM</div>
                            <div class="agenda-content">
                                <h4>AI for Assessments, Feedback & Personalized Learning</h4>
                                <p>Discover how AI can transform student evaluation and individualized instruction.</p>
                            </div>
                        </div>
                        <div class="agenda-item">
                            <div class="agenda-time">03:30 PM – 04:00 PM</div>
                            <div class="agenda-content">
                                <h4>"AI Classroom Makeover" Live Demo</h4>
                                <p>Witness a traditional lesson transform with AI tools in real-time.</p>
                            </div>
                        </div>
                        <div class="agenda-item">
                            <div class="agenda-time">04:00 PM – 04:30 PM</div>
                            <div class="agenda-content">
                                <h4>Ethics, Bias & Academic Integrity in AI</h4>
                                <p>Navigate important ethical considerations when implementing AI in education.</p>
                            </div>
                        </div>
                        <div class="agenda-item">
                            <div class="agenda-time">04:30 PM – 05:00 PM</div>
                            <div class="agenda-content">
                                <h4>Q&A, Badge Distribution & LinkedIn Share Toolkit</h4>
                                <p>Wrap up with answers to your questions and take-home resources.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bonus Features Section -->
    <section id="bonus" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Bonus Features</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="bonus-card">
                        <div class="bonus-icon">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h4>AI Classroom Makeover</h4>
                        <p>Watch static lesson content evolve into dynamic, AI-powered instruction in our live
                            demonstration.</p>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-4 mb-4">
                    <div class="bonus-card">
                        <div class="bonus-icon">
                            <i class="fas fa-microphone"></i>
                        </div>
                        <h4>Power Talk: Vision 2030</h4>
                        <p>A keynote session from a prominent voice in the EdTech landscape discussing the future of
                            education.</p>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="bonus-card">
                        <div class="bonus-icon">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <h4>AI Teaching Persona Quiz</h4>
                        <p>Discover your unique AI teaching style through a quick pre-FDP assessment quiz.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="bonus-card">
                        <div class="bonus-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4>Future-Ready Badge & LinkedIn Share Pack</h4>
                        <p>Get a shareable digital badge and pre-made LinkedIn post templates to showcase your new
                            skills.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="bonus-card">
                        <div class="bonus-icon">
                            <i class="fas fa-keyboard"></i>
                        </div>
                        <h4>Prompt Engineering Module</h4>
                        <p>Learn the art of crafting effective prompts to maximize AI-powered teaching outcomes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instructor Section -->
    <section id="instructor" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Meet Your Instructor</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0" style="width: max-content;">
                    <div class="instructor-img">
                        <img class="img-fluid" src="static/img/generative-ai.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="instructor-info">
                        <h3>Srinivas Prabhu</h3>
                        <p class="instructor-title">Founder – Digital Maven | Director – Incanto Dynamics</p>
                        <p class="instructor-bio">An EdTech visionary and seasoned AI strategist, Srinivas has conducted
                            over 100 FDPs at top institutes. With deep expertise in Digital Pedagogy, Gen AI, and
                            Automation Tools, he turns complex AI systems into simple, engaging teaching aids.</p>

                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <div class="instructor-credentials">
                                    <h4>Areas of Expertise</h4>
                                    <ul>
                                        <li><i class="fas fa-check-circle"></i> Founder & AI Strategist</li>
                                        <li><i class="fas fa-check-circle"></i> Generative AI Pioneer</li>
                                        <li><i class="fas fa-check-circle"></i> Industry Mentor & Business Growth Leader
                                        </li>
                                        <li><i class="fas fa-check-circle"></i> AI Event Architect</li>
                                        <li><i class="fas fa-check-circle"></i> Educator & Ecosystem Builder</li>
                                        <li><i class="fas fa-check-circle"></i> Innovation-Driven Leadership</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="instructor-education">
                                    <h4>Education & Certifications</h4>
                                    <ul>
                                        <li><i class="fas fa-graduation-cap"></i> PhD Candidate (Research Scholar) –
                                            Presidency University</li>
                                        <li><i class="fas fa-graduation-cap"></i> Executive MBA – Liverpool John Moores
                                            University, UK</li>
                                        <li><i class="fas fa-graduation-cap"></i> Advanced General Management Program –
                                            IMT Ghaziabad</li>
                                        <li><i class="fas fa-graduation-cap"></i> M.Com. (FA) – Seshadripuram College
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">What Educators Say</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <i class="fas fa-quote-left"></i>
                                        <p>"An eye-opening FDP that made AI practical and accessible for all
                                            educators. Srinivas has a gift for simplifying complex tools into actionable
                                            takeaways."</p>
                                        <div class="testimonial-author">
                                            <h5>Dr. Anjali Mehta</h5>
                                            <p>PES University</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <i class="fas fa-quote-left"></i>
                                        <p>"The 'AI Classroom Makeover' was mind-blowing! I could instantly see how I'll
                                            revamp my entire teaching approach."</p>
                                        <div class="testimonial-author">
                                            <h5>Senior Faculty</h5>
                                            <p>Management Dept., Christ University</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <i class="fas fa-quote-left"></i>
                                        <p>"The hands-on activities really helped me understand how to implement AI in
                                            my classroom. I now feel confident using these tools with my students."</p>
                                        <div class="testimonial-author">
                                            <h5>Prof. Ramesh Kumar</h5>
                                            <p>Bangalore University</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="prev">
                            <i class="fas fa-chevron-left"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="next">
                            <i class="fas fa-chevron-right"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Testimonials </h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="testimonialCarousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <i class="fas fa-quote-left"></i>
                                        <p>“It was an amazing session, and it was a hands-on experience.”</p>
                                        <div class="testimonial-author">
                                            <h5>Pravin Pawade</h5>
                                            <!-- <p>PES University</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <i class="fas fa-quote-left"></i>
                                        <p>“The resource person was very patient enough to answer all our doubts. Thank you for enriching us.”</p>
                                        <div class="testimonial-author">
                                            <h5>Ratnakar Kilaparthi</h5>
                                            <!-- <p>Management Dept., Christ University</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <i class="fas fa-quote-left"></i>
                                        <p>“Amazing session, learnt a lot and a lot more to learn. Wonderfully conducted! Engaging, insightful and well organized.”</p>
                                        <div class="testimonial-author">
                                            <h5>Josephine Mathew</h5>
                                            <!-- <p>Bangalore University</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="carousel-item">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <i class="fas fa-quote-left"></i>
                                        <p>“This was really helpful. Learnt a lot.”</p>
                                        <div class="testimonial-author">
                                            <h5>Prasad</h5>
                                            <!-- <p>Bangalore University</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="carousel-item">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <i class="fas fa-quote-left"></i>
                                        <p>“Amazing Session! Got to know so many new things. Plus the way sir explained it made it very easy to process. Thanks a lot Sir and MITSDE Team for arranging the session.”</p>
                                        <div class="testimonial-author">
                                            <h5>Charulata Wankhede</h5>
                                            <!-- <p>Bangalore University</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="carousel-item">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <i class="fas fa-quote-left"></i>
                                        <p>“It was such an informative session. Thank you for introducing us to the world of prompting and AI tools.”</p>
                                        <div class="testimonial-author">
                                            <h5>Dr. Garima Bhalla</h5>
                                            <!-- <p>Bangalore University</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel1"
                            data-bs-slide="prev">
                            <i class="fas fa-chevron-left"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel1"
                            data-bs-slide="next">
                            <i class="fas fa-chevron-right"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#testimonialCarousel1" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#testimonialCarousel1" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#testimonialCarousel1" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                                  <button type="button" data-bs-target="#testimonialCarousel1" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                                  <button type="button" data-bs-target="#testimonialCarousel1" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                                  <button type="button" data-bs-target="#testimonialCarousel1" data-bs-slide-to="5"
                                aria-label="Slide 6"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Section -->
    <!-- <section id="register" class="section-padding bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="registration-card">
                        <div class="registration-header">
                            <h3>Register Now</h3>
                            <p>FDP Fee: ₹499 (Includes a Shareable Certificate, Toolkit Access, Resource Pack &
                                Badge)</p>
                            <p><strong>Limited Seats Only – Secure your spot now!</strong></p>
                        </div>
                        <form id="registration-form" action="/register" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Full Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <div class="invalid-feedback">Please enter your name</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">Please enter a valid email address</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="institution" class="form-label">Institution/Organization <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="institution" name="institution"
                                        required>
                                    <div class="invalid-feedback">Please enter your institution name</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="role" class="form-label">Your Role <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="role" name="role" required>
                                        <option value="" selected disabled>Select your role</option>
                                        <option value="Teacher/Professor">Teacher/Professor</option>
                                        <option value="Principal/Director">Principal/Director</option>
                                        <option value="Curriculum Designer">Curriculum Designer</option>
                                        <option value="Education Technology Specialist">Education Technology Specialist
                                        </option>
                                        <option value="Student">Student</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="invalid-feedback">Please select your role</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to receive communications about the FDP and related educational
                                        content.
                                    </label>
                                    <div class="invalid-feedback">You must agree before submitting</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Register Now</button>
                            </div>
                            <div class="payment-info text-center">
                                <p>You will receive payment instructions after registration.</p>
                                <div class="payment-methods">
                                    <i class="fab fa-cc-visa"></i>
                                    <i class="fab fa-cc-mastercard"></i>
                                    <i class="fab fa-cc-paypal"></i>
                                    <i class="fas fa-university"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Contact Section -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Need Help?</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-info">
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <!-- <div class="contact-item">
                                <i class="fas fa-phone-alt"></i>
                                <p>Call us: +91 9112-207-207</p>
                            </div> -->
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <p>Call us: +91 9607043577</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Venue: <span id="venue-to-be-announced">MIT Alandi Campus, Moshi-Alandi Road, Opposite to
                                    Gajanan Maharaj Sansthan Alandi Pune, Maharashtra 412105</span></p>
                        </div>
                        <!-- <div class="contact-item">
                            <i class="fas fa-calendar"></i>
                            <p>Date: <span id="date-to-be-announced">[To Be Announced]</span></p>
                        </div> -->
                        <div class="contact-social">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-lg-start">
                    <div class="copyright">
                        Copyright &copy; 2023 AI Classroom Makeover. All Rights Reserved.
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="me-3 text-decoration-none" href="#">Privacy Policy</a>
                    <a class="me-3 text-decoration-none" href="#">Terms of Service</a>
                    <a class="text-decoration-none" href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Sticky Contact Form -->
    <?php //include "side-form.php" ?>
    <!-- Sticky Contact Form End-->

    <!-- Back to top button -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="static/js/main.js"></script>

</body>

</html>