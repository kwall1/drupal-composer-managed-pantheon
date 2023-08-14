<?php

print "Installing Drupal...\n";
passthru('drush site:install --site-name="KWALL Drupal Starter" --site-mail="info@kwallcompany.com" -y');
print "Install Drupal complete.\n";
