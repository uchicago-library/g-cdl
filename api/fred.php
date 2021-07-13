<?php

   echo "<pre>\n";
   file_put_contents( "fred1", "Hello world" );
   $test = file_get_contents( "fred1" );
   echo "test=$test\n";
   $newtest = substr( $test, 0, 5 );
   echo "newtest=$newtest\n";
   file_put_contents( "fred1", $newtest );
   echo "done.\n";
   echo "</pre>\n" ;
?>
   
