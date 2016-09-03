# Installation on Raspberry PI

The goal of the script is to send IP address, name and date+time at boot of RPI to a server in order to locate it.

There are many ways to launch a script on Linux at the end of boot.
This one is simple but indirect.

1. Copy `send_ip.sh` script in `/usr/local/bin`
2. Configure the script with the URL of the server where PHP script is installed (see SERVER_ADDRESS variable)
3. Edit crontab as root using the following command: `sudo crontab -e`
4. Add the line in crontab: `@reboot /usr/local/bin/send_ip.sh`

Reboot ... and enjoy.