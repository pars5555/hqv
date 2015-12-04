<div class="breadscrumb">
    <nav class="grey darken-4" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Observers</a>
            </div>
        </div>
    </nav>
</div>
<h2>Observers</h2>
<a href="javascript:void(0);" class="btn" id="updatePageButton">Refresh</a>
<table class="responsive-table real-voters">
    <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Last Login</th>
            <th>Logout</th>
        </tr>
    </thead>
    <tbody id="real_voters_table">
        {foreach from=$ns.rows item=row}
            <tr>
                <td>{$row->getUsername()}</td>
                <td>{$row->getPass()}</td>
                <td>{$row->getLastLogin()}</td>


                <td>
                    {assign hash $row->getHash()}
                    {if !empty($hash)}
                        <a href="javascript:void(0);" data-rowid="{$row->getId()}" class="btn resetObserverBtn">Reset</a>
                    {/if}
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>    