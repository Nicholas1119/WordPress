<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/

add_action('avia_builder_mode', "builder_set_debug");
function builder_set_debug()
{
  return "debug";
}



