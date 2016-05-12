<?php
settings_errors(); ?>
<p class="ctf-contents-links" id="general">
    <span>Quick links: </span>
    <a href="#general">General</a>
    <a href="#showhide">Show/Hide</a>
    <a href="#date">Date</a>
    <a href="#links">Links</a>
    <a href="#misc">Misc</a>
    <a href="#advanced">Advanced</a>
</p>
<form method="post" action="options.php">
    <?php settings_fields( 'ctf_customize' ); // matches the options name ?>
    <?php do_settings_sections( 'ctf_customize_general' ); // matches the section name ?>
    <hr>
    <a id="showhide"></a>
    <?php do_settings_sections( 'ctf_customize_showandhide' ); // matches the section name ?>
    <p class="submit"><input class="button-primary" type="submit" name="save" value="<?php esc_attr_e( 'Save Changes' ); ?>" /></p>
    <hr>
    <a id="date"></a>
    <?php do_settings_sections( 'ctf_customize_date' ); // matches the section name ?>
    <hr>
    <a id="links"></a>
    <?php do_settings_sections( 'ctf_customize_links' ); // matches the section name ?>
    <p class="submit"><input class="button-primary" type="submit" name="save" value="<?php esc_attr_e( 'Save Changes' ); ?>" /></p>
    <hr>
    <a id="misc"></a>
    <?php do_settings_sections( 'ctf_customize_misc' ); // matches the section name ?>
    <hr>
    <a id="advanced"></a>
    <?php do_settings_sections('ctf_customize_advanced'); // matches the section name ?>
    <p class="submit"><input class="button-primary" type="submit" name="save" value="<?php esc_attr_e( 'Save Changes' ); ?>" /></p>
</form>
<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp; <?php _e('<b>Next Step:</b> <a href="?page=custom-twitter-feeds&tab=style">Style your Feed</a>'); ?></p>
