#!/bin/bash

echo "# Deleting vendor folder..."
rm -r -f vendor
rm composer.lock

echo "# Executing Composer..."
composer update --no-plugins

echo "# Executing Scoper..."
vendor/bin/php-scoper add-prefix --force

echo "# Migrating Build..."
rm -r -f vendor
mv build/vendor vendor
rm -r -f build
