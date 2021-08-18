<?php
if (!empty($_POST['newsletter_email'])) : ?>
    <div style="border:#ff6a3d solid 1px; padding: 36px 0px;">
    <h2 style="color: #ff6a3d; margin-bottom: 0px; font-size: 1rem;">Feed is on it's way!</h2>
    </div>
    <?php else : ?> 
    <form class="newsletter-action" action="assets/dbinputs/newsletterApp.php" method="post" style="width: auto;">
                <input id="newsletter-input" class="form-control form-control-lg newsletter-input" type="email" name="newsletter_email" placeholder="Drop us your email..."  required>
                <button id="submit-newsletter" value="Submit" class="btn btn-clp form-control-lg newsletter-button" type="submit" name="newsletter_submit" style="border-left: hidden; font-size: 1.1rem;">GET IT!</button></form>
    <?php endif; ?>