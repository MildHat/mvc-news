<?php

class PagesController
{
	public function actionHome()
	{
		echo 'Home page';
		return true;
	}

    public function actionAbout()
    {
        $employees = User::getEmployees();

        View::render('pages/about', $employees);
        return true;
    }
}