<?php

class PropiedadForm extends CFormModel{
    public static $servicios=array("Venta","Arriendo");
    public $DIRECCION;
    public $CANTPIEZA;
    public $CANTBANO;
    public $TERRENO;
    public $TIPO;
    public $SERVICIO;
    public $ESTADO;
    public $DESCRIPCION;

    public function rules(){
        return array(
            array("DIRECCION, CANTPIEZA, CANTBANO, TERRENO, TIPO ,SERVICIO,ESTADO","required"),
            array('DIRECCION', 'length', 'max'=>50),
            array('TIPO', 'length', 'max'=>25),
            array('SERVICIO', 'length', 'max'=>10),
            array('DESCRIPCION', 'length', 'max'=>250),

        );
    }

}