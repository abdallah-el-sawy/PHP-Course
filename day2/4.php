<?php
/*  Predefined And Magic Constants And Reserved Keywords */

/*
  *Pre-defined Constants [Case Sensitive]
    -> PHP_VERSION
    -> PHP_OS_FAMILY
    -> PHP_INT_MAX
    -> DEFAULT_INCLUDE_PATH
*note : There is more and more Pre_defined Constants Just search on them (PHP Pre_defined Constants)    


  *Magic Constants [Case InSensitive]
    -> __LINE__
    -> __FILE__
    -> __DIR__
*note : There is more Magic Constants  Just search on them (PHP Magic Constants)  -> about 9 

  *Reserved Keyword : simply words you can't name your variable , function even classes 
    -> break
    -> clone
*note : There is more and more Reserved Keywords  Just search on them (list of Reserved Keywords)


Search on : Compile Time VS Runtime
 */



    echo php_uname(); //returns information about the OS(Operating System) PHP is running on
    echo '<br>';

    echo PHP_VERSION;
    echo '<br>';

    echo __LINE__; // line number 
    echo '<br>';

    echo __FILE__; // my php file location in the pc
    echo '<br>';

    echo __dir__; // folder that my php file located in 
    echo '<br>';

    // function clone()
    // {
    //   echo 'clone';        ----->       Here is the Error        -----> Reserved Word (clone)
    // }

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';

?>