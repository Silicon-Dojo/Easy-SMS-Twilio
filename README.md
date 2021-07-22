<div class="entry-content clearfix">
<figure class="entry-thumbnail">
<img src="http://www.silicondojo.com/wp-content/uploads/2021/06/22Easy22-SMS-with-Twilio-678x381.jpg" alt="" title="Easy SMS with Twilio">
</figure>
	
	
https://www.youtube.com/watch?v=ZAho9cq6plg


<p>Twilio allows you to send SMS to both send and receive messages from users with nothing more than a flip phone. SMS doesn’t require configurations the way wifi does, and generally works almost anywhere. Twilio allows you to create simple, but powerful, scripts for everything from notifications to full fledged administration.</p>



<p></p>



<h3>Slide Notes: </h3>



<p><strong>“Easy” Twilio for SMS</strong></p>



<p><strong>Intro to Twilio</strong></p>



<ul><li>SMS IaaS<ul><li>IoT is NOT just TCP/IP</li><li>SMS is most accessible communication system globally&nbsp;</li></ul></li><li>PAIN in the BUTT<ul><li>Documentation Stinks</li></ul></li><li>Allows you to extend communication to SMS devices&nbsp;</li><li>19705980147</li></ul>



<p><strong>IoT Beyond TCP/IP</strong></p>



<ul><li>TCP/IP is power intensive</li><li>TCP/IP is prone to attacks</li><li>TCP/IP requires configuration and maintenance</li><li>TCP/IP is short distance</li></ul>



<p><strong>Twilio Communication Diagram</strong></p>



<p><strong>Twilio Account</strong></p>



<p><strong>SMS Webhook</strong></p>



<p><strong>Languages for Twilio</strong></p>



<p><strong>Basic Twilio Setup on Digital Ocean</strong></p>



<ul><li>Basic Ubuntu Droplet on DigitalOcean</li><li>Apt update</li><li>Apt upgrade</li><li>Sudo apt-install python3-pip</li><li>Pip3 install twilio</li></ul>



<p><strong>TwilML</strong></p>



<p><strong>Sending Text’s from Python</strong></p>



<p><strong>Parse and Respond to Inbound Text</strong></p>



<p><strong>Python Trigger Script</strong></p>



<p><strong>Opt Out</strong></p>



<p><strong>Prices</strong></p>



<h3>Code:</h3>



<p><strong>twilio.py</strong></p>



<p>This code allows you to send a text message from your python script.</p>



<p>In Ubuntu make sure to setup the enviornment:</p>



<ul id="block-33d9d466-826e-40da-b213-a80d4b77f69e"><li>Apt update</li><li>Apt upgrade</li><li>Sudo apt-install python3-pip</li><li>Pip3 install twilio</li></ul>



<pre class="wp-block-code"><code>from twilio.rest import Client

account_sid = "ACa5db7d403595580275db6ba5d85e3666"
auth_token = "935f20e2bc477fc7da277d9cd7adb666"
client = Client(account_sid, auth_token)

message = client.messages.create(
	to="+12223334444",
	from_="+19705980147",
	body = " this is a test")


print(message.sid)</code></pre>



<p><strong>sms_parse.php</strong></p>



<p>Used to parse incoming SMS messages.  This message replies to the sender, and saves a comand to a file so the Raspberry Pi can read the command and take an action.</p>



<pre class="wp-block-code"><code>&lt;?php

$number = $_POST['From'];
$body = $_POST['Body'];
$pic = "https://media.vanityfair.com/photos/59653e9a3a5a726a87a6302d/master/pass/Idris-Elba.jpg";

header('Content-Type: text/xml');
?&gt;

&lt;Response&gt;
	&lt;Message&gt;
	Hello &lt;?php echo $number ?&gt;.
	You said &lt;?php echo $body ?&gt;
	&lt;?php file_put_contents("message.php", $body); ?&gt;
	&lt;Media&gt;&lt;?php echo $pic ?&gt;&lt;/Media&gt;
	&lt;/Message&gt;


&lt;/Response&gt;</code></pre>



<p><strong>Raspberry Pi Python Script</strong></p>



<p>This script reads the command in the <em>message.php</em> file on your public web server and then turns a relay on or off.</p>



<figure class="wp-block-image size-large"><a href="http://www.silicondojo.com/wp-content/uploads/2021/06/IMG_1898-scaled.jpeg"><img loading="lazy" width="1024" height="768" src="http://www.silicondojo.com/wp-content/uploads/2021/06/IMG_1898-1024x768.jpeg" alt="" class="wp-image-271" srcset="http://www.silicondojo.com/wp-content/uploads/2021/06/IMG_1898-1024x768.jpeg 1024w, http://www.silicondojo.com/wp-content/uploads/2021/06/IMG_1898-300x225.jpeg 300w, http://www.silicondojo.com/wp-content/uploads/2021/06/IMG_1898-768x576.jpeg 768w, http://www.silicondojo.com/wp-content/uploads/2021/06/IMG_1898-1536x1152.jpeg 1536w, http://www.silicondojo.com/wp-content/uploads/2021/06/IMG_1898-2048x1536.jpeg 2048w, http://www.silicondojo.com/wp-content/uploads/2021/06/IMG_1898-678x509.jpeg 678w, http://www.silicondojo.com/wp-content/uploads/2021/06/IMG_1898-326x245.jpeg 326w, http://www.silicondojo.com/wp-content/uploads/2021/06/IMG_1898-80x60.jpeg 80w" sizes="(max-width: 1024px) 100vw, 1024px"></a></figure>
	</div>
