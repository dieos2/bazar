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

</div>
