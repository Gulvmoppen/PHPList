<?php
$VideoList = array();
function AddVideo($vl)
{
    array_push($VideoList, $vl);

}
    function display ($List)
    {
        echo 'I display<br>';

        foreach ($List as $item)
        {
            echo $item->name;
            echo '<br>';

        }

    }