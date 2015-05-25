cd /home/www
chmod -R 755 
chmod -R 755 *
su root
ls
cd ..
cd www
mkdir www
cd www/
vi index.php
cd /etc/apache2/sites-available/
ls -l
vi 000-default.conf 
cp 000-default.conf www.conf
su root
chmod -r 777 *
chmod -R 777 *
ls -l
cd ../models/
ls -l
chmod -R 777 *
cd ../..
chmod -R 777 *
su root
