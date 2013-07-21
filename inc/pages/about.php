<?php
include dirname(__FILE__).'/../blocks/lead-about.php';
include dirname(__FILE__).'/../blocks/html.php';
include dirname(__FILE__).'/../blocks/common.php';
?>
<section class="block-content centered-container"><div>
    <div class="bkc-header">
        <div class="bkch-aside">
            Module :
            <code>cssc-tabs.css</code>
        </div>
        <h2 id="cssc-tabs">Onglets</h2>
    </div>
    <p>Des onglets simples, compatibles avec le <a href="http://darklg.github.io/JavaScriptUtilities/jquery.html#jq-tabs" target="_blank">plugin jQuery "Tabs"</a> ou la <a href="http://darklg.github.io/JavaScriptUtilities/mootools.html#moo-tabs" target="_blank">classe MooTools "Tabs"</a>.</p>
    <div class="cssc-tabs cssc-block">
        <ul class="cssc-tabs-clic">
            <li class="is-current"><a href="#">Onglet</a></li>
            <li><a href="#">Onglet 2</a></li>
            <li><a href="#">Onglet 3</a></li>
        </ul>
        <ul class="cssc-tabs-target">
            <li class="is-current">
                <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven’t found it yet, keep looking. Don’t settle. As with all matters of the heart, you’ll know when you find it. And, like any great relationship, it just gets better and better as the years roll on. So keep looking until you find it. Don’t settle.</p>
            </li>
            <li>
                <p>Being the richest man in the cemetery doesn’t matter to me … Going to bed at night saying we’ve done something wonderful… that’s what matters to me.</p>
            </li>
            <li>
                <p>A lot of people in our industry haven't had very diverse experiences. So they don't have enough dots to connect, and they end up with very linear solutions without a broad perspective on the problem.<br /> The broader one's understanding of the human experience, the better design we will have.</p>
            </li>
        </ul>
    </div>
    <p>
        <a href="#demo-code-tabs" class="cssc-button show-html-button">Afficher HTML</a>
    </p>
    <pre contenteditable id="demo-code-tabs">&lt;div class=&quot;cssc-tabs&quot;&gt;
    &lt;ul class=&quot;cssc-tabs-clic&quot;&gt;
        &lt;li class=&quot;is-current&quot;&gt;
            &lt;a href=&quot;#&quot;&gt;Onglet&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;a href=&quot;#&quot;&gt;Onglet 2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;a href=&quot;#&quot;&gt;Onglet 3&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul class=&quot;cssc-tabs-target&quot;&gt;
        &lt;li class=&quot;is-current&quot;&gt;
            &lt;p&gt;Contenu 1.&lt;/p&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;p&gt;Contenu 2.&lt;/p&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;p&gt;Contenu 3.&lt;/p&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</pre>
</div></section>



<section class="block-content centered-container"><div>
    <h2 id="cssc-gallery">Galerie</h2>
    <p>Une marge se crée automatiquement entre les éléments, mais le dernier élément d'une ligne est tout de même calé à droite, quel que soit le nombre d'éléments par ligne.</p>
    <ul class="subfloat sf_100_20">
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
        <li><a href="#"><img src="images/100x100-black.png" alt="" /></a></li>
    </ul>
    <!--[if lt IE 8 ]> <hr class="clearfix" /><![endif]-->
</div></section>



<section class="block-content block-content-push centered-container"><div>
    <div class="bkc-header">
        <div class="bkch-aside">
            Module :
            <code>cssc-push.css</code>
        </div>
        <h2 id="cssc-push">Pushs</h2>
    </div>
    <p>Cet objet permet de créer une transition entre deux images. Par exemple, un push avec <abbr title="Call to action">CTA</abbr>.</p>
    <h3>Push avec simple fondu</h3>
    <div class="cssc-grid gri-940-24-20">
        <div class="col-8">
            <a href="#" class="cssc-push push-simple">
                <span class="after">Texte alternatif</span>
            </a>
        </div>
        <div class="col-16">
            <p>
                Pas de pseudo-classes, &eacute;tant donn&eacute; que certains navigateurs ne supportent pas les transitions.
                <br />
                Au :hover, .after est progressivement affich&eacute;.
                <br />
                <a href="#demo-code-push-simple" class="cssc-button show-html-button">Afficher HTML</a>
            </p>
            <pre id="demo-code-push-simple" contenteditable>&lt;a href=&quot;#&quot; class=&quot;cssc-push push-simple&quot;&gt;
    &lt;span class=&quot;after&quot;&gt;Texte alternatif&lt;/span&gt;
&lt;/a&gt;</pre>
        </div>
    </div>
    <h3>Push avec double fondu</h3>
    <div class="cssc-grid gri-940-24-20">
        <div class="col-8 example_right">
            <a href="#" class="cssc-push push-double">
                <span class="before">Texte alternatif</span>
                <span class="after"></span>
            </a>
        </div>
        <div class="col-16">
            <p>
                Moins de soucis en cas de sprite avec deux images semi-transparentes.
                <br />
                Au :hover, .after est progressivement affich&eacute; pendant que .before est progressivement masqu&eacute;.
                <br />
                <a href="#demo-code-push-double" class="cssc-button show-html-button">Afficher HTML</a>
            </p>
            <pre id="demo-code-push-double" contenteditable>&lt;a href=&quot;#&quot; class=&quot;cssc-push push-double&quot;&gt;
    &lt;span class=&quot;before&quot;&gt;Texte alternatif&lt;/span&gt;
    &lt;span class=&quot;after&quot;&gt;&lt;/span&gt;
&lt;/a&gt;</pre>
        </div>
    </div>
</div></section>



<section class="block-content centered-container"><div>
    <div class="bkc-header">
        <div class="bkch-aside">
            Module :
            <code>cssc-images.css</code>
        </div>
        <h2 id="cssc-images">Images</h2>
    </div>
    <p>Images avec légende / titre à utiliser, par exemple, dans une liste d'articles.</p>
    <div>
        <a href="#" class="cssc-image cssc-img-theme-default">
            <img src="http://placehold.it/310x150" alt="" />
            <div class="cssc-img-content">
                <h4>Image Title</h4>
                <p>Sub-title</p>
            </div>
        </a>
        <a href="#" class="cssc-image cssc-img-theme-shadow">
            <img src="http://placehold.it/310x150" alt="" />
            <div class="cssc-img-content">
                <h4>Image Title</h4>
                <p>Sub-title</p>
            </div>
        </a>
        <a href="#" class="cssc-image cssc-img-theme-slide-bottom">
            <img src="http://placehold.it/310x150" alt="" />
            <div class="cssc-img-content">
                <h4>Image Title</h4>
                <p>Sub-title</p>
            </div>
        </a>
    </div>
    <hr class="clearfix" />
</div></section>