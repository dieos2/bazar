<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-index">

    

   

      <section class="panel panel-default">
                    <header class="panel-heading">
                      <span class="label bg-danger pull-right"> 
        <?= Html::a('Create Produto', ['create']) ?>
    </span>
                      Produtos
                    </header>
                    <table class="table table-striped m-b-none">
                      <thead>
                        <tr>
                             <th></th> 
                        
                          <th>Nome</th>
                          <th>Custo</th>
                            <th>Preço</th>
                         
                          <th width="70"></th>
                        </tr>
                      </thead>
                      <tbody>
                           <?php foreach($dataProvider->models as $model){
   echo' <tr><td class="">';             ?> 
                          <?php
                         if($model->novo){
                             echo '<i class="fa fa-heart-o text-danger"></i>';
                         }else{
                             echo '<i class="fa fa-heart text-success"></i>';
                         }
                         ?>
                          <?php
                         if($model->vendido){
                             echo '<i class="fa fa-thumbs-down text-danger"></i> ';
                         }else{
                             echo '<i class="fa fa-thumbs-up text-success"></i> ';
                         }
                         ?><?php echo
                          '</td><td>
                            <a href="/produto/view/'.$model->id.'">'.$model->nome.'</a>
                          </td>
                           <td class="text-warning">R$ '.floatval(str_replace('.', ',', $model->preco_custo)).'</td>
                          <td class="text-success">R$ '.floatval(str_replace('.', ',', $model->preco)).'</td>';
                         ?>
   <?php
                         echo '<td class="text-right">
                            <div class="btn-group">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a>
                              <ul class="dropdown-menu pull-right">
                               <li><a href="/produto/view/'.$model->id.'">Detalhes</a></li>
                                <li><a href="/produto/update/'.$model->id.'">Editar</a></li>
                                <li><a href="#">Vender</a></li>
                                <li><a href="#">Deletar</a></li>
                            
                              </ul>
                            </div>
                          </td>
                        </tr>';
   }
   ?>
                       
                      
                      </tbody>
                    </table>
                  </section>
 

</div>
