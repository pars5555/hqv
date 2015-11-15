<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    {include file="{ngs cmd=get_template_dir}/util/headerControls.tpl"}
    <body>
        <div class="wrapper">
            <input type="hidden" id="initialLoad" name="initialLoad" value="admin_main" />
            {include file="{ngs cmd=get_template_dir}/util/header.tpl"}
            <div class="admin-header">
                <div class="admin-logo">
                    Admin Panel
                </div>
                <div class="logout-wrapper button-orange">
                    <a  href="{ngs cmd=get_http_host}/dyn/admin/do_logout">Log Out</a>
                </div>
            </div>
            {include file="{ngs cmd=get_template_dir}/left_panel.tpl"}
            <div id="content" class="admin-panel-right-wrapper">
                {nest ns=content}
            </div>
            <div id="modalBox" class="sign-up-wrapper"></div>
        </div>
    </body>
</html>