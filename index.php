<?php
header('Content-Type: text/html; charset=utf-8');
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
include($lang == "fr"?'languages/fr.php':'languages/en.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Nicolas Roger</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="favicon.png" />
</head>
<body>
	<header class='shadow' scroll="false">
		<h1>Nicolas Roger</h1>
	</header>

	<ul class='menu shadow'>
		<li id='menu_about' class='iconed icon-about' activated='true'><?php echo _aboutme;?></li>
		<li id='menu_exp' class='iconed icon-exp' activated='false'><?php echo _myexp;?></li>
		<li id='menu_skills' class='iconed icon-skills' activated='false'><?php echo _myskills;?></li>
	</ul>

	<div id="about" class='part about'>
		<div class='part-container shadow'>
			<div class='part-top'>
				<p class='iconed icon-about'><?php echo _aboutme;?></p>
			</div>
			<div class='part-body about-text' style="background-image:url('img/profile.jpg')">
				<span><?php echo _mydesc;?></span>
			</div>
		</div>
	</div>

	<div id="exp" class='part exp'>
		<div class='part-container shadow'>
			<div class='part-top'>
				<p class='iconed icon-exp'><?php echo _myexp;?></p>
			</div>
			<ul id='timeline'>
				<li>
					<div class='legend'>
						<p class='date'><?php echo _oneof . ' ' . _august;?> 2015</p>
						<span class='circle' type='home'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _perspro;?></p>
						<p class='summarize'>
							<?php echo _basicangular;?>
							<a target='_blank' href='https://github.com/nicolasroger17/Basic-Angular-NodeJS-App'>Github link</a>
						</p>
					</div>
				</li>
				<li>
					<div class='legend'>
						<p class='date'><?php echo _march . " - " . _april;?> 2015</p>
						<span class='circle' type='home'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _perspro;?></p>
						<p class='summarize'>
							<?php echo _atpcountrydes;?>
						</p>
					</div>
				</li>
				<li>
					<div class='legend'>
						<p class='date'><?php echo _oneof . " " . _february;?> 2015</p>
						<span class='circle' type='home'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _perspro;?></p>
						<p class='summarize'>
							<?php echo _res . ': ';?>
							<a target='_blank' href='https://github.com/nicolasroger17/Sudoku-solver'><?php echo _sudokusolver; ?></a>
						</p>
					</div>
				</li>
				<li>
					<div class='legend'>
						<p class='date'><?php echo _aWeek . " " . _january;?> 2015</p>
						<span class='circle' type='home'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _perspro;?></p>
						<p class='summarize'>
							<?php echo _foodcrawlerdes;?>
							<a target='_blank' href='https://github.com/nicolasroger17/Food-crawler'>Github link</a>
						</p>
					</div>
				</li>
				<li>
					<div class='legend'>
						<p class='date'><?php echo _oneWE . " " . _december;?> 2014</p>
						<span class='circle' type='home'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _perspro;?></p>
						<p class='summarize'>
							<?php echo _crea;?>
							<a target='_blank' href='http://188.166.38.214/Flood-it/'>Flood-it</a>
						</p>
					</div>
				</li>
				<li>
					<div class='legend'>
						<p class='date'><?php echo _march;?> 2014</p>
						<p class='date'><?php echo _july;?> 2014</p>
						<span class='circle' type='school'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _univpro;?></p>
						<p class='summarize'>
							<?php echo _parc;?>
						</p>
					</div>
				</li>
				<li>
					<div class='legend'>
						<p class='date'><?php echo _february;?> 2014</p>
						<p class='date'><?php echo _june;?> 2014</p>
						<span class='circle' type='school'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _univpro;?></p>
						<p class='summarize'>
							<?php echo _twitter;?>
						</p>
					</div>
				</li>
				<li>
					<div class='legend'>
						<p class='date'><?php echo _oneof . " " . _february;?> 2014</p>
						<span class='circle' type='home'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _perspro;?></p>
						<p class='summarize'>
							<?php echo _res;?>
							<a target='_blank' href='http://188.166.38.214/MineSweeper/'><?php echo _minesweeper; ?></a>
						</p>
					</div>
				</li>
				<li>
					<div class='legend'>
						<p class='date'>09 <?php echo _september;?> 2013</p>
						<p class='date'>17 <?php echo _may;?> 2014</p>
						<span class='circle' type='work'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _junior;?></p>
						<p class='summarize'>
							<?php echo _fitted;?>
							<a target='_blank' href='http://www.fitted.fr'>www.fitted.fr</a>
						</p>
					</div>
				</li>
				<li>
					<div class='legend'>
						<p class='date'>01 <?php echo _july;?> 2013</p>
						<p class='date'>28 <?php echo _august;?> 2013</p>
						<span class='circle' type='work'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _junior;?></p>
						<p class='summarize'>
							<?php echo _solarnet;?>
						</p>
					</div>
				</li>
				<li>
					<div class='legend'>
						<p class='date'><?php echo _march;?> 2013</p>
						<p class='date'><?php echo _december;?> 2014</p>
						<span class='circle' type='work'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _aplustitle;?></p>
						<p class='summarize'>
							<?php echo _aplus;?>
						</p>
					</div>
				</li>
				<li>
					<div class='legend'>
						<p class='date'>01 <?php echo _july;?> 2013</p>
						<p class='date'>23 <?php echo _december;?> 2013</p>
						<span class='circle' type='work'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _thalestitle;?></p>
						<p class='summarize'>
							<?php echo _thales;?>
						</p>
					</div>
				</li>
				<li>
					<div class='legend'>
						<p class='date'><?php echo _february;?> 2012</p>
						<p class='date'><?php echo _june;?> 2012</p>
						<span class='circle' type='school'></span>
					</div>
					<div class='description'>
						<p class='title'><?php echo _univpro;?></p>
						<p class='summarize'>
							<?php echo _firstsite;?>
						</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div id="skills" class='part skills'>
		<div class='part-container shadow'>
			<div class='part-top'>
				<p class='iconed icon-skills'><?php echo _myskills;?></p>
			</div>
			<div class='part-bottom'>
				<div class='skill-container'>
					<p>HTML</p>
					<div class='progress-bar' color='orange' style='background-size: 100% 100%;'></div>
				</div>
				<div class='skill-container'>
					<p>CSS</p>
					<div class='progress-bar' color='blue' style='background-size: 100% 100%;'></div>
				</div>
				<div class='skill-container'>
					<p>Javascript</p>
					<div class='progress-bar' color='yellow' style='background-size: 95% 100%;'></div>
				</div>
				<div class='skill-container'>
					<p>PHP</p>
					<div class='progress-bar' color='purple' style='background-size: 60% 100%;'></div>
				</div>
				<div class='skill-container'>
					<p>NodeJS</p>
					<div class='progress-bar' color='green' style='background-size: 85% 100%;'></div>
				</div>
				<div class='skill-container'>
					<p>MySQL</p>
					<div class='progress-bar' color='cyan' style='background-size: 80% 100%;'></div>
				</div>
				<div class='skill-container'>
					<p>MongoDB</p>
					<div class='progress-bar' color='green-leaf' style='background-size: 30% 100%;'></div>
				</div>
				<div class='skill-container'>
					<p>Bash</p>
					<div class='progress-bar' color='black' style='background-size: 60% 100%;'></div>
				</div>
				<div class='skill-container'>
					<p>C++</p>
					<div class='progress-bar' color='indigo' style='background-size: 40% 100%;'></div>
				</div>
				<div class='skill-container'>
					<p>JAVA</p>
					<div class='progress-bar' color='red' style='background-size: 70% 100%;'></div>
				</div>
				<div class='skill-container'>
					<p>Python</p>
					<div class='progress-bar' color='dark-blue' style='background-size: 30% 100%;'></div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<a href='https://fr.linkedin.com/in/nroger/' class='social linkedin' target="_blank"></a>
		<a href='https://github.com/nicolasroger17' class="social github" target="_blank">
		</a>
	</footer>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.smooth-scroll.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
</body>
</html>
