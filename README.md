# CMS

_A content management system for any use._


### How to install 🔧

To install first run the next commands:

```
npm install
```
```
composer install
```

these will install all the dependencies.

The next thing it's to create the database on your local database server, which name is **blog**. Use mysql.

After that just need to run the migrations with the command:

```
php artisan migrate --seed
```

The last thing is to set the storage link to the public folder, run the next command:

```
php artisan storage:link
```

This will create the linked folder to upload post images.

_Default user_

*user: root@admin.com

*pass: root