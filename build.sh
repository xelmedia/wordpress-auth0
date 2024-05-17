#!/bin/bash

./build-dev.sh

composer update --no-dev --optimize-autoloader --no-plugins
