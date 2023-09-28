<?php
class Company 
{
  //プロパティという名の変数
  protected $company;
  protected $address;
  protected $tel;

    //クラス定義     //関数名
  public function getCompany(){
    echo '会社名:',$this->company.PHP_EOL;
    echo '住所：',$this->address.PHP_EOL;
    echo '電話番号：',$this->tel.PHP_EOL;
    
  }
  public function setCompany($company,$address,$tel){
    $this->company = $company;
    $this->address=$address;
    $this->tel=$tel;
  }
}
class   Department extends Company
{
  private $busho;
  private $name;

  public function getDepartment(){
    echo '部署名:',$this->busho,PHP_EOL;
    echo '部長：',$this->name.PHP_EOL;
  }
  public function setDepartment($busho,$name){
    $this->busho=$busho;
    $this->name=$name;
  }
  
}
          //インスタンス変数Department
$kaishaA = new Department();
$kaishaB = new Department();
$kaishaC = new Department();
//出力したい単語


$kaishaA->setCompany('サンプルA','市ヶ谷','080-XXXX-XXXX');
$kaishaA->setDepartment('人事','高田');
$kaishaB->setCompany('サンプルB','池袋','090-XXXX-XXXX');
$kaishaB->setDepartment('総務','田中');
$kaishaC->setCompany('サンプルC','新宿','070-XXXX-XXXX');
$kaishaC->setDepartment('営業','高橋');

//上記の順番通りに出力するようにする
$ABC =array($kaishaA,$kaishaB,$kaishaC);
foreach($ABC as $val){
    echo $val->getCompany();
    echo $val->getDepartment();

}




?>