<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Comments;
use frontend\models\Authors;

class CommentsController extends Controller
{
    public function actionComments()
    {
        $comments = Comments::find()->all();
        return $this->render('comments', ['articles' => $comments]);
    }

    public function actionBest_comments()
    {
        $authors = Authors::find()->all();
        if(!empty(Yii::$app->request->get()['id'])) {
            $comments = Comments::find()->where(['author_id' => Yii::$app->request->get()['id']])->limit(10)->all();
        } else {
            $comments = array();
        }
        return $this->render('best_comments', ['comments' => $comments, 'authors' => $authors]);
    }
}