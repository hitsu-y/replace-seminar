<?php

class UserPrivateProfile
{
    protected $age;
    protected $gender;
    protected $birthDay;
    protected $job;
    protected $location;

    public function __construct(...)
    {
        $this->age = $age;
        $this->gender = $gender;
        ...
    }

    public function getPrivateInfo()
    {
        return [
            $this->getAge(),
            $this->getGender(),
            $this->getBirthDay(),
            $this->getJob(),
            $this->getLocation(),
        ];
    }

    public function isInLocation($location)
    {
        return $this->getLocation() === $location;
    }

    public function getAge()
    {
        return $this->age;
    }

    ...
}
