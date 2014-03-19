<?
 
  require('twilio/Services/Twilio/Capability.php');

  $capability = new Services_Twilio_Capability($_ENV['TWILIO_ACCOUNT_SID'], $_ENV['TWILIO_AUTH_TOKEN']);

  $capability->allowClientOutgoing('APed9de402d2b646f9898c4dc2e7cfb69d');

  $token = $capability->generateToken();

  require('twilio/Services/Twilio.php');

  $twilio_number = 'XXX-XXX-XXXX';

  $client = new Services_Twilio($_ENV['TWILIO_ACCOUNT_SID'], $_ENV['TWILIO_AUTH_TOKEN']);

  $messages = $client->account->messages->getPage(0, 100, array('To' => $twilio_number))->getItems();

  $numbers = array_unique(array_map(function($x){return $x->from;}, $messages));

  $winner = $numbers[array_rand($numbers)];

?>
<!doctype html>
<html>
<head>
<script type="text/javascript"
src="//static.twilio.com/libs/twiliojs/1.1/twilio.min.js"></script>
    <script type="text/javascript">
 
      Twilio.Device.setup("<?= $token ?>");
  
      function call() {
        params = {'FromNumber': '<?= $twilio_number ?>', 'ToNumber': '<?= $winner ?>'};
        Twilio.Device.connect(params);
      }
    </script>
  </head>
  <body>
    
    <button class="call" onclick="call();">
      Call
    </button>
</body>
</html>
