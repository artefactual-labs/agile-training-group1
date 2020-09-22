<?php

canCreateDescription();
print("Test complete!\n");

function canCreateDescription()
{
  $myDescription = new Description(500);

  if ($myDescription->getId() !== 501)
  {
    throw new exception("canCreateDescription failed");
  }
}

class Description
{
  private
    $id = 0;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function viewDescription()
  {
    printf("Id: %s\n", $this->id);
  }
}
