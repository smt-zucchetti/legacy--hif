#create vendor folder
composer install

#add .env file

#if dev

#establish an ssh tunnel to the server
ssh -f forge@cold-wildflower -L 3307:cold-wildflower:3306 -N

#start dev server
php -S localhost:8000