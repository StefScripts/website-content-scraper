<?php
/*--------------------------------------------------------------
  Re-usable contact form (honeypot anti-spam)
--------------------------------------------------------------*/
?>
<form class="contact-form" method="post" action="/process-form.php">
 <!-- Honeypot -->
 <input type="text" name="website" class="contact-form__honeypot" tabindex="-1" autocomplete="off">
 <label>
  Name
  <input type="text" name="name" required>
 </label>
 <label>
  Email
  <input type="email" name="email" required>
 </label>
 <label>
  Message
  <textarea name="message" rows="5" required></textarea>
 </label>
 <button type="submit" class="btn">Send Message</button>
</form>