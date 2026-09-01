<?php $pagename = "Chat with Support"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Chat with Support | MITSDE Student Success Team</title>

    <meta name="description" content="Get instant assistance with MIT School of Distance Education's support team. Find answers to queries about exams, admissions, LMS, placement, and more." />
    <meta name="keywords" content="MITSDE support, student success team, exam queries, academic queries, admission process, LMS queries, placement queries, distance education support" />

    <link rel="canonical" href="https://mitsde.com/chat-with-support" />

    <meta property="og:title" content="Chat with Support | MITSDE Student Success Team">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/chat-with-support">
    <meta property="og:description" content="Get instant assistance with MIT School of Distance Education's support team. Find answers to queries about exams, admissions, LMS, placement, and more.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets-new/images/student.png">

    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />
    <link rel="stylesheet" href="css-new/intlTelInput.css">

<?php include "5-common-seo-tag-1.php" ?>
</head>

<body>
<?php include "5-common-seo-tag-2.php" ?>
<?php include "header-new.php" ?>

<!-- ═══════════════════════════════════════════════
   PROGRAM HERO
════════════════════════════════════════════════ -->
<section class="hero ph-hero">

    <nav class="page-breadcrumb" aria-label="Breadcrumb">
        <span class="pb-line"></span>
        <a href="./">Home</a>
        <span class="pb-sep">/</span>
        <span class="pb-current">Chat with Support</span>
    </nav>

    <div class="container">
        <div class="ph-layout py-5">
            <div class="ph-left">
                <h1 class="ph-heading">MITSDE Student<br>Success Team</h1>
                <div class="ph-sub">
                    <p>Your Success, Our Mission. Find instant answers to all your queries below.</p>
                </div>
                <button type="button" class="btn btn-dark rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#downloadModal">Download Brochure</button>
            </div>
            <div class="ph-right">
                    <img src="assets-new/images/project-management.webp" alt="Certification in Project Management" />
                </div>
        </div>
    </div>

</section>

<!-- ═══════════════════════════════════════════════
   TAB SECTION
════════════════════════════════════════════════ -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <!-- Left: Vertical tab nav -->
            <div class="col-12 col-lg-3">
                <div class="d-flex flex-column gap-2" id="cws-tab-nav">
                    <button class="ph-spec-pill is-active" style="width:100%;justify-content:flex-start;text-align:left;" data-cws="exam">Exam Queries</button>
                    <button class="ph-spec-pill" style="width:100%;justify-content:flex-start;text-align:left;" data-cws="academic">Academic Queries</button>
                    <button class="ph-spec-pill" style="width:100%;justify-content:flex-start;text-align:left;" data-cws="gradesheet">Grade Sheet / Certification Queries</button>
                    <button class="ph-spec-pill" style="width:100%;justify-content:flex-start;text-align:left;" data-cws="admission">Admission Process</button>
                    <button class="ph-spec-pill" style="width:100%;justify-content:flex-start;text-align:left;" data-cws="books">Books Related Queries</button>
                    <button class="ph-spec-pill" style="width:100%;justify-content:flex-start;text-align:left;" data-cws="lms">LMS Related Queries</button>
                    <button class="ph-spec-pill" style="width:100%;justify-content:flex-start;text-align:left;" data-cws="placement">Placement Related Queries</button>
                    <a class="ph-spec-pill" style="width:100%;justify-content:flex-start;text-align:left;text-decoration:none;" href="OnlineGrievances" target="_blank">Online Grievance Redressal <i class="fa fa-external-link-alt ms-1" style="font-size:0.7rem;"></i></a>
                </div>
            </div>

            <!-- Right: Tab panes -->
            <div class="col-12 col-lg-9">

                <!-- ── Tab 1: Exam Queries ── -->
                <div class="cws-tab-pane" id="cws-exam">
                    <h2 class="section-heading mb-4">Exam Queries</h2>
                    <div class="faq-list">

                        <div class="faq-item is-open">
                            <button class="faq-q" aria-expanded="true">
                                <span>What is the process for filling out the exam form?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Students will access the Exam Form from the Exam Tab in the E-library. As per the schedule, they can submit the Exam Form.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can I receive a referral discount on the exam fee?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes, if your course fees are completely paid, you will receive a referral discount on the exam fees.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How many papers can we take in one day?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>A student can appear in a maximum of 3 papers in a day.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Are assignment marks included in the passing marks for the final exam?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes, out of 100 marks, there will be 60 marks for Assignments and 40 marks for the External Exam. The passing score is 50% in both Assignments and the Exam.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>If we use all the attempts for assignments and fail, what is the process?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>If a student fails in 3 attempts, they have to apply for offline assignments or they will receive grace marks (maximum 5).</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How can I clear my backlogs?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Students can appear for the backlog subjects along with the next semester subjects in their upcoming exam cycle.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>When are results announced and where can we find them?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>After the exams have been completed, the results will be announced within 45 days. Exam results will be available to view in the MIT Pro portal under the progress report tab.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How many subjects can we take in one exam cycle?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The maximum number of subjects is 12 per exam cycle.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How can I determine the exam cycle?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>After 6–8 months of your enrollment, the student is eligible for the first exam cycle, and a 6-month gap between two exam cycles is mandatory.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What happens if there is a power outage or network issue during the examination?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Students can resume their exam by clicking on the same exam link and selecting the "Resume" tab. They can start the exam from where they left off.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the passing criteria?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The passing criteria are 50% for both internals and externals.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is a web camera mandatory during the final exam?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes, a web camera is mandatory during the exam.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the eligibility criteria to appear for the exam?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The student must submit the exam form with applicable fees and complete the assignments with a minimum 50% score within the specified timeline given by the exam department.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the exam pattern?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Each subject carries 40 marks, with 20 MCQ questions and 45 minutes of time for each paper. The passing criteria are 50% for each subject.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Do we have additional attempts for exams like we do for assignments?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>No, you only have one attempt for the external exam.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the requirements to attend the exam?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>For examinations, a laptop with a webcam and good internet connectivity are mandatory.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the exam fees?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Exam fees are Rs. 750/- per subject. Additionally, if a student has any backlog, they must pay a backlog fee of Rs. 750/- per subject.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is a proctored exam?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>A proctored exam refers to a secure online test that incorporates measures like identity verification, anti-cheating technology, controlled environments, and encrypted communication to ensure fairness and prevent cheating.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is there a fixed timetable for the exam?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>We provide the start date and end date for the exam to the student. Between those dates, students can appear for the exam at any time.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Do I need to book slots for exams?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>No, the proctored link is available 24×7 till the end of the examination schedule. You can attend the available exams as per your convenience.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>When should I complete my assignments?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Before the mentioned date in the examination schedule.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>When should I complete my project report?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>We will provide you the project submission date in the examination schedule, or after the last semester exams you can submit the project report.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What should be my project topic?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The project topic should be related to your course subjects.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I have paid my course fee, why do I have to pay exam fees as well?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Your exam fee is not included in the course fee as we are providing the flexibility to attend the exam as per your convenience.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can I request re-evaluation for my exams and are there any charges for it?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>We are not doing re-evaluation as we are conducting the proctored examination with zero human intervention.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the evaluation methodology for workshop subjects?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The same way which we are using the Proctored exam.</p></div>
                        </div>

                    </div>
                </div><!-- /cws-exam -->

                <!-- ── Tab 2: Academic Queries ── -->
                <div class="cws-tab-pane" id="cws-academic" style="display:none;">
                    <h2 class="section-heading mb-4">Academic Queries</h2>
                    <div class="faq-list">

                        <div class="faq-item is-open">
                            <button class="faq-q" aria-expanded="true">
                                <span>How do I attend live classes?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>At the designated time, log in to the LMS portal. Next, navigate to the Calendar feature and join the live session from there.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Will I receive any recordings of live lectures?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes, you can view the recording of the session on LMS.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Where can I find the recordings?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Access the LMS portal and proceed to choose your subject from the "Continue Learning" option. From there, navigate to the "Class Record" section. Remember to specify the "Date Criteria" to access the recordings.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I want to connect with the subject faculty or academic head. How can I do that?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You'll have to raise a ticket through the E-library portal, specifying the exact query you are having.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How can I access the class timetable?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>We ensure you stay informed about the live sessions through regular email updates. Additionally, you can check your LMS calendar regularly for the weekly schedule of classes.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I have exhausted all three assignment attempts. What can I do?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>After three unsuccessful attempts, if you do not achieve a score of at least 16 marks, submit a ticket via the eLibrary portal. Once forwarded to the relevant department, you can expect offline assignments within 24–48 hours. Alternatively, if you qualify for grace marks, this will be indicated in the resolution of your ticket.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How do I submit the assignments?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Log in to the LMS portal, then select the subject for which you'll submit the assignments. Assignment I is available after Module 6, and Assignment II is available after Module 12.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I need the live lecture PowerPoint presentations.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>We do not provide the PowerPoint presentations used during live lectures. However, you can access the recordings of the live sessions and the module 1 to 12 PPTs (detailed) on LMS.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>The results for the workshop are not displayed.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You'll receive details about the workshop results at the end of the semester, just like other subject results, included in the overall exam report.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is workshop attendance mandatory?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>It is highly advisable. Attending the workshop allows for better interaction with faculty members, query resolution, and provides hands-on experience with the subject matter.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can I view the recording and attend the exam for the workshop subject?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You are allowed to attend the exam for the workshop subject even if you have viewed the recordings. However, it is advisable to mark your attendance for workshops as they are designed to be hands-on sessions.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>The assignment questions are incorrect or not related to the subject, and the answers are not in the listed options.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Please raise a ticket. Kindly mention the subject name, module number along with the specific question and its options, and attach a screenshot for reference.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can the workshop be conducted on weekdays instead of weekends?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>As most of our students are working professionals, the workshops are conducted on weekends to accommodate their schedules.Since workshops are full-day hands-on sessions, scheduling them on weekends allows the majority of students to participate without conflicting with their work commitments.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>The workshop content is not available in the LMS module.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The workshop content isn't available on the LMS module because it's focused on practical, hands-on sessions, and the exact syllabus isn't provided for these types of sessions.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is it compulsory to go through the PPTs and modules?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>It's not compulsory, but we highly recommend going through the content as it will help you better understand the subject matter.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>When will the live lectures start?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You can find the schedule for the live lectures in the study plan on the LMS.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can I download the content from the eLibrary portal and LMS videos?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes, you can download the content from the eLibrary portal. However, you cannot download the videos available on the LMS.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can I download the practice questions?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes, you can download the practice questions in PDF format. However, only PPTs and practice questions can be downloaded — no other content.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the options for elective subjects?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You can explore the elective subjects available by referring to the program structure on mitsde.com.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can I change my elective subject, and are there any charges?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You can change your elective subject by raising a ticket through e-Library; the change is free within one month from the date of admission, and ₹500 per subject will be charged for changes requested after one month.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the evaluation methodology for workshop subjects?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The evaluation methodology for the workshop subject includes:
                                <ul class="ac-list">
                                    <li>Two assignments, each carrying 60 marks (with each question weighted at 2 marks).</li>
                                    <li>A proctored exam worth 40 marks.</li>
                            </p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is it a compulsory service or optional?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>It is completely optional. Though we suggest you opt for it since the benefits will be far greater than your investment.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How can I apply for MIT Harbour if less than 1 year of my course is left?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>We currently have only a 1 year subscription model as an option.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is there a WhatsApp group for Harbour?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>For clarity in communication, we are only limiting to Email communication. So WhatsApp group will not be formed.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How can I contact the Harbour Team?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>You can write to us on <a href="mailto:harbour@mitsde.com">harbour@mitsde.com</a>.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What services will be offered under MIT Harbour?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <ul>
                                    <li>Study Plans</li>
                                    <li>Coping Workshops</li>
                                    <li>Psychological Counselling</li>
                                    <li>Harbour Archives</li>
                                    <li>Group Counselling</li>
                                    <li>Alumni Mentoring Programs</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>After registering for the services of MIT Harbour, what's next?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <ul>
                                    <li>Receive MIT Harbour Welcome Email</li>
                                    <li>Fill the Induction Form shared by MIT Harbour</li>
                                    <li>Receive Welcome Call</li>
                                    <li>Start Receiving Services</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Do we have a WhatsApp group for the students?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>We don't have a WhatsApp group for students as we prefer using our official Telegram channel. You can find the link to join the Telegram group in the welcome email. This ensures better communication and avoids any discrepancies.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Do I have to attend a common exam for Emerging Trends in SCM Logistics & Supply Chain Analytics, or will I receive a separate link since I have attended only one workshop?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>You'll get individual exam links for each subject, meaning the exams and questions will be distinct for each.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is MITSDE Bootcamp?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>This initiative, led by MITSDE, aims to enhance the skill sets of our learners with trendy and up-to-date hands-on practical tools within the realms of Business Analytics and Digital Marketing.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is the Bootcamp a complimentary service or does it require payment?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>It is a free service by MITSDE.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What subjects are included in the Bootcamp service?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>We will cover the most demanding Business Analytics Tools and Digital Marketing Tools.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is a certificate available for the Bootcamp, and what are the criteria for obtaining it?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>Yes, certificates will be provided post Bootcamp sessions. Learners must attend the sessions and obtain a minimum of 75% attendance to avail the certificate course.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the scheduled timings for the Bootcamp sessions?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>Saturdays or Sundays (depending on the availability of the SME) from 7:00 PM to 9:00 PM.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>IT requirement for the Bootcamp session</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>Use a Windows laptop or desktop. Mobile devices are not recommended for the session.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is SynergySphere?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>SynergySphere is an opportunity to be a speaker on MITSDE’s platform to share your expertise and personal life journey, encouraging students from diverse management disciplines.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is it compulsory for all students?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>No, any current or recently passed-out student of MITSDE can participate or volunteer to be a speaker at SynergySphere.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Who is eligible to be a speaker at SynergySphere?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>Any current or recently passed-out student of MITSDE with a minimum of 10 years of work experience in their domain.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How to volunteer as a speaker?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>
                                    Fill the Google Form <a href="https://forms.gle/8jAoixmCu2Jyd2KCA">Google Form</a> or contact us at <a href="mailto:synergy.sphere@gmail.com">synergy.sphere@gmail.com</a>.
                                </p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the scheduled timings for the SynergySphere sessions?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>Mostly on Saturdays or as per the availability of the speaker.</p>
                            </div>
                        </div>

                    </div>
                </div><!-- /cws-academic -->

                <!-- ── Tab 3: Grade Sheet / Certification Queries ── -->
                <div class="cws-tab-pane" id="cws-gradesheet" style="display:none;">
                    <h2 class="section-heading mb-4">Grade Sheet / Certification Queries</h2>
                    <div class="faq-list">

                        <div class="faq-item is-open">
                            <button class="faq-q" aria-expanded="true">
                                <span>What is the format of the grade sheet / certificate?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Please check mitsde.com → Learner Assistance → Sample Certificate for the format.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>After my project is submitted, when will I receive my grade sheet and certificate?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>After the project marks are updated in the progress report, students will receive an address and initial Google Form. After this form is submitted by the student, they will receive their hard copy of the grade sheet and certificate within 45 working days.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Will I receive a soft copy or hard copy of the certificate?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Soft copy is available on e-library when results are declared. Hard copy is sent by post after course completion.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Will I get semester-wise hard copies of grade sheets?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>No, students will receive the soft copy of the semester-wise grade sheet once they clear their semester exams on their E-library portal. They will receive the Semester Wise grade sheets and certificate after completing their course.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the dispatch charges for certificates?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Dispatch is free. Redispatch charges are Rs. 500/-.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How can I get tracking details for my certificate dispatch?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You will receive an email from the certification department with a tracking ID and courier link.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the charges for duplicate grade sheet / certificate?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes, for duplicate grade sheets, students need to pay semester-wise fees, i.e., INR 500/- or $15 per semester. For duplicate certificates, students need to pay INR 250 or $25.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the process to get a Bonafide Certificate?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>For a bonafide certificate, students need to pay bonafide charges, i.e., INR 250/- or $25, and raise a ticket to the concerned department with transaction details.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the process to obtain a Transcript Certificate?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>After completing the course, you can avail transcript charges, i.e., INR 1000/- or $50.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the process for the WES (World Education Services) process?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Only AICTE-approved courses are eligible for the WES evaluation process. We require the WES Application form with the WES reference number, along with a scanned copy of the Gradesheet. The student has to apply for the Transcript Certificate and pay the Transcript fee receipt. The fee is 1000 rupees. You will receive the grade sheet within 45-60 working days.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can I obtain a soft copy of the grade sheet for the final semester?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>No.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the charges for duplicate grade sheets per semester?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>
                                    Please refer to the MITSDE website for details:
                                    <a href="https://mitsde.com/other-fees-details">
                                        https://mitsde.com/other-fees-details
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can I self-collect my documents?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>Yes, we will require your ID proof for that.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the eligibility criteria for the certification process?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="faq-a">
                                <p>
                                    Students' course status should not be marked as “Provisionally Enrolled.” The student must have no pending dues, and all course fees and other applicable fees must be fully paid. Additionally, all subjects and assignments must be completed before the course status is considered complete.
                                </p>
                            </div>
                        </div>

                    </div>
                </div><!-- /cws-gradesheet -->

                <!-- ── Tab 4: Admission Process ── -->
                <div class="cws-tab-pane" id="cws-admission" style="display:none;">
                    <h2 class="section-heading mb-4">Admission Process</h2>
                    <div class="faq-list">

                        <div class="faq-item is-open">
                            <button class="faq-q" aria-expanded="true">
                                <span>How can I change my registered email / mobile / name / address / date of birth?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Dear Student, please raise a ticket through the E-library portal to change your mobile number or email ID. The E-library link is <a href="https://elibrary.mitsde.com/">elibrary.mitsde.com</a></p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How do I get my ID card?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Your ID card is available in the E-library portal under the "E-library" tab.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I paid an excess amount. Can it be refunded?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes, the excess amount can be refunded or carried forward to exam / project fee.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the Bonafide Certificate charges?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Rs. 250/-.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the Transcript charges?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The transcript charges are Rs. 1000/-.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is my referral discount updated and when can I utilize it?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Please confirm referral details by raising a ticket. The referral discount can be used for other charges (in case course fee is zero).</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the status of my cancellation / refund?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The refund is in process. Once confirmation is received from the accounts team, we will update you accordingly.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Where should I share my pending documents and what are those?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a">
                                <p>Share pending documents at enrollment@mitsde.com. Pending documents include:</p>
                                <ul class="ac-list">
                                    <li>Graduation Grade Sheet / Certificate</li>
                                    <li>Work Experience letter</li>
                                    <li>ID Proof</li>
                                    <li>Colour photo</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I want to change my specialisation</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a">
                                <p>Changes within 1 month of enrollment — no charges. After 1 month (before 1st semester):</p>
                                <ul class="ac-list">
                                    <li>PGCM / PGDM Exe / PGDM: Rs. 3000/-</li>
                                    <li>PGDBA: Rs. 5000/-</li>
                                </ul>
                                <p>After the initial 5-month period, course specialization changes will not be considered under exceptional circumstances.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can I change my course?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes. Course change fee is Rs. 3000/- within 1 month of enrollment and Rs. 5000/- before 1st semester exams.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the verification charges?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Verification charges are Rs. 2500/-.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I need fee receipts from the enrollment team for taxation purposes.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Raise a ticket to the enrollment team.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the Course Extension Fee charges?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Rs. 7500/- are the charges applicable for a 6-month course extension duration (with exam fee if applicable).</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I did not receive my login credentials or welcome email.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a">
                                <p>Upon confirmation of admission, you will receive a welcome kit containing:</p>
                                <ul class="ac-list">
                                    <li>Welcome Letter</li>
                                    <li>Student Identification Card</li>
                                    <li>Receipt of Fee Paid</li>
                                    <li>Course Structure</li>
                                    <li>Study Plan</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What documents should be submitted for admission?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Admission form and a colour photo (ID size — no selfie or any other background photo will be considered).</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the Refund Policy on withdrawal / cancellation of Admission?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Students need to send an email to the enrollment team or raise a ticket.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the eligibility criteria for admission?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Graduation from a recognized university is the basic eligibility criteria for admission.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the certification courses offered?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Advanced Certificate in UI/UX &amp; AI in Digital Marketing.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I opted for Dual Specialisation — when will it start?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You will receive all the details in the E-induction session.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is there any LMS for lateral EMBA if any. I have not got the login credentials ?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes, LMS Credentials are provided.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>When are my live lectures going to start for EMBA?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You will receive all the details in the E-induction session. You can also raise a ticket to the student service team.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Course in E-library is different from what is mentioned in the admission letter.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Kindly raise a ticket to the enrollment team.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the charges for the Study Material Kit?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Rs. 5000/- are the charges for the study material kit.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Fee updation — course fee / installment / exam fee / project fee.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Raise a ticket to the enrollment team with attachment of the Fee Receipt.</p></div>
                        </div>

                    </div>
                </div><!-- /cws-admission -->

                <!-- ── Tab 5: Books Related Queries ── -->
                <div class="cws-tab-pane" id="cws-books" style="display:none;">
                    <h2 class="section-heading mb-4">Books Related Queries</h2>
                    <div class="faq-list">

                        <div class="faq-item is-open">
                            <button class="faq-q" aria-expanded="true">
                                <span>I have not received the books.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Please raise a ticket and we will share you the books copy.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I have not received tracking details for my books.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Please check your registered email ID, or raise a ticket and we will update you.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>When will I receive my 3rd-semester books?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You will receive 3rd semester books in the middle of your 2nd semester.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I received the wrong set of books.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>We will replace them. Please raise a ticket.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the charges for a hard copy of books?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You need to pay Rs. 5000/- to avail the books hard copy.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I want my books delivered to a different address.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Kindly raise a ticket with your updated address and contact number.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is it mandatory to apply for books?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>No, it depends on you as all soft copies of study material are available on LMS.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How can I opt for a soft copy of books?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You can access soft copies directly on your LMS portal.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can I collect my books myself?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes, you will have to visit the university campus to self-collect.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I received double books — how can I return them?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Please courier the duplicate copies to us and share the docket details — we will reimburse the courier charges. Alternatively, our person will come to collect the books.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I have not received my elective books.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Please raise a ticket and we will share you the books copy.</p></div>
                        </div>

                    </div>
                </div><!-- /cws-books -->

                <!-- ── Tab 6: LMS Related Queries ── -->
                <div class="cws-tab-pane" id="cws-lms" style="display:none;">
                    <h2 class="section-heading mb-4">LMS Related Queries</h2>
                    <div class="faq-list">

                        <div class="faq-item is-open">
                            <button class="faq-q" aria-expanded="true">
                                <span>I cannot see my 2nd-semester courses on the LMS dashboard.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>At enrollment, we add the 1st semester content as per your course. After 6 months, the second semester content will be added to your LMS portal.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I am unable to log in to the LMS.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Please ensure you have entered the correct credentials — Email ID and Registration ID. Make sure there are no extra spaces in the password.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Where can I find the recordings of live lectures?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Go to the LMS dashboard, click on the course, then select a particular semester. On the top, you will see "Class Records." Click on it, select the subject, then select "This Financial Year." Below, you can find module-wise live lecture recordings along with attendance.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I am unable to download the live recording videos or module videos.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Students do not have the option to download the videos from LMS.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>There are no updates on the LMS calendar.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You will see live class updates in your LMS calendar when a class is scheduled for your batch.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How do I join the live class?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>After logging into the LMS, go to the calendar to join the class at the scheduled time.</p></div>
                        </div>

                    </div>
                </div><!-- /cws-lms -->

                <!-- ── Tab 7: Placement Related Queries ── -->
                <div class="cws-tab-pane" id="cws-placement" style="display:none;">
                    <h2 class="section-heading mb-4">Placement Related Queries</h2>
                    <div class="faq-list">

                        <div class="faq-item is-open">
                            <button class="faq-q" aria-expanded="true">
                                <span>When will I be eligible for placement?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>In the last semester of your course, there should be no backlogs, no pending dues, and no documents pending.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Are there any charges for placement registration?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>No fee for placement registration.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I did not receive any placement opportunities.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>All Job and Internship Opportunities are posted in the Portal. Check out relevant job opportunities as per your qualifications, experience, and eligibility.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How many opportunities will I get?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You will get lifetime job opportunities from the MITSDE Placement Cell (as posted on the portal) and through the TCS ION Job portal.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can I have an online interview or an offline interview?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>We request HR to have preliminary interview rounds online. However, it depends on the Company HR rules.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Will there be any mock interviews?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes, once in your placement lifecycle. No recordings are available.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>My results have been declared, but I haven't received any placement service updates.</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You receive Placement Support Service 30 days after the declaration of Semester Result.</p></div>
                        </div>

                    </div>
                </div><!-- /cws-placement -->

            </div><!-- /col right -->
        </div><!-- /row -->
    </div><!-- /container -->
</section>

<!-- ═══════════════════════════════════════════════
   CONNECT SECTION
════════════════════════════════════════════════ -->
<section class="py-5" style="background:var(--bg-light);">
    <div class="container">
        <h2 class="section-heading text-center mb-2">Connect With Student Success Team</h2>
        <p class="text-center mb-5" style="max-width:700px;margin:0 auto;color:var(--text-light);">At MITSDE, student success is our priority. Our dedicated Student Success Team offers a range of resources and assistance to ensure you have a smooth and successful learning experience — from enrollment to graduation and beyond.</p>
        <div class="row g-4 justify-content-center">

            <div class="col-12 col-md-5">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                    <div class="mb-3"><i class="fa fa-headset fa-3x" style="color:var(--primary-orange);"></i></div>
                    <h5 class="fw-bold mb-2">Need Assistance?</h5>
                    <p style="color:var(--text-light);font-size:0.9rem;" class="mb-4">Please create a ticket if you have any questions. We will respond usually within 24 hours.</p>
                    <a href="https://elibrary.mitsde.com/" target="_blank" class="btn btn-dark rounded-pill px-4">E-library Portal</a>
                </div>
            </div>

            <div class="col-12 col-md-5">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                    <div style="height:200px;overflow:hidden;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7559.515574969718!2d73.89243800000001!3d18.674862!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c7cbe596e70b%3A0xff10439adb1b0066!2sMIT%20Alandi%20Campus!5e0!3m2!1sen!2sin!4v1707909750701!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="p-4">
                        <h5 class="fw-bold mb-2">Our Location</h5>
                        <p style="color:var(--text-light);font-size:0.9rem;" class="mb-0">MIT Alandi Campus, Moshi-Alandi Road, Opposite to Ganjanan Maharaj Sansthan, Alandi, Pune, Maharashtra 412105</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
   SITE FOOTER
════════════════════════════════════════════════ -->
<?php include "footer-new.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
(function () {
    var tabs = document.querySelectorAll('#cws-tab-nav [data-cws]');
    var panes = document.querySelectorAll('.cws-tab-pane');

    function showTab(target) {
        panes.forEach(function (p) { p.style.display = 'none'; });
        var pane = document.getElementById('cws-' + target);
        if (pane) pane.style.display = 'block';
    }

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            tabs.forEach(function (t) { t.classList.remove('is-active'); });
            tab.classList.add('is-active');
            showTab(tab.getAttribute('data-cws'));
        });
    });
})();
</script>

</body>
</html>
