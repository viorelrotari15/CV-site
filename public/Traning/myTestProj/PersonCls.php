<?php

class Person {
    protected $user_name ;
    private $user_emil;
    private $pass ;
    public $toJon =[];
    protected $userId;
   // private $content;
    public function __construct( string $user_value, string $pass_value, string $user_email_value, int $userId_val)
    {
        $this->user_name = $user_value;
        $this->pass = $pass_value;
        $this->user_emil = $user_email_value;
        $this->userId =$userId_val;


    }
    public function GetName(): string
    {
        return $this->user_name;

    }
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getUserEmil(): string
    {
        return $this->user_emil;
    }

    public function GetPassHased(): string
    {
        if(strlen($this->pass)<=5){
            $hased_pass = crypt($this->pass,'rl');
            return $hased_pass;
        }else
        return "your pass is wrong";
    }
    public function GetPass(): string
    {
        if (hash_equals($this->GetPassHased(), crypt($this->pass, $this->GetPassHased()))) {
            return $this->pass;
        }else "error";
    }
    public function MakeForm(){
        $this->toJon[0] = ["User_id" =>$this->getUserId()];
        $this->toJon[1] = ["UserName"=>$this->GetName()];
        $this->toJon[2] = ['Email'=>$this->getUserEmil()];
        $this->toJon[3] = ["Password" =>$this->GetPassHased()];
        $local = json_encode($this->toJon);
        return json_decode($local);
    }
    public function Serialaze():string
    {

        return json_encode($this->MakeForm());

    }

   public function makeDB()
   {
       $file_name = sprintf("db_%s_%s.json",
       $this->GetName(),
       $this->getUserId());
       $my_file = fopen($file_name,"w");
       $txt = $this->Serialaze();
       fwrite($my_file, $txt);
       fclose($my_file);
       return "well";

   }
}
$Viorel = new Person("Viorel15",'11111',"viorel@gmail.com",1);
$Pavel = new Person("Pavel10", "0555555","email@emal",2);

 ($Viorel->GetName() . "\n");
 ($Viorel->GetPass() . "\n");
 ($Viorel->GetPassHased() . "\n");
 ($Viorel->getUserEmil() . "\n");
 ($Viorel->makeDB() . "\n");
 print_r($Viorel->MakeForm());
 echo ($Viorel->Serialaze());
//print_r($Viorel->Serialaze() . "\n");
$Pavel->makeDB();
//print_r($Viorel);