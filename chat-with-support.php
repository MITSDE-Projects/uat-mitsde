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
                                            <span>My session joining link or recording is missing from the LMS. What should I do?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Joining links are available in the LMS Calendar under 'Today's Classes'. If a link is missing or has expired, allow 24 hours for the recording to be uploaded, then raise a ticket if it is still unavailable.</p></div>
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
                                        <div class="faq-a"><p>Each ticket resolution note includes a summary of the action taken (for example, marks updated or an LMS issue fixed). Confirm the resolution by replying to the ticket or marking it as 'Closed'.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>My LMS is not showing my subjects or assignments. What should I do?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>This may happen because of a sync delay or an academic transition. Log out and log back in. If the issue continues, raise an 'LMS Access Issue' ticket.</p></div>
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
                                        <div class="faq-a"><p>First, confirm that you met the attendance requirement. Then check your email and the LMS certificate section. If your certificate is still missing, raise a ticket. Certificate timelines differ by programme, so please see the certificate FAQ for your programme.</p></div>
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
                                        <div class="faq-a"><p>MITSDE LABs are one-day weekend certification workshops that help learners gain industry-relevant skills and learn practical tools and techniques. They are part of MITSDE's learner-centric initiative to combine academic learning with employability-focused skill development.</p></div>
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
                                        <div class="faq-a"><p>Each MITSDE LABs workshop is a full-day session with practical learning through hands-on tools, simulations and real-time case studies.</p></div>
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
                                            <span>How can I register for an MITSDE LABs workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Register using the Google Form link sent to your registered email address and posted on the official MITSDE Telegram channel. Once you have registered, a 'MITSDE LABs' course container will appear on your LMS Dashboard.</p></div>
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
                                            <span>What happens if I miss an MITSDE LABs workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You can watch the recording on the LMS. However, certificates are issued only to learners who attend the full live session, so you will not receive a certificate for a workshop you missed.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I receive a certificate for attending an MITSDE LABs workshop?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. A Certificate of Participation is awarded to learners who attend the full-day workshop in its entirety.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>When and where will I get my MITSDE LABs certificate?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Certificates are released within 10–15 working days after the session. You can download yours from the certificate section of your LMS profile, or it will be sent to you by email. If you have not received yours, follow the steps in the General Academic Queries FAQ on certificates not received.</p></div>
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
                                        <div class="faq-a"><p>Yes. You can attend as many MITSDE LABs workshops as you wish, provided you register separately for each one.</p></div>
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
                                        <div class="faq-a"><p>Your live session schedule is shown on the LMS Dashboard. You can also view it in the LMS Calendar tab.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How will I be notified about upcoming live sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Notifications are sent to your registered email address and through the Telegram channel.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>On which days are live sessions held?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Live sessions are scheduled on Thursdays, Fridays and Saturdays. In Semester 2, sessions are also held on Wednesdays.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>When are live sessions held, and how long do they last?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Live sessions are held between 6:00 PM and 8:00 PM and last one or two hours, depending on the subject and programme.</p></div>
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
                                        <div class="faq-a"><p>The LMS provides a PDF book, pre-recorded videos and presentation slides (PPTs).</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How many times can I watch the course videos?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You can watch the videos as many times as you like during your 6-month validity period, which starts on your date of registration.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the passing criterion for the course?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You must score at least 50% to pass the assessment.</p></div>
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
                                        <div class="faq-a"><p>It is a 3-month live online certification programme in SQL and Power BI, offered under MITSDE's Career Accelerator Program. It is co-designed and validated by KPMG in India and covers querying databases, data modelling, dashboards and reporting.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who is the SQL &amp; Power BI Certification for?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>It is designed for graduates and working professionals from technical or non-technical backgrounds, aspiring data and business analysts, finance, marketing, HR and operations professionals, and entrepreneurs who want to use business intelligence tools.</p></div>
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
                                        <div class="faq-a"><p>Use cases include finance and banking (fraud detection, credit risk), healthcare (patient records, clinical trials), retail and e-commerce (segmentation, demand forecasting), marketing (campaign tracking, churn prediction), and telecom and cloud (network monitoring, subscription analytics).</p></div>
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
                                        <div class="faq-a"><p>Support includes live doubt-clearing sessions, expert mentorship, and LMS access to recordings and study materials.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What are the passing criteria for the SQL &amp; Power BI Certification?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You must score at least 50% in the project to be eligible to sit the exam, and at least 50% in the exam to pass. The project and the exam are scored separately.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What roles can I target after the SQL &amp; Power BI Certification?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Potential career paths include entry-level roles (Data Analyst, BI Analyst, Reporting Analyst), mid-level roles (SQL Developer, Data Engineer, ETL Developer, DBA) and senior-level roles (Cloud Data Architect, ML Engineer with SQL and Python, Data Science Consultant). These are possible career paths only; job placement is not guaranteed for this programme.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the Gen AI for Educators Certification Program?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>It is a 3-month, 100% online certification programme offered by MITSDE in collaboration with Digital Maven. It teaches educators how to use generative AI in teaching, assessment, content creation and academic work, through 12 modules covering more than 25 AI tools.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who should join the Gen AI for Educators Program?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The programme is designed for teachers, professors, instructional designers, tutors and education leaders. School administrators, EdTech entrepreneurs, corporate trainers and tech enthusiasts may also join. No technical or coding background is needed.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are there any prerequisites for the Gen AI for Educators Program?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Only basic computer skills and curiosity are needed. The programme starts with the fundamentals.</p></div>
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
                                            <span>Will I learn more than 25 AI tools in the Gen AI for Educators Certification Program?</span>
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
                                        <div class="faq-a"><p>ISIP is a global experiential learning initiative by MITSDE that offers international exposure, hands-on internship experience and cross-cultural learning during the summer term. For more information, visit <a href="https://mitsde.com/international-relations" target="_blank">https://mitsde.com/international-relations</a>.</p></div>
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
                                        <div class="faq-a"><p>Applications are announced through official MITSDE communication channels. Apply through the online registration form shared in the programme circular or via <a href="https://mitsde.com/international-relations" target="_blank">https://mitsde.com/international-relations</a>.</p></div>
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
                                        <div class="faq-a"><p>Yes. MITSDE's International Relations (IR) Team provides guidance and assistance with the required documentation, invitation letters and visa applications.</p></div>
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
                                        <div class="faq-a"><p>ISIP announcements are shared through official MITSDE emails, the Telegram channel and the International Relations webpage: <a href="https://mitsde.com/international-relations" target="_blank">https://mitsde.com/international-relations</a>.</p></div>
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
                                        <div class="faq-a"><p>Internships may be offered by startups, incubators and accelerators, venture capital and funding firms, social entrepreneurship organisations, government startup programmes, and family businesses and SMEs.</p></div>
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
                                        <div class="faq-a"><p>Some internships may offer stipends, while others may be unpaid. The ED Cell verifies and shares the available information on stipends and duration.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What funding opportunities are shared through the ED Cell?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Funding opportunities may include the Startup India Seed Fund Scheme, DST NIDHI-PRAYAS, the Atal Innovation Mission, MSME innovation schemes, TIDE 2.0, Mudra loans and institutional seed funding.</p></div>
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
                                        <div class="faq-a"><p>It depends on the opportunity. Whether a certificate is issued is decided by the organisation offering the internship or workshop.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-vgroup">
                            <button class="faq-vq" aria-expanded="false">
                                <span>Research Cell</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <div class="faq-vbody">
                                <div class="faq-list">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the Research Cell?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The Research Cell facilitates research internships and manages publication activities related to Udyam: The Journal of Business Insights.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What are the main initiatives under the Research Cell?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a">
                                            <p>The Research Cell manages:</p>
                                            <ol class="ac-list text-dark">
                                                <li>Research Internship Programme</li>
                                                <li>Udyam: The Journal of Business Insights (ISSN Journal)</li>
                                                <li>MITSDE Business Research Lab (Live Business Lab)</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the Research Internship Programme?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>It helps learners identify and participate in research-related internships offered by external organizations.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Does the Research Cell provide internships directly?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. The Research Cell identifies and shares opportunities while learners independently enroll through the respective organizations.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How will internship opportunities be shared?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a">
                                            <p>Through official channels such as:</p>
                                            <ul class="ac-list text-dark">
                                                <li>Email</li>
                                                <li>Telegram</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What happens after completing an internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Learners are required to provide feedback so that the Research Cell can maintain completion records.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is Udyam Journal?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Udyam is MITSDE's ISSN journal that publishes articles, case studies, book reviews, and business insights.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who can contribute to Udyam Journal?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Academicians, industry professionals, researchers, practitioners, and learners may contribute subject to journal guidelines.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What types of submissions are accepted?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a">
                                            <ul class="ac-list text-dark mt-0">
                                                <li>Research articles</li>
                                                <li>Case studies</li>
                                                <li>Book reviews</li>
                                                <li>Business insights papers</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What happens after article submission?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a">
                                            <p>The article goes through:</p>
                                            <ol class="ac-list text-dark">
                                                <li>Acknowledgement</li>
                                                <li>Formatting</li>
                                                <li>Editorial review</li>
                                                <li>Plagiarism check</li>
                                                <li>Typesetting</li>
                                                <li>Final approval</li>
                                                <li>Publication</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How long does it take to acknowledge a submission?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Articles are acknowledged within 48 hours.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is plagiarism checking mandatory?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. All articles undergo plagiarism and quality checks before publication.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who approves articles for publication?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The Editor-in-Chief or Research Cell Head provides final approval.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Where is the journal published?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Approved articles are published on the Udyam journal website.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will authors receive publication confirmation?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Authors are informed once their article completes the review and publication process.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is publication guaranteed after submission?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. Publication depends on editorial review, quality standards, and final approval.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Can learners publish research work?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Learners can submit research work if it meets the journal's quality and submission requirements.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will published authors receive recognition?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Publication in an ISSN journal provides academic recognition and can strengthen professional and academic profiles.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-vgroup">
                            <button class="faq-vq" aria-expanded="false">
                                <span>MITSDE Business Research LAB</span>
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
                                        <div class="faq-a"><p>The lab aims to give learners real-world business problem-solving experience through research, analysis and solution development.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How can I participate in the Business Research Lab?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You will receive an invitation email, through which you can express your interest in participating.</p></div>
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
                                        <div class="faq-a"><p>The mid-term submission should include your problem understanding, research findings, initial analysis and a draft solution.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What should be included in the final submission?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The final submission should include a complete project report and, if applicable, a presentation.</p></div>
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
                                            <span>Are there rewards beyond the completion certificate?</span>
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
                                        <div class="faq-a"><p>CWR is a live, faculty-led classroom simulation in which you take on a realistic corporate role and respond in real time to a simulated brand crisis across four escalating rounds. It builds critical thinking and decision-making under pressure rather than testing recall of theory.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Why has MITSDE introduced CWR in live sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>It was introduced to make live sessions more applied and interactive. Instead of only listening to concepts, you apply frameworks and theories to a live decision-making scenario built around a real brand, as you would in an actual boardroom.</p></div>
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
                                        <div class="faq-a"><p>CWR is a live, interactive activity conducted during the scheduled session. Learners who miss the session or join late cannot access or participate in the activity later. Hence, timely attendance is essential.</p><p>Please note that the case summary and live simulation details will be shared via email only with participants who attend the live session.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are the CWR crisis scenarios and brands real?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Every CWR session is built around a real brand and a real-life case study. The crisis itself is simulated and unfolds over four rounds, connecting the frameworks, theories and tools taught in the subject.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I get any material after a CWR session?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Immediately after every CWR session, you receive a consolidated email with a summary of the case study, the frameworks and theories applied, and 3–4 curated videos, articles or other media for further reading.</p></div>
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
                                        <div class="faq-a"><p>No special preparation is required. Just review the relevant chapter material before the live session, as you normally would.</p></div>
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
                                        <div class="faq-a"><p>The internship is held at RCFL's units in Mumbai (Trombay / Thal).</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Which domains are covered in the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The internship covers HR, Finance, Marketing, Operations, Logistics, Supply Chain Management, Material Management and Project Management.</p></div>
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
                                        <div class="faq-a"><p>Selection is based on eligibility and document submission, with seats allotted on a first-come, first-served basis.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Which documents are required for RCFL selection?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You need an updated resume and a copy of your Aadhaar card.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will I have a mentor during the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Each learner is guided by an RCFL mentor throughout the internship.</p></div>
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
                                        <div class="faq-a"><p>Please carry your Aadhaar card, your resume and your selection letter.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Why should I apply for the RCFL internship?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>It offers corporate exposure at a Navratna PSU, strengthens your resume, and provides hands-on industry experience with expert mentorship.</p></div>
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
                                <p style="font-size:var(--fz-small);line-height:1.7;color:var(--text-dark);margin:0 0 16px;">MITSDE's PG programmes come with free, hands-on, AI-integrated upskilling certifications built into the curriculum. This section answers the most common questions about what the certifications are, who can take them, and how they work.</p>
                                <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:0 0 8px;">About the MITSDE Bootcamp</p>
                                <div class="faq-list mb-2">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What are the MITSDE Bootcamp certifications?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a">
                                            <p>They are short, skill-focused certifications in Business Analytics and Digital Marketing, offered by the Bootcamp vertical of MITSDE's Academic Department. Each one is built around tools that show up in today's job descriptions – Excel, SQL, Power BI, Python, SAS, R, Tableau, Google Ads, GA4 and more – with AI tools woven into the curriculum.</p>
                                            <p class="mt-2">There are six certifications (CPEA, CPDA, CPDSA, CPQBA, CDME and CDMA), plus three full-day bootcamp workshops (B1, B2 and B3), all delivered through live, hands-on sessions.</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Do I have to pay anything extra for them?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. The certifications and bootcamps are completely free. They are embedded in your programme curriculum, so there is no additional fee and no separate enrolment cost.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Which programmes include these certifications?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>They are part of the PGDM, PGDM Executive and PGCM programmes. Which certifications you receive depends on your programme and specialisation – see the eligibility section below.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>When during the programme will I take them?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The certifications are embedded in Semester 1 and Semester 2 only, not across the full programme duration. CPEA and CPDA run in Semester 1; all others run in Semester 2.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Will these take extra time on top of my studies?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>They are built into the PG curriculum itself, so they are designed to fit alongside your regular coursework rather than add a separate course load.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who are these certifications designed for?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Both fresh graduates who want strong, verifiable skills on their first resume, and working professionals who want current, tool-level fluency to grow in their careers. You do not need a coding or technical background – the certifications start from the fundamentals. CPDSA, for example, is designed for non-engineers and begins with your first Python program.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is AI part of the curriculum?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Every certification includes AI tools relevant to the subject – for example, ChatGPT and Copilot inside Excel in CPEA, Performance Max AI in Google Ads in CDME, and AI content pipelines in CDMA and B2.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are the sessions theoretical or practical?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Practical. You finish each certification with a working, demonstrable skill – such as a live dashboard, a working SQL query, a functioning ad campaign or a content calendar – not just theoretical exposure. In the bootcamps, you build real analytics and content assets on your own laptop.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Who designs and teaches the sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>CPEA, CPDA, CPDSA, CPQBA, CDME and CDMA are designed and delivered by the Bootcamp vertical of the MITSDE Academic Department. All live sessions are led by industry Subject Matter Experts (SMEs), coordinated by MITSDE's Bootcamp team. For B1, B2 and B3, the Bootcamp team also handles content, scheduling and expert coordination.</p></div>
                                    </div>
                                </div>

                                <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Certifications at a Glance</p>
                                <div class="faq-list mb-2">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Which certifications and bootcamps are offered?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a">
                                            <p>Six certifications and three full-day bootcamps are offered across Semester 1 and Semester 2:</p>
                                            <div class="tbl-wrap">
                                                <table class="tbl">
                                                    <thead>
                                                        <tr>
                                                            <th class="tbl-label">Certification</th>
                                                            <th>Tools / Focus</th>
                                                            <th>Duration</th>
                                                            <th>Semester</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><td class="tbl-label"><strong>CPEA</strong> — Certified Professional Excel Analyst</td><td>Basic &amp; Advanced Excel + AI</td><td>15 hours · 5 live sessions</td><td>Semester 1</td></tr>
                                                        <tr><td class="tbl-label"><strong>CPDA</strong> — Certified Professional Data Analyst</td><td>SQL &amp; Power BI</td><td>16 hours · 6 live sessions</td><td>Semester 1</td></tr>
                                                        <tr><td class="tbl-label"><strong>CPDSA</strong> — Certified Professional Data Science Analyst</td><td>Python &amp; SAS</td><td>16 hours · 6 live sessions</td><td>Semester 2</td></tr>
                                                        <tr><td class="tbl-label"><strong>CPQBA</strong> — Certified Professional Quantitative Business Analyst</td><td>R &amp; Tableau</td><td>16 hours · 6 live sessions</td><td>Semester 2</td></tr>
                                                        <tr><td class="tbl-label"><strong>CDME</strong> — Certificate in Digital Marketing Essentials</td><td>SEO, SEM, Google Ads, LinkedIn, Landing Pages</td><td>15 hours · 4 live sessions</td><td>Semester 2</td></tr>
                                                        <tr><td class="tbl-label"><strong>CDMA</strong> — Certificate in Digital Marketing Applications</td><td>Automation, Chatbots, Performance Marketing, AI Content</td><td>15 hours · 4 live sessions</td><td>Semester 2</td></tr>
                                                        <tr><td class="tbl-label"><strong>B1</strong> — Marketing Analytics Mastery</td><td>GA4, Looker Studio, Tableau Public, Forecasting</td><td>8 hours · full-day live bootcamp</td><td>Semester 2</td></tr>
                                                        <tr><td class="tbl-label"><strong>B2</strong> — Social Media, Content &amp; Influencer Marketing</td><td>Notion, Canva, CapCut, Meta, Buffer, Heepsy</td><td>8 hours · full-day live bootcamp</td><td>Semester 2</td></tr>
                                                        <tr><td class="tbl-label"><strong>B3</strong> — Social Media Analytics &amp; Future Intelligence</td><td>Social listening, Looker Studio, A/B testing</td><td>8 hours · full-day live bootcamp</td><td>Semester 2</td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Eligibility: Which Certifications Will I Get?</p>
                                <div class="faq-list mb-2">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are all certifications available to every programme?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a">
                                            <p>No. CPEA and CPDA are available to everyone; the rest depend on your programme and specialisation. It is therefore normal for learners from different specialisations to have different Semester 2 certifications.</p>
                                            <ul class="ac-list text-dark">
                                                <li><strong>CPEA and CPDA (Semester 1):</strong> available to all programmes – PGDM, PGDM Executive and PGCM – across all specialisations.</li>
                                                <li><strong>CPDSA and CPQBA (Semester 2):</strong> available to PGDM, PGDM Executive and PGCM learners in all specialisations except PGCM – Digital Marketing and PGDM Executive – Digital Marketing.</li>
                                                <li><strong>CDME, CDMA, B2 and B3 (Semester 2):</strong> available only to PGCM and PGDM Executive learners in the Digital Marketing specialisation. They are not part of the general PGDM programme or any other specialisation.</li>
                                                <li><strong>B1 – Marketing Analytics Mastery (Semester 2):</strong> covers two subjects with different eligibility:
                                                    <ul class="ac-list text-dark mt-2">
                                                        <li><strong>Marketing Analytics &amp; Future Trends:</strong> PGCM – Digital Marketing and PGDM Executive – Digital Marketing.</li>
                                                        <li><strong>Marketing Analytics:</strong> PGCM – Business Analytics, PGDM Executive – Strategic Marketing Management and PGDM Executive – Business Analytics.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What do Digital Marketing learners get?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Digital Marketing learners follow the same Semester 1 certifications as everyone else (CPEA and CPDA). In Semester 2, CDME and CDMA are offered in place of CPDSA and CPQBA, along with the B1, B2 and B3 bootcamps.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the complete list of certifications for my programme and specialisation?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a">
                                            <div class="tbl-wrap mt-0">
                                                <table class="tbl">
                                                    <thead>
                                                        <tr>
                                                            <th class="tbl-label">Programme &amp; Specialisation</th>
                                                            <th class="tbl-label">Certifications Included</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><td class="tbl-label">PGCM – Digital Marketing</td><td class="tbl-label">CPEA, CPDA, CDME, CDMA, B1 (Marketing Analytics &amp; Future Trends), B2, B3</td></tr>
                                                        <tr><td class="tbl-label">PGDM Executive – Digital Marketing</td><td class="tbl-label">CPEA, CPDA, CDME, CDMA, B1 (Marketing Analytics &amp; Future Trends), B2, B3</td></tr>
                                                        <tr><td class="tbl-label">PGCM – Business Analytics</td><td class="tbl-label">CPEA, CPDA, CPDSA, CPQBA, B1 (Marketing Analytics)</td></tr>
                                                        <tr><td class="tbl-label">PGDM Executive – Business Analytics</td><td class="tbl-label">CPEA, CPDA, CPDSA, CPQBA, B1 (Marketing Analytics)</td></tr>
                                                        <tr><td class="tbl-label">PGDM Executive – Strategic Marketing Management</td><td class="tbl-label">CPEA, CPDA, CPDSA, CPQBA, B1 (Marketing Analytics)</td></tr>
                                                        <tr><td class="tbl-label">PGDM (all specialisations)</td><td class="tbl-label">CPEA, CPDA, CPDSA, CPQBA</td></tr>
                                                        <tr><td class="tbl-label">All other PGCM and PGDM Executive specialisations</td><td class="tbl-label">CPEA, CPDA, CPDSA, CPQBA</td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Can I take a certification that is not mapped to my specialisation?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. Certifications are mapped by programme and specialisation. CDME, CDMA, B2 and B3 are designed for Digital Marketing specialisation learners only, while CPDSA and CPQBA are offered to all specialisations except Digital Marketing. If you are unsure which certifications are mapped to you, please check with the Student Support team.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Do I need to complete CDME before CDMA?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>CDMA is the advanced certification that builds on CDME, so CDME lays the foundation for it. Both are part of the Digital Marketing specialisation track.</p></div>
                                    </div>
                                </div>

                                <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">What You Will Learn</p>
                                <div class="faq-list mb-2">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What does CPEA – Certified Professional Excel Analyst cover?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Core Excel (sorting, filtering, essential functions, Flash Fill, Data Validation); logical functions and VLOOKUP; ChatGPT and Copilot inside Excel workflows; Pivot Tables with slicers, calculated fields and pivot charts; advanced and multi-criteria lookups; and automation with Macros, VBA and Power Query.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What does CPDA – Certified Professional Data Analyst cover?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>SQL fundamentals (SELECT, WHERE, filtering); aggregation with GROUP BY and HAVING; advanced SQL including joins, subqueries, CTEs and window functions; Power BI reporting; and DAX, time intelligence (YTD/MTD), data modelling and dashboard publishing.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What does CPDSA – Certified Professional Data Science Analyst cover?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Python in Jupyter Notebook (variables, data types, loops, lists, dictionaries); data analysis with Pandas and NumPy; SAS interface and DATA step fundamentals; and PROC commands and PROC SQL for statistical summaries and reporting. It is built specifically for non-engineers.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What does CPQBA – Certified Professional Quantitative Business Analyst cover?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>R and RStudio for exploratory analysis and regression; ARIMA forecasting for time-series data; Tableau fundamentals and visualisation (bar/line charts, scatter plots, treemaps, filters); and forecasting and cluster analysis in Tableau.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What does CDME – Certificate in Digital Marketing Essentials cover?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Google My Business, SEO and SEM with AI tools such as ChatGPT and SEOwind; Google Ads campaigns, ad copy, Quality Score, bidding and Performance Max AI; LinkedIn B2B lead generation with Sales Navigator; and landing pages, conversion optimisation and e-commerce funnels.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What does CDMA – Certificate in Digital Marketing Applications cover?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The advanced layer after CDME: no-code marketing automation with Zapier/Make, CRM workflows and lead scoring; WhatsApp and chatbot marketing with ManyChat and Tidio; affiliate, performance and programmatic marketing with UTM tracking; and AI-powered content production and repurposing at scale.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What does B1 – Marketing Analytics Mastery cover?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>GA4 setup and KPI dashboards in Bitrix24 CRM; marketing mix modelling and multi-channel attribution in Google Looker Studio; customer journey dashboards in Tableau Public; demand forecasting with Google Trends and Meta Ads Manager insights; and AI-powered data storytelling.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What does B2 – Social Media, Content &amp; Influencer Marketing cover?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>A one-month content calendar built in Notion; a content sprint creating a Canva creative and a CapCut reel from a live brand brief; Meta Business Suite, LinkedIn analytics and Buffer scheduling; influencer discovery and ROI measurement with Heepsy; and an end-to-end AI content pipeline.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What does B3 – Social Media Analytics &amp; Future Intelligence cover?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Native analytics audits across Meta, LinkedIn and YouTube; social listening with Mention and Google Alerts and competitor benchmarking on Social Blade; a multi-platform dashboard in Looker Studio; A/B testing, ROI attribution and search-intent research with Answer The Public; and an AI-powered social intelligence reporting pipeline.</p></div>
                                    </div>
                                </div>

                                <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Sessions &amp; Schedule</p>
                                <div class="faq-list mb-2">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are the sessions live or recorded, and what learning resources are provided?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The certifications are delivered through live, hands-on sessions. B1, B2 and B3 are full-day (8-hour) live workshops. For every session, you receive the live-session recording on the LMS, a handbook, and practice datasets on the LMS.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>When are the Bootcamp sessions held?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Certification sessions are weekend sessions held on Saturdays or Sundays, from 7:00 PM to 10:00 PM. The full-day B1, B2 and B3 workshops are scheduled separately, and their dates are shared through official communication.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How will I receive session details and Bootcamp updates?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Official updates are shared through Email, Telegram and the LMS Community channel, so please keep a regular watch on all three. Session details are shared at least 4 days before the scheduled live session.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How do I join a live session?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The joining link is available only on the LMS. Log in to the LMS to join the scheduled session.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What do I need to attend the sessions?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You need your own laptop and access to the LMS. Sessions are hands-on, so you will practise on your own device during the live session.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is attendance compulsory? What if I miss a live session?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Attendance is not compulsory, but it is encouraged – the sessions are live and hands-on, so attending is the best way to build the skills each certification covers. If you miss a live session, review the recording, handbook and practice datasets on the LMS, and then attempt the self-assessment. The certification is earned by completing the self-assessment, not by attendance alone.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the benefit of attending live if a recording is available?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Live sessions give you real-time Q&amp;A with the subject matter expert, hands-on practice with live datasets, and the chance to network with your peers. A recording cannot replicate these.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What happens if a session is cancelled or postponed?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>If a session must be cancelled or postponed due to unforeseen circumstances beyond reasonable control, you will be informed through Email and Telegram.</p></div>
                                    </div>
                                </div>

                                <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Self-Assessment &amp; Certificate</p>
                                <div class="faq-list mb-2">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How will I be assessed, and how do I earn a certificate?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Each of the six certifications is assessed through a self-assessment multiple-choice (MCQ) test on the MITSDE LMS. After completing the certification learning, you must complete this self-assessment. Attending the live sessions alone does not complete the certification process.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the format of the self-assessment?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The self-assessment has 15 questions of 2 marks each, for a total of 30 marks. It is taken on the LMS.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>When is the self-assessment available, and for how long?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The self-assessment opens on the LMS after the final session of the certification and remains available for one month. Please complete it within the window communicated to you.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How many attempts do I get?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You get one attempt per certification. Please review the session materials thoroughly before you attempt it.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What if I fail or miss the self-assessment?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Please raise a ticket with the Student Support team. Your case will be referred to the Academics team, who will advise on the applicable next steps.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How will I receive my certificate?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>After you complete the assessment, your completion certificate with grade is sent to your registered email ID after the assessment window closed. Certificates are issued digitally only; hard copies are not provided. Please make sure the email ID registered with MITSDE is correct and active.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>When will I receive my certificate?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The certificate is issued after you complete the prescribed process. Any specific timeline is communicated officially by the Academics team.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Do the B1, B2 and B3 bootcamps also include a certificate?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. B1, B2 and B3 are full-day, hands-on workshops. The MCQ assessment and emailed certificate apply to the six certifications: CPEA, CPDA, CPDSA, CPQBA, CDME and CDMA.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Do the certifications carry credits or affect my academic grade?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. These are non-credit certifications. They do not affect your academic grade or credit count and are not reflected on your programme certificate. Each certification is issued as a separate certificate that adds to your professional profile.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Are these certifications recognised by employers?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The certifications are part of MITSDE's verifiable credential framework. They are designed to give you skill-based proof of competency that is valued by recruiters and industry partners.</p></div>
                                    </div>
                                </div>

                                <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Bootcamp Fit Checker</p>
                                <div class="faq-list mb-2">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>What is the Bootcamp Fit Checker?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The Fit Checker is a free tool that helps you decide whether attending a live Bootcamp session will be useful for you. It considers your programme, specialisation, background, experience, existing knowledge and learning goals, and takes under two minutes to complete.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Where do I find the Fit Checker, and what if I cannot access it?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>The Fit Checker link is shared through session communications – your registered email, Telegram groups, LMS Community and LMS announcements. Make sure you are logged in to the LMS and check the Community section of your cohort. If you still cannot access it, please raise a support ticket.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Is the Fit Checker mandatory?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. It is completely optional and is there to help you make a better decision, not to restrict your access to any session.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Do I have to follow the Fit Checker's recommendation?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. The Fit Checker is a guide, not a gatekeeper. You are welcome to attend any session of your mapped certifications, even if your result is “Your Call”. If your result is “Attend Live” but you cannot attend because of a prior commitment, that is perfectly fine – review the post-session materials and attempt the self-assessment when you feel ready.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How many times can I use the Fit Checker?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>You can use the Fit Checker only once per certification. It is designed to provide an honest and personalized recommendation based on your responses. Repeated attempts with different answers are not permitted, as the purpose is to help you make an informed decision about the certification.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Does the Fit Checker decide whether I can take the self-assessment?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>No. Every learner registered for the certification is eligible to attempt the self-assessment. The Fit Checker only helps you prepare better for it.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>I entered the wrong email ID on the Fit Checker. What should I do?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Always use your registered email ID. If you have entered an incorrect one, contact the Student Support team immediately so that the records can be corrected.</p></div>
                                    </div>
                                </div>

                                <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Career Value</p>
                                <div class="faq-list mb-2">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>How will these certifications help my career?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>They give you verifiable, hands-on skills in the tools employers list in job descriptions across HR, Finance, Operations, Supply Chain, Project Management, Sales and Marketing. Alongside your management qualification, you graduate with technical certifications you can add to your resume and LinkedIn profile and demonstrate in interviews.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>I am a working professional with years of experience. Are these still useful for me?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>Yes. Many experienced professionals stall not because of a lack of experience but because of gaps in current tools such as advanced Excel, SQL, Power BI, Python or digital marketing platforms. These certifications are designed to close exactly that gap, at no extra cost.</p></div>
                                    </div>
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>I am a fresh graduate. Why should these matter to me?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>They give you practical, job-ready skills and certifications to strengthen your first resume, helping you stand out for analyst, marketing and business roles from day one.</p></div>
                                    </div>
                                </div>

                                <p class="fw-bold text-uppercase text-muted" style="font-size:var(--fz-xsmall);letter-spacing:.08em;margin:20px 0 8px;">Still Have Questions?</p>
                                <div class="faq-list mb-2">
                                    <div class="faq-item">
                                        <button class="faq-q" aria-expanded="false">
                                            <span>Whom do I contact for Bootcamp-related queries?</span>
                                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <div class="faq-a"><p>For questions about your eligibility, schedule or certification details, raise a support ticket with the Student Support team. For general enquiries, you can write to <a href="mailto:bootcamp@mitsde.com" style="color:var(--primary-orange);font-weight:600;">bootcamp@mitsde.com</a>.</p></div>
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
            faqKeepInView(btn, function () {
                groups.forEach(function (g) {
                    g.classList.remove('is-open');
                    g.querySelector('.faq-vq').setAttribute('aria-expanded', 'false');
                });
                if (!isOpen) group.classList.add('is-open');
            });
            btn.setAttribute('aria-expanded', !isOpen);
        });
    });
})();
</script>

</body>
</html>
