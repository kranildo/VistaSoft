<?php

include_once "Mysql.php";
class ImoveisModel
{
    private static $tabela = "tab_imoveis";
    function __construct()
    {
        Mysql::conectar();
    }
    public static function cadastrar($data)
    {
        $handle = Mysql::$link->prepare('INSERT INTO `' . self::$tabela . '` (`id`, `id_prorietario`, `endereco`) VALUES (NULL, ?, ?);');
        $handle->bindValue(1, $data['id_prorietario']);
        $handle->bindValue(2, $data['endereco']); 
        $handle->execute();
        return   self::buscar($data);
    }
    public static function editar($data)
    {
        $handle = Mysql::$link->prepare('UPDATE `' . self::$tabela . '`  SET `id_prorietario` = ?, `endereco` = ? WHERE `id` = ?;');
        $handle->bindValue(1, $data['id_prorietario']);
        $handle->bindValue(2, $data['endereco']); 
        $handle->bindValue(3, $data['id']);
        $handle->execute();
        return   self::buscar($data);
    }
    public static function buscar($data)
    {
        $handle = Mysql::$link->prepare('SELECT *  FROM `' . self::$tabela . '` WHERE (`id` = ? OR `id_prorietario` LIKE ? OR `endereco` LIKE ?)');
        $handle->bindValue(1, $data['id']);
        $handle->bindValue(2, $data['id_prorietario']);
        $handle->bindValue(3, $data['endereco']); 
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
