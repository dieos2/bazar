<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Caixa */


?>


   

  
          <section class="vbox">          
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="index.html"><i class="fa fa-home"></i> Caixa</a></li>
                <li class="active">Aberto</li>
              </ul>
            
              <section class="panel panel-default">
                <div class="row m-l-none m-r-none bg-light lter">
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-info"></i>
                      <i class="fa fa-male fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="#">
                        <span class="h3 block m-t-xs"><strong><?php echo $model->numeroVendas ?></strong></span>
                      <small class="text-muted text-uc">Vendas</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-warning"></i>
                      <i class="fa fa-bug fa-stack-1x text-white"></i>
                    
                    </span>
                    <a class="clear" href="#">
                      <span class="h3 block m-t-xs"><strong id="bugs"><?php echo $model->valor_abertura ?></strong></span>
                      <small class="text-muted text-uc">Abertura</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light">                     
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-danger"></i>
                      <i class="fa fa-fire-extinguisher fa-stack-1x text-white"></i>
                    
                    </span>
                    <a class="clear" href="#">
                      <span class="h3 block m-t-xs"><strong id="firers"> <?php echo $model->TotalVendas ?></strong></span>
                      <small class="text-muted text-uc">Total</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x icon-muted"></i>
                      <i class="fa fa-clock-o fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="#">
                      <span class="h3 block m-t-xs"><strong><?php echo $model->TempoAberto->i .':'.$model->TempoAberto->s?></strong></span>
                      <small class="text-muted text-uc">Tempo Aberto</small>
                    </a>
                  </div>
                </div>
              </section>
                  <div class="row">
                <div class="col-md-12">
                  <section class="panel panel-default">
                    <header class="panel-heading font-bold">Vendas  <span class="label  pull-right"> 
                            <a class="btn btn-success" style="display: initial  !important; " href="/venda/create/<?php echo $model->id ?>">Nova Venda</a>
    </span></header>
                    <div class="panel-body">
                        <div class="row">
                <div class="col-md-12">
                 
                  <ul class="list-group gutter list-group-lg list-group-sp sortable">
                    <?php foreach($model->vendas as $venda){
                          
                      
                    echo '<li class="list-group-item box-shadow">
                      <a href="#" class="pull-right" data-dismiss="alert">
                        <i class="fa fa-times icon-muted"></i>
                      </a>
                      <span class="pull-left media-xs">
                        <i class="fa fa-sort icon-muted fa m-r-sm"></i>
                        <a  href="#todo-'.$venda->id.'" data-toggle="class:text-lt text-danger">
                          <i class="fa fa-square-o fa-fw text"></i>
                          <i class="fa fa-check-square-o fa-fw text-active text-danger"></i>
                        </a>
                      </span>
                      <div class="clear" id="todo-'.$venda->id.'">
                      <a href="/venda/'.$venda->id.'"> Cliente: '.$venda->idCliente->nome.'</a>
                      </div>
                    </li>';
                    }
                     ?>
                </div>
               
              </div>
                     
                     
                    </div>
                  </section>
                </div>
            </section>
          </section>

  


