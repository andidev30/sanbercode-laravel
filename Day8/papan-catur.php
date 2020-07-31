<?php
    function papan_catur($angka) {
    // tulis kode di sini
        for ($i=1; $i <= $angka; $i++) { 
            for ($j=1; $j <= $angka; $j++) { 
                if( $i % 2 !== 0 ){
                    echo "# ";
                }else {
                    echo "&nbsp;#";
                }
            }
            echo "<br>";
        }
    }

    // TEST CASES
    echo papan_catur(4);
    echo "<br>";
    /*
    # # # #
    # # #
    # # # #
    # # #
    */

    echo papan_catur(8);
    echo "<br>";
    /* 
    # # # # # # # #
    # # # # # # # 
    # # # # # # # #
    # # # # # # # 
    # # # # # # # #
    # # # # # # #
    # # # # # # # #
    # # # # # # #
    */

    echo papan_catur(5);
    /*
    # # # # #
    # # # #
    # # # # #
    # # # # 
    # # # # #
    */