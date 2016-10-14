
<?php
class Model
{
  protected $list;
  protected $structure;

  public function __construct()
  {
    $this->list = array_map('str_getcsv', file('database/data.csv'));

    $this->structure = $this->walk(0);
  }

  public function all()
  {
    return $this->structure;
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
