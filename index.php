<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="header.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>
  <body>
    <div class="header">
      <div class="sides">
        <a href="#" class="logo">MENU</a>
        <a href="#" class="logo">VACANCY</a>
        <a href="#" class="logo">MAP</a>
        <a href="#" class="logo">SALES</a>
        <a href="#" class="logo">DELIVERY</a>
      </div>
      <div class="sides"><a href="#" class="menu"> </a></div>
    </div>
    <div class="box">
      <div class="wrapper">
        <h2>Contact Us</h2>
        <form action="#">
          <div class="field">
            <input type="text" name="name" placeholder="Enter your name" />
            <i class="fas fa-user"></i>
          </div>
          <div class="field">
            <input type="text" name="email" placeholder="Enter your email" />
            <i class="fas fa-envelope"></i>
          </div>

          <div class="field">
            <input type="text" name="phone" placeholder="Enter your phone" />
            <i class="fas fa-phone-alt"></i>
          </div>
         

          <div class="message">
            <textarea
              placeholder="Write your order"
              name="message"
            ></textarea>
            <i class="material-icons">message</i>
          </div>
          <div class="button-area">
            <button type="submit">Send Message</button>
            <span></span>
          </div>
        </form>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
