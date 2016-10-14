<?php
class Lists
{

  public function output($model)
  {
    ?>
    <ul>
      <?php foreach($model as $key => $item): ?>
        <li id= <?=$item[0];?>>
          <?=$item[1];?>
        </li>

        <?php
        if( !empty($item[3]) )
          {
            $this->output($item[3]);
          }
        ?>
      <?php endforeach; ?>
    </ul>
    <?php
  }
}
