<?php
 
class MyClass
{
  public $prop1 = "I'm a class property!";
 
  public function __construct()
  {
      echo 'The class "', __CLASS__, '" was initiated!<br />';
  }
 
  public function __destruct()
  {
      echo 'The class "', __CLASS__, '" was destroyed.<br />';
  }
 
  public function __toString()
  {
      echo "Using the toString method: ";
      return $this->getProperty();
  }
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
 protected
  //private 
  function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
 
class MyOtherClass extends MyClass
{
  public function __construct()
  {
      parent::__construct();
      echo "A new constructor in " . __CLASS__ . ".<br />";
  }
 
  public function newMethod()
  {
      echo "From a new method in " . __CLASS__ . ".<br />";
  }
 
  public function callProtected()
  {
      return $this->getProperty();
  }
}
 
// Create a new object
$newobj = new MyOtherClass;
 
// Use a method from the parent class
echo $newobj->callProtected();
 
?>