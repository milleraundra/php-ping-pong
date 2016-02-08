<?php
    function pingPong($input)
    {
        $user_input = $input;
        $ping_pong_array = array();

        for($i=0; $i <= $user_input ; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                array_push($ping_pong_array, "ping-pong");
            } elseif ($i % 3 == 0) {
                array_push($ping_pong_array, "ping");
            } elseif ($i % 5 == 0) {
                array_push($ping_pong_array, "pong");
            } else {
                array_push($ping_pong_array, $i);
            }
        }
        return $ping_pong_array;
    }
?>
