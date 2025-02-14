<section class="contact-section">
  <div class="contact-container">
    <div class="contact-header">
      <h1>Contact Me</h1>
      <p class="phone">Phone: +63 977 115 0555</p>
      <p class="email">Email: mjuliussantos27@gmail.com</p>
      <p class="social">Social Media: @mxrkjuice</p>
    </div>
    <form class="contact-form" method="post" action="includes\config.php">
      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your first name" required>
      </div>
      <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Your last name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Your message" required></textarea>
      </div>
      <button type="submit" name="submit" class="send-button">Send Message</button>
    </form>
  </div>
</section>