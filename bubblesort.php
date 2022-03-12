<?php
$nums = [100, 5, 2, -10, 8, 10, -1, 15, 1, -100];

bubblesort();

echo '<pre>';
print_r($nums);
echo '</pre>';

function bubblesort() {
    global $nums;
      for($i=0; $i<count($nums); $i++)
     {
          $target = count($nums)-$i;
          for($j=1; $j<$target; $j++)
          {
               if($nums[$j]<$nums[$j-1])
               {
                    $swap = $nums[$j];
                    $nums[$j] = $nums[$j-1];
                    $nums[$j-1] = $swap;
               }
          }
     }
}
