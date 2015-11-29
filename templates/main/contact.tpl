<div class="container">
    <h4 class="search-header">{$ns.lm->getPhrase(18)}</h4>

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
                <div class="col s6">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="first_name" name="first_name" type="text" class="validate" required>
                            <label for="first_name">{$ns.lm->getPhrase(8)}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
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
                </div>
                <div class="col s6">
                    <p>{$ns.lm->getPhrase(58)}</p>
                    <p>
                        <a href="tel:{$ns.lm->getPhrase(59)}">{$ns.lm->getPhrase(59)}</a>,
                        <a href="tel:{$ns.lm->getPhrase(60)}">{$ns.lm->getPhrase(60)}</a>,
                        <a href="tel:{$ns.lm->getPhrase(61)}">{$ns.lm->getPhrase(61)}</a>
                    </p>
                </div>
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" name="body" class="materialize-textarea" required></textarea>
                            <label for="textarea1">{$ns.lm->getPhrase(46)}</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn col grey ligten-3 s12 m12 12">
                            {$ns.lm->getPhrase(10)}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>	
</div>