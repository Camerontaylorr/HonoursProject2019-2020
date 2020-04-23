<html>
<head>
<Title> Fitts Law Participant Consent </Title>
<link rel = "stylesheet" href ="FittsCSS.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
/* Customize the label (the container) */
.container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  float: left;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  float: right;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container1 .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
<body>

<div class="header">
  <h1>Fitts' Law</h1>
  <h2>and Mobile Devices</h2>
</div>

<section class="search-sec">
<div class="container" style="background-color:white">
        <form method="post" action = "consentConfirm.php">
            <div class="row">
                <div class="col-lg-12">
                    <div style ="text-align:centre">
<h4>1.	Taking part in the study</h4>
</div>
<label class="container1" style="width:100%" required>I have read the Participant Information Sheet, or it has been read to me. I have 
been able to ask questions about the study and my questions have been answered to my satisfaction.
  <input type="checkbox" id="check1" name="check1" value="check1" required >
  <span class="checkmark"></span>
</label>
<br>

<label class="container1" style="width:100%" required>I consent voluntarily to be a participant in this study and understand that I can 
refuse to answer questions and I can withdraw from the study at any time during data collection, without having to give a reason.
  <input type="checkbox" id="check2" name="check2" value="check2" required>
  <span class="checkmark"></span>
</label>
<div style ="text-align:centre">
<h4>2.	Use of the information in the study</h4>
</div>

<label class="container1" style="width:100%" required>I understand that information I provide will be used for research that Is being carried out in the University of Dundee.
  <input type="checkbox" id="check3" name="check3" value="check3" required>
  <span class="checkmark"></span>
</label>

<label class="container1" style="width:100%" required>I understand that personal information collected about me that can identify me, such as my name, will not be shared beyond the study team.
  <input type="checkbox" id="check4" name="check4" value="check4" required>
  <span class="checkmark"></span>
</label>

<label class="container1" style="width:100%" required>I agree that anonymised direct quotes can be used in research outputs.
  <input type="checkbox" id="check5" name="check5" value="check5" required>
  <span class="checkmark"></span>
</label>

<h4>3. Future use and reuse of the information by others</h4>
<label class="container1" style="width:100%"required>I give permission for anonymised version of my data to be made available in an open access online repository so that it can be used for future research and training.
  <input type="checkbox" id="check6" name="check6" value="check6" required>
  <span class="checkmark"></span>
</label>
<br>
<br>
<input type = "textbox" name ="participantName" id ="participantName" required placeholder = "Enter Name Here" style="width:250px; margin:5px">
<input placeholder="Date" class="textbox-n" type="text" onfocus="(this.type='date')"  name ="dateSigned" id ="dateSigned" required>

<button type="submit" id= "submit" name="submit" value="submit" onclick ="send()" style=" margin:5px;position:relative;color:fff;background-color:#DC143C;border-radius: 5px; border:none; width: 20%">Submit</button>
<p>By signing above, you are indicating that you have read and understood the Participant Information Sheet and that you agree to take part in this research study. </p>
</div>
</div>
</div>
</div>
</form>
</div>
</section>


</body>
</html>