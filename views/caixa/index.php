<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Setup;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Caixas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixa-index">

     <section class="panel panel-default">
                    <header class="panel-heading">
                      <span class="label bg-danger pull-right"> 
        <?= Html::a('Abrir Caixa', ['create']) ?>
    </span>
                      Caixa 
                    </header>
                    <table class="table table-striped m-b-none">
                      <thead>
                        <tr>
                             
                        
                          <th>Abertura</th>
                         
                            <th>Valor Abertura</th> 
                            <th>Fechamento</th>
                          <th>Valor Fechamento</th>
                          <th width="70"></th>
                        </tr>
                      </thead>
                      <tbody>
 <?php foreach($dataProvider->models as $model){
   echo' <tr><td class=""><a href="/caixa/'.$model->id.'">'.Setup::DepoisDePegar($model->data_abertura).'</a></td>
         
           <td>'.Setup::FormataMoeda($model->valor_abertura).'</td>
                 <td>'.Setup::DepoisDePegar($model->data_fechamento).'</td>
            <td>'.  Setup::FormataMoeda($model->valor_fechamento).'</td>
             <td class="text-right">
                            <div class="btn-group">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a>
                              <ul class="dropdown-menu pull-right">
                               <li><a href="/caixa/view/'.$model->id.'">Detalhes</a></li>
                                <li><a href="/caixa/update/'.$model->id.'"> Editar</a></li>
                              
                            
                              </ul>
                            </div>
                          </td>
           </tr>';
           
 }
 ?>
                      </tbody>
                    </table>
<div class="col-md-4">
                  <section class="panel panel-default">
                    <header class="panel-heading font-bold">Data graph</header>
                  
                    <div class="panel-body">
                      <div>
                        <span class="text-muted">Total:</span>
                        <span class="h3 block">$2500.00</span>
                      </div>
                      <div class="line pull-in"></div>
                      <div class="row m-t-sm">
                        <div class="col-xs-4">
                          <small class="text-muted block">Market</small>
                          <span>$1500.00</span>
                        </div>
                        <div class="col-xs-4">
                          <small class="text-muted block">Referal</small>
                          <span>$600.00</span>
                        </div>
                        <div class="col-xs-4">
                          <small class="text-muted block">Affiliate</small>
                          <span>$400.00</span>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
</div>
