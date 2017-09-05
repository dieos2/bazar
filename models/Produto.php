<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $preco
 * @property string $data
 * @property int $id_user
 * @property string $foto
 * @property int $novo
 * @property double $vendido
 * @property string $preco_custo
 * @property int $id_categoria
 * @property double $impresso
 * @property int $id_tamanho
 *
 * @property User $user
 * @property Categoria $categoria
 * @property Tamanho $tamanho
 * @property VendaProduto[] $vendaProdutos
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'descricao', 'preco', 'data', 'id_user', 'vendido', 'preco_custo', 'id_categoria'], 'required'],
            [['preco', 'vendido', 'preco_custo', 'impresso'], 'number'],
            [['data'], 'safe'],
            [['id_user', 'novo', 'id_categoria', 'id_tamanho'], 'integer'],
            [['nome'], 'string', 'max' => 150],
            [['descricao'], 'string', 'max' => 500],
            [['foto'], 'string', 'max' => 250],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['id_categoria' => 'id']],
            [['id_tamanho'], 'exist', 'skipOnError' => true, 'targetClass' => Tamanho::className(), 'targetAttribute' => ['id_tamanho' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'preco' => 'Preco',
            'data' => 'Data',
            'id_user' => 'Id User',
            'foto' => 'Foto',
            'novo' => 'Novo',
            'vendido' => 'Vendido',
            'preco_custo' => 'Preco Custo',
            'id_categoria' => 'Id Categoria',
            'impresso' => 'Impresso',
            'id_tamanho' => 'Id Tamanho',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
       public function getIdCategoria()
    {
        return $this->hasOne(Categoria::className(), ['id' => 'id_categoria']);
    }
       public function getIdTamanho()
    {
        return $this->hasOne(Tamanho::className(), ['id' => 'id_tamanho']);
    }
    public function getCategoria()
    {
        return $this->hasOne(Categoria::className(), ['id' => 'id_categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTamanho()
    {
        return $this->hasOne(Tamanho::className(), ['id' => 'id_tamanho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendaProdutos()
    {
        return $this->hasMany(VendaProduto::className(), ['id_produto' => 'id']);
    }
}
