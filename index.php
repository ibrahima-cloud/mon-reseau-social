<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pobar studio</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
  <?php 
    echo('Première Page du Projet');
  ?>
	<nav class="navbar">
      	<ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Services</a></li>
          <li><a class = "mn" href="#">About us</a></li>
    	</ul>
  	</nav>
    <div id="content">
        <div class="bloc bloc1">
          <div class="underblock left left1"></div>
          <div class="underblock centre centre1">
            <div class="text">
             <h2> A Propos du Studio Pobar</h2>
             <div class="divider"></div>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac enim neque. Vivamus sagittis laoreet odio ac mollis. Sed vulputate lacus sed ex gravida egestas. Curabitur sit amet interdum elit, sit amet mollis dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque eget augue ultricies nulla vehicula aliquet non et elit. Phasellus lacinia magna convallis risus efficitur, at suscipit dui pulvinar. Sed metus est, scelerisque vitae purus euismod, sollicitudin ultrices erat. In turpis libero, commodo non ipsum sit amet, volutpat viverra libero. Aliquam erat volutpat. Morbi pulvinar rutrum aliquet.</p>
            </div>
          </div>
          <div class="underblock right right1"></div>
        </div>
        <div class="bloc bloc2">
          <div class="underblock left left2"></div>
          <div class="underblock centre centre2">
            <div class="text">
             <h2> A Propos du Studio Pobar</h2> 
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac enim neque. Vivamus sagittis laoreet odio ac mollis. Sed vulputate lacus sed ex gravida egestas. Curabitur sit amet interdum elit, sit amet mollis dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque eget augue ultricies nulla vehicula aliquet non et elit. Phasellus lacinia magna convallis risus efficitur, at suscipit dui pulvinar. Sed metus est, scelerisque vitae purus euismod, sollicitudin ultrices erat. In turpis libero, commodo non ipsum sit amet, volutpat viverra libero. Aliquam erat volutpat. Morbi pulvinar rutrum aliquet.</p>
            </div>
          </div>
          <div class="underblock right right2"></div>
        </div>
        <div class="bloc bloc3">
          <div class="underblock left left3"></div>
          <div class="underblock centre centre3">
            <div class="text">
             <h2> A Propos du Studio Pobar</h2>
             <div class="divider"></div>
             <div class="divider"></div>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac enim neque. Vivamus sagittis laoreet odio ac mollis. Sed vulputate lacus sed ex gravida egestas. Curabitur sit amet interdum elit, sit amet mollis dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque eget augue ultricies nulla vehicula aliquet non et elit. Phasellus lacinia magna convallis risus efficitur, at suscipit dui pulvinar. Sed metus est, scelerisque vitae purus euismod, sollicitudin ultrices erat. In turpis libero, commodo non ipsum sit amet, volutpat viverra libero. Aliquam erat volutpat. Morbi pulvinar rutrum aliquet.</p>
            </div>
        </div>
        <div class="underblock right right3"></div>
    </div>
    <div id="footer">
        <div class="contain info">
          <h3>POUR PLUS D'INFORMATION VEUILLEZ NOUS CONTACTER PAR MAIL!</h3>
        </div>

        <div class="contain form">
          <form method="post" action="#">
              <div>
                <input type="text" name="pseudo" id="pseudo" placeholder="Email" />
              </div>
              <div>
                <textarea name="comment" id="" placeholder="comment"></textarea>
              </div>
              <div>
                <input type="submit" class="" value="Send"/>
              </div>
          </form>
        </div>
        <div class="contain copyright">
          <p class="copyright">&copy; Zlorgoncho en Test. All rights reserved.</p>  
      </div>
    </div>
  </div>
</body>
</html>
