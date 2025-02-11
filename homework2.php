<?php
    $time = 12;
    if ($time < 12 ){
        $answer ="good morning";
    }elseif($time > 12){
        $answer = "good evening";
    }else{
        $answer = "NOON";
    };
    echo "<!DOCTYPE html>
    <html lang='eng-US'>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width,initial-scale=1'/>
        </head>
        <body>
            <main>
                <h1> .$answer. </h1>
            </main>
        </body>
    </html>"
?>