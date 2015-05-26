lstat("/home/www/www/app", {st_mode=S_IFDIR|0777, st_size=4096, ...}) = 0
lstat("/home/www/www/app/webroot", {st_mode=S_IFDIR|0777, st_size=4096, ...}) = 0
lstat("/home/www/www/app/webroot/app", 0x780298cd76f0) = -1 ENOENT (No such file or directory                                                                                                                  )
stat("/home/www/www/app/webroot/app/webroot/app/webroot/app/webroot/app/webroot/app/webroot/a                                                                                                                  pp/webroot/", 0x780298cd7670) = -1 ENOENT (No such file or directory)
lstat("/home", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
lstat("/home/www", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
lstat("/home/www/www", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
lstat("/home/www/www/app", {st_mode=S_IFDIR|0777, st_size=4096, ...}) = 0
lstat("/home/www/www/app/webroot", {st_mode=S_IFDIR|0777, st_size=4096, ...}) = 0
lstat("/home/www/www/app/webroot/app", 0x780298cd7670) = -1 ENOENT (No such file or directory                                                                                                                  )
mmap(NULL, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x75d091451000
stat("/home/www/www/app/webroot/app/webroot/app/webroot/app/webroot/app/webroot/app/webroot/a                                                                                                                  pp/webroot/app/webroot/", 0x780298cd75f0) = -1 ENOENT (No such file or directory)
lstat("/home", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
lstat("/home/www", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
lstat("/home/www/www", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
lstat("/home/www/www/app", {st_mode=S_IFDIR|0777, st_size=4096, ...}) = 0
lstat("/home/www/www/app/webroot", {st_mode=S_IFDIR|0777, st_size=4096, ...}) = 0
lstat("/home/www/www/app/webroot/app", 0x780298cd75f0) = -1 ENOENT (No such file or directory                                                                                                                  )
mmap(NULL, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x75d09144f000
stat("/home/www/www/app/webroot/app/webroot/app/webroot/app/webroot/app/webroot/app/webroot/a                                                                                                                  pp/webroot/app/webroot/app/webroot/", 0x780298cd7570) = -1 ENOENT (No such file or directory)
lstat("/home", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
lstat("/home/www", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
lstat("/home/www/www", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
lstat("/home/www/www/app", {st_mode=S_IFDIR|0777, st_size=4096, ...}) = 0
lstat("/home/www/www/app/webroot", {st_mode=S_IFDIR|0777, st_size=4096, ...}) = 0
lstat("/home/www/www/app/webroot/app", 0x780298cd7570) = -1 ENOENT (No such file or directory                                                                                                                  )
mmap(NULL, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x75d09144d000
stat("/home/www/www/app/webroot/app/webroot/app/webroot/app/webroot/app/webroot/app/webroot/a                                                                                                                  pp/webroot/app/webroot/app/webroot/app/webroot/", 0x780298cd74f0) = -1 ENOENT (No such file o                                                                                                                  r directory)
lstat("/home", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
lstat("/home/www", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
lstat("/home/www/www", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
lstat("/home/www/www/app", {st_mode=S_IFDIR|0777, st_size=4096, ...}) = 0
lstat("/home/www/www/app/webroot", {st_mode=S_IFDIR|0777, st_size=4096, ...}) = 0
lstat("/home/www/www/app/webroot/app", 0x780298cd74f0) = -1 ENOENT (No such file or directory                                                                                                                  )
write(2, "[Sun May 24 04:21:09.170055 2015] [core:error] [pid 23552] [client 81.242.143.240:6                                                                                                                  4966] AH00124: Request exceeded the limit of 10 internal redirects due to probable configurat                                                                                                                  ion error. Use 'LimitInt"..., 293) = 293
write(2, "[Sun May 24 04:21:09.170226 2015] [core:debug] [pid 23552] core.c(3533): [client 81                                                                                                                  .242.143.240:64966] AH00121: r->uri = /app/webroot/app/webroot/app/webroot/app/webroot/app/we                                                                                                                  broot/app/webroot/app/we"..., 243) = 243
write(2, "[Sun May 24 04:21:09.170383 2015] [core:debug] [pid 23552] core.c(3540): [client 81                                                                                                                  .242.143.240:64966] AH00122: redirected from r->uri = /app/webroot/app/webroot/app/webroot/ap                                                                                                                  p/webroot/app/webroot/ap"..., 247) = 247
write(2, "[Sun May 24 04:21:09.170517 2015] [core:debug] [pid 23552] core.c(3540): [client 81                                                                                                                  .242.143.240:64966] AH00122: redirected from r->uri = /app/webroot/app/webroot/app/webroot/ap                                                                                                                  p/webroot/app/webroot/ap"..., 235) = 235
write(2, "[Sun May 24 04:21:09.170683 2015] [core:debug] [pid 23552] core.c(3540): [client 81                                                                                                                  .242.143.240:64966] AH00122: redirected from r->uri = /app/webroot/app/webroot/app/webroot/ap                                                                                                                  p/webroot/app/webroot/ap"..., 223) = 223
write(2, "[Sun May 24 04:21:09.170816 2015] [core:debug] [pid 23552] core.c(3540): [client 81                                                                                                                  .242.143.240:64966] AH00122: redirected from r->uri = /app/webroot/app/webroot/app/webroot/ap                                                                                                                  p/webroot/app/webroot/ap"..., 211) = 211
write(2, "[Sun May 24 04:21:09.170949 2015] [core:debug] [pid 23552] core.c(3540): [client 81                                                                                                                  .242.143.240:64966] AH00122: redirected from r->uri = /app/webroot/app/webroot/app/webroot/ap                                                                                                                  p/webroot/app/webroot/\n", 199) = 199
write(2, "[Sun May 24 04:21:09.171082 2015] [core:debug] [pid 23552] core.c(3540): [client 81                                                                                                                  .242.143.240:64966] AH00122: redirected from r->uri = /app/webroot/app/webroot/app/webroot/ap                                                                                                                  p/webroot/\n", 187) = 187
write(2, "[Sun May 24 04:21:09.171214 2015] [core:debug] [pid 23552] core.c(3540): [client 81                                                                                                                  .242.143.240:64966] AH00122: redirected from r->uri = /app/webroot/app/webroot/app/webroot/\n                                                                                                                  ", 175) = 175
write(2, "[Sun May 24 04:21:09.171343 2015] [core:debug] [pid 23552] core.c(3540): [client 81                                                                                                                  .242.143.240:64966] AH00122: redirected from r->uri = /app/webroot/app/webroot/\n", 163) = 16                                                                                                                  3
write(2, "[Sun May 24 04:21:09.171504 2015] [core:debug] [pid 23552] core.c(3540): [client 81                                                                                                                  .242.143.240:64966] AH00122: redirected from r->uri = /app/webroot/\n", 151) = 151
write(2, "[Sun May 24 04:21:09.171658 2015] [core:debug] [pid 23552] core.c(3540): [client 81                                                                                                                  .242.143.240:64966] AH00122: redirected from r->uri = /\n", 139) = 139
mmap(NULL, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x75d09144b000
mmap(NULL, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x75d091449000
mmap(NULL, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x75d091447000
write(10, "81.242.143.240 - - [24/May/2015:04:21:09 +0200] \"GET / HTTP/1.1\" 500 773 \"-\" \                                                                                                                  "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:38.0) Gecko/20100101 Firefox/38.0\"\n", 152) = 152
times({tms_utime=0, tms_stime=1, tms_cutime=0, tms_cstime=0}) = 1745837932
shutdown(19, SHUT_WR)                   = 0
poll([{fd=19, events=POLLIN}], 1, 2000) = 1 ([{fd=19, revents=POLLIN|POLLERR|POLLHUP}])
read(19, 0x780298cd7b40, 512)           = -1 ECONNRESET (Connection reset by peer)
close(19)                               = 0
read(7, 0x780298cd7d6f, 1)              = -1 EAGAIN (Resource temporarily unavailable)
fcntl(17, F_SETLKW, {type=F_WRLCK, whence=SEEK_SET, start=0, len=0}
service apache2 reload
cat /tmp/strace.out.24111
clear
clear
cat /tmp/strace.out.24111
cat /tmp/strace.out.21302
nano /etc/apt/sources.list
apt-get install ntp ntpdate
aptitude search ftp
apt-get search ftp
apt search ftp
apt-get install vsftpd
netstat -npl
/etc/init.d/vsftpd stop
vi /etc/vsftpd.conf
vi /etc/vsftpd.conf
/etc/init.d/vsftpd start
/etc/init.d/vsftpd stop
vi /etc/vsftpd.conf
/etc/init.d/vsftpd start
netstat -npl
apt-get -purge remove vsftpd
apt-get --purge remove vsftpd
netstat -npl
apt-get install ssh openssh-server
sudo apt-get install proftpd
apt-get install proftpd
vi /etc/proftpd/proftpd.conf
sudo /etc/init.d/proftpd reload
/etc/init.d/proftpd reload
/etc/init.d/proftpd restart
ls -l /home
cd /home/www/www/app/
ls -l
cd tmp
ls -l
cd cache/
ls
chmod -R 755 *
cd persistent/
ls -l
chmod -R 775 *
cd ../models/
chmod -R 775 *
 _cake_core_ cache was unable to write 'cake_dev_fr
:w

q
chmod 777 *
cd ../persistent/
chmod 777 *
su www
cd /etc/apache2/sites-available/
vi www.conf 
ServerSignature Off
service apache2 restart
vi www.conf 
service apache2 restart
a2enmod userdir
vi www.conf 
service apache2 restart
vi www.conf 
service apache2 restart
vi www.conf 
service apache2 restart
vi www.conf 
service apache2 restart
vi www.conf 
vi www.conf 
service apache2 restart
vi www.conf 
vi /etc/hosts
cat /var/log/apache2/error.log
cat /var/log/apache2/error.log
clear
vi /var/log/apache2/error.log
cd ../sites-enabled/
ls
vi www.conf 
cd ../sites-available/
vi www.conf 
service apache2 restart
systemctl status apache2.service
cd ../sites-enabled/
vi www.conf 
cd ../sites-available/
vi www.conf 
service apache2 restart
systemctl status apache2.service
vi www.conf 
service apache2 restart
tree -apug /srv/http
grep -Ev "^ *$|^ *#" /etc/httpd/conf/httpd.conf
cd ..
ls
ls -a
cd sites-available/
vi www.conf 
service apache2 restart
vi www.conf 
service apache2 restart
find /  httpd.conf 
cd /usr/local/apache2
cd 
cd /usr/local/apache2/conf/httpd.conf
cd /etc/apache2/
grep -rn "ErrorLog" /etc/apache2/
grep -rn "${APACHE_LOG_DIR}" /etc/apache2/
grep -rn "ErrorLog" /etc/apache2/
vi apache2.conf 
clear
vi apache2.conf 
vi apache2.conf 
ls
vi envvars 
cd /var/log/apache2/
ls
ls -l
cat error.log
ls -l
cat error.log.1
cat error.log.1
date
vi /etc/apache2/sites-available/www.conf 
vi /etc/hosts
vi /etc/hosts
service apache2 restart
vi /etc/hosts
service apache2 restart
vi /etc/hosts
service apache2 restart
vi /etc/hosts
service apache2 restart
vi /etc/apache2/apache2.conf 
vi /etc/apache2/apache2.conf 
grep -rn "ServerTokens" /etc/apache2/
vi /etc/apache2/conf-available//security.conf 
service apache2 restart
vi /etc/apache2/conf-available//security.conf 
grep -rn "expose_php" /etc/apache2/
grep -rn "expose_php" /etc/php
ls -l /etc/
grep -rn "expose_php" /etc/php5
make clean
./configure –prefix=/usr –with-apxs=/usr/bin/apxs2 –with-setid-mode=paranoid –with-apache-user=www-data –with-php=/usr/bin/php4-cgi –with-logfile=/var/log/apache2/suphp.log
ls -l
vi error.log
vi error.log.1
vi error.log.2
vi error.log.2.gz 
cd /home/www/
chgrp www-data /home/www/*
service apache2 restart
grep -rn "Deny" /etc/apache2/
vi /etc/apache2/conf-available/security.conf
vi /etc/apache2/sites-available/www.conf 
service apache2 restart
ls
cd /etc/apache2/sites-available/
ls
rm www.conf 
cp doc.conf www.conf
vi www.conf 
service apache2 restart
vi www.conf 
service apache2 restart
cd /var/log/apache2/
ls
ls -l
cat error.log
cat error.log.1
cat error.log
vi error.log
vi error.log.1
vi error.log.2.gz 
vi error.log
vi error.log
vi error.log.1
ls
cat access.log
:q
cat access.log
ls
cat error.log
[Sun May 24 01:12:35.488698 2015] [mpm_prefork:notice] [pid 10530] AH00169: caught SIGTERM, shutting down
[Sun May 24 01:12:37.042790 2015] [auth_digest:notice] [pid 10640] AH01757: generating secret for digest authentication ...
[Sun May 24 01:12:37.103072 2015] [mpm_prefork:notice] [pid 10640] AH00163: Apache/2.4.10 (Debian) OpenSSL/1.0.1k configured -- resuming normal operations
[Sun May 24 01:12:37.103174 2015] [core:notice] [pid 10640] AH00094: Command line: '/usr/sbin/apache2'
cat error.log.1
vi error.log.1
vi error.log.2.gz 
cat access.log
cd /etc//apache2/mods-available/
vi mod_rewrite
ls
vi rewrite.load 
cd /usr/lib/apache2/modules/
ls
vi mod_rewrite.so 
cd /etc/apache2/sites-available/
vi www.conf 
vi www.conf 
service apache2 restart
cat /var/log/apache2/error.log
cat /var/log/apache2/error.log
cat /var/log/apache2/error.log
vi www.conf 
service apache2 restart
cat /var/log/apache2/error.log
vi www.conf 
cat /var/log/apache2/error.log
service apache2 restart
cat /var/log/apache2/error.log
strace -o /tmp/outputfile -s 5000 httpd -X or strace -ff -F -s200 -o /tmp/strace.out -p PID or the single most important debugging tool or http://en.wikipedia.org/wiki/Strace
strace -o /tmp/outputfile -s 5000 httpd -X or strace -ff -F -s200 -o /tmp/strace.out -p PID or the single most important debugging tool or http://en.wikipedia.org/wiki/Stracestrace -o /tmp/outputfile -s 5000 httpd -X or strace -ff -F -s200 -o /tmp/strace.out -p PID
strace -o /tmp/outputfile -s 5000 httpd -X or strace -ff -F -s200 -o /tmp/strace.out -p PID
strace -o /tmp/outputfile -s 5000 httpd -X or strace -ff -F -s200 -o /tmp/strace.out -p PID
apt-get strace
apt-get install strace
strace -o /tmp/outputfile -s 5000 httpd -X or strace -ff -F -s200 -o /tmp/strace.out -p PID
ps -ef | grep httpd
ps -ef | grep apche
ps -ef | grep apache
cd ..
ls
 strace -o /tmp/outputfile -s 5000 apache2.conf -X or strace -ff -F -s200 -o /tmp/strace.out -p PID
 strace -o /tmp/outputfile -s 5000 /etc/apache2/apache2.conf -X or strace -ff -F -s200 -o /tmp/strace.out -p PID
ps -fC apache2
strace -ff -F -s200 -o /tmp/strace.out -p 13611
strace -o /tmp/outputfile -s 5000 httpd -X or strace -ff -F -s200 -o /tmp/strace.out -p 13611
 strace -ff -F -s200 -o /tmp/strace.out -p 13611
ps -fC apache2
 strace -ff -F -s200 -o /tmp/strace.out -p 13611
 strace -ff -F -s200 -o /tmp/strace.out -p 13611    Process 13611 attached
Process 16161 attached
j,npk
jhhj
 strace -ff -F -s200 -o /tmp/strace.out -p 13611
ps -fC apache2
 strace -ff -F -s200 -o /tmp/strace.out -p 20174
ps -fC apache2
 strace -ff -F -s200 -o /tmp/strace.out -p 20374
ps -fC apache2
 strace -ff -F -s200 -o /tmp/strace.out -p 21302
ps -fC apache2
 strace -ff -F -s200 -o /tmp/strace.out -p 21302
find / httpd.conf
find /etc/apache2/ httpd.conf
grep -rn "LoadModule rewrite" /etc/apache2
grep -rn "rewrite" /etc/apache2
grep -rn "httpd" /etc/apache2
grep -rn "rewrite" /etc/apache2
a2enmod rewrite
cd /etc/apache2/sites-available/
vi www.conf 
service apache2 reload
vi www.conf 
vi doc.conf 
vi doc.conf 
vi doc.conf 
vi www.conf 
vi doc.conf 
vi www.conf 
service apache2 reload
vi www.conf 
vi doc.conf 
service apache2 restart
a2dissite 000-default.conf 
ls -l
vi www.conf 
service apache2 restart
vi www.conf 
service apache2 restart
vi www.conf 
service apache2 restart
vi www.conf 
vi www.conf 
service apache2 restart
vi www.conf 
vi www.conf 
service apache2 restart
cd ..
ls
vi apache2.conf 
cd mods-available/
ls
vi rewrite.load 
vi  /usr/lib/apache2/modules/mod_rewrite.so
cd ../sites-available/
vi www.conf 
cd ../sites-available/
service apache2 restart
vi www.conf 
service apache2 restart
vi www.conf 
service apache2 restart
vi www.conf 
service apache2 restart
cd /home/www/www/
chmod 777 app  -R
vi /etc/apache2/sites-available/www.conf 
service apache2 restart
a2enmod suexec rewrite ssl actions include dav_fs dav auth_digest cgi
service apache2 restart
service apache2 restart
vi /etc/apache2/sites-available/www.conf 
service apache2 restart
vi /etc/apache2/sites-available/www.conf 
vi /etc/apache2/apache2.conf 
vi /etc/apache2/apache2.conf 
vi /etc/apache2/apache2.conf 
cd /etc/apache2/apache2.conf 
cd /etc/apache2/apa
cd /etc/apache2/
ls
ls -a
rm .apache2.conf.swp 
vi /etc/apache2/apache2.conf 
service apache2 restart
vi /etc/apache2/apache2.conf 
service apache2 restart
vi /etc/apache2/apache2.conf 
service apache2 restart
vi /etc/apache2/apache2.conf 
service apache2 restart
cd sites-available/
vi www.conf 
cd sites-available/
service apache2 restart
cd sites-available/
vi www.conf 
service apache2 restart
vi www.conf 
vi www.conf 
<IfModule mod_rewrite.c>
                RewriteEngine on
                RewriteCond %{CONTEXT_DOCUMENT_ROOT}%{REQUEST_URI} find /etc/apache2/ httpd.conf
                RewriteRule ^(.*)$ /index.php [L]
su doc
cd /etc/apache2/sites-available/
vi doc.conf 
service apache2 restart
vi doc.conf 
service apache2 restart
vi doc.conf 
service apache2 restart
vi doc.conf 
service apache2 restart
vi doc.conf 
service apache2 restart
service apache2 restart
ls
cd /home
ls
ls -ln
ls -l
cd sampistaroy/
ls
ls -a
cd ..
adduser croogo
cd /etc/apache2/sites-available/
cp www.conf croogo.conf
vi croogo.conf 
vi croogo.conf 
vi /etc/hosts
service apache2 restart
a2ensite croogo.conf
service apache2 reload
vi /etc/hosts
su croogo
chown teamspeakserver ts3server.sqlitedb
su teamspeakserver
find / -name ts3server.sqlitedb
mv /home/www/www/ts3server.sqlitedb /home/teamspeakserver/teamspeak3/ts3server.sqlited
ls -ln
mv /home/teamspeakserver/teamspeak3/ts3server.sqlitedb /home/teamspeakserver/teamspeak3/ts3server.sqlitedb_2
ls -ln
mv /home/teamspeakserver/teamspeak3/ts3server.sqlited /home/teamspeakserver/teamspeak3/ts3server.sqlitedb
ls -ln
./ts3server_startscript.sh reload
./ts3server_startscript.sh restart
./ts3server_startscript.sh stop
su teamspeakserver
adduser teamspeakserver
su teamspeakserver
./ts3server_startscript.sh stop
su teamspeakserver
rm -rf teamspeak3
su teamspeakserver
./ts3server_startscript.sh start
./ts3server_startscript.sh stop
./ts3server_startscript.sh start
./ts3server_startscript.sh stop
su teamspeakserver
su croogo
chown croogomulti *
cd ..
cake bake
Console/cake bake
su croogomulti
adduser croogomulti
cd /etc/apache2/sites-available/
cp www.conf croogomulti.conf
vi croogomulti.conf 
a2ensite croogomulti.conf
vi /etc/hosts
service apache2 reload
su croogomulti
cd /home/
ls
ls -ln
find / -name php.ini
vi /etc/php5/cli/php.ini
su croogo
su croogomulti
script
Script started, file is typescript
col -bx <typescript >fichier_propre
vim fichier_propre
sh -i 2>&1 | tee typescript
git status
ls
rm fichier_propre 
rm typescript 
git status
vi ~/.bashrc 
clear
git status
/usr/share/doc/etckeeper/README.gz
cat /usr/share/doc/xterm/ctlseqs.txt.gz
chown croogomulti *
ls
cd Config/
ls -l
chown croogomulti *
ls -l
chown www-data settings.json
adduser cdcasso
su www
rm -rf *
ls
su croogomulti
