<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin
$config['recaptcha_site_key'] = '6Lc5kEYUAAAAACvdzI3vV_Z5_Z3HfdulXnSDehHW';
$config['recaptcha_secret_key'] = '6Lc5kEYUAAAAAMSq4Kvz3k1IGKmDNIKaN_X9EhxH';

// localhost
// site key =6Lc5kEYUAAAAACvdzI3vV_Z5_Z3HfdulXnSDehHW
// secret key = 6Lc5kEYUAAAAAMSq4Kvz3k1IGKmDNIKaN_X9EhxH

// deploy hosting 
// site key = 6Lc-xkYUAAAAADBWbiNSjkiseOk7ANqWLJit7Lfe
// secret key = 6Lc-xkYUAAAAAOjTXeEoqEkRGpHivYcco8kBXg8G

// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language
$config['recaptcha_lang'] = 'en';

/* End of file recaptcha.php */
/* Location: ./application/config/recaptcha.php */
