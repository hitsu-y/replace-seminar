<?php

class UserProfile
{
    protected $userId;
    protected $memberId;
    protected $nickName;
    protected $age;
    protected $gender;
    protected $birthDay;
    protected $job;
    protected $location;
    protected $aboutMe;

    public function __construct(...)
    {
        $this->userId = $userId;
        $this->memberId = $memberId;
        ...
    }

    public function getUserId(){
        return $userId;
    }

    public function getMemberId(){
        return $memberId;
    }

    public function getPrivateInfo()
    {
        return [
            $this->getMemberId(),
            $this->getAge(),
            $this->getGender(),
            $this->getBirthDay(),
            $this->getJob(),
            $this->getLocation(),
        ];
    }

    public function getIntroduction(){
        return [
            $this->getMemberId(),
            $this->getNickName(),
            $this->getAboutMe(),
        ];
    }

    public function isInLocation($location)
    {
        return $this->getLocation() === $location;
    }

    ...
}
