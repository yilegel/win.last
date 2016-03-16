<?php
namespace modules\lianxi\controllers;

class extendMethod
{
}

class a
{

    // function __construct($a=null)
    // {
    // 	echo'haha'.'<br>';
    // 	echo $this->extendm();
    // }

    public function extendm()
    {
        echo "parent method".'<br>';
        return $this->aa();
    }

    public function aa()
    {
        echo "first method";
    }
}

/**
 * class b
 */
class b extends a
{

    function __construct($a)
    {
        // parent::__construct();
    }

    // public function extendm()
    // {
    // 	return "self method";
    // 	return $this->aa();
    // }

    public function aa()
    {
        echo "2 method";
    }
}

$extendm = new b('$ff');
var_dump($extendm->extendm());
?>