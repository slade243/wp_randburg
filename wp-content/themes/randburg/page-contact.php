<?php
	get_header();
	get_template_part('banner', 'featured');
?>
<div class="content">
  <h2 class="headline">Contact</h2>

  <?php echo do_shortcode('[contact-form-7 id="168" title="Contact form 1"]'); ?>
  
  <div class="contact-info">
    <h4 class="contact-headline">Address</h4>
    <p>
      Randburg Electrical Services<br/>
      Unit 70, Capital Business Park<br/>
      22 Carlton Road<br/>
      South Croydon<br/>
      Surrey CR2 0BS<br/>
    </p>
    <h4 class="contact-headline">Phone</h4>
    <p>
      +44 (0)208 916 2297
    </p>
    <h4 class="contact-headline">Email</h4>
    <p>
      <a href="mailto:office@randburg.co.uk">office@randburg.co.uk</a>
    </p>
  </div>
</div><!-- .content-area -->

<?php
	get_template_part('static', 'twitter');
	get_footer();
 ?>
