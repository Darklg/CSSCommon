<section class="block-content block-normalize-push">
    <div class="bkc-header">
        <div class="bkch-aside">
            Module :
            <code>normalize-push.css</code>
        </div>
        <h2 id="normalize-push">Pushs</h2>
    </div>
    <h3>Push avec simple fondu</h3>
    <div class="cssn_grid gri-940-24-20">
        <div class="col-8">
            <a href="#" class="le_push push_simple">
                <span class="after"></span>
            </a>
        </div>
        <div class="col-16">
            <pre contenteditable>&lt;a href=&quot;#&quot; class=&quot;le_push push_simple&quot;&gt;
    &lt;span class=&quot;after&quot;&gt;&lt;/span&gt;
&lt;/a&gt;</pre>
            <p>
                Pas de pseudo-classes, &eacute;tant donn&eacute; que certains navigateurs ne supportent pas les transitions.
                <br />
                Au :hover, .after est progressivement affich&eacute;.
            </p>
        </div>
    </div>
    <h3>Push avec double fondu</h3>
    <div class="cssn_grid gri-940-24-20">
        <div class="col-8 example_right">
            <a href="#" class="le_push push_double">
                <span class="before"></span>
                <span class="after"></span>
            </a>
        </div>
        <div class="col-16">
            <pre contenteditable>&lt;a href=&quot;#&quot; class=&quot;le_push push_double&quot;&gt;
    &lt;span class=&quot;before&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;after&quot;&gt;&lt;/span&gt;
&lt;/a&gt;</pre>
            <p>
                Moins de soucis en cas de sprite avec deux images semi-transparentes.
                <br />
                Au :hover, .after est progressivement affich&eacute; pendant que .before est progressivement masqu&eacute;.
            </p>
        </div>
    </div>
</section>