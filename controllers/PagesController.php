<?php

class PagesController
{
    public function actionAbout()
    {
        $employees = User::getEmployees();

        View::render('pages/about', $employees);
        return true;
    }
}