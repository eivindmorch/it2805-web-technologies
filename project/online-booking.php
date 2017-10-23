<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>Storgata Legekontor | Timebestilling på nett</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">
		var newAppointmentRadio;
		var newAppointmentCheckboxes;
		var changeAppointmentRadio;
		var changeAppointmentCheckboxes;
		var allRadioButtons;
		var textArea;
		window.onload = init;
		
		function init(){
			textArea = document.getElementById("comment");
			allRadioButtons = document.getElementsByName("appointment");

			for (i=0; i<allRadioButtons.length; i++) {
				allRadioButtons[i].addEventListener("change", function(e) {
					uncheckCheckboxes(changeAppointmentRadio);
					uncheckCheckboxes(newAppointmentRadio);
					toggleTextArea(e);
				});
			}

			newAppointmentRadio = document.getElementById("newAppointmentRadio");
			newAppointmentCheckboxes = document.getElementsByClassName("newAppointmentCheckbox");

			for (i=0; i<newAppointmentCheckboxes.length; i++) {
				newAppointmentCheckboxes[i].addEventListener("change", function(e) {
					newAppointmentRadio.checked = true
					uncheckCheckboxes(changeAppointmentRadio);
					toggleTextArea(e);
					});
			}
			
			changeAppointmentRadio = document.getElementById("changeAppointmentRadio");
			changeAppointmentCheckboxes = document.getElementsByClassName("changeAppointmentCheckbox");

			for (i=0; i<changeAppointmentCheckboxes.length; i++) {
				changeAppointmentCheckboxes[i].addEventListener("change", function(e) {
					changeAppointmentRadio.checked = true
					uncheckCheckboxes(newAppointmentRadio);
					toggleTextArea(e);
				});
			}
		}

		function uncheckCheckboxes (parentRadio) {
			if (parentRadio==changeAppointmentRadio) {
				for (i=0; i<changeAppointmentCheckboxes.length; i++) {
					changeAppointmentCheckboxes[i].checked = false;
				}
			}
			else if (parentRadio==newAppointmentRadio) {
				for (i=0; i<newAppointmentCheckboxes.length; i++) {
					newAppointmentCheckboxes[i].checked = false;
				}
			}
		}	

		function toggleTextArea (e) {
			if (e.target.value=="specialComment") {
				textArea.disabled=false;
			}
			else {
				textArea.disabled=true;
			}
		}
	</script>
</head>
<body>
	<?php include 'resources/header.html';?>
	<?php include 'resources/nav.php';?>
	<section>
	<h2>Timebestilling på nett</h2>
	<form name="appointmentForm" action="booking-confirm.php" method="post">
		<p>
			<label> Navn: <br/> 
			<input type="text" name="name" size="25" required/></label>
		</p>
		<p>
			<label> Fødselsdato: <br/> 
			<input type="date" name="bday" required/></label>
		</p>
		<p>
			<label> Mobilnummer: <br/> 
			<input type="tel" name="phone" required/></label>
		</p>
		<p>
			<label><input type="radio" name="appointment" value="newAppointment" id="newAppointmentRadio" required/> Jeg ønsker time for konsultasjon, helst en: </label><br/>
				<label><input type="checkbox" name="monday" class="newAppointmentCheckbox"/> Mandag</label>
				<label><input type="checkbox" name="tuesday" class="newAppointmentCheckbox"/> Tirsdag</label>
				<label><input type="checkbox" name="wednsday" class="newAppointmentCheckbox"/> Onsdag</label>
				<label><input type="checkbox" name="thursday" class="newAppointmentCheckbox"/> Torsdag</label>
				<label><input type="checkbox" name="friday" class="newAppointmentCheckbox"/> Fredag</label>
			<br/><br/>
			<label><input type="radio" name="appointment" value="changeAppointment" id="changeAppointmentRadio" />  Jeg ønsker å flytte timen min. Gi meg ny time helst en: </label><br/>
				<label><input type="checkbox" name="monday" class="changeAppointmentCheckbox"/> Mandag</label>
				<label><input type="checkbox" name="tuesday" class="changeAppointmentCheckbox"/> Tirsdag</label>
				<label><input type="checkbox" name="wednsday" class="changeAppointmentCheckbox"/> Onsdag</label>
				<label><input type="checkbox" name="thursday" class="changeAppointmentCheckbox"/> Torsdag</label>
				<label><input type="checkbox" name="friday" class="changeAppointmentCheckbox"/> Fredag</label>
			<br/><br/>
			<label> <input type="radio" name="appointment" value="cancelAppointment" /> Jeg ønsker å avbestille timen min.  </label><br/><br/>
			<label> <input type="radio" name="appointment" value="requestAppointmentInfo"/> Når har jeg time?</label><br/><br/>
			<label> <input type="radio" name="appointment" value="control/dertificate" /> Jeg trenger time for kontroll/attest. </label><br/><br/>
			<label> <input type="radio" name="appointment" value="specialComment" /> Spesiell kommentar: </label><br/>
			<textarea id="comment" rows="3" cols="35" disabled></textarea>
		</p>
		<p>
			<input type="submit" value="Bestill"/>
		</p>
	</form>
	</section>
	
	<?php include 'resources/footer.html';?>
</body>
</html>