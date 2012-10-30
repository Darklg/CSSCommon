<section class="block-content">
	<h2 id="normalize-forms">Formulaires</h2>
	<p>
	    Un modèle de formulaire à labels flottants et un modèle simple en paramétrant directement le form. <br />
	    Cliquez sur les boutons ci-dessous pour découvrir les possibilités de CSSNormalize pour les formulaires.
	</p>
<!-- <form id="form_demo" action="/" class="cssn_form float_form" method="post"> -->
	<form id="form_demo" action="/" class="cssn_form block_form" method="post">
		<ul>
			<li class="box buttons-box">
				<a href="#normalize-forms" class="le-button" id="set_form_block">Form Block</a>
				<a href="#normalize-forms" class="le-button" id="set_form_float">Form Flottant</a>
			</li>
			<li class="box buttons-box">
				<a href="#normalize-forms" class="le-button" id="set_form_wide">Form large</a>
				<a href="#normalize-forms" class="le-button" id="set_form_normal">Form normal</a>
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
					<label for="form_text2">Input désactivé</label>
					<input name="form_text2" id="form_text2" type="text" placeholder="Du texte non accessible" disabled />
				</li>
				<li class="box">
					<label>Faux Input</label>
					<span class="faux-input">Edit me if u can</span>
				</li>
			</ul>
		</fieldset>
		<fieldset>
			<legend>Test de legend pour fieldset</legend>
			<ul class="twoboxes">
				<li class="box">
					<label for="form_text3">Un input</label>
					<input name="form_text3" id="form_text3" type="text" placeholder="Un placeholder classique" />
				</li>
				<li class="box">
					<label for="form_text4" class="long-label">Un autre input trop long</label>
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
					<a href="#" class="le-button">Le button</a>
					<button class="le-button">Le button</button>
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
</section>