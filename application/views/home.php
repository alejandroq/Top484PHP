<script type="text/javascript">
	document.title="WBL - Wall";

	$('#wall').galereya({
		// spacing between cells of the masonry grid
	    spacing: 3,

	    // waving visual effect
	    wave: false,

	    // speed of the slide show
	    slideShowSpeed: 10000,

	    // speed of appearance of cells
	    cellFadeInSpeed: 100
	});

</script>

<div class="container">
    <h3 class="row">{{message}}</h3>

    <div class="row">
        <!-- COMMUNITY WALL -->
        <div id="wall" class="u-full-width" style="display:block; height:1000px;">
        	<img src="img/BBoyBridge.jpg"
                alt="WBL BBoy"
                title="WBL BBoy"
                data-desc="WBL BBoy 101"
                data-category="image category here"
                data-fullsrc="img/BBoyBridge.jpg"
            />
            <img src="img/chess.jpg"
                alt="Andrew W. Chess"
                title="Chess by Andrew W."
                data-desc="12 year old chess player from DC"
                data-category="image category here"
                data-fullsrc="img/chess.jpg"
            /> 
            <img src="img/simon.jpg"
                alt="Grafitti"
                title="Grafitti Story"
                data-desc="Grafitti description"
                data-category="image category here"
                data-fullsrc="img/simon.jpg"
            /> 
            <img src="img/GB.jpg"
                alt="Gabriel Benn Photography"
                title="Gabriel Benn Photography"
                data-desc="Photography 101"
                data-category="image category here"
                data-fullsrc="img/GB.jpg"
            />
            <img src="img/DJpic.jpg"
                alt="DJ"
                title="DJ by Javier G."
                data-desc="DJ 101"
                data-category="image category here"
                data-fullsrc="img/DJpic.jpg"
            /> 
            <img src="img/beat_production.jpg"
                alt="Beat Production"
                title="Beat Production"
                data-desc="some description"
                data-category="image category here"
                data-fullsrc="img/beat_production.jpg"
            />  
        </div>
        <!-- END COMMUNITY WALL -->
    </div>
</div>
