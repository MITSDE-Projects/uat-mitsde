<!-- ═══════════════════════════════════════════════════════════════
     BEST-FIT PROGRAMME FINDER (popup)
     Opened by any element with  data-bs-toggle="modal" data-bs-target="#bfModal"
     - Programme / specialisation data + recommendation rules: see BF_* objects in the script below
     - Lead form: validate('bestFitLeadForm') → validation.js → ExtraaEdge CRM + ai-thankyou.php (quickcontact)
     - Styles: .bf-* in css-new/styles.css
═══════════════════════════════════════════════════════════════ -->
<div class="modal fade" id="bfModal" tabindex="-1" aria-labelledby="bfQuestion" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered bf-dialog">
        <div class="modal-content bf-card">

            <button type="button" class="eq-close bf-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>

            <!-- ── QUIZ VIEW ── -->
            <div class="bf-quiz" id="bfQuiz">
                <span class="bf-eyebrow">Find Your Best-Fit Programme</span>
                <div class="bf-progress"><span id="bfProgressBar"></span></div>
                <span class="bf-step" id="bfStep"></span>
                <h3 class="bf-question" id="bfQuestion"></h3>
                <div class="bf-options" id="bfOptions"></div>
                <div class="bf-nav">
                    <button type="button" class="bf-back" id="bfBack"><i class="fa-solid fa-arrow-left"></i> Back</button>
                </div>
            </div>

            <!-- ── RESULT VIEW ── -->
            <div class="bf-result" id="bfResult" hidden>

                <div class="bf-result-main">
                    <span class="bf-badge"><i class="fa-solid fa-star"></i> <span id="bfBadgeText">Your Best-Fit Programme</span></span>
                    <h3 class="bf-prog-title" id="bfProgTitle"></h3>
                    <div class="bf-meta" id="bfProgMeta"></div>
                    <ul class="bf-why" id="bfWhy"></ul>
                    <p class="bf-note" id="bfNote" hidden></p>
                    <div id="bfLinkWrap">
                        <p class="bf-link-line">For the full syllabus, specialisations and fees:</p>
                        <a class="bf-cta" id="bfProgLink" href="#">View Programme Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="bf-also" id="bfAlsoWrap">
                        <span class="bf-also-label">Also consider</span>
                        <ul id="bfAlso"></ul>
                    </div>
                    <button type="button" class="bf-retake" id="bfRetake"><i class="fa-solid fa-rotate-left"></i> Retake the quiz</button>
                </div>

                <div class="bf-result-form">
                    <div id="bfFormWrap">
                        <h4 class="bf-form-title">Want to talk to a counsellor?</h4>
                        <p class="bf-form-sub">Fill in this form to get fee, scholarship and next-intake details for your programme.</p>
                        <form id="bestFitLeadForm" name="bestFitLeadForm" novalidate accept-charset="utf-8">
                            <input type="hidden" name="product_id3" value="0">
                            <input type="hidden" name="request_type3" value="Enquiry">
                            <input type="hidden" name="submitthirdcontact" value="submitthirdcontact">
                            <input type="hidden" name="Divice" value="<?php echo isset($divice) ? htmlspecialchars($divice) : ''; ?>">
                            <input type="hidden" name="PageName" id="bfPageName" value="Best-Fit Finder">
                            <input type="hidden" name="latitude" value="">
                            <input type="hidden" name="longitude" value="">
                            <input type="text" name="website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;opacity:0;pointer-events:none;">
                            <div class="eq-field">
                                <i class="fa-solid fa-user eq-icon"></i>
                                <input type="text" name="first_name3" class="eq-input" placeholder="Full Name *" validate="Required|Full Name*" autocomplete="off">
                            </div>
                            <div class="eq-field">
                                <i class="fa-solid fa-envelope eq-icon"></i>
                                <input type="email" name="email3" class="eq-input" placeholder="Email Address *" validate="Email|Email*" autocomplete="off">
                            </div>
                            <div class="eq-field">
                                <i class="fa-solid fa-phone eq-icon"></i>
                                <input type="tel" name="MobileNumber" class="eq-input" placeholder="Mobile Number *" maxlength="10" validate="Required|Phone|Phone*" autocomplete="off">
                            </div>
                            <div class="eq-field">
                                <i class="fa-solid fa-location-dot eq-icon"></i>
                                <select name="state" class="eq-input eq-select" validate="Required|State|State*">
                                    <option value="">Select State *</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option><option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>
                            <div class="eq-field">
                                <i class="fa-solid fa-graduation-cap eq-icon"></i>
                                <select name="HQ" id="bfHQ" class="eq-input eq-select" validate="Required|HQ*">
                                    <option value="">Highest Qualification *</option>
                                    <option value="graduation">Graduation</option>
                                    <option value="post graduation">Post Graduation</option>
                                    <option value="Diploma">Diploma</option>
                                </select>
                            </div>
                            <div class="eq-consent">
                                <input type="checkbox" id="bfConsent" checked>
                                <label for="bfConsent">I authorize MIT-SDE representative to contact me, this will override DND/NDNC registry.</label>
                            </div>
                            <button type="button" id="bfSubmitBtn" class="eq-submit" onclick="validate('bestFitLeadForm')">Request a Callback</button>
                        </form>
                    </div>

                    <div class="bf-thanks" id="bfThanks" hidden>
                        <div class="qtp-check"><i class="fa-solid fa-check"></i></div>
                        <h4 class="bf-form-title">Thanks, <span id="bfLeadName">there</span>!</h4>
                        <p class="bf-form-sub">Our counsellor will call you within 24 hours to talk about <strong id="bfThanksProg">your programme</strong>.</p>
                        <a href="tel:+919112207207" class="bf-call"><i class="fa-solid fa-phone"></i> Call us now: +91 9112-207-207</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<script>
(function () {
    /* ─────────────────────────────────────────────────────────
       PROGRAMME DATA  (from the header "Growth Programs" mega-menu)
       specs: interest-area key → [page, specialisation name]
    ───────────────────────────────────────────────────────── */
    var BF_PROG = {
        pgdmexe: {
            name: 'PGDM (Executive)', full: 'Post Graduate Diploma in Management (Executive)',
            dur: '15 months', elig: 'Any graduate with 5+ years of work experience',
            main: 'post-graduate-diploma-in-management-executive',
            specs: {
                international: ['pgdm-executive-in-international-business', 'International Business'],
                esg:           ['pgdm-executive-in-sustainability-esg', 'Sustainability & ESG'],
                digital:       ['pgdm-executive-in-digital-marketing', 'Digital Marketing'],
                analytics:     ['pgdm-executive-in-business-analytics', 'Business Analytics'],
                it:            ['pgdm-executive-in-information-technology', 'Information Technology'],
                project:       ['pgdm-executive-in-modern-project-management', 'Modern Project Management'],
                operations:    ['pgdm-executive-in-technology-and-operations-management', 'Technology & Operations'],
                hr:            ['pgdm-executive-in-human-capital-management', 'Human Capital Management'],
                banking:       ['pgdm-executive-in-banking-financial-services', 'Banking & Financial Services'],
                finance:       ['pgdm-executive-in-finance-management', 'Finance Management'],
                marketing:     ['pgdm-executive-in-strategic-marketing-management', 'Strategic Marketing Management'],
                supplychain:   ['pgdm-executive-in-global-logistics-and-supply-chain-management', 'Global Logistics & Supply Chain']
            }
        },
        cdms: {
            name: 'Chief Digital Marketing Strategist Program', full: 'Chief Digital Marketing Strategist Program',
            dur: '12 months + 3-month capstone', elig: 'Any graduate with 5+ years of work experience',
            main: 'digital-marketing-strategist', specs: {}
        },
        emba: {
            name: 'Executive MBA', full: 'Executive MBA',
            dur: '24 months', elig: 'Any graduate',
            main: 'executive-mba',
            specs: {
                international: ['executive-mba-in-international-business', 'International Business'],
                supplychain:   ['executive-mba-in-supply-chain-management', 'Supply Chain Management'],
                finance:       ['executive-mba-finance-management', 'Finance Management'],
                hr:            ['executive-mba-human-resource-management', 'HR Management'],
                marketing:     ['executive-mba-marketing', 'Marketing Management'],
                operations:    ['executive-mba-in-operations', 'Operations Management'],
                project:       ['executive-mba-in-project-management', 'Project Management'],
                analytics:     ['executive-mba-in-business-analytics-and-ai', 'Business Analytics and AI']
            }
        },
        pgdm: {
            name: 'PGDM', full: 'Post Graduate Diploma in Management (PGDM)',
            dur: '24 months', elig: 'Any graduate',
            main: 'post-graduate-diploma-in-management',
            specs: {
                project:     ['pg-diploma-in-project-management', 'Project Management'],
                operations:  ['pg-diploma-in-operations-management', 'Operations Management'],
                hr:          ['pg-diploma-in-human-resource-management', 'Human Resource Management'],
                it:          ['pg-diploma-in-information-technology', 'Information Technology'],
                marketing:   ['pg-diploma-in-marketing-management', 'Marketing Management'],
                finance:     ['pg-diploma-in-finance-management', 'Finance Management'],
                supplychain: ['pg-diploma-in-supply-chain-management', 'Logistics and Supply Chain Management'],
                banking:     ['pg-diploma-in-banking-finance', 'Banking & Financial Services']
            }
        },
        pgdba: {
            name: 'PGDBA', full: 'Post Graduate Diploma in Business Administration (PGDBA)',
            dur: '24 months', elig: 'Any graduate',
            main: 'post-graduate-diploma-in-business-administration',
            specs: {
                operations: ['pgdba-in-operations-management', 'Operations Management'],
                finance:    ['pgdba-in-finance', 'Finance Management'],
                hr:         ['pgdba-in-human-resource-management', 'Human Resource Management'],
                it:         ['pgdba-in-information-technology', 'Information Technology'],
                marketing:  ['pgdba-in-marketing-management', 'Marketing Management']
            }
        },
        pgcm: {
            name: 'PGCM', full: 'Post Graduate Certificate in Management (PGCM)',
            dur: '12 months', elig: 'Any graduate',
            main: 'post-graduate-certificate-in-management',
            specs: {
                analytics: ['post-graduate-certificate-in-business-analytics', 'Business Analytics'],
                digital:   ['post-graduate-certificate-in-digital-marketing', 'Digital Marketing']
            }
        },
        dual: {
            name: 'Dual Degree Program', full: 'Dual Degree Program (PGDM Executive + EMBA)',
            dur: '27 months', elig: 'Any graduate',
            main: 'pgdm-executive-emba-dual-program', specs: {}
        }
    };

    /* Short courses: Career Accelerator Programs (CAP) + Professional Certificate Programs (PCP) */
    var BF_COURSE = {
        powerbi: { title: 'SQL & Power BI Certification', url: 'power-bi-certification', dur: '3 months', kind: 'cap' },
        genai:   { title: 'Gen AI for Educators', url: 'gen-ai-for-educators', dur: '3 months', kind: 'cap' },
        lssgb:   { title: 'AI-Lean Six Sigma Green Belt Certification', url: 'ai-lean-six-sigma-green-belt-certification', dur: '2 months', kind: 'cap' },
        lssbb:   { title: 'Lean Six Sigma Black Belt Certification', url: 'lean-six-sigma-black-belt-certification', dur: '3 months', kind: 'cap' },
        tqm:     { title: 'Certification in Total Quality Management', url: 'total-quality-management-certification', dur: '2 months', kind: 'cap' }
    };
    /* PCP: interest-area key → [page, title] (6 months, 10th / 12th pass, self-paced online) */
    var BF_PCP = {
        finance:     ['certification-in-finance-management', 'Certification in Finance Management'],
        marketing:   ['certification-in-marketing-management', 'Certification in Marketing Management'],
        digital:     ['certification-in-digital-marketing', 'Certification in Digital Marketing'],
        hr:          ['certification-in-human-resource-management', 'Certification in Human Resource Management'],
        operations:  ['certification-in-operations-management', 'Certification in Operations Management'],
        supplychain: ['certification-in-supply-chain-management', 'Certification in Logistics and Supply Chain'],
        material:    ['certification-in-material-management', 'Certification in Material Management'],
        project:     ['certification-in-project-management', 'Certification in Project Management'],
        analytics:   ['certification-in-business-analytics', 'Certification in Business Analytics']
    };

    /* When a programme has no exact specialisation, try a close one */
    var BF_ALIAS = { banking: 'finance', digital: 'marketing', it: 'analytics' };
    var BF_PCP_ALIAS = { banking: 'finance', it: 'analytics' };

    var BF_AREAS = [
        ['finance', 'Finance'], ['banking', 'Banking & Financial Services'], ['marketing', 'Marketing & Sales'],
        ['digital', 'Digital Marketing'], ['hr', 'HR & People Management'], ['operations', 'Operations'],
        ['supplychain', 'Supply Chain & Logistics'], ['project', 'Project Management'], ['analytics', 'Business Analytics & AI'],
        ['it', 'Information Technology'], ['international', 'International Business'], ['esg', 'Sustainability & ESG'],
        ['quality', 'Quality (Lean Six Sigma / TQM)'], ['education', 'Teaching & Education'], ['unsure', 'Not sure yet']
    ];
    function areaLabel(k) { for (var i = 0; i < BF_AREAS.length; i++) if (BF_AREAS[i][0] === k) return BF_AREAS[i][1]; return ''; }

    /* ─────────────────────────────────────────────────────────
       QUESTIONS  (cond = only asked when it returns true)
    ───────────────────────────────────────────────────────── */
    var BF_QUESTIONS = [
        { key: 'edu', q: 'What is your highest education?', opts: [
            ['grad', 'Graduate (bachelor’s degree completed)'],
            ['final', 'Final-year graduation student'],
            ['school', '12th pass / Diploma']
        ]},
        { key: 'exp', q: 'How much work experience do you have?', cond: function (a) { return a.edu !== 'school'; }, opts: [
            ['0-2', 'Fresher / 0–2 years'], ['2-5', '2–5 years'], ['5+', '5+ years']
        ]},
        { key: 'area', q: 'Which area interests you the most?', grid: true, opts: BF_AREAS },
        { key: 'goal', q: 'What is your main goal?', cond: function (a) { return a.edu !== 'school'; }, opts: [
            ['lead', 'Get a promotion or a leadership role'],
            ['switch', 'Switch careers or land a new job'],
            ['skill', 'Learn a specific skill quickly'],
            ['degree', 'Earn a postgraduate management qualification'],
            ['dual', 'Earn two qualifications together']
        ]},
        { key: 'time', q: 'How much time can you commit to a programme?', cond: function (a) { return a.edu !== 'school'; }, opts: [
            ['short', '3–6 months'], ['year', 'About 1 year'], ['long', '1.5–2+ years']
        ]},
        { key: 'style', q: 'What kind of programme suits you better?', cond: needsStyle, opts: [
            ['foundation', 'A strong foundation in business basics — economics, law and strategy'],
            ['applied', 'Practical, job-ready skills with AI tools (Excel and Data Analytics certifications)'],
            ['unsure', 'Not sure']
        ]}
    ];

    /* PGDM vs PGDBA is only asked when the path leads to one of them and PGDBA offers the chosen area */
    function needsStyle(a) {
        if (!a.time || a.edu === 'school' || a.time !== 'long' || a.goal === 'dual') return false;
        if (a.exp === '5+') return false;
        if (a.exp === '2-5' && a.goal !== 'switch') return false;
        return a.area === 'unsure' || !!BF_PROG.pgdba.specs[a.area];
    }

    /* ─────────────────────────────────────────────────────────
       OFFER BUILDERS
    ───────────────────────────────────────────────────────── */
    function prog(key, area) {
        var p = BF_PROG[key];
        var s = p.specs[area] || (BF_ALIAS[area] && area !== 'unsure' ? p.specs[BF_ALIAS[area]] : null);
        return {
            prog: key,
            title: s ? p.name + ' in ' + s[1] : p.full,
            url: s ? s[0] : p.main,
            matched: !!(s && p.specs[area]),
            dur: p.dur, elig: p.elig
        };
    }
    function course(key) {
        var c = BF_COURSE[key];
        return { prog: 'cap', title: c.title, url: c.url, dur: c.dur, elig: '', matched: true };
    }
    function pcp(area) {
        var c = BF_PCP[area] || BF_PCP[BF_PCP_ALIAS[area]];
        if (!c) return null;
        return { prog: 'pcp', title: c[1], url: c[0], dur: '6 months', elig: '10th / 12th pass', matched: !!BF_PCP[area] };
    }
    function shortCourse(area) {
        if (area === 'analytics' || area === 'it') return course('powerbi');
        if (area === 'quality') return course('lssgb');
        if (area === 'education') return course('genai');
        return pcp(area);
    }
    function sideCourse(area) {
        if (area === 'quality') return course('lssgb');
        if (area === 'education') return course('genai');
        if (area === 'analytics') return course('powerbi');
        return null;
    }

    /* ─────────────────────────────────────────────────────────
       RECOMMENDATION RULES
    ───────────────────────────────────────────────────────── */
    function recommend(a) {
        var area = a.area, five = a.exp === '5+';
        var best = null, also = [], note = '';

        /* 1. Not a graduate → certificate courses only */
        if (a.edu === 'school') {
            best = pcp(area);
            also = [pcp('analytics'), pcp('digital'), pcp('project')];
            if (!best) note = 'Our postgraduate programmes need a bachelor’s degree. Our counsellor can help you choose the right certificate course.';
            return finish(best, also, note, a);
        }

        var time = a.time;

        /* 2. Short time, or a quick skill without a long commitment → short course */
        if (time === 'short' || (a.goal === 'skill' && time !== 'long')) {
            best = area === 'unsure' ? course('powerbi') : shortCourse(area);
            if (best) {
                if (area === 'quality') also = [course('lssbb'), course('tqm')];
                else if (area === 'analytics' || area === 'it') also = [pcp('analytics'), prog('pgcm', 'analytics')];
                else if (area === 'unsure') also = [pcp('digital'), course('lssgb')];
                else also = [prog('pgcm', area), five ? prog('pgdmexe', area) : prog('emba', area)];
                return finish(best, also, note, a);
            }
            note = 'There is no short course in ' + areaLabel(area) + ' yet — this is the closest programme for you.';
            time = 'year';
        }

        /* 3. About one year */
        if (time === 'year') {
            if (area === 'digital' && five) {
                best = prog('cdms', area);
                also = [prog('pgdmexe', 'digital'), prog('pgcm', 'digital')];
            } else if (BF_PROG.pgcm.specs[area]) {
                best = prog('pgcm', area);
                also = [five ? prog('pgdmexe', area) : prog('emba', area), sideCourse(area)];
            } else if (five) {
                best = prog('pgdmexe', area);
                also = [prog('emba', area), sideCourse(area) || prog('pgcm', area)];
            } else {
                best = prog('pgcm', area);
                also = [sideCourse(area), prog('pgdm', area), prog('emba', area)];
            }
            return finish(best, also, note, a);
        }

        /* 4. 1.5–2+ years */
        if (a.goal === 'dual') {
            best = prog('dual', area);
            also = [five ? prog('pgdmexe', area) : prog('emba', area), prog('emba', area)];
        } else if (five) {
            best = prog('pgdmexe', area);
            also = [prog('emba', area), prog('dual', area)];
        } else if (a.exp === '2-5' && a.goal !== 'switch') {
            best = prog('emba', area);
            also = [prog('pgdm', area), prog('dual', area)];
        } else if (needsStyle(a)) {
            var dba = prog('pgdba', area), dm = prog('pgdm', area);
            dba.tag = 'foundation-focused, lower fee';
            if (a.style === 'foundation') { best = dba; also = [dm]; }
            else { best = dm; also = [dba]; }
        } else {
            best = prog('pgdm', area);
            also = [prog('emba', area)];
        }
        /* a related short course: first for Quality / Teaching (no degree specialisation), last otherwise */
        var side = sideCourse(area);
        if (side) { if (area === 'analytics') also.push(side); else also.unshift(side); }
        return finish(best, also, note, a);
    }

    /* Clean up "also" list + explain a missing specialisation */
    function finish(best, also, note, a) {
        var seen = {}, list = [];
        if (best) seen[best.url] = true;
        for (var i = 0; i < also.length && list.length < 2; i++) {
            var o = also[i];
            if (!o || seen[o.url]) continue;
            /* never suggest a 5+ years programme to someone with less experience */
            if ((o.prog === 'pgdmexe' || o.prog === 'cdms') && a.exp !== '5+') continue;
            seen[o.url] = true; list.push(o);
        }
        /* only programmes that have specialisations (not Dual / CDMS / short courses) */
        var hasSpecs = best && ['pgdmexe', 'emba', 'pgdm', 'pgdba', 'pgcm'].indexOf(best.prog) !== -1;
        if (hasSpecs && !best.matched && a.area !== 'unsure' && !note) {
            var where = [], exeOnly = false;
            ['pgdmexe', 'emba', 'pgdm', 'pgdba', 'pgcm'].forEach(function (k) {
                if (!BF_PROG[k].specs[a.area]) return;
                if (k === 'pgdmexe' && a.exp !== '5+') { exeOnly = true; return; }
                where.push(BF_PROG[k].name);
            });
            if (where.length) note = 'A dedicated ' + areaLabel(a.area) + ' specialisation is offered in ' + where.join(', ') + '.';
            else if (exeOnly) note = 'A dedicated ' + areaLabel(a.area) + ' specialisation is offered in PGDM (Executive), which needs 5+ years of work experience.';
        }
        if (a.edu === 'final') note = (note ? note + ' ' : '') + 'Most of our programmes need a completed bachelor’s degree — our counsellor can confirm your eligibility.';
        return { best: best, also: list, note: note };
    }

    /* "Why it fits you" bullets */
    function whyFits(r, a) {
        var b = r.best, out = [];
        var reason = {
            pgdmexe: 'Designed for professionals with 5+ years of work experience',
            cdms: 'Designed for professionals with 5+ years of work experience',
            emba: 'Built for working professionals growing into management roles',
            pgdm: 'Applied, industry-focused curriculum with AI-tool certifications',
            pgdba: 'A strong foundation in core business administration',
            pgcm: 'A one-year postgraduate certificate in management',
            dual: 'Two qualifications — PGDM (Executive) and EMBA — in one journey',
            cap: 'A short, skill-focused certification',
            pcp: 'Self-paced online certificate course'
        }[b.prog];
        if (reason) out.push(reason);
        if (b.matched && a.area !== 'unsure') out.push('Matches your interest in ' + areaLabel(a.area));
        if (a.time) out.push('Fits your timeline: ' + b.dur);
        if (a.goal === 'switch' && (b.prog === 'pgdm' || b.prog === 'pgdba')) out.push('A broad management base for a career switch');
        return out.slice(0, 3);
    }

    /* ─────────────────────────────────────────────────────────
       UI
    ───────────────────────────────────────────────────────── */
    var answers = {}, trail = [], timer = null;
    var el = function (id) { return document.getElementById(id); };

    function visibleQuestions() {
        return BF_QUESTIONS.filter(function (q) { return !q.cond || q.cond(answers); });
    }
    function nextQuestion() {
        var qs = visibleQuestions();
        for (var i = 0; i < qs.length; i++) if (!(qs[i].key in answers)) return qs[i];
        return null;
    }

    function renderQuestion() {
        var q = nextQuestion();
        if (!q) return showResult();
        var qs = visibleQuestions(), idx = qs.indexOf(q);
        el('bfStep').textContent = 'Question ' + (idx + 1) + ' of ' + qs.length;
        el('bfProgressBar').style.width = Math.round(idx / qs.length * 100) + '%';
        el('bfQuestion').textContent = q.q;
        var box = el('bfOptions');
        box.className = 'bf-options' + (q.grid ? ' is-grid' : '');
        box.innerHTML = '';
        q.opts.forEach(function (o) {
            var btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'bf-option';
            btn.textContent = o[1];
            btn.addEventListener('click', function () { choose(q.key, o[0], btn); });
            box.appendChild(btn);
        });
        el('bfBack').style.visibility = trail.length ? 'visible' : 'hidden';
    }

    function choose(key, value, btn) {
        if (timer) return;
        btn.classList.add('is-selected');
        timer = setTimeout(function () {
            timer = null;
            answers[key] = value;
            trail.push(key);
            renderQuestion();
        }, 280);
    }

    el('bfBack').addEventListener('click', function () {
        if (timer) { clearTimeout(timer); timer = null; }
        var key = trail.pop();
        if (key) delete answers[key];
        /* drop answers to questions that are no longer asked */
        BF_QUESTIONS.forEach(function (q) { if (q.cond && !q.cond(answers) && trail.indexOf(q.key) === -1) delete answers[q.key]; });
        renderQuestion();
    });

    function showResult() {
        var r = recommend(answers);
        el('bfQuiz').hidden = true;
        el('bfResult').hidden = false;

        var b = r.best;
        el('bfBadgeText').textContent = b ? 'Your Best-Fit Programme' : 'Let’s find the right course together';
        el('bfProgTitle').textContent = b ? b.title : 'Talk to our counsellor';
        var meta = el('bfProgMeta'); meta.innerHTML = '';
        if (b) [b.dur && '<i class="fa-regular fa-clock"></i> ' + b.dur, b.elig && '<i class="fa-solid fa-user-check"></i> ' + b.elig]
            .forEach(function (t) { if (t) { var s = document.createElement('span'); s.className = 'bf-chip'; s.innerHTML = t; meta.appendChild(s); } });

        var why = el('bfWhy'); why.innerHTML = '';
        if (b) whyFits(r, answers).forEach(function (t) { var li = document.createElement('li'); li.textContent = t; why.appendChild(li); });

        el('bfNote').hidden = !r.note;
        el('bfNote').textContent = r.note;

        el('bfLinkWrap').hidden = !b;
        if (b) el('bfProgLink').href = b.url;

        var also = el('bfAlso'); also.innerHTML = '';
        r.also.forEach(function (o) {
            var li = document.createElement('li');
            var a = document.createElement('a'); a.href = o.url; a.textContent = o.title;
            li.appendChild(a);
            var extra = [o.dur, o.tag].filter(Boolean).join(' · ');
            if (extra) { var sm = document.createElement('small'); sm.textContent = ' — ' + extra; li.appendChild(sm); }
            also.appendChild(li);
        });
        el('bfAlsoWrap').hidden = !r.also.length;

        /* lead form: recommendation goes to quickcontact.page_name; prefill qualification */
        el('bfPageName').value = ('Best-Fit: ' + (b ? b.title : 'Counsellor')).slice(0, 60);
        el('bfThanksProg').textContent = b ? b.title : 'the right course for you';
        if (answers.edu === 'grad' && !el('bfHQ').value) el('bfHQ').value = 'graduation';
    }

    function resetQuiz() {
        answers = {}; trail = [];
        el('bfResult').hidden = true;
        el('bfQuiz').hidden = false;
        renderQuestion();
    }
    el('bfRetake').addEventListener('click', resetQuiz);

    /* called by validation.js after a successful submit */
    window.showBestFitThanks = function (firstName) {
        el('bfLeadName').textContent = firstName || 'there';
        el('bfFormWrap').hidden = true;
        el('bfThanks').hidden = false;
    };

    renderQuestion();
})();
</script>
