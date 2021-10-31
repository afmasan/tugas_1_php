<?php
$a=1;
$b=0;

$a1= $b && $b;
$a2= $b && $a;
$a3= $a && $b;
$a4= $a && $a;

$o1= $b || $b;
$o2= $b || $a;
$o3= $a || $b;
$o4= $a || $a;



echo "
<table border=1>
        <tr>
            <td>
                input 1
            </td>
            <td>
                input 2
            </td>
            <td>
                AND
            </td>
            <td>
                OR
            </td>
        </tr>
        <tr>
            <td>
                FALSE
            </td>
            <td>
                FALSE
            </td>
            <td>
                ".printf($a1)."
            </td>
            <td>
                ".printf($o1)."
            </td>
        </tr>
        <tr>
            <td>
                FALSE
            </td>
            <td>
                TRUE
            </td>
            <td>
                ".printf($a2)."
            </td>
            <td>
                ".printf($o2)." 
            </td>
        </tr>
        <tr>
            <td>
                TRUE
            </td>
            <td>
                FALSE
            </td>
            <td>
                ".printf($a3)."
            </td>
            <td>
                ".printf($o3)."
            </td>
        </tr>
        <tr>
            <td>
                TRUE
            </td>
            <td>
                TRUE
            </td>
            <td>
                ".printf($a4)."
            </td>
            <td>
                ".printf($o4)."
            </td>
        </tr>
    </table>
";
?>