<html>
	<head>
		<meta charset = "UTF-8">
		<meta name = "viewport" content "width = device-width, initial-scale = 1.0">
		<title>Website | James Idahosa</title>
		<link rel ="stylesheet" href = "./style.css">
		<link rel ="stylesheet" href = "./message_style.css">
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript" src="./header.js"></script>
	</head>
	<body>
		
		<header>
			<div class="header-info" style="display:inline-block; position:absolute;">
				<div onclick="OnNavigation(0)" class="header-logo" style="cursor:pointer; display:inline-block;">Osasere James Idahosa</div>
				<div class="header-saying" style="display:inline-block;">Never give up!</div>
			</div>

			<div style="display:inline-block; float:right;">
				<nav class="header-nav-content">
					<button onclick="OnNavigation(2)">Contact</button>
					<button onclick="OnNavigation(1)">About Me</button>
					<div class="resume"><div class="download-img" style="top:95%;"></div> <a href="./mDownloads/Osasere_Resume.docx"  download>Resume</a></div>
				</nav>
			</div>

			<div class="tab">
				<button onclick="OnClickTab()">TAB</button>
			</div>
		</header>
		<div style="position:relative; width:100%; margin-top: 60px;">

			<div id = "nav-dropdown-1"> 
				<div class="dropzone-2-div" onclick="OnNavigation(2)">Contact</div>
				<div class="dropzone-2-div" onclick="OnClickAbout()">About</div>
				<div id = "nav-dropdown-2"> 
					<div class="dropzone-2-div" style = "background-color:#3B3C36">Me</div>
					<div class="dropzone-2-div" style = "background-color:#3B3C36">Interest & Likes</div>
					<div class="dropzone-2-div" style = "background-color:#3B3C36">Activities</div>
				</div>
				<div class="dropzone-2-div">Resume <div class="download-img"></div></div>
			</div>

			<div class="body-container">
