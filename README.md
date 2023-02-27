# php_practice
PHP Practice

## how to download different version of php using terminal.

```
  sudo apt-get install software-properties-common -y
  sudo add-apt-repository ppa:ondrej/php
  sudo apt-get update -y
  sudo apt-get install php7.0 php7.0-fpm php7.0-mysql libapache2-mod-php7.0 libapache2-mod-fcgid -y
```

## how to enable perticular php version.
  ### 1. disable perticular version
```
  sudo a2dismod php* 
```

  ### 2. enable perticular version
  ```
    sudo a2enmod php7.4
  ```
  
  ### 3. enter one more command
  ```
  sudo update-alternatives --set php /usr/bin/php7.4
  ```
  
  ### 4. apply one last but not least. 
  
  ```
   sudo service apache2 restart
  ```
  
  ## list out all the php versions installed on your system
  ```
    cd //
    cd etc/php
    ll
  ```
