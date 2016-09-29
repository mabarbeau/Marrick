
<?php
class Model
{
  public $list;

  public function __construct()
  {
    $this->list = [
      [1, 'Item1', 0],
      [2 ,'Item2', 0],
      [3, 'Item3', 0],
      [4, 'Item10', 1],
      [5, 'Item11', 1],
      [6, 'Item12', 1],
      [7, 'Item100', 4],
      [8, 'Item101', 4],
      [9, 'Item102', 4],
      [10, 'Item30', 3],
      [11, 'Item31', 3],
      [12, 'Item32', 3],
    ];

     $filtered = $this->filter(0);
  }

  public function filter($key)
  {
    $filtered = array_filter($this->list, function($item)
      {
        return $item[2] === 0;
      }
    );

    return $filtered;
  }
}
