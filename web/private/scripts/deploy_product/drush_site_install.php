<?php

print "Installing Drupal...\n";
passthru('drush site:install --site-name="KWALL Drupal 10 Starter" --site-mail="info@kwallcompany.com" -y');
print "Install Drupal complete.\n";
