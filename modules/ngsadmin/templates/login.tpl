<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    {include file="{ngs cmd=get_template_dir}/util/headerControls.tpl"}
    <body>
        <div class="login-wrapper">

            <div class="bioaderma_admin_logo"><img src="/img/bioderma_club_logo.png"/></div>
            <div class="login-header admin-header">

                <div class="admin-logo">
                    Admin Console
                </div>
            </div>
            <div id="ajaxLoader" class="ajaxLoader" style="display: none;position: absolute; top: 45px;"></div>
            <form class="login-form" id="loginForm" method="POST" action="{$SITE_PATH}/dyn/admin/do_login">
                <div class="login-wrapper-content">
                    <span>Username:</span>
                    <input class="input-type-text-design" data-ngs-validate="string" type="text" name="username"/>
                </div>
                <div class="login-wrapper-content">
                    <span>Password:</span>
                    <input class="input-type-text-design" type="password" data-ngs-validate="password" name="password"/>
                </div>

                <div class="error" id="errBox" style="color:red">

                </div>
                <input class="blue-button" type="submit" value="Login" />
            </form>
        </div>
    </body>
</html>