<?php
    function digitCount($n) {
    if ($n < 10) {
        return $n;
    } elseif ($n < 100) {
        return 10 + ($n - 10 + 1) * 2 - 1;
    } elseif ($n < 1000) {
        return 190 + ($n - 100 + 1) * 3 - 1;
    } elseif ($n < 10000) {
        return 2890 + ($n - 1000 + 1) * 4 - 1;
    } elseif ($n < 100000) {
        return 38890 + ($n - 10000 + 1) * 5 - 1;
    } elseif ($n < 1000000) {
        return 488890 + ($n - 100000 + 1) * 6 - 1;
    } elseif ($n < 10000000) {
        return 5888890 + ($n - 1000000 + 1) * 7 - 1;
    } elseif ($n < 100000000) {
        return 68888890 + ($n - 10000000 + 1) * 8 - 1;
    } else {
        return 788888890 + ($n - 100000000 + 1) * 9 - 1;
    }
    }

    function rocks($n) {
    return digitCount($n);
    }
?>