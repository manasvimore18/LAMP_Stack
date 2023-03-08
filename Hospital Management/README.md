## 1.Installing Apache and Updating the Firewall
Started by updating the package manager cache. 
$ sudo apt update
Then, installed Apache with
$ sudo apt install apache2
## 2.Adjusting the Firewall to Allow Web Traffic
$ sudo ufw app list
$ sudo ufw app info "Apache Full"

Allow incoming HTTP and HTTPS traffic for this profile
$ sudo ufw allow in "Apache Full"
Do a spot check right away to verify that everything went as planned
by visiting localhost in your web browser
