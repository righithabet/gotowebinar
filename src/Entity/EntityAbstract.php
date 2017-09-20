<?php

namespace Slakbal\Gotowebinar\Entity;


class EntityAbstract
{

    public function toArray()
    {
        //list of variables to be filtered
        $blacklist = [
            'webinarKey',
            'registrationUrl',
            'participants',
        ];

        return array_where(get_object_vars($this), function ($value, $key) use ($blacklist) {

            if (!in_array($key, $blacklist)) {
                return !empty($value);
            }

        });
    }
}