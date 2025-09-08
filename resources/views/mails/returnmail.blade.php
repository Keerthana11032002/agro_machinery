<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Email Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f0f8ffd4;
      font-family: Arial, sans-serif;
    }
    table {
      border-spacing: 0;
      width: 100%;
    }
    td {
      padding: 0;
    }
    img {
      border: 0;
      display: block;
      max-width: 100%;
      height: auto;
    }
    .container {
        padding: 1rem 2rem;
      max-width: 70%;
      margin: auto;
      background-color: #ffffff;
      border-left: 1px solid #ffffff;
      border-right: 1px solid #ffffff;
    }
    .header {
      padding: 15px;
      text-align: left;
      display: flex;
      align-items: center;
    }
    .header img.logo {
      width: 40px;
      vertical-align: middle;
      margin-right: 8px;
    }
    .header span {
      font-size: 21px;
      font-weight: bold;
      color: #28a745;
      vertical-align: middle;
    }
    .banner {
      display: flex;
      height: 30vh;
        width: 100%;
        justify-content: space-between;
        background: #e8f9e8;
    }
    .banner-text {
      background: #e8f9e8;
      color: #28a745;
      font-size: 28px;
      font-weight: bold;
      padding: 20px;
      width: 50%;
      align-content: center;
      line-height: 3rem;
    }
    .banner-sub {
      font-size: 22px;
      color: #333;
      font-weight: normal;
      margin-top: 8px;
    }
    .banner-img {
      width: 30%;
    }
    .content {
      padding: 20px;
      font-size: 14px;
      color: #333333;
      line-height: 2;
    }
    .footer {
      background-color: #e8f9e8;
      padding: 20px;
      text-align: center;
      font-size: 13px;
      color: #555;
    }
    .social-icons img {
      width: 24px;
      margin: 0 6px;
      display: inline-block;
    }
    /* Responsive */
    @media screen and (max-width: 600px) {
      .banner {
        display: block;
      }
      .banner-text, .banner-img {
        width: 100% !important;
        display: block;
      }
      .banner-text {
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <center>
    <table role="presentation" class="container">
      <!-- Header -->
      <tr>
        <td class="header">
          <img src="https://agromachinery.skyraantech.com/public/assets/images/logo/53e0228d2974f464887e16225903a69bdf5b51c0.png" alt="Logo" class="logo">
          <span>Jai Agro Machinery</span>
        </td>
      </tr>
      <!-- Banner -->
      <tr>
        <td>
          <table role="presentation" width="100%">
            <tr class="banner">
              <td class="banner-text">
                Thanking You For<br>
                <span class="banner-sub">Contact Us !</span>
              </td>
              <td class="banner-img">
                <img src="https://agromachinery.skyraantech.com/public/assets/images/about/founder_24049872.png" alt="Agro Machinery">
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- Content -->
      <tr>
        <td class="content">
          <p>Hi Vignesh,</p>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printerLorem Ipsum is simply dummy text of the printing and
            typesetting industry.
          </p>
          <p>
            Thanking you,<br>
            Jai Agro Machinery
          </p>
        </td>
      </tr>
      <!-- Footer -->
      <tr>
        <td class="footer">
          <div class="social-icons">
            <a href="#"><img src="https://agromachinery.skyraantech.com/public/assets/images/social_media/facebok_24049856.png" alt="Facebook"></a>
            <a href="#"><img src="https://agromachinery.skyraantech.com/public/assets/images/social_media/instagram_8234576.png" alt="Instagram"></a>
            <a href="#"><img src="https://agromachinery.skyraantech.com/public/assets/images/social_media/twitter_92372287.png" alt="X"></a>
          </div>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer
          </p>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>
