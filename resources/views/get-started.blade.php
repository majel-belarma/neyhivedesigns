<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get Started – Neyhive Designs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        :root {
            --gold:#d4af37; --gold-2:#e2c766; --bg:#0b0b0b; --panel:#111; --field:#1a1a1a;
            --border:#444; --text:#fff; --muted:#bfbfbf; --danger:#ff6b6b;
        }
        * { box-sizing: border-box; }
        body { font-family: Arial, Helvetica, sans-serif; background: var(--bg); color: var(--text); margin: 0; }

        /* Top Nav */
        .topnav { position: sticky; top:0; z-index: 50; background:#0e0e0e; border-bottom:1px solid #1f1f1f; padding:12px 20px; }
        .topnav .wrap { max-width: 1080px; margin:0 auto; display:flex; align-items:center; justify-content:space-between; }
        .brand a { color: var(--gold); text-decoration:none; font-weight:800; letter-spacing:.4px; font-size: 1.05rem; }
        .navlinks a { color:#ddd; text-decoration:none; margin-left:18px; font-weight:600; }
        .navlinks a:hover { color:#fff; }

        /* Page Header */
        .page-head { text-align:center; padding:24px 20px 12px; }
        .page-head h1 { margin:0; color:var(--gold); font-size: 1.8rem; }

        /* Progress / Step indicator */
        .progress-wrap { max-width: 780px; margin: 6px auto 8px; color:#d8d8d8; font-size:.95rem; display:flex; align-items:center; justify-content:space-between; gap:10px; padding:0 6px; }
        .progress { flex:1; height:6px; background:#222; border-radius:999px; overflow:hidden; }
        .progress .bar { height:100%; width:0%; background:linear-gradient(180deg, var(--gold), var(--gold-2)); }

        /* Form shell */
        .shell { padding: 0 20px 32px; }
        form { max-width: 780px; margin: 0 auto; background: var(--panel); padding: 22px; border-radius: 14px; border: 1px solid rgba(212,175,55,0.35); }
        label { display: block; margin-top: 15px; font-weight: bold; color: var(--text); }
        input, select, textarea {
            width: 100%; padding: 11px 12px; margin-top: 6px; border-radius: 10px; border: 1px solid var(--border);
            background: var(--field); color: var(--text); font-family: inherit; font-size: 1rem;
        }
        textarea { min-height: 110px; resize: vertical; }
        ::placeholder { color:#cfcfcf; opacity: .9; font-family: inherit; }

        .hint, .inline-example { font-size:.9rem; color:#cfcfcf; margin-top:6px; }
        .inline-example { opacity:.95; }

        /* Buttons */
        button { margin-top: 18px; background: linear-gradient(180deg, var(--gold), var(--gold-2)); border: none; color: #111; font-weight: bold; padding: 12px 18px; border-radius: 10px; cursor: pointer; }
        button:hover { filter: brightness(1.05); }
        .btn-secondary { background: #202020; color:#f1f1f1; border: 1px solid #333; }
        .btn-secondary:hover { filter:none; background:#262626; }

        /* Steps */
        .step { display:none; }
        .step.active { display:block; }
        .step-buttons { display:flex; gap:12px; justify-content:space-between; margin-top: 16px; }

        /* Pain point cards */
        .card-grid { display:grid; grid-template-columns:repeat(auto-fill, minmax(180px,1fr)); gap:12px; margin-top:10px; }
        .card-toggle {
            border:1px solid var(--border); background:#151515; color:#fff; padding:14px; border-radius:12px;
            cursor:pointer; user-select:none; line-height:1.3; text-align:left; transition:transform .05s ease, border-color .2s ease, box-shadow .2s ease, background .2s ease;
            min-height:64px; display:flex; align-items:center; outline:none;
        }
        .card-toggle:hover { transform: translateY(-1px); }
        .card-toggle.selected { border-color: rgba(212,175,55,0.9); box-shadow: 0 0 0 2px rgba(212,175,55,0.25) inset; background: #1b1b12; }
        .card-toggle:focus-visible { box-shadow: 0 0 0 3px rgba(212,175,55,0.45); }
        .helper { font-size:.95rem; color:#cfcfcf; margin-top:6px; opacity:.9; }

        /* Error state */
        .field-error { border-color: rgba(255,107,107,.75) !important; box-shadow: 0 0 0 2px rgba(255,107,107,.15) inset; }
        .error-text { color: var(--danger); font-size: .9rem; margin-top: 6px; }

        /* Calendar */
        .iframe-wrap { height: 640px; width: 100%; border: 1px dashed rgba(212,175,55,.35); border-radius: 12px; overflow: hidden; margin-top: 10px; background: #0f0f0f; }

        /* Review (3 columns) — compact vertical padding, centered Edit, left labels */
        .review-table { width:100%; border-collapse:collapse; margin-top:10px; font-size: 1rem; }
        .review-table thead th { text-align:left; padding:4px 8px; background:#101010; border:1px solid #242424; color:#eee; font-weight:700; vertical-align: middle; }
        .review-table tbody td, .review-table tbody th {
            padding:4px 8px; background:#141414; border:1px solid #242424; color:#ddd; font-weight:500; vertical-align: middle;
        }
        .review-table tbody th { width: 34%; color:#eaeaea; font-weight:700; text-align:left; }
        .review-table tbody td.answer { width: 51%; }
        .review-table tbody td.edit-cell { width: 15%; text-align:center; }
        .review-table .edit-btn {
            background:none; border:1px solid rgba(212,175,55,.6); color:var(--gold);
            padding:6px 10px; border-radius:8px; cursor:pointer; font-weight:700; display:inline-flex; align-items:center; justify-content:center;
        }
        .review-table .edit-btn:hover { background:rgba(212,175,55,.1); }

        /* Better dropdown arrow spacing (Step 4) */
        select {
            appearance: none; -webkit-appearance: none; -moz-appearance: none;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='%23d4af37' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><polyline points='6 9 12 15 18 9'/></svg>");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 18px;
            padding-right: 48px;
        }

        .spacer { height: 16px; }
    </style>
</head>
<body>
    <!-- Top nav -->
    <div class="topnav">
        <div class="wrap">
            <div class="brand"><a href="{{ url('/') }}">Neyhive Designs</a></div>
            <nav class="navlinks">
                <a href="{{ url('/services') }}">Services</a>
                <a href="{{ url('/case-studies') }}">Case Studies</a>
                <a href="{{ url('/pricing') }}">Pricing</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </nav>
        </div>
    </div>

    <!-- Page header -->
    <div class="page-head"><h1>🐝 Get Started</h1></div>

    <!-- Step indicator + progress -->
    <div class="progress-wrap">
        <div id="stepIndicator">Step 1 of 6</div>
        <div class="progress" aria-hidden="true"><div class="bar" id="progressBar"></div></div>
    </div>

    <div class="shell">
        <form action="#" method="POST" id="multiStepForm" novalidate>
            @csrf

            @php
                $painPoints = [
                    'Hard to update / maintain',
                    'Loads slowly / poor performance',
                    'Low conversions / leads',
                    'Confusing navigation / UX',
                    'Outdated design / branding',
                    'Mobile issues / not responsive',
                    'SEO problems / low visibility',
                    'Content is outdated or thin',
                    'Tech bugs / broken features',
                    'Compliance / accessibility',
                ];
            @endphp

            <!-- STEP 1: Basic Info -->
            <div class="step active" data-step="1">
                <label>Full Name *</label>
                <input type="text" name="full_name" autocomplete="name" required>

                <label>Email Address *</label>
                <input type="email" name="email" id="emailField" autocomplete="email" required>
                <div class="error-text" id="emailError" style="display:none;">Please enter a valid email address.</div>

                <label>Business / Brand Name *</label>
                <input type="text" name="brand" required>

                <label>Current Website URL *</label>
                <input type="url" name="website" id="websiteField" placeholder="https://example.com" required>
                <div class="error-text" id="websiteError" style="display:none;">Please enter a valid URL (e.g., https://example.com).</div>

                <div class="step-buttons">
                    <span></span>
                    <button type="button" class="btn-next">Next</button>
                </div>
            </div>

            <!-- STEP 2: About Business -->
            <div class="step" data-step="2">
                <label>What services or products do you offer? *</label>
                <input type="text" name="services" required>
                <div class="inline-example">e.g., Telehealth primary care programs & chronic care management</div>

                <label>Who is your ideal client/patient/customer? *</label>
                <input type="text" name="ideal_client" required>
                <div class="inline-example">e.g., Busy professionals 30–55 seeking convenient, ongoing virtual care</div>

                <div class="step-buttons">
                    <button type="button" class="btn-secondary btn-prev">Previous</button>
                    <button type="button" class="btn-next">Next</button>
                </div>
            </div>

            <!-- STEP 3: Website Challenges -->
            <div class="step" data-step="3">
                <label>What’s your biggest frustration with your current website? *</label>
                <p class="helper">Select any that apply.</p>

                <div class="card-grid" id="painPointGrid" role="group" aria-label="Website pain points">
                    @foreach($painPoints as $text)
                        <button type="button" class="card-toggle" data-value="{{ $text }}" aria-pressed="false" tabindex="0">{{ $text }}</button>
                    @endforeach
                    <button type="button" class="card-toggle" data-value="Other" data-other="true" aria-pressed="false" tabindex="0">Other…</button>
                </div>

                <div id="painPointInputs"></div>

                <div id="otherWrapper" style="display:none; margin-top:12px;">
                    <label>Other pain point</label>
                    <input type="text" id="otherInput" placeholder="Briefly describe the other pain point">
                    <p class="hint">We’ll include this along with your selected pain points.</p>
                </div>

                <label style="margin-top:18px;">Add more context (optional)</label>
                <textarea name="frustration_details" placeholder="Tell us briefly what’s going wrong or what you want to improve…"></textarea>

                <div class="step-buttons">
                    <button type="button" class="btn-secondary btn-prev">Previous</button>
                    <button type="button" class="btn-next">Next</button>
                </div>
            </div>

            <!-- STEP 4: Project Scope (dynamic timeline) -->
            <div class="step" data-step="4">
                <label>Which package are you most interested in? *</label>
                <select name="package" id="packageSelect" required>
                    <option value="">Select one...</option>
                    <option>🐝 Hive Foundation (up to 5 pages)</option>
                    <option>🐝 Golden Hive (up to 12 pages)</option>
                    <option>🐝 Hive Growth Partnership (Retainer)</option>
                    <option>Not sure yet — help me decide</option>
                </select>

                <label>Desired timeline/launch date *</label>
                <select name="timeline" id="timelineSelect" required></select>

                <label>How did you hear about Neyhive Designs? *</label>
                <select name="referral" required>
                    <option value="">Select one...</option>
                    <option>Referral</option>
                    <option>Social Media</option>
                    <option>Google/Search</option>
                    <option>Other</option>
                </select>

                <div class="step-buttons">
                    <button type="button" class="btn-secondary btn-prev">Previous</button>
                    <button type="button" class="btn-next">Next</button>
                </div>
            </div>

            <!-- STEP 5: Book a Call (NOT required) -->
            <div class="step" data-step="5">
                <h2 style="margin:0 0 6px;">📅 Book a Call</h2>
                <p class="hint">Pick a time that works for you (optional, you can proceed to Review).</p>

                <div class="iframe-wrap">
                    <div class="calendly-inline-widget" data-url="https://calendly.com/neyhivedesigns/30min" style="min-width:320px;height:640px;"></div>
                </div>

                <div class="hint" id="calendlyStatus" style="margin-top:10px;">Booked call: <span id="calBooked">Not booked yet</span></div>

                <div class="step-buttons">
                    <button type="button" class="btn-secondary btn-prev">Previous</button>
                    <button type="button" class="btn-next" id="toReview">Review</button>
                </div>
            </div>

            <!-- STEP 6: Review & Submit -->
            <div class="step" data-step="6">
                <h2 style="margin:0 0 10px;">🧾 Review your details</h2>
                <table class="review-table" id="reviewTable">
                    <thead>
                        <tr>
                            <th>Label</th>
                            <th>Your answer</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody><!-- injected --></tbody>
                </table>
                <p class="hint">Confirm everything looks good. Click “Edit” to jump back to that section.</p>

                <div class="step-buttons">
                    <button type="button" class="btn-secondary btn-prev">Edit Previous</button>
                    <button type="submit">Submit Form</button>
                </div>
            </div>
        </form>

        <div class="spacer"></div>
    </div>

    <script src="https://assets.calendly.com/assets/external/widget.js" async></script>

    <script>
        // ---------- Utilities ----------
        const STORAGE_KEY = 'neyhive_get_started_v7';
        const formEl = document.getElementById('multiStepForm');
        const emailField = document.getElementById('emailField');
        const emailError = document.getElementById('emailError');
        const websiteField = document.getElementById('websiteField');
        const websiteError = document.getElementById('websiteError');

        const steps = Array.from(document.querySelectorAll(".step"));
        const stepIndicator = document.getElementById('stepIndicator');
        const progressBar = document.getElementById('progressBar');

        let currentStep = 0;

        // Calendly capture (optional)
        let calendlySelection = null; // {start_time, timezone, event_type}
        const calBookedEl = document.getElementById('calBooked');

        window.addEventListener('message', (e) => {
            const d = e.data;
            if (!d || !d.event) return;
            if (String(d.event).indexOf('calendly') !== 0 && String(d.event).indexOf('calendly.') !== 0) return;

            if (d.event === 'calendly.event_scheduled' || d.event === 'calendly.event_scheduled.v2') {
                const payload = d.payload || {};
                const eventObj = payload.event || payload.schedule || {};
                const invitee = payload.invitee || {};
                calendlySelection = {
                    start_time: eventObj.start_time || eventObj.start || null,
                    timezone: invitee.timezone || payload.timezone || null,
                    event_type: (payload.event_type && payload.event_type.name) || payload.eventType || '30 min Meeting'
                };
                updateBookedText();
                saveToStorage();
            }
        });

        function fmtCalendly(selection) {
            if (!selection || !selection.start_time) return 'Not booked yet';
            try {
                const dt = new Date(selection.start_time);
                const opts = { year:'numeric', month:'long', day:'numeric', hour:'numeric', minute:'2-digit' };
                const when = new Intl.DateTimeFormat(undefined, opts).format(dt);
                const tz = selection.timezone ? ` (${selection.timezone})` : '';
                return `${when}${tz} — ${selection.event_type || 'Meeting'}`;
            } catch(e) { return selection.start_time; }
        }
        function updateBookedText() { calBookedEl.textContent = fmtCalendly(calendlySelection); }

        const validators = {
            email: (val) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test((val || '').trim()),
            url: (val) => /^(https?:\/\/)([\w.-]+)(:[0-9]+)?(\/.*)?$/i.test((val || '').trim())
        };
        function setFieldError(input, errorEl, ok) {
            if (ok) { input.classList.remove('field-error'); if (errorEl) errorEl.style.display = 'none'; }
            else { input.classList.add('field-error'); if (errorEl) errorEl.style.display = 'block'; }
        }
        function validateStep(idx) {
            const step = steps[idx];
            if (step.contains(emailField)) {
                setFieldError(emailField, emailError, validators.email(emailField.value));
                setFieldError(websiteField, websiteError, validators.url(websiteField.value));
                if (!validators.email(emailField.value) || !validators.url(websiteField.value)) return false;
            }
            const required = step.querySelectorAll('[required]');
            for (const el of required) {
                if (!el.value || (el.tagName === 'SELECT' && el.value === '')) {
                    el.classList.add('field-error'); el.focus(); el.scrollIntoView({behavior:'smooth', block:'center'}); return false;
                } else { el.classList.remove('field-error'); }
            }
            if (step.querySelector('#painPointGrid')) {
                const count = step.querySelectorAll('.card-toggle.selected').length;
                if (count === 0) { alert('Please select at least one pain point.'); return false; }
            }
            return true;
        }

        function updateIndicators() {
            const total = steps.length; const human = currentStep + 1;
            stepIndicator.textContent = `Step ${human} of ${total}`;
            const pct = ((human - 1) / (total - 1)) * 100; progressBar.style.width = pct + '%';
        }
        function showStep(idx) {
            steps.forEach((s, i) => s.classList.toggle('active', i === idx));
            currentStep = idx; updateIndicators();
            const focusable = steps[idx].querySelector("input, select, textarea, button");
            if (focusable) focusable.focus({preventScroll:true});
            window.scrollTo({ top: 0, behavior: "smooth" });
        }
        function nextStep() { if (validateStep(currentStep) && currentStep < steps.length - 1) showStep(currentStep + 1); }
        function prevStep() { if (currentStep > 0) showStep(currentStep - 1); }

        document.addEventListener('click', (e) => {
            if (e.target.closest('.btn-next')) nextStep();
            if (e.target.closest('.btn-prev')) prevStep();
        });

        // Pain points
        const grid = document.getElementById('painPointGrid');
        const inputsContainer = document.getElementById('painPointInputs');
        const otherWrapper = document.getElementById('otherWrapper');
        const otherInput = document.getElementById('otherInput');

        function syncPainPointInputs() {
            inputsContainer.innerHTML = '';
            const selected = grid.querySelectorAll('.card-toggle.selected');
            selected.forEach(btn => {
                const val = btn.getAttribute('data-value');
                const input = document.createElement('input');
                input.type = 'hidden'; input.name = 'pain_points[]'; input.value = val;
                inputsContainer.appendChild(input);
            });
            const otherSelected = grid.querySelector('.card-toggle.selected[data-other="true"]');
            if (otherSelected && otherInput.value.trim()) {
                const otherVal = document.createElement('input');
                otherVal.type = 'hidden'; otherVal.name = 'pain_points_other'; otherVal.value = otherInput.value.trim();
                inputsContainer.appendChild(otherVal);
            }
            saveToStorage();
        }
        if (grid) {
            grid.addEventListener('click', (e) => {
                const btn = e.target.closest('.card-toggle'); if (!btn) return;
                btn.classList.toggle('selected');
                btn.setAttribute('aria-pressed', btn.classList.contains('selected') ? 'true' : 'false');
                if (btn.dataset.other === 'true') {
                    otherWrapper.style.display = btn.classList.contains('selected') ? 'block' : 'none';
                    if (!btn.classList.contains('selected')) otherInput.value = '';
                }
                syncPainPointInputs();
            });
            grid.querySelectorAll('.card-toggle').forEach((btn) => {
                btn.addEventListener('keydown', (ev) => { if (ev.key === 'Enter' || ev.key === ' ') { ev.preventDefault(); btn.click(); } });
            });
        }
        if (otherInput) otherInput.addEventListener('input', syncPainPointInputs);

        // Dynamic timelines
        const packageSelect = document.getElementById('packageSelect');
        const timelineSelect = document.getElementById('timelineSelect');
        const TIMELINES = {
            foundation: ['Within 1–3 weeks', 'Within 1–2 months', 'Flexible'],
            golden: ['Within 1–2 months', 'Within 3–4 months', 'Flexible'],
            growth: ['Ongoing (retainer)', 'Quarterly roadmap (3–6 months)', 'Flexible'],
            all: ['Within 1–3 weeks', 'Within 1–2 months', 'Within 3–4 months', 'Flexible', 'Ongoing (retainer)', 'Quarterly roadmap (3–6 months)']
        };
        function getPackageKey(val) {
            if (!val) return null;
            if (val.includes('Hive Foundation')) return 'foundation';
            if (val.includes('Golden Hive')) return 'golden';
            if (val.includes('Hive Growth Partnership')) return 'growth';
            if (val.includes('Not sure yet')) return 'all';
            return 'all';
        }
        function repopulateTimelines(pkgVal, keepCurrent=true) {
            const key = getPackageKey(pkgVal) || 'all';
            const options = TIMELINES[key];
            const current = keepCurrent ? timelineSelect.value : '';
            timelineSelect.innerHTML = '<option value="">Select one...</option>' + options.map(o => `<option ${o===current?'selected':''}>${o}</option>`).join('');
        }

        // Auto-save
        function getAllFormData() {
            const data = {};
            formEl.querySelectorAll('input, select, textarea').forEach(el => {
                if (el.name) {
                    if (el.name === 'pain_points[]') return;
                    if (el.type === 'checkbox' || el.type === 'radio') {
                        if (!data[el.name]) data[el.name] = [];
                        if (el.checked) data[el.name].push(el.value);
                    } else {
                        data[el.name] = el.value;
                    }
                }
            });
            const ppoints = Array.from(inputsContainer.querySelectorAll('input[name="pain_points[]"]')).map(i => i.value);
            if (ppoints.length) data['pain_points'] = ppoints;
            const ppOther = inputsContainer.querySelector('input[name="pain_points_other"]');
            if (ppOther) data['pain_points_other'] = ppOther.value;
            if (calendlySelection) data['calendly'] = calendlySelection;
            return data;
        }
        function saveToStorage() { localStorage.setItem(STORAGE_KEY, JSON.stringify(getAllFormData())); }
        function restoreFromStorage() {
            const raw = localStorage.getItem(STORAGE_KEY);
            if (!raw) { repopulateTimelines(packageSelect.value, false); updateBookedText(); return; }
            try {
                const data = JSON.parse(raw);
                Object.entries(data).forEach(([name, val]) => {
                    if (name === 'pain_points' && Array.isArray(val)) {
                        grid.querySelectorAll('.card-toggle').forEach(btn => {
                            const v = btn.getAttribute('data-value');
                            const selected = val.includes(v);
                            btn.classList.toggle('selected', selected);
                            btn.setAttribute('aria-pressed', selected ? 'true' : 'false');
                            if (btn.dataset.other === 'true') { otherWrapper.style.display = selected ? 'block' : 'none'; }
                        });
                    } else if (name === 'pain_points_other') {
                        if (typeof val === 'string') otherInput.value = val;
                    } else if (name === 'calendly') {
                        calendlySelection = val;
                    } else {
                        const control = formEl.querySelector(`[name="${name}"]`);
                        if (control) control.value = val;
                    }
                });
                repopulateTimelines(packageSelect.value, true);
                syncPainPointInputs();
                updateBookedText();
            } catch(e) { repopulateTimelines(packageSelect.value, false); updateBookedText(); }
        }
        formEl.addEventListener('input', saveToStorage);
        formEl.addEventListener('change', saveToStorage);
        packageSelect.addEventListener('change', () => { repopulateTimelines(packageSelect.value, false); });

        // Review builder
        const reviewBody = document.getElementById('reviewTable').querySelector('tbody');
        function row(label, value, editStep) {
            return `
                <tr>
                    <th>${label}</th>
                    <td class="answer">${value || '—'}</td>
                    <td class="edit-cell"><button type="button" class="edit-btn" data-jump="${editStep}">Edit</button></td>
                </tr>
            `;
        }
        function buildReview() {
            const data = getAllFormData();
            const painPoints = Array.isArray(data.pain_points) ? data.pain_points.join(', ') : '—';
            const painOther = data.pain_points_other ? ` (Other: ${data.pain_points_other})` : '';
            const bookedTxt = fmtCalendly(data.calendly);

            reviewBody.innerHTML = [
                row('Full Name', data.full_name, 1),
                row('Email', data.email, 1),
                row('Business / Brand', data.brand, 1),
                row('Website', data.website, 1),
                row('Services / Products', data.services, 2),
                row('Ideal Client', data.ideal_client, 2),
                row('Pain Points', painPoints + painOther, 3),
                row('Context', data.frustration_details, 3),
                row('Package', data.package, 4),
                row('Timeline', data.timeline, 4),
                row('Referral', data.referral, 4),
                row('Booked Call', bookedTxt, 5),
            ].join('');
        }
        document.getElementById('reviewTable').addEventListener('click', (e) => {
            const btn = e.target.closest('.edit-btn'); if (!btn) return;
            const step = parseInt(btn.getAttribute('data-jump'), 10);
            showStep(step - 1);
        });

        // Proceed to Review (no booking required)
        document.getElementById('toReview').addEventListener('click', (ev) => {
            ev.preventDefault();
            // Validate step (regular required fields)
            if (!validateStep(currentStep)) return;
            buildReview();
            showStep(5); // Step 6 index
        });

        formEl.addEventListener('submit', () => {
            const step3 = document.querySelector('[data-step="3"]');
            const count = step3.querySelectorAll('.card-toggle.selected').length;
            if (count === 0) { showStep(2); alert('Please select at least one pain point.'); return false; }
            saveToStorage();
            // localStorage.removeItem(STORAGE_KEY);
        });

        // Init
        restoreFromStorage();
        updateIndicators();
        if (!packageSelect.value) repopulateTimelines('Not sure yet — help me decide', false);
    </script>
</body>
</html>
