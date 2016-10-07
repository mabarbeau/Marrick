
<?php
class Model
{
  protected $list;
  public $structure;

  public function __construct()
  {
    $this->list = array_map('str_getcsv', file('data.csv'));

    $this->structure = $this->walk(0);
  }

  protected function filter($key)
  {
    $filtered = array_filter($this->list, function($item) use ($key)
      {
        return $item[2] == $key;
      }
    );

    return $filtered;
  }

  protected function walk($key)
  {
    $filtered = $this->filter($key);

    foreach ($filtered as $key => $item)
    {
      $child = $this->walk($item[0]);

      if(!empty($child))
      {
        $filtered[$key][3] = $child;
      }
    }

    return $filtered;
  }

}
