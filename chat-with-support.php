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
                    <a class="ph-spec-pill" style="width:100%;justify-content:flex-start;text-align:left;text-decoration:none;" href="OnlineGrievances" target="_blank">Online Grievance Redressal <i class="fa fa-external-link-alt ms-1" style="font-size:var(--fz-mini);"></i></a>
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
                            <div class="faq-a"><p>Students can access the Exam Form through the MITPro portal and submit it as per the examination schedule.</p></div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Can I receive a referral discount on the exam fee?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes, if your course fees have been paid in full and you provide a valid referral, you will be eligible for a referral discount on the examination fee, subject to the applicable referral policy.</p></div>
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
                            <div class="faq-a"><p>You can appear for a maximum of 12 subjects or 2 semesters if you have missed an earlier examination cycle.</p></div>
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
                    <div class="faq-vgroup-list">

                        <div class="faq-vgroup is-open">
                            <button class="faq-vq" aria-expanded="true">
                                <span>General Academic Queries</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-vbody">
                                <div class="faq-list">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>My session joining link or recording is missing on the LMS. What should I do?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Joining links are on the LMS Calendar under 'Today's Classes'. If a link is missing or has expired, allow 24 hours for the recording to be uploaded, then raise a ticket if it is still unavailable.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Can I raise more than one ticket for the same issue?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. Please do not raise duplicate tickets, as this may delay resolution. Always follow up on your existing ticket using the same ticket ID.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>I missed a call from the support team. How can I reconnect?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The support team usually attempts two follow-up calls. You can reply to the ticket message or request a callback by email or through a TMS comment. When raising a ticket, mention your availability during working hours (10 AM to 5 PM).</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How can I confirm that my ticket has been resolved?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Each ticket resolution note includes a summary of the action taken (for example, marks updated or LMS fixed). Confirm the resolution by replying to the ticket or marking it as 'Closed'.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>My LMS is not showing my subjects or assignments. What should I do?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>This may happen because of a sync delay or academic transition. Log out and log back in. If the issue continues, raise an 'LMS Access Issue' ticket.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>I submitted my assignment but it still shows 'Pending'. What should I do?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Assignments may take up to 48 hours to show as submitted. If it is still pending after 48 hours, raise an 'Assignment Submission Issue' ticket with a screenshot.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How do I check my internal marks and feedback?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>View your marks under the 'Assignments' or 'Exams' tab in your LMS course container. If marks are missing despite submission, raise a TMS ticket with your submission details.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>I have completed a workshop or Bootcamp but haven't received my certificate. What should I do?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>First confirm you met the attendance requirement, then check your email and the LMS certificate section. If it is still missing, raise a ticket. Certificate timelines differ by programme — see the relevant vertical's certificate FAQ.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-vgroup">
                            <button class="faq-vq" aria-expanded="false">
                                <span>MITSDE LABs</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-vbody">
                                <div class="faq-list">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What are MITSDE LABs?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>MITSDE LABs are one-day weekend certification workshops that help learners gain industry-relevant skills, tools and techniques. They are part of MITSDE's learner-centric initiative to combine academic learning with employability-focused skill development.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who can participate in MITSDE LABs?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>All current MITSDE learners are eligible to attend MITSDE LABs workshops and receive a certificate on completion.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>When are MITSDE LABs workshops conducted?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Workshops are conducted only on weekends (Saturday or Sunday) so that they do not disrupt your academic schedule.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How long is each MITSDE LABs workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Each LAB is a full-day workshop with practical learning through hands-on tools, simulations and real-time case studies.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who conducts MITSDE LABs sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Sessions are led by experienced industry professionals and experts with extensive domain knowledge.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What are the benefits of attending MITSDE LABs?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>MITSDE LABs help you gain certified skills for career progression through interactive, expert-led, hands-on sessions.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How can I register for a MITSDE LABs workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Register using the Google Form link shared on your registered email and the official MITSDE Telegram channel. Once registered, a 'MITSDE LABs' course container appears on your LMS Dashboard.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How will I know when the next MITSDE LABs workshop is scheduled?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>A session calendar is shared well in advance by email. You can also check upcoming sessions in your LMS Calendar under 'Today's Classes'.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What happens if I miss a MITSDE LABs workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You can watch the recording on the LMS. However, certificates are issued only to learners who attend the full live session, so you will not receive a certificate for a workshop you missed.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I receive a certificate for attending a MITSDE LABs workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. A Certificate of Participation is awarded to learners who attend the entire full-day workshop.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>When and where will I get my MITSDE LABs certificate?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Certificates are released within 10–15 working days after the session and can be accessed through your LMS profile/certificate section or are shared by email. If you have not received yours, follow the steps in the General Academic Queries FAQ on certificates not received.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>I have MITSDE LABs subjects in my course curriculum. How do I access them?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>If LABs subjects are part of your programme, you can access them under your semester container in the LMS and complete the internal assignments as instructed in the module.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Can I attend MITSDE LABs if LABs subjects are not part of my curriculum?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Learners without LABs subjects can still participate in the free weekend workshops by registering through the link shared by email or Telegram.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Do I need to submit assignments for MITSDE LABs workshops?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>It depends on your programme. If LABs subjects are part of your curriculum, internal assignments are part of your evaluation. For other learners, attendance and participation are sufficient for certificate eligibility.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What skills are covered in MITSDE LABs?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>LABs focus on in-demand industry skills. Topics vary by workshop.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Can I attend more than one MITSDE LABs workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. You can attend as many LAB workshops as you wish, provided you register separately for each one.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the motto of MITSDE LABs?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>MITSDE LABs follow the motto 'Skills Bhi, Degree Bhi, Job Bhi' — empowering learners with practical skills, academic credentials and employability readiness.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-vgroup">
                            <button class="faq-vq" aria-expanded="false">
                                <span>Bootcamp</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-vbody">
                                <div class="faq-list">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is MITSDE Bootcamp?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>MITSDE Bootcamp is a structured learning initiative conducted in live online mode for enrolled learners. Sessions provide topic-specific exposure and practical engagement in areas such as Business Analytics, Digital Marketing, AI-enabled tools, communication training and other emerging subjects. Bootcamps are short-duration academic engagement sessions and are not formal academic programmes or qualifications.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the objective of Bootcamp sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Bootcamp sessions provide structured exposure to selected tools and subject areas and reinforce concepts beyond regular academic sessions.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who can attend free Bootcamp sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Free Bootcamp sessions are available only to currently enrolled MITSDE learners of the respective programmes. Session details are shared with eligible learners by registered email, the Telegram group and the LMS Calendar. You can also check upcoming sessions on the official Bootcamp webpage.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are Bootcamp sessions and Paid Workshops compulsory?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. Both free Bootcamp sessions and Paid Workshops are optional learning initiatives. They are not mandatory components of your academic programme.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is there a fee for Bootcamp sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. Standard Bootcamp sessions are complimentary (no additional fee) for eligible enrolled learners. Paid Workshops are offered separately with a programme fee.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What subjects and tools are covered in Bootcamp sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Bootcamps may include introductory-level sessions on tools such as Excel, SQL, Power BI, Tableau, R, SEO, Social Media Marketing and Google Analytics. Topics vary by programme and schedule.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What do I need to attend a free Bootcamp session?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You need a Windows laptop or desktop (mobile devices are not recommended), a stable internet connection and basic familiarity with Microsoft Office tools. If specific software is required, details will be shared before the session.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are datasets or materials shared after free Bootcamp sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Where applicable, session materials and datasets are shared through Google Drive links accessible on the LMS alongside the session recording.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is a MITSDE Paid Bootcamp (Paid Workshop)?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Paid Bootcamps are structured, topic-focused sessions conducted live online. They may cover advanced or domain-specific subjects and are offered separately from the standard free Bootcamp sessions.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How are Paid Workshops different from free Bootcamps?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Free Bootcamps are short (2–3 hours), introductory or reinforcement-focused sessions available only to enrolled learners. Paid Workshops are extended or specialised sessions that may cover advanced or domain-specific topics and carry a programme fee. Both provide a Certificate of Participation when attendance requirements are met.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How long is a Paid Workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Paid Workshops typically run for 2 to 3 hours or as full-day sessions, depending on the topic and format.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How can I register for a Paid Workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Workshop details are shared through your registered email, the Telegram group and other official communication channels. Register using the link or QR code provided and complete the payment to confirm your seat.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>When will I receive the joining details for a Paid Workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Joining details are typically shared 2–3 hours before the workshop on your registered email ID.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I get a certificate for a Paid Workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Participants who meet the attendance requirements receive an E-Certificate of Participation, generally within 5–6 working days after the session.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are learning materials or datasets provided in Paid Workshops?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Where applicable, session materials, datasets or reference files used during the workshop are shared with registered participants.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What do I need to attend a Paid Workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You need a laptop or desktop (mobile devices are not supported for hands-on sessions), a stable internet connection and any required software pre-installed. Specific software requirements (for example Power BI, Tableau, Python or Excel versions) are communicated before the workshop.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-vgroup">
                            <button class="faq-vq" aria-expanded="false">
                                <span>Live Sessions</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-vbody">
                                <div class="faq-list">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Where can I check my live session schedule?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Your live session schedule is shown on the LMS dashboard. You can also view it through the LMS Calendar tab.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How will I be notified about upcoming live sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Notifications are sent to your registered email ID and through the Telegram channel.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>On which days are live sessions held?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Live sessions are scheduled on Thursdays, Fridays and Saturdays. In the second semester, Wednesdays are also used.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What are the timing and duration of live sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Live sessions are held between 6:00 PM and 8:00 PM and last 1 hour or 2 hours, depending on the subject and programme.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How many live sessions are conducted per subject?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Semester 1 has 3 sessions per subject and Semester 2 has 2 sessions per subject.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How do I join a live session?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You can join from a laptop through the LMS or through the mobile LMS application. Live session links are available on the LMS Calendar under 'Today's Classes'.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is attendance mandatory for live sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Attending all live classes is highly recommended for better learning, but recordings are available if you miss a session.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-vgroup">
                            <button class="faq-vq" aria-expanded="false">
                                <span>PCP</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-vbody">
                                <div class="faq-list">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the duration of the course?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The course duration is 6 months.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is the eLearning programme live or recorded?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The programme is delivered through pre-recorded videos.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What study material is available on the LMS?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The LMS provides a PDF book, pre-recorded videos and PPTs.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How many times can I watch the course videos?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You can watch the videos an unlimited number of times during your validity period of 6 months from the date of registration.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the passing criterion for the course?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You must score 50% to pass the assessment.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are the assessments subjective or objective?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Assessments consist of objective questions.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How many attempts do I get to clear an assessment?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You get 3 attempts to clear each assessment.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Does the course include live projects?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. The programme does not include live projects.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-vgroup">
                            <button class="faq-vq" aria-expanded="false">
                                <span>CAP</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-vbody">
                                <div class="faq-list">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the SQL &amp; Power BI Certification?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>It is a 3-month live online certification in SQL and Power BI offered under MITSDE's Career Accelerator Program. It is co-designed and validated by KPMG in India and covers querying databases, data modelling, dashboards and reporting.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who is the SQL &amp; Power BI Certification for?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Graduates and working professionals from technical or non-technical backgrounds, aspiring data and business analysts, finance, marketing, HR and operations professionals, and entrepreneurs who want to use business intelligence tools.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Do I need prior technical knowledge for the SQL &amp; Power BI Certification?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. The programme starts from the basics. You only need a computer with an internet connection.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How long is the SQL &amp; Power BI Certification and what is the schedule?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>It runs for 3 months in live, instructor-led weekend batches, totalling 36 hours.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is the SQL &amp; Power BI Certification online or in person?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>It is fully online, with live interactive sessions where you can ask questions in real time. Recordings are available afterwards.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What will I learn in the SQL &amp; Power BI Certification?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The curriculum includes 15 hours of SQL and 15 hours of Power BI.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I work on real projects in the SQL &amp; Power BI Certification?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. The programme uses practical datasets and real-world business scenarios and includes a graded project.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Which industry use cases are covered in the SQL &amp; Power BI Certification?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Finance and banking (fraud detection, credit risk), healthcare (patient records, clinical trials), retail and e-commerce (segmentation, demand forecasting), marketing (campaign tracking, churn prediction), and telecom and cloud (network monitoring, subscription analytics).</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What learning resources do I get in the SQL &amp; Power BI Certification?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You get access to two learning platforms.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What support is available during the SQL &amp; Power BI Certification?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Live doubt-clearing sessions, expert mentorship, and LMS access to recordings and study materials.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What are the passing criteria for the SQL &amp; Power BI Certification?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You need at least 50% in the exam and at least 50% in the project, scored separately. You must score at least 50% in the project to be eligible to sit the exam.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What roles can I target after the SQL &amp; Power BI Certification?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Potential career paths include entry-level roles (Data Analyst, BI Analyst, Reporting Analyst), mid-level roles (SQL Developer, Data Engineer, ETL Developer, DBA) and senior-level roles (Cloud Data Architect, ML Engineer (SQL + Python), Data Science Consultant). These are potential paths, not guaranteed placements; job placement is not promised for this programme.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the Gen AI for Educators Certification Program?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>A 3-month, 100% online certification offered by MITSDE in collaboration with Digital Maven. It teaches educators how to use generative AI in teaching, assessment, content creation and academic work, through 12 modules covering 25+ AI tools.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who should join the Gen AI for Educators Program?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Teachers, professors, instructional designers, tutors and education leaders. School administrators, EdTech entrepreneurs, corporate trainers and tech enthusiasts may also join. No technical or coding background is needed.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are there any prerequisites for the Gen AI for Educators Program?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Only basic computer skills and curiosity. The programme starts with the fundamentals.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will AI replace teachers?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. The programme treats AI as a teaching assistant — you stay in control of pedagogy and use AI for support.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What will I learn in the Gen AI for Educators Program?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The curriculum runs over three months.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I learn 25+ AI tools in the Gen AI for Educators Program?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Tools are introduced by category: lesson planning, assessment, multimedia, student support, research and data, and productivity and admin.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Does the Gen AI for Educators Program include hands-on work?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. The modules use hands-on projects and real teaching applications, with learning outcomes based on Bloom's Taxonomy.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What certificate will I receive from the Gen AI for Educators Program?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The certificate is jointly awarded by MITSDE and Digital Maven.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-vgroup">
                            <button class="faq-vq" aria-expanded="false">
                                <span>ISIP</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-vbody">
                                <div class="faq-list">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the International Summer Internship Program (ISIP)?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>ISIP is a global experiential learning initiative by MITSDE that offers international exposure, hands-on internship experience and cross-cultural learning during the summer term. Know more: <a href="https://mitsde.com/international-relations" target="_blank">https://mitsde.com/international-relations</a></p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who can apply for ISIP?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>All current MITSDE learners and alumni can apply, subject to the programme-specific eligibility criteria in the respective programme brochure.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What are the benefits of joining ISIP?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>ISIP gives you international exposure and adds global value to your academic and professional profile.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How can I apply for ISIP?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Applications are announced through official MITSDE communication channels. Apply through the online registration form shared in the programme circular or via <a href="https://mitsde.com/international-relations" target="_blank">https://mitsde.com/international-relations</a></p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How long is an ISIP internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The duration ranges from 1 week to 6 months, depending on the internship type, host organisation and country.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the ISIP selection process?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Selection is based on your application, academic record, motivation statement and eligibility. Criteria may differ slightly across partner universities and programmes.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will MITSDE help with visa or travel arrangements?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. MITSDE's International Relations (IR) Team provides guidance and assistance with required documentation, invitation letters and visa applications.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I receive a certificate after completing ISIP?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. You will receive a Certificate of Completion or Internship Certificate from the host institution or organisation after successfully completing the programme.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What expenses are covered in a fully funded ISIP programme?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Fully funded programmes may include training or tuition fees, accommodation, meals and cultural activities. Airfare, visa and personal expenses may not be covered unless specifically mentioned in the offer. Inclusions vary by host university, organisation and programme.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What if I cannot travel due to unforeseen circumstances?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You may opt for an online internship (if available) or request deferment to the next cycle, subject to the programme's policy and the host organisation's approval.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How can I get updates about upcoming ISIP opportunities?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>ISIP announcements are shared through official MITSDE emailers, the Telegram channel and the International Relations webpage: <a href="https://mitsde.com/international-relations" target="_blank">https://mitsde.com/international-relations</a></p></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-vgroup">
                            <button class="faq-vq" aria-expanded="false">
                                <span>ED Cell</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-vbody">
                                <div class="faq-list">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the Entrepreneurship Development Cell (ED Cell)?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The ED Cell helps learners access entrepreneurship-related opportunities such as internships, funding schemes, mentorship, networking, incubation support and startup ecosystem resources.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Does the ED Cell conduct entrepreneurship competitions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. The ED Cell acts as an opportunity provider and facilitator, connecting learners with external opportunities rather than organising competitions.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What types of internships are shared through the ED Cell?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Internships in startups, incubators and accelerators, venture capital and funding firms, social entrepreneurship organisations, government startup programmes, and family businesses and SMEs.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How does the ED Cell find internship opportunities?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Opportunities are sourced from startup portals, government programmes, incubators and accelerators, alumni networks, faculty recommendations, and startup hubs and innovation labs.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How will I receive information about ED Cell opportunities?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Verified opportunities are shared through email and Telegram.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Do I need prior entrepreneurial experience to apply for ED Cell opportunities?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. Opportunities are open to learners with varying levels of experience, depending on the eligibility criteria of the organisation offering the opportunity.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Does the ED Cell guarantee internship placement?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. The ED Cell facilitates opportunities, but final selection depends on the recruiting organisation.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are ED Cell internships paid?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Some internships may offer stipends, while others may be unpaid. The ED Cell verifies and shares the available information on stipend and duration.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What funding opportunities are shared through the ED Cell?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Funding opportunities may include Startup India Seed Fund, DST NIDHI PRAYAS, Atal Innovation Mission, MSME Innovation Schemes, TIDE 2.0, Mudra Loans and Institutional Seed Funding.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Can I apply for funding support with only an idea?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Several schemes support ideas, prototypes, proofs of concept and early-stage startups.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Does the ED Cell help with funding applications?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. The ED Cell provides business plan templates, pitch deck guidance, documentation support and institutional recommendation letters.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What networking opportunities are available through the ED Cell?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You may gain access to startup events, investor meetups, entrepreneurship conclaves and demo days.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Can the ED Cell help with incubation?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Promising ideas may be referred to incubators, accelerators and innovation hubs.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is participation in ED Cell activities mandatory?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. Participation is voluntary and based on your interest.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I receive a certificate for ED Cell opportunities?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Certificates depend on the specific internship, workshop or opportunity provider.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-vgroup">
                            <button class="faq-vq" aria-expanded="false">
                                <span>Research Business Lab</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-vbody">
                                <div class="faq-list">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the MITSDE Business Research Lab?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The Business Research Lab (Live Business Lab) is an experiential learning initiative where learners work on real business problems provided by companies and develop practical solutions.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the objective of the Business Research Lab?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>To give learners real-world business problem-solving experience through research, analysis and solution development.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How can I participate in the Business Research Lab?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You will receive an invitation email and can express your interest in participating.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How are Business Research Lab teams formed?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Interested learners are grouped into teams of five members.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will every team get the same problem statement?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. Each team receives a unique business problem statement.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are the problem statements based on real businesses?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. The challenges are based on actual business situations faced by companies.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How long is the Business Research Lab project?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The project runs for eight weeks.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What approach should we follow for the project?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Follow a structured six-stage approach.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How many submissions are required for the Business Research Lab?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>There are two submissions: a Mid-Term Submission in Week 4 and a Final Submission in Week 8.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What should be included in the Week 4 (mid-term) submission?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Problem understanding, research findings, initial analysis and a draft solution.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What should be included in the final submission?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>A complete project report and a presentation (if applicable).</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who evaluates the Business Research Lab project?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Projects are assessed through peer review and faculty evaluation.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is attendance mandatory in the Business Research Lab?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>All team members are expected to participate and contribute actively throughout the project.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I receive a certificate for the Business Research Lab?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Learners who successfully complete the project receive a certificate.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are there rewards beyond the participation certificate?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>If a company accepts your team's solution, the team may receive a Certificate of Excellence and formal recognition.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Does participation in the Business Research Lab guarantee employment?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. Participation does not guarantee employment or any direct association with the company.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Can the company use our solutions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Companies may review and use submitted solutions, but they are not obliged to implement the recommendations.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is expected from learners in the Business Research Lab?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You must maintain originality, avoid plagiarism, meet deadlines, ensure equal participation and focus on practical solutions.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-vgroup">
                            <button class="faq-vq" aria-expanded="false">
                                <span>Crisis War Room</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-vbody">
                                <div class="faq-list">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the Crisis War Room (CWR)?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>CWR is a live, faculty-led classroom simulation in which you take on a real corporate role and respond in real time to a simulated brand crisis across four escalating rounds. It builds critical thinking and decision-making under pressure rather than testing recall of theory.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Why has MITSDE introduced CWR in live sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>To make live sessions more applied and interactive. Instead of only listening to concepts, you apply frameworks and theories to a live decision-making scenario built around a real brand, as you would in an actual boardroom.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How does CWR work during a live session?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Your faculty runs the simulation live. You are briefed on a crisis and respond across four rounds, each raising the pressure and testing a different part of your decision-making.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What if I join late or miss part of a CWR session?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Try to join on time, as each round builds on the previous one. If you miss it, watch the session recording on the LMS; the post-session summary email will also help you catch up on the case and frameworks covered.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are the CWR crisis scenarios and brands real?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Every CWR session is built around a real brand and a real-life case study, with a simulated crisis across four rounds that connects the frameworks, theories and tools taught in the subject.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I get any material after a CWR session?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Immediately after every CWR session you receive a consolidated email with a summary of the case study, the frameworks/theories applied, and 3–4 curated media pieces, videos and articles for further reading.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Can I request a different brand or case study for a CWR session?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. Brands and cases for each subject are pre-mapped by faculty to specific chapter frameworks, so they are not changed on request. You are welcome to share suggestions with your faculty.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How is CWR different from a regular case study discussion?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>A regular case discussion is usually a one-way walkthrough. CWR is a live, timed simulation in which you make decisions as events unfold across four rounds and then see how those decisions connect back to the theory.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Do I need to prepare anything before a CWR session?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No special preparation is required. Attend the live session prepared as usual, having reviewed the relevant chapter material.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will CWR continue in Semester 2 and beyond?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>CWR is currently being rolled out across Semester 1 subjects only.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-vgroup">
                            <button class="faq-vq" aria-expanded="false">
                                <span>RCFL</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-vbody">
                                <div class="faq-list">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How long is the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The internship runs for 4 weeks (1 month).</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Where is the RCFL internship held?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>At RCFL units in Mumbai (Trombay / Thal).</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Which domains are covered in the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>HR, Finance, Marketing, Operations, Logistics, Supply Chain Management, Material Management and Project Management.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I receive a certificate after the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. RCFL issues an official internship certificate on successful completion.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is accommodation provided for the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. Accommodation is not provided by RCFL or MITSDE; you need to arrange your own.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is food provided during the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Food is available at the RCFL canteen on a self-paid basis.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How many learners are selected for the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Only 10–15 learners are selected for each batch.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How does the RCFL selection process work?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Selection is based on eligibility, document submission and a first-come, first-served basis.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Which documents are required for RCFL selection?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>An updated resume and a copy of your Aadhaar card.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I have a mentor during the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Each student is guided by an RCFL mentor throughout the internship.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What kind of work will I do during the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You will work on real-time corporate tasks and projects and gain practical exposure to business operations.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is attendance mandatory during the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Regular attendance is expected to complete the internship successfully and receive the certificate.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Can I choose my preferred domain in the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Domain allocation depends on availability and organisational requirements at RCFL.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How will I receive updates about the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Updates are shared through official channels such as email or the WhatsApp group.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What should I carry on the first day of the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Your Aadhaar card, student bio-data (resume) and selection letter.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Why should I apply for the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>It offers corporate exposure in a Navratna PSU, strengthens your resume, and provides hands-on industry experience with expert mentorship.</p></div>
                                    </div>
                                </div>
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
                                    <a href="learner-type-payment#fee-details" target="_blank">
                                        Link
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
                                <ul class="ac-list text-dark">
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
                                <ul class="ac-list text-dark">
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
                                <ul class="ac-list text-dark">
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

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:0 0 8px;">Placement Eligibility</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item is-open">
                            <button class="faq-q" aria-expanded="true">
                                <span>When am I eligible for placement assistance?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You become eligible in the final semester of your course, provided you have no active backlogs, no pending dues, and no pending documents with the institute.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is there a fee for registering for placement assistance?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>No. There are absolutely no charges for placement assistance registration.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I am in my final semester but have a backlog. Am I eligible?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>No. Students with any active backlogs are not eligible for placement assistance. All pending backlogs must be cleared before registering.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Placement Eligibility (Detailed)</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the three types of eligibility required for placement assistance?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Academic Eligibility (final semester), Enrollment Eligibility (status must be Confirmed — not Provisional, Cancelled, or Suspended), and Training Eligibility (must submit the TCS iON Employability Readiness Programme certificate, MOCS, APL Certificate, Internshala Account Verification).</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Placement Portal</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How do I access the placement portal?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The portal is at mitsde.pod.ai. Your User ID is your registered MITSDE email address; you set your password on first login (use "Forgot Password" if needed).</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>For how long will I have access to the placement portal?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The placement portal remains active for six months from registration. After this, you transition to the Alumni Portal, which offers lifetime access.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>I am facing a technical issue on the POD placement portal. Who do I contact?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Contact the POD technical helpline at 01141179695, available Monday to Friday, 10:00 AM to 6:00 PM.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Job &amp; Internship Opportunities</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How will I receive job and internship opportunities?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>All opportunities are posted on the Placement Portal, with notifications via email. You may also follow the official MITSDE Alumni &amp; Career Network WhatsApp Channel for real-time updates.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What happens once I receive a job offer?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Once you receive a job offer — whether accepted or declined — you are no longer eligible for further opportunities through the Placement Cell. The policy entitles each student to one job offer at the first instance.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Interview Process</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the policy regarding interviews after applying for a position?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Once you apply for an opportunity, attending the interview process is mandatory. Failure to attend after applying results in termination of placement assistance.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Will there be mock interviews?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes. One mock interview session is provided per student per placement lifecycle. No recordings are available.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Resume &amp; Profile</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is there a prescribed format for the resume?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes. The Placement Cell provides a prescribed CV format. Only this format is accepted; resumes in any other format will not be accepted.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">TCS iON Training Platform</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>When will I receive my TCS iON credentials?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Within three months after the Master Induction / Live Session begins. Add nqt@tcsion.com to your Safe Senders list and check your spam folder if the email does not arrive.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Salary &amp; Compensation</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the expected salary range for freshers in the Marketing domain?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Between Rs. 3.5 LPA and Rs. 4.5 LPA on average; total CTC can extend up to Rs. 5 LPA with an incentive component. Prior experience or specialised exposure can command higher offers.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Salary, Packages &amp; Compensation</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What is the minimum and average salary package for MITSDE campus placements?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The minimum and average package range is Rs. 2.5 LPA to Rs. 7 LPA. Salary details are shared with students before the selection process for each opportunity.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What has been the highest CTC offered and received through MITSDE placements?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The highest CTC offered has been Rs. 20 LPA (True Elements); the highest CTC received by a placed student has been Rs. 8 LPA (Ajanta Bottles Pvt Ltd), based on available placement data.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Alumni Portal</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How do I access the Alumni Portal?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>The Alumni Portal (alumni.mitsde.com) is by invitation only. Eligible students — final semester, no backlogs, no pending fees or documents — are added and notified via email.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Contact &amp; Escalation</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How do I contact the Placement Cell?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>You may reach the Placement Cell at placement@mitsde.com for any placement-related queries.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Placement Process</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What are the typical steps in the Placement Process?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Recruiters are invited and confirm participation, submit job descriptions, and share their recruitment process; interview dates are communicated; an optional Pre-Placement Talk may be held; CVs are shared with HR; interviews take place; final offers are extended in writing through the Placement Department (verbal/telephonic offers are not valid); the One Offer per Student policy is then activated.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Selection Process</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>May I contact company HR representatives directly during the placement process?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>No. All communication with companies must go exclusively through the Placement Cell. Contacting HR directly can result in strict action against the student.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Offer Letters &amp; Post-Selection</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How will I receive my offer letter?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>All job offers are channelled through the Placement Department. Only written communication (an offer letter) is valid — the company must submit it within 15 days of final selection.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How many placement opportunities will I receive in total?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Eligible registered students are entitled to three placement opportunities (interview calls), governed by the policy of one job to one student at the first instance.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Placement Highlights &amp; Corporate Network</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>How many companies has MITSDE onboarded for placements?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>MITSDE has onboarded 354+ companies across sectors including BFSI, FMCG, IT, consulting, retail, manufacturing, logistics, and healthcare.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Interview Readiness &amp; Conduct</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>What documents must I carry on the day of a campus placement drive?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>A valid Identity Card, three sets of updated resumes with photocopies of mark sheets and certificates, and two recent passport-size photographs.</p></div>
                        </div>
                    </div>

                    <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Placement Process Guidelines</p>
                    <div class="faq-list mb-2">
                        <div class="faq-item">
                            <button class="faq-q" aria-expanded="false">
                                <span>Is it mandatory to accept a job offer received during a placement drive?</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-a"><p>Yes. Per the signed placement undertaking, a Confirmation Mail, Offer Letter, or Letter of Intent must be accepted and joined within the specified time. Refusing an offer on any grounds results in debarment from all future placement support at MITSDE.</p></div>
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
                    <p style="color:var(--text-light);font-size:var(--fz-medium);" class="mb-4">Please create a ticket if you have any questions. We will respond usually within 24 hours.</p>
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
                        <p style="color:var(--text-light);font-size:var(--fz-medium);" class="mb-0">MIT Alandi Campus, Moshi-Alandi Road, Opposite to Ganjanan Maharaj Sansthan, Alandi, Pune, Maharashtra 412105</p>
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

// Academic Queries: vertical (outer) accordion
(function () {
    var groups = document.querySelectorAll('.faq-vgroup');
    groups.forEach(function (group) {
        var btn = group.querySelector('.faq-vq');
        btn.addEventListener('click', function () {
            var isOpen = group.classList.contains('is-open');
            groups.forEach(function (g) {
                g.classList.remove('is-open');
                g.querySelector('.faq-vq').setAttribute('aria-expanded', 'false');
            });
            if (!isOpen) group.classList.add('is-open');
            btn.setAttribute('aria-expanded', !isOpen);
        });
    });
})();
</script>

</body>
</html>
