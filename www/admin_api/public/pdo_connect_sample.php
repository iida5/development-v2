<?php
ini_set("display_errors", 1);

try {
    $dbh = new PDO('sqlsrv:server=mssql,1433', 'sa', 'Password@sa');

    $dbh->query('drop database if exists test_db');

    $dbh->query('create database test_db');
 
    $dbh->exec("use test_db");  

    $dbh->query("create table test_table (id int, name text)");
    
    $dbh->query("insert into test_table (id, name) values (1, 'あああ')");
    $dbh->query("insert into test_table (id, name) values (2, 'いいい')");
    $dbh->query("insert into test_table (id, name) values (3, 'ううう')");

    echo "<pre>";
    print_r($dbh->query("select * from test_table")->fetchAll());
    echo "</pre>";

} catch (PDOException $e) {
    echo $e->getMessage();
}