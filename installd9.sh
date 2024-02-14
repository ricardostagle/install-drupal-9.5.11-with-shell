#!/bin/bash

# remove previous folder
echo "///// Destroying lando and remove files ..."
./removed9.sh
echo "///// Stopped and destroyed lando, removed files."

# Initialize a drupal10 recipe
#mkdir dpl9-app
sudo chmod -R 777 dpl9-app
#sudo chown -R www-data:www-data dpl9-app
cd dpl9-app

# Create latest drupal10 project via composer
#mkdir tmp
#chmod 777 -R tmp/
#sudo chown -R www-data:www-data *
  
#lando init \
#    --source cwd \
#    --recipe drupal9 \
#    --webroot web \
#    --php 8.2 \
#    --name dpl9-app \

# Get drupal/recommended project
#lando composer create-project drupal/recommended-project:9.5.11 "tmp" && cp -r tmp/. . && rm -rf tmp/

# Get drupal/recommended project previously and manually downloaded in d9 folder in Ubuntu with the content gotten by composer create-project drupal/recommended-project:9.5.11 "tmp"
cp -r ../d9/. .

# Composer can timeout on install for some machines, if that happens, run the following command and then re-run the previous lando composer command:
# lando composer config --global process-timeout 2000

# Start it up
echo "///// Lando starting ..."
lando start
echo "///// Lando finished."

# Install a site local drush
#lando composer require drush/drush

# Execute composer install
lando composer update -W
echo "///// Composer updated"

# Install empty drupal db
#lando drush site:install --db-url=mysql://drupal9:drupal9@database/drupal9 -y

# Backup and Restore DB
#lando db-export dump-drupal9.sql
#lando destroy -y && lando start && lando db-import dump-drupal9.sql.gz

# Install previous DB
echo "///// Starting loading database ..."
lando db-import dump-drupal9.sql.gz
echo "///// Loaded database"

# List information about this app
lando info
# Log in as admin with Drush or with password Guadalajara01!!!
lando drush uli -l https://dpl9-app.lndo.site
echo "///// Access to admin user."

#"lando ssh -c "ls -la /"
lando ssh -c "/app/web/scripts/modify_user.sh"

# Destroy it
#lando destroy -y

# Remove cache
lando drush cr