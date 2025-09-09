<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Font Pair Preview — Minimal</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Karla:wght@400;600;700&family=Playfair+Display:wght@400;600;700&family=Nunito:wght@400;600;700&family=Lora:wght@400;600;700&family=DM+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&family=Libre+Baskerville:wght@400;700&family=Work+Sans:wght@400;600;700&family=Merriweather:wght@400;700&family=Source+Sans+3:wght@400;600;700&family=EB+Garamond:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg:#fafbfc;
      --surface:#ffffff;
      --ink:#1f2937;
      --muted:#6b7280;
      --border:#e5e7eb;
      --accent:#0f766e;
      --titleSize: 28px;
      --bodySize: 16px;
      --radius: 10px;
    }
    *{box-sizing:border-box}
    body{margin:0;display:flex;min-height:100dvh;background:var(--bg);color:var(--ink);font:400 16px/1.6 Karla,system-ui,sans-serif}
    .sidebar{width:200px;border-right:1px solid var(--border);padding:24px 16px;background:transparent;position:sticky;top:0;height:100dvh}
    .sidebar h2{font:600 14px/1.2 "Cormorant Garamond",serif;letter-spacing:.05em;text-transform:uppercase;margin:0 0 12px;color:#374151}
    .sidebar ul{list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:2px}
    .sidebar li{padding:8px 2px;color:#374151;cursor:pointer;border-bottom:1px solid transparent}
    .sidebar li:hover{border-bottom:1px solid #d1d5db}
    .sidebar li.active{color:var(--accent);border-bottom:1px solid var(--accent)}
    .content{flex:1}
    .wrap{max-width:1000px;margin:0 auto;padding:32px 24px}
    header h1{font:600 clamp(24px,3vw,36px)/1.1 "Cormorant Garamond",serif;margin:0 0 6px}
    header p{margin:0 0 16px;color:var(--muted)}
    .controls{display:grid;gap:12px;margin:18px 0 22px}
    @media(min-width:760px){.controls{grid-template-columns:1.2fr 1.6fr .7fr .7fr}}
    .control label{display:block;font:600 12px/1.2 Karla;letter-spacing:.06em;text-transform:uppercase;color:#4b5563;margin-bottom:6px}
    .control input[type="text"], .control input[type="range"]{width:100%}
    .control input[type="text"]{padding:10px 12px;border:1px solid var(--border);border-radius:8px;background:#fff;color:var(--ink);font:500 14px/1.4 Karla}
    .control input[type="range"]{accent-color:var(--accent)}
    .grid{display:grid;gap:16px}
    @media(min-width:760px){.grid{grid-template-columns:repeat(2,1fr)}}
    @media(min-width:1100px){.grid{grid-template-columns:repeat(2,1fr)}}
    .card{background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);padding:16px;display:flex;flex-direction:column;justify-content:space-between}
    .category{margin-bottom:6px;color:#6b7280;font:600 12px/1.4 Karla;text-transform:uppercase;letter-spacing:.06em}
    .sample-title{font-size:var(--titleSize);line-height:1.2;margin:6px 0 4px;font-weight:600;font-family:"Cormorant Garamond",serif}
    .sample-body{font-size:var(--bodySize);line-height:1.65;margin:0 0 10px;color:#374151;font-family:Karla,sans-serif;flex-grow:1}
    .pair-label{display:flex;gap:8px;align-items:center;margin-top:auto}
    .badge-primary{background:#000;color:#fff;padding:3px 8px;border-radius:6px;font:600 12px/1 Karla;display:flex;align-items:center;gap:4px}
    .badge-secondary{border:1px solid #000;color:#000;padding:3px 8px;border-radius:6px;font:600 12px/1 Karla;display:flex;align-items:center;gap:4px}
    footer{margin-top:18px;color:#6b7280;font:500 12px/1.6 Karla}
    .hidden{display:none}
  </style>
</head>
<body>
  <nav class="sidebar">
    <h2>Categories</h2>
    <ul>
      <li class="active" data-cat="all">All</li>
      <li data-cat="minimalist">Minimalist</li>
      <li data-cat="luxury">Luxury</li>
      <li data-cat="timeless">Timeless</li>
    </ul>
  </nav>
  <div class="content">
    <div class="wrap">
      <header>
        <h1>Font Pair Preview</h1>
        <p>Adjust the sample copy and sizes; filter pairs by category.</p>
      </header>
      <section class="controls">
        <div class="control">
          <label for="titleInput">Sample Title</label>
          <input id="titleInput" type="text" value="Designing with Clarity and Grace">
        </div>
        <div class="control">
          <label for="bodyInput">Sample Body</label>
          <input id="bodyInput" type="text" value="This paragraph demonstrates how the chosen typefaces work together in longer blocks of content, maintaining readability while conveying a consistent mood and tone across the layout.">
        </div>
        <div class="control">
          <label for="titleSize">Title Size (<span id="titleSizeVal">28</span>px)</label>
          <input id="titleSize" type="range" min="22" max="56" step="1" value="28">
        </div>
        <div class="control">
          <label for="bodySize">Body Size (<span id="bodySizeVal">16</span>px)</label>
          <input id="bodySize" type="range" min="14" max="22" step="1" value="16">
        </div>
      </section>
      <section class="grid">
        <!-- Minimalist examples -->
        <article class="card minimalist">
          <div class="category">Minimalist</div>
          <h2 class="sample-title" style="font-family:Lora,serif">Designing with Clarity and Grace</h2>
          <p class="sample-body" style="font-family:'DM Sans',sans-serif">This paragraph demonstrates how the chosen typefaces work together in longer blocks of content, maintaining readability while conveying a consistent mood and tone across the layout.</p>
          <div class="pair-label">
            <span class="badge-primary">① Lora</span>
            <span class="badge-secondary">② DM Sans</span>
          </div>
        </article>
        <article class="card minimalist">
          <div class="category">Minimalist</div>
          <h2 class="sample-title" style="font-family:'Libre Baskerville',serif">Designing with Clarity and Grace</h2>
          <p class="sample-body" style="font-family:'Work Sans',sans-serif">This paragraph demonstrates how the chosen typefaces work together in longer blocks of content, maintaining readability while conveying a consistent mood and tone across the layout.</p>
          <div class="pair-label">
            <span class="badge-primary">① Libre Baskerville</span>
            <span class="badge-secondary">② Work Sans</span>
          </div>
        </article>
        <!-- Luxury examples -->
        <article class="card luxury">
          <div class="category">Luxury</div>
          <h2 class="sample-title" style="font-family:'Playfair Display',serif">Designing with Clarity and Grace</h2>
          <p class="sample-body" style="font-family:Nunito,sans-serif">This paragraph demonstrates how the chosen typefaces work together in longer blocks of content, maintaining readability while conveying a consistent mood and tone across the layout.</p>
          <div class="pair-label">
            <span class="badge-primary">① Playfair Display</span>
            <span class="badge-secondary">② Nunito</span>
          </div>
        </article>
        <article class="card luxury">
          <div class="category">Luxury</div>
          <h2 class="sample-title" style="font-family:'Cormorant Garamond',serif">Designing with Clarity and Grace</h2>
          <p class="sample-body" style="font-family:Poppins,sans-serif">This paragraph demonstrates how the chosen typefaces work together in longer blocks of content, maintaining readability while conveying a consistent mood and tone across the layout.</p>
          <div class="pair-label">
            <span class="badge-primary">① Cormorant Garamond</span>
            <span class="badge-secondary">② Poppins</span>
          </div>
        </article>
        <!-- Timeless examples -->
        <article class="card timeless">
          <div class="category">Timeless</div>
          <h2 class="sample-title" style="font-family:Merriweather,serif">Designing with Clarity and Grace</h2>
          <p class="sample-body" style="font-family:'Source Sans 3',sans-serif">This paragraph demonstrates how the chosen typefaces work together in longer blocks of content, maintaining readability while conveying a consistent mood and tone across the layout.</p>
          <div class="pair-label">
            <span class="badge-primary">① Merriweather</span>
            <span class="badge-secondary">② Source Sans 3</span>
          </div>
        </article>
        <article class="card timeless">
          <div class="category">Timeless</div>
          <h2 class="sample-title" style="font-family:'EB Garamond',serif">Designing with Clarity and Grace</h2>
          <p class="sample-body" style="font-family:Lato,sans-serif">This paragraph demonstrates how the chosen typefaces work together in longer blocks of content, maintaining readability while conveying a consistent mood and tone across the layout.</p>
          <div class="pair-label">
            <span class="badge-primary">① EB Garamond</span>
            <span class="badge-secondary">② Lato</span>
          </div>
        </article>
      </section>
      <footer>Minimalist tip: two font families, generous whitespace, and 1px soft gray borders keep focus on form and content.</footer>
    </div>
  </div>
  <script>
    const tabs=document.querySelectorAll('.sidebar li');
    const cards=document.querySelectorAll('.card');
    tabs.forEach(tab=>{
      tab.addEventListener('click',()=>{
        tabs.forEach(t=>t.classList.remove('active'));
        tab.classList.add('active');
        const cat=tab.dataset.cat;
        cards.forEach(c=>{
          if(cat==='all'||c.classList.contains(cat))c.classList.remove('hidden');
          else c.classList.add('hidden');
        });
      });
    });
    const titleInput=document.getElementById('titleInput');
    const bodyInput=document.getElementById('bodyInput');
    const titleSize=document.getElementById('titleSize');
    const bodySize=document.getElementById('bodySize');
    const titleSizeVal=document.getElementById('titleSizeVal');
    const bodySizeVal=document.getElementById('bodySizeVal');
    const titles=document.querySelectorAll('.sample-title');
    const bodies=document.querySelectorAll('.sample-body');
    titleInput.addEventListener('input',()=>{titles.forEach(t=>t.textContent=titleInput.value||' ')});
    bodyInput.addEventListener('input',()=>{bodies.forEach(b=>b.textContent=bodyInput.value||' ')});
    titleSize.addEventListener('input',()=>{document.documentElement.style.setProperty('--titleSize',titleSize.value+'px');titleSizeVal.textContent=titleSize.value});
    bodySize.addEventListener('input',()=>{document.documentElement.style.setProperty('--bodySize',bodySize.value+'px');bodySizeVal.textContent=bodySize.value});
  </script>
</body>
</html>
