<?php

class UserProfile
{
    protected $userId;
    protected $memberId;
    protected $nickName;
    protected $aboutMe;
    /*@var UserPrivateProfile*/
    protected $privateProfile;


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


    public function getPrivateInfo(){
        $idInfo = [$this->getMemberId()];
        return array_merge($idInfo,$privateProfile->getPrivateInfo());
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
        return $this->privateProfile->isInLocation($location);

    }

    ...
}
