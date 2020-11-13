# PFN Laravel Encrypt Database

[![Latest Stable Version](https://poser.pugx.org/premiumfastnet/lara-encrypt-db/v/stable)](https://packagist.org/packages/premiumfastnet/lara-encrypt-db)
[![Latest Unstable Version](https://poser.pugx.org/premiumfastnet/lara-encrypt-db/v/unstable)](https://packagist.org/packages/premiumfastnet/lara-encrypt-db)
[![Total Downloads](https://poser.pugx.org/premiumfastnet/lara-encrypt-db/downloads)](https://packagist.org/packages/premiumfastnet/lara-encrypt-db)
[![License](https://poser.pugx.org/premiumfastnet/lara-encrypt-db/license)](https://packagist.org/packages/premiumfastnet/lara-encrypt-db)
[![StyleCI](https://github.styleci.io/repos/249607888/shield?branch=master)](https://github.styleci.io/repos/249607888)

Encrypt and Decrypt Value to Database

## Installation

```
composer require premiumfastnet/lara-encrypt-db
```

## How to Use

```php
<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PremiumFastNetwork\Traits\EncryptDB; // add this

class User extends Authenticatable
{
    use EncryptDB;

    /**
     * List Attributes For Encrypt
     */
    protected $encryptDB = ['token'];

    // rest of your model
```
