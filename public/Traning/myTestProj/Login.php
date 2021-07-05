<?php
include 'PersonCls.php';

class Login extends Person
{
    public function Deserialize()
    {

        $data = file_get_contents("db_name_1.json");
        return json_decode($data);

    }
    public function ValidateDataLogin()
    {
        if($this->MakeForm()==$this->Deserialize()){
            return "ok";
        }else return "something wrong";

    }

}
$Test = new Login("name", "11111111" ,"viorel@",1);
$Test->makeDB();
 //print_r($Test->Deserialize());
 //print_r($Test->ValidateDataLogin());
 print_r($Test->MakeForm());