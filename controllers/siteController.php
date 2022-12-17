<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;




class SiteController extends Controller
{
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
       
        return 'Handling submitted data';
    }

    public function contact()
    {
        // Render View from Here
        // instead of : 
        // return 'Contact Page';
        //  use :

        return $this->render('contact');
    }

    public function home()
    {
        // Render View from Here
        // instead of : 
        // return 'Contact Page';
        //  use :

        $params = [
            'name' => 'MHkif'
        ];

        //  it is been like Application::$app->router->renderView
        //  i will render iot like this 
        return $this->render('home', $params);
    }
}
