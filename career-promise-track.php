<?php
/*
 * Career Promise Track — reusable partial
 *
 * Set these variables BEFORE include:
 *
 * $cpt_number    (string)  e.g. "01"
 * $cpt_icon      (string)  FA icon class e.g. "fa-rocket"
 * $cpt_badge     (string)  e.g. "PGDM (Ex.)"
 * $cpt_title     (string)  track / program title in header
 * $cpt_persona   (array)   target persona bullet items
 * $cpt_from      (string)  FROM role box text
 * $cpt_to        (string)  TO role box text
 * $cpt_motives   (array)   career motive pills
 * $cpt_skills    (array)   role skills layer items
 * $cpt_jd_titles (array)   LinkedIn JD title tags
 * $cpt_quote     (string)  quote strip text (HTML allowed for <span>)
 */
?>
<!-- ═══════════════════════════════════════════════
   CAREER PROMISE TRACK
════════════════════════════════════════════════ -->
<section class="cpt-section" id="career-track">
    <div class="container">
        <h2 class="section-heading mb-4">Career <span>Track</span></h2>
        <div class="cpt-card">

            <!-- Left panel -->
            <div class="cpt-left">
                <div class="cpt-number"><?php echo htmlspecialchars($cpt_number); ?></div>
                <div class="cpt-badge"><?php echo htmlspecialchars($cpt_badge); ?></div>
                <div class="cpt-rocket"><i class="fa-solid <?php echo htmlspecialchars($cpt_icon); ?>"></i></div>
                <div class="cpt-label">Target Persona</div>
                <ul class="cpt-persona-list">
                    <?php foreach ($cpt_persona as $item): ?>
                    <li><?php echo htmlspecialchars($item); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Right panel -->
            <div class="cpt-right">
                <div class="cpt-track-header">
                    <h3 class="cpt-track-title"><?php echo htmlspecialchars($cpt_title); ?></h3>
                </div>

                <div class="cpt-cols">

                    <!-- Column 1: Career Promise -->
                    <div class="cpt-col">
                        <div class="cpt-label">Career Promise</div>
                        <div class="cpt-sub-label">From</div>
                        <div class="cpt-promise-box"><?php echo htmlspecialchars($cpt_from); ?></div>
                        <button class="cpt-upgrade-btn">&#8595; Upgrade</button>
                        <div class="cpt-sub-label">To</div>
                        <div class="cpt-promise-box to"><?php echo htmlspecialchars($cpt_to); ?></div>
                        <div class="cpt-sub-label">Career Motive</div>
                        <div>
                            <?php foreach ($cpt_motives as $motive): ?>
                            <span class="cpt-motive-pill"><?php echo htmlspecialchars($motive); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Column 2: Role Skills Layer -->
                    <div class="cpt-col">
                        <div class="cpt-label">Role Skills Layer</div>
                        <?php foreach ($cpt_skills as $skill): ?>
                        <div class="cpt-skill-item"><?php echo htmlspecialchars($skill); ?></div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Column 3: LinkedIn JD Titles -->
                    <div class="cpt-col">
                        <div class="cpt-label">LinkedIn JD Titles</div>
                        <?php foreach ($cpt_jd_titles as $title): ?>
                        <div class="cpt-jd-tag"><?php echo htmlspecialchars($title); ?></div>
                        <?php endforeach; ?>
                    </div>

                </div><!-- /cpt-cols -->

                <div class="cpt-quote">
                    &ldquo;<?php echo $cpt_quote; ?>&rdquo;
                </div>
            </div><!-- /cpt-right -->

        </div><!-- /cpt-card -->
    </div>
</section>
