#!/bin/bash

cd dpl9-app

# Backup previous DB
echo "///// Starting backup for database ..."
rm -rf dump-drupal9.sql.gz
lando db-export dump-drupal9.sql
echo "///// Done database backup"

cd ..


