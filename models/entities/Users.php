<?php
namespace app\models\entities;
use app\models\Model;

class Users extends Model
{
    protected $id;
    protected $login;
    protected $pass;
    protected $is_admin;

    protected $props = [
        'login' => false,
        'pass' => false,
        'is_admin' => false
    ];

    /**
     * Users constructor.
     * @param $login
     * @param $pass
     */
    public function __construct($login = null, $pass = null, $is_admin = null)
    {
        $this->login = $login;
        $this->pass = $pass;
        $this->is_admin = $is_admin;
    }

}