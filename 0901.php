<?php  
  class Student 
{      //����ѧ����
  public $Name;        //�����Ա����--����
  public $Sex;         //�����Ա����--�Ա�
  public $Age;         //�����Ա����--����
  public $Number;      //�����Ա����--ѧ��
  public $Specail;     //�����Ա����--רҵ
  public $Classes;     //�����Ա����--�༶
  
  //���巽�� --���Σ�ʱ�䡢���ҡ��γ̣�
  public function LinsenCourse($time1, $class1, $coursename)
  {
    echo "<br/>��Һã��ҽУ�".$this->Name;
    echo "<br/>�ҽ���".$time1."��".$class1."�������Σ��γ������ǣ�".$coursename;
  }
  
 //���巽�� --����ʱ�䡢�ص㡢�������ƣ�
  public function PlayBall($time1, $address, $ballname)
  {
    echo "<br/>��Һã��ҽУ�".$this->Name;
    echo "<br/>�ҽ���".$time1."��".$address . $ballname;
  }
  
   //���巽�� --����Ϸ��ʱ�䡢�ص㡢��Ϸ���ƣ�
  public function PlayGame($time1, $address, $gamename)
  {
    echo "<br/>��Һã��ҽУ�".$this->Name;
    echo "<br/>�ҽ���".$time1."��".$address."��".$gamename;
  }  
}
?>