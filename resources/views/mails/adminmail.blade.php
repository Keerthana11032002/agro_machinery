<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>New Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; margin:0; padding:0; background-color:#f5f5f5;">
  <table align="center" width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
    
    <!-- Header -->
    <tr>
      <td style="background:#e6f4ea; padding:20px; text-align:center;">
        <img src="https://agromachinery.skyraantech.com/public/assets/images/logo/53e0228d2974f464887e16225903a69bdf5b51c0.png" alt="Jai Agro Machinery" style="max-width:120px;">
        <h2 style="color:#2e7d32; margin:10px 0 0;">Jai Agro Machinery</h2>
      </td>
    </tr>
    
    <!-- Title -->
    <tr>
      <td style="padding:20px; background:#f1faf3;">
        <h3 style="color:#2e7d32; margin:0;">📩 New Contact Form Submission</h3>
        <p style="color:#555; margin-top:5px;">You’ve received a new inquiry from your website.</p>
      </td>
    </tr>
    
    <!-- User Details -->
    <tr>
      <td style="padding:20px;">
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->mail }}</p>
        <p><strong>Phone:</strong> {{ $contact->phone }}</p>
        <p><strong>Description:</strong></p>
        <p style="background:#f9f9f9; padding:10px; border-left:3px solid #2e7d32; color:#444;line-height:2rem;">
          {{ $contact->description }}
        </p>
      </td>
    </tr>
    
    <!-- Footer -->
    <tr>
      <td style="background:#e6f4ea; padding:15px; text-align:center; font-size:13px; color:#555;">
        <p>📌 This email was sent automatically by <strong>Jai Agro Machinery</strong>.</p>
        <p>© {{ date('Y') }} Jai Agro Machinery. All rights reserved.</p>
      </td>
    </tr>
  </table>
</body>
</html>
