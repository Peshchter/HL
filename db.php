<?php
$redisClient = new Redis();
$redisClient->connect( 'localhost', 6379 );
if ($redisClient->exists('all' )){
    $buffer = $redisClient->get('all');
}else{
    $db = new PDO('mysql:host=localhost;dbname=lessons', 'user','pass');
    $stm = $db->query("SELECT * FROM customers");
    $row = $stm->fetch(PDO::FETCH_ASSOC);
    foreach ($row as $key=>$value)
    {
       $buffer .= '<b>'.$key.' |</b>';
    }
    $buffer .=  '<br>';

    do {
        foreach ($row as $key=>$value)
        {
            $buffer .=  '<i>'.$value.' |</i>';
        }
        $buffer .=  '<br>';
    } while ($row = $stm->fetch(PDO::FETCH_ASSOC));

    $redisClient->set('all', $buffer );
}
echo $buffer;
$redisClient->close();
