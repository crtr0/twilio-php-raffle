<?

  require('twilio/Services/Twilio.php');

  $client = new Services_Twilio($_ENV['TWILIO_ACCOUNT_SID'], $_ENV['TWILIO_AUTH_TOKEN']);

  $messages = $client->account->messages->getPage(0, 100, array('To' => '+17274740846'))->getItems();

  $numbers = array_unique(array_map(function($x){return $x->from;}, $messages));

  $winner = $numbers[array_rand($numbers)];

  $client->account->calls->create('+17274740846', $winner, 'https://650fb145.ngrok.com/congrats.php');

  echo "We have a winner: " . substr($winner, -4);

?>