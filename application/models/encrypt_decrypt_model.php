<?php

class Encrypt_decrypt_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public $key = '5caGa08x0Z0VHjc1Bpt38oIEben401nq';

    public function encrypt($text)
    {
        return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $this->key, $text, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));
    }

    public function decrypt($text)
    {
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $this->key, base64_decode($text), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
    }

    public function getEncryptedPass($len)
    {
        return $this->encrypt($this->makeRandomPassword($len));
    }

    public function makeRandomPassword($len)
    {
        $salt = "ABCDEFGHJKLMNPRSTUVWXYZ0123456789abchefghjkmnpqrstuvwxyz";
        srand((double)microtime() * 1000000);
        for ($i = 0; $i < $len; $i++) {
            $num = rand() % 56;
            $tmp = substr($salt, $num, 1);
            $pass = $pass . $tmp;
        }
        return $pass;
    }
}