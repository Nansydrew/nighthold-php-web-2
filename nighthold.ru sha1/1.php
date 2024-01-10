<?php

$ports[] = array('host'=>'interspire.smtp.com','number'=>25);
$ports[] = array('host'=>'interspire.smtp.com','number'=>2525);
$ports[] = array('host'=>'interspire.smtp.com','number'=>25025);
$ports[] = array('host'=>'helpme.interspire.smtp.com','number'=>80);

$ports[] = array('host'=>'google.com','number'=>80);
$ports[] = array('host'=>'smtp.gmail.com','number'=>587);
$ports[] = array('host'=>'smtp.gmail.com','number'=>465);
$ports[] = array('host'=>'pop.gmail.com','number'=>995);
$ports[] = array('host'=>'imap.gmail.com','number'=>993);

$ports[] = array('host'=>'ftp.mozilla.org','number'=>21);
$ports[] = array('host'=>'smtp2go.com','number'=>8025);

$ports[] = array('host'=>'relay.dnsexit.com','number'=>25);
$ports[] = array('host'=>'relay.dnsexit.com','number'=>26);
$ports[] = array('host'=>'relay.dnsexit.com','number'=>940);
$ports[] = array('host'=>'relay.dnsexit.com','number'=>8001);
$ports[] = array('host'=>'relay.dnsexit.com','number'=>2525);
$ports[] = array('host'=>'relay.dnsexit.com','number'=>80);

$ports[] = array('host'=>'mail.authsmtp.com','number'=>23);
$ports[] = array('host'=>'mail.authsmtp.com','number'=>25);
$ports[] = array('host'=>'mail.authsmtp.com','number'=>26);
$ports[] = array('host'=>'mail.authsmtp.com','number'=>2525);

foreach ($ports as $port)
{
    //$connection = @fsockopen($port['host'], $port['number']);
    $connection = @fsockopen($port['host'], $port['number'], $errno, $errstr, 5); // 5 second timeout for each port.

    if (is_resource($connection))
    {
        echo '<h2>' . $port['host'] . ':' . $port['number'] . ' ' . '(' . getservbyport($port, 'tcp') . ') is open.</h2>' . "\n";

        fclose($connection);
    }

    else
    {
        echo '<h2>' . $port['host'] . ':' . $port['number'] . ' is not responding.</h2>' . "\n";
    }
}


?>