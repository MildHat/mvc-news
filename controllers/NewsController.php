<?php

class NewsController
{
    public function actionList()
    {
        $data = [
            'name' => 'Anton',
            'age' => 17
        ];
        View::render('pages/index', $data);
        return true;
    }

    public function actionView($id)
    {
        echo $id;

        return true;
    }
}