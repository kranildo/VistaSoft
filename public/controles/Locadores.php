
<?php
include_once "../public/models/LocadoresModel.php";
class Locadores
{
    private static $model;
    function __construct()
    {
        self::$model = new LocadoresModel();
    }
    public static function cadastrar($data)
    {
        /*
        Aqui pode ter uma verificação de permissão
        Também pode ter um tratamento especial para a chamada manipulando $data.  
        */
        if (count(self::$model->cadastrar($data['request'])) == 1) {
            $retorno['message'] = "Cadastrado com sucesso!";
        } else {
            $retorno['message'] = "Erro no cadastro!";
        }
        return $retorno;
    }
    public static function editar($data)
    {
        /*
        Aqui pode ter uma verificação de permissão
        Também pode ter um tratamento especial para a chamada manipulando $data.  
        */
        if (count(self::$model->editar($data['request'])) == 1) {
            $retorno['message'] = "Editado com sucesso!";
        } else {
            $retorno['message'] = "Erro ao editar cadastro!";
        }
        return  $retorno;
    }
    public static function buscar($data)
    {
        /*
        Aqui pode ter uma verificação de permissão
        Também pode ter um tratamento especial para a chamada manipulando $data.  
        */
        $resultados = self::$model->editar($data['request']);
        if (count($resultados) == 1) {
            $retorno['message'] = "Busca com sucesso!";
            $retorno['count'] = count($resultados);
            $retorno['results'] = json_encode($resultados);
        } else {
            $retorno['message'] = "Não possui resultados!";
        } 
        return  $retorno;
    }
    public static function excluir($data)
    {
        /*
        Aqui pode ter uma verificação de permissão
        Também pode ter um tratamento especial para a chamada manipulando $data.  
        */
        if (count(self::$model->excluir($data['request'])) == 0) {
            $retorno['message'] = "Excluído com sucesso!";
        } else {
            $retorno['message'] = "Erro ao excluir cadastro!";
        }
        return  $retorno;
    }
}
