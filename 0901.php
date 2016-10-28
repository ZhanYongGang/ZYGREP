<?php  
  class Student 
{      //定义学生类
  public $Name;        //定义成员变量--姓名
  public $Sex;         //定义成员变量--性别
  public $Age;         //定义成员变量--年龄
  public $Number;      //定义成员变量--学号
  public $Specail;     //定义成员变量--专业
  public $Classes;     //定义成员变量--班级
  
  //定义方法 --听课（时间、教室、课程）
  public function LinsenCourse($time1, $class1, $coursename)
  {
    echo "<br/>大家好，我叫：".$this->Name;
    echo "<br/>我将于".$time1."在".$class1."教室听课，课程名称是：".$coursename;
  }
  
 //定义方法 --打球（时间、地点、球类名称）
  public function PlayBall($time1, $address, $ballname)
  {
    echo "<br/>大家好，我叫：".$this->Name;
    echo "<br/>我将于".$time1."在".$address . $ballname;
  }
  
   //定义方法 --玩游戏（时间、地点、游戏名称）
  public function PlayGame($time1, $address, $gamename)
  {
    echo "<br/>大家好，我叫：".$this->Name;
    echo "<br/>我将于".$time1."在".$address."玩".$gamename;
  }  
}
?>