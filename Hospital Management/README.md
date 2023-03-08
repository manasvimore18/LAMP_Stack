## 1.Installing Apache and Updating the Firewall
Started by updating the package manager cache.  

  ``$ sudo apt update``  
  
  Then, installed Apache with  
  
``$ sudo apt install apache2``  

## 2.Adjusting the Firewall to Allow Web Traffic
``$ sudo ufw app list``  

``$ sudo ufw app info "Apache Full"``  


Allow incoming HTTP and HTTPS traffic for this profile  

``$ sudo ufw allow in "Apache Full"``  

Do a spot check right away to verify that everything went as planned
by visiting localhost in your web browser  

## 3.Installing MySQL 
``$ sudo apt install mysql-server``  

``$ sudo mysql_secure_installation``  

Then configure the VALIDATE PASSWORD PLUGIN.  

``$ sudo mysql``        ##open the mysql console##  

``SELECT user,authentication_string,plugin,host FROM mysql.user;``    ##Checking authentication##  
##authenticating with a password##  

``ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';``  

``FLUSH PRIVILEGES;``  

``SELECT user,authentication_string,plugin,host FROM mysql.user;``  

``Exit``  

## 4.Installing PHP 
``$ sudo apt install php libapache2-mod-php php-mysql``  

tell the web server to prefer PHP files over others, so make Apache look for an index.php file first.  

``$ sudo nano /etc/apache2/mods-enabled/dir.conf``  

You can now access this website in your web browser by visiting the domain name or public IP address configured for your website, followed by /index.php:  

``http://your_domain_or_IP/todo_list.php``

