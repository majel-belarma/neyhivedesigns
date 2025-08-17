<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get Started – Neyhive Designs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        :root {
            --gold:#d4af37;
            --gold-2:#e2c766;
            --bg:#0b0b0b;
            --panel:#111;
            --field:#1a1a1a;
            --border:#444;
            --text:#fff;
            --muted:#bfbfbf;
            --danger:#ff6b6b;
        }
        * { box-sizing: border-box; }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg);
            color: var(--text);
            margin: 0;
        }

        /* Top Nav */
        .topnav {
            position: sticky; top:0; z-index: 50;
            background:#0e0e0e; border-bottom:1px solid #1f1f1f;
            padding:12px 20px;
        }
        .topnav .wrap {
            max-width: 1080px; margin:0 auto;
            display:flex; align-items:center; justify-content:space-between;
        }
        .brand a {
            color: var(--gold); text-decoration:none; font-weight:800; letter-spacing:.4px;
            font-size: 1.05rem;
        }
        .navlinks a {
            color:#ddd; text-decoration:none; margin-left:18px; font-weight:600;
        }
        .navlinks a:hover { color:#fff; }

        /* Page Header */
        .page-head {
            text-align:center; padding:24px 20px 12px;
        }
        .page-head h1 { margin:0; color:var(--gold); font-size: 1.8rem; }

        /* Progress */
        .progress-wrap {
            max-width: 780px; margin: 6px auto 8px; color:#d8d8d8; font-size:.95rem;
            display:flex; align-items:center; justify-content:space-between; gap:10px; padding:0 6px;
        }
        .progress { flex:1; height:6px; background:#222; border-radius:999px; overflow:hidden; }
        .progress .bar { height:100%; width:0%; background:linear-gradient(180deg, var(--gold), var(--gold-2)); }

        /* Form shell */
        .shell { padding: 0 20px 32px; }
        form {
            max-width: 780px; margin: 0 auto;
            background: var(--panel); padding: 22px;
            border-radius: 14px; border: 1px solid rgba(212,175,55,0.35);
        }
        label { display: block; margin-top: 15px; font-weight: bold; color: var(--text); }
        input, select, textarea {
            width: 100%; padding: 11px 12px; margin-top: 6px;
            border-radius: 10px; border: 1px solid var(--border);
            background: var(--field); color: var(--text);
        }
        textarea { min-height: 110px; resize: vertical; }
        .hint { font-size:.9rem; color:#cfcfcf; margin-top:6px; }

        button {
            margin-top: 18px;
            background: linear-gradient(180deg, var(--gold), var(--gold-2));
            border: none; color: #111; font-weight: bold;
            padding: 12px 18px; border-radius: 10px; cursor: pointer;
        }
        button:hover { filter: brightness(1.05); }
        .btn-secondary {
            background: #202020; color:#f1f1f1; border: 1px solid #333;
        }
        .btn-secondary:hover { filter:none; background:#262626; }

        /* Steps */
        .step { display:none; }
        .step.active { display:block; }
        .step-buttons { display:flex; gap:12px; justify-content:space-between; margin-top: 16px; }

        /* Pain point cards */
        .card-grid {
            display:grid; grid-template-columns:repeat(auto-fill, minmax(180px,1fr));
            gap:12px; margin-top:10px;
        }
        .card-toggle {
            border:1px solid var(--border); background:#151515; color:#fff;
            padding:14px; border-radius:12px; cursor:pointer; user-select:none;
            line-height:1.3; text-align:left; transition:transform .05s ease, border-color .2s ease, box-shadow .2s ease, background .2s ease;
            min-height:64px; display:flex; align-items:center; outline:none;
        }
        .card-toggle:hover { transform: translateY(-1px); }
        .card-toggle.selected {
            border-color: rgba(212,175,55,0.9);
            box-shadow: 0 0 0 2px rgba(212,175,55,0.25) inset;
            background: #1b1b12;
        }
        .card-toggle:focus-visible { box-shadow: 0 0 0 3px rgba(212,175,55,0.45); }
        .helper { font-size:.95rem; color:#cfcfcf; margin-top:6px; opacity:.9; }

        /* Error state */
        .field-error {
            border-color: rgba(255,107,107,.75) !important;
            box-shadow: 0 0 0 2px rgba(255,107,107,.15) inset;
        }
        .error-text {
            color: var(--danger); font-size: .9rem; margin-top: 6px;
        }

        /* Calendar iframe */
        .iframe-wrap {
            height: 640px; width: 100%;
            border: 1px dashed rgba(212,175,55,.35);
            border-radius: 12px; overflow: hidden; margin-top: 10px; background: #0f0f0f;
        }

        /* Review table */
        .review {
            width:100%; border-collapse:separate; border-spacing:0 8px; margin-top:6px;
        }
        .review th, .review td { text-align:left; vertical-align:top; padding:10px 12px; background:#141414; border:1px solid #242424; }
        .review th { width: 36%; color:#eaeaea; font-weight:700; }
        .review td { color:#ddd; }
        .review .row { border-radius:10px; overflow:hidden; }
        .review .edit {
            font-size:.9rem; color:var(--gold); text-decoration:underline; cursor:pointer; margin-left:8px;
        }

        /* Footer spacing */
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
    <div class="page-head">
        <h1>🐝 Get Started</h1>
    </div>

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

                <label>Who is your ideal client/patient/customer? *</label>
                <input type="text" name="ideal_client" required>

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

            <!-- STEP 4: Project Scope -->
            <div class="step" data-step="4">
                <label>Which package are you most interested in? *</label>
                <select name="package" required>
                    <option value="">Select one...</option>
                    <option>🐝 Hive Foundation (up to 5 pages)</option>
                    <option>🐝 Golden Hive (up to 12 pages)</option>
                    <option>🐝 Elite Hive (15+ pages)</option>
                    <option>Not sure yet — help me decide</option>
                </select>

                <label>Desired timeline/launch date *</label>
                <select name="timeline" required>
                    <option value="">Select one...</option>
                    <option>Within 1–2 months</option>
                    <option>Within 3–4 months</option>
                    <option>Flexible</option>
                </select>

                <label>Budget range *</label>
                <select name="budget" required>
                    <option value="">Select one...</option>
                    <option>$7,500 – $10,000</option>
                    <option>$12,000 – $18,000</option>
                    <option>$20,000+</option>
                    <option>Not sure yet</option>
                </select>

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

            <!-- STEP 5: Book a Call -->
            <div class="step" data-step="5">
                <h2 style="margin:0 0 6px;">📅 Book a Call</h2>
                <p class="hint">Pick a time that works for you:</p>
                <div class="iframe-wrap" role="region" aria-label="Booking calendar">
                    <iframe
                        src="https://calendly.com/your-link/30min"
                        width="100%" height="100%" frameborder="0" title="Calendly booking"
                        style="display:block;"></iframe>
                </div>
                <p class="hint">You can still proceed to review even if you don’t book right now— we’ll reach out.</p>

                <div class="step-buttons">
                    <button type="button" class="btn-secondary btn-prev">Previous</button>
                    <button type="button" class="btn-next" id="toReview">Review</button>
                </div>
            </div>

            <!-- STEP 6: Review & Submit -->
            <div class="step" data-step="6">
                <h2 style="margin:0 0 10px;">🧾 Review your details</h2>
                <table class="review" id="reviewTable" aria-describedby="reviewHelp"></table>
                <p class="hint" id="reviewHelp">Please confirm everything looks good. You can tap “Edit” to jump back to a section.</p>

                <div class="step-buttons">
                    <button type="button" class="btn-secondary btn-prev">Edit Previous</button>
                    <button type="submit">Submit Form</button>
                </div>
            </div>
        </form>

        <div class="spacer"></div>
    </div>

    <script>
        // ---------- Utilities ----------
        const STORAGE_KEY = 'neyhive_get_started_v1';
        const formEl = document.getElementById('multiStepForm');

        const emailField = document.getElementById('emailField');
        const emailError = document.getElementById('emailError');
        const websiteField = document.getElementById('websiteField');
        const websiteError = document.getElementById('websiteError');

        const steps = Array.from(document.querySelectorAll(".step"));
        const stepIndicator = document.getElementById('stepIndicator');
        const progressBar = document.getElementById('progressBar');

        let currentStep = 0; // 0-based, 6 steps total

        const validators = {
            email: (val) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val.trim()),
            url: (val) => /^(https?:\/\/)([\w.-]+)(:[0-9]+)?(\/.*)?$/i.test(val.trim())
        };

        function setFieldError(input, errorEl, ok) {
            if (ok) {
                input.classList.remove('field-error');
                if (errorEl) errorEl.style.display = 'none';
            } else {
                input.classList.add('field-error');
                if (errorEl) errorEl.style.display = 'block';
            }
        }

        function validateStep(idx) {
            const step = steps[idx];
            // Email + website live checks on their step
            if (step.contains(emailField)) {
                setFieldError(emailField, emailError, validators.email(emailField.value));
                setFieldError(websiteField, websiteError, validators.url(websiteField.value));
                if (!validators.email(emailField.value) || !validators.url(websiteField.value)) return false;
            }
            // Required fields in step
            const required = step.querySelectorAll('[required]');
            for (const el of required) {
                if (!el.value || (el.tagName === 'SELECT' && el.value === '')) {
                    el.classList.add('field-error');
                    el.focus();
                    el.scrollIntoView({behavior:'smooth', block:'center'});
                    return false;
                } else {
                    el.classList.remove('field-error');
                }
            }
            // Step 3 must have at least one pain point
            if (step.querySelector('#painPointGrid')) {
                const count = step.querySelectorAll('.card-toggle.selected').length;
                if (count === 0) {
                    alert('Please select at least one pain point.');
                    return false;
                }
            }
            return true;
        }

        function updateIndicators() {
            const total = steps.length;
            const human = currentStep + 1;
            stepIndicator.textContent = `Step ${human} of ${total}`;
            const pct = ((human - 1) / (total - 1)) * 100;
            progressBar.style.width = pct + '%';
        }

        function showStep(idx) {
            steps.forEach((s, i) => s.classList.toggle('active', i === idx));
            currentStep = idx;
            updateIndicators();
            // Focus first control for a11y
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

        // Live validation
        emailField.addEventListener('input', () => setFieldError(emailField, emailError, validators.email(emailField.value)));
        websiteField.addEventListener('input', () => setFieldError(websiteField, websiteError, validators.url(websiteField.value)));

        // ---------- Pain point multi-select ----------
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
            saveToStorage(); // keep LS up to date
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
            // keyboard toggle
            grid.querySelectorAll('.card-toggle').forEach((btn) => {
                btn.addEventListener('keydown', (ev) => {
                    if (ev.key === 'Enter' || ev.key === ' ') { ev.preventDefault(); btn.click(); }
                });
            });
        }
        if (otherInput) otherInput.addEventListener('input', syncPainPointInputs);

        // ---------- Auto-save (localStorage) ----------
        function getAllFormData() {
            const data = {};
            formEl.querySelectorAll('input, select, textarea').forEach(el => {
                if (el.name) {
                    if (el.name === 'pain_points[]') return; // handled via grid sync
                    if (el.type === 'checkbox' || el.type === 'radio') {
                        if (!data[el.name]) data[el.name] = [];
                        if (el.checked) data[el.name].push(el.value);
                    } else {
                        data[el.name] = el.value;
                    }
                }
            });

            // pain points from hidden inputs
            const ppoints = Array.from(inputsContainer.querySelectorAll('input[name="pain_points[]"]')).map(i => i.value);
            if (ppoints.length) data['pain_points'] = ppoints;
            const ppOther = inputsContainer.querySelector('input[name="pain_points_other"]');
            if (ppOther) data['pain_points_other'] = ppOther.value;

            return data;
        }

        function saveToStorage() {
            const data = getAllFormData();
            localStorage.setItem(STORAGE_KEY, JSON.stringify(data));
        }

        function restoreFromStorage() {
            const raw = localStorage.getItem(STORAGE_KEY);
            if (!raw) return;
            try {
                const data = JSON.parse(raw);
                Object.entries(data).forEach(([name, val]) => {
                    if (name === 'pain_points' && Array.isArray(val)) {
                        // set card selections
                        grid.querySelectorAll('.card-toggle').forEach(btn => {
                            const v = btn.getAttribute('data-value');
                            const selected = val.includes(v);
                            btn.classList.toggle('selected', selected);
                            btn.setAttribute('aria-pressed', selected ? 'true' : 'false');
                            if (btn.dataset.other === 'true') {
                                otherWrapper.style.display = selected ? 'block' : 'none';
                            }
                        });
                    } else if (name === 'pain_points_other') {
                        if (typeof val === 'string') otherInput.value = val;
                    } else {
                        const control = formEl.querySelector(`[name="${name}"]`);
                        if (control) control.value = val;
                    }
                });
                syncPainPointInputs(); // rebuild hidden inputs
            } catch(e) { /* ignore */ }
        }

        // Save on any change
        formEl.addEventListener('input', saveToStorage);
        formEl.addEventListener('change', saveToStorage);

        // ---------- Review builder ----------
        const reviewTable = document.getElementById('reviewTable');
        function buildReview() {
            const data = getAllFormData();
            const rows = [
                ['Full Name', data.full_name || '—', 0],
                ['Email', data.email || '—', 0],
                ['Business / Brand', data.brand || '—', 0],
                ['Website', data.website || '—', 0],

                ['Services / Products', data.services || '—', 1],
                ['Ideal Client', data.ideal_client || '—', 1],

                ['Pain Points', (Array.isArray(data.pain_points) ? data.pain_points.join(', ') : '—') + (data.pain_points_other ? ` (Other: ${data.pain_points_other})` : ''), 2],
                ['Context', data.frustration_details || '—', 2],

                ['Package', data.package || '—', 3],
                ['Timeline', data.timeline || '—', 3],
                ['Budget', data.budget || '—', 3],
                ['Referral', data.referral || '—', 3],
            ];

            const sectionToStep = {0:1,1:2,2:3,3:4};

            reviewTable.innerHTML = rows.map(([label, value, section]) => `
                <tr class="row">
                    <th>${label}</th>
                    <td>
                        ${value}
                        <span class="edit" data-jump="${sectionToStep[section]}">Edit</span>
                    </td>
                </tr>
            `).join('');
        }

        reviewTable.addEventListener('click', (e) => {
            const link = e.target.closest('.edit');
            if (!link) return;
            const step = parseInt(link.getAttribute('data-jump'), 10);
            showStep(step - 1); // convert to 0-based
        });

        // Hook "Review" button to build summary first
        document.getElementById('toReview').addEventListener('click', () => {
            if (!validateStep(currentStep)) return;
            buildReview();
            showStep(5); // Step 6 (0-based index)
        });

        // On submit: final sync & (optionally) localStorage cleanup
        formEl.addEventListener('submit', () => {
            syncPainPointInputs();
            saveToStorage();
            // localStorage.removeItem(STORAGE_KEY); // uncomment if you want to clear after submit
        });

        // Init
        restoreFromStorage();
        updateIndicators();
    </script>
</body>
</html>
