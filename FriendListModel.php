<?php

class FriendListModel
{
    public function makeFriendInfoList()
    {
        //UserProfile[] friendProfileList　友達のプロフィール情報を取得
        $friendProfileList = $this->getFriendProfileList();

        $friendInfoList = [];
        foreach($friendProfileList as $friendProfile) {
            $friendInfoList[] = [
                $friendProfile->getMemberId(),
                $friendProfile->getNickName(),
                $friendProfile->getAboutMe(),
            ];
        }

        return $friendInfoList;
    }
}
