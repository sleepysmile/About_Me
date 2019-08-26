<?php

namespace common\components\pdo;

require "../../config/main.php";

/**
 * @var $config
 *
 * Class BaseDb
 */
class BaseDb
{
    protected $host;

    protected $user;

    protected $password;

    protected $daname;

    public function __construct()
    {
        $this->host = $config['host'];
    }
}