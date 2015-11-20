<div class="row">
    <div class="col s8">
        <div class="row">
            <div class="col s12 m3 4">
                <label for="p_region">Region</label>
                <select id="p_region" class="browser-default">
                    {foreach from=$ns.regions item=region}
                        <option value="{$region}" {if $ns.selectedRegion == $region}selected{/if}>{$region}</option>
                    {/foreach}
                </select>
            </div>
            <div class="col s12 m3 4">
                <label for="p_community">Community</label>
                <select id="p_community" class="browser-default">
                    {foreach from=$ns.regionCommunities item=regionCommunity}
                        <option value="{$regionCommunity}" {if $ns.selectedRegionCommunity == $regionCommunity}selected{/if}>{$regionCommunity}</option>
                    {/foreach}
                </select>
            </div>
            <div class="col s12 m6 6">
                <label for="p_address">Address</label>
                <select id="p_address" class="browser-default">
                    {foreach from=$ns.areas item=address key=rowid}
                        <option value="{$rowid}" {if $ns.selectedAreaId == $rowid}selected{/if}>{$address}</option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
</div>