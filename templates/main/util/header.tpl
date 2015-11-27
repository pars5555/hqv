 <nav>
  <div class="nav-wrapper blue darken-4">
    <a href="{$SITE_PATH}" class="brand-logo"><img class="logo" src="{$SITE_PATH}/img/logo.png" /></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    
    
    <ul class="right hide-on-med-and-down">
      <li {if $ns.loadName=='default'}class="active"{/if}><a href="{$SITE_PATH}">{$ns.lm->getPhrase(17)}</a></li>
      <li {if $ns.loadName=='contact'}class="active"{/if}><a href="{$SITE_PATH}/contact">{$ns.lm->getPhrase(18)}</a></li>
      <li {if $ns.loadName=='about'}class="active"{/if}><a href="{$SITE_PATH}/about">{$ns.lm->getPhrase(19)}</a></li>
      <li>
        <a id="lanBtn" class="f_lan_drop_down dropdown-button" href="javascript:void(0);" data-activates="dropdown1">{$ns.lm->getPhrase(20)}<i class="material-icons right icon-wrapper">arrow_drop_down</i></a>
        <ul id="dropdown1" class="dropdown-content">
          <li>
              <a href="{$SITE_PATH}/lang/am" class="f_cur_lan blue-text">
                  <img width="25" src="{$SITE_PATH}/img/arm_flag.png" />
                  {$ns.lm->getPhrase(31)}
              </a>
            </li>
          <li class="divider"></li>
          <li>
              <a href="{$SITE_PATH}/lang/en" class="f_cur_lan blue-text">
                <img width="25" src="{$SITE_PATH}/img/eng_flag.png" />
                {$ns.lm->getPhrase(32)}
              </a>
          </li>
        </ul>
      </li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="{$SITE_PATH}">{$ns.lm->getPhrase(17)}</a></li>
      <li><a href="{$SITE_PATH}/contact">{$ns.lm->getPhrase(18)}</a></li>
      <li><a href="{$SITE_PATH}/about">{$ns.lm->getPhrase(19)}</a></li>
      <!-- <li><a class="f_lan_drop_down dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li> -->
    </ul>
  </div>
</nav>