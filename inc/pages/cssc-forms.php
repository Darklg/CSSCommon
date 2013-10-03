<section class="block-content centered-container"><div>
    <div class="bkc-header">
        <div class="bkch-aside">
            Modules :
            <code>cssc-forms.css</code>
            <code>cssc-buttons.css</code>
        </div>
        <h2 id="cssc-forms">Formulaires &amp; Buttons</h2>
    </div>
    <p>
        Un modèle de formulaire à labels flottants et un modèle simple en paramétrant directement le form. <br />
        Cliquez sur les boutons ci-dessous pour découvrir les possibilités de CSSCommon pour les formulaires.
    </p>
    <p>
        <a href="#cssc-forms" class="cssc-button" id="set_form_block">Form Block</a>
        <a href="#cssc-forms" class="cssc-button" id="set_form_float">Form Flottant</a>
    </p>
    <p>
        <a href="#cssc-forms" class="cssc-button" id="set_form_wide">Form large</a>
        <a href="#cssc-forms" class="cssc-button" id="set_form_normal">Form normal</a>
    </p>
</div></section>

<section class="block-content centered-container"><div>

    <div class="cssc-lay">
        <div class="col-main">

    <form id="form_demo" autocomplete="off" action="/" class="cssc-form block-form" method="post">

        <fieldset id="cssc-forms-input">
            <legend>Champs classiques</legend>
            <ul>
                <li class="box">
                    <label for="form_text">Input normal</label>
                    <input name="form_text" id="form_text" type="text" placeholder="Du texte" />
                    <small class="side-small">Texte d’aide</small>
                </li>
                <li class="box">
                    <label for="form_textl" class="long-label">Label beaucoup trop long</label>
                    <input name="form_textl" id="form_textl" type="text" placeholder="Du texte" />
                </li>
                <li class="box">
                    <label for="form_text2">Input désactivé</label>
                    <input name="form_text2" id="form_text2" type="text" placeholder="Du texte non accessible" disabled />
                </li>
                <li class="box">
                    <label>Faux Input</label>
                    <span class="fake-input">Edit me if u can</span>
                </li>
            </ul>
        </fieldset>
        <fieldset id="cssc-forms-twoboxes">
            <legend>Présentation à deux box</legend>
            <ul class="twoboxes">
                <li class="box">
                    <label for="form_text3">Un mini-input</label>
                    <input name="form_text3" id="form_text3" type="text" placeholder="Un placeholder classique" />
                </li>
                <li class="box">
                    <label for="form_text4">Un autre mini-input</label>
                    <input name="form_text4" id="form_text4" type="text" placeholder="Un placeholder classique" />
                </li>
            </ul>
        </fieldset>
        <fieldset id="cssc-forms-register">
            <legend>Formulaire d'inscription</legend>
            <ul>
                <li class="box email-box">
                    <label for="form_email">Email</label>
                    <input name="form_email" id="form_email" type="email" placeholder="Email" />
                    <small>Une explication est-elle nécessaire ?</small>
                </li>
                <li class="box password-box">
                    <label for="form_passwd">Password</label>
                    <input name="form_passwd" id="form_passwd" type="password" placeholder="Mot de passe" />
                </li>
                <li class="box multibox-box">
                    <label>Date de Naissance</label>
                    <input type="text" name="form_multi_1" value="" class="halfling" placeholder="JJ" maxlength="2" />
                    <input type="text" name="form_multi_2" value="" class="halfling" placeholder="MM" maxlength="2" />
                    <input type="text" name="form_multi_3" value="" placeholder="AAAA" maxlength="4" />
                </li>
                <li class="box multibox-box">
                    <label>Date de départ</label>
                    <select name="form_multi_jj" id="form_multi_jj">
                        <?php for ($i = 1; $i < 31; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                    <select name="form_multi_mm" id="form_multi_mm">
                        <?php for ($i = 1; $i < 12; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                    <select name="form_multi_yyyy" id="form_multi_yyyy">
                        <?php for ($i = date('Y'); $i < 2020; $i++) { ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </li>
                <li class="box textarea-box">
                    <label for="form_textarea">Textarea</label>
                    <textarea rows="5" cols="20" name="form_textarea" id="form_textarea"></textarea>
                </li>
                <li class="box">
                    <label for="form_select">Select</label>
                    <select name="form_select" class="cssc-select" id="form_select">
                        <option value="" disabled selected style="display:none;">Sélectionner</option>
                        <option value="0">A lot of people in our industry haven't had very diverse experiences. So they don't have enough dots to connect, and they end up with very linear solutions without a broad perspective on the problem. The broader one's understanding of the human experience, the better design we will have.</option>
                        <option value="1">Other value</option>
                    </select>
                </li>
                <li class="box submit-box radio-box">
                    <input type="checkbox" name="form_checkbox3" id="form_checkbox3" />
                    <label for="form_checkbox3">J'accepte les conditions du site.</label>
                    <button type="submit" class="cssc-button cssc-button-medium">Envoyer</button>
                </li>
            </ul>
        </fieldset>
        <fieldset id="cssc-forms-check">
            <legend>Radio &amp; Check</legend>
            <ul>
                <li class="box checked-box">
                    <span class="fake-label">Faux Label</span>
                    <input type="checkbox" name="form_checkbox" id="form_checkbox" />
                    <label for="form_checkbox">Checkbox 1</label>
                </li>
                <li class="box checked-box">
                    <label for="form_checkbox2">Checkbox2</label>
                    <input type="checkbox" name="form_checkbox2" id="form_checkbox2" />
                </li>
                <li class="box checked-box">
                    <span class="fake-label">Faux Label</span>
                    <label for="form_radiobox">Radio un</label>
                    <input name="form_radiobox" id="form_radiobox" type="radio" />
                    <label for="form_radiobox2">Radio deux</label>
                    <input name="form_radiobox" id="form_radiobox2" type="radio" />
                </li>
                <li class="box checked-box">
                    <input name="form_radiobox3" id="form_radiobox3" type="radio" />
                    <label for="form_radiobox3">Radio trois</label>
                    <input name="form_radiobox3" id="form_radiobox4" type="radio" />
                    <label for="form_radiobox4">Radio quatre</label>
                </li>
            </ul>
        </fieldset>
    </form>

    <h3 id="cssc-forms-append">Formulaire collé</h3>
    <form action="#" method="post">
        <div class="form-append form-append-demo">
            <input class="inputbase" type="text" name="lorem" value="" />
            <button type="submit" class="cssc-button">Envoyer</button>
        </div>
        <div class="cssc-form">
            <small>Formulaire type "recherche rapide" ou "inscription à la newsletter"</small>
        </div>
    </form>

    <h3 id="cssc-forms-buttons">Boutons</h3>

    <h4>Markup</h4>
    <div class="cssc-block">
        <a href="#" class="cssc-button">a.cssc-button</a>
        <button class="cssc-button">button.cssc-button</button>
        <input type="submit" class="cssc-button" value="input[type=submit].cssc-button"/>
    </div>

    <h4>Tailles de boutons</h4>
    <div class="cssc-block">
        <button class="cssc-button cssc-button-small" title=".cssc-button .cssc-button-small">Small button</button>
        <button class="cssc-button" disabled title="[disabled]">Disabled</button>
        <button class="cssc-button" title=".cssc-button">Default button</button>
        <button class="cssc-button cssc-button-medium" title=".cssc-button .cssc-button-medium">Medium button</button>
        <button class="cssc-button cssc-button-big" title=".cssc-button .cssc-button-big">Big button</button>
    </div>

    <h4>Thèmes de boutons</h4>
    <div class="cssc-block">
        <button class="cssc-button round-button" title=".cssc-button .round-button">Round button</button>
        <button class="cssc-button error-button" title=".cssc-button .error-button">Error button</button>
        <button class="cssc-button success-button" title=".cssc-button .success-button">Success button</button>
    </div>

    <h4>Boutons avec icône</h4>
    <div class="cssc-block">
        <button class="cssc-button btn-phone" title=".cssc-button .btn-phone">Phone Number</button>
        <button class="cssc-button btn-eject" title=".cssc-button .btn-eject">Eject</button>
        <button class="cssc-button cssc-button-icn-large btn-download" title=".cssc-button .cssc-button-icn-large .btn-download">Download</button>
        <button class="cssc-button btn-play" title=".cssc-button .btn-play">Play</button>
        <button class="cssc-button btn-go" title=".cssc-button .btn-go">Go</button>
        <button class="cssc-button btn-img" title=".cssc-button .btn-img">Image</button>
    </div>

    <h4>Groupe de boutons</h4>
    <div>
        <div class="button-group">
            <button class="cssc-button cssc-button-medium">Action 1</button><!--
            --><button class="cssc-button cssc-button-medium">Action 2</button><!--
            --><button class="cssc-button cssc-button-medium">Action 3</button>
        </div>
        <button class="cssc-button cssc-button-medium">Bouton après</button>
    </div>

    </div>
        <div class="col-side">
            <ul class="cssc-vertical-menu">
                <li><a href="#cssc-forms-input">Champs classiques</a></li>
                <li><a href="#cssc-forms-twoboxes">Présentation à deux box</a></li>
                <li><a href="#cssc-forms-register">Formulaire d'inscription</a></li>
                <li><a href="#cssc-forms-check">Radio &amp; Check</a></li>
                <li><a href="#cssc-forms-append">Formulaire collé</a></li>
                <li><a href="#cssc-forms-buttons">Boutons</a></li>
            </ul>
        </div>
    </div>

</div></section>