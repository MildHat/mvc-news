<?php

class PagesController
{
    public function actionAbout()
    {
        View::render('pages/about');
        return true;
    }
}