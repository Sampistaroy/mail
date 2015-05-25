vi /home/croogo/www/index.php
cd /home/
ls
cd croogo/
ls
mkdir www
cd www/
vi index.php
su root
ls
cd croogo/
cd www/
ls -l
cd app
chmod -R 775 tmp
cd tmp/
chmod -R 775 *
ls -l
chmod -R 777 *
cd ..
su root
cd /home/croogo/www
ls
php -r "eval('?>'.file_get_contents('http://getcomposer.org/installer'));"
wnload failed: file_get_contents(): SSL operation failed with code 1. OpenSSL Error messages:
su root
