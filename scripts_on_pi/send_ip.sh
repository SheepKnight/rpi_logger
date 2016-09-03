#!/bin/sh
# Send informations to server
SERVER_ADDRESS= "http://myserver.fqdn/rpi_send_ip.php"
name=`/bin/hostname`
address=`/bin/hostname -I`
# remove trainling space
address="${address%"${address##*[![:space:]]}"}"
timestamp=`date`
#param="name=$name&address=$address&timestamp=$timestamp"
curl -G -v $SERVER_ADDRESS --data-urlencode "name=$name" --data-urlencode "address=$address" --data-urlencode "timestamp=$timestamp"
 

