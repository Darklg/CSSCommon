<section class="block-content centered-container" id="bc-common"><div>
    <h2 id="cssc-common">&Eacute;léments récurrents</h2>
    <div>
        <div class="cssc-grid gri-940-24-20 cssc-block">
            <div class="col-8">
                <div class="cssc-panel">
                    <h3>Panneau</h3>
                    <p>Mise en avant de texte.</p>
                </div>
            </div>
            <div class="col-8">
                <h3>Coupure du texte en CSS</h3>
                <p class="non-depassement">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede.</p>
            </div>
            <div class="col-8">
                <h3>Effet Tiroir</h3>
                <div class="wdrw">
                    <p>
                        <a href="#">Survolez-moi !</a>
                    </p>
                    <div class="submenu trans-opa">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cssc-grid gri-940-24-20 cssc-block">
            <div class="col-8">
                <h3>
                    Block media
                </h3>
                <div class="bmedia">
                    <a href="#">
                        <img src="images/50x50-green.gif" width="50" height="50" alt="" />
                    </a>
                    <div class="bm-cont">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing . <a target="_blank" href="http://www.stubbornella.org/content/2010/06/25/the-media-object-saves-hundreds-of-lines-of-code/">(inspiré par @Stubbornella)</a></p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <h3>Remplacement d'image</h3>
                <span class="ir demo-ir">Texte alternatif</span>
            </div>
            <div class="col-8">
                <h3>Infobulle</h3>
                <p>
                    <a href="#" class="tooltip">
                        Infobulle
                        <span class="tooltip-bubble trans-opa">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. </span>
                    </a>
                    •
                    <a href="#" class="tooltip tooltip-bottom">
                        Dessous
                        <span class="tooltip-bubble trans-opa">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. </span>
                    </a>
                </p>
            </div>
        </div>
        <div class="cssc-grid gri-940-24-20 cssc-block">
            <div class="col-8">
                <h3>Centrage vertical</h3>
                <div class="vertical-center">
                    <div class="vertical-center__wrapper">
                        <div class="vertical-center__centered">
                            <p>Here’s to the crazy ones. The misfits. The rebels. The troublemakers. The round pegs in the square holes. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <h3>Barre d’avancement</h3>
                <span class="lvl-barre">
                    <span class="bar" style="width:30%;">30%</span>
                </span>
            </div>
            <div class="col-8">
                <h3>Notes</h3>
                <div class="cssc-stars">
                    <div class="cssc-stars-list">
                        <?php for ($i = 5; $i>= 1; $i--) { ?>
                        <input id="star-<?php echo $i; ?>" type="radio" name="star" value="<?php echo $i; ?>" />
                        <label for="star-<?php echo $i; ?>">&hearts;</label>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div></section>



<section class="block-content centered-container"><div>
    <div class="cssc-grid gri-940-24-20">
        <div class="col-11">
            <h2 id="cssc-messages">Messages d'avertissement</h2>
            <ul class="cssc-messages">
                <li><a class="error" href="#">lorem ipsum</a></li>
                <li><a class="notice" href="#">dolor sit amet</a></li>
                <li><a class="success" href="#">consectetur adipiscing elit</a></li>
                <li><a class="warning" href="#">consectetur adipiscing elit</a></li>
            </ul>
        </div>
        <div class="col-2">&nbsp;</div>
        <div class="col-11">
            <h2 id="cssc-code">Présentation de code</h2>
            <h3>Balise &lt;pre /&gt;</h3>
            <pre>&lt;script&gt;
var i;
for (i=0; i&lt;3; i++){
    console.log(i);
}
&lt;/script&gt;</pre>
            <h3>Balise &lt;code /&gt;</h3>
            <code>1. Hello.</code>
        </div>
    </div>
</div></section>
