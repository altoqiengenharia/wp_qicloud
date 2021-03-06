=== SMTP Mailer ===
Contributors: naa986
Donate link: http://wphowto.net/
Tags: smtp, mail, mailer, phpmailer, wp_mail, email
Requires at least: 4.4
Tested up to: 4.4
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Configure a SMTP server to send email from your WordPress site. Configure the wp_mail() function to use SMTP instead of the PHP mail() function.

== Description ==

SMTP Mailer plugin allows you to configure a mail server which handles all outgoing email from your website. It takes control of the wp_mail function and use SMTP instead.

= SMTP Mailer Settings =

* **SMTP Host**: Your outgoing mail server (e.g. smtp.gmail.com).
* **SMTP Authentication**: Whether to use SMTP authentication when sending an email (True/False). If you choose to authenticate you will also need to provide your username and password.
* **SMTP Username**: The username to connect to your SMTP server.
* **SMTP Password**: The password to connect to your SMTP server.
* **Type of Encryption**: The encryption to be used when sending an email (TLS/SSL/No Encryption. TLS is recommended).
* **SMTP Port**: The port to be used when sending an email (587/465/25). If you choose TLS the port should be set to 587. For SSL use port 465 instead.
* **From Email Address**: The email address to be used as the From Address when sending an email.
* **From Name**: The name to be used as the From Name when sending an email.

= SMTP Mailer Test Email =

Once you have configured the settings you can send a test email to check the functionality of the plugin.
 
* **To**: Email address of the recipient.
* **Subject**: Subject of the email.
* **Message**: Email body.

= Known Compatibility =

SMTP Mailer should work with any plugin that uses the WordPress Mail function. However, It has been tested with the following form and contact form plugins:

* Contact Form 7
* Jetpack Contact Form
* Visual Form Builder
* Fast Secure Contact Form
* Formidable Forms
* Contact Form by BestWebSoft

For detailed setup instructions please visit the [SMTP Mailer](http://wphowto.net/smtp-mailer-plugin-for-wordpress-1482 "WordPress SMTP Plugin") plugin page.

= Plugin Language Translation =

If you are a non-English speaker please help [translate SMTP Mailer](https://translate.wordpress.org/projects/wp-plugins/smtp-mailer) into your language.

== Installation ==

1. Go to the Add New plugins screen in your WordPress Dashboard
1. Click the upload tab
1. Browse for the plugin file (smtp-mailer.zip) on your computer
1. Click "Install Now" and then hit the activate button

== Frequently Asked Questions ==

= Can I send email via SMTP from my website using this plugin? =

Yes.

== Screenshots ==

1. SMTP Mailer Settings
2. SMTP Mailer Test Email Menu

== Upgrade Notice ==
none

== Changelog ==

= 1.0.1 =
* First commit
