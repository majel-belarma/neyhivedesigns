<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Elitean Spa</title>

  <!-- Google Fonts (Literata normal + italic, Commissioner) -->
  <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@300;400;500;600&family=Literata:ital,opsz,wght@0,7..72,400;0,7..72,500;0,7..72,600;0,7..72,700;1,7..72,400;1,7..72,500;1,7..72,600;1,7..72,700&display=swap" rel="stylesheet">
<style>
/* ===== VARIABLES & BASE ===== */
:root{--brown:#1B130E;--text:#D9D9D9;--hero-title:#E7D3A8;--hero-text:#eaeaea;--gold-1:#e8d7a6;--gold-2:#d4b56e;}
*{box-sizing:border-box;}
body{padding-top:70px;margin:0;font-family:'Commissioner',sans-serif;color:var(--text);background:#1B130E;}

/* ===== NAVBAR ===== */
.navbar{position:fixed;top:0;left:0;width:100%;z-index:10;display:flex;align-items:center;justify-content:space-between;background:rgba(27,19,14,1);padding:14px 40px;transform:translateY(-10px);opacity:0;filter:blur(4px);transition:transform .8s ease,opacity .8s ease,filter .8s ease,background-color .4s ease,backdrop-filter .4s ease;}
.navbar.scrolled{background:rgba(27,19,14,0.75);backdrop-filter:blur(6px);box-shadow:0 4px 20px rgba(0,0,0,0.25);}
.is-ready .navbar{transform:translateY(0);opacity:1;filter:blur(0);}
.logo{font-family:'Literata',serif;font-size:1.3rem;font-weight:400;color:var(--text);}
.nav-links{display:flex;align-items:center;gap:24px;font-family:'Commissioner',sans-serif;}
.nav-links a{color:var(--text);text-decoration:none;font-size:0.95rem;font-weight:400;transition:color .25s ease;position:relative;padding-bottom:2px;}
.nav-links a:hover{color:#fff;}
.nav-links a::after{content:"";position:absolute;left:0;bottom:-2px;height:2px;width:100%;background:linear-gradient(90deg,var(--gold-1),var(--gold-2));transform:scaleX(0);transform-origin:left;transition:transform .45s ease;}
.nav-links a:hover::after{transform:scaleX(1);}
.book-btn{align-self:flex-start;border:1px solid #E7D3A8;background:transparent;color:#E7D3A8;padding:12px 20px;font-weight:500;font-size:.95rem;letter-spacing:.02em;cursor:pointer;transition:transform .2s ease,background .25s ease,color .25s ease,box-shadow .25s ease;position:relative;overflow:hidden;}
.book-btn:hover{background:#E7D3A8;color:#1B130E;transform:translateY(-1px);box-shadow:0 6px 24px rgba(231,211,168,.18);}
.book-btn::after{content:"";position:absolute;top:-120%;left:-30%;width:40%;height:300%;transform:rotate(25deg);background:linear-gradient(to right,rgba(255,255,255,0) 0%,rgba(255,255,255,.35) 50%,rgba(255,255,255,0) 100%);transition:transform .7s ease;}
.book-btn:hover::after{transform:translateX(260%) rotate(25deg);}
.menu-toggle{display:none;color:var(--text);font-size:1.6rem;cursor:pointer;}

/* ===== HERO ===== */
.hero{position:relative;width:100%;height:95vh;overflow:hidden;display:flex;align-items:flex-start;justify-content:flex-start;padding:0 5%;}
.hero-bg img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;z-index:0;display:block;}
.hero .overlay{position:absolute;inset:0;background:rgba(0,0,0,.28);z-index:1;}
.hero-content{position:relative;z-index:2;display:grid;grid-template-columns:auto minmax(38ch,50ch);grid-template-rows:auto auto;gap:clamp(8px,1.5vw,16px) clamp(16px,3vw,32px);align-items:start;color:#fff;align-self:flex-start;margin-top:120px;max-width:none;}
.title-light{grid-column:1;grid-row:1;font-family:'Literata',serif;font-style:italic;color:var(--hero-title);font-size:clamp(3rem,10vw,200px);margin-left:clamp(40px,12vw,250px);line-height:0.2;opacity:0;transform:translateY(18px);letter-spacing:.01em;animation:fadeUp .9s cubic-bezier(.22,.61,.36,1) forwards;animation-delay:.15s;text-shadow:0 1px 0 rgba(0,0,0,.18),0 10px 40px rgba(0,0,0,.25);}
.hero-desc{grid-column:2;grid-row:1;margin:0 0 0 clamp(100px,12vw,240px);align-self:stretch;display:flex;align-items:center;justify-content:flex-start;height:100%;font-weight:300!important;font-size:16px;line-height:1.6;color:#B8AEA3;text-shadow:0 1px 2px rgba(0,0,0,.35);opacity:0;transform:translateY(18px);letter-spacing:.01em;animation:fadeUp .9s cubic-bezier(.22,.61,.36,1) forwards;animation-delay:.35s;}
.title-heavy{grid-column:1/span 2;grid-row:2;margin:0;font-family:'Literata',serif;font-weight:500;color:var(--hero-title);font-size:clamp(4rem,18vw,450px);line-height:0.5;opacity:0;transform:translateY(18px);letter-spacing:.01em;animation:fadeUp .9s cubic-bezier(.22,.61,.36,1) forwards;animation-delay:.55s;text-shadow:0 1px 0 rgba(0,0,0,.18),0 10px 40px rgba(0,0,0,.25);}
.image-overlay{position:absolute;inset:0;z-index:3;pointer-events:none;}
.image-overlay img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;}

/* ===== INTRO ===== */
.section-intro{display:grid;grid-template-columns:1fr 1fr;min-height:72vh;background:#1B130E;}
.intro-media{position:relative;overflow:hidden;aspect-ratio:3/4;}
.intro-media video,.intro-media img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;filter:saturate(1.02) contrast(1.02);}
.intro-content{background:#221813;color:#D9D9D9;padding:clamp(28px,6vw,72px);display:flex;flex-direction:column;justify-content:center;}
.intro-eyebrow{font-size:.85rem;letter-spacing:.12em;text-transform:uppercase;color:#B8AEA3;margin:0 0 10px 0;}
.intro-title{font-family:'Literata',serif;font-size:clamp(1.8rem,3.6vw,2.6rem);line-height:1.3;color:#E7D3A8;margin:0 0 18px 0;font-style:italic;font-weight:400;}
.intro-copy{color:#C9C0B6;line-height:1.6;margin:0 0 32px 0;max-width:60ch;font-weight:300;}
.intro-cta{align-self:flex-start;border:1px solid #E7D3A8;background:transparent;color:#E7D3A8;padding:12px 20px;font-weight:500;font-size:.95rem;letter-spacing:.02em;cursor:pointer;transition:transform .2s ease,background .25s ease,color .25s ease,box-shadow .25s ease;position:relative;overflow:hidden;}
.intro-cta:hover{background:#E7D3A8;color:#1B130E;transform:translateY(-1px);box-shadow:0 6px 24px rgba(231,211,168,.18);}
.intro-cta::after{content:"";position:absolute;top:-120%;left:-30%;width:40%;height:300%;transform:rotate(25deg);background:linear-gradient(to right,rgba(255,255,255,0) 0%,rgba(255,255,255,.35) 50%,rgba(255,255,255,0) 100%);transition:transform .7s ease;}
.intro-cta:hover::after{transform:translateX(260%) rotate(25deg);}

/* ===== INTRO REVEAL ===== */
.intro-content [data-sr]{opacity:0;transform:translateY(14px);transition:opacity .6s ease,transform .6s ease;}
.intro-content.is-visible [data-sr]{opacity:1;transform:translateY(0);}
.intro-content.is-visible [data-sr="1"]{transition-delay:.05s;}
.intro-content.is-visible [data-sr="2"]{transition-delay:.15s;}
.intro-content.is-visible [data-sr="3"]{transition-delay:.3s;}
.intro-content.is-visible [data-sr="4"]{transition-delay:.45s;}

/* ===== RITUALS ===== */
.section-rituals{background:#32231A;padding:64px 40px 56px;position:relative;z-index:0;overflow:visible;}
.rituals-header{display:flex;align-items:center;justify-content:space-between;margin:0 0 36px 0;}
.rituals-title{font-family:'Literata',serif;color:#E7D3A8;font-size:clamp(2.8rem,5vw,4rem);font-weight:400;font-style:italic;line-height:1.1;margin:0;}
.rituals-nav{display:flex;gap:16px;align-items:center;transform:translateY(1px);}
.carousel-btn{width:clamp(36px,9vw,44px);height:clamp(36px,9vw,44px);padding:0;display:inline-flex;align-items:center;justify-content:center;border:1px solid #E7D3A8;background:transparent;color:#E7D3A8;cursor:pointer;transition:background .25s ease,color .25s ease,box-shadow .25s ease;line-height:1;font-weight:500;border-radius:0;}
.carousel-btn:hover{background:#E7D3A8;color:#1B130E;box-shadow:0 6px 24px rgba(231,211,168,.18);}
.carousel-btn svg{width:clamp(14px,4vw,18px);height:clamp(14px,4vw,18px);display:block;}
.carousel-btn[disabled]{opacity:.45;pointer-events:none;box-shadow:none;filter:grayscale(.1);}
.rituals-track{display:flex;gap:16px;overflow-x:auto;overflow-y:visible;scroll-snap-type:x mandatory;padding:8px 0 40px 0;scroll-padding-left:0!important;scrollbar-width:none;-ms-overflow-style:none;}
.rituals-track > :first-child{margin-left:0!important;}
.rituals-track::-webkit-scrollbar{display:none;}
.ritual-card{position:relative;min-width:350px;max-width:380px;aspect-ratio:4/5.5;background:#1B130E;scroll-snap-align:start;overflow:hidden;isolation:isolate;}
.ritual-card::after{content:"";position:absolute;top:-120%;left:-30%;width:40%;height:300%;transform:rotate(25deg) translateX(-120%);background:linear-gradient(to right,rgba(255,255,255,0) 0%,rgba(255,255,255,.28) 50%,rgba(255,255,255,0) 100%);opacity:0;transition:transform .8s ease,opacity .35s ease;pointer-events:none;mix-blend-mode:screen;}
.ritual-card:hover::after{transform:rotate(25deg) translateX(260%);opacity:.9;}
.ritual-card img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;filter:saturate(1.02) contrast(1.02);transition:transform .6s ease,filter .4s ease;}
.ritual-card:hover img{transform:scale(1.08);filter:saturate(1.06) contrast(1.06);}
.card-overlay{position:absolute;inset:0;display:flex;flex-direction:column;justify-content:flex-end;gap:6px;padding:18px;background:linear-gradient(180deg,rgba(0,0,0,0) 35%,rgba(0,0,0,.55) 75%,rgba(0,0,0,.75) 100%);color:#fff;}
.card-title{font-family:'Literata',serif;letter-spacing:.5px;font-style:italic;margin:0 0 2px 0;font-size:1.35rem;font-weight:500;text-shadow:0 2px 12px rgba(0,0,0,.45);line-height: 1.2;}
.card-sub{margin:0;font-size:.98rem;color:#C9C0B6;opacity:.95;line-height:1.45;max-width:36ch;font-weight:300;}

/* ===== RITUALS REVEAL ===== */
.section-rituals [data-rs]{opacity:0;transform:translateY(14px);transition:opacity .6s ease,transform .6s ease;}
.section-rituals.is-visible [data-rs]{opacity:1;transform:translateY(0);}
.section-rituals.is-visible [data-rs="1"]{transition-delay:.05s;}
.section-rituals.is-visible [data-rs="2"]{transition-delay:.15s;}
.section-rituals.is-visible [data-rs="3"]{transition-delay:.25s;}
.section-rituals.is-visible [data-rs="4"]{transition-delay:.35s;}
.section-rituals.is-visible [data-rs="5"]{transition-delay:.45s;}
.section-rituals.is-visible [data-rs="6"]{transition-delay:.55s;}

/* ===== PILLARS ===== */
.section-pillars{background:#1B130E;padding:80px 40px 100px;}
.pillars-title{font-family:'Literata',serif;color:#E7D3A8;font-size:clamp(2.8rem,5vw,4rem);font-weight:400;line-height:1.1;font-style:italic;text-align:center;margin:0 0 44px 0;}
.pillars-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px;width:100%;margin:0;}
.pillar-card{position:relative;background:#221813;border:1px solid rgba(231,211,168,.28);padding:36px 28px 32px;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;text-align:center;gap:16px;height:100%;overflow:hidden;isolation:isolate;box-shadow:0 0 0 rgba(0,0,0,0);transition:transform .45s cubic-bezier(.22,.61,.36,1),box-shadow .45s ease,border-color .45s ease;}
.pillar-card{position:relative;overflow:hidden;isolation:isolate;}
.pillar-card::after{content:"";position:absolute;top:-26%;left:-32%;width:180px;height:300px;transform:rotate(25deg);background:linear-gradient(to right,rgba(255,255,255,0) 0%,rgba(231,211,168,.22) 50%,rgba(255,255,255,0) 100%);filter:blur(8px);opacity:.55;mix-blend-mode:screen;pointer-events:none;}
@media(max-width:768px){.pillar-card::after{top:-28%;left:-34%;width:140px;height:220px;filter:blur(7px);opacity:.5;}}
.pillar-card:hover,.pillar-card:focus-visible{transform:translateY(-5px);box-shadow:0 16px 42px rgba(231,211,168,.18),0 10px 28px rgba(0,0,0,.22);border-color:rgba(231,211,168,.5);}
.pillar-icon{width:78px;height:78px;display:block;object-fit:contain;filter:saturate(1.02) contrast(1.02); margin-bottom: 8px}
.pillar-heading{font-family:'Literata',serif;letter-spacing:.5px;font-style:italic;margin:0;font-size:1.35rem;font-weight:500;text-shadow:0 2px 12px rgba(0,0,0,.45);line-height: 1.2;}
.pillar-copy{color:#C9C0B6;line-height:1.6;max-width:42ch;margin:0 auto;font-weight:300;}
@media(max-width:1024px){.pillars-grid{grid-template-columns:repeat(2,minmax(0,1fr));}}
@media(max-width:768px){.section-pillars{padding:50px 20px 60px;}}
@media(max-width:768px){.pillars-grid{grid-template-columns:1fr;}}
@media(max-width:768px){.pillars-grid{gap:20px;}}

/* Subtle luxe icon animation on hover/tap/focus (works for <img> or inline <svg>) */
.pillar-icon,svg.pillar-icon{transition:transform .6s cubic-bezier(.22,.61,.36,1),filter .6s ease;will-change:transform;}
.pillar-card:hover .pillar-icon,.pillar-card:focus-visible .pillar-icon,.pillar-card:active .pillar-icon,.pillar-card:hover svg.pillar-icon,.pillar-card:focus-visible svg.pillar-icon,.pillar-card:active svg.pillar-icon{transform:translateY(-3px) scale(1.05);filter:drop-shadow(0 8px 24px rgba(231,211,168,.18));}
.section-pillars [data-ps]{opacity:0;transform:translateY(14px);transition:opacity .6s ease,transform .6s ease;}
.section-pillars.is-visible [data-ps]{opacity:1;transform:translateY(0);}
.section-pillars.is-visible [data-ps="1"]{transition-delay:.05s;}
.section-pillars.is-visible [data-ps="2"]{transition-delay:.15s;}
.section-pillars.is-visible [data-ps="3"]{transition-delay:.25s;}
.section-pillars.is-visible [data-ps="4"]{transition-delay:.35s;}
@media(prefers-reduced-motion:reduce){.section-pillars [data-ps]{opacity:1!important;transform:none!important;transition:none!important;}}

/* ===== VIDEO ===== */
.section-cinema{position:relative;background:#1B130E;padding:0;margin:0;}
.cinema-video{display:block;width:100%;height:auto;max-width:100%;outline:0;user-select:none;}
.cinema-overlay{position:absolute;inset:0;display:grid;place-items:center;padding:clamp(16px,4vw,32px);}
.cinema-card{background:rgba(27,19,14,.5);backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);box-shadow:0 12px 36px rgba(0,0,0,.35);padding:clamp(20px,4vw,36px) clamp(20px,5vw,48px);width:60%; text-align:center;}
.cinema-quote{font-family:'Literata',serif;color:#E7D3A8;font-size:clamp(1.2rem,2.6vw,2rem);line-height:1.5;margin:0 0 12px 0;font-style:italic;font-weight:400;}
.cinema-author{color:#D9D9D9;font-size:clamp(.9rem,1.8vw,1rem);opacity:.9;margin:0;}
@media(max-width:768px){.section-cinema{position:relative;aspect-ratio:4/5;overflow:hidden;}.cinema-video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;}.cinema-overlay{position:absolute;inset:0;display:grid;place-items:center;padding:20px;}.cinema-card{width:80%;}}


/* ===== KEYFRAMES ===== */
@keyframes fadeUp{to{opacity:1;transform:translateY(0);}}

/* ===== MEDIA QUERIES ===== */
/* ===== MEDIA QUERIES (CLEAN) ===== */
@media(max-width:900px){.section-intro{grid-template-columns:1fr;}.intro-media{order:2;aspect-ratio:16/12;height:auto;}.intro-content{order:1;padding:50px 20px;}.ritual-card{min-width:280px;}.section-rituals{padding:50px 20px;}}
@media(max-width:768px){
  .navbar{padding:12px 20px !important;}
  .menu-toggle{display:block;}
  .nav-links{position:fixed;left:0;right:0;top:57px;width:100vw;z-index:999;background:rgba(27,19,14,.96);backdrop-filter:blur(10px);border-bottom:1px solid rgba(231,211,168,.22);padding:16px 20px 20px;display:flex;flex-direction:column;align-items:flex-start;gap:14px;max-height:0;opacity:0;visibility:hidden;overflow:hidden;transform:translateY(-14px);filter:blur(6px);transition:max-height .9s ease,opacity .9s ease,transform .9s cubic-bezier(.22,.61,.36,1),filter .9s ease;}
.nav-links.active{max-height:80vh;opacity:1;visibility:visible;transform:translateY(0);filter:blur(0);}  .nav-links a,.nav-links .book-btn{width:100%;text-align:left;}
  .hero{height:85vh;padding:0 4%;}
  .hero-content{margin-top:130px;}
  .title-light{grid-column:1;grid-row:1;margin-left:56px;font-size:52px;line-height:.1;}
  .title-heavy{grid-column:1;grid-row:2;font-size:96px;line-height:.85;}
  .hero-desc{grid-column:1;grid-row:3;margin:24px 6px;height:auto;align-self:start;justify-content:flex-start;max-width:32ch;font-size:clamp(0.95rem,3.8vw,1.05rem);line-height:1.5;}
  .hero-bg source{display:block;}
  .image-overlay{display:none!important;}
  .image-overlay source{display:block;}
}
@media(max-width:768px){.nav-links{align-items:center;}}
@media(max-width:768px){.nav-links a{width:auto!important;text-align:center;}}
@media(max-width:768px){.nav-links .book-btn{align-self:center;display:inline-flex;justify-content:center;align-items:center;text-align:center;width:auto!important;margin:8px auto 0;}}

@media(max-width:600px){.rituals-nav{gap:12px;}.carousel-btn{width:clamp(30px,10vw,36px);height:clamp(30px,10vw,36px);}.carousel-btn svg{width:clamp(12px,4vw,16px);height:clamp(12px,4vw,16px);}.navbar{padding:12px 14px;}}
@media(max-width:360px){.carousel-btn{width:clamp(26px,11vw,32px);height:clamp(26px,11vw,32px);}.carousel-btn svg{width:clamp(10px,4.5vw,14px);height:clamp(10px,4.5vw,14px);}}
@media(prefers-reduced-motion:reduce){.navbar,.title-light,.title-heavy,.hero-desc,.hero-bg img,.hero-content,.intro-content [data-sr]{animation:none!important;transition:none!important;transform:none!important;filter:none!important;opacity:1!important;}.nav-links a::after,.book-btn::after{transition:none!important;}.carousel-btn{transition:none!important;}.ritual-card{scroll-snap-align:none;}.section-rituals [data-rs]{transition:none!important;transform:none!important;opacity:1!important;}}

</style>

</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar">
    <div class="logo">Elitean Spa</div>
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    <div class="nav-links" id="navLinks">
      <a href="#">Rituals</a>
      <a href="#">Experience</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
      <button class="book-btn">Reserve Now</button>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero">
    <!-- Background image with mobile swap -->
    <picture class="hero-bg">
      <source media="(max-width: 768px)" srcset="{{ asset('elitean/elitean-banner-phone.webp') }}">
      <img src="{{ asset('elitean/elitean-banner.webp') }}" alt="Elitean Spa banner">
    </picture>

    <div class="overlay"></div>

    <!-- Grid-based content -->
    <div class="hero-content">
      <span class="title-light">Serene</span>
      <p class="hero-desc">Rejuvenate your body, calm your mind, and indulge in the finest spa rituals crafted exclusively for you.</p>
      <span class="title-heavy">Luxury</span>
    </div>

    <!-- Top overlay with mobile swap -->
    <picture class="image-overlay">
      <source media="(max-width: 768px)" srcset="{{ asset('elitean/elitean-banner-top-phone.webp') }}">
      <img src="{{ asset('elitean/elitean-banner-top.webp') }}" alt="Elitean Overlay">
    </picture>
  </section>

  <section class="section-intro">
  <!-- Left: video (autoplay, muted, loop, inline) -->
  <div class="intro-media">
    <video
      src="{{ asset('elitean/intro-left.mp4') }}"
      poster="{{ asset('elitean/intro-left-poster.webp') }}"
      autoplay
      muted
      loop
      playsinline
      preload="auto"
      aria-label="Elitean Spa ambiance video">
      <!-- Fallback image if video unsupported -->
      <img src="{{ asset('elitean/intro-left-poster.webp') }}" alt="Elitean Spa interior">
    </video>
  </div>

  <!-- Right: text content -->
  <div class="intro-content" id="introContent">
    <p class="intro-eyebrow" data-sr="1">Our Philosophy</p>
    <h2 class="intro-title" data-sr="2">
    At Elitean Spa Singapore, wellness is more than treatment — <span class="shimmer-phrase">it is an art</span>.
  </h2>

    <p class="intro-copy" data-sr="3">
      In the heart of Singapore, our sanctuary unveils world‑class therapies where
      Eastern traditions meet modern luxury. Each ritual is meticulously crafted
      to restore balance, vitality, and inner peace.
    </p>
    <button class="intro-cta" data-sr="4">Step Inside Elitean</button>
  </div>
</section>
<section class="section-rituals" id="rituals">
  <div class="rituals-header" data-rs="1">
    <h2 class="rituals-title">Timeless Rituals</h2>
    <div class="rituals-nav" data-rs="2">
    <button class="carousel-btn prev" aria-label="Previous" disabled>
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <button class="carousel-btn next" aria-label="Next">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
  </div>

  </div>
  <div class="rituals-track">
    <article class="ritual-card" data-rs="3">
      <img src="{{ asset('elitean/ritual-1.webp') }}" alt="Gold Rejuvenation Facial">
      <div class="card-overlay">
        <h3 class="card-title">Gold Rejuvenation Facial</h3>
        <p class="card-sub">A luxurious 24k gold-infused facial that revives radiance.</p>
      </div>
    </article>
    <article class="ritual-card" data-rs="4">
      <img src="{{ asset('elitean/ritual-2.webp') }}" alt="Holistic Massage Rituals">
      <div class="card-overlay">
        <h3 class="card-title">Holistic Massage Rituals</h3>
        <p class="card-sub">From Balinese to Deep Tissue, crafted for total relaxation.</p>
      </div>
    </article>
    <article class="ritual-card" data-rs="5">
      <img src="{{ asset('elitean/ritual-3.webp') }}" alt="Wellness Packages">
      <div class="card-overlay">
        <h3 class="card-title">Wellness Packages</h3>
        <p class="card-sub">Half-day or full-day indulgence with massage, facial & dining.</p>
      </div>
    </article>
    <article class="ritual-card" data-rs="6">
      <img src="{{ asset('elitean/ritual-4.webp') }}" alt="Couple’s Escape">
      <div class="card-overlay">
        <h3 class="card-title">Couple’s Escape</h3>
        <p class="card-sub">Private spa suite with exclusive treatments for two.</p>
      </div>
    </article>
    <!-- <article class="ritual-card" data-rs="6">
      <img src="{{ asset('elitean/ritual-4.webp') }}" alt="Couple’s Escape">
      <div class="card-overlay">
        <h3 class="card-title">Oriental Harmony Ritual</h3>
        <p class="card-sub">A fusion of ancient Eastern therapies that harmonize body, mind, and inner peace.</p>
      </div>
    </article> -->
  </div>
</section>
<section class="section-pillars" id="pillars">
  <h2 class="pillars-title" data-ps="1">Pillars of Excellence</h2>
  <div class="pillars-grid">
    <article class="pillar-card" data-ps="2">
      <img class="pillar-icon" src="{{ asset('elitean/pillar-1.svg') }}" alt="Elite Expertise">
      <h3 class="pillar-heading">Elite Expertise</h3>
      <p class="pillar-copy">Our handpicked therapists, trained in the world’s finest traditions, bring precision and artistry to every treatment.</p>
    </article>
    <article class="pillar-card" data-ps="3">
      <img class="pillar-icon" src="{{ asset('elitean/pillar-2.svg') }}" alt="Pure Indulgence">
      <h3 class="pillar-heading">Pure Indulgence</h3>
      <p class="pillar-copy">From gold-infused facials to organic elixirs, every ingredient is chosen to honor your body and elevate your spirit.</p>
    </article>
    <article class="pillar-card" data-ps="4">
      <img class="pillar-icon" src="{{ asset('elitean/pillar-3.svg') }}" alt="Urban Oasis">
      <h3 class="pillar-heading">Urban Oasis</h3>
      <p class="pillar-copy">Step into Elitean, where timeless serenity awaits — your private haven of luxury in the heart of Singapore.</p>
    </article>
  </div>
</section>
<section class="section-cinema" id="brand-reel">
  <video class="cinema-video" autoplay muted loop playsinline preload="auto" aria-label="Elitean brand reel" poster="{{ asset('elitean/brand-reel-poster.jpg') }}">
    <source src="{{ asset('elitean/brand-reel.webm') }}" type="video/webm">
    <source src="{{ asset('elitean/brand-reel.mp4') }}" type="video/mp4">
    <img src="{{ asset('elitean/brand-reel-poster.jpg') }}" alt="Elitean brand reel">
  </video>
  <div class="cinema-overlay" role="region" aria-label="Guest testimonial">
    <div class="cinema-card">
      <p class="cinema-quote">“The most luxurious spa experience I’ve ever had in Singapore. The attention to detail is unmatched.”</p>
      <p class="cinema-author">– Amanda L., Singapore</p>
    </div>
  </div>
</section>




  <script>function toggleMenu(){document.getElementById('navLinks').classList.toggle('active');}</script>

</body>
</html>

<script>
// Set navbar height CSS var on load (and enable global fade-in)
window.addEventListener('DOMContentLoaded',()=>{const b=document.querySelector('.navbar');if(b)document.documentElement.style.setProperty('--navH',b.offsetHeight+'px');document.body.classList.add('is-ready');});
// Update navbar height CSS var on resize
window.addEventListener('resize',()=>{const b=document.querySelector('.navbar');if(b)document.documentElement.style.setProperty('--navH',b.offsetHeight+'px');});
// Toggle mobile menu (recompute height each open/close)
function toggleMenu(){const b=document.querySelector('.navbar');if(b)document.documentElement.style.setProperty('--navH',b.offsetHeight+'px');document.getElementById('navLinks')?.classList.toggle('active');}
// On scroll: navbar opacity/blur toggle after 50px
window.addEventListener('scroll',()=>{const n=document.querySelector('.navbar');if(!n)return;window.scrollY>50?n.classList.add('scrolled'):n.classList.remove('scrolled');},{passive:true});
// Intro section scroll-reveal (animate once on view)
window.addEventListener('DOMContentLoaded',()=>{const el=document.getElementById('introContent');if(!el)return;const io=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){el.classList.add('is-visible');io.unobserve(el);}})},{root:null,threshold:.25});io.observe(el);});
// Rituals carousel: prev disabled at start; next enabled if overflow; disable at ends
window.addEventListener('DOMContentLoaded',()=>{const s=document.getElementById('rituals');if(!s)return;const t=s.querySelector('.rituals-track'),p=s.querySelector('.carousel-btn.prev'),n=s.querySelector('.carousel-btn.next');if(!t||!p||!n)return;const step=()=>t.querySelector('.ritual-card')?.getBoundingClientRect().width||320;const atStart=()=>Math.round(t.scrollLeft)<=0;const atEnd=()=>t.scrollWidth-t.clientWidth-Math.round(t.scrollLeft)<=1;const update=()=>{p.disabled=atStart();n.disabled=atEnd();};update();p.addEventListener('click',()=>t.scrollBy({left:-step(),behavior:'smooth'}));n.addEventListener('click',()=>t.scrollBy({left:step(),behavior:'smooth'}));t.addEventListener('scroll',()=>requestAnimationFrame(update),{passive:true});window.addEventListener('resize',update);});
// Rituals section staggered reveal (add .is-visible once)
window.addEventListener('DOMContentLoaded',()=>{const s=document.getElementById('rituals');if(!s)return;const o=new IntersectionObserver(e=>{e.forEach(r=>{if(r.isIntersecting){s.classList.add('is-visible');o.unobserve(s);}})},{threshold:.2});o.observe(s);});
window.addEventListener('DOMContentLoaded',()=>{const s=document.getElementById('pillars');if(!s)return;const io=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){s.classList.add('is-visible');io.unobserve(s);}})},{threshold:.2});io.observe(s);});
</script>
