<div class="breadscrumb">
    <nav class="grey darken-4" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Snippets</a>
            </div>
        </div>
    </nav>
</div>

<table class="responsive-table real-voters">
    <thead>
        <tr>
            <th>Id</th>
            <th>English</th>
            <th>Armenian</th>
            <th>Russian</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody id="real_voters_table">
        {foreach from=$ns.rows item=row}
            <tr data-rowid="{$row->getId()}">
                <td>{$row->getId()}</td>
                <td><textarea type="text" id="phrase_en_{$row->getId()}" >{$row->getPhraseEn()}</textarea></td>
                <td><textarea type="text" id="phrase_am_{$row->getId()}" >{$row->getPhraseAm()}</textarea></td>
                <td><textarea type="text" id="phrase_ru_{$row->getId()}" >{$row->getPhraseRu()}</textarea></td>
                <td>
                    <a data-rowid="{$row->getId()}" class="f_save waves-effect waves-light btn">Save<i class="material-icons left">mode_edit</i></a>
                </td>

            </tr>
        {/foreach}
    </tbody>
</table>    