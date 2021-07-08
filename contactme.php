<?php include_once("./header.php");?>
	<div class="education-header">Contact</div>
	
	<div class = "wrapper">
		<div>Email: oidahosa@bell.net
		<br>
		linkedin: https://www.linkedin.com/in/osaidahosa  
		</div>
		<div>Have a question? feel free to send me a message</div>
		<form id="msg-form" action="#">
			<div class = "dbl-field">
				<div class = "field">
					<input type= "text" name="fname" placeholder = "Enter your first name"/>
					<div class="user-icon"></div>
				</div>

				<div class = "field">
					<input type= "text" name="lname" placeholder = "Enter your lastname"/>
					<div class="user-icon"></div>
				</div>


				<div class = "field">
					<input type= "text" name="email" placeholder = "Enter your email"/>
					<div class="user-icon"></div>
				</div>

				<div class = "field">
					<input type= "text" name="phone" placeholder = "Enter your phone"/>
					<div class="user-icon"></div>
				</div>


				<div class = "message">
					<textarea name="message" placeholder="Write your message"></textarea>
					<div class="message-icon"></div>
				</div>

				<div class = "btn-area">
					<button type = "submit" name="submit">Send Message</button>
					<span id="msg-status">Sending your message...</span>
				</div>
			</div>
		</form>
	</div>

<?php include_once("./footer.php");?>

<script>
	var form = document.getElementById("msg-form");
	var statuesTxt = document.getElementById("msg-status");

	form.onsubmit = (e)=>{
		e.preventDefault(); //preventing form submitting
		statuesTxt.style.display = "block";
		statuesTxt.innerText = "Sending your message...";
		statuesTxt.style.color = "#0D6EFD";

		let xhr = new XMLHttpRequest(); //create new xml object
		xhr.open("POST", "./message-inc.php", true); //sending post request to index.php file

		xhr.onload = function(){ //once ajax loaded
			if(xhr.readyState == 4 && xhr.status == 200){ //if ajax response status is 200 & ready status is 4 mean response is ready
				let response = xhr.response; //storing ajax response variable
				if(response == "Sorry, failed to send your message!" || response == "Please enter a valid email address!" || response == "Email and Message field is required!"){
					statuesTxt.style.color = "red";
				}else{
					form.reset();
					setTimeout(()=>{
						//statuesTxt.style.display = "none";
					}, 3000); //hide the statusTxt after 3 seconds
				}
				statuesTxt.innerText = response;
			}
		}
			
		let formData = new FormData(form); //create a new FormData obj. This obj is used to send form data
		xhr.send(formData);
	}


</script>


</html>