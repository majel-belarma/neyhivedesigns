<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get Started – Neyhive Designs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0b0b0b;
            color: #fff;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #d4af37;
        }
        form {
            max-width: 700px;
            margin: 0 auto;
            background: #111;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid rgba(212,175,55,0.4);
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 8px;
            border: 1px solid #444;
            background: #1a1a1a;
            color: #fff;
        }
        button {
            margin-top: 20px;
            background: linear-gradient(180deg, #d4af37, #e2c766);
            border: none;
            color: #111;
            font-weight: bold;
            padding: 12px 18px;
            border-radius: 10px;
            cursor: pointer;
        }
        button:hover {
            filter: brightness(1.05);
        }
    </style>
</head>
<body>
    <h1>🐝 Neyhive “Get Started” Form</h1>
    <form action="#" method="POST">
        @csrf
        <!-- Basic Info -->
        <label>Full Name *</label>
        <input type="text" name="full_name" required>

        <label>Email Address *</label>
        <input type="email" name="email" required>

        <label>Business / Brand Name *</label>
        <input type="text" name="brand" required>

        <label>Current Website URL *</label>
        <input type="url" name="website" required>

        <!-- About Their Business -->
        <label>What services or products do you offer? *</label>
        <input type="text" name="services" required>

        <label>Who is your ideal client/patient/customer? *</label>
        <input type="text" name="ideal_client" required>

        <!-- Website Challenges -->
        <label>What’s your biggest frustration with your current website? *</label>
        <textarea name="frustration" required></textarea>

        <!-- Project Scope -->
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

        <!-- Next Step Prep -->
        <label>How did you hear about Neyhive Designs? *</label>
        <select name="referral" required>
            <option value="">Select one...</option>
            <option>Referral</option>
            <option>Social Media</option>
            <option>Google/Search</option>
            <option>Other</option>
        </select>

        <button type="submit">Submit Form</button>
    </form>
</body>
</html>
