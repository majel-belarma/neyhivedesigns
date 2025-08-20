<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Elitean Spa</title>

  <!-- Google Fonts (Literata normal + italic, Commissioner) -->
  <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@300;400;500;600&family=Literata:ital,opsz,wght@0,7..72,400;0,7..72,500;0,7..72,600;0,7..72,700;1,7..72,400;1,7..72,500;1,7..72,600;1,7..72,700&display=swap" rel="stylesheet">

  <style>
    :root{--brown:#1B130E;--text:#D9D9D9;--hero-title:#E7D3A8;--hero-text:#eaeaea;}
    *{box-sizing:border-box}
    body{margin:0;font-family:'Commissioner',sans-serif;color:var(--text);background:#1B130E}

    .navbar{position:relative;z-index:10;display:flex;align-items:center;justify-content:space-between;background:var(--brown);padding:14px 40px;}
    .logo{font-family:'Literata',serif;font-size:1.3rem;font-weight:500;color:var(--text);}
    .nav-links{display:flex;align-items:center;gap:24px;font-family:'Commissioner',sans-serif;}
    .nav-links a{color:var(--text);text-decoration:none;font-size:0.95rem;font-weight:400;transition:color .25s ease;}
    .nav-links a:hover{color:#fff;}
    .book-btn{border:1px solid #fff;background:transparent;color:var(--text);padding:6px 16px;font-size:0.95rem;font-weight:500;cursor:pointer;transition:all .25s ease;}
    .book-btn:hover{background:#fff;color:var(--brown);}
    .menu-toggle{display:none;color:var(--text);font-size:1.6rem;cursor:pointer;}

    .hero{position:relative;width:100%;height:95vh;overflow:hidden;display:flex;align-items:flex-start;justify-content:flex-start;padding:0 5%;}
    .hero-bg img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;z-index:0;display:block;}
    .hero .overlay{position:absolute;inset:0;background:rgba(0,0,0,.28);z-index:1;}

    /* TEXT GRID: [Serene | description] on row 1, [Luxury] spanning row 2 */
    .hero-content{position:relative;z-index:2;display:grid;grid-template-columns:auto minmax(38ch,50ch);grid-template-rows:auto auto;gap:clamp(8px,1.5vw,16px) clamp(16px,3vw,32px);align-items:start;color:#fff;align-self:flex-start;margin-top:120px;max-width:none;}
    .title-light{grid-column:1;grid-row:1;font-family:'Literata',serif;font-style:italic;color:var(--hero-title);font-size:clamp(3rem,10vw,200px);margin-left:clamp(40px,12vw,250px);line-height:0.2;}
    .hero-desc{grid-column:2;grid-row:1;margin:0 0 0 clamp(100px,12vw,240px);align-self:stretch;display:flex;align-items:center;justify-content:flex-start;height:100%;font-weight:300!important;font-size:16px;line-height:1.6;color:#B8AEA3;text-shadow:0 1px 2px rgba(0,0,0,.35);}
    .title-heavy{grid-column:1 / span 2;grid-row:2;margin:0;font-family:'Literata',serif;font-weight:500;color:var(--hero-title);font-size:clamp(4rem,18vw,450px);line-height:0.5;}

 /* Always-on luxe shimmer (light gold) */

    .image-overlay{position:absolute;inset:0;z-index:3;pointer-events:none;}
    .image-overlay img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;}

.section-intro{display:grid;grid-template-columns:1fr 1fr;min-height:72vh;background:#1B130E;}
.intro-media{position:relative;overflow:hidden;aspect-ratio:3/4;}
.intro-media video,.intro-media img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;filter:saturate(1.02) contrast(1.02);}
.intro-content{background:#221813;color:#D9D9D9;padding:clamp(28px,6vw,72px);display:flex;flex-direction:column;justify-content:center;}
.intro-eyebrow{font-size:.85rem;letter-spacing:.12em;text-transform:uppercase;color:#B8AEA3;margin:0 0 10px 0;}
.intro-title{font-family:'Literata',serif;font-size:clamp(1.8rem,3.6vw,2.6rem);line-height:1.3;color:#E7D3A8;margin:0 0 18px 0;font-style:italic;font-weight:400;}
.intro-copy{color:#C9C0B6;line-height:1.7;margin:0 0 28px 0;max-width:60ch;font-weight:300;}
.intro-cta{align-self:flex-start;border:1px solid #E7D3A8;background:transparent;color:#E7D3A8;padding:12px 20px;font-weight:500;font-size:.95rem;letter-spacing:.02em;cursor:pointer;transition:transform .2s ease,background .25s ease,color .25s ease,box-shadow .25s ease;}
.intro-cta:hover{background:#E7D3A8;color:#1B130E;transform:translateY(-1px);box-shadow:0 6px 24px rgba(231,211,168,.18);}
@media(max-width:900px){.section-intro{grid-template-columns:1fr;}.intro-media{order:2;aspect-ratio:16/12;height:auto;}.intro-content{order:1; padding: 50px 24px}}

    /* Mobile (≤768px): swap images, stack title, move desc below, adjust line-heights/sizes */
    @media(max-width:768px){
      .menu-toggle{display:block;}
      .nav-links{display:none;position:absolute;top:60px;right:0;background:var(--brown);width:220px;padding:20px;flex-direction:column;gap:16px;}
      .nav-links.active{display:flex;}
      .hero{height:85vh;padding:0 4%;}
      .hero-content{margin-top:130px;}
      .title-light{grid-column:1;grid-row:1;margin-left:74px;font-size:64px;line-height:0;}
      .title-heavy{grid-column:1;grid-row:2;font-size:120px;line-height:0.95;}
      .hero-desc{grid-column:1;grid-row:3;margin:32px 8px 0 8px;height:auto;align-self:start;justify-content:flex-start;font-size:clamp(0.95rem,3.8vw,1.05rem);line-height:1.5;}

      /* swap background to phone image */
      .hero-bg source{display:block;}
      .image-overlay source{display:block;}
    }


  </style>
  <style>
    /* ====== LUXE ANIMATIONS ====== */
:root{
  --gold-1: #e8d7a6;   /* soft champagne */
  --gold-2: #d4b56e;   /* warm light gold */
}

/* Smooth-on-load for the navbar */
.navbar{
  transform: translateY(-10px);
  opacity: 0;
  filter: blur(4px);
  transition: transform .8s ease, opacity .8s ease, filter .8s ease;
}
.is-ready .navbar{
  transform: translateY(0);
  opacity: 1;
  filter: blur(0);
}

/* Nav link underline sweep (gold) */
.nav-links a{
  position: relative;
  padding-bottom: 2px;
}
.nav-links a::after{
  content:"";
  position:absolute; left:0; bottom:-2px;
  height:2px; width:100%;
  background: linear-gradient(90deg, var(--gold-1), var(--gold-2));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform .45s ease;
}
.nav-links a:hover::after{ transform: scaleX(1); }

/* Book button: soft gold sheen on hover */
.book-btn{
  position: relative;
  overflow: hidden;
}
.book-btn::after{
  content:"";
  position:absolute; top:-120%; left:-30%;
  width:40%; height:300%;
  transform: rotate(25deg);
  background: linear-gradient(
    to right,
    rgba(255,255,255,0) 0%,
    rgba(255,255,255,.35) 50%,
    rgba(255,255,255,0) 100%
  );
  transition: transform .7s ease;
}
.book-btn:hover::after{
  transform: translateX(260%) rotate(25deg);
}


/* HERO titles & copy: gentle fade-up with slight letter-tracking */
/* ====== LUXE TEXT ANIMATIONS ONLY ====== */
.title-light,
.title-heavy,
.hero-desc {
  opacity: 0;
  transform: translateY(18px);
  letter-spacing: .01em;
  animation: fadeUp .9s cubic-bezier(.22,.61,.36,1) forwards;
}

.title-light { animation-delay: .15s; }
.hero-desc   { animation-delay: .35s; }
.title-heavy { animation-delay: .55s; }

@keyframes fadeUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}


/* Optional: gold accent on titles for a premium hint (no gradient fill) */
.title-light, .title-heavy{
  text-shadow:
    0 1px 0 rgba(0,0,0,.18),
    0 10px 40px rgba(0,0,0,.25);
}


/* Respect reduced motion */
@media (prefers-reduced-motion: reduce){
  .navbar,
  .title-light, .title-heavy, .hero-desc,
  .hero-bg img,
  .hero-content { 
    animation: none !important;
    transition: none !important;
    transform: none !important;
    filter: none !important;
  }
  .nav-links a::after,
  .book-btn::after{ transition: none !important; }
}

  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar">
    <div class="logo">Elitean Spa</div>
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    <div class="nav-links" id="navLinks">
      <a href="#services">Services</a>
      <a href="#contact">Contact</a>
      <button class="book-btn">Book</button>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero">
    <!-- Background image with mobile swap -->
    <picture class="hero-bg">
      <source media="(max-width: 768px)" srcset="{{ asset('elitean/elitean-banner-phone.png') }}">
      <img src="{{ asset('elitean/elitean-banner.png') }}" alt="Elitean Spa banner">
    </picture>

<div class="glow-layer">
  <div class="glow" style="--x:28%; --y:36%; --size:130px; --delay:0s;"></div>
  <div class="glow" style="--x:58%; --y:48%; --size:120px; --delay:.6s;"></div>
  <div class="glow" style="--x:42%; --y:62%; --size:140px; --delay:1.2s;"></div>
  <div class="glow" style="--x:72%; --y:32%; --size:110px; --delay:1.8s;"></div>
</div>

    <div class="overlay"></div>

    <!-- Grid-based content -->
    <div class="hero-content">
      <span class="title-light">Serene</span>
      <p class="hero-desc">Rejuvenate your body, calm your mind, and indulge in the finest spa rituals crafted exclusively for you.</p>
      <span class="title-heavy">Luxury</span>
    </div>

    <!-- Top overlay with mobile swap -->
    <picture class="image-overlay">
      <source media="(max-width: 768px)" srcset="{{ asset('elitean/elitean-banner-top-phone.png') }}">
      <img src="{{ asset('elitean/elitean-banner-top.png') }}" alt="Elitean Overlay">
    </picture>
  </section>

  <section class="section-intro">
  <!-- Left: video (autoplay, muted, loop, inline) -->
  <div class="intro-media">
    <video
      src="{{ asset('elitean/intro-left.mp4') }}"
      poster="{{ asset('elitean/intro-left-poster.jpg') }}"
      autoplay
      muted
      loop
      playsinline
      preload="auto"
      aria-label="Elitean Spa ambiance video">
      <!-- Fallback image if video unsupported -->
      <img src="{{ asset('elitean/intro-left-poster.jpg') }}" alt="Elitean Spa interior">
    </video>
  </div>

  <!-- Right: text content -->
  <div class="intro-content">
    <p class="intro-eyebrow">Our Philosophy</p>
    <h2 class="intro-title">
      At Elitean Spa Singapore, wellness is more than treatment — it is an art.
    </h2>
    <p class="intro-copy">
      In the heart of Singapore, our sanctuary unveils world‑class therapies where
      Eastern traditions meet modern luxury. Each ritual is meticulously crafted
      to restore balance, vitality, and inner peace.
    </p>
    <button class="intro-cta">Step Inside Elitean</button>
  </div>
</section>


  <script>function toggleMenu(){document.getElementById('navLinks').classList.toggle('active');}</script>

</body>
</html>

<script>
  function toggleMenu(){
    document.getElementById('navLinks').classList.toggle('active');
  }

  // Trigger fade-in animations on page load
  window.addEventListener('DOMContentLoaded', () => {
    document.body.classList.add('is-ready');
  });
</script>

