<?php



function canCreateDescription()
{
  $myDescription = new Description(500);
  if ($myDescription->viewDescription() !== "Id: 500")
  {
    // raise here
  }
}

class Description()
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
}
