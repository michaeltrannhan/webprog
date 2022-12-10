<?php

class CreateCVModel extends Model
{
  private $cvID;
  private $UserID;
  private $Name;
  private $Phone;
  private $Mail;
  private $Web;
  private $Place;
  private $About;
  private $company1;
  private $period1;
  private $role1;
  private $companydes1;
  private $company2;
  private $period2;
  private $role2;
  private $companydes2;
  private $company3;
  private $period3;
  private $role3;
  private $companydes3;
  private $_1;
  private $_2;
  private $_3;
  private $_4;
  private $_5;
  private $_6;
  private $slide1;
  private $slide2;
  private $slide3;
  private $slide4;
  private $slide5;
  private $slide6;
  private $hobbies;

  public function loadParams($arr)
  {
    foreach ($arr as &$ele) {
      $ele = '"' . $ele . '"';
    }
    $this->UserID = $_SESSION['id'];
    $this->Name = $arr['Name'];
    $this->Phone = $arr['Phone'];
    $this->Mail = $arr['Mail'];
    $this->Web = $arr['Web'];
    $this->Place = $arr['Place'];
    $this->About = $arr['About'];
    $this->company1 = $arr['company1'];
    $this->period1 = $arr['period1'];
    $this->role1 = $arr['role1'];
    $this->companydes1 = $arr['companydes1'];
    $this->company2 = $arr['company2'];
    $this->period2 = $arr['period2'];
    $this->role2 = $arr['role2'];
    $this->companydes2 = $arr['companydes2'];
    $this->company3 = $arr['company3'];
    $this->period3 = $arr['period3'];
    $this->role3 = $arr['role3'];
    $this->companydes3 = $arr['companydes3'];
    $this->_1 = $arr['skill1'];
    $this->_2 = $arr['skill2'];
    $this->_3 = $arr['skill3'];
    $this->_4 = $arr['skill4'];
    $this->_5 = $arr['skill5'];
    $this->_6 = $arr['skill6'];
    $this->slide1 = $arr['slide1'];
    $this->slide2 = $arr['slide2'];
    $this->slide3 = $arr['slide3'];
    $this->slide4 = $arr['slide4'];
    $this->slide5 = $arr['slide5'];
    $this->slide6 = $arr['slide6'];
    $this->hobbies = $arr['hobbies'];
  }

  public function executeQuery()
  {
    // if ($this->validate() == false) {
    //   return;
    // }
    $id = NULL;
    $role = NULL;
    $retrievedPassword = NULL;
    $query = 'INSERT INTO templates (Name , Phone, Mail, Web, Place, About,	company1, period1, role1, companydes1, company2, period2, role2, companydes2, company3,	period3, role3,	companydes3, skill1, skill2, skill3, skill4, skill5, skill6, slide1, slide2, slide3, slide4, slide5, slide6, hobbies, UserID) VALUES (' . $this->Name . ', ' . $this->Phone . ', ' . $this->Mail . ', ' . $this->Web . ', ' . $this->Place . ', ' . $this->About . ', ' . $this->company1 . ', ' . $this->period1 . ', ' . $this->role1 . ', ' . $this->companydes1 . ', ' . $this->company2 . ', ' . $this->period2 . ', ' . $this->role2 . ', ' . $this->companydes2 . ', ' . $this->company3 . ', ' . $this->period3 . ', ' . $this->role3 . ', ' . $this->companydes3 . ', ' . $this->_1 . ', ' . $this->_2 . ', ' . $this->_3 . ', ' . $this->_4 . ', ' . $this->_5 . ', ' . $this->_6 . ', ' . $this->slide1 . ', ' . $this->slide2 . ', ' . $this->slide3 . ', ' . $this->slide4 . ', ' . $this->slide5 . ', ' . $this->slide6 . ', ' . $this->hobbies . ', ' . $this->UserID . ');';
    if ($statement = $this->dbInstance->prepare($query)) {
    } else {
      $this->result['message'] = 'Something went wrong. Please try again later.';
      return;
    }
    if ($statement->execute()) {
      $statement->store_result();
      $this->result['message'] = 'OK';

      return;
    } else {
      $this->result['message'] = 'Something went wrong. Please try again later.';
      return;
    }
  }
}
