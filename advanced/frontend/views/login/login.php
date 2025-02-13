<?php
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
/**
 * Team: @NKL,NKU
 * Coding by 朱心怡 1711304
 * This is the login view for the frontend shop.
 */
?>
<!DOCTYPE html>
<html class="login-bg">
<head>
    <title>南开商城登录</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap -->
    <link href="assets/admin/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/admin/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="assets/admin/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="assets/admin/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="assets/admin/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="assets/admin/css/icons.css" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="assets/admin/css/lib/font-awesome.css" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="assets/admin/css/compiled/signin.css" type="text/css" media="screen" />

    <!-- open sans font -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>


    <div class="row-fluid login-wrapper">
    <a class="brand" href="<?php echo yii\helpers\Url::to(['/index/index']) ?>"></a>
        <?php $form = ActiveForm::begin([
            'fieldConfig' => [
                'template' => '{error}{input}',
            ],
        ]); ?>
        <div class="span4 box">
            <div class="content-wrap">
                <h6>南开大学品牌文化购物登录</h6>
                <?php echo $form->field($model, 'username')->textInput(["class" => "span12", "placeholder" => "用户账号"]); ?>
                <?php echo $form->field($model, 'password')->passwordInput(["class" => "span12", "placeholder" => "用户密码"]); ?>
                <a href="result.html" class="forgot">注册</a>
                <?php echo $form->field($model, 'rememberMe')->checkbox([
                    'id' => 'remember-me',
                    'template' => '<div class="remember">{input}<label for="remember-me">记住我</label></div>',
                ]); ?>
                <?php echo Html::submitButton('登录', ["class" => "btn-glow primary login"]); ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

    <!-- scripts -->
    <script src="assets/admin/js/jquery-latest.js"></script>
    <script src="assets/admin/js/bootstrap.min.js"></script>
    <script src="assets/admin/js/theme.js"></script>

    <!-- pre load bg imgs -->
    <script type="text/javascript">
        $(function () {
            // bg switcher
            var $btns = $(".bg-switch .bg");
            $btns.click(function (e) {
                e.preventDefault();
                $btns.removeClass("active");
                $(this).addClass("active");
                var bg = $(this).data("img");

                $("html").css("background-image", "url('img/bgs/" + bg + "')");
            });

        });
    </script>

</body>
</html>
