<section class="block-content centered-container" id="bc-grid"><div>
    <div class="bkc-header">
        <div class="bkch-aside">
            Module :
            <code>cssc-grid.css</code>
        </div>
        <h2 id="cssc-grid">Grilles</h2>
    </div>
    <p>Un système de grilles simple et imbricable.</p>

    <div class="cssc-block">
    <h3>Demo</h3>
    <div class="cssc-grid gri-940-24-20">
        <div class="col-8">
            <div class="cssc-grid gri-940-24-20">
                <div class="col-4"><div class="grid-label">col-4</div></div>
                <div class="col-4"><div class="grid-label">col-4</div></div>
            </div>
            <div class="grid-label">col-8</div>
        </div>
        <div class="col-8">
            <div class="grid-label double-grid-label">col-8</div>
        </div>
        <div class="col-8">
            <div class="grid-label double-grid-label">col-8</div>
        </div>
    </div>
    <div class="cssc-grid gri-940-24-20">
        <div class="col-8">
            <div class="grid-label">col-8</div>
        </div>
        <div class="col-8">&nbsp;</div>
        <div class="col-8">
            <div class="grid-label">col-8</div>
        </div>
    </div>
    <div class="cssc-grid gri-940-24-20">
        <div class="col-16">
            <div class="grid-label">col-16</div>
            <div class="cssc-grid gri-940-24-20">
                <div class="col-2">
                    <div class="grid-label">col-2</div>
                </div>
                <div class="col-8">
                    <div class="grid-label">col-8</div>
                </div>
                <div class="col-6">
                    <div class="grid-label">col-6</div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="grid-label double-grid-label">col-8</div>
        </div>
    </div>
    <span class="clearfix"></span>

    <p><a href="#demo-940-grid" class="cssc-button show-html-button">Afficher HTML</a></p>
    <pre contenteditable id="demo-940-grid">&lt;div class=&quot;cssc-grid gri-940-24-20&quot;&gt;
    &lt;div class=&quot;col-16&quot;&gt;16 cols&lt;/div&gt;
    &lt;div class=&quot;col-8&quot;&gt;8 cols&lt;/div&gt;
&lt;/div&gt;</pre>
    </div>

    <h3>Grille fluide</h3>
    <div class="cssc-grid fluid-grid">
        <div class="col-20p">
            <div class="grid-label">col-20p</div>
        </div>
        <div class="col-20p">
            <div class="grid-label">col-20p</div>
        </div>
        <div class="col-20p">
            <div class="grid-label">col-20p</div>
        </div>
        <div class="col-20p">
            <div class="grid-label">col-20p</div>
        </div>
        <div class="col-20p">
            <div class="grid-label">col-20p</div>
        </div>
    </div>
    <div class="cssc-grid fluid-grid">
        <div class="col-25p">
            <div class="grid-label">col-25p</div>
        </div>
        <div class="col-25p">
            <div class="grid-label">col-25p</div>
        </div>
        <div class="col-25p">
            <div class="grid-label">col-25p</div>
        </div>
        <div class="col-25p">
            <div class="grid-label">col-25p</div>
        </div>
    </div>
    <div class="cssc-grid fluid-grid">
        <div class="col-33p">
            <div class="grid-label">col-33p</div>
        </div>
        <div class="col-33p">
            <div class="grid-label">col-33p</div>
        </div>
        <div class="col-33p">
            <div class="grid-label">col-33p</div>
        </div>
    </div>
    <div class="cssc-grid fluid-grid">
        <div class="col-50p">
            <div class="grid-label">col-50p</div>
        </div>
        <div class="col-50p">
            <div class="grid-label">col-50p</div>
        </div>
    </div>

    <span class="clearfix"></span>

    <p><a href="#demo-fluid-grid" class="cssc-button show-html-button">Afficher HTML</a></p>
    <pre contenteditable id="demo-fluid-grid">&lt;div class=&quot;cssc-grid fluid-grid&quot;&gt;
    &lt;div class=&quot;col-33p&quot;&gt;33%&lt;/div&gt;
    &lt;div class=&quot;col-33p&quot;&gt;33%&lt;/div&gt;
    &lt;div class=&quot;col-33p&quot;&gt;33%&lt;/div&gt;
&lt;/div&gt;</pre>

</div></section>