<?php
function conn()
{
    $connection = mysqli_connect('www.bestappsolution.com', 'hrmbestapp_bestapp', 'Googledlinksys@2023q4Ih7HF2', 'hrmbestapp_hr');

    mysqli_set_charset($connection, "utf8");

    return $connection;
}


function sql_write($word)
{
    mysqli_query(conn(), $word);
}

function sql_read($word)
{
    $qry = mysqli_query(conn(), $word);
    $res = mysqli_fetch_assoc($qry);
    return $res;
}

function sql_read_loop($word)
{
    $qry = mysqli_query(conn(), $word);
    while ($res = mysqli_fetch_assoc($qry)) {
        $data[] = $res;
    }
    if (!isset($data)) {
        $data = null;
    }
    return $data;
}
