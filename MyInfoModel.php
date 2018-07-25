<?php

class MyInfoModel
{
    public function makeMyPrivateInfo()
    {
        //UserProfile myProfile 私自身のプロフィール情報を取得
        $myProfile = $this->getMyProfile();

        return [
            $myProfile->getMemberId(),
            $myProfile->getAge(),
            $myProfile->getGender(),
            $myProfile->getBirthDay(),
            $myProfile->getJob(),
            $myProfile->getLocation(),
        ];
    }
}
