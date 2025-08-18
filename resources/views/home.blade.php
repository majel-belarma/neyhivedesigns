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

  /* Center everything */
  text-align:center;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;

  isolation:isolate; /* keeps sparkle effects inside */
}

/* Brand */
.hero .brand{
  display:inline-flex;
  gap:10px;
  align-items:center;
  color:var(--gold);
  font-weight:700;
  letter-spacing:.08em;
  text-transform:uppercase;
  font-size:.9rem;
  margin-bottom:10px;
}

/* Headline */
.hero h1{
  margin:14px 0 10px;
  font-size: clamp(28px, 5vw, 44px);
  line-height:1.15;
  max-width:20ch;
}

/* Paragraph */
.hero p{
  margin:0 0 24px;
  color:var(--gray);
  max-width:60ch;
}

/* Accent shimmer */
.accent.shimmer{
  background: linear-gradient(
    90deg,
    var(--gold) 0%,
    #fff3c4 18%,
    var(--gold-2) 36%,
    var(--gold) 52%,
    var(--gold-2) 70%,
    var(--gold) 100%
  );
  background-size: 220% 100%;
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  animation: text-shimmer 2.75s linear infinite;
  text-shadow: 0 0 12px rgba(212,175,55,0.10);
}
@keyframes text-shimmer{
  0%   { background-position: 0% 50%; }
  100% { background-position: 200% 50%; }
}

/* Hero effects: sweep + twinkle */
.hero::before{
  content:"";
  position:absolute;
  inset:-45% -60%;
  background: linear-gradient(
    115deg,
    transparent 0%,
    rgba(226,199,102,0.06) 38%,
    rgba(226,199,102,0.18) 50%,
    rgba(226,199,102,0.06) 62%,
    transparent 100%
  );
  transform: translateX(-60%) rotate(8deg);
  animation: hero-sweep 6.5s linear infinite;
  pointer-events:none;
  z-index:0;
  filter: blur(0.2px);
}
@keyframes hero-sweep{
  0%   { transform: translateX(-60%) rotate(8deg); }
  100% { transform: translateX(60%)  rotate(8deg); }
}
.hero::after{
  content:"";
  position:absolute;
  inset:0;
  pointer-events:none;
  z-index:0;
  background-image:
    radial-gradient(2px 2px at 12% 22%, rgba(226,199,102,0.9), rgba(226,199,102,0) 55%),
    radial-gradient(2px 2px at 78% 30%, rgba(226,199,102,0.8), rgba(226,199,102,0) 55%),
    radial-gradient(1.6px 1.6px at 32% 68%, rgba(212,175,55,0.85), rgba(212,175,55,0) 55%),
    radial-gradient(1.8px 1.8px at 60% 80%, rgba(226,199,102,0.85), rgba(226,199,102,0) 55%),
    radial-gradient(1.6px 1.6px at 88% 64%, rgba(212,175,55,0.85), rgba(212,175,55,0) 55%),
    radial-gradient(1.8px 1.8px at 18% 78%, rgba(226,199,102,0.9), rgba(226,199,102,0) 55%),
    radial-gradient(1.6px 1.6px at 45% 28%, rgba(212,175,55,0.85), rgba(212,175,55,0) 55%);
  animation: hero-twinkle 3.8s ease-in-out infinite;
  opacity:.55;
  filter: drop-shadow(0 0 2px rgba(212,175,55,0.25));
}
@keyframes hero-twinkle{
  0%,100% { opacity:.45; transform: translateY(0) }
  50%     { opacity:.95; transform: translateY(-1px) }
}

/* CTA button glow */
.btn{
  margin-top:auto;
  display:inline-flex;
  justify-content:center;
  align-items:center;
  gap:10px;
  padding:12px 16px;
  border-radius:12px;
  font-weight:700;
  letter-spacing:.02em;
  border:1px solid var(--gold);
  background:linear-gradient(180deg, var(--gold), var(--gold-2));
  color:#111;
  cursor:pointer;
  transition:filter .2s ease, transform .06s ease;
  box-shadow: 0 0 0 rgba(212,175,55,0.0);
  animation: btn-glow 3.6s ease-in-out infinite;
}
.btn:hover{filter:brightness(1.05)}
.btn:active{transform:translateY(1px)}
@keyframes btn-glow{
  0%,100% { box-shadow: 0 0 0 rgba(212,175,55,0.0); }
  50%     { box-shadow: 0 0 28px rgba(212,175,55,0.22); }
}

/* Divider */
.divider{
  height:1px;
  background:linear-gradient(to right, transparent, rgba(212,175,55,0.45), transparent);
  margin:36px 0 26px;
  border:0;
}

/* Problem Section */
.problem{
  border-radius:20px;
  padding:72px 0;
  text-align:center;
}
.problem h2{
  margin:0 0 12px;
  font-size:clamp(22px,4.4vw,32px);
  line-height:1.25;
    padding-bottom:6px;
}
.problem .lead{
  color:#d9d9d9;
  max-width:70ch;
  margin:0 auto;
  font-size:1.05rem;
  padding-bottom:18px;
}
.emo img{
  width:24px;
  height:24px;
  object-fit:contain;
  display:block;
  margin-top:4px;
}

/* Pain Points */
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
  padding:20px;
}
.point .emo{font-size:1.2rem;line-height:1}
.point .tt{font-weight:700;color:#fff}
.point p{margin:2px 0 0;color:#cfcfcf}

/* Cards */
.grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
@media (max-width:900px){ .grid{grid-template-columns:1fr 1fr} }
@media (max-width:640px){ .grid{grid-template-columns:1fr} }
.card{
  background:#0f0f0f;
  border:1px solid rgba(212,175,55,0.25);
  border-radius:18px;
  padding:22px;
  display:flex;
  flex-direction:column;
  gap:14px;
  transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
}
.card:hover{
  transform: translateY(-4px);
  box-shadow:0 16px 40px rgba(212,175,55,0.10);
  border-color:rgba(212,175,55,0.5);
}
.card h3{margin:0;font-size:1.25rem;letter-spacing:.02em}
.muted{color:#bfbfbf}
.price{margin-top:6px;font-weight:700;font-size:1.4rem;color:var(--gold)}
ul.features{padding-left:18px;margin:6px 0 0}
ul.features li{margin:6px 0;color:#d9d9d9}

/* Footer */
.footer{margin-top:36px;color:#b8b8b8;font-size:.9rem;text-align:center}
.accent{color:var(--gold)}

/* Ensure hero content above sparkles */
.hero > *{ position:relative; z-index:1; }

</style>

</head>
<body>
  <div class="container">
   
    <div class="hero">
    <span class="brand">FOR PREMIUM WELLNESS & MEDICAL BRANDS</span>
    <h1 style="margin-bottom:16px">
        <span class="accent shimmer">Premium</span> Websites for Premium Experts
    </h1>
    <p style="margin-bottom:28px">
        Your expertise is world-class — your website should be too. In just 7 days, we redesign outdated sites into sleek,
        trust-building platforms that reflect your true value and attract more clients.
    </p>
    <a href="/get-started" class="btn">Book a Discovery Call</a>
    </div>

   


    <!-- Pain Points section -->
    <section class="problem" aria-labelledby="prob-h">
    <h2 id="prob-h">A Poor Website = <span class="accent">Lost Trust</span>, Lost Clients, Lost Revenue.</h2>
    <p class="lead">
    Do any of these sound familiar? Even the best wellness and medical services get overlooked if the website feels confusing, outdated, or difficult to use.    </p>

    <div class="points" role="list">
        <div class="point" role="listitem">
        <div class="emo" aria-hidden="true"><img src="{{ asset('images/pain-1.svg') }}" alt="Navigation Icon"></div>
        <div>
            <div class="tt">Cluttered Navigation</div>
            <p>High-value clients can’t quickly understand your services or how to book — leading to missed bookings and frustration.</p>
        </div>
        </div>

        <div class="point" role="listitem">
        <div class="emo" aria-hidden="true"><img src="{{ asset('images/pain-2.svg') }}" alt="Navigation Icon"></div>
        <div>
            <div class="tt">Complicated Booking</div>
            <p>Every extra click or broken form means fewer consultations and lost appointments.</p>
        </div>
        </div>

        <div class="point" role="listitem">
        <div class="emo" aria-hidden="true"><img src="{{ asset('images/pain-3.svg') }}" alt="Navigation Icon"></div>
        <div>
            <div class="tt">Outdated &amp; Untrustworthy Design</div>
            <p>An outdated site makes premium treatments look cheap and drives clients to competitors.</p>
        </div>
        </div>

        <div class="point" role="listitem">
        <div class="emo" aria-hidden="true"><img src="{{ asset('images/pain-4.svg') }}" alt="Navigation Icon"></div>
        <div>
            <div class="tt">Missing Empathy &amp; Trust Signals</div>
            <p>Without testimonials, clear messaging, or strong visuals, patients don’t feel confident choosing you.</p>
        </div>
        </div>

        <div class="point" role="listitem">
        <div class="emo" aria-hidden="true"><img src="{{ asset('images/pain-5.svg') }}" alt="Navigation Icon"></div>
        <div>
            <div class="tt">Slow &amp; Non-Mobile-Friendly</div>
            <p>Affluent clients browse on mobile first — if your site is clunky or slow, they leave instantly.</p>
        </div>
        </div>

        <div class="point" role="listitem">
        <div class="emo" aria-hidden="true"><img src="{{ asset('images/pain-6.svg') }}" alt="Navigation Icon"></div>
        <div>
            <div class="tt">Accessibility &amp; Transparency Gaps</div>
            <p>Excluding seniors, busy professionals, or lacking data privacy signals creates red flags and lost trust.</p>
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
