## Teamleader Case

### How to get started?

#### Dependencies
- PHP `7.3+` (`7.4` recommended)
- A webserver `Apache2`

#### Installation

##### Direct Admin / cPanel
1. Download packed zip file
2. Upload zip file to designated folder
3. Unpack packed zip file
4. Change the `BASE_PATH` at `/crm/config.php` & `/discount-api/config.php` to the web base path. (If in main folder, leave like it is)
5. Test by visiting `example.com/discount-api/test-installation` should display a success message.

##### Ubunutu 20.04

Install dependencies
```
# Update repositories list
sudo apt update

# Install Apache
sudo apt install apache2

# Install PHP
sudo apt install php libapache2-mod-php php7.4-common php7.4-xml php7.4-xmlrpc php7.4-curl php7.4-gd php7.4-imagick php7.4-cli php7.4-dev php7.4-imap php7.4-mbstring php7.4-opcache php7.4-soap php7.4-zip php7.4-intl -y 

# Test installation
php -v

# Setup Firewall
sudo ufw allow 'Apache Full'
```

Configure Apache
```
# Disable default Apache configuration
sudo a2dissite 000-default

# Create website directories
sudo mkdir -p /var/www/html/example.com/public

# Setup correct permissions
sudo chmod -R 755 /var/www/html/example.com
sudo chown -R www-data:www-data /var/www/html/example.com

# Create a new veritual host configuration
sudo nano /etc/apache2/sites-available/example.com.conf
```

Paste the following in the create file
```apacheconfig
<VirtualHost *:80>
     ServerAdmin admin@example.com
     ServerName example.com
     ServerAlias www.example.com

     DocumentRoot /var/www/html/example.com/public

     <Directory /var/www/html/example/public>
         Options Indexes FollowSymLinks
         AllowOverride All
         Require all granted
     </Directory>

     ErrorLog ${APACHE_LOG_DIR}/error.log 
     CustomLog ${APACHE_LOG_DIR}/access.log combined 
 </VirtualHost>
```

Finish the installation
````apacheconfig
# Enable the new configuration
sudo a2ensite example.com.conf
````

### CRM

There is a fictive crm api provided for development purposes. An API index and examples can be found [here](./crm/README.md). 


### Discount API

### Demo

- CRM: https://hogent.timdesmet.be/stage/teamleader/case/crm
- Discount API: https://hogent.timdesmet.be/stage/teamleader/case/discount-api

