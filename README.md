# Command Line Users Management

## Introduction
This plugin allows administrators to perform tasks on backend users (like change password) from command line

\* NOTE: there is no backend gui

## Installation
In your OctoberCMS backend, go to Updates > Install plugins and search for "martin.adminer" or install from October Marketplace.

## Current commands

List backend users

```php artisan users:list```

Change backend user password

```php artisan users:change-password```
