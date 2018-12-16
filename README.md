# MonkeySurvey
I create this repository to learn how pishing really work.

# How to use this?

1 - Download ngrok from https://ngrok.com/download and install it.

2 - Make ngrok account and insert the auth. key. Follow the instruction on the website.

3 - Clone this repo. ( git clone https://github.com/YsinHsim/MonkeySurvey.git ) and copy all the file to /var/www/html. (i'm using linux mint)

4 - start apache server. ( sudo service apache2 start  OR  sudo systemctl start apache2 )

5 - Go to ngrok directory and start ngrok. ( ./ngrok http 80 )

6 - Copy the http link and test it on another network. It should be work on WAN.

7 - I think that it. Bye.

You can edit the source code( index.php) to make your own survey. It was a fun project.
