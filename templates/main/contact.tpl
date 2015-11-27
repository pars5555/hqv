<div class="container">
    <h4>{$ns.lm->getPhrase(18)}</h4>

    {if isset($ns.success_message)}
        <div class="row green-text">
            {$ns.success_message}
        </div>
    {/if}
    {if isset($ns.error_message)}
        <div class="row red-text">
            {$ns.error_message}
        </div>
    {/if}
    <div class="row">
        <form class="col s12" action="{$SITE_PATH}/dyn/main/do_contact" method="POST">
            <div class="row">
                <div class="input-field col s6">
                    <input id="first_name" name="first_name" type="text" class="validate" required>
                    <label for="first_name">{$ns.lm->getPhrase(8)}</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" name="last_name" type="text" class="validate" required>
                    <label for="last_name">{$ns.lm->getPhrase(9)}</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email"  name="email" type="email" class="validate" required>
                    <label for="email">{$ns.lm->getPhrase(22)}</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" name="body" class="materialize-textarea" required></textarea>
                    <label for="textarea1">{$ns.lm->getPhrase(46)}</label>
                </div>
            </div>
            <div class="row">
                <button class="btn col blue darken-4 s12 m12 12">
                    {$ns.lm->getPhrase(10)}
                </button>
            </div>
        </form>
    </div>	
</div>