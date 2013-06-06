<section class="block-content centered-container"><div>
    <div class="bkc-header">
        <div class="bkch-aside">
            Module :
            <code>cssc-forms.css</code>
        </div>
        <h2 id="cssc-forms">Formulaires</h2>
    </div>
    <p>
        Un modèle de formulaire à labels flottants et un modèle simple en paramétrant directement le form. <br />
        Cliquez sur les boutons ci-dessous pour découvrir les possibilités de CSSCommon pour les formulaires.
    </p>
<!-- <form id="form_demo" action="/" class="cssc-form float-form" method="post"> -->
    <form id="form_demo" action="/" class="cssc-form block-form" method="post">
        <ul>
            <li class="box buttons-box">
                <a href="#cssc-forms" class="cssc-button" id="set_form_block">Form Block</a>
                <a href="#cssc-forms" class="cssc-button" id="set_form_float">Form Flottant</a>
            </li>
            <li class="box buttons-box">
                <a href="#cssc-forms" class="cssc-button" id="set_form_wide">Form large</a>
                <a href="#cssc-forms" class="cssc-button" id="set_form_normal">Form normal</a>
            </li>
        </ul>
        <fieldset>
            <legend>Actions sur INPUTs</legend>
            <ul>
                <li class="box">
                    <label for="form_text">Input normal</label>
                    <input name="form_text" id="form_text" type="text" placeholder="Du texte" />
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
        <fieldset>
            <legend>Test de legend pour fieldset</legend>
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
        <fieldset>
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
                <li class="box buttons-box">
                    <a href="#" class="cssc-button">Le button</a>
                    <button class="cssc-button">Le button</button>
                </li>
                <li class="box checked-box">
                    <input type="checkbox" name="form_checkbox" id="form_checkbox" />
                    <label for="form_checkbox">Checkbox</label>
                </li>
                <li class="box checked-box">
                    <label for="form_checkbox2">Checkbox</label>
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
                    <label for="form_radiobox3">Radio 3</label>
                    <input name="form_radiobox3" id="form_radiobox4" type="radio" />
                    <label for="form_radiobox4">Radio 4</label>
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
            </ul>
        </fieldset>
    </form>
    <h3>Formulaire collé</h3>
    <form action="#" method="post">
        <div class="form-append form-append-demo">
            <input class="inputbase" type="text" name="lorem" value="" />
            <button type="submit" class="cssc-button">Envoyer</button>
        </div>
        <div class="cssc-form">
            <small>Formulaire type "recherche rapide" ou "inscription à la newsletter"</small>
        </div>
    </form>

    <h3>Boutons</h3>
    <div>
        <button class="cssc-button">.cssc-button</button>
        <button disabled class="cssc-button">disabled</button>
        <button class="cssc-button le-medium-button">.cssc-button .le-medium-button</button>
        <button class="cssc-button le-big-button">.cssc-button .le-big-button</button>
    </div>
    <h4>Boutons avec icône</h4>
    <div>
        <button class="cssc-button btn-phone">.cssc-button .btn-phone</button>
        <button class="cssc-button btn-eject">.cssc-button .btn-eject</button>
        <button class="cssc-button btn-img">.cssc-button .btn-img</button>
        <button class="cssc-button btn-go">.cssc-button .btn-go</button>
    </div>
</div></section>