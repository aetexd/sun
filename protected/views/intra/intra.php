<?php
if(!Yii::app()->session['activo'])
    $this->redirect('?r=site/index');;
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Intranet
                <small>Administración</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="?r=intra/index"><i class="fa fa-home"></i> Inicio</a></li>

            </ol>            
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo Cliente::model()->count()?></h3>
                  <p>Clientes</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">Nuevos Clientes<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo Cliente::model()->count()?></h3>
                  <p>Propiedades</p>
                </div>
                <div class="icon">
                  <i class="fa fa-home"></i>
                </div>
                <a href="#" class="small-box-footer">Nuevas Propiedades <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>5</h3>
                  <p>Próximas Citas</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar"></i>
                </div>
                <a href="#" class="small-box-footer">Ver Todas <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>1</h3>
                  <p>Ventas</p>
                </div>
                <div class="icon">
                  <i class="fa fa-money"></i>
                </div>
                <a href="#" class="small-box-footer">Nuevas ventas <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          
        </section>


    </div><!-- /.content-wrapper -->


