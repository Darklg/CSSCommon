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
                <li class="box textarea-box">
                    <label for="form_textarea">Textarea</label>
                    <textarea rows="5" cols="20" name="form_textarea" id="form_textarea"></textarea>
                </li>
                <li class="box submit-box radio-box">
                    <input type="checkbox" name="form_checkbox3" id="form_checkbox3" />
                    <label for="form_checkbox3">J'accepte les conditions du site.</label>
                    <button class="cssc-button le-medium-button">Envoyer</button>
                </li>
            </ul>
        </fieldset>
        <fieldset id="cssc-forms-check">
            <h3>Radio &amp; Check</h3>
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
        <button class="cssc-button">.cssc-button</button>
        <button disabled class="cssc-button">disabled</button>
        <button class="cssc-button le-medium-button">.cssc-button .le-medium-button</button>
        <button class="cssc-button le-big-button">.cssc-button .le-big-button</button>
    </div>
    <h4>Thèmes de boutons</h4>
    <div class="cssc-block">
        <button class="cssc-button round-button">.cssc-button .round-button</button>
        <button class="cssc-button error-button">.cssc-button .error-button</button>
        <button class="cssc-button success-button">.cssc-button .success-button</button>
    </div>
    <h4>Boutons avec icône</h4>
    <div class="cssc-block">
        <button class="cssc-button btn-phone">.cssc-button .btn-phone</button>
        <button class="cssc-button btn-eject">.cssc-button .btn-eject</button>
        <button class="cssc-button btn-img">.cssc-button .btn-img</button>
        <button class="cssc-button btn-go">.cssc-button .btn-go</button>
    </div>
    <h4>Groupe de boutons</h4>
    <div>
        <div class="button-group">
            <button class="cssc-button le-medium-button">Action 1</button><!--
            --><button class="cssc-button le-medium-button">Action 2</button><!--
            --><button class="cssc-button le-medium-button">Action 3</button>
        </div>
        <button class="cssc-button le-medium-button">Bouton après</button>
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