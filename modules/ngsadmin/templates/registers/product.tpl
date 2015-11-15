<h2>PRODUCT</h2>

<div class="adding-header">
    <div class="img_container" id = "imgContainer">
        {if isset($ns.imagesUrls)}
            {foreach from=$ns.imagesUrls item=item}
                <div class="image_box">
                    <img class="uploaded_image" data-id="{$item->getId()}" src="{ngs cmd=get_http_host}/data/{$item->getPageName()}/{$item->getImageName()}">
                      <button class="f_delete_register_image filter_button blue-button" type="Submit" value="Delete" data-page="{$item->getPageName()}" data-id="{$item->getId()}" data-path="{$item->getPageName()}/{$item->getImageName()}"> Delete</button>
                </div>
            {/foreach }
			<div class="clear"></div>
        {else}
            <div class="notif">
                There are No images for current Registration Page Please Upload Images
            </div>
        {/if}


    </div>
   <button type="button" class="blue-button f_trigger_upload" style="float: none">
      Add file...
    </button>
           <button type="button" id="add_description" class="blue-button" style="float: none">
   {if isset($ns.description)}
        Change description
      {else}
        Add description
      {/if}
    </button>
    {if isset($ns.description)}
      <p class="description_text" id = "description_text">
        {$ns.description}
      </p>
    {/if}
    <div class="description_block hide" id="description_block">
      <textarea id="description_input" class="add_description"></textarea>
      <button id="updateDescription" data-page ="product" type="button" class="blue-button" style="float: none">
        Save description
      </button>
    </div>  
 
  <input type="file" name="upload_pic" id="upload_pic" style="display: none" />
</div>