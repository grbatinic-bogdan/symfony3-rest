symfony3-rest
=============

A Symfony project created on December 26, 2016, 5:25 pm.

This is symfony3 version of [KNP Symfony Rest Course](https://knpuniversity.com/tracks/symfony#rest)

## Set up

    composer install

Enter a secure passphrase when prompted for `jwt_key_pass_phrase` above.

## Create authentication keys

	openssl genrsa -out var/jwt/private.pem -aes256 4096

Repeat passphrase when generating key above.

	openssl rsa -pubout -in var/jwt/private.pem -out var/jwt/public.pem

## Set up database

    php bin/console doctrine:schema:create --env=test

## Start server

    php bin/console server:run --env=test

## Run tests

    vendor/bin/phpunit src/AppBundle/Tests
