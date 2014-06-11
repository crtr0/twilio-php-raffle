<pre>
<?

include('./httpful.phar');

$uri = "https://api.twilio.com/2010-04-01/Accounts/".$_ENV['TWILIO_ACCOUNT_SID']."/Messages.json";
$response = \Httpful\Request::get($uri)
  ->authenticateWith($_ENV['TWILIO_ACCOUNT_SID'], $_ENV['TWILIO_AUTH_TOKEN'])
  ->send();
 
print_r($response->body);
?>
</pre>
