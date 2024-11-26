<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view("Home/index");
    }

    private function sendTestEmail()
    {
        $email = \Config\Services::email();

        $email->setTo("caleb@stcroixwebagency.com");

        $email->setSubject("Test Email");
        $email->setMessage("Hello from <i>CodeIgniter</i>");

        if ($email->send()) {
            echo "Email sent";
        } else {
            echo "Email NOT sent";
        }
    }
}
