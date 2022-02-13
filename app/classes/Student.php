<?php


namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Category;
class Student extends Teacher implements ExampleOne , ExampleTwo
{
    use Category;

    protected $country = 'Bangladesh';
    public static $area = 'Farmgate';

    public function __construct()
    {
//        $this->name = 'Tapu';
//        $this->city = 'Savar';
    }

    public function manage()
    {
        echo self::$area;
//        echo $this->add();
//        echo "Institute name is $this->name and ctiy is $this->city and country is $this->country";
    }

    public function one()
    {
        echo 'Hello One';
    }

    public function two()
    {
        echo 'Hello Two';
    }

    public function three()
    {
        echo 'Hello Three';
    }

    public function four()
    {
        echo 'Hello Four';
    }

    public function five()
    {
        echo 'Hello Five';
    }

    public function six()
    {
        echo 'Hello Six';
    }

    public function test()
    {
       echo 'Hello Test';
    }
    public static function demo()
    {
        echo 'goodbye world';
    }
}