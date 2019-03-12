Listen 8100
<VirtualHost *:8100>
DocumentRoot "/Users/gdanylov/d03"
   <Directory "/Users/gdanylov/d03">
       Options Indexes FollowSymLinks
       Require all granted
       Header always unset X-Frame-Options
   </Directory>
</VirtualHost>