<?php

class MyInfoModel
{
    public function makeMyPrivateInfo()
    {
        //UserProfile myProfile 私自身のプロフィール情報を取得
        $myProfile = $this->getMyProfile();

        return $myProfile->getPrivateInfo();
    }
}
