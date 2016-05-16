<?php

# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-4a1bcc8eee8c76dc44c302d459492164');
$domain = "sandbox9261a0a76756413699502c12ffa03220.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandbox9261a0a76756413699502c12ffa03220.mailgun.org>',
                        'to'      => 'Linsey <linsefree@gmail.com>',
                        'subject' => 'Hello Linsey',
                        'text'    => 'Congratulations Linsey, you just sent an email with Mailgun!  You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain so you can send 10,000 emails/month for free.'));
    

}
