<?php
namespace app\controllers;

use app\models\Kr;
use Yii;
use app\models\ObjectZan;
use app\models\Okr;
use app\models\Objects;
use yii\web\Controller;
use yii\db\Exception;

class OkrController extends Controller
{
    public function actionIndex(){
        Yii::$app->session['u_id'] = '1';
        return $this->render('index');
    }

    public function actionList()
    {
        $u_id = Yii::$app->session->get('u_id');
        $objects = Okr::find()->select(['okr_id','okr_title','okr_date','is_public'])->where('okr_owner=:u_id',[':u_id'=>$u_id])->asArray()->all();

        $data = array();
        foreach($objects as $object){
            $zanNum = ObjectZan::find()->where('okr_id=:okr_id',[':okr_id'=>$object['okr_id']])->count();
            $object['zan_num'] = $zanNum;
            array_push($data,$object);
        }

        $this->layout = 'main2';
        return $this->render('list',['objects'=>$data]);
    }
    //订阅
    public function actionSubscribe()
    {
        $u_id = Yii::$app->session->get('u_id');
        $u_id = 1;

        $this->layout = 'main2';
        return $this->render('subscribe');
    }

    public function actionGrade()
    {
        $this->layout = 'main2';
        return $this->render('grade');
    }

    public function actionCreate()
    {
        $u_id = Yii::$app->session->get('u_id');
        $okr_id = Yii::$app->request->get('okr_id');
        $data = array();
        if($okr_id){
            $objects = Objects::find()->where('okr_id=:okr_id',[':okr_id'=>$okr_id])->all();
            foreach($objects as $obj){
                $item = array();
                $item['object_title'] = $obj->object_title;
                $krs = Kr::find()->where('object_id=:object_id',[':object_id'=>$obj->object_id])->all();
                $item['info'] = $krs;
                array_push($data,$item);
            }
        }


        if(Yii::$app->request->isPost){
            $post = Yii::$app->request->post();
            $action = $post['action'];
            $postDataStr = str_replace('},','}$',$post['postData']);
            $postData = explode("$",$postDataStr);
            $okrTitle = $post['okrTitle'];

            $transaction = Yii::$app->db->beginTransaction();
            try{
                $okr = new Okr();
                $okr->okr_date = date('Y-m-d H:i:s',time());;
                $okr->okr_title = $okrTitle;
                $okr->okr_owner = (string)$u_id;
                if ($action == 'save'){
                    $okr->is_public = '0';
                }else{
                    $okr->is_public = '1';
                }
                $okr->save();
                $okr_id = (string)$okr->okr_id;

                foreach($postData as $data){
                    $data = json_decode($data);
                    $object = new Objects();
                    $object->object_title = $data->title;
                    $object->okr_id = $okr_id;
                    $object->save();
                    $object_id = (string)$object->object_id;

                    foreach($data->sub as $key=>$val){
                        $kr = new Kr();
                        $kr->kr_title = $val;
                        $kr->object_id = $object_id;
                        $kr->save();
                    }
                }
                $transaction->commit();
                $this->redirect(['okr/list']);
            }catch(Exception $e){
                $transaction->rollBack();
            }
        }
        $this->layout = 'main2';
        return $this->render('create',['objects'=>$data]);
    }

    public function actionDetail()
    {

        $u_id = Yii::$app->session->get('u_id');
        $okr_id = Yii::$app->request->get('o_id');
        $is_public = Yii::$app->request->get('is_public');
        //获取okr
        $okr = Okr::find()->select('okr_title')->where('okr_id=:okr_id',[':okr_id'=>$okr_id])->one();
        //获取Object列表
        $objecct_list = Objects::find()->where('okr_id=:okr_id',[':okr_id'=>$okr_id])->all();

        $data= array();
        foreach($objecct_list as $object){
            $item = array();
            //Object标题
            $item['title']=$object->object_title;
            //Object下属的kr
            $kr_list = Kr::find()->select('kr_title')->where('object_id=:object_id',[':object_id'=>$object->object_id])->asArray()->all();
            $item['info']=$kr_list;
            //点赞
            $zan_list = ObjectZan::find()->select('u_name')->where('okr_id=:okr_id and object_id=:object_id',[':okr_id'=>$okr_id,':object_id'=>$object->object_id])->all();
            $item['zan_list'] = $zan_list;
            $item['zan_num'] = count($zan_list);
            array_push($data,$item);
        }
        $this->layout='main2';
        return $this->render('detail',['objects'=>$data,'okr'=>$okr,'is_public'=>$is_public]);
    }
}