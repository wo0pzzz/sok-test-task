SOK test task developed by Arturs B.

Used technologies:

Apache
PHP 5.6
CSS3
HTML5
Bootstrap


Installation:

In hosts file add new line:
127.0.0.1 sok.local

In virtual hosts file:
<VirtualHost *:80>
DocumentRoot "C:/Projects/sok_test"
ServerName sok.local
<Directory C:/Projects/sok_test>
Options Indexes FollowSymLinks
AllowOverride All
Require all granted
Allow from all
</Directory>
</VirtualHost>

Of course you need change directories to yours!
So now you can access website via link: http://sok.local

By default login credentials are:
Login: login
Password: pass

*You can change it in config.php file.