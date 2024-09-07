<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('9b3d13e707c20cf65a7eae011661dbe4-d2cc48bc-96e78d19');
$domain = "sandbox7baf1d0c8bf246fd8160aafa769f3b93.mailgun.org";

$result = $mgClient->sendMessage("$domain",
	array('from'    => 'Mailgun Sandbox <postmaster@sandbox7baf1d0c8bf246fd8160aafa769f3b93.mailgun.org>',
		  'to'      => 'krunal pabari <krunalpabari2012@gmail.com>',
		  'subject' => 'Hello krunal pabari',
		  'text'    => 'Congratulations krunal pabari, you just sent an email with Mailgun!  You are truly awesome! '));

?>