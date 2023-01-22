# course_task
Course Task 1


# Setup Database
### Create Config Folder
- create <code>.env</code> file in <code>root</code> project
- put these code in the <code>.env</code> file (for mysql database):
```laravel
    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=DB_NAME
    DB_USERNAME=DB_USER
    DB_PASSWORD=DB_USER_PASS
```

# Run
```bash
# install packages
composer install

# migration and seeder
 php artisan migrate --seed

# run server
php artisan serve
```
## License
[MIT](https://choosealicense.com/licenses/mit/)

