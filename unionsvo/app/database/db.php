<?php

require('connect.php');

function tt($value){
    echo '<pre>';
    print_r($value);
    exit('</pre>');
}

//Проверка запросов к БД
function dbCheckError($query){
    $errInfo=$query->errorInfo();
    if ($errInfo[0]!==PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;

}
//Выборка из таблицы мемориал всех данных
function selectAll($table, $limit , $offset){
global $pdo;
 $sql ="SELECT * FROM $table Order by last_name LIMIT $limit OFFSET $offset;" ;//запрос на вывод мемориала по алфавиту
 $query=$pdo->prepare($sql);
  $query->execute();

  dbCheckError($query);

  $data=$query->fetchAll();
  return $data;
}

function countRowMemory($table){
    global $pdo;

    $sql ="SELECT COUNT(*) FROM $table Order by last_name" ;
    $query=$pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    $data=$query->fetchColumn();
    return $data;

}





//Выборка из таблицы post всех данных
function selectPost($table, $limit , $offset){
    global $pdo;

    $sql ="SELECT * FROM $table ORDER BY`date_public` DESC LIMIT $limit OFFSET $offset;" ;//запрос на вывод мемориала по алфавиту



    $query=$pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    $data=$query->fetchAll();
    return $data;

}
//расчет всех строк в таблице
function countRow($table){
    global $pdo;

    $sql ="SELECT COUNT(*) FROM $table Order by date_public DESC" ;
    $query=$pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    $data=$query->fetchColumn();
    return $data;

}






