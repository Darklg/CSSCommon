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
    <p>Des onglets simples, avec juste un peu de JS à rajouter.</p>
    <div class="cssc-tabs">
        <ul class="cssc-tabs-clic">
            <li class="current"><a href="#">Onglet</a></li>
            <li><a href="#">Onglet 2</a></li>
            <li><a href="#">Onglet 3</a></li>
        </ul>
        <ul class="cssc-tabs-target">
            <li class="current">
                <p>The world needs dreamers and the world needs doers. But above all, the world needs dreamers who do. </p>
            </li>
            <li><p>The world needs dreamers and the world needs doers. But above all, the world needs dreamers who do. </p></li>
            <li><p>The world needs dreamers and the world needs doers. But above all, the world needs dreamers who do. </p></li>
        </ul>
    </div>
</div></section>



<section class="block-content centered-container"><div>
    <div class="bkc-header">
        <div class="bkch-aside">
            Module :
            <code>cssc-tables.css</code>
        </div>
        <h2 id="cssc-tables">Tableaux</h2>
    </div>
    <table class="cssc-table">
        <thead>
            <tr>
                <th>Entete</th>
                <th>Entete</th>
                <th>Entete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>contenu <br />avec sauts <br />de ligne</td>
                <td>contenu</td>
                <td>contenu</td>
            </tr>
            <tr>
                <td>contenu</td>
                <td colspan="2">Contenu sur deux colonnes</td>
            </tr>
            <tr>
                <td>contenu un peu plus long que les autres, car il faut bien tester</td>
                <td rowspan="2">contenu sur deux lignes</td>
                <td>contenu</td>
            </tr>
            <tr>
                <td>contenu</td>
                <td>contenu</td>
            </tr>
        </tbody>
    </table>
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
            <pre contenteditable>&lt;a href=&quot;#&quot; class=&quot;cssc-push push-simple&quot;&gt;
    &lt;span class=&quot;after&quot;&gt;Texte alternatif&lt;/span&gt;
&lt;/a&gt;</pre>
            <p>
                Pas de pseudo-classes, &eacute;tant donn&eacute; que certains navigateurs ne supportent pas les transitions.
                <br />
                Au :hover, .after est progressivement affich&eacute;.
            </p>
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
            <pre contenteditable>&lt;a href=&quot;#&quot; class=&quot;cssc-push push-double&quot;&gt;
    &lt;span class=&quot;before&quot;&gt;Texte alternatif&lt;/span&gt;
    &lt;span class=&quot;after&quot;&gt;&lt;/span&gt;
&lt;/a&gt;</pre>
            <p>
                Moins de soucis en cas de sprite avec deux images semi-transparentes.
                <br />
                Au :hover, .after est progressivement affich&eacute; pendant que .before est progressivement masqu&eacute;.
            </p>
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
</div></section>