<?php

interface car
{
    function color();
    
     const tree = 400;
}

interface truck {
    function vehicle();
}

class toyota implements car,truck
{
    function vehicle(){
        echo 'toyota engine';
    }

    function color(){
        echo "toyota color is blue";
    }
}

class toyotaNewModel extends toyota
{
    function engine()
    {
        echo "engine function";
    }
}


$obj = new toyotaNewModel;
echo $obj::tree;

?>
