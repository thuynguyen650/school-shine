<body>
<!-- header -->
<div id="brheader">
<?php
    include "./includes/head.php";
?>
<?php
    include "./includes/header.php";
?>
</div>
<!-- Content fasttest -->
<main>
    <div id="contentfasttest">
    <h1>LISTENING TEST</h1>
    <form id="formfasttest" name="formfasttest">
    <audio id="fasttest_audio" controls>
    <source src="./source/Circles.mp3">
</audio>
<br>
<strong>Q1. What are the speakers mainly discussing?</strong><br>
 
    <input type="radio" name="question_01" value="a"> A training seminar<br>
    <input type="radio" name="question_01" value="b"> The istallation of a televison<br>
    <input type="radio" name="question_01" value="c"> The date of a presentation<br>
    <input type="radio" name="question_01" value="d"> A software apgrade<br><br>
<br>
    <strong>Q2. What is the problem?</strong><br>
    
    <input type="radio" name="question_02" value="a"> The necessary tools are unavailable.<br>
    <input type="radio" name="question_02" value="b"> The office is closed.<br>
    <input type="radio" name="question_02" value="c"> The wall is too weak.<br>
    <input type="radio" name="question_02" value="d"> The phone number was wrong.<br><br>
<br>
    <strong>Q3. what most likely will the man do first tomorrow?</strong><br>
    
    <input type="radio" name="question_03" value="a"> Order a replacemanet part<br>
    <input type="radio" name="question_03" value="b"> Consult an instruction mantual<br>
    <input type="radio" name="question_03" value="c"> Contact the woman<br>
    <input type="radio" name="question_03" value="d"> Fill out a work order<br><br>

    <button id="btn-submit-fasttest" onclick="check()">Submit</button>
</form>
    </div>
</main>
<!-- footer -->
<?php
    include "./includes/footer.php"
?>
</body>
<script type="text/javascript">
    function check()
    {
        var question_01 = document.formfasttest.question_01.value;
        var question_02 = document.formfasttest.question_02.value;
        var question_03 = document.formfasttest.question_03.value;
        var count = 0;
        if(question_01 == "d")
        {
            count++;
        }
        if(question_02 == "a")
        {
            count++;
        }
        if(question_03 == "c")
        {
            count++;
        }
        alert("you got " + count + " marks");
    }
</script>