#!/usr/bin/env bash

clear

./vendor/bin/phpcbf --colors --standard=PSR1,PSR2,PSR12 src
./vendor/bin/phpcs --colors --standard=PSR1,PSR2,PSR12 src
