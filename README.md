<h1>SDP ( Software Design Principles - University Project )</h1>

<h2>Description :</h2>
<p>This project is a simple and useful Ecommerce engine using the Laravel 9 . Has Admin and Consumer Panels , Cart and Checkout functionality , Product Page , Product Search , ...</p>
<br />
<br />
<h2>Technology and Tools ( Stack ) :</h2>
<ul>
    <li>BackEnd     : PHP - Laravel 9</li>
    <li>FrontEnd    : Laravel Blade Template Engin - Bootstrap</li>
    <li>Database    : MySQL</li>
    <li>Server     : Wamp - Xampp</li>
    <br />
</ul>

<br />
<br />


<h2>Project Contributors : </h2>
<ul>
    <li><b>Sajad Kolahchi </b> - <a href="https://github.com/sajadko">Github Profile</a></li>
    <hr />
    <li><b>Mohadeseh Rastegar </b> - <a href="https://github.com/MohadesehRastegar">Github Profile</a></li>
    <hr />
    <li><b>Sajad Zahedi </b> - <a href="https://github.com/sajad-zahedi">Github Profile</a></li>
    <hr />
    <li><b>Maedeh Jafari </b> - <a href="https://github.com/Maedehjafari">Github Profile</a></li>

</ul>

<br />
<br />
<br />


<h2>Setup the project ( How To ) : </h2>
<p>Tip : You can also do all the following stuff using <b>Docker</b> if you want :) </p>
<p>1. Install Wamp or Xampp for PHP , Webserver and MySQL and then create a database</p>
<p>2. Install Composer & NPM</p>
<p>3. Clone this repository to a folder </p>
<p>4. Copy .env.example file and remove ".example" from the name and open the .env file with vscode and enter databse name ( and change MySQL Default Port if its not 3306 )</p>
<p>5. Run the following commands in the command line in the folder</p>
<p><code>composer -v </code> // Checking Composer is installed successfully</p>
<p><code>composer install</code> // Install PHP Dependencies</p>
<p><code>npm install</code> // Install Javascript Dependencies</p>
<p><code>npm run dev  </code> // Compile JS & CSS</p>
<p><code>php artisan key:generate </code> // Generate Laravel key</p>
<p><code>php artisan migrate</code> // Push Tables to the database</p>

<br />
<hr />
<br />
<p><b>Tadaaa !</b> now you can run the project by entering the following commands , but the database is empty and there is no admin or consumer user , for seeding the databse with some dummy data , you can run also the second command . </p>

<p><code>php artisan serve</code> // Run the laravel webserver</p>
<p><code>php artisan db:seed</code> // Seed the database with the default data ( dummy data )</p>

<br />
<p>After seeding , you can use this credentials to enter as Admin:

<code>email : sajad@sdp.test <br/> pass: 12345678</code>

</p>
