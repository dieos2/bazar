<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-index">

    

    <p>
        <?= Html::a('Create Produto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

      <section class="panel panel-default">
                    <header class="panel-heading">
                      <span class="label bg-danger pull-right">4 left</span>
                      Produtos
                    </header>
                    <table class="table table-striped m-b-none">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Custo</th>
                            <th>Preço</th>
                          <th>Novo</th> 
                          <th>Vendido</th> 
                          <th width="70"></th>
                        </tr>
                      </thead>
                      <tbody>
                           <?php foreach($dataProvider->models as $model){
   echo' <tr>                    
                          <td>
                            <a href="/produto/view/'.$model->int.'">'.$model->nome.'</a>
                          </td>
                           <td class="text-warning">R$ '.floatval(str_replace('.', ',', $model->preco_custo)).'</td>
                          <td class="text-success">R$ '.floatval(str_replace('.', ',', $model->preco)).'</td>';
                         ?><?php
                         if($model->novo){
                             echo '<td class="text-danger "><i class="fa fa-heart-o"></i> Não</td>';
                         }else{
                             echo '<td class="text-success"><i class="fa fa-heart"></i> Sim</td>';
                         }
                         ?>
                          <?php
                         if($model->vendido){
                             echo '<td class="text-danger "><i class="fa fa-thumbs-down"></i> Não</td>';
                         }else{
                             echo '<td class="text-success"><i class="fa fa-thumbs-up"></i> Sim</td>';
                         }
                         ?>
   <?php
                         echo '<td class="text-right">
                            <div class="btn-group">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a>
                              <ul class="dropdown-menu pull-right">
                               <li><a href="/produto/view/'.$model->int.'">Detalhes</a></li>
                                <li><a href="/produto/update/'.$model->int.'">Editar</a></li>
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
