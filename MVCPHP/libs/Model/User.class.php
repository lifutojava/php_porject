<?php

/**
 * @author Michael.Qubit
 *
 */
class User
{
    /**
     * @var ID
     */
    public $id;
    /**
     * @var 所属组织
     */
    public $toId;
    /**
     * @var 登录帐号
     */
    public $name;
    /**
     * @var 密码
     */
    public $password;
    /**
     * @var 用户姓名
     */
    public $vserName;
    /**
     * @var 手机号
     */
    public $mobile;
    /**
     * @var 电子邮箱
     */
    public $email;
    /**
     * @var 建时间
     */
    public $genTime;
    /**
     * @var 第几页的数据
     */
    public $page;
    /**
     * @var 每页多少条数据 
     */
    public $rows;
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $toId
     */
    public function getToId()
    {
        return $this->toId;
    }

    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return the $vserName
     */
    public function getVserName()
    {
        return $this->vserName;
    }

    /**
     * @return the $mobile
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return the $genTime
     */
    public function getGenTime()
    {
        return $this->genTime;
    }

    /**
     * @param ID $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param 所属组织 $toId
     */
    public function setToId($toId)
    {
        $this->toId = $toId;
    }

    /**
     * @param 登录帐号 $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param 密码 $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param 用户姓名 $vserName
     */
    public function setVserName($vserName)
    {
        $this->vserName = $vserName;
    }

    /**
     * @param 手机号 $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @param 电子邮箱 $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param 建时间 $genTime
     */
    public function setGenTime($genTime)
    {
        $this->genTime = $genTime;
    }
    /**
     * @return the $page
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return the $rows
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param 第几页的数据 $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @param 每页多少条数据 $rows
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    
}
