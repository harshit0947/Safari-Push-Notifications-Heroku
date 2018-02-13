<?php
/*
 *	Configuration file for service. 
 *	You'll also need to update icon files in pushPackage.raw
*/


// ** Push server site settings ** //
/* Web Service Base URL */
define('WEBSERVICE_URL', 'https://push-demo778.herokuapp.com');

/* Website Push ID unique identifier */
define('WEBSITE_UID', 'web.com.herokuapp.push-demo778');

/* Website Name */
define('WEBSITE_NAME', 'Safari Push Notification Test');

/* Allowed Domains, must be comma-seperated and quoted */
define('ALLOWED_DOMAINS', '"http://push-demo778.herokuapp.com", "https://push-demo778.herokuapp.com"');

/* URL string format for links */
define('URL_FORMAT', 'http://push-demo778.herokuapp.com/%@/');


// ** Certificate settings - certificates provided by Apple ** //
define('CERTIFICATE_PATH', './Certificates.p12');     // Change this to the path where your certificate is located
define('CERTIFICATE_PASSWORD', ''); // Change this to the certificate's import password
define('PRODUCTION_CERTIFICATE_PATH', './pushcert.pem'); // Change this to the path to your Website Push ID Production Certificate


// ** Authorisation code for requesting push notifications to be sent ** //
define('AUTHORISATION_CODE', '');  //add some code here to prevent unauthorized access 

// ** APNS Settings, probably don't need to be changed ** //
define('APNS_HOST', 'gateway.push.apple.com');
define('APNS_PORT', 2195);
