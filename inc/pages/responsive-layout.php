<header id="header" class="centered-container">
    <h1>CSS Common - Framework CSS</h1>
    <p>Demo utilisant le Responsive layout de CSSCommon, activé avec la classe <code>.cssc-is-responsive</code> sur html ou body.<br /> Work in progress. <a href="index.php">Retour au framework</a>.</p>
</header>
<section class="block-content centered-container" id="bc-responsive"><div>
    <div class="cssc-lay clay-resp">
        <div class="col-main">
            <div class="content-container">
                <p>A lot of people in our industry haven't had very diverse experiences. So they don't have enough dots to connect, and they end up with very linear solutions without a broad perspective on the problem. The broader one's understanding of the human experience, the better design we will have.</p>
                <h3>Une image trop grande (900px)</h3>
                <p>
                    <img src="images/900x100-cat.jpg" alt="900x100 Cat" />
                </p>
                <p>A lot of people in our industry haven't had very diverse experiences. So they don't have enough dots to connect, and they end up with very linear solutions without a broad perspective on the problem. The broader one's understanding of the human experience, the better design we will have.</p>
                <h3>Une image trop grande, et qui ignore les marges (900px)</h3>
                <p class="large-content-area">
                    <img src="images/900x100-cat.jpg" alt="" />
                </p>
                <p>A lot of people in our industry haven't had very diverse experiences. So they don't have enough dots to connect, and they end up with very linear solutions without a broad perspective on the problem. The broader one's understanding of the human experience, the better design we will have.</p>
            </div>
        </div>
        <div class="col-side">
            <ul class="liste-widgets content-container">
                <li>
                    <h3>A Widget</h3>
                    <ul>
                        <li>
                            <a href="#">lorem ipsum</a>
                        </li>
                        <li>
                            <a href="#">dolor sit amet</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <h3>Another Widget</h3>
                    <ul>
                        <li>ipsum facto</li>
                        <li>sit dolor amet</li>
                    </ul>
                </li>
                <li>
                    <h3>Text Widget</h3>
                    <p>The world needs dreamers and the world needs doers. But above all, the world needs dreamers who do.</p>
                </li>
            </ul>
        </div>
    </div>

    <h3>Responsive Grids</h3>
    <div class="cssc-grid fluid-grid gri-two-col">
        <div>
            <div class="grid-label">
                50%
                <span class="hidden-on-full">(élargi à 100%)</span>
            </div>
        </div>
        <div>
            <div class="grid-label">
                50%
                <span class="hidden-on-full">(élargi à 100%)</span>
            </div>
        </div>
    </div>
    <div class="cssc-grid fluid-grid gri-three-col">
        <div>
            <div class="grid-label grid-label-even">
                33%
                <span class="visible-only-tablet">(élargi à 50%)</span>
                <span class="visible-only-phone">(élargi à 100%)</span>
            </div>
        </div>
        <div>
            <div class="grid-label grid-label-even">
                33%
                <span class="visible-only-tablet">(élargi à 50%)</span>
                <span class="visible-only-phone">(élargi à 100%)</span>

            </div>
        </div>
        <div>
            <div class="grid-label grid-label-even">
                33%
                <span class="visible-only-tablet">(élargi à 50%)</span>
                <span class="visible-only-phone">(élargi à 100%)</span>
            </div>
        </div>
    </div>
    <div class="cssc-grid fluid-grid gri-four-col">
        <div>
            <div class="grid-label">
                25%
                <span class="visible-only-tablet">(élargi à 50%)</span>
                <span class="visible-only-phone">(élargi à 100%)</span>
            </div>
        </div>
        <div>
            <div class="grid-label">
                25%
                <span class="visible-only-tablet">(élargi à 50%)</span>
                <span class="visible-only-phone">(élargi à 100%)</span>
            </div>
        </div>
        <div>
            <div class="grid-label">
                25%
                <span class="visible-only-tablet">(élargi à 50%)</span>
                <span class="visible-only-phone">(élargi à 100%)</span>
            </div>
        </div>
        <div>
            <div class="grid-label">
                25%
                <span class="visible-only-tablet">(élargi à 50%)</span>
                <span class="visible-only-phone">(élargi à 100%)</span>
            </div>
        </div>
    </div>
    <div class="cssc-grid fluid-grid gri-five-col">
        <div>
            <div class="grid-label grid-label-even">
                20%
                <span class="visible-only-tablet">(élargi à 50%)</span>
                <span class="visible-only-phone">(élargi à 100%)</span>
            </div>
        </div>
        <div>
            <div class="grid-label grid-label-even">
                20%
                <span class="visible-only-tablet">(élargi à 50%)</span>
                <span class="visible-only-phone">(élargi à 100%)</span>
            </div>
        </div>
        <div>
            <div class="grid-label grid-label-even">
                20%
                <span class="visible-only-tablet">(élargi à 50%)</span>
                <span class="visible-only-phone">(élargi à 100%)</span>
            </div>
        </div>
        <div>
            <div class="grid-label grid-label-even">
                20%
                <span class="visible-only-tablet">(élargi à 50%)</span>
                <span class="visible-only-phone">(élargi à 100%)</span>
            </div>
        </div>
        <div>
            <div class="grid-label grid-label-even">
                20%
                <span class="visible-only-tablet">(élargi à 50%)</span>
                <span class="visible-only-phone">(élargi à 100%)</span>
            </div>
        </div>
    </div>

    <h3>Classes de visibilité</h3>
    <div class="visible-only-phone">
        <pre>.visible-only-phone {}</pre>
    </div>
    <div class="visible-only-tablet">
        <pre>.visible-only-tablet {}</pre>
    </div>
    <div class="visible-only-full">
        <pre>.visible-only-full {}</pre>
    </div>
    <div class="hidden-on-phone">
        <pre>.hidden-on-phone {}</pre>
    </div>
    <div class="hidden-on-tablet">
        <pre>.hidden-on-tablet {}</pre>
    </div>
    <div class="hidden-on-full">
        <pre>.hidden-on-full {}</pre>
    </div>
</div></section>