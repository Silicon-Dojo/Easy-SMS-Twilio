from twilio.rest import Client

account_sid = "[YOUR KEY]"
auth_token = "[YOUR TOKEN]"
client = Client(account_sid, auth_token)

#Full Number With Area Code 
message = client.messages.create(
	to="[Reciever]", #Example +10987654321
	from_="[Sender]",
	body = "[Message]")


print(message.sid)