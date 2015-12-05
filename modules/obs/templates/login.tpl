<div class="container">
    <div class="section row">
        <a class="site--logo" href="{$SITE_PATH}">
            <img src="{$SITE_PATH}/img/logo.png" alt="" />
        </a>
        <form action="{$SITE_PATH}/dyn/login/do_login" method="POST" autocomplete="off">
            <input class="text" id="userName" type="text" name="username" placeholder="Username"/>
            <input class="text" id="password" type="password" name="password" placeholder="Password"/>
            <button class="button" type="submit" value="login">Login</button>
        </form>
        {if isset($ns.error_message)}
            <div style="color: red">{$ns.error_message}</div>
        {/if}
    </div>
</div>