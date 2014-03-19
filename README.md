# Twilio PHP Sample Code

Some simple PHP scripts to run an SMS raffle powered by [Twilio](http://twilio.com). The code illustrate how to:

* Process an incoming SMS
* Retrieve data via the [REST API](https://www.twilio.com/docs/api/rest)
* Make an outbound phone call
* Play an MP3 file
* Turn a web browser into a soft phone using [Twilio Client](https://www.twilio.com/client)


## Installation

1. Deploy this code to your PHP host. 
2. Install the Twilio [PHP helper library](https://github.com/twilio/twilio-php) to a subdirectory called `twilio`.
3. Set the Mesaging Request URL of a Twilio number to `http://YOURHOST/sms.php`

## Usage

1. Ask people to send an SMS with their first and last name to your Twilio number.
2. To call the winner and play a congratulatory MP3, navigate to `winner.php`.
3. To call the winner through your browser using Twilio Client, navigate to `client.php`.

## Meta 

* No warranty expressed or implied.  Software is as is.
* [MIT License](http://www.opensource.org/licenses/mit-license.html)
* Brought to you by [Twilio](http://www.twilio.com) Seattle
