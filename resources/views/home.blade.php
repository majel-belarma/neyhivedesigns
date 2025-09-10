<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Neyhive Designs</title>
  <link rel="icon" type="image/png" href="images/neyhive/favicon.png">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-F8PM9NEGM1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-F8PM9NEGM1');
  </script>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "t8k9t1enjm");
</script>
  <!-- ===== Featured Image / SEO / Social Sharing ===== -->
  <meta name="description" content="Transforming outdated, cluttered websites into modern, user-friendly, high-converting designs for growing brands.">

  <!-- Open Graph (Facebook, LinkedIn, etc.) -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Neyhive Designs">
  <meta property="og:description" content="Transforming outdated, cluttered websites into modern, user-friendly, high-converting designs for growing brands.">
  <meta property="og:url" content="https://neyhivedesigns.com/">
  <meta property="og:site_name" content="Neyhive Designs">
  <meta property="og:image" content="https://neyhivedesigns.com/images/neyhive/og-cover.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Neyhive Designs">
  <meta name="twitter:description" content="Transforming outdated, cluttered websites into modern, user-friendly, high-converting designs for growing brands.">
  <meta name="twitter:image" content="https://neyhivedesigns.com/images/neyhive/og-cover.jpg">

  <!-- Optional: Apple/Android icons -->
  <link rel="apple-touch-icon" href="/images/neyhive/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/images/neyhive/favicon-32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/neyhive/favicon-16.png">


  <style>
    /* =========================
       1) DESIGN TOKENS
       ========================= */
    :root {
      --bg-dark:#3b2717; --bg-mid:#5a3a22; --bg-lite:#8d623f;
      --text:#2a1b0d; --muted:#5a4638;
      --gold-1:#a77a2a; --gold-2:#f3d776; --gold-3:#b88a32;
      --beige-1:#F6EFE8; --beige-2:#EFE6DE; --beige-3:#E7DBD1;
      --font-display:'TT Ramillas Trl', ui-serif, Georgia, serif;
      --font-body:'TT Interphases Pro', system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      --wrap:1200px;
      --nav-h:64px;
    }

    /* =========================
       2) BASE / RESET
       ========================= */
    body { margin:0; font-family:var(--font-body); background:#fff; color:#111; }
    a { color:inherit; text-decoration:none; }
    img { max-width:100%; display:block; height:auto; }

    /* =========================
       3) HERO (layout + background)
       ========================= */
    .nh-hero {
      display:grid; grid-template-rows:auto 1fr;
      position:relative; overflow:clip;
      padding-top:var(--nav-h);
      background:
        radial-gradient(1200px 70% at 70% 30%, rgba(255,255,255,.06), transparent 60%),
        radial-gradient(600px 600px at 80% 120%, rgba(255,173,41,0.3) 0%, rgba(27,19,14,0) 100%),
        linear-gradient(135deg, var(--bg-dark) 0%, var(--bg-mid) 45%, var(--bg-lite) 100%);
      color:#f6efe8;
    }

    /* =========================
       4) TOP NAVIGATION
       ========================= */
    .nh-nav-wrap { position:fixed; top:0; left:0; right:0; z-index:1000; transition:background .25s ease, backdrop-filter .25s ease, box-shadow .25s ease; }
    .nh-nav-wrap.is-scrolled { background:rgba(68,48,34,0.85); backdrop-filter:saturate(100%) blur(10px); box-shadow:0 10px 30px rgba(0,0,0,.25); }
    .nh-nav { position:relative; max-width:var(--wrap); margin:0 auto; padding:12px clamp(16px,3vw,28px); display:flex; align-items:center; justify-content:space-between; }
    .nh-brand { display:inline-flex; align-items:center; font-weight:700; }
    .nh-nav__toggle { display:none; }
    .nh-nav__links { display:flex; gap:24px; align-items:center; }
    .nh-nav__links a { position:relative; font-weight:500; transition:color .25s ease; }
    .nh-nav__links a::after { content:""; position:absolute; left:0; bottom:-4px; width:0; height:2px; background:var(--gold-2); transition:width .25s ease; }
    .nh-nav__links a:hover { color:var(--gold-2); }
    .nh-nav__links a:hover::after { width:100%; }

    /* =========================
       6) BUTTONS
       ========================= */
    .nh-btn { cursor:pointer; border:0; padding:12px 18px; font-weight:600; border-radius:0; position:relative; overflow:hidden; transition:transform .2s ease, box-shadow .25s ease, background-position .3s ease, filter .25s ease; will-change:transform, box-shadow, background-position; }
    .nh-btn--outline { border:1px solid rgba(255,255,255,.18); background:rgba(255,255,255,.05); color:#f6efe8; }
    .nh-btn--outline:hover { background:rgba(255,255,255,.12); }
    .nh-btn--outline:active { transform:scale(.96); box-shadow:0 2px 6px rgba(0,0,0,.15); }

    .nh-btn--secondary { border:1px solid #443022; color:#443022; padding:16px 28px; text-align:center; background:transparent; position:relative; overflow:hidden; transition:color .3s ease, transform .2s ease, box-shadow .25s ease; }
    .nh-btn--secondary::before { content:""; position:absolute; inset:0; border-radius:inherit; padding:1px; mask-composite:exclude; opacity:0; transition:opacity .35s ease; }
    .nh-btn--secondary:hover::before { opacity:1; }
    .nh-btn--secondary:hover { transform:translateY(-2px); box-shadow:0 6px 14px rgba(68,48,34,.15); }
    .nh-btn--secondary:active { transform:scale(.96); box-shadow:0 3px 8px rgba(68,48,34,.12); }

    .nh-btn--gold { padding:18px 32px; background:linear-gradient(105deg, var(--gold-1), var(--gold-2) 45%, var(--gold-3)); color:#2a1b0d; background-size:200%; background-position:left; box-shadow:0 2px 0 rgba(0,0,0,.06) inset; }
    .nh-btn--gold:hover { background-position:right; transform:translateY(-2px); box-shadow:0 6px 16px rgba(167,122,42,.35); }
    .nh-btn--gold:active { transform:scale(.96); box-shadow:0 3px 10px rgba(167,122,42,.25); filter:saturate(105%); }

    .nh-btn--coffee { background:linear-gradient(45deg, #4B2A1B 0%, #805A40 100%); color:#f6efe8; border:1px solid rgba(0,0,0,.1); padding:18px 32px; border-radius:0; }
    .nh-btn--coffee:hover { transform:translateY(-2px); box-shadow:0 6px 16px rgba(75,42,27,.35); }
    .nh-btn--coffee:active { transform:scale(.96); box-shadow:0 3px 10px rgba(75,42,27,.25); }

    /* =========================
       5) HERO CONTENT
       ========================= */
    .nh-wrap { max-width:var(--wrap); margin:0 auto; padding:0 clamp(16px,3vw,28px); }
    .nh-hero__grid { display:grid; align-items:center; gap:clamp(28px,4vw,56px); grid-template-columns:1.1fr .9fr; min-height:82vh; }

    h1 { font-family:var(--font-display); line-height:0.3; margin:.2em 0 .1em; font-weight:400; font-size:clamp(3.4rem,6.4vw,6rem); }
    .nh-accent { line-height:1.2; font-family:var(--font-display); display:block; font-size:clamp(4rem,11vw,7.25rem); font-weight:600; letter-spacing:.01em; font-style:italic; }
    .nh-accent-row { display:flex; align-items:center; gap:clamp(8px,1.4vw,18px); }
    .nh-arrow { margin-top:12px; }
    .nh-lead { margin-top:1rem; font-family:var(--font-body); max-width:45ch; font-size:1.1rem; line-height:1.7; color:#e6d9cc; font-weight:400; letter-spacing:.2px; }
    .nh-cta-row { margin-top:4rem; }
    .nh-banner-image { display:flex; align-items:flex-end; justify-content:flex-end; height:100%; width:580px; }
    .nh-portrait { margin:0; width:1000px; }

    h2 { font-family:var(--font-display); font-size:clamp(1.9rem,4vw,2.8rem); font-weight:500; line-height:1.25; }
    h2 em { font-style:italic; color:#664833; font-weight:600; }
    h3 { font-size:1.4rem; font-weight:600; font-family:var(--font-display); }
    p { color:#443429; line-height:1.6; margin:1rem 0 2rem; font-size:1.05rem; }

    /* =========================
       7) COMPARE
       ========================= */
    .nh-compare { padding:clamp(48px,8vw,96px) 0; }
    .nh-compare .nh-wrap { max-width:1200px; }
    .nh-compare h2 { text-align:center; margin:0 0 clamp(24px,4vw,40px); }

    /* =========================
       8) BENEFITS
       ========================= */
    .nh-benefits { padding:clamp(56px,8vw,110px) 0; background:#fff; color:var(--text); }
    .nh-benefits .nh-wrap { max-width:var(--wrap); }
    .nh-benefits__header { display:grid; grid-template-columns:1.2fr .8fr; align-items:center; gap:clamp(12px,3vw,32px); margin-bottom:clamp(28px,4.5vw,52px); }
    .nh-benefits__title { margin:0; }
    .nh-benefits__kicker { justify-self:end; text-align:right; color:var(--muted); max-width:28ch; margin:0; }
    .nh-benefits__grid { display:grid; grid-template-columns:repeat(3,1fr); gap:clamp(14px,2.8vw,26px); }
    .nh-benefit { background:#FAF7F4; padding:36px 30px; }
    .nh-benefit__icon { width:80px; height:80px; background:#F5EEEA; display:grid; place-items:center; margin-bottom:14px; }
    .nh-benefit__icon svg { width:26px; height:26px; display:block; stroke:var(--gold-1); }
    .nh-benefit h3 { margin:1.2rem 0 .5rem; }
    .nh-benefit p { margin:.25rem 0 0; }

    /* =========================
       9) TRANSFORM SLAB
       ========================= */
    .nh-transform { background:radial-gradient(900px 500px at 15% 30%, rgba(0,0,0,.04), transparent 60%), linear-gradient(135deg, #FCFAF8 0%, #ECE1D9 100%); color:var(--text); padding:clamp(56px,8vw,96px) 0; }
    .nh-transform .nh-wrap { max-width:var(--wrap); }
    .nh-transform__grid { display:grid; grid-template-columns:0.9fr 0.85fr; align-items:center; gap:clamp(20px,4vw,80px); grid-template-areas:"media copy"; }
    .nh-transform__media { grid-area:media; aspect-ratio:1/1; margin:0; }
    .nh-transform__media img { width:100%; }
    .nh-transform__copy { grid-area:copy; }
    .nh-transform__eyebrow { display:none; }
    .nh-transform__lead { max-width:60ch; }
    .nh-transform__cta { display:inline-flex; }
    .nh-transform__title { margin:0; }

    /* =========================
       10) SCROLL ANIMATIONS
       ========================= */
    .nh-reveal { opacity:0; transform:translate3d(0,24px,0); transition:opacity .7s ease, transform .7s ease; will-change:opacity, transform; }
    .nh-reveal.is-visible { opacity:1; transform:translate3d(0,0,0); }
    .nh-reveal-stagger > * { opacity:0; transform:translate3d(0,18px,0); transition:opacity .6s ease, transform .6s ease; }
    .nh-reveal-stagger.is-visible > * { opacity:1; transform:none; }
    .nh-reveal-stagger.is-visible > *:nth-child(1) { transition-delay:.05s; }
    .nh-reveal-stagger.is-visible > *:nth-child(2) { transition-delay:.12s; }
    .nh-reveal-stagger.is-visible > *:nth-child(3) { transition-delay:.18s; }
    .nh-reveal-stagger.is-visible > *:nth-child(4) { transition-delay:.24s; }
    .nh-reveal-stagger.is-visible > *:nth-child(5) { transition-delay:.30s; }
    .nh-reveal-stagger.is-visible > *:nth-child(6) { transition-delay:.36s; }
    @media (prefers-reduced-motion:reduce) {
      .nh-reveal,
      .nh-reveal-stagger > * { transition:none!important; transform:none!important; opacity:1!important; }
    }

    /* =========================
       12) PROJECTS GRID
       ========================= */
    .nh-projects { padding:clamp(56px,8vw,96px) 0; background:#fff; color:var(--text); }
    .nh-projects .nh-wrap { max-width:var(--wrap); }
    .nh-projects__title { text-align:center; margin:0 0 clamp(28px,4vw,44px); }
    .nh-projects__title em { color:#664833; font-style:italic; font-weight:600; }
    .nh-projects__grid { display:grid; grid-template-columns:repeat(2,1fr); gap:clamp(16px,2.8vw,24px); }
    .nh-project { position:relative; overflow:hidden; background:#EDEAE7; display:grid; grid-template-rows:1fr auto; min-height:240px; cursor:zoom-in; }
    .nh-project__media { aspect-ratio:16/10; background:#dcd6d0; overflow:hidden; }
    .nh-project__media img { width:100%; height:100%; object-fit:cover; transform:scale(1); transform-origin:center center; transition:transform .45s cubic-bezier(.2,.7,.2,1); will-change:transform; }
    .nh-project__label { position:absolute; left:0; right:0; bottom:0; background:rgba(68,48,34,.85); color:#fff; display:flex; justify-content:space-between; align-items:center; padding:14px 20px; font-weight:500; letter-spacing:.2px; }
    .nh-project__label img { height:20px; width:auto; display:block; }
    .nh-project:hover .nh-project__media img,
    .nh-project:focus-within .nh-project__media img { transform:scale(1.06); }
    @media (prefers-reduced-motion:reduce) {
      .nh-project__media img { transition:none!important; transform:none!important; }
    }

    /* =========================
       14) PRICING
       ========================= */
    .nh-pricing { padding:clamp(56px,8vw,96px) 0; background:linear-gradient(180deg,#fff 0%, #FBF7F2 100%); color:var(--text); }
    .nh-pricing .nh-wrap { max-width:var(--wrap); }
    .nh-pricing__eyebrow { letter-spacing:.06em; text-transform:uppercase; color:#7b685a; font-weight:600; font-size:.9rem; margin:0 0 8px; text-align:center; }
    .nh-pricing__title { margin:0 0 clamp(24px,3vw,36px); text-align:left; max-width:700px; }
    .nh-pricing__grid { display:grid; grid-template-columns:repeat(3,1fr); gap:clamp(16px,2.8vw,26px); align-items:stretch; }

    .nh-price-card { background:#fff; border:1px solid rgb(244, 237, 232); box-shadow:0 6px 20px rgba(0,0,0,.06); padding:28px 24px; display:flex; flex-direction:column; transition:transform .3s ease, box-shadow .3s ease; }
    .nh-price-card:hover,
    .nh-price-card:focus-within { transform:scale(1.03); box-shadow:0 12px 28px rgba(0,0,0,.12); }
    .nh-price-card--featured { background:linear-gradient(180deg, #4c3321 0%, #3b2717 100%); color:#f6efe8; border-color:transparent; box-shadow:0 22px 40px rgba(59,39,23,.35); }
    .nh-price-card__eyebrow { display:flex; align-items:center; gap:10px; color:#8a6b55; font-weight:700; margin:0 0 8px; }
    .nh-price-card__eyebrow img { width:50px; }
    .nh-price-card--featured .nh-price-card__eyebrow { color:#f3d776; }
    .nh-price-card__title { font-family:var(--font-display); font-size:1.4rem; margin:.2rem 0 0; }
    .nh-price-card__desc { color:#6b5546; margin:.25rem 0 1rem; font-size:.98rem; }
    .nh-price-card--featured .nh-price-card__desc { color:#e8dacb; }
    .nh-price { font-family:var(--font-display); font-size:2rem; font-weight:600; margin:.25rem 0 1rem; }
    .nh-price--white { color:#fff; }
    .nh-price small { font-weight:500; font-size:1rem; color:#7a6759; margin-right:4px; margin-top:-4px; }
    .nh-price-card--featured .nh-price small { color:#e9d7bf; }
    .nh-badge { margin-left:auto; font-size:.78rem; padding:6px 10px; border-radius:999px; background:linear-gradient(105deg, var(--gold-1), var(--gold-2) 45%, var(--gold-3)); color:#2a1b0d; font-weight:700; }
    ul.nh-features { list-style:none; padding:0; margin:14px 0 22px; display:grid; gap:10px; }
    .nh-features li { display:grid; grid-template-columns:24px 1fr; gap:10px; align-items:start; }
    .nh-feature__icon { width:24px; height:24px; border-radius:999px; background:#efe6de; display:grid; place-items:center; color:#7a5b44; font-weight:800; }
    .nh-price-card--featured .nh-feature__icon { background:rgba(255,255,255,.12); color:#f3d776; }
    .nh-price-card .nh-btn { margin-top:auto; }
    .nh-price-card--featured .nh-btn { text-align:center; }

    /* =========================
       11) RESPONSIVE
       ========================= */
    @media (max-width:980px) {
      .nh-hero__grid { grid-template-columns:1fr; min-height:65vh; }
      .nh-portrait { margin:0 auto; }
      .nh-nav { flex-wrap:wrap; row-gap:8px; padding:10px clamp(16px,3vw,24px); }
      .nh-nav__links { flex:1 1 100%; display:flex; justify-content:space-between; gap:14px; }
      .nh-banner-image { display:none; }
      .nh-wrap { padding:0 16px; }
      .nh-projects__grid { grid-template-columns:1fr 1fr; }
      .nh-pricing__grid { grid-template-columns:1fr; }
      .nh-price-card--featured { order:0; }
    }
    @media (max-width:720px) {
      .nh-transform__grid { grid-template-columns:1fr; grid-template-areas:"copy""media"; text-align:left; }
      .nh-transform__media { max-width:100%; margin-top:20px; }

      .nh-nav__toggle { display:inline-flex; position:relative; width:40px; height:40px; background:none; border:none; color:#fff; align-items:center; justify-content:center; cursor:pointer; z-index:3; }
      .nh-nav__burger,
      .nh-nav__burger::before,
      .nh-nav__burger::after { content:""; display:block; width:20px; height:2px; background:#f6efe8; position:absolute; transition:transform .2s ease, opacity .2s ease, background .2s ease; }
      .nh-nav__burger { transform:translateY(0); }
      .nh-nav__burger::before { transform:translateY(-6px); }
      .nh-nav__burger::after { transform:translateY(6px); }

      .nh-nav.is-open .nh-nav__burger { background:transparent; }
      .nh-nav.is-open .nh-nav__burger::before { transform:translateY(0) rotate(45deg); }
      .nh-nav.is-open .nh-nav__burger::after { transform:translateY(0) rotate(-45deg); }

      .nh-nav__links { position:absolute; top:100%; left:0; right:0; display:flex; flex-direction:column; gap:12px; padding:16px clamp(16px,4vw,24px); background:rgba(24,16,10,.78); backdrop-filter:saturate(140%) blur(10px); border-bottom:1px solid rgba(255,255,255,.08); transform-origin:top; transform:scaleY(0); opacity:0; pointer-events:none; transition:transform .18s ease, opacity .18s ease; z-index:1; }
      .nh-nav.is-open .nh-nav__links { transform:scaleY(1); opacity:1; pointer-events:auto; }

      .nh-nav__links a { padding:8px 0; display:block; }
      .nh-nav__links .nh-btn { padding:12px 16px; }
      .nh-nav__links .nh-btn.nh-btn--outline { line-height:1.1; }

      .nh-projects__grid { grid-template-columns:1fr; }
    }

    /* =========================
       13) PROJECT MODAL
       ========================= */
    body.modal-open { overflow:hidden; }
    .nh-modal { position:fixed; inset:0; display:none; align-items:center; justify-content:center; background:rgba(0,0,0,.7); backdrop-filter:blur(2px); z-index:2000; }
    .nh-modal.is-open { display:flex; }
    .nh-modal__dialog { position:relative; max-width:min(92vw, 1200px); max-height:92vh; outline:none; }
    .nh-modal__img { max-width:100%; max-height:92vh; object-fit:contain; box-shadow:0 12px 36px rgba(0,0,0,.5); background:#111; }
    .nh-modal__close { position:absolute; top:10px; right:10px; border:0; background:rgba(0,0,0,.55); color:#fff; width:40px; height:40px; cursor:pointer; display:grid; place-items:center; font-size:24px; line-height:1; transition:background .2s ease, transform .12s ease; }
    .nh-modal__close:hover { background:rgba(0,0,0,.75); transform:translateY(-1px); }
    .nh-modal__close:active { transform:scale(.98); }
    .nh-project[role="button"] { outline:none; }

    /* =========================
       15) CTA SLAB
       ========================= */
    .nh-cta-slab {
      padding:clamp(56px,8vw,100px) 0;
      background:
        radial-gradient(900px 420px at 18% 0%, rgba(243,215,118,.10), transparent 60%),
        linear-gradient(135deg, #FAF8F6 0%, #EFE3D9 100%);
      color:var(--text);
      text-align:center;
    }
    .nh-cta-slab__title { max-width:700px; margin:0 auto; }
    .nh-cta-slab__desc { max-width:700px; margin:16px auto 48px; height:auto; }

    /* =========================
       16) DARK FOOTER
       ========================= */
    .nh-site-footer {
      background:#2a1b0d;
      background-image:
        radial-gradient(900px 380px at 20% 0%, rgba(243,215,118,.08), transparent 65%),
        linear-gradient(180deg, #3b2717 0%, #2a1b0d 100%);
      color:#f6efe8;
      padding:40px 0 48px;
      border-top:1px solid rgba(255,255,255,.08);
    }
    .nh-site-footer .nh-wrap { max-width:var(--wrap); }
    .nh-footer__top { display:flex; align-items:center; justify-content:space-between; gap:20px; margin-bottom:18px; }
    .nh-footer__brand img { height:32px; width:auto; display:block; }
    .nh-footer__nav { display:flex; gap:20px; flex-wrap:wrap; }
    .nh-footer__nav a { color:#e2d6c8; font-weight:500; letter-spacing:.2px; position:relative; transition:color .25s ease; }
    .nh-footer__nav a:hover,
    .nh-footer__nav a:focus-visible { color:var(--gold-2); }
    .nh-footer__bottom { display:flex; align-items:center; justify-content:space-between; gap:16px; border-top:1px solid rgba(255,255,255,.18); padding-top:18px; font-size:.95rem; color:#f6efe8; }
    .nh-footer__copy,
    .nh-footer__credit { margin:0; color:#57493F; }

    @media (max-width:720px) {
      .nh-footer__top { flex-direction:column; align-items:flex-start; gap:16px; }
      .nh-footer__bottom { flex-direction:column; align-items:flex-start; gap:8px; }
    }
  </style>
</head>

<body>
  <!-- =========================
       HEADER / HERO
       ========================= -->
  <header class="nh-hero">
    <div class="nh-nav-wrap">
      <nav class="nh-nav" role="navigation" aria-label="Primary">
        <a class="nh-brand" href="#">
          <img src="{{ asset('images/neyhive/logo.svg') }}" alt="Logo" />
        </a>

        <!-- Mobile toggle button -->
        <button class="nh-nav__toggle" aria-expanded="false" aria-controls="primary-links" aria-label="Open menu">
          <span class="nh-nav__burger"></span>
        </button>

        <!-- Links -->
        <div id="primary-links" class="nh-nav__links">
          <a href="#about">About</a>
          <a href="#projects">Projects</a>
          <a href="#services">Services</a>
          <a class="nh-btn nh-btn--outline" href="https://calendly.com/neyhivedesigns/30min">Book a call</a>
        </div>
      </nav>
    </div>

    <div class="nh-wrap">
      <section class="nh-hero__grid">
        <div class="nh-hero__copy nh-reveal">
          <h1>Redesign for</h1>
          <div class="nh-accent-row">
            <span class="nh-accent">success</span>
            <span class="nh-arrow"><img src="/images/neyhive/arrow.svg" alt="" /></span>
          </div>
          <p class="nh-lead">Transforming outdated, cluttered websites into modern, user-friendly, and high-performing designs for growing brands.</p>
          <div class="nh-cta-row">
            <a class="nh-btn nh-btn--gold" href="https://calendly.com/neyhivedesigns/30min">Book a Discovery Call</a>
          </div>
        </div>

        <div class="nh-banner-image nh-reveal" style="transition-delay:.15s">
          <img class="nh-portrait" src="/images/neyhive/majel.webp" alt="Smiling designer in a white blazer" />
        </div>
      </section>
    </div>
  </header>

  <!-- =========================
       MAIN
       ========================= -->
  <main>
    <!-- Problem/Solution (Compare) -->
    <section id="compare" class="nh-compare">
      <div class="nh-wrap nh-reveal">
        <h2>Is Your <em>Website</em> Outdated and<br />Not Converting?</h2>
        <div class="nh-ps-image">
          <img src="/images/neyhive/problem-solution.webp" alt="Problem vs Solution comparison" />
        </div>
      </div>
    </section>

    <!-- Benefits -->
    <section id="benefits" class="nh-benefits" aria-labelledby="benefits-title">
      <div class="nh-wrap">
        <header class="nh-benefits__header nh-reveal">
          <h2 id="benefits-title" class="nh-benefits__title">
            Because Every Successful Brand
            Deserves a <em>Better Design</em>
          </h2>
          <p class="nh-benefits__kicker">What your redesign includes — built to grow your brand.</p>
        </header>

        <div class="nh-benefits__grid nh-reveal-stagger">
          <!-- 1 -->
          <article class="nh-benefit">
            <div class="nh-benefit__icon" aria-hidden="true">
              <img src="{{ asset('images/neyhive/benefit-1.svg') }}" alt="Logo" />
            </div>
            <div class="nh-benefit__text">
              <h3>Custom Website Redesign</h3>
              <p>I redesign your website with a custom look that aligns with your brand and goals.</p>
            </div>
          </article>

          <!-- 2 -->
          <article class="nh-benefit">
            <div class="nh-benefit__icon" aria-hidden="true">
              <img src="{{ asset('images/neyhive/benefit-2.svg') }}" alt="Logo" />
            </div>
            <div class="nh-benefit__text">
              <h3>Best User Experience</h3>
              <p>I craft seamless user experiences that feel effortless and keep visitors engaged.</p>
            </div>
          </article>

          <!-- 3 -->
          <article class="nh-benefit">
            <div class="nh-benefit__icon" aria-hidden="true">
              <img src="{{ asset('images/neyhive/benefit-3.svg') }}" alt="Logo" />
            </div>
            <div class="nh-benefit__text">
              <h3>Conversion-Focused</h3>
              <p>I design pages that guide visitors to take action and boost conversions.</p>
            </div>
          </article>

          <!-- 4 -->
          <article class="nh-benefit">
            <div class="nh-benefit__icon" aria-hidden="true">
              <img src="{{ asset('images/neyhive/benefit-4.svg') }}" alt="Logo" />
            </div>
            <div class="nh-benefit__text">
              <h3>Mobile-Responsive</h3>
              <p>I ensure your website looks and works flawlessly on all screen sizes.</p>
            </div>
          </article>

          <!-- 5 -->
          <article class="nh-benefit">
            <div class="nh-benefit__icon" aria-hidden="true">
              <img src="{{ asset('images/neyhive/benefit-5.svg') }}" alt="Logo" />
            </div>
            <div class="nh-benefit__text">
              <h3>SEO-Friendly</h3>
              <p>I redesign with clean structure to help your site rank better on search engines.</p>
            </div>
          </article>

          <!-- 6 -->
          <article class="nh-benefit">
            <div class="nh-benefit__icon" aria-hidden="true">
              <img src="{{ asset('images/neyhive/benefit-6.svg') }}" alt="Logo" />
            </div>
            <div class="nh-benefit__text">
              <h3>Brand Alignment</h3>
              <p>I create designs that consistently reflect your brand’s voice, style, and identity.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Transform CTA -->
    <section id="transform" class="nh-transform" aria-labelledby="transform-title">
      <div class="nh-wrap">
        <div class="nh-transform__grid">
          <figure class="nh-transform__media nh-reveal">
            <img src="/images/neyhive/majel-2.webp" alt="Designer presenting a laptop" />
          </figure>

          <div class="nh-transform__copy nh-reveal" style="transition-delay:.12s">
            <h2 id="transform-title" class="nh-transform__title">
              I Help Growing Brands<br /><em>Transform</em> Their Websites
            </h2>
            <p class="nh-transform__lead">
              Your website should do more than exist — it should impress, connect, and convert.
              I redesign outdated sites into modern, high-impact platforms that elevate your brand and grow your business.
            </p>
            <div class="nh-transform__cta">
              <a class="nh-btn nh-btn--coffee" href="https://calendly.com/neyhivedesigns/30min">Book a Discovery Call</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Tailored Projects -->
    <section id="projects" class="nh-projects" aria-labelledby="projects-title">
      <div class="nh-wrap">
        <h2 id="projects-title" class="nh-projects__title"><em>Tailored</em> for Brands Like Yours</h2>

        <div class="nh-projects__grid nh-reveal-stagger">
          <!-- 1 -->
          <article class="nh-project">
            <div class="nh-project__media" aria-hidden="true">
              <img src="/images/neyhive/portfolio-1.webp" alt="Modern Brand Website preview" />
            </div>
            <div class="nh-project__label"><span>Modern Brand Website</span><span aria-hidden="true"><img src="/images/neyhive/right-arrow.svg" alt="" /></span></div>
          </article>

          <!-- 2 -->
          <article class="nh-project">
            <div class="nh-project__media" aria-hidden="true">
              <img src="/images/neyhive/portfolio-2.webp" alt="Personal Brand Website preview" />
            </div>
            <div class="nh-project__label"><span>Personal Brand Website</span><span aria-hidden="true"><img src="/images/neyhive/right-arrow.svg" alt="" /></span></div>
          </article>

          <!-- 3 -->
          <article class="nh-project">
            <div class="nh-project__media" aria-hidden="true">
              <img src="/images/neyhive/portfolio-3.webp" alt="Garden Wedding Website preview" />
            </div>
            <div class="nh-project__label"><span>Garden Wedding Website</span><span aria-hidden="true"><img src="/images/neyhive/right-arrow.svg" alt="" /></span></div>
          </article>

          <!-- 4 -->
          <article class="nh-project">
            <div class="nh-project__media" aria-hidden="true">
              <img src="/images/neyhive/portfolio-4.webp" alt="Educational App preview" />
            </div>
            <div class="nh-project__label"><span>Educational App</span><span aria-hidden="true"><img src="/images/neyhive/right-arrow.svg" alt="" /></span></div>
          </article>

          <!-- 5 -->
          <article class="nh-project">
            <div class="nh-project__media" aria-hidden="true">
              <img src="/images/neyhive/portfolio-5.webp" alt="Online Booking App preview" />
            </div>
            <div class="nh-project__label"><span>Online Booking App</span><span aria-hidden="true"><img src="/images/neyhive/right-arrow.svg" alt="" /></span></div>
          </article>

          <!-- 6 -->
          <article class="nh-project">
            <div class="nh-project__media" aria-hidden="true">
              <img src="/images/neyhive/portfolio-6.webp" alt="Online Plant Store preview" />
            </div>
            <div class="nh-project__label"><span>Online Plant Store</span><span aria-hidden="true"><img src="/images/neyhive/right-arrow.svg" alt="" /></span></div>
          </article>
        </div>
      </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="nh-pricing" aria-labelledby="pricing-title">
      <div class="nh-wrap">
        <h2 id="pricing-title" class="nh-pricing__title"><em>Premium</em> Web Redesign Packages for Growing Brands</h2>

        <div class="nh-pricing__grid nh-reveal-stagger">
          <!-- Essentials -->
          <article class="nh-price-card" aria-label="Essentials Package">
            <div class="nh-price-card__eyebrow">
              <span aria-hidden="true"><img src="/images/neyhive/package-1.svg" alt="" /></span>
            </div>
            <h3 class="nh-price-card__title">Hive Foundation</h3>
            <p class="nh-price-card__desc">For businesses needing a professional redesign that builds credibility.</p>
            <p class="nh-price"><small>Starting at </small>$3,000</p>
            <ul class="nh-features">
              <li><img src="/images/neyhive/check.svg" alt="" /><span>Website redesign (up to 5 core pages)</span></li>
              <li><img src="/images/neyhive/check.svg" alt="" /><span>Mobile-responsive & performance optimized</span></li>
              <li><img src="/images/neyhive/check.svg" alt="" /><span>Conversion-focused homepage</span></li>
              <li><img src="/images/neyhive/check.svg" alt="" /><span>Essential SEO setup (structure, meta, sitemap)</span></li>
            </ul>
            <a class="nh-btn nh-btn--secondary" href="https://calendly.com/neyhivedesigns/30min">Book Your Free Consultation</a>
          </article>

          <!-- Growth (Featured) -->
          <article class="nh-price-card nh-price-card--featured" aria-label="Growth Package">
            <div class="nh-price-card__eyebrow">
              <span aria-hidden="true"><img src="/images/neyhive/package-2.svg" alt="" /></span>
              <span class="nh-badge">Most Popular</span>
            </div>
            <h3 class="nh-price-card__title">Golden Hive</h3>
            <p class="nh-price-card__desc">For brands that want a growth-ready website designed to convert.</p>
            <p class="nh-price nh-price--white"><small>Starting at </small>$7,500</p>
            <ul class="nh-features">
              <li><img src="/images/neyhive/check-2.svg" alt="" /><span>Website redesign (up to 12 pages)</span></li>
              <li><img src="/images/neyhive/check-2.svg" alt="" /><span>Strategic layouts & refined messaging</span></li>
              <li><img src="/images/neyhive/check-2.svg" alt="" /><span>Blog & content hub for authority</span></li>
              <li><img src="/images/neyhive/check-2.svg" alt="" /><span>Custom brand-aligned visuals</span></li>
              <li><img src="/images/neyhive/check-2.svg" alt="" /><span>30-day post-launch support</span></li>
            </ul>
            <a class="nh-btn nh-btn--gold" href="https://calendly.com/neyhivedesigns/30min">Start Your Growth Journey</a>
          </article>

          <!-- Scale -->
          <article class="nh-price-card" aria-label="Scale Package">
            <div class="nh-price-card__eyebrow">
              <span aria-hidden="true"><img src="/images/neyhive/package-3.svg" alt="" /></span>
            </div>
            <h3 class="nh-price-card__title">Hive Growth Partnership</h3>
            <p class="nh-price-card__desc">For scaling businesses who want a strategic partner, not just a redesign.</p>
            <p class="nh-price"><small>Starting at </small>$15,000</p>
            <ul class="nh-features">
              <li><img src="/images/neyhive/check.svg" alt="" /><span>Complete website redesign (no page limits)</span></li>
              <li><img src="/images/neyhive/check.svg" alt="" /><span>Conversion funnels & lead capture systems</span></li>
              <li><img src="/images/neyhive/check.svg" alt="" /><span>Continuous optimization & A/B testing</span></li>
              <li><img src="/images/neyhive/check.svg" alt="" /><span>Advanced integrations (CRM, automation, booking)</span></li>
              <li><img src="/images/neyhive/check.svg" alt="" /><span>Dedicated priority support</span></li>
            </ul>
            <a class="nh-btn nh-btn--secondary" href="https://calendly.com/neyhivedesigns/30min">Apply for Partnership</a>
          </article>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section id="cta" class="nh-cta-slab" aria-labelledby="cta-title">
      <div class="nh-wrap nh-reveal">
        <h2 id="cta-title" class="nh-cta-slab__title">Transform Your Website Into a <em>True Reflection</em> of Your Brand</h2>
        <p class="nh-cta-slab__desc">
          Your website should do more than exist — it should represent your brand at its best.
          Let’s create a modern, elegant, and conversion-ready website that truly reflects who you are.
        </p>
        <div class="nh-cta-slab__actions">
          <a class="nh-btn nh-btn--coffee" href="https://calendly.com/neyhivedesigns/30min">Let’s Talk About Your Website</a>
        </div>
      </div>
    </section>
  </main>

  <!-- =========================
       FOOTER
       ========================= -->
  <footer class="nh-site-footer" role="contentinfo">
    <div class="nh-wrap">
      <div class="nh-footer__top">
        <a class="nh-brand nh-footer__brand" href="#">
          <img src="{{ asset('images/neyhive/logo.svg') }}" alt="Neyhive Designs" />
        </a>

        <nav class="nh-footer__nav" aria-label="Footer">
          <a href="#projects">Projects</a>
          <a href="#benefits">Benefits</a>
          <a href="#pricing">Pricing</a>
          <a href="#book">Book a Call</a>
        </nav>
      </div>

      <div class="nh-footer__bottom">
        <p class="nh-footer__copy">© <span id="nh-year"></span> Neyhive Designs. All rights reserved.</p>
        <p class="nh-footer__credit">Where timeless design meets measurable growth.</p>
      </div>
    </div>
  </footer>

  <!-- =========================
       SCRIPTS
       ========================= -->
  <script>
    // Footer year
    document.getElementById('nh-year').textContent = new Date().getFullYear();
  </script>

  <!-- Project Image Modal -->
  <div class="nh-modal" id="nh-project-modal" role="dialog" aria-modal="true" aria-labelledby="nh-project-modal-title">
    <h2 id="nh-project-modal-title" style="position:absolute;left:-9999px;top:auto;width:1px;height:1px;overflow:hidden;">Project image preview</h2>
    <div class="nh-modal__dialog" tabindex="-1">
      <button class="nh-modal__close" type="button" aria-label="Close">×</button>
      <img class="nh-modal__img" src="" alt="" />
    </div>
  </div>

  <!-- Sticky nav blur + mobile toggle + reveal animations + project modal -->
  <script>
    (function(){
      const wrap = document.querySelector('.nh-nav-wrap');
      const nav = document.querySelector('.nh-nav');
      const toggle = document.querySelector('.nh-nav__toggle');
      const panel = document.getElementById('primary-links');

      // reserve space for the fixed nav
      const setNavOffset = () => {
        if (!wrap) return;
        const h = wrap.offsetHeight;
        document.documentElement.style.setProperty('--nav-h', h + 'px');
      };
      const recalcAfterToggle = () => requestAnimationFrame(setNavOffset);
      setNavOffset();
      window.addEventListener('resize', setNavOffset, { passive:true });

      // blur/tint on scroll
      const onScroll = () => wrap && (window.scrollY > 10 ? wrap.classList.add('is-scrolled') : wrap.classList.remove('is-scrolled'));
      onScroll();
      window.addEventListener('scroll', onScroll, { passive:true });

      // mobile menu toggle
      if (nav && toggle && panel) {
        const setOpen = (open) => {
          nav.classList.toggle('is-open', open);
          toggle.setAttribute('aria-expanded', String(open));
        };
        toggle.addEventListener('click', () => {
          const open = !nav.classList.contains('is-open');
          setOpen(open);
          recalcAfterToggle();
        });
        panel.addEventListener('click', e => {
          if (e.target.closest('a')) {
            setOpen(false);
            recalcAfterToggle();
          }
        });
        document.addEventListener('keydown', e => {
          if (e.key === 'Escape') {
            setOpen(false);
            recalcAfterToggle();
          }
        });
      }

      // ===== Scroll Reveal Animations =====
      const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      if (!prefersReduced && 'IntersectionObserver' in window) {
        const singles = document.querySelectorAll('.nh-reveal');
        const staggers = document.querySelectorAll('.nh-reveal-stagger');

        const io = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              io.unobserve(entry.target);
            }
          });
        }, { root:null, rootMargin:'0px 0px -10% 0px', threshold:0.15 });

        singles.forEach(el => io.observe(el));
        staggers.forEach(group => io.observe(group));
      } else {
        document.querySelectorAll('.nh-reveal, .nh-reveal-stagger').forEach(el => el.classList.add('is-visible'));
      }

      // ===== Project Image Modal =====
      const modal = document.getElementById('nh-project-modal');
      const modalDialog = modal?.querySelector('.nh-modal__dialog');
      const modalImg = modal?.querySelector('.nh-modal__img');
      const modalClose = modal?.querySelector('.nh-modal__close');
      let lastActiveEl = null;

      function openModal(src, alt) {
        if (!modal || !modalImg) return;
        modalImg.src = src;
        modalImg.alt = alt || 'Project image';
        modal.classList.add('is-open');
        document.body.classList.add('modal-open');
        lastActiveEl = document.activeElement;
        modalDialog?.focus();
      }

      function closeModal() {
        if (!modal || !modalImg) return;
        modal.classList.remove('is-open');
        document.body.classList.remove('modal-open');
        modalImg.src = '';
        if (lastActiveEl && typeof lastActiveEl.focus === 'function') lastActiveEl.focus();
      }

      // Click / keyboard on any project card
      document.querySelectorAll('.nh-project').forEach(card => {
        card.setAttribute('role', 'button');
        card.setAttribute('tabindex', '0');
        card.setAttribute('aria-label', 'Open project image');

        const getImage = () => {
          const img = card.querySelector('.nh-project__media img');
          if (img) {
            const src = img.dataset.full || img.getAttribute('src');
            const alt = img.getAttribute('alt') || '';
            openModal(src, alt);
          }
        };

        card.addEventListener('click', getImage);
        card.addEventListener('keydown', e => {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            getImage();
          }
        });
      });

      // Close interactions
      modalClose?.addEventListener('click', closeModal);
      modal?.addEventListener('click', e => { if (e.target === modal) closeModal(); });
      document.addEventListener('keydown', e => { if (e.key === 'Escape' && modal.classList.contains('is-open')) closeModal(); });
    })();
  </script>
</body>
</html>
