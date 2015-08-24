<?php
Yii::app()->user->setState('salt', rand(10, 99));
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Configuración
            <small>Registrar propiedad </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="?r=intra/index">
                    <i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Propiedades</li>
            <li><a href="?r=intra/index">Gestión</a></li>
            <li class="active">Registrar propiedad</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Datos de la propiedad</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php
                            /* @var $this PropiedadController */
                            /* @var $model Propiedad */

                            $this->breadcrumbs=array(
                                'Propiedads'=>array('index'),
                                $model->IDPROP,
                            );
                            ?>
                            <?php $this->widget('zii.widgets.CDetailView', array(
                                'data'=>$model,
                                'attributes'=>array(

                                    'RUTCLIENTE',
                                    'DIRECCION',
                                    'CANTPIEZA',
                                    'CANTBANO',
                                    'TERRENO',
                                    'TERRENOCONSTRUIDO',
                                    'TIPO',
                                    'SERVICIO',
                                    'ESTADO',
                                    'DESCRIPCION',
                                    'COMUNAPROPIEDAD',
                                ),
                            )); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php
                        /* @var $this PropiedadController */
                        /* @var $model Propiedad */

                        $this->breadcrumbs=array(
                            'Propiedads'=>array('index'),
                            $model->IDPROP,
                        );
                        ?>
                        <?php $this->widget('zii.widgets.CDetailView', array(
                            'data'=>$model2,
                            'attributes'=>array(
                                'RUTCLIENTE',
                                'NOMBRESCLIENTE' ,
                                'APELLIDOSCLIENTE',
                                'TELEFONOCLIENTE' ,
                                'DIRECCIONCLIENTE',
                                'CORREOCLIENTE',
                            ),
                        )); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Subir de fotos de propiedad</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="center-block">
                    <div class="center-block">
                        <div class="center-block">
                            <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'upload-form',
                                // Please note: When you enable ajax validation, make sure the corresponding
                                // controller action is handling ajax validation correctly.
                                // There is a call to performAjaxValidation() commented in generated controller code.
                                // See class documentation of CActiveForm for details on this.
                                'enableAjaxValidation'=>false,
                                'htmlOptions' => array(
                                    'enctype' => 'multipart/form-data',
                                ),
                            )); ?>
                            <?
                            $this->widget('application.extensions.EAjaxUpload.EAjaxUpload', array(
                                'id' => 'fileUploader',
                                'config' => array(
                                    'action' => Yii::app()->createUrl('/propiedad/upload'),
                                    'allowedExtensions' => array("jpg","jpeg","gif","png"), //array("jpg","jpeg","gif","exe","mov" and etc...
                                    'sizeLimit' => 1 * 1024 * 1024 * 100, // maximum file size in bytes
                                    'minSizeLimit' => 1024, // minimum file size in bytes
                                    'onComplete' => "js:function(id, fileName, responseJSON){ $('#archivo').val(fileName); $('#botones').css('display','inline'); }",

                                )
                            ));;?>

                        </div>
                    </div>
                </div>
                <div class="center-block">
                    <div class="row buttons" style="display: block; margin-left: auto; margin-right: auto; ">
                        <?php echo CHtml::submitButton('Guardar', array('class'=>'boton center-block')); ?>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
            <div class="box-footer">

            </div>
        </div>
    </section>
</div>