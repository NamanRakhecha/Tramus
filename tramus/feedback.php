<?php require('webpage header.php');?>
<html>
<head>
	<style>
	.rating {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}
</style>
	</head>
<body>
    <form action="feedback_viewing.php" method="POST" style='margin-left: 20%; margin-top: 10%; border:2px solid black; padding:0;width:700px;height:400px'><div style='padding: 0% 10% 10% 10%'>
     Your Feedback is most important to us.
    <legend> Enter bus name or No.</legend>
    <input type="text" name="bus_name" value="<?php $val=$_GET['bbb']; echo "$val";  ?>" required>
    <br>
	<fieldset class="rating">
    <legend>Please rate:</legend>
    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Great">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty Good">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Average">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Poor">1 star</label>
</fieldset>
<br>
<br>
<br><br>
		<legend>Please help us increase aur efficiency with the feedback</legend>
		<textarea row="10" cols="50" name="feedback" placeholder="Type your feedback here">
		</textarea><br>
	<input style='width=20% height=20%'' type=submit ></font>
    <br>

</div>
</form>
</body>

</html>
<?php require('webpage footer.php');?>