#!/bin/bash

# Run Task
echo "Run Modify User task"
# Update External tags in node

#drush user-create adminuser --mail="adminuser@gmail.com" --password="UserPw"; drush user-add-role "administrator" adminuser';
#drush user-create adminuser2 --mail="adminuser2@gmail.com" --password="UserPw"; drush user-add-role "administrator" adminuser2;
drush user-create adminuser3 --mail="adminuser3@gmail.com" --password="UserPw"; drush user-add-role "administrator" adminuser3;

drush php-script /app/web/scripts/modify_user.php
echo "Finished Modify User task"

# Clear the drush cache.
drush cr
