<?php

class PagesController
{
	public function actionHome()
	{
		echo 'Home page';
		return true;
	}

	public function actionContact()
    {
        View::render('pages/contact');
        return true;
    }

    public function actionAbout()
    {
        $employees = User::getEmployees();
        $about = About::getContent();

        View::render('pages/about', [
            'employees' => $employees,
            'about' => $about
        ]);
        return true;
    }
}