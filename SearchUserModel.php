<?php

class SearchUserModel
{
    public function SearchUserByLocation(String $location)
    {
        //UserProfile[] AllUserProfileList 全てのユーザのプロフィール情報を取得
        $allUserProfileList = $this->getAllUserProfile();

        $ret = [];
        foreach($allUserProfileList as $userProfile) {
            if($userProfile->isInLocation($location)) {
                $ret[] = $userProfile->getIntroduction();
            }
        }

        return $ret;
    }
}
