<?php
/**
 * Created by PhpStorm.
 * User: mildhat
 * Date: 2019-05-05
 * Time: 20:09
 */

class About
{
    public static function getContent()
    {
        $DBH = Db::getDbConnect();

        $STH = $DBH->query('SELECT * FROM about');
        $STH->setFetchMode(PDO::FETCH_ASSOC);

        $result = [];
        $i = 0;
        while($row = $STH->fetch())
        {
            $result[$i]['description'] = $row['description'];
            $result[$i]['path_to_photo'] = $row['path_to_photo'];
            $i++;
        }

        return $result;
    }
}