<!--
  Laravel Blade - One‑Page Minimalist Portfolio (Static Data)
  Updates:
  - Experience items are individual cards (grid layout)
  - Certificates: images only (no text)
  - Books: 6 per row on large screens
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My Portfolio</title>
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    [data-fade] { opacity:0; transform:translateY(8px); animation:fadeIn .6s ease forwards }
    [data-fade="1"]{ animation-delay:.1s } [data-fade="2"]{ animation-delay:.2s }
    [data-fade="3"]{ animation-delay:.3s } [data-fade="4"]{ animation-delay:.4s }
    @keyframes fadeIn { to { opacity:1; transform:none } }
  </style>
</head>
<body class="min-h-screen bg-white text-gray-900 antialiased">
  <!-- Sticky Header -->
  <header class="sticky top-0 z-40 backdrop-blur bg-white/70 border-b border-gray-100">
    <div class="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">
      <span class="font-semibold tracking-tight">Portfolio</span>
      <nav class="hidden sm:flex gap-6 text-sm text-gray-600">
        <a href="#intro" class="hover:text-gray-900">Home</a>
        <a href="#experience" class="hover:text-gray-900">Experience</a>
        <a href="#certs" class="hover:text-gray-900">Certificates</a>
        <a href="#books" class="hover:text-gray-900">Books</a>
      </nav>
    </div>
  </header>

  <main class="max-w-5xl mx-auto px-4 md:px-6 lg:px-8 py-10 md:py-14 space-y-12">
    <!-- 1) Photo, Title, Short Description -->
    <section id="intro" class="grid md:grid-cols-[auto,1fr] items-center gap-8" data-fade>
      <img src="{{ asset('about-images/majel.png') }}" alt="Your photo" class="w-28 h-28 md:w-32 md:h-32 rounded-full object-cover shadow-sm ring-1 ring-gray-200">
      <div>
        <h1 class="text-3xl md:text-4xl font-bold leading-tight">Majel T. Belarma</h1>
        <p class="text-gray-700 mt-1">Human-Centered Experience Designer | Empathy-driven UX </p>
        <p class="text-gray-500 mt-4 max-w-2xl">I build fast, accessible web apps with Laravel, Vue, and Tailwind.</p>
      </div>
    </section>

    <!-- 2) Details: contact, website, etc. -->
    <section id="contact" class="space-y-4" data-fade="1">
      <h2 class="text-xl font-semibold">Contact</h2>
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="p-4 border border-gray-200 rounded-2xl shadow-sm"><p class="text-xs uppercase tracking-wide text-gray-500">Email</p><a href="mailto:johndoe@example.com" class="hover:underline">johndoe@example.com</a></div>
        <div class="p-4 border border-gray-200 rounded-2xl shadow-sm"><p class="text-xs uppercase tracking-wide text-gray-500">Phone</p><a href="tel:+1234567890" class="hover:underline">+123 456 7890</a></div>
        <div class="p-4 border border-gray-200 rounded-2xl shadow-sm"><p class="text-xs uppercase tracking-wide text-gray-500">Website</p><a href="https://johndoe.com" target="_blank" rel="noopener" class="hover:underline">johndoe.com</a></div>
        <div class="p-4 border border-gray-200 rounded-2xl shadow-sm"><p class="text-xs uppercase tracking-wide text-gray-500">Location</p><p>New York, USA</p></div>
        <div class="p-4 border border-gray-200 rounded-2xl shadow-sm"><p class="text-xs uppercase tracking-wide text-gray-500">LinkedIn</p><a href="https://linkedin.com/in/johndoe" target="_blank" rel="noopener" class="hover:underline">linkedin.com/in/johndoe</a></div>
        <div class="p-4 border border-gray-200 rounded-2xl shadow-sm"><p class="text-xs uppercase tracking-wide text-gray-500">GitHub</p><a href="https://github.com/johndoe" target="_blank" rel="noopener" class="hover:underline">github.com/johndoe</a></div>
      </div>
    </section>

    <!-- Experience as Cards -->
    <section id="experience" class="space-y-6" data-fade="2">
      <h2 class="text-xl font-semibold">Experience</h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <article class="rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-5 flex flex-col">
          <div class="flex items-start justify-between gap-3">
            <div>
              <h3 class="font-semibold">Senior Full‑Stack Developer</h3>
              <p class="text-sm text-gray-500">Acme Corp · 2023—Present</p>
            </div>
            <span class="text-xs bg-gray-100 border border-gray-200 rounded-full px-2 py-1">Remote</span>
          </div>
          <p class="text-sm text-gray-600 mt-3">Laravel · Vue · PostgreSQL · AWS</p>
          <ul class="mt-3 text-sm text-gray-600 list-disc ms-5 space-y-1">
            <li>Led migration to Laravel 11; improved TTFB by 30%.</li>
            <li>Built design system with Tailwind; reduced dev time 25%.</li>
          </ul>
        </article>
        <!-- Card 2 -->
        <article class="rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-5 flex flex-col">
          <div class="flex items-start justify-between gap-3">
            <div>
              <h3 class="font-semibold">Frontend Engineer</h3>
              <p class="text-sm text-gray-500">Pixel Studio · 2021—2023</p>
            </div>
            <span class="text-xs bg-gray-100 border border-gray-200 rounded-full px-2 py-1">Hybrid</span>
          </div>
          <p class="text-sm text-gray-600 mt-3">Vue · Vite · Tailwind · Pinia</p>
          <ul class="mt-3 text-sm text-gray-600 list-disc ms-5 space-y-1">
            <li>Launched SPA increasing conversion by 18%.</li>
            <li>Maintained component library & Storybook.</li>
          </ul>
        </article>
        <!-- Card 3 -->
        <article class="rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-5 flex flex-col">
          <div class="flex items-start justify-between gap-3">
            <div>
              <h3 class="font-semibold">Junior Web Developer</h3>
              <p class="text-sm text-gray-500">Freelance · 2019—2021</p>
            </div>
            <span class="text-xs bg-gray-100 border border-gray-200 rounded-full px-2 py-1">Contract</span>
          </div>
          <p class="text-sm text-gray-600 mt-3">Laravel · Alpine.js · MySQL</p>
          <ul class="mt-3 text-sm text-gray-600 list-disc ms-5 space-y-1">
            <li>Delivered 12+ client sites with Stripe integration.</li>
            <li>Implemented accessibility updates (WCAG AA).</li>
          </ul>
        </article>
      </div>
    </section>

    <!-- Certificates: Images Only -->
    <section id="certs" class="space-y-4" data-fade="3">
      <h2 class="text-xl font-semibold">Certificates</h2>
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <figure class="overflow-hidden rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition">
          <img src="{{ asset('about-images/cert_google.png') }}" alt="Certificate 1" class="w-full h-full object-cover aspect-4/3]" loading="lazy" />
        </figure>
        <figure class="overflow-hidden rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition">
          <img src="{{ asset('about-images/cert_figma.jpg') }}" alt="Certificate 2" class="w-full h-full object-cover aspect-[16/10]" loading="lazy" />
        </figure>
        <figure class="overflow-hidden rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition">
          <img src="{{ asset('about-images/cert_graphics.png') }}" alt="Certificate 3" class="w-full h-full object-cover aspect-[16/10]" loading="lazy" />
        </figure>
      </div>
    </section>

<section id="books" class="space-y-4" data-fade="4">
  <h2 class="text-xl font-semibold">Books I Read</h2>
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">

    <!-- 1 -->
    <article class="relative overflow-hidden rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition">
      <img src="https://cdn.kobo.com/book-images/9e950bad-b057-49f2-90af-40deaea69970/353/569/90/False/the-design-of-everyday-things-7.jpg"
           alt="Atomic Habits"
           class="w-full h-full object-cover aspect-[2/3]" />
      <span class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium rounded-full backdrop-blur-md bg-gray-500/50 text-white shadow-sm">In Progress</span>
    </article>

    <!-- 2 -->
    <article class="relative overflow-hidden rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition">
      <img src="https://cdn.kobo.com/book-images/13e425a4-22c7-4b88-b905-8003a63aba8b/1200/1200/False/emotional-design-3.jpg"
           alt="Deep Work"
           class="w-full h-full object-cover aspect-[2/3]" />
      <span class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium rounded-full backdrop-blur-md bg-gray-500/50 text-white shadow-sm">In Progress</span>
    </article>

    <!-- 4 -->
    <article class="relative overflow-hidden rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition">
      <img src="https://m.media-amazon.com/images/I/81Uk4CYxp7L._UF1000,1000_QL80_.jpg"
           alt="Clean Code"
           class="w-full h-full object-cover aspect-[2/3]" />
      <span class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium rounded-full backdrop-blur-md bg-gray-500/50 text-white shadow-sm">In Progress</span>
    </article>

        <!-- 3 -->
<article class="relative overflow-hidden rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition">
  <img 
    src="https://static-ppimages.freetls.fastly.net/nielsens/9780136746911.jpg?canvas=363,600&fit=bounds&height=600&mode=max&width=363&404=default.jpg"
    alt="The Design of Everyday Things"
    class="w-full h-full object-cover aspect-[2/3] scale-110" />
  <span class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium rounded-full backdrop-blur-md bg-gray-500/50 text-white shadow-sm">
    In Progress
  </span>
</article>





           <!-- 3 -->
    <article class="relative overflow-hidden rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition">
      <img src="https://www.blog.theteamw.com/wp-content/uploads/2023/10/100more_cover-Kindle-scaled.jpg"
           alt="The Design of Everyday Things"
           class="w-full h-full object-cover aspect-[2/3]" />
      <span class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium rounded-full backdrop-blur-md bg-gray-500/50 text-white shadow-sm">In Progress</span>
    </article> 
    <!-- 5 -->
    <article class="relative overflow-hidden rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition">
      <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1617630612i/57633909.jpg"
           alt="Refactoring"
           class="w-full h-full object-cover aspect-[2/3]" />
      <span class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium rounded-full backdrop-blur-md bg-gray-900/70 text-white shadow-sm">Completed</span>
    </article>

    <!-- 6 -->
    <article class="relative overflow-hidden rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition">
      <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1672686052i/75519891.jpg"
           alt="Pragmatic Programmer"
           class="w-full h-full object-cover aspect-[2/3]" />
      <span class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium rounded-full backdrop-blur-md bg-gray-900/70 text-white shadow-sm">Completed</span>
    </article>

    <!-- 7 -->
    <article class="relative overflow-hidden rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition">
      <img src="https://m.media-amazon.com/images/I/519400x13gS.jpg"
           alt="Pragmatic Programmer"
           class="w-full h-full object-cover aspect-[2/3]" />
      <span class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium rounded-full backdrop-blur-md bg-gray-900/70 text-white shadow-sm">Completed</span>
    </article>

    <!-- 8 -->
    <article class="relative overflow-hidden rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition">
      <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1495301417i/35090938.jpg"
           alt="Pragmatic Programmer"
           class="w-full h-full object-cover aspect-[2/3]" />
      <span class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium rounded-full backdrop-blur-md bg-gray-900/70 text-white shadow-sm">Completed</span>
    </article>

 

  </div>
</section>


  </main>

  <footer class="max-w-5xl mx-auto px-4 md:px-6 lg:px-8 py-10 text-sm text-gray-500">
    © 2025 John Doe. All rights reserved.
  </footer>
</body>
</html>