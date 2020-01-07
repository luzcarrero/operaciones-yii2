<?php

namespace app\models;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    private static $users;
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    public $role;


    public $email;
    public $activate;

    public static function isUserAdmin($id)
    {
        if (users::findOne(['id' => $id, 'activate' => '0', 'role' => 1])){
            return true;
        } else {

            return false;
        }

    }

    public static function isUserSimple($id)
    {
        if (users::findOne(['id' => $id, 'activate' => '0', 'role' => 0])){
            return true;
        } else {

            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        $user = Users::find()
            ->where("activate=:activate", [":activate" => 0])
            ->andWhere("id=:id", ["id" => $id])
            ->one();

        return isset($user) ? new static($user) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $users = Users::find()
            ->where("activate=:activate", ["activate" => 0])
            ->andWhere("username=:username", [":username" => $username])
            ->all();

        foreach ($users as $user) {
            if (strcasecmp($user->username, $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
