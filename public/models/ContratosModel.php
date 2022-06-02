<?php

include_once "Mysql.php";
class ContratosModel
{
    private static $tabela = "tab_contratos";
    function __construct()
    {
        Mysql::conectar();
    }
    public static function cadastrar($data)
    {
        $handle = Mysql::$link->prepare('INSERT INTO `' . self::$tabela . '` (`id_locatario`, `id_locador`, `id_imovel`) VALUES (NULL, ?, ?, ?);');
        $handle->bindValue(1, $data['id_locatario']);
        $handle->bindValue(2, $data['id_locador']);
        $handle->bindValue(3, $data['id_imovel']);
        $handle->execute();
        return   self::buscar($data);
    }
    public static function editar($data)
    {
        $handle = Mysql::$link->prepare('UPDATE `' . self::$tabela . '`  SET `id_locatario` = ?, `id_locador` = ?, `id_imovel` = ? WHERE `id` = ?;');
        $handle->bindValue(1, $data['id_locatario']);
        $handle->bindValue(2, $data['id_locador']);
        $handle->bindValue(3, $data['id_imovel']);
        $handle->bindValue(4, $data['id']);
        $handle->execute();
        return   self::buscar($data);
    }
    public static function buscar($data)
    {
        $handle = Mysql::$link->prepare('SELECT *  FROM `' . self::$tabela . '` WHERE (`id` = ? OR `id_locatario` LIKE ? OR `id_locador` LIKE ? OR `id_imovel` LIKE ?)');
        $handle->bindValue(1, $data['id']);
        $handle->bindValue(2, $data['id_locatario']);
        $handle->bindValue(3, $data['id_locador']);
        $handle->bindValue(4, $data['id_imovel']);
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
