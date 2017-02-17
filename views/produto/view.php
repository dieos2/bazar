<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Produto */

$this->title = $model->int;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


   

    <p>
        
      
    </p>
      <section id="vbox" class="vbox">
            <header class="header bg-white b-b b-light">
              <p>Detalhes Produto</p>
            </header>
     <section class="scrollable">
              <section class="hbox stretch">
    <aside class="aside-lg bg-light lter b-r">
                  <section class="vbox">
                    <section class="scrollable">
                      <div class="wrapper">
                        <div class="clearfix m-b">
                          <a href="#" class="pull-left thumb m-r">
                            <img src="/produtos/<?php echo $model->foto ?>" class="img-circle">
                          </a>
                          <div class="clear">
                            <div class="h3 m-t-xs m-b-xs"><?php echo $model->nome ?></div>
                            <small class="text-muted"><i class="fa fa-tag"></i> <?php echo $model->idCategoria->categoria ?></small>
                          </div>                
                        </div>
                        <div class="panel wrapper panel-success">
                          <div class="row">
                            <div class="col-xs-4">
                              <a href="#">
                                <span class="m-b-xs h4 block ">R$ <?php echo floatval(str_replace('.', ',',$model->preco_custo)) ?></span>
                                <small class="text-muted">Custo</small>
                              </a>
                            </div>
                            <div class="col-xs-4">
                              <a href="#">
                                <span class="m-b-xs h4 block">R$ <?php echo floatval(str_replace('.', ',',$model->preco)) ?></span>
                                <small class="text-muted">Venda</small>
                              </a>
                            </div>
                            <div class="col-xs-4">
                              <a href="#">
                                <span class="m-b-xs h4 block text-success">R$ <?php echo floatval(str_replace('.', ',', $model->preco - $model->preco_custo)) ?></span>
                                <small class="text-muted">Lucro</small>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="btn-group btn-group-justified m-b">
                          <a href="/produto/update/<?php echo $model->int ?>" class="btn btn-primary btn-rounded" data-toggle="">
                            <span class="text">
                              <i class="fa fa-pencil"></i> Editar
                            </span>
                           
                          </a>
                          <a href="#" class="btn btn-dark btn-rounded" data-toggle="modal" data-target="#myModal" >
                            <i class="fa fa-print"></i> Imprimir
                          </a>
                        </div>
                        <div>
                          <small class="text-uc text-xs text-muted">Condição</small>
                         <?php
                         if($model->novo){
                             echo '<p>Novo</p>';
                         }else{
                             echo '<p>usado</p>';
                         }
                         ?>
                           <small class="text-uc text-xs text-muted">Vendido</small>
                         <?php
                         if($model->vendido){
                             echo '<p>Não</p>';
                         }else{
                             echo '<p>Sim</p>';
                         }
                         ?>
                          <small class="text-uc text-xs text-muted">Descrição</small>
                          <p><?php echo $model->descricao ?></p>
                          <div class="line"></div>
                          <small class="text-uc text-xs text-muted">Codigo</small>
                          <p class="m-t-sm">
                           <img src="<?= Url::to(['produto/qrcode/'.$model->int.''])?>" />
                          </p>
                        </div>
                      </div>
                    </section>
                  </section>
                </aside>
   

              </section>
     </section>
     </section>
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="wrapper" id="divPrint">
                        <div class="clearfix m-b">
                          <a href="#" class="pull-left thumb m-r">
                              <img src="/images/AtelieInvertido.png" class="">
                          </a>
                          <div class="clear">
                            <div class="h3 m-t-xs m-b-xs"><?php echo $model->nome ?></div>
                            <small class="text-muted"><i class="fa fa-tag"></i> <?php echo $model->idCategoria->categoria ?></small>
                            
                         <?php
                         if($model->novo){
                             echo '<small><i class="fa fa-tag"></i> Novo</small>';
                         }else{
                             echo '<small><i class="fa fa-tag"></i> Usado</small>';
                         }
                         ?>
                         
                          <small class="text-uc text-xs text-muted">Descrição</small>
                          <small><i class="fa fa-tag"></i> <?php echo $model->descricao ?></small>
                          </div>                
                        </div>
                        <div class="panel wrapper panel-success">
                          <div class="row">
                          
                              <div class="col-xs-12" style="text-align: center">
                              <a href="#">
                                  <span class="m-b-xs h4 block" style="font-size: 50px">R$ <?php echo floatval(str_replace('.', ',',$model->preco)) ?></span>
                             
                              </a>
                            </div>
                      
                          </div>
                        </div>
                      
                        <div>
                          <small class="text-uc text-xs text-muted">Codigo</small>
                          <p class="m-t-sm">
                              <img style="width: 100%" src="<?= Url::to(['produto/qrcode/'.$model->int.''])?>" />
                          </p>
                          <div class="line"></div>
                        </div>
                      </div>
      </div>
      <div class="modal-footer">
           <button type="button"  class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" onclick="printArea()" class="btn btn-success" >Imprimir</button>
        
      </div>
    </div>
  </div>
</div>
           
   
    <script>
    jQuery(function(){
        $('#myModal').on('show.bs.modal', function (e) {
               $('#vbox').hide();  
})
  $('#myModal').on('hide.bs.modal', function (e) {
               $('#vbox').show();  
})
    });
    </script>