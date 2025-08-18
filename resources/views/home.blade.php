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
.btn {
  margin-top:auto;
  display:inline-flex;
  justify-content:center;
  align-items:center;
  gap:10px;
  padding:12px 20px;
  border-radius:12px;
  font-weight:700;
  letter-spacing:.02em;
  border:1px solid var(--gold);
  background:linear-gradient(180deg, var(--gold), var(--gold-2));
  color:#111;
  cursor:pointer;
  position: relative;
  overflow: hidden;
  transition: transform .25s ease, box-shadow .25s ease, filter .25s ease;
}

/* Hover effect: shimmer + upscale */
.btn::before {
  content: "";
  position: absolute;
  top: 0; left: -100%;
  width: 100%; height: 100%;
  background: linear-gradient(
    120deg,
    transparent 0%,
    rgba(255, 255, 255, 0.6) 50%,
    transparent 100%
  );
  transition: left 0.6s ease;
}

.btn:hover::before {
  left: 100%;
}

.btn:hover {
  filter: brightness(1.08);
  transform: translateY(-2px) scale(1.02);
  box-shadow: 0 8px 26px rgba(212,175,55,0.28);
}

.btn:active {
  transform: translateY(1px) scale(0.99);
  box-shadow: 0 4px 12px rgba(212,175,55,0.18);
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
.heading-2{
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
/* Icon ring */
.emo{
  display:grid;
  place-items:center;
  width:42px;height:42px;
  border-radius:12px;
  background: radial-gradient(120% 120% at 30% 20%, rgba(212,175,55,0.18), rgba(212,175,55,0.06));
  border:1px solid rgba(212,175,55,0.35);
  box-shadow: inset 0 0 18px rgba(212,175,55,0.12);
  flex-shrink:0;
}
.emo img{
  width:22px;height:22px;object-fit:contain;display:block;
  filter: drop-shadow(0 0 2px rgba(212,175,55,0.25));
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
/* Card */
.point{
  display:flex;
  gap:14px;
  align-items:flex-start;
  background: rgba(255,255,255,0.02);
  border:1px solid rgba(212,175,55,.22);
  border-radius:16px;
  padding:18px 16px;
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease, background .25s ease;
}
.point:hover{
  transform: translateY(-4px);
  border-color: rgba(212,175,55,0.45);
  background: rgba(255,255,255,0.04);
  box-shadow: 0 12px 40px rgba(212,175,55,0.12);
}

.point .emo{font-size:1.2rem;line-height:1}
.point .tt{font-weight:700;color:#fff}
.point p{margin:2px 0 0;color:#cfcfcf}
/* Subtle stagger on appear (optional) */
@keyframes fadeRise {
  from { opacity:0; transform: translateY(6px); }
  to   { opacity:1; transform: translateY(0);  }
}
.points .point { animation: fadeRise .5s ease both; }
.points .point:nth-child(2){ animation-delay: .05s;}
.points .point:nth-child(3){ animation-delay: .10s;}
.points .point:nth-child(4){ animation-delay: .15s;}
.points .point:nth-child(5){ animation-delay: .20s;}
.points .point:nth-child(6){ animation-delay: .25s;}
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
  position:relative; /* needed for badge and effects on featured card */
  overflow:hidden;   /* clip shimmer effects on featured card */
}
.card:hover{
  transform: translateY(-4px);
  box-shadow:0 16px 40px rgba(212,175,55,0.10);
  border-color:rgba(212,175,55,0.5);
}
.card h3{margin:0;font-size:1.25rem;letter-spacing:.02em}
.muted{color:#bfbfbf; font-weight: 600;}
.price{margin-top:6px;font-weight:700;font-size:1.4rem;color:var(--gold)}
.subtle{color:#cfcfcf;font-size:.95rem; }
ul.features{padding-left:18px;margin:6px 0 0}
ul.features li{margin:6px 0;color:#d9d9d9}

/* === FEATURED / GOLDEN HIVE CARD EFFECTS === */
.card.featured{
  border-color: rgba(226,199,102,0.75);
  box-shadow: 0 16px 60px rgba(226,199,102,0.18);
  background:
    linear-gradient(180deg, rgba(212,175,55,0.12), rgba(212,175,55,0.03)),
    #0e0e0e;
}
.card.featured::before{
  /* sweep like hero */
  content:"";
  position:absolute;
  inset:-60% -70%;
  background: linear-gradient(
    120deg,
    transparent 0%,
    rgba(226,199,102,0.08) 38%,
    rgba(226,199,102,0.22) 50%,
    rgba(226,199,102,0.08) 62%,
    transparent 100%
  );
  transform: translateX(-60%) rotate(8deg);
  animation: hero-sweep 6.5s linear infinite;
  z-index:0;
  pointer-events:none;
}
.card.featured::after{
  /* twinkles like hero */
  content:"";
  position:absolute;
  inset:0;
  pointer-events:none;
  z-index:0;
  background-image:
    radial-gradient(2px 2px at 12% 22%, rgba(226,199,102,0.9), rgba(226,199,102,0) 55%),
    radial-gradient(2px 2px at 78% 30%, rgba(226,199,102,0.8), rgba(226,199,102,0) 55%),
    radial-gradient(1.6px 1.6px at 32% 68%, rgba(212,175,55,0.85), rgba(212,175,55,0) 55%),
    radial-gradient(1.8px 1.8px at 60% 80%, rgba(226,199,102,0.85), rgba(226,199,102,0) 55%);
  animation: hero-twinkle 3.8s ease-in-out infinite;
  opacity:.6;
  filter: drop-shadow(0 0 2px rgba(212,175,55,0.25));
}
/* keep content above shimmer layers */
.card.featured > *{ position:relative; z-index:1; }

/* "Most Popular" badge */
.badge{
  position:absolute;
  top:12px; right:12px;
  background: linear-gradient(180deg, var(--gold), var(--gold-2));
  color:#111;
  font-weight:800;
  font-size:.72rem;
  letter-spacing:.06em;
  padding:6px 10px;
  border-radius:999px;
  border:1px solid rgba(0,0,0,0.12);
  box-shadow: 0 6px 16px rgba(212,175,55,0.25);
}

/* Button variant for dark-on-gold (keeps same look) */
.card.featured .btn{
  background:linear-gradient(180deg, var(--gold), var(--gold-2));
  color:#111;
}
/* --- Pricing layout improvements --- */
.pricing {
  margin-top: 12px;
}

/* make all cards consistent height and spacing */
.card {
  display:flex;
  flex-direction:column;
  min-height: 100%;
}

/* tighten headings + intro copy */
.card h3 { margin: 0 0 6px; }
.card .muted {
  margin: 0;
  color: #cfcfcf;
}
.card .subtle {
  color:#bbb;
  font-size:.95rem;
  margin: 0;
}

/* Price row with better hierarchy */
.price-row {
  display:flex;
  align-items:baseline;
  gap:10px;
  margin: 6px 0 10px;
}
.price-tag {
  display:inline-flex;
  align-items:baseline;
  gap:6px;
}
.price-tag .label {
  color:#bdbdbd;
  font-size:.85rem;
  letter-spacing:.04em;
  text-transform:uppercase;
}
.price-tag .amount {
  color: var(--gold);
  font-weight:800;
  font-size:1.6rem;
  letter-spacing:.02em;
}
.price-tag .period {
  color:#bdbdbd;
  font-size:.9rem;
}

.features {
  list-style: none;
  margin: 8px 0 0;
  padding-left: 0 !important;   /* 🔥 remove default browser padding */
  display: grid;
  gap: 6px;
}
.features li {
  display: flex;
  align-items: flex-start;
  gap: 8px;
  color: #e5e5e5;
  font-size: .95rem;
  line-height: 1.4;
  margin: 4px 0 !important;
}
.features li img {
  width: 20px;
  height: 20px;
  flex-shrink: 0;
}



/* spacing before CTA */
.card .cta-area {
  margin-top:auto;
  display:flex;
  gap:10px;
  align-items:center;
}

.card .cta-area a {
  width: 100%;
  text-align: center;
}
/* small footnotes / disclaimers if needed */
.note {
  margin-top:10px;
  font-size:.85rem;
  color:#a9a9a9;
}

/* Featured card header row */
.card-header {
  display:flex;
  justify-content:space-between;
  align-items:center;
  gap:12px;
  margin-bottom: 6px;
}
.card-header h3 { margin:0; }

/* Glass outlined badge (right of title) */
.card-header .badge{
  position: static;
  background: rgba(255,255,255,0.06);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  color: var(--gold);
  font-weight:700;
  font-size:.72rem;
  letter-spacing:.06em;
  padding:6px 12px;
  border-radius:999px;
  border:1px solid var(--gold);
  box-shadow: 0 2px 8px rgba(212,175,55,0.2);
  text-transform:uppercase;
  white-space:nowrap;
}

/* Secondary button (refined premium style) */
.btn-secondary {
  margin-top: 0;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  padding: 12px 16px;
  border-radius: 12px;
  font-weight: 700;
  letter-spacing: .02em;
  border: 1px solid rgba(212, 175, 55, 0.4);
  background: rgba(255, 255, 255, 0.04);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  color: var(--gold);
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition: all .3s ease;
}

/* subtle gradient overlay for glass depth */
.btn-secondary::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(
    145deg,
    rgba(255, 255, 255, 0.08),
    rgba(255, 255, 255, 0)
  );
  opacity: 0.25;
  pointer-events: none;
  border-radius: inherit;
}

/* Hover: shimmer + subtle lift */
.btn-secondary:hover {
  background: rgba(212, 175, 55, 0.1);
  border-color: var(--gold);
  transform: translateY(-2px) scale(1.02);
  box-shadow: 0 6px 18px rgba(212, 175, 55, 0.15);
}

/* Active: press down */
.btn-secondary:active {
  transform: translateY(1px) scale(0.98);
  box-shadow: 0 3px 8px rgba(212, 175, 55, 0.1);
}


/* Slight emphasis for featured CTA spacing */
.card.featured .cta-area { margin-top: 14px; }


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
   <!-- Pain Points section -->
<section class="problem" aria-labelledby="prob-h">
  <h2 id="prob-h" class="heading-2">
    A Poor Website = <span class="accent shimmer">Lost Trust</span>, Lost Clients, Lost Revenue.
  </h2>
  <div class="gold-divider" aria-hidden="true"></div>

  <p class="lead">
    Do any of these sound familiar? Even the best wellness and medical services get overlooked if the website feels confusing,
    outdated, or difficult to use.
  </p>

  <div class="points" role="list">
    <div class="point" role="listitem">
      <div class="emo" aria-hidden="true">
        <img src="{{ asset('images/pain-1.svg') }}" alt="">
      </div>
      <div>
        <div class="tt">Cluttered Navigation</div>
        <p>High-value clients can’t quickly understand your services or how to book — leading to missed bookings and frustration.</p>
      </div>
    </div>

    <div class="point" role="listitem">
      <div class="emo" aria-hidden="true">
        <img src="{{ asset('images/pain-2.svg') }}" alt="">
      </div>
      <div>
        <div class="tt">Complicated Booking</div>
        <p>Every extra click or broken form means fewer consultations and lost appointments.</p>
      </div>
    </div>

    <div class="point" role="listitem">
      <div class="emo" aria-hidden="true">
        <img src="{{ asset('images/pain-3.svg') }}" alt="">
      </div>
      <div>
        <div class="tt">Outdated &amp; Untrustworthy Design</div>
        <p>An outdated site makes premium treatments look cheap and drives clients to competitors.</p>
      </div>
    </div>

    <div class="point" role="listitem">
      <div class="emo" aria-hidden="true">
        <img src="{{ asset('images/pain-4.svg') }}" alt="">
      </div>
      <div>
        <div class="tt">Missing Empathy &amp; Trust Signals</div>
        <p>Without testimonials, clear messaging, or strong visuals, patients don’t feel confident choosing you.</p>
      </div>
    </div>

    <div class="point" role="listitem">
      <div class="emo" aria-hidden="true">
        <img src="{{ asset('images/pain-5.svg') }}" alt="">
      </div>
      <div>
        <div class="tt">Slow &amp; Non-Mobile-Friendly</div>
        <p>Affluent clients browse on mobile first — if your site is clunky or slow, they leave instantly.</p>
      </div>
    </div>

    <div class="point" role="listitem">
      <div class="emo" aria-hidden="true">
        <img src="{{ asset('images/pain-6.svg') }}" alt="">
      </div>
      <div>
        <div class="tt">Accessibility &amp; Transparency Gaps</div>
        <p>Excluding seniors, busy professionals, or lacking data-privacy signals creates red flags and lost trust.</p>
      </div>
    </div>
  </div>
</section>


    <hr class="divider" />
<!-- Pricing grid -->
<section class="pricing" aria-label="Pricing packages">

  <!-- Section Heading -->
  <header class="pricing-header" style="text-align:center; margin-bottom:36px;">
    <h2 style="font-size:clamp(26px,5vw,36px); margin:0 0 12px;">
      The <span class="accent shimmer">Hive Tiers</span> of Growth
    </h2>
    <p style="max-width:60ch; margin:0 auto; color:#cfcfcf; font-size:1.05rem;">
      From building your foundation to complete transformation, our tiers are crafted for 
      premium wellness and medical experts who demand digital authority.
    </p>
  </header>

  <div class="grid">
    <!-- Hive Foundation -->
    <article class="card" aria-labelledby="pkg-foundation">
      <h3 id="pkg-foundation">Hive Foundation</h3>
      <p class="muted">Establish your digital authority.</p>
      <p class="subtle">Fast, premium refresh for established experts.</p>

      <div class="price-row" aria-label="Starting price">
        <div class="price-tag">
          <span class="label">Starting at</span>
          <span class="amount" aria-live="polite">$10,000</span>
        </div>
      </div>

      <ul class="features" role="list">
        <li><img src="/images/icon-check.svg" alt="">Premium redesign of up to 5 core pages</li>
        <li><img src="/images/icon-check.svg" alt="">1-week delivery window</li>
        <li><img src="/images/icon-check.svg" alt="">Trust-focused UI/UX, mobile-responsive</li>
        <li><img src="/images/icon-check.svg" alt="">Clean booking & contact flow</li>
      </ul>

      <div class="cta-area">
        <a href="/get-started" class="btn-secondary" aria-label="Start Hive Foundation package">Build My Foundation</a>
      </div>
    </article>

    <!-- Golden Hive (FEATURED) -->
    <article class="card featured" aria-labelledby="pkg-golden">
      <div class="card-header">
        <h3 id="pkg-golden">Golden Hive</h3>
        <div class="badge" aria-label="Most Popular">Most Popular</div>
      </div>
      <p class="muted">Your complete digital transformation.</p>
      <p class="subtle">Premium, done-for-you redesign and relaunch.</p>

      <div class="price-row" aria-label="Starting price">
        <div class="price-tag">
          <span class="label">Starting at</span>
          <span class="amount" aria-live="polite">$18,000</span>
        </div>
      </div>

      <ul class="features" role="list">
        <li><img src="/images/icon-check.svg" alt="">Full redesign of up to 12 pages</li>
        <li><img src="/images/icon-check.svg" alt="">Design and development (WordPress, Webflow, or custom)</li>
        <li><img src="/images/icon-check.svg" alt="">Conversion-focused patient journey</li>
        <li><img src="/images/icon-check.svg" alt="">SEO-ready structure + analytics setup</li>
        <li><img src="/images/icon-check.svg" alt="">Accessibility & performance testing</li>
        <li><img src="/images/icon-check.svg" alt="">Priority launch support</li>
      </ul>

      <div class="cta-area">
        <a href="/get-started" class="btn" aria-label="Choose Golden Hive package">Transform My Website</a>
      </div>
    </article>

    <!-- Hive Growth Partnership -->
    <article class="card" aria-labelledby="pkg-growth">
      <h3 id="pkg-growth">Hive Growth Partnership</h3>
      <p class="muted">Your long-term digital partner.</p>
      <p class="subtle">Continuous optimization and peace of mind.</p>

      <div class="price-row" aria-label="Monthly price">
        <div class="price-tag">
          <span class="label">From</span>
          <span class="amount" aria-live="polite">$3,500</span>
          <span class="period">/ month</span>
        </div>
      </div>

      <ul class="features" role="list">
        <li><img src="/images/icon-check.svg" alt="">Monthly updates & enhancements</li>
        <li><img src="/images/icon-check.svg" alt="">UX & conversion optimization</li>
        <li><img src="/images/icon-check.svg" alt="">Analytics reporting + insights</li>
        <li><img src="/images/icon-check.svg" alt="">New content or landing page additions</li>
        <li><img src="/images/icon-check.svg" alt="">Priority support & quarterly strategy</li>
      </ul>

      <div class="cta-area">
        <a href="/get-started" class="btn-secondary" aria-label="Start Hive Growth Partnership">Keep My Hive Growing</a>
      </div>
    </article>
  </div>
</section>




    <div class="footer">
      © {{ date('Y') }} Neyhive Designs • Crafted with <span class="accent">Laravel</span>
    </div>
  </div>
</body>
</html>
