<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property integer $int
 * @property string $nome
 * @property string $descricao
 * @property string $preco
 * @property string $data
 * @property integer $id_user
 * @property string $foto
 * @property integer $novo
 *
 * @property User $idUser
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
            [['nome', 'descricao', 'preco', 'data', 'id_user', 'foto'], 'required'],
            [['preco'], 'number'],
            [['data'], 'safe'],
            [['id_user', 'novo'], 'integer'],
            [['nome', 'foto'], 'string', 'max' => 150],
            [['descricao'], 'string', 'max' => 500],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'int' => 'Int',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'preco' => 'Preco',
            'data' => 'Data',
            'id_user' => 'Id User',
            'foto' => 'Foto',
            'novo' => 'Novo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
