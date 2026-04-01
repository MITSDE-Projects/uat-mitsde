<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MITSDE</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/favicon.ico" rel="apple-touch-icon">
    <!-- google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- google font -->

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontawesome cdn -->

    <link rel="stylesheet" href="assets/css/style-carrer-page.css">



</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo-mit-school-of-distance-education-4.png" alt="Logo"
                    style="padding-left: -31px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner Section with Form -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <!-- Text Column -->
                <div class="col-md-6">
                    <h1 class="animate-text">The Wait is Over!</h1>
                    <p>Introducing our Career Accelerator Programs (CAP)!</p>
                    <P>Don’t miss out – Enroll Now!</P>
                </div>
                <!-- Form Column -->
                <div class="col-md-6">
                    <form class="banner-form">
                        <div class="mb-2">

                            <input type="text" class="form-control" id="name" placeholder="Enter Your Name" required>
                        </div>
                        <div class="mb-2">

                            <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                        </div>
                        <select class="form-select mb-2" aria-label="Default select example">
                            <option selected>Select Courses</option>
                            <option value="graduate">Graduate</option>
                            <option value="post graduate">Post Graduate</option>
                            <option value="phd">PHD</option>
                        </select>
                        <button type="submit" class="btn btn-color w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-1">
        <div class="stats-container">
            <div class="stat">
                <h4>10K</h4>
                <p>Learners</p>
            </div>
            <div class="divider"></div>
            <div class="stat">
                <h4>20k</h4>
                <p>Training Hours</p>
            </div>
            <div class="divider"></div>
            <div class="stat">
                <h4>50+</h4>
                <p>Client Served</p>
            </div>
            <div class="divider"></div>
            <div class="stat">
                <h4>9.5/10</h4>
                <p>Customer Satisfaction</p>
            </div>
        </div>
    </div>

    <!-- Courses Section -->
    <section class="container my-5" id="courses">

        <h2 class="module-title">Courses</h2>
        <div class="row courses mt-4">
            <!-- Course 1 -->
            <div class="col-md-6">
                <h2 class="module-title-new">Join the best Advanced Certificate in UI/UX</h2>
                <p class="mt-3">User Experience Design (UI/UX) aims to create
                    meaningful and valuable user experiences.

                </p>
                <h5>Why should you choose an AI in Digital Marketing course?</h5>
                <p>Artificial intelligence (AI) refers to the ability of a computer or machine to mimic the competencies
                    of the human mind. The technology uses machine learning, robotics, artificial neural networks, and
                    natural language processing to provide high versatility and adaptability to specific user
                    requirements</p>
                <p>According to a study, more than 80 per cent of industry experts integrate some form of AI technology
                    into their online marketing activities. AI has found its roots in the digital marketing domain.
                    Roughly around 50% of marketers apply AI in ad targeting. Other popular activities include
                    personalizing content, optimizing e-mail campaigns, and calculating conversion probability.</p>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="stats-container">
                            <div class="stat">
                                <i class="fa-solid fa-clock"></i>
                                <h6>9 Months </h6>
                                <span>Duration</span>
                            </div>
                            <div class="divider"></div>
                            <div class="stat">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <h6>Online </h6>
                                <span>Training Type</span>
                            </div>
                            <div class="divider"></div>
                            <div class="stat">
                                <i class="fa-solid fa-language"></i>
                                <h6>English</h6>
                                <span>Language </span>
                            </div>
                            <div class="divider"></div>
                            <div class="stat">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                <h6>₹ 95,000 /-</h6>
                                <span>Program Fee</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <img src="assets/img/ui-ux.webp" class="img-fluid rounded-4" alt="Course 1" loading="lazy">
            </div>
        </div>
        <hr>
        <div class="row courses mt-4">
            <div class="col-md-6 d-flex justify-content-end">
                <img src="assets/img/digital.webp" class="img-fluid rounded-4" alt="Course 1" loading="lazy">
            </div>
            <!-- Course 1 -->
            <div class="col-md-6">
                <h2 class="module-title-new">
                    AI in Digital Marketing
                </h2>
                <p class="mt-3">User Experience Design (UI/UX) aims to create
                    meaningful and valuable user experiences.

                </p>
                <h5>Why should you choose an AI in Digital Marketing course?</h5>
                <p>Artificial intelligence (AI) refers to the ability of a computer or machine to mimic the competencies
                    of the human mind. The technology uses machine learning, robotics, artificial neural networks, and
                    natural language processing to provide high versatility and adaptability to specific user
                    requirements</p>
                <p>According to a study, more than 80 per cent of industry experts integrate some form of AI technology
                    into their online marketing activities. AI has found its roots in the digital marketing domain.
                    Roughly around 50% of marketers apply AI in ad targeting. Other popular activities include
                    personalizing content, optimizing e-mail campaigns, and calculating conversion probability.</p>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="stats-container">
                            <div class="stat">
                                <i class="fa-solid fa-clock"></i>
                                <h6>4 Months </h6>
                                <span>Duration</span>
                            </div>
                            <div class="divider"></div>
                            <div class="stat">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <h6>Online </h6>
                                <span>Training Type</span>
                            </div>
                            <div class="divider"></div>
                            <div class="stat">
                                <i class="fa-solid fa-language"></i>
                                <h6>English</h6>
                                <span>Language </span>
                            </div>
                            <div class="divider"></div>
                            <div class="stat">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                <h6>₹ 80,000 /-</h6>
                                <span>Program Fee</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="row courses mt-4">
            <!-- Course 1 -->
            <div class="col-md-6">
                <h2 class="module-title-new">AI and ML</h2>
                <p class="mt-3">User Experience Design (UI/UX) aims to create
                    meaningful and valuable user experiences.

                </p>
                <h5>Why should you choose an AI in Digital Marketing course?</h5>
                <p>Artificial intelligence (AI) refers to the ability of a computer or machine to mimic the competencies
                    of the human mind. The technology uses machine learning, robotics, artificial neural networks, and
                    natural language processing to provide high versatility and adaptability to specific user
                    requirements</p>
                <p>According to a study, more than 80 per cent of industry experts integrate some form of AI technology
                    into their online marketing activities. AI has found its roots in the digital marketing domain.
                    Roughly around 50% of marketers apply AI in ad targeting. Other popular activities include
                    personalizing content, optimizing e-mail campaigns, and calculating conversion probability.</p>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="stats-container">
                            <div class="stat">
                                <i class="fa-solid fa-clock"></i>
                                <h6>4 Months </h6>
                                <span>Duration</span>
                            </div>
                            <div class="divider"></div>
                            <div class="stat">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <h6>Online </h6>
                                <span>Training Type</span>
                            </div>
                            <div class="divider"></div>
                            <div class="stat">
                                <i class="fa-solid fa-language"></i>
                                <h6>English</h6>
                                <span>Language </span>
                            </div>
                            <div class="divider"></div>
                            <div class="stat">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                <h6>₹ 80,000 /-</h6>
                                <span>Program Fee</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <img src="assets/img/machine2.webp" class="img-fluid rounded-4" alt="Course 1" loading="lazy">
            </div>
        </div>
        <hr>
        <div class="row courses mt-4">
            <div class="col-md-6 d-flex justify-content-end">
                <img src="assets/img/data-science.webp" class="img-fluid rounded-4" alt="Course 1" loading="lazy">
            </div>
            <!-- Course 1 -->
            <div class="col-md-6">
                <h2 class="module-title-new">Professional Certification in Data Science</h2>
                <p class="mt-3">User Experience Design (UI/UX) aims to create
                    meaningful and valuable user experiences.

                </p>
                <h5>Why should you choose an AI in Digital Marketing course?</h5>
                <p>Artificial intelligence (AI) refers to the ability of a computer or machine to mimic the competencies
                    of the human mind. The technology uses machine learning, robotics, artificial neural networks, and
                    natural language processing to provide high versatility and adaptability to specific user
                    requirements</p>
                <p>According to a study, more than 80 per cent of industry experts integrate some form of AI technology
                    into their online marketing activities. AI has found its roots in the digital marketing domain.
                    Roughly around 50% of marketers apply AI in ad targeting. Other popular activities include
                    personalizing content, optimizing e-mail campaigns, and calculating conversion probability.</p>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="stats-container">
                            <div class="stat">
                                <i class="fa-solid fa-clock"></i>
                                <h6>4 Months </h6>
                                <span>Duration</span>
                            </div>
                            <div class="divider"></div>
                            <div class="stat">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <h6>Online </h6>
                                <span>Training Type</span>
                            </div>
                            <div class="divider"></div>
                            <div class="stat">
                                <i class="fa-solid fa-language"></i>
                                <h6>English</h6>
                                <span>Language </span>
                            </div>
                            <div class="divider"></div>
                            <div class="stat">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                <h6>₹ 80,000 /-</h6>
                                <span>Program Fee</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="row" id="contact">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.7601963569646!2d73.88928107399565!3d18.67475396444874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c7cbe5120939%3A0xb9e243be7b371007!2sMIT%20School%20of%20Design%2C%20Alandi%2C%20Pune!5e0!3m2!1sen!2sin!4v1728022891341!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>


        </div>
    </section>




    <!-- Bootstrap JS (for interactive elements like the navbar) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
