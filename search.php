<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="topnav">
  
  <a href="register.php?logout='1'">Log Out</a>
  <a>Settings</a>
  <a href="profile.php">Profile</a>
  <a href="add.php">Add Journey/Commute</a>
  <a href="search.php" class="active">Search</a>
  <a href="index.php" style="float:left">Social Ride</a>

</div>

<div class="header">
  	<h2>Search for a Driver</h2>
  </div>
  
  <form method="post" action="matches.php">
	  	<div class="input-group">
  	  <label>Travelling from:</label>
  	  <input type="text" name="driving_from" value="<?php echo $driving_from; ?>">
  	</div>
	  	<div class="input-group">
  	  <label>Travelling to:</label>
  	  <input type="text" name="driving_to" value="<?php echo $driving_to; ?>">
  	</div>
	<div>
  <label>Interested in:</label><br><br>
  <input type="radio" name="gender" value="any" checked="checked"> Any
  <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
</div><br>
   <div class="form-group">
<label>Age</label><br><br>
<label>From:</label>
<select name="age_from" class="form-control"><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option></select>
<label>To:</label>
<select name="age_to" class="form-control"><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option></select>
</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="search">Search</button>
  	</div>
  </form>
	
	</body>
</html>