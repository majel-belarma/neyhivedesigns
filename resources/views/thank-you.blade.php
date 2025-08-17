<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Thank you — Neyhive Designs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body style="background:#0b0b0b; color:#fff; margin:0;">
  <div style="padding:12px 20px; border-bottom:1px solid #1f1f1f;">
    <a href="{{ url('/') }}" style="color:#d4af37; font-weight:800; text-decoration:none;">Neyhive Designs</a>
  </div>

  <main style="max-width:780px; margin:24px auto; padding:0 20px;">
    <h1 style="color:#d4af37; margin:0 0 10px;">Thank you!</h1>
    @if (session('status'))
      <p>{{ session('status') }}</p>
    @else
      <p>We’ve received your submission and will get back to you shortly.</p>
    @endif
    <p><a href="{{ url('/') }}" style="color:#d4af37;">Back to Home</a></p>
  </main>
</body>
</html>
