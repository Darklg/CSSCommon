<link rel="stylesheet" href="css/debug.css?v=<?php echo time(); ?>" type="text/css" />
<section class="block-content centered-container cc-debug-main">
    <div class="debug-main">
        <h1>Debug</h1>
        <p>A stylesheet which will highlight HTML errors.</p>
    </div>
</section>
<section class="block-content centered-container">
    <div>
        <h2>Missing or bad properties</h2>
        <div class="cssc-block">
            <h3>Missing or invalid href</h3>
            <p>
                <a href="">Empty href</a> - <a>No href</a> - <a href="javascript:alert('oups');">href javascript</a>
            </p>
            <h3>Forms</h3>
            <div class="cssc-block">
                <form action="#" method="post">
                    <div>
                        <input value="Input without type" /> - <button>Button inside form without type</button>
                    </div>
                </form>
            </div>
            <h3>Images</h3>
            <p>
                <img src="images/100x100-black.png" />
            </p>
        </div>
    </div>
</section>

<section class="block-content centered-container">
    <div>
        <h2>Invalid HTML</h2>
        <div class="cssc-block">
            <form action="#" method="post">
                <input type="text" name="" value="form &gt; input" />
            </form>
        </div>
    </div>
</section>

<section class="block-content centered-container">
    <div>
        <h2>Deprecated elements</h2>
        <div class="cssc-content">
            <marquee>Marquee :)</marquee>
            <center>Center</center>
        </div>
    </div>
</section>

<section class="block-content centered-container">
    <div>
        <h2>Deprecated attributes</h2>
        <div class="cssc-content">
            <div bgcolor="red">BGCOLOR</div>
            <div onclick="alert('Deprecated !');">onclick</div>
        </div>
    </div>
</section>

<section class="block-content centered-container">
    <div>
        <h2>Empty elements</h2>
        <div class="cssc-block">
            <h3>empty div</h3>
            <div></div>
            <h3>empty span</h3>
            <span></span>
            <h3>empty form (lacking attributes)</h3>
            <form></form>
        </div>
    </div>
</section>
