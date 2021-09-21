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
    <div id="contentfasttest">
    <h1>THE FAST TEST</h1>
    <form id="formfasttest" name="formfasttest">
    Q1. I didn’t think his the comments were very appropriate at the time.<br>
    <input type="radio" name="question_01" value="a"> correct<br>
    <input type="radio" name="question_01" value="b"> right<br>
    <input type="radio" name="question_01" value="c"> exact<br>
    <input type="radio" name="question_01" value="d"> suitable<br><br>

    Q2. GCSE are not compulsory, but they are the most common qualifications taken by students.<br>
    <input type="radio" name="question_02" value="a"> required<br>
    <input type="radio" name="question_02" value="b"> applied<br>
    <input type="radio" name="question_02" value="c"> fulfilled<br>
    <input type="radio" name="question_02" value="d"> specialized<br><br>

    Q3. I received housing benefit when I was unemployed.<br>
    <input type="radio" name="question_03" value="a"> out of order<br>
    <input type="radio" name="question_03" value="b"> out of fashion<br>
    <input type="radio" name="question_03" value="c"> out of work<br>
    <input type="radio" name="question_03" value="d"> out of practice<br><br>

    <button id="btn-submit-fasttest" onclick="check()">Submit</button>
</form>
    </div>
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