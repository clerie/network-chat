# network-chat
A lightweight PHP Local Area Netwok Chat

The abition is to have a bulletin board for a small LAN party with friends. Everyone can post messages to a chat, beside a static information box.

It has not the intention to be secure, because it is for your LAN.

Currently the source is a mixture of german and english, sorry for that.

## Install
Download erverything an copy to a folder on your LAN webserver with PHP.
Make sure the files in data/ are writeble by PHP.
Type the IP and path to your browser and enyoy.

## What do wich file?
### index.php
This is main page, this page you have to visit with your browser.

### load-clock.php
This prints the current time.

### load-messages.php
This prints alle chat messages.

### load-info.php
This prints the info file.

### data/messages.txt
This file contains all messeges. It is show directly in the webfrontend. You can edit the content safely everytime.

### data/info.txt
Here you can put HTML code wich is shown in the info box.
