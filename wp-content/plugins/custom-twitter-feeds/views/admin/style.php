<?php
settings_errors(); ?>
<p class="ctf-contents-links" id="general">
    <span>Quick links: </span>
    <a href="#general">General</a>
    <a href="#header">Header</a>
    <a href="#type">Type</a>
    <a href="#load">Load More</a>
</p>
<form method="post" action="options.php">
    <?php settings_fields( 'ctf_style' ); // matches the options name ?>
    <?php do_settings_sections( 'ctf_style_general' ); // matches the section name ?>
    <hr>
    <a id="header"></a>
    <?php do_settings_sections( 'ctf_style_header' ); // matches the section name ?>
    <hr>
    <a id="type"></a>
    <?php do_settings_sections( 'ctf_style_type' ); // matches the section name ?>
    <p class="submit"><input class="button-primary" type="submit" name="save" value="<?php esc_attr_e( 'Save Changes' ); ?>" /></p>
    <hr>
    <a id="load"></a>
    <?php do_settings_sections( 'ctf_style_load' ); // matches the section name ?>
</form>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp; <?php _e('Next Step: <a href="?page=custom-twitter-feeds&tab=display">Display your Feed</a>'); ?></p>
