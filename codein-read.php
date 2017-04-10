<?php
                     $FILE = fopen ( "data.txt" , "r+" ) ;
                     $text  =  fread ( $FILE , 20000 ) ; 
                     print ( "$text<br>") ;
                     fclose ( $FILE) ; 
?>