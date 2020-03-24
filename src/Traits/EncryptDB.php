<?php

namespace PremiumFastNetwork\EncryptDB\Traits;

use Illuminate\Contracts\Encryption\DecryptException;

trait EncryptDB
{
    protected $encryptDB = [];

    /**
     * Set a given attribute on the model.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return mixed
     */
    public function setAttribute($key, $value)
    {
        if (!is_null($this->encryptDB) || in_array($key, $this->encryptDB)) {
            $value = Crypt::encrypt($value);
        }

        return parent::setAttribute($key, $value);
    }

    /**
     * Get all of the current attributes on the model.
     *
     * @return array
     */
    public function getAttribute($key)
    {
        if (!is_null($this->encryptDB) || in_array($key, $this->encryptDB)) {
            try {
                return Crypt::decrypt($this->attributes[$key]);
            } catch (DecryptException $e) {
                echo 'Error: '.  $e->getMessage() ."\n";
            }
        }

        return parent::getAttribute($key);
    }

    /**
     * Convert the model's attributes to an array.
     *
     * @return array
     */
    public function attributesToArray()
    {
        $attributes = parent::attributesToArray();

        foreach ($attributes as $key => $value) {
            if (!is_null($this->encryptDB) || in_array($key, $this->encryptDB)) {
                $attributes[$key] = Crypt::encrypt($value);
            }
        }

        return $attributes;
    }
}
