# Mangandakita
Mangan Da Kita by Pio, Danelle

## Libraries Used:
PHP,
Laravel,
MySQL,
Composer

## Documentation:
1.) First, download PHP. Refer to the link below
	(https://windows.php.net/download#php-8.1)
  <ul>
  <li>Download the zip under "VS16 x64 Thread Safe (2022-Jan-19  10:59:38)". </li>
  <li>Extract and install the PHP. Transfer the PHP extracted file in drive C (Make sure that the PHP is installed inside in the extracted folder). </li>
  <li>Next, access the PHP configuration file inside the folder. Open it in VS Code. </li>
  <li>Remove the ";" in the starting lines in line 921 and line 936. (line 921: "extension=fileinfo, line 936: "extension=pdo_mysql) then save the file. </li>
  </ul>
  
2.)Then, download and install the Composer. Refer to the link below. Choose the "Composer-Setup.exe".
	(https://getcomposer.org/download/)
	After installing the composer-setup, run these commands in the terminal. 
  <ul>
  <li>php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" </li>
  <li>php -r "if (hash_file('sha384', 'composer-setup.php') === 					'906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" </li>
  <li>php composer-setup.php </li>
  <li>php -r "unlink('composer-setup.php');" </li>
  </ul>
  
2.1) After running the said commands, create a laravel new project. Run the following commands in the terminal line.
   <ul>
  <li>laravel new "appName" (Note: I put the laravel project in my drive c directory to avoid complications). </li>
  <li>cd "appName" </li>
  </ul>
2.2) After the successful creation of new laravel project,  run also the following commands in the terminal line.
  <ul>
  <li>composer require laravel/ui </li>
  <li>php artisan ui vue --auth </li>
  <li>npm install </li>
  <li>npm run dev</li>
  <li>npm run dev</li>
  <li>npm update vue-loader</li>
  <li>npm run dev</li>
  <li>code .</li>
  </ul>
  
3.) Create database in mysql shell. (I used XAMPP. Make sure to download the software. Choose the latest version. Link: https://www.apachefriends.org/download.html)
  <ul>
  <li>Open XAMPP</li>
  <li>Start the apache and mysql </li>
  <li>Open the shell located in the right part of XAMPP. </li>
  <li>Type, "mysql -u root -p" in the shell. (After this one, I created the database needed using the SQL commands.)</li>
  <li>Return to the VS Code, open the file .env. Change line 14 according to your database name. (e.g, DB_DATABASE = mangandakita)</li>
  <li> Change the migration files inside the project directory(database->migrations) according to your desired table column values</li>
  <li>Return to the terminal (make sure to cd to the correct directory of your project). Type, "php artisan migrate" in the command line.</li>
  </ul>
