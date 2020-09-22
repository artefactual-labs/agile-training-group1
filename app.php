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


class ReadingRoom
{
  public function requestDescription()
  {
    
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

  public function viewDescription()
  {
    printf("Id: %s\n", $this->id);
  }

  public function viewHistory()
  {
    if ($gateKeeper->canThisArchivistSeeChangeHistory($archivist, $this))
    {
      
    }
  }
}

class Archivist
{

}

class GateKeeper
{
  public function __construct()
  {
    $this->registry = new Registry();
  }
  public function canThisArchivistSeeChangeHistory($archivist, $description)
  {
    return $this->registry->canViewHistory($archivist, $description);
  }
}

class Registry
{
  public function canViewHistory($archivist, $description)
  {
    return true;
  }
}
