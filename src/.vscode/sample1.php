<?php
//sample1.php

while(true){

    echo "１：テレビの視聴時間を入力する" . PHP_EOL;
    echo "２：テレビの視聴時間を表示する" . PHP_EOL;
    echo "９：入力を終了する" . PHP_EOL;
    echo "番号を選択(1,2,9)してください：";
    $num = trim(fgets(STDIN));
    // var_dump($views);
    if($num === '1'){
        $views =[];
        echo "チャンネルを入力してください(1ch~12ch)：";
        $views['channel'] = trim(fgets(STDIN)) . PHP_EOL;
        echo "テレビの視聴時間を入力してください(分)：" ;
        $views['view_time']= trim(fgets(STDIN)) . PHP_EOL;
    }elseif($num === '2'){
        echo 'チャンネル：' . $views['channel'];
        echo '視聴時間：' .$views['view_time'] . PHP_EOL;
    }elseif($num === '9'){
        break;
    }
}
