<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/*
|--------------------------------------------------------------------------
| Website details
|
| These details are used in emails sent by authentication library.
|--------------------------------------------------------------------------
*/
$config['website_name'] = 'Cobub Razor';  //your web site name
$config['webmaster_email'] = 'ums@wbkit.com'; //your web email address
/* 
/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/libraries/email.html
|
*/
$config['protocol'] = 'smtp';   // mail/sendmail/smtp  Example:smtp
$config['smtp_host'] = 'smtp.exmail.sina.com'; // SMTP Server.  Example: smtp.exmail.sina.com
$config['smtp_user'] = 'ums@wbkit.com'; // SMTP Username  Example: yourname@sina.com
$config['smtp_pass'] = '12!@qwQW';  // SMTP Password  your email address
$config['smtp_port'] = '25';   // SMTP Port		
$config['smtp_timeout'] = '5';  // SMTP Timeout in seconds
$config['mailtype'] = 'html';   // text/html  Defines email formatting
$config['charset'] = 'utf-8';     // Default char set: iso-8859-1 or us-ascii
$config['newline'] = "\r\n";      // Default newline. "\r\n" or "\n" (Use "\r\n" to comply with RFC 822)
$config['crlf'] = "\r\n";       // The RFC 2045 compliant CRLF for quoted-printable is "\r\n".  Apparently some servers,
                                 // even on the receiving end think they need to muck with CRLFs, so using "\n", while
									// distasteful, is the only thing that seems to work for all environments.


/* End of file email.php */
/* Location: ./application/config/email.php */