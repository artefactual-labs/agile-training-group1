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
  private
    $archivist,
    $description,
    $gateKeeper;

  public function __construct($archivist, $description)
  {
    $this->archivist = $archivist;
    $this->description = $description;
    $this->gateKeeper = new GateKeeper();
  }

  public function showArchivistTheDescription()
  {
    $description->showMeYourSelf($this->archivist);
    $description->showMeYourHistory($this->archivist, $this->gateKeeper);
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

  public function showMeYourself($archivist)
  {
    printf("Id: %s\n", $this->id);
  }

  public function showMeYourHistory($archivist, $gateKeeper)
  {
    if ($gateKeeper->canThisArchivistSeeChangeHistory($archivist, $this))
    {
      printf("Change history\n");
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
