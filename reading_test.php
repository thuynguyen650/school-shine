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
<br>
<strong>Q1. Property taxes ________ about 40 percent of the overall tax revenue the state collects.</strong><br>
 
    <input type="radio" name="question_01" value="a"> account for<br>
    <input type="radio" name="question_01" value="b"> make<br>
    <input type="radio" name="question_01" value="c"> are at least<br>
    <input type="radio" name="question_01" value="d"> are raised by<br><br>
<br>
    <strong>Q2. All the orders got _________ on schedule.</strong><br>
    
    <input type="radio" name="question_02" value="a"> delivered<br>
    <input type="radio" name="question_02" value="b"> delivering<br>
    <input type="radio" name="question_02" value="c"> to deliver<br>
    <input type="radio" name="question_02" value="d"> to be deliver<br><br>
<br>
    <strong>Q3. First quarter revenue _________ $45.1 billion from $44.7 billion a year earlier.</strong><br>
    
    <input type="radio" name="question_03" value="a"> rose to<br>
    <input type="radio" name="question_03" value="b"> increased<br>
    <input type="radio" name="question_03" value="c"> declined from<br>
    <input type="radio" name="question_03" value="d"> expanded at<br><br>

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