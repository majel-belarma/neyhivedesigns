<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Neyhive Designs</title>
  <style>
    :root{
      --gold:#d4af37;
      --gold-2:#e2c766;
      --black:#0b0b0b;
      --gray:#c7c7c7;
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";
      background: radial-gradient(1200px 600px at 70% -10%, rgba(212,175,55,0.15), transparent 60%), var(--black);
      color:#fff;
      line-height:1.6;
    }
    a{color:inherit;text-decoration:none}
    .container{max-width:1100px;margin:0 auto;padding:28px 20px 60px}

    /* Hero */
    .hero{
      margin-top:28px;
      border:1px solid rgba(212,175,55,0.25);
      background:linear-gradient(180deg, rgba(212,175,55,0.08), rgba(212,175,55,0.02)), #0e0e0e;
      border-radius:20px;
      padding:40px 28px;
      position:relative;
      overflow:hidden;
      box-shadow: 0 10px 30px rgba(212,175,55,0.08);
    }
    .brand{display:inline-flex;gap:10px;align-items:center;color:var(--gold);font-weight:700;letter-spacing:.08em;text-transform:uppercase;font-size:.9rem}
    .hero h1{margin:14px 0 10px;font-size: clamp(28px, 5vw, 44px);line-height:1.15}
    .hero p{margin:0;color:var(--gray);max-width:60ch}

    /* Divider */
    .divider{
      height:1px;
      background:linear-gradient(to right, transparent, rgba(212,175,55,0.45), transparent);
      margin:36px 0 26px;
      border:0;
    }

    /* Pain Points section */
    .problem{
      border:1px solid rgba(212,175,55,.28);
      background:linear-gradient(180deg, rgba(212,175,55,.08), rgba(212,175,55,.02)), #0e0e0e;
      border-radius:20px;
      padding:26px;
      text-align:center;
    }
    .problem h2{
      margin:0 0 8px;
      font-size:clamp(22px,4.4vw,32px);
      line-height:1.2;
    }
    .problem .lead{
      color:#d9d9d9;
      max-width:70ch;
      margin:0 auto;
    }
    .points{
      display:grid;
      grid-template-columns:repeat(2,1fr);
      gap:14px;
      margin-top:18px;
      text-align:left;
    }
    @media (max-width:720px){ .points{grid-template-columns:1fr} }
    .point{
      display:flex;
      gap:12px;
      align-items:flex-start;
      background:#0f0f0f;
      border:1px solid rgba(212,175,55,.22);
      border-radius:14px;
      padding:14px;
    }
    .point .emo{font-size:1.2rem;line-height:1}
    .point .tt{font-weight:700;color:#fff}
    .point p{margin:2px 0 0;color:#cfcfcf}

    /* Cards */
    .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    @media (max-width:900px){ .grid{grid-template-columns:1fr 1fr} }
    @media (max-width:640px){ .grid{grid-template-columns:1fr} }
    .card{background:#0f0f0f;border:1px solid rgba(212,175,55,0.25);border-radius:18px;padding:22px;display:flex;flex-direction:column;gap:14px;transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease}
    .card:hover{transform: translateY(-4px);box-shadow:0 16px 40px rgba(212,175,55,0.10);border-color:rgba(212,175,55,0.5)}
    .card h3{margin:0;font-size:1.25rem;letter-spacing:.02em}
    .muted{color:#bfbfbf}
    .price{margin-top:6px;font-weight:700;font-size:1.4rem;color:var(--gold)}
    ul.features{padding-left:18px;margin:6px 0 0}
    ul.features li{margin:6px 0;color:#d9d9d9}
    .btn{margin-top:auto;display:inline-flex;justify-content:center;align-items:center;gap:10px;padding:12px 16px;border-radius:12px;font-weight:700;letter-spacing:.02em;border:1px solid var(--gold);background:linear-gradient(180deg, var(--gold), var(--gold-2));color:#111;cursor:pointer;transition:filter .2s ease, transform .06s ease}
    .btn:hover{filter:brightness(1.05)}
    .btn:active{transform:translateY(1px)}
    .subtle{font-size:.95rem;color:#cfcfcf;margin-top:8px}

    /* Footer */
    .footer{margin-top:36px;color:#b8b8b8;font-size:.9rem;text-align:center}
    .accent{color:var(--gold)}
  </style>
</head>
<body>
  <div class="container">
    <div class="hero">
      <span class="brand">FOR WELLNESS & MEDICAL BRANDS</span>
      <h1>Stop <span class="accent">Losing</span> Clients to a Poor Website Experience</h1>
      <p style="margin-bottom: 24px">I help premium wellness and medical brands redesign their websites with empathy-driven UX — turning cluttered, confusing sites into elegant, high-converting experiences that build trust and increase revenue.</p>

      <a href="/get-started" class="btn">Book a Free Consultation</a>
    </div>

    <hr class="divider" />

    <!-- Pain Points section -->
    <section class="problem" aria-labelledby="prob-h">
      <h2 id="prob-h">A Poor Website Experience = <span class="accent">Lost Trust</span>, Lost Clients, Lost Revenue.</h2>
      <p class="lead">
        Do any of these sound familiar? Even the best wellness and medical services get overlooked if the website feels confusing,
        outdated, or difficult to use.
      </p>

      <div class="points" role="list">
        <div class="point" role="listitem">
          <div class="emo" aria-hidden="true">🧭</div>
          <div>
            <div class="tt">Cluttered Navigation</div>
            <p>Visitors can’t quickly understand what you do or how to book an appointment.</p>
          </div>
        </div>

        <div class="point" role="listitem">
          <div class="emo" aria-hidden="true">📅</div>
          <div>
            <div class="tt">Complicated Booking</div>
            <p>Too many steps or broken forms frustrate people before they ever confirm a consultation.</p>
          </div>
        </div>

        <div class="point" role="listitem">
          <div class="emo" aria-hidden="true">✨</div>
          <div>
            <div class="tt">Outdated &amp; Untrustworthy Design</div>
            <p>A dated website makes a premium service look cheap and unprofessional.</p>
          </div>
        </div>

        <div class="point" role="listitem">
          <div class="emo" aria-hidden="true">🤝</div>
          <div>
            <div class="tt">Missing Empathy &amp; Trust Signals</div>
            <p>Without testimonials, strong visuals, or clear messaging, clients don’t feel safe choosing you.</p>
          </div>
        </div>

        <div class="point" role="listitem">
          <div class="emo" aria-hidden="true">📱</div>
          <div>
            <div class="tt">Slow &amp; Non-Mobile-Friendly</div>
            <p>Many clients browse on their phone — if the site is clunky or slow, they leave instantly.</p>
          </div>
        </div>

        <div class="point" role="listitem">
          <div class="emo" aria-hidden="true">♿</div>
          <div>
            <div class="tt">Accessibility &amp; Transparency Gaps</div>
            <p>Sites that aren’t inclusive or don’t show data privacy create red flags for patients.</p>
          </div>
        </div>
      </div>
    </section>

    <hr class="divider" />

    <!-- Pricing grid -->
    <div class="grid">
      <!-- Starter -->
      <div class="card">
        <h3>Hive Foundation</h3>
        <p class="muted">Build a strong digital base for your brand.</p>
        <div class="subtle">For boutique wellness practices upgrading from outdated or DIY sites.</div>
        <div class="price">Starting at $7,500</div>
        <ul class="features">
          <li>Website Audit & Action Report</li>
          <li>Discovery Call + UX Flow Blueprint</li>
          <li>Up to 5 core pages redesigned & rebuilt (Home, About, Services, Contact, Booking)</li>
          <li>Clean Booking/Contact Flow</li>
          <li>Mobile-Friendly, SEO-Ready Basics</li>
          <li>Branding & Visual Design Refresh</li>
          <li>Post-Launch Support & Training</li>
        </ul>
        <a href="/get-started" class="btn">Build My Foundation</a>
      </div>

      <!-- Pro -->
      <div class="card">
        <h3>Golden Hive (Most Popular)</h3>
        <p class="muted">Transform your website into a premium client experience.</p>
        <div class="subtle">For wellness brands ready for their website to finally reflect the true quality of their services.</div>
        <div class="price">Starting at $15,000</div>
        <ul class="features">
          <li>Everything in The Hive Foundation, plus:</li>
          <li>Full redesign of up to 12 pages (covers majority of practice websites)</li>
          <li>SPremium Visual Design System (fonts, colors, layouts, graphics)</li>
          <li>Optimized UX for Bookings & Conversions</li>
          <li>Accessibility & Performance Testing</li>
          <li>Post-Launch Training & Support</li>
        </ul>
        <a href="/get-started" class="btn">Transform My Website</a>
      </div>

      <!-- Elite -->
      <div class="card">
        <h3>Hive Growth Partnership</h3>
        <p class="muted">Keep your website thriving with continuous improvements.</p>
        <div class="subtle">Perfect for wellness brands who want peace of mind and continuous growth.</div>
        <div class="price">Starting at $2,500/month</div>
        <ul class="features">
          <li>Monthly website updates & improvements</li>
          <li>UX & conversion optimization</li>
          <li>Analytics reporting + insights</li>
          <li>New content or landing page additions</li>
          <li>Priority access for fixes & enhancements</li>
          <li>Strategy check-in calls</li>
        </ul>
        <a href="/get-started" class="btn">Keep My Hive Growing</a>
      </div>
    </div>

    <div class="footer">
      © {{ date('Y') }} Neyhive Designs • Crafted with <span class="accent">Laravel</span>
    </div>
  </div>
</body>
</html>
