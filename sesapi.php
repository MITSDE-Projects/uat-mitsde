<?php
use Aws\SesV2\SesV2Client;

require 'vendor/autoload.php';

// build email body same as before
ob_start();
?>
<p>Hello Sanjay </p>

<p>Thank you for making your payment. It will take two working days…</p>

<p>Your Transaction ID: 121212 </p>
<p>Your Fee Paid Amount: 101 </p>
<p>Course Name: PGDM</p>
<p>Fees Type: Program Fee</p>

<p>Used Payment Gateway: ICICI</p>

<p>If you have questions, contact admissions@mitsde.com…</p>

<p>Regards,<br><b>Team MIT-School of Distance Education</b></p>
<?php
$body = ob_get_clean();

// SES API client
$client = new SesV2Client([
    'region'  => 'us-east-1',
    'version' => 'latest',
    'credentials' => [
        'key'    => 'AKIA5OQ6466FQH7J437A',
        'secret' => 'BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC'
    ]
]);

$result = $client->sendEmail([
    'FromEmailAddress' => 'admissions@mitsde.com',
    'Destination' => [
        'ToAddresses'  => ['sanjaygaikwad2009@gmail.com'],
        'BccAddresses' => ['sanjay.gaikwad@mitsde.com'] ],
    'ReplyToAddresses' => ['admissions@mitsde.com'],
    'Content' => [
        'Simple' => [
            'Subject' => ['Data' => 'Payment Made Successfully'],
            'Body' => [
                'Html' => ['Data' => $body],
                'Text' => ['Data' => 'Payment confirmation email']
            ]
        ]
    ]
]);

// for logging if needed
file_put_contents('ses_log.txt', print_r($result, true), FILE_APPEND);

?>