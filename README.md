Steps

Copy .env.example and rename it to .env.

docker-compose up --build

After container is initialized, open a new command prompt and type the following command:

docker-compose exec backend-app
php artisan migrate --seed

now open  http://localhost:3000/

If you are facing any issues, please connect with me on developerjagannath@gmail.com, https://www.linkedin.com/in/jagannathreddy