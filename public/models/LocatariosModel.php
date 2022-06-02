<?php

include_once "Mysql.php";
class LocatariosModel
{
    private static $tabela = "tab_locatarios";
    function __construct()
    {
        Mysql::conectar();
    }
    public static function cadastrar($data)
    {
        $handle = Mysql::$link->prepare('INSERT INTO `' . self::$tabela . '` (`id`, `nome`, `email`, `telefone`) VALUES (NULL, ?, ?, ?);');
        $handle->bindValue(1, $data['nome']);
        $handle->bindValue(2, $data['email']);
        $handle->bindValue(3, $data['telefone']);
        $handle->execute();
        return   self::buscar($data);
    }
    public static function editar($data)
    {
        $handle = Mysql::$link->prepare('UPDATE `' . self::$tabela . '`  SET `nome` = ?, `email` = ?, `telefone` = ? WHERE `id` = ?;');
        $handle->bindValue(1, $data['nome']);
        $handle->bindValue(2, $data['email']);
        $handle->bindValue(3, $data['telefone']);
        $handle->bindValue(4, $data['id']);
        $handle->execute();
        return   self::buscar($data);
    }
    public static function buscar($data)
    {
        $handle = Mysql::$link->prepare('SELECT *  FROM `' . self::$tabela . '` WHERE (`nome` LIKE ? OR `email` LIKE ? OR `telefone` LIKE ?)');
        $handle->bindValue(1, $data['nome']);
        $handle->bindValue(2, $data['email']);
        $handle->bindValue(3, $data['telefone']);
        $handle->execute();
        return  $handle->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function excluir($data)
    {
        $handle = Mysql::$link->prepare('DELETE FROM `' . self::$tabela . '` WHERE `id` = ?');
        $handle->bindValue(1, $data['id']);
        $handle->execute();
        return   self::buscar($data);
    }
}
