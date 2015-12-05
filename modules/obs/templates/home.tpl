<a class="button small gray" href="{$SITE_PATH}/dyn/login/do_logout">Logout</a>
<form id="addForm" action="{$SITE_PATH}/dyn/main/do_add_number" method="POST" autocomplete="off">
    <input class="text" type="number" name="number" required="" />
    <input class="button" type="submit" value="add" id="submitButton"/>
</form>
{if isset($ns.error_message)}
    <div style="color: red">{$ns.error_message}</div>
{/if}
{if isset($ns.success_message)}
    <div style="color: green">{$ns.success_message}</div>
{/if}
{if isset($ns.can_revert)}
    <a class="button small red" href="{$SITE_PATH}/dyn/main/do_revert_last_input"  id="revertButton">Revert</a>
{/if}
