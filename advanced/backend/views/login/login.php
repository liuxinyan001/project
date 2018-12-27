<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */


use backend\assets\LayuiAsset;

use yii\helpers\Url;

use yii\helpers\Html;
LayuiAsset::register($this);

$this->title = 'Login';

?>

<div class="login-main">
    <div class="layadmin-user-login-box layadmin-user-login-header" style="margin-left: 450px; width: 300px;margin-top: 150px; margin-bottom: 20px;">
        <h2>旗鱼DSP系统</h2>
    </div>
    <form class="layui-form">
        <div class="layui-form-item" style="margin-left: 450px; width: 300px;">
            <input type="text" name="username" required lay-verify="required" placeholder="用户名" autocomplete="off"
                   class="layui-input">
        </div>

        <div class="layui-form-item" style="margin-left: 450px; width: 300px;">
            <input type="password" name="password" required lay-verify="required" placeholder="密码" autocomplete="off"
                   class="layui-input">
        </div>

        <div class="layui-form-item" style="margin-left: 450px; width: 300px;">
            <input type="hidden" name="auto" value="0" title="七天免登录" lay-skin="primary">
            <input type="checkbox" name="auto" value="1" title="七天免登录" lay-skin="primary">
        </div>

        <div class="layui-input-inline login-btn" style="margin-left: 450px; width: 300px;">
            <button lay-submit lay-filter="login" class="layui-btn">登录</button><br><br>
            <p><a href="register.html" class="fl">立即注册</a><a href="javascript:;" class="fr">忘记密码？</a></p>
        </div>
    </form>
</div>



<?=Html::jsFile('@web/js/jquery.min.js')?>
<?=Html::jsFile('@web/layui/layui.all.js')?>
<?=Html::jsFile('@web/layui/layui.js')?>

<script type="text/javascript">
    layui.use(['form','layer','jquery'], function () {
        var path = "<?php echo Url::toRoute('login/login',true); ?>";
        // 操作对象
        var form = layui.form;
        var $ = layui.jquery;
        form.on('submit(login)',function (data) {
            // console.log(data.field);
            $.ajax({
                url:path,
                data:data.field,
                dataType:'text',
                type:'post',
                success:function (data) {
                    if (data == '1'){
                        location.href = "../web/index.php?r=index/index";
                    }else{
                        layer.msg('登录名或密码错误');
                    }
                }
            })
            return false;
        })

    });
</script>
