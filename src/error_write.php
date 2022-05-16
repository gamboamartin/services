<?php
namespace gamboamartin\error_write;


class error_write{
    /**
     * Aqui se escribe al error identificado cuando se corre el servicio, esta funcion solo debe ser utilizada
     * desde donde se ejecuta el servicio
     * @param array $error Error resultante de la clase errores
     * @param string $info Infomacion a escribir del error previo
     * @param string $path_info Ruta del archivo info del servicio generado en el constructor de services
     * @return string
     */
    public function write(array $error, string $info, string $path_info): string
    {
        $data = print_r($error,true);
        $info .= file_get_contents($path_info).$data;
        file_put_contents($path_info,$info);
        return $info;
    }
}


