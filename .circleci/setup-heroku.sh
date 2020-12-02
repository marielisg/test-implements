echo "web: vendor/bin/heroku-php-apache2 public/" > Procfile
git add .
git commit -m "Procfile for heroku"
heroku create
heroku config:set APP_KEY=0919098f-bc1e-4b92-a0fc-8a801c26de1c
git push heroku master
heroku open
