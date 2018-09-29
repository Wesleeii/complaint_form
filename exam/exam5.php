<?php
$object = new User();
$object->name="john";
$object->password="abcde";
$object->phone="0827355263";
$object->email="ksbfwcaiwhuj";
$object->display();
$object= new Subscriber;

class User
{
    public $name, $password;
    function save_user()
    {
        echo "";
    }
    function display()
    {
        echo "Name:".$this->name."<br />";
        echo "Password:".$this->password."<br />";
        echo "Phone:".$this->phone."<br />";
        echo "Email:".$this->email."<br />";
    }
}
class Subscriber extends User
{
    public $phone, $email;

}
?>