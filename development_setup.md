Steps for setting up on Windows

1) Install Netbeans 8.2(http://download.netbeans.org/netbeans/8.2/final/bundles/netbeans-8.2-php-windows-x64.exe)
2) install XAMPP 7.2.3 https://www.apachefriends.org/download.html (note: it has to be the one with php 7.2 or higher)
3) start the XAMPP application and press "start"  for both apache and Mysql
4) run "git clone https://github.com/evpxregu/agiledevelopmentprocess" in the C:\xampp\htdocs folder (assuming you run windows)
(above assumes you have git installed, if not you can find it here:https://git-scm.com/download/win)
5) if done correctly you should be able to see the hello world website when you go to http://localhost/agiledevelopmentprocess/App/Index.php
6) Start netbeans up and go to file -> Open project and select the app with the path "C:\xampp\htdocs\agiledevelopmentprocess\App" 

What we now have is a working database server(without a database), a working webserver with a working php installation.

The next when you want to work on the applications don't forget to check if xampp is still running and apache and mysql as well.

