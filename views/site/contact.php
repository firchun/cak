<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="clearfix"></div>
    <div class="row">
    <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
    <div class="x_title">
    <h2>Form Design <small>different form elements</small></h2>
    <ul class="nav navbar-right panel_toolbox">
    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
    </li>

    </ul>
    <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <br />
    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
    <input type="text" id="first-name" required="required" class="form-control ">
    </div>
    </div>
    <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
    <input type="text" id="last-name" name="last-name" required="required" class="form-control">
    </div>
    </div>
    <div class="item form-group">
    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Middle Name / Initial</label>
    <div class="col-md-6 col-sm-6 ">
    <input id="middle-name" class="form-control" type="text" name="middle-name">
    </div>
    </div>
    <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
    <div class="col-md-6 col-sm-6 ">
    <div id="gender" class="btn-group" data-toggle="buttons">
    <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
    <input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Male &nbsp;
    </label>
    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
    <input type="radio" name="gender" value="female" class="join-btn"> Female
    </label>
    </div>
    </div>
    </div>
    <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
    <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
    <script>
                                                        function timeFunctionLong(input) {
                                                            setTimeout(function() {
                                                                input.type = 'text';
                                                            }, 60000);
                                                        }
                                                    </script>
    </div>
    </div>
    <div class="ln_solid"></div>
    <div class="item form-group">
    <div class="col-md-6 col-sm-6 offset-md-3">
    <button class="btn btn-primary" type="button">Cancel</button>
    <button class="btn btn-primary" type="reset">Reset</button>
    <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </div>
    </form>
    </div>
</div>
</div>
</div>

<div class="site-contact panel p-3">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
