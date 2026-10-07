<?php
/* ═══════════════════════════════════════════════════════════════
   Deadline alert — included once from footer-new.php.
   To change the offer: edit ONLY $raConfig below.
   Desktop: arrow ribbon (bottom-center). Mobile/tablet: full card first,
   folds into a bottom-left pill after 5s / scroll / outside tap.
   Apply opens the shared #eqModal (popup-enquiry-form.php).
═══════════════════════════════════════════════════════════════ */

if (defined('RA_ALERT_INCLUDED')) return;
define('RA_ALERT_INCLUDED', true);

$raConfig = [
    'enabled'  => true,                          // false = hide everywhere
    'deadline' => '2026-10-01T23:59:59+05:30',   // IST; alert disappears after this
    'intake'   => 'Sept 2026 intake',
    'phone'    => '9999999999',
];

// Pages where the alert must never appear (payment, thank-you, error, grievance).
$raSkip = [
    '404.php', 'thankyou.php', 'ai-thankyou.php', 'DownloadBrochureLink.php', 'OnlineGrievances.php',
    'learner-type-payment.php', 'new-admission-form-payment.php',
    'OtherFeesPayment03.php', 'OtherFeesPaymentHDFC.php', 'OtherFeesPaymenticici.php',
    'ccavResponseHandler.php', 'ccavResponseHandler01.php', 'ccavResponseHandlerN0.php', 'new-erp-ResponseHandler.php',
];

try {
    $raActive = $raConfig['enabled'] && new DateTime() < new DateTime($raConfig['deadline']);
} catch (Exception $e) {
    $raActive = false;           // malformed deadline: hide the alert instead of breaking the page
}
$raPage = basename(isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '');
if (!$raActive || in_array($raPage, $raSkip, true)) return;

$raE = function ($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); };
?>
<style>
.ra-wrap {
    position: fixed; left: 50%; bottom: 22px; z-index: 995;
    width: min(920px, calc(100% - 220px));
    transform: translate(-50%, 160%); opacity: 0;
    transition: transform .7s cubic-bezier(.34,1.56,.64,1), opacity .35s ease;
    filter: drop-shadow(0 14px 28px rgba(17,24,39,.22));
}
.ra-wrap.ra-show.ra-suspend { opacity: 0; pointer-events: none; }
.ra-wrap.ra-show { transform: translate(-50%, 0); opacity: 1; }
.ra-wrap.ra-hide { transform: translate(-50%, 160%); opacity: 0; transition: transform .45s cubic-bezier(.55,0,1,.45), opacity .45s ease; }
.ra-wrap.ra-off { display: none; }

.ra-ribbon {
    position: relative; overflow: hidden; display: flex; align-items: center; gap: 16px;
    padding: 12px 52px 12px 20px; border-radius: 14px 0 0 14px;
    clip-path: polygon(0 0, calc(100% - 26px) 0, 100% 50%, calc(100% - 26px) 100%, 0 100%);
    background: var(--white); color: var(--text-dark);
    transition: background .4s ease, color .4s ease;
}
.ra-ribbon::after, .ra-mini::after {
    content: ""; position: absolute; top: 0; bottom: 0; left: 0; width: 35%; pointer-events: none;
    background: linear-gradient(100deg, transparent, rgba(255,255,255,.55), transparent);
    transform: translateX(-130%);
    animation: raShine 6s ease-in-out 3s infinite;
}
@keyframes raShine { 0% { transform: translateX(-130%); } 20%, 100% { transform: translateX(400%); } }

.ra-live { position: relative; width: 10px; height: 10px; border-radius: 50%; background: var(--primary-orange); flex-shrink: 0; }
.ra-live::after {
    content: ""; position: absolute; inset: 0; border-radius: 50%; background: inherit;
    animation: raPing 1.6s cubic-bezier(0,0,.2,1) infinite;
}
@keyframes raPing { 0% { transform: scale(1); opacity: .75; } 100% { transform: scale(2.8); opacity: 0; } }

.ra-chip {
    font-size: var(--fz-mini); font-weight: 700; letter-spacing: .08em; text-transform: uppercase; white-space: nowrap;
    padding: 5px 12px; border-radius: 999px; background: #FFEBE2; color: #c2410c; flex-shrink: 0;
}
.ra-text { min-width: 0; }
.ra-title { margin: 0; font-size: var(--fz-medium); font-weight: 700; line-height: 1.25; }
.ra-sub { margin: 2px 0 0; font-size: var(--fz-xsmall); opacity: .75; }

.ra-timer { display: flex; align-items: center; gap: 4px; margin-left: auto; flex-shrink: 0; }
.ra-unit {
    display: inline-flex; align-items: baseline; gap: 2px; overflow: hidden;
    padding: 4px 8px; border-radius: 8px; background: rgba(0,0,0,.14);
    font-variant-numeric: tabular-nums;
}
.ra-unit b { display: inline-block; font-size: 18px; font-weight: 800; line-height: 1.1; }
.ra-unit small { font-size: var(--fz-tiny); font-weight: 600; opacity: .8; }
.ra-unit b.ra-roll { animation: raRoll .45s cubic-bezier(.16,1,.3,1); }
@keyframes raRoll { from { transform: translateY(70%); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
.ra-sep { font-weight: 800; opacity: .6; }

.ra-actions { display: flex; align-items: center; gap: 10px; flex-shrink: 0; }
.ra-btn {
    display: inline-flex; align-items: center; gap: 8px; padding: 9px 18px; border-radius: 999px;
    font-size: var(--fz-normal); font-weight: 700; text-decoration: none; white-space: nowrap;
    background: var(--primary-orange); color: var(--white);
    border: none; cursor: pointer; font-family: inherit;
    transition: transform .15s ease, background .15s ease;
}
.ra-btn:hover { transform: translateY(-2px); background: #ea580c; color: var(--white); }
.ra-btn:active { transform: translateY(0); }
.ra-btn i { transition: transform .2s ease; }
.ra-btn:hover i { transform: translateX(3px); }
.ra-call {
    display: inline-flex; align-items: center; gap: 7px; font-size: var(--fz-small); font-weight: 600;
    color: inherit; text-decoration: none; white-space: nowrap;
}
.ra-call i {
    width: 30px; height: 30px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;
    font-size: 12px; background: rgba(0,0,0,.08);
}
.ra-call:hover { color: inherit; text-decoration: underline; }

.ra-close {
    position: absolute; top: -10px; right: 14px; width: 26px; height: 26px; border-radius: 50%;
    border: none; background: var(--black); color: var(--white); font-size: 12px; line-height: 1;
    display: flex; align-items: center; justify-content: center; cursor: pointer;
    transition: transform .2s ease;
}
.ra-close:hover { transform: rotate(90deg); }

/* state visibility */
.ra-wrap [data-show] { display: none; }
.ra-wrap[data-state="open"]  [data-show~="open"],
.ra-wrap[data-state="count"] [data-show~="count"],
.ra-wrap[data-state="last"]  [data-show~="last"] { display: revert; }
.ra-wrap[data-state="open"] .ra-timer { display: none; }
.ra-wrap[data-state="last"] .ra-unit[data-u="d"],
.ra-wrap[data-state="last"] .ra-sep[data-u="d"] { display: none; }

/* state: count — orange */
.ra-wrap[data-state="count"] .ra-ribbon { background: linear-gradient(90deg, #f97316, #fb923c); color: var(--white); }
.ra-wrap[data-state="count"] .ra-chip { background: rgba(255,255,255,.22); color: var(--white); }
.ra-wrap[data-state="count"] .ra-live { background: var(--white); }
.ra-wrap[data-state="count"] .ra-btn,
.ra-wrap[data-state="last"] .ra-btn { background: var(--white); color: #c2410c; }
.ra-wrap[data-state="count"] .ra-btn:hover,
.ra-wrap[data-state="last"] .ra-btn:hover { background: #fff7ed; color: #c2410c; }
.ra-wrap[data-state="count"] .ra-call i,
.ra-wrap[data-state="last"] .ra-call i { background: rgba(255,255,255,.2); }

/* state: last — deep orange + glow pulse (desktop only) + faster shine */
.ra-wrap[data-state="last"] { animation: raGlow 2.2s ease-in-out infinite; }
.ra-wrap[data-state="last"] .ra-ribbon { background: linear-gradient(90deg, #c2410c, #ea580c); color: var(--white); }
.ra-wrap[data-state="last"] .ra-ribbon::after { animation-duration: 3s; animation-delay: 1s; }
.ra-wrap[data-state="last"] .ra-chip { background: var(--white); color: #c2410c; }
.ra-wrap[data-state="last"] .ra-live { background: #fde68a; }
@keyframes raGlow {
    0%, 100% { filter: drop-shadow(0 14px 28px rgba(17,24,39,.22)); }
    50% { filter: drop-shadow(0 10px 26px rgba(234,88,12,.55)); }
}

.ra-mini, .ra-ic-down { display: none; }

@media (min-width: 992px) and (max-width: 1199px) {
    .ra-call span { display: none; }
}

@media (max-width: 991px) {
    /* collapsed: pill bottom-left, right corner left free for the chatbot bubble */
    .ra-wrap {
        --ra-chat-space: 96px;
        left: 12px; right: auto; bottom: calc(14px + env(safe-area-inset-bottom));
        width: auto; max-width: calc(100% - 12px - var(--ra-chat-space));
        transform: translateY(180%);
    }
    .ra-wrap.ra-show { transform: translateY(0); }
    .ra-wrap.ra-hide { transform: translateY(180%); }
    .ra-wrap[data-state="last"] { animation: none; }
    .ra-wrap:not(.ra-expanded) .ra-ribbon,
    .ra-wrap:not(.ra-expanded) .ra-close { display: none; }

    .ra-mini {
        display: flex; align-items: center; gap: 6px; padding: 6px 6px 6px 14px;
        border-radius: 999px; background: var(--white); color: var(--text-dark); position: relative; overflow: hidden;
    }
    .ra-mini-open {
        display: flex; align-items: center; gap: 9px; min-width: 0; padding: 0; border: none; background: none; color: inherit;
        text-align: left; white-space: nowrap;
    }
    .ra-mini-txt { display: flex; flex-direction: column; min-width: 0; line-height: 1.15; }
    .ra-mini-label {
        font-size: var(--fz-tiny); font-weight: 700; letter-spacing: .07em; text-transform: uppercase; opacity: .85;
        overflow: hidden; text-overflow: ellipsis;
    }
    .ra-mini-time {
        font-size: var(--fz-normal); font-weight: 800; font-variant-numeric: tabular-nums;
        overflow: hidden; text-overflow: ellipsis;
    }
    .ra-wrap:not(.ra-expanded) .ra-mini { animation: raPop .45s cubic-bezier(.34,1.56,.64,1); }
    @keyframes raPop { from { transform: scale(.7); opacity: 0; } to { transform: none; opacity: 1; } }
    .ra-mini-apply {
        display: inline-flex; align-items: center; gap: 6px; flex-shrink: 0; padding: 7px 13px; border-radius: 999px;
        font-size: var(--fz-small); font-weight: 700; text-decoration: none;
        background: var(--primary-orange); color: var(--white);
        border: none; cursor: pointer; font-family: inherit;
    }
    .ra-mini-apply:hover { color: var(--white); }
    .ra-mini-close {
        width: 26px; height: 26px; flex-shrink: 0; border: none; border-radius: 50%; font-size: 11px;
        background: rgba(0,0,0,.08); color: inherit; display: flex; align-items: center; justify-content: center;
    }
    .ra-wrap[data-state="count"] .ra-mini { background: linear-gradient(90deg, #f97316, #fb923c); color: var(--white); }
    .ra-wrap[data-state="last"] .ra-mini  { background: linear-gradient(90deg, #c2410c, #ea580c); color: var(--white); }
    .ra-wrap[data-state="count"] .ra-mini-apply,
    .ra-wrap[data-state="last"] .ra-mini-apply { background: var(--white); color: #c2410c; }
    .ra-wrap[data-state="count"] .ra-mini-close,
    .ra-wrap[data-state="last"] .ra-mini-close { background: rgba(255,255,255,.22); }

    /* expanded: floating card above the chatbot bubble; chevron folds it back to the pill */
    .ra-wrap.ra-expanded {
        left: 12px; right: 12px; bottom: calc(96px + env(safe-area-inset-bottom));
        width: auto; max-width: 560px; margin: 0 auto;
    }
    .ra-wrap.ra-expanded .ra-mini { display: none; }
    .ra-wrap.ra-expanded .ra-ribbon { animation: raUp .4s cubic-bezier(.16,1,.3,1); }
    @keyframes raUp { from { transform: translateY(30%); opacity: 0; } to { transform: none; opacity: 1; } }
    .ra-wrap.ra-collapsing .ra-ribbon {
        transform-origin: left bottom;
        animation: raShrink .32s cubic-bezier(.55,0,1,.45) forwards;
    }
    @keyframes raShrink { to { transform: scale(.3) translateY(60%); opacity: 0; } }
    .ra-ic-x { display: none; }
    .ra-ic-down { display: inline-block; }
    .ra-ribbon {
        clip-path: none; border-radius: 18px; flex-wrap: wrap; gap: 8px 10px;
        padding: 14px 16px;
    }
    .ra-text { flex: 1 1 100%; order: 3; }
    .ra-timer { order: 4; margin-left: 0; }
    .ra-actions { order: 5; flex: 1 1 100%; }
    .ra-btn { flex: 1; justify-content: center; }
    .ra-call span { display: none; }
    .ra-call i { width: 40px; height: 40px; font-size: 15px; }
    .ra-close { top: 12px; right: 12px; background: rgba(0,0,0,.18); }
    .ra-wrap[data-state="open"] .ra-close { background: rgba(0,0,0,.08); color: var(--text-dark); }
}

/* tablet: expanded card bottom-left on the chatbot's baseline, leaving room for its greeting popup */
@media (min-width: 769px) and (max-width: 991px) {
    .ra-wrap.ra-expanded {
        left: 16px; right: auto; bottom: calc(22px + env(safe-area-inset-bottom));
        width: min(420px, calc(100% - 376px)); max-width: none; margin: 0;
    }
}

@media (prefers-reduced-motion: reduce) {
    .ra-wrap, .ra-wrap.ra-hide { transition: opacity .3s ease; }
    .ra-ribbon::after, .ra-mini::after, .ra-live::after, .ra-wrap[data-state="last"],
    .ra-wrap.ra-expanded .ra-ribbon, .ra-wrap.ra-collapsing .ra-ribbon,
    .ra-wrap:not(.ra-expanded) .ra-mini, .ra-unit b.ra-roll { animation: none; }
}
</style>

<div class="ra-wrap ra-off" id="raAlert" data-state="count" data-deadline="<?php echo $raE($raConfig['deadline']); ?>" role="region" aria-label="Admission deadline">
    <div class="ra-mini">
        <button type="button" class="ra-mini-open" aria-label="Show admission details">
            <span class="ra-live" aria-hidden="true"></span>
            <span class="ra-mini-txt">
                <span class="ra-mini-label"></span>
                <span class="ra-mini-time"></span>
            </span>
        </button>
        <button type="button" class="ra-mini-apply" data-bs-toggle="modal" data-bs-target="#eqModal">Apply <i class="fa-solid fa-arrow-right"></i></button>
        <button type="button" class="ra-mini-close" aria-label="Dismiss alert"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="ra-ribbon">
        <span class="ra-live" aria-hidden="true"></span>
        <span class="ra-chip">
            <span data-show="open"><?php echo $raE($raConfig['intake']); ?></span>
            <span data-show="count">Final Batch</span>
            <span data-show="last">Last Day</span>
        </span>
        <div class="ra-text">
            <p class="ra-title">
                <span data-show="open">Admissions are open</span>
                <span data-show="count">Admissions close in</span>
                <span data-show="last">Last day! Closes today at <span class="ra-time"></span></span>
            </p>
            <p class="ra-sub">
                <span data-show="open">Apply before <span class="ra-date"></span></span>
                <span data-show="count last"><?php echo $raE($raConfig['intake']); ?> &middot; Limited seats</span>
            </p>
        </div>
        <div class="ra-timer" aria-hidden="true">
            <span class="ra-unit" data-u="d"><b>00</b><small>d</small></span><span class="ra-sep" data-u="d">:</span>
            <span class="ra-unit" data-u="h"><b>00</b><small>h</small></span><span class="ra-sep">:</span>
            <span class="ra-unit" data-u="m"><b>00</b><small>m</small></span><span class="ra-sep">:</span>
            <span class="ra-unit" data-u="s"><b>00</b><small>s</small></span>
        </div>
        <div class="ra-actions">
            <button type="button" class="ra-btn" data-bs-toggle="modal" data-bs-target="#eqModal">Apply Now <i class="fa-solid fa-arrow-right"></i></button>
            <a class="ra-call" href="tel:+91<?php echo $raE($raConfig['phone']); ?>" aria-label="Call <?php echo $raE($raConfig['phone']); ?>">
                <i class="fa-solid fa-phone"></i><span><?php echo $raE($raConfig['phone']); ?></span>
            </a>
        </div>
    </div>
    <button type="button" class="ra-close" aria-label="Dismiss alert">
        <i class="fa-solid fa-xmark ra-ic-x"></i><i class="fa-solid fa-chevron-down ra-ic-down"></i>
    </button>
</div>

<script>
(function () {
    const el = document.getElementById('raAlert');
    if (!el) return;
    const KEY = 'raDismissedAt';
    const DAY = 864e5;
    let deadline = new Date(el.dataset.deadline).getTime();
    let timer = null, shortDate = '';

    const store = {
        get() { try { return +localStorage.getItem(KEY) || 0; } catch (e) { return 0; } },
        set(v) { try { v ? localStorage.setItem(KEY, v) : localStorage.removeItem(KEY); } catch (e) {} }
    };
    const pad = (n) => String(n).padStart(2, '0');
    const isMobile = () => window.matchMedia('(max-width: 991px)').matches;

    function setUnit(u, val) {
        const b = el.querySelector('.ra-unit[data-u="' + u + '"] b');
        if (b.textContent === val) return;
        b.textContent = val;
        b.classList.remove('ra-roll'); void b.offsetWidth; b.classList.add('ra-roll');
    }

    function stateFor(left) {
        if (left <= 0) return 'closed';
        if (new Date(deadline).toDateString() === new Date().toDateString()) return 'last';
        return left <= 3 * DAY ? 'count' : 'open';
    }

    function tick() {
        const left = deadline - Date.now();
        const state = stateFor(left);
        if (state === 'closed') { hide(false); return; }
        el.dataset.state = state;
        const s = Math.floor(left / 1000);
        const d = Math.floor(s / 86400), h = Math.floor(s % 86400 / 3600), m = Math.floor(s % 3600 / 60), sec = s % 60;
        setUnit('d', pad(d)); setUnit('h', pad(h)); setUnit('m', pad(m)); setUnit('s', pad(sec));
        const mini = {
            open:  ['Admissions open',     'Apply by ' + shortDate],
            count: ['Admissions close in', pad(d) + 'd ' + pad(h) + 'h ' + pad(m) + 'm'],
            last:  ['Last day to apply',   pad(h) + ':' + pad(m) + ':' + pad(sec)]
        }[state];
        el.querySelector('.ra-mini-label').textContent = mini[0];
        el.querySelector('.ra-mini-time').textContent = mini[1];
    }

    function syncBodyPad() {
        const visible = isMobile() && el.classList.contains('ra-show');
        const space = el.offsetHeight + parseFloat(getComputedStyle(el).bottom) + 12;
        document.body.style.paddingBottom = visible ? space + 'px' : '';
    }

    function setExpanded(on) {
        if (!on) disarmCollapse();
        el.classList.toggle('ra-expanded', on);
        el.querySelector('.ra-mini-open').setAttribute('aria-expanded', on);
        syncBodyPad();
    }

    /* Mobile/tablet: full card on the first page of a visit, then it folds into the pill
       after 5s, on scroll, or on a tap outside. A tap inside cancels the timer. */
    const SKEY = 'raFullShown';
    const session = {
        seen() { try { return sessionStorage.getItem(SKEY) === '1'; } catch (e) { return false; } },
        mark() { try { sessionStorage.setItem(SKEY, '1'); } catch (e) {} }
    };
    let autoTimer = null, startY = 0;
    const onScrollCollapse = () => { if (Math.abs(window.scrollY - startY) > 60) collapse(); };
    const onOutside = (e) => { if (el.contains(e.target)) clearTimeout(autoTimer); else collapse(); };
    function armCollapse(withTimer) {
        disarmCollapse();
        startY = window.scrollY;
        if (withTimer) autoTimer = setTimeout(collapse, 5000);
        window.addEventListener('scroll', onScrollCollapse, { passive: true });
        document.addEventListener('pointerdown', onOutside, true);
    }
    function disarmCollapse() {
        clearTimeout(autoTimer);
        window.removeEventListener('scroll', onScrollCollapse);
        document.removeEventListener('pointerdown', onOutside, true);
    }
    function collapse() {
        if (!el.classList.contains('ra-expanded') || el.classList.contains('ra-collapsing')) return;
        disarmCollapse();
        el.classList.add('ra-collapsing');
        setTimeout(() => { el.classList.remove('ra-collapsing'); setExpanded(false); }, 320);
    }

    /* Hide while the mobile menu, a mega dropdown, or any Bootstrap modal is open. */
    const syncSuspend = () => el.classList.toggle('ra-suspend',
        !!document.querySelector('.hamburger.open, #mobileMenu.open, .mega-dd.is-open, body.modal-open'));
    const menuObserver = new MutationObserver(syncSuspend);
    [...document.querySelectorAll('.hamburger, #mobileMenu, .mega-dd'), document.body]
        .forEach(m => menuObserver.observe(m, { attributes: true, attributeFilter: ['class'] }));

    function show(forceFull) {
        if (stateFor(deadline - Date.now()) === 'closed') { hide(false); return; }
        const end = new Date(deadline);
        el.querySelector('.ra-date').textContent =
            end.toLocaleDateString('en-IN', { day: 'numeric', month: 'short', year: 'numeric' });
        shortDate = end.toLocaleDateString('en-IN', { day: 'numeric', month: 'short' });
        el.querySelector('.ra-time').textContent =
            end.toLocaleTimeString('en-IN', { hour: 'numeric', minute: '2-digit', hour12: true }).toUpperCase();
        el.classList.remove('ra-off', 'ra-hide', 'ra-expanded', 'ra-collapsing');
        disarmCollapse();
        const startFull = isMobile() && (forceFull === true || !session.seen());
        if (startFull) { el.classList.add('ra-expanded'); session.mark(); }
        tick();
        clearInterval(timer);
        timer = setInterval(tick, 1000);
        requestAnimationFrame(() => {
            el.classList.add('ra-show'); syncBodyPad();
            if (startFull) armCollapse(true);
        });
    }

    function hide(userDismissed) {
        clearInterval(timer);
        disarmCollapse();
        el.classList.remove('ra-show');
        el.classList.add('ra-hide');
        if (userDismissed) store.set(Date.now());
        setTimeout(() => { el.classList.add('ra-off'); syncBodyPad(); }, 450);
    }

    el.querySelector('.ra-close').addEventListener('click', () => {
        if (isMobile() && el.classList.contains('ra-expanded')) collapse();
        else hide(true);
    });
    el.querySelector('.ra-mini-open').addEventListener('click', () => {
        setExpanded(true); armCollapse(false);
    });
    el.querySelector('.ra-mini-close').addEventListener('click', () => hide(true));
    window.addEventListener('resize', syncBodyPad);

    if (Date.now() - store.get() >= DAY && stateFor(deadline - Date.now()) !== 'closed') setTimeout(show, 2500);
})();
</script>
