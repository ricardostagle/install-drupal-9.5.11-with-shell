# Install Local Dev Drupal Machine with Docker , Lando, Composer and Shell
This project was generated with drupal 

## Steps:
- Install docker and lando on your computer or server. This script was tested on ubuntu.
- Clone this repo and run the shell file: ./installd9.sh
- You should see a drupal completely set up due to the composer.json and the database
- Password for admin is : Guadalajara01! 
- Take a look of installd9.sh and removed9.sh to make install modifications.
- You will see some custom modules like movie, react_app and react_json_app. React modules are displaying some blocks in the right sidebar section in the homegape. Go to https://dpl9-app.lndo.site/movies to see movie module working properly. Also movie module creates a json with a view used by the react_json_app https://dpl9-app.lndo.site/api/v1/movies. 
- Install more contrib drupal modules normally with the command: lando composer require <module>, and backup your database with your changes with : lando db-export dump-drupal9.sql. Replace the previous db.
- drupal/recommended:9.5.11 project was backup in the d9 folder. That can be removed on mac and line 27 in installd9.sh can be enable and disable line 30. I find that is much better avoid to call the project online many times on Ubuntu and I prefered to backup a completely new project folder. Besides d9 folder can be updated with a d10 project also of course doing adjustments in composer files.