<?php
/**
 * Javascript for limiting what field settings are available to new field within Gravity Forms
 *
 * @link       http://folkhack.com
 * @since      1.0.0
 *
 * @package    GFNoCaptchaReCaptcha
 * @subpackage GFNoCaptchaReCaptcha/public/partials
 */
?>
<script type="text/javascript">

    (function( $ ) {

        'use strict';

        $(function() {

            // Limit field settings to label and visiblity
            fieldSettings['<?php echo $this->gravity_forms_field_type; ?>'] = '.label_setting, .visibility_setting, .css_class_setting, .recaptcha_theme_setting';

            // Load CAPTCHA theme field settings
            $( document ).bind( 'gform_load_field_settings', function( e, field, form ) {

                $( '#field_recaptcha_theme_value' ).val( field['recaptcha_theme'] );
                $( '#field_theme_setting_size' ).val( field['recaptcha_size'] );
            });
        });

    })( jQuery );

</script>