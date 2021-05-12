<?php
//single line comment 1
#single line comment 2
/*multi line comment - ?> */
/** doc-style comment - ?> */

function printNumber()
{
    $number = 1234;
    print "The number is $number, \n<?xml version=\"1";
    for ($i=0; $i <= $number; $i++) {
        $x++;
        $x--;
        $x += 1.0;
        $z = 2. ; // error
    }
    if (PRINT_SUMMARY_CONSTANT)
            echo  <<< custom_HEREDOC
<br />
Summary: <br />
The \$x variable has value: $x
<br />
custom_HEREDOC;
}


?>
