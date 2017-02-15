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
        
        <?= Html::a('Delete', ['delete', 'id' => $model->int], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
      <section class="vbox">
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
                            <small class="text-muted"><i class="fa fa-map-marker"></i> Blusa</small>
                          </div>                
                        </div>
                        <div class="panel wrapper panel-success">
                          <div class="row">
                            <div class="col-xs-4">
                              <a href="#">
                                <span class="m-b-xs h4 block"><?php echo $model->preco_custo ?></span>
                                <small class="text-muted">Custo</small>
                              </a>
                            </div>
                            <div class="col-xs-4">
                              <a href="#">
                                <span class="m-b-xs h4 block"><?php echo $model->preco ?></span>
                                <small class="text-muted">Venda</small>
                              </a>
                            </div>
                            <div class="col-xs-4">
                              <a href="#">
                                <span class="m-b-xs h4 block"><?php echo $model->preco - $model->preco_custo ?></span>
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
                          <a href="#" class="btn btn-dark btn-rounded" data-loading-text="Connecting">
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
                          <small class="text-uc text-xs text-muted">Descrição</small>
                          <p><?php echo $model->descricao ?></p>
                          <div class="line"></div>
                          <small class="text-uc text-xs text-muted">Codigo</small>
                          <p class="m-t-sm">
                           <img src="<?= Url::to(['produto/qrcode'])?>" />
                          </p>
                        </div>
                      </div>
                    </section>
                  </section>
                </aside>
   

              </section>
     </section>
     </section>
