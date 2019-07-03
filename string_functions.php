<?php
    #substr()
    #return a portion of a string

    //$output = substr('Hello', 1, 3);
    // $output = substr('Hello', -2);
    // echo $output;

    # strlen()
    # Return the length of a string

    // $output = strlen('Hello World');
    // echo $output;

    # strpos()
    # Find the position of the FIRST occurence of a sub string

    // $output = strpos('Hello World', 'o');
    // echo $output;

    # strrpos()
    # Find the position of the LAST occurence of a sub string

    // $output = strrpos('Hello World', 'o');
    // echo $output;

    # trim();
    # Strips whitespace

    /*
        $text = 'Hello World              ';
        //var_dump($text);

        $trimmed = trim($text);
        var_dump($trimmed);
    */

    # strtoupper
    # Makes everything uppercase

    // $output = strtoupper('Hello World');
    // echo $output;

    # strtolower
    # Makes everything lowercase

    // $output = strtolower('Hello World');
    // echo $output;

    #ucwords()
    # Capitalize every word

    // $output = ucwords('hello world');
    // echo $output;

    #str_replace()
    # Replace all occurences of a search string with a replacement

    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    # is_string()
    # Check if string

    // $val = 'Hello';
    // $output = is_string($val);

    // echo $output;
        /*
            $values = array(true, false, null, 'abc', 33, '33',
                    22.4, '22.4', '', ' ',0, '0'); 

            foreach($values as $value){
                if(is_string($value)){
                    echo "{$value} is a string<br>";
                }
            }
        */
    
    # gzcompress()
    # Compress a string

    $string = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, accusamus eaque odio similique, voluptatibus architecto quam nostrum provident hic aperiam laboriosam eveniet reprehenderit cum omnis assumenda expedita beatae? Laboriosam obcaecati totam voluptate natus fuga sequi molestias modi tempora beatae, aliquid harum dolor sunt aliquam. Aut praesentium recusandae, cum quis maxime tenetur dolorem assumenda labore vero deleniti pariatur vitae et eum fugit est expedita sed? Quasi a tempore fugit illum deserunt consectetur pariatur similique architecto ex labore, quo, illo at! Consequatur libero et quia nihil facere autem adipisci asperiores, error facilis magnam sit, obcaecati excepturi aliquid quisquam blanditiis delectus dolores repellendus.";
    
    $compressed = gzcompress($string);
    //echo $compressed;

    $original = gzuncompress($compressed);
    echo $original;





?>