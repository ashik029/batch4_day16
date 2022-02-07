<?php


namespace App\classes;


class Operator
{

    // ========= operator =========

        /*
            *Arithmatic operator
                   *Binary Operator (+,-,*,/,% )
                   *Unary Operator (++,--,(-) )

            * Assignment Operator (=,+=,-=,*=,/=,%=,.= )
            * Conditional Operator (>,>=,<,<=, ==, !=,===, !=== )
            * Logical Operator ( &&,||,! )
         */
    Public $x;
    public $y;
    protected $z;

    public function index ()
    {
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;

        //Logical Operator//
//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>.......<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>.......<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>.......<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>.......<br/>';

//        echo ($this->x > $this->y) && ($this->y > $this->z);
//        echo '<br/>.......<br/>';
//        echo ($this->x > $this->y) && ($this->y < $this->z);
//        echo '<br/>.......<br/>';
//        echo ($this->x < $this->y) && ($this->y > $this->z);
//        echo '<br/>.......<br/>';
//        echo ($this->x < $this->y) && ($this->y < $this->z);
//        echo '<br/>.......<br/>';

        // Binary Operator//
//        echo $this->x = $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x+ $this->y;
//        echo '<br/>';
//        echo $this->x = $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;
//        echo '<br/>';
//
//        echo '<br/>';
//        echo '<br/>';


        //Unary Operator//

//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;
//        echo '<br/>';

//        // Assignment Operator//
//        echo $this->x += $this->y;
//        echo '<br/>';
//        echo $this->x -= $this->y;
//        echo '<br/>';
//        echo $this->x *= $this->y;
//        echo '<br/>';
//        echo $this->x /= $this->y;
//        echo '<br/>';
//        echo $this->x %= $this->y;
//        echo '<br/>';
//        echo $this->x .= $this->y;
//        echo '<br/>';


        // ==== statement ====
        /*
                 *Single line statement
                 *conditional statement

                    *if
                    *if else
                   *Switch
                   *Repeated Statement

                   *For
                    *DO WHILE
                    *FOREACH
                    *Array
         */

        if ($this->x > $this->y)
        {
            echo  'its true';
        }


    }

}