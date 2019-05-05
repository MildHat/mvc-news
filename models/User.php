<?php
/**
 * Created by PhpStorm.
 * User: mildhat
 * Date: 2019-05-05
 * Time: 12:25
 */

class User
{
    public static function getEmployees()
    {
        $DBH = Db::getDbConnect();
        $STH = $DBH->query('SELECT id, username, path_to_profile_photo, position, description  FROM user WHERE is_admin=1 ORDER BY id');

        $STH->setFetchMode(PDO::FETCH_ASSOC);

        $result = [];

        $i = 0;
        while ($row = $STH->fetch())
        {
            $result[$i]['id'] = $row['id'];
            $result[$i]['username'] = $row['username'];
            $result[$i]['path_to_profile_photo'] = $row['path_to_profile_photo'];
            $result[$i]['position'] = $row['position'];
            $result[$i]['description'] = $row['description'];
            $i++;
        }
        return $result;
    }
}