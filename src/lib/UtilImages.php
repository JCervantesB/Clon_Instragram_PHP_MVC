<?php

namespace Usuario\ClonInstragram\lib;

class UtilImages {

    public static function guardarImagen(array $photo):string {
        // Definir la ruta donde vamos a guardar
        $target_dir = "public/img/photos/";
        // Dividir el objeto en base al . para obtener el nombre
        $extarr = explode('.', $photo["name"]);
        // Obtenemos el nombre de la imagen
        $filename = $extarr[sizeof($extarr)-2];
        // Obtenemos la extension de la imagen
        $ext = $extarr[sizeof($extarr)-1];
        // Hasheamos el nombre con la fecha
        $hash = md5(Date('Ymdgi') . $filename) . '.' . $ext;
        // Guardamos la imagen en la direccion + el nuevo nombre
        $target_file = $target_dir . $hash;
        // Indicador para llevar el control
        $uploadOk = 1;
        // Validamos que exista un "peso" para saber si se subio una imagen
        $check = getimagesize($photo["tmp_name"]);

        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

        if($uploadOk === 0) {
            //throw new \Exception("Lo siento, tu archivo no se ha subido.");
            return "";
        } else {
            if (move_uploaded_file($photo["tmp_name"], $target_file)) {
                return $hash;
            } else {
                return "";
            }
        }
    }
}