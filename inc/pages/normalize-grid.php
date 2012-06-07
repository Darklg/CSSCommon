<section class="block-content">
	<h2 id="normalize-grid">Grilles</h2>
	<h3>Un système simple de grilles</h3>
	<h3>Demo</h3>
	<div class="the_grid col-20">
		<div class="col-620">
			<p>
				<strong>A.</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed non risus</strong>. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. 
				Maecenas ligula massa, varius a, semper congue, euismod non, mi. Cras elementum ultrices diam. Ut in risus volutpat libero pharetra tempor.
			</p>

			<div class="the_grid gri-1-1">
				<div>
					<p><strong>C.</strong> Duis arcu massa, scelerisque vitae, <em>consequat in</em>, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede.</p>
				</div>
				<div>
					<p><strong>D.</strong> Duis arcu massa, scelerisque vitae, <em>consequat in</em>, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede.</p>
				</div>
			</div>

			<div class="the_grid gri-2-1">
				<div>
					<p>
						<strong>E.</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed non risus</strong>. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. 
						Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. 
						Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, <a href="#">non fermentum</a> diam nisl sit amet erat.  
					</p>
				</div>
				<div>
					<p><strong>F.</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed non risus</strong>. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.  </p>
				</div>
			</div>
		</div>
		<div class="col-300">
			<ul>
				<li><a href="#"><strong>B.</strong></a></li>
				<li><a href="#">lorem ipsum</a></li>
				<li><a href="#">dolor sit amet</a></li>
				<li><a href="#">consectetur adipiscing elit</a></li>
				<li><a href="#">lorem ipsum</a></li>
				<li><a href="#">dolor sit amet</a></li>
				<li><a href="#">consectetur adipiscing elit</a></li>
			</ul>
		</div>
	</div>
	
	<span class="clearfix"></span>
	
	<div>
		<h3>Source de la démo</h3>
		<h4>Taille des colonnes définie sur elles-mêmes, avec gouttière sur le parent :</h4>
		<pre>&lt;div class=&quot;the_grid col-20&quot;&gt;<br />  &lt;div class=&quot;col-620&quot;&gt;A&lt;/div&gt;<br />  &lt;div class=&quot;col-300&quot;&gt;B&lt;/div&gt;<br />&lt;/div&gt;</pre>
		<h4>Taille des colonnes définies sur le parent :</h4>
		<p>1/2 - 1/2</p>
		<pre>&lt;div class=&quot;the_grid gri-1-1&quot;&gt;<br />  &lt;div&gt;C&lt;/div&gt;<br />  &lt;div&gt;D&lt;/div&gt;<br />&lt;/div&gt;</pre>
		<p>2/3 - 1/3</p>
		<pre>&lt;div class=&quot;the_grid gri-2-1&quot;&gt;<br />  &lt;div&gt;E&lt;/div&gt;<br />  &lt;div&gt;F&lt;/div&gt;<br />&lt;/div&gt;</pre>
	</div>
</section>