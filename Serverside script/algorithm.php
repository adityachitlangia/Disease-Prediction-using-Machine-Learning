<?php
session_start();
$disease_symptom = array(array(5, 20, 36, 38, 54, 71, 78, 81, 88, 112, 148, 157, 179, 203, 247, 248, 264),
array(32, 38, 44, 46, 77, 78, 120, 147, 156, 177, 180, 188, 223, 239),
array(10,  13, 32, 52, 60, 74, 89, 92, 100, 117, 143, 164, 167, 169, 171, 203, 210, 233, 245, 249),
array(13, 16, 49, 84, 103, 167, 210, 213, 233, 235),
array(31, 38, 50, 159, 180, 188, 210, 234, 265),
array(5, 21, 22, 29, 47, 51, 63, 68, 69, 75, 77, 93, 94, 95, 107, 111, 113, 124, 125, 133, 146, 149, 213, 229, 247, 258, 262, 267),
array(37, 44, 46, 83, 86, 97, 106, 129, 134, 138, 140, 152, 159, 167, 175, 220, 242, 249, 253),
array(9, 13, 29, 31, 32, 46, 78, 89, 112, 126, 136, 139, 152, 162, 163, 180, 196, 210, 233, 254, 261, 268),
array(11, 23, 49, 72, 89, 103, 129, 168, 191, 220, 222, 249),
array(7, 31, 58, 116, 163, 170, 187, 210, 231, 232),
array(5, 22, 47, 63, 75, 77, 93, 94, 107, 124, 125, 145, 146, 157, 213, 229, 247, 250, 258, 262, 267),
array(13, 127, 139, 152, 163, 170, 181, 183, 196, 210, 231, 232, 254, 259, 261),
array(38, 57, 126, 163, 196, 210, 265),
array(5, 28, 49, 72, 117, 129, 138, 175, 251, 255),
array(11, 62, 65, 108, 116, 167, 177, 198, 220, 233),
array(8, 11, 32, 50, 78, 168, 189, 191, 223, 239, 245, 261),
array(1, 121, 142, 168, 184, 189, 239, 264, 268),
array(4, 11, 12, 32, 38, 49, 77, 93, 98, 135, 177),
array(11, 39, 40, 44, 66, 76, 145, 191, 193, 208, 220, 265),
array(7, 30, 52, 85, 102, 116, 170, 172, 178, 186, 210, 231, 232),
array(9, 13, 67, 79, 82, 92, 102, 114, 138, 152, 167, 168, 185, 192, 220, 242),
array(7, 13, 52, 72, 152, 170, 172, 187, 210, 231, 232, 235, 259),
array(34, 35, 50, 118, 119, 122, 128, 183, 194, 251, 254),
array(5, 13, 14, 47, 55, 72, 74, 117, 118, 138, 139, 146, 157, 160, 183, 190, 210, 214, 221, 235, 244, 255, 261, 263),
array(2, 9, 32, 38, 45, 46, 65, 78, 104, 167, 191, 233),
array(13, 36, 48, 50, 59, 78, 99, 103, 117, 130, 139, 200),
array(22, 32, 42, 50, 59, 70, 78, 87, 96, 132, 136, 151, 180, 206, 210, 216, 218, 219, 234, 243, 252),
array(7, 8, 14, 24, 30, 55, 57, 170, 187, 196, 210, 212, 214, 231, 232),
array(1, 17, 46, 76, 90, 141, 152, 155, 168, 183, 199, 208, 257, 260, 261),
array(23, 78, 86, 112, 170, 210),
array(28, 47, 57, 65, 66, 80, 129, 137, 138, 175, 201, 233),
array(4, 5, 13, 38, 42, 45, 90, 91, 125, 129, 134, 140, 156, 196, 210),
array(13, 15, 27, 44, 46, 56, 59, 89, 99, 101, 103, 138, 164, 174, 176, 180, 182, 194, 196, 203, 249, 256, 259),
array(11, 39, 40, 44, 62, 99, 106, 129, 138, 167, 242),
array(24, 37, 46, 53, 83, 110, 129, 152, 168, 181, 190, 209, 236, 257, 261),
array(46, 78, 86, 137, 138, 167, 173, 191, 261),
array(6, 52, 78, 152, 160, 222, 261),
array(7, 24, 30, 31, 57, 116, 163, 170, 172, 186, 187, 196, 210, 224, 225, 231, 232, 235, 238),
array(13, 18, 73, 109, 153, 160, 167, 215, 230, 240),
array(9, 32, 38, 50, 115, 129, 143, 156, 162, 202, 219, 222, 245),
array(29, 60, 74, 95, 145, 166, 167, 170, 195, 210, 218, 237, 244),
array(9, 25, 49, 72, 105, 131, 161, 165, 167, 190, 217, 235, 256, 259),
array(9, 46, 152, 167, 168, 204, 220, 227, 261),
array(5, 22, 33, 43, 63, 77, 93, 94, 107, 125, 133, 145, 154, 205, 229, 241, 258),
array(5, 47, 55, 71, 72, 99, 102, 138, 156, 164, 214, 226, 235, 247, 254, 266, 267),
array(5, 11, 64, 70, 75, 93, 107, 125, 145, 153, 155, 157, 191, 207, 211, 213, 246, 262, 267),
array(27, 32, 38, 45, 50, 78, 87,  91, 136, 156, 159, 180, 188, 196, 203, 210, 239, 265, 268),
array(9, 26, 87, 96, 104, 167, 168, 169, 170, 210, 219),
array(9, 19, 38, 41, 45, 57, 61, 62, 78, 81, 103, 123, 127, 150, 156, 158, 159, 180, 182, 188, 197,  203, 210, 219, 228, 234, 243, 265));

$disease_name = array("Alzheimer's disease", "HIV", "anemia", "arthritis", "asthma", "bipolar disorder", "carcinoma", "chronic kidney failure", "cirrhosis", "coronary heart disease", "depression mental", "diabetes", "failure heart congestive", "glaucoma", "gout", "hepatitis", "hepatitis B", "hepatitis C", "hyperglycemia","hyperlipidemia", "hernia", "hypertensive disease", "hypoglycemia", "hypothyroidism", "infection", "infection urinary tract", "influenza", "ischemia", "ketoacidosis diabetic", "kidney disease", "malignant neoplasm of breast", "malignant neoplasm of lung", "malignant neoplasm of prostate", "malignant neoplasms", "malignant tumor of colon", "melanoma", "migraine disorders", "myocardial infarction", "neuropathy", "neutropenia", "obesity", "osteoporosis", "pancreatitis", "paranoia", "parkinson disease", "personality disorder", "pneumonia", "sickle cell anemia", "upper respiratory infection");
$per_disease=array();
$temp = array($_POST['symptom1'], $_POST['symptom2'], $_POST['symptom3'], $_POST['symptom4'], $_POST['symptom5']);
$num = 0;
for($i=0; $i<sizeof($disease_symptom); $i++)
{
	$count = 0;
	for($j=0; $j < sizeof($temp); $j++)
	{
		$num = $temp[$j];
		if(in_array($num, $disease_symptom[$i]))
		{
			$count = $count + 1;
		}
	}
	$per_disease[$i]=(($count/sizeof($disease_symptom[$i]))*100);
}
$names = array();

	for($i = 0; $i < 3; $i++)
	{
		$max=max($per_disease);
		$flag = 0;
		for($l=0;$l<sizeof($disease_symptom);$l++)
		{
			if(($max==$per_disease[$l])&&($flag==0))
			{
				$temp = $l;
				 array_push($names,$disease_name[$l]);
				$flag = 1;
			}
		}
		$per_disease[$temp] = 0;
	}

echo '
<head>
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=BenchNine:300,400,700" rel="stylesheet" type="text/css">
  <style type="text/css">
<style type="text/css">
.center-on-page {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
body{
    background-color: #DEF0F5;
  } 
h1 {
  text-align: center;
  text-transform: uppercase;
  font-weight: bold;
  font-family: "BenchNine", sans-serif;
    font-size: 50px;
}

/* Reset Select */
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #F2F3F4;
  background-image: none;
}
/* Custom Select */
.select {
  position: relative;
  display: block;
  width: 20em;
  height: 3em;
  line-height: 3;
  background: black;
  overflow: hidden;
  border-radius: .25em;
}
select {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0 0 0 .5em;
  color: black;
  cursor: pointer;
}
select::-ms-expand {
  display: none;
}
/* Arrow */
.select::after {
  content: ';echo'\'\25BD\';';
  echo'
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  padding: 0 1em;
  background: #3a9ecb;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}
.select::after {
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
button{
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #3a9ecb;
  width: 250px;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
  </style>
';
echo '<h1><center>Top three Predicted diseases</h1></center>';
echo '<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1. '.$names[0].'</h3>';
echo '<br>';
echo '<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2. '.$names[1].'</h3>';
echo '<br>';
echo '<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3. '.$names[2].'</h3>';
echo '<br><br>';
$_SESSION["disease"]=$names[0];
echo '<h2><center>Enter the 4 areas that are most convenient to you for visiting a doctor : </h2></center>';
echo '<h4><center>*We will give you suggestions on the pharmacies/chemist stores in these areas as well</h4></center>';
echo '<html>
<body>
<form method="POST" action="userdoctors.php"> 
<center><table cellspacing = 10 cellpadding = 10><tr>
<td><div class="select"><select name="location1">
  <option value="Adyar">Adyar</option>
  <option value="Velachery">Velachery</option>
  <option value="Anna Nagar">Anna Nagar</option>
  <option value="Greams Road">Greams Road</option>
  <option value="Kilpauk">Kilpauk</option>
  <option value="Chetpet">Chetpet</option>
  <option value="T Nagar">T Nagar</option>
  <option value="Pallikarnai">Pallikarnai</option>
  <option value="Alwarpet">Alwarpet</option>
  <option value="Tambaram">Tambaram</option>
  <option value="Vanagaram">Vanagaram</option>
  <option value="Porur">Porur</option>
  <option value="Thiruvanmiyur">Thiruvanmiyur</option>
  <option value="Mylapore">Mylapore</option>
  <option value="Teynampet">Teynampet</option>
  <option value="Mogappair">Mogappair</option>
  <option value="Raja Annamalai Puram">Raja Annamalai Puram</option>
  <option value="Nungambakkam">Nungambakkam</option>
  <option value="Medavakkam">Medavakkam</option>
  <option value="Chrompet">Chrompet</option>
  <option value="Nanganallur">Nanganallur</option>
  <option value="MRC Nagar">MRC Nagar</option>
  <option value="Shenoy Nagar">Shenoy Nagar</option>
  <option value="KK Nagar">KK Nagar</option>
  <option value="Adambakkam">Adambakkam</option>
  <option value="Valasaravakkam">Valasaravakkam</option>
  <option value="Purasawakkam">Purasawakkam</option>
  <option value="Madipakkam">Madipakkam</option>
  <option value="Vadapalani">Vadapalani</option>
  <option value="Ashok Nagar">Ashok Nagar</option>
  <option value="Arumbakkam">Arumbakkam</option>
  <option value="Thousand Lights">Thousand Lights</option>
  <option value="Ambattur">Ambattur</option>
  <option value="Sholinganallur">Sholinganallur</option>
  <option value="Guindy">Guindy</option>
  <option value="West Mambalam">West Mambalam</option>
  <option value="Thoraipakkam">Thoraipakkam</option>
  <option value="Pallavaram">Pallavaram</option>
  <option value="Navalur">Navalur</option>
  <option value="Egmore">Egmore</option>
  <option value="Virugambakkam">Virugambakkam</option>
  <option value="Villivakkam">Villivakkam</option>
  <option value="Perungudi">Perungudi</option>
  <option value="Mandaveli">Mandaveli</option>
  <option value="Kolathur">Kolathur</option>
  <option value="Kodambakkam">Kodambakkam</option>
  <option value="ECR Road">ECR Road</option>
  <option value="OMR Road">OMR Road</option>
  <option value="Saligramam">Saligramam</option>
  <option value="Ramapuram">Ramapuram</option>
  <option value="Perambur">Perambur</option>
  <option value="Manapakkam">Manapakkam</option>
  <option value="Karapakkam">Karapakkam</option>
  <option value="Aminjikarai">Aminjikarai</option>
  <option value="Washermenpet">Washermenpet</option>
  <option value="Tondiarpet">Tondiarpet</option>
  <option value="Thiruvottiyur">Thiruvottiyur</option>
  <option value="Thirumullaivoyal">Thirumullaivoyal</option>
  <option value="Sowcarpet">Sowcarpet</option>
  <option value="Sembakkam">Sembakkam</option>
  <option value="Saidapet">Saidapet</option>
  <option value="Royapettah">Royapettah</option>
  <option value="Perumbakkam">Perumbakkam</option>
  <option value="Periyar Nagar">Periyar Nagar</option>
  <option value="Nandanam">Nandanam</option>
  <option value="Mahalingapuram">Mahalingapuram</option>
  <option value="Madaveli">Madaveli</option>
  <option value="CIT Nagar">CIT Nagar</option>
  <option value="Chintadripet">Chintadripet</option>
  <option value="Alwarthirunagar">Alwarthirunagar</option>
  <option value="Vanuvampet">Vanuvampet</option>
  <option value="Triplicane">Triplicane</option>
  <option value="Sholingallur">Sholingallur</option>
  <option value="Royapuram">Royapuram</option>
  <option value="Royapuram">Royapuram</option>
  <option value="Puzhal">Puzhal</option>
  <option value="Puasawakkam">Puasawakkam</option>
  <option value="Pozhichalur">Pozhichalur</option>
  <option value="Poonamalle">Poonamalle</option>
  <option value="Perungalathur">Perungalathur</option>
  <option value="Pammal">Pammal</option>
  <option value="Palavakkam">Palavakkam</option>
  <option value="Nerkundram">Nerkundram</option>
  <option value="Neelankarai">Neelankarai</option>
  <option value="Mugalivakkam">Mugalivakkam</option>
  <option value="Manali">Manali</option>
  <option value="Maduravoyal">Maduravoyal</option>
  <option value="Kovilambakkam">Kovilambakkam</option>
  <option value="Kovilambakkam">Kovilambakkam</option>
  <option value="Kottivakkam">Kottivakkam</option>
  <option value="Kandanchavadi">Kandanchavadi</option>
  <option value="Kalipauk">Kalipauk</option>
  <option value="Guduvanchery">Guduvanchery</option>
  <option value="Choolaimedu">Choolaimedu</option>
  <option value="Chepauk">Chepauk</option>
  <option value="Broadway">Broadway</option>
  <option value="Besant Nagar">Besant Nagar</option>
  <option value="Aynavaram">Aynavaram</option>
  <option value="Ayanavaram">Ayanavaram</option>
  <option value="Ayanambakkam">Ayanambakkam</option>
  <option value="Avadi">Avadi</option>
  <option value="Alandur">Alandur</option>
</select></div>
</td>
<td>
<div class="select">
<select name="location2">
  <option value="Adyar">Adyar</option>
  <option value="Velachery">Velachery</option>
  <option value="Anna Nagar">Anna Nagar</option>
  <option value="Greams Road">Greams Road</option>
  <option value="Kilpauk">Kilpauk</option>
  <option value="Chetpet">Chetpet</option>
  <option value="T Nagar">T Nagar</option>
  <option value="Pallikarnai">Pallikarnai</option>
  <option value="Alwarpet">Alwarpet</option>
  <option value="Tambaram">Tambaram</option>
  <option value="Vanagaram">Vanagaram</option>
  <option value="Porur">Porur</option>
  <option value="Thiruvanmiyur">Thiruvanmiyur</option>
  <option value="Mylapore">Mylapore</option>
  <option value="Teynampet">Teynampet</option>
  <option value="Mogappair">Mogappair</option>
  <option value="Raja Annamalai Puram">Raja Annamalai Puram</option>
  <option value="Nungambakkam">Nungambakkam</option>
  <option value="Medavakkam">Medavakkam</option>
  <option value="Chrompet">Chrompet</option>
  <option value="Nanganallur">Nanganallur</option>
  <option value="MRC Nagar">MRC Nagar</option>
  <option value="Shenoy Nagar">Shenoy Nagar</option>
  <option value="KK Nagar">KK Nagar</option>
  <option value="Adambakkam">Adambakkam</option>
  <option value="Valasaravakkam">Valasaravakkam</option>
  <option value="Purasawakkam">Purasawakkam</option>
  <option value="Madipakkam">Madipakkam</option>
  <option value="Vadapalani">Vadapalani</option>
  <option value="Ashok Nagar">Ashok Nagar</option>
  <option value="Arumbakkam">Arumbakkam</option>
  <option value="Thousand Lights">Thousand Lights</option>
  <option value="Ambattur">Ambattur</option>
  <option value="Sholinganallur">Sholinganallur</option>
  <option value="Guindy">Guindy</option>
  <option value="West Mambalam">West Mambalam</option>
  <option value="Thoraipakkam">Thoraipakkam</option>
  <option value="Pallavaram">Pallavaram</option>
  <option value="Navalur">Navalur</option>
  <option value="Egmore">Egmore</option>
  <option value="Virugambakkam">Virugambakkam</option>
  <option value="Villivakkam">Villivakkam</option>
  <option value="Perungudi">Perungudi</option>
  <option value="Mandaveli">Mandaveli</option>
  <option value="Kolathur">Kolathur</option>
  <option value="Kodambakkam">Kodambakkam</option>
  <option value="ECR Road">ECR Road</option>
  <option value="OMR Road">OMR Road</option>
  <option value="Saligramam">Saligramam</option>
  <option value="Ramapuram">Ramapuram</option>
  <option value="Perambur">Perambur</option>
  <option value="Manapakkam">Manapakkam</option>
  <option value="Karapakkam">Karapakkam</option>
  <option value="Aminjikarai">Aminjikarai</option>
  <option value="Washermenpet">Washermenpet</option>
  <option value="Tondiarpet">Tondiarpet</option>
  <option value="Thiruvottiyur">Thiruvottiyur</option>
  <option value="Thirumullaivoyal">Thirumullaivoyal</option>
  <option value="Sowcarpet">Sowcarpet</option>
  <option value="Sembakkam">Sembakkam</option>
  <option value="Saidapet">Saidapet</option>
  <option value="Royapettah">Royapettah</option>
  <option value="Perumbakkam">Perumbakkam</option>
  <option value="Periyar Nagar">Periyar Nagar</option>
  <option value="Nandanam">Nandanam</option>
  <option value="Mahalingapuram">Mahalingapuram</option>
  <option value="Madaveli">Madaveli</option>
  <option value="CIT Nagar">CIT Nagar</option>
  <option value="Chintadripet">Chintadripet</option>
  <option value="Alwarthirunagar">Alwarthirunagar</option>
  <option value="Vanuvampet">Vanuvampet</option>
  <option value="Triplicane">Triplicane</option>
  <option value="Sholingallur">Sholingallur</option>
  <option value="Royapuram">Royapuram</option>
  <option value="Royapuram">Royapuram</option>
  <option value="Puzhal">Puzhal</option>
  <option value="Puasawakkam">Puasawakkam</option>
  <option value="Pozhichalur">Pozhichalur</option>
  <option value="Poonamalle">Poonamalle</option>
  <option value="Perungalathur">Perungalathur</option>
  <option value="Pammal">Pammal</option>
  <option value="Palavakkam">Palavakkam</option>
  <option value="Nerkundram">Nerkundram</option>
  <option value="Neelankarai">Neelankarai</option>
  <option value="Mugalivakkam">Mugalivakkam</option>
  <option value="Manali">Manali</option>
  <option value="Maduravoyal">Maduravoyal</option>
  <option value="Kovilambakkam">Kovilambakkam</option>
  <option value="Kovilambakkam">Kovilambakkam</option>
  <option value="Kottivakkam">Kottivakkam</option>
  <option value="Kandanchavadi">Kandanchavadi</option>
  <option value="Kalipauk">Kalipauk</option>
  <option value="Guduvanchery">Guduvanchery</option>
  <option value="Choolaimedu">Choolaimedu</option>
  <option value="Chepauk">Chepauk</option>
  <option value="Broadway">Broadway</option>
  <option value="Besant Nagar">Besant Nagar</option>
  <option value="Aynavaram">Aynavaram</option>
  <option value="Ayanavaram">Ayanavaram</option>
  <option value="Ayanambakkam">Ayanambakkam</option>
  <option value="Avadi">Avadi</option>
  <option value="Alandur">Alandur</option>
</select></div>
</td>
</tr>
<tr>
<td>
<div class="select">
<select name="location3">
  <option value="Adyar">Adyar</option>
  <option value="Velachery">Velachery</option>
  <option value="Anna Nagar">Anna Nagar</option>
  <option value="Greams Road">Greams Road</option>
  <option value="Kilpauk">Kilpauk</option>
  <option value="Chetpet">Chetpet</option>
  <option value="T Nagar">T Nagar</option>
  <option value="Pallikarnai">Pallikarnai</option>
  <option value="Alwarpet">Alwarpet</option>
  <option value="Tambaram">Tambaram</option>
  <option value="Vanagaram">Vanagaram</option>
  <option value="Porur">Porur</option>
  <option value="Thiruvanmiyur">Thiruvanmiyur</option>
  <option value="Mylapore">Mylapore</option>
  <option value="Teynampet">Teynampet</option>
  <option value="Mogappair">Mogappair</option>
  <option value="Raja Annamalai Puram">Raja Annamalai Puram</option>
  <option value="Nungambakkam">Nungambakkam</option>
  <option value="Medavakkam">Medavakkam</option>
  <option value="Chrompet">Chrompet</option>
  <option value="Nanganallur">Nanganallur</option>
  <option value="MRC Nagar">MRC Nagar</option>
  <option value="Shenoy Nagar">Shenoy Nagar</option>
  <option value="KK Nagar">KK Nagar</option>
  <option value="Adambakkam">Adambakkam</option>
  <option value="Valasaravakkam">Valasaravakkam</option>
  <option value="Purasawakkam">Purasawakkam</option>
  <option value="Madipakkam">Madipakkam</option>
  <option value="Vadapalani">Vadapalani</option>
  <option value="Ashok Nagar">Ashok Nagar</option>
  <option value="Arumbakkam">Arumbakkam</option>
  <option value="Thousand Lights">Thousand Lights</option>
  <option value="Ambattur">Ambattur</option>
  <option value="Sholinganallur">Sholinganallur</option>
  <option value="Guindy">Guindy</option>
  <option value="West Mambalam">West Mambalam</option>
  <option value="Thoraipakkam">Thoraipakkam</option>
  <option value="Pallavaram">Pallavaram</option>
  <option value="Navalur">Navalur</option>
  <option value="Egmore">Egmore</option>
  <option value="Virugambakkam">Virugambakkam</option>
  <option value="Villivakkam">Villivakkam</option>
  <option value="Perungudi">Perungudi</option>
  <option value="Mandaveli">Mandaveli</option>
  <option value="Kolathur">Kolathur</option>
  <option value="Kodambakkam">Kodambakkam</option>
  <option value="ECR Road">ECR Road</option>
  <option value="OMR Road">OMR Road</option>
  <option value="Saligramam">Saligramam</option>
  <option value="Ramapuram">Ramapuram</option>
  <option value="Perambur">Perambur</option>
  <option value="Manapakkam">Manapakkam</option>
  <option value="Karapakkam">Karapakkam</option>
  <option value="Aminjikarai">Aminjikarai</option>
  <option value="Washermenpet">Washermenpet</option>
  <option value="Tondiarpet">Tondiarpet</option>
  <option value="Thiruvottiyur">Thiruvottiyur</option>
  <option value="Thirumullaivoyal">Thirumullaivoyal</option>
  <option value="Sowcarpet">Sowcarpet</option>
  <option value="Sembakkam">Sembakkam</option>
  <option value="Saidapet">Saidapet</option>
  <option value="Royapettah">Royapettah</option>
  <option value="Perumbakkam">Perumbakkam</option>
  <option value="Periyar Nagar">Periyar Nagar</option>
  <option value="Nandanam">Nandanam</option>
  <option value="Mahalingapuram">Mahalingapuram</option>
  <option value="Madaveli">Madaveli</option>
  <option value="CIT Nagar">CIT Nagar</option>
  <option value="Chintadripet">Chintadripet</option>
  <option value="Alwarthirunagar">Alwarthirunagar</option>
  <option value="Vanuvampet">Vanuvampet</option>
  <option value="Triplicane">Triplicane</option>
  <option value="Sholingallur">Sholingallur</option>
  <option value="Royapuram">Royapuram</option>
  <option value="Royapuram">Royapuram</option>
  <option value="Puzhal">Puzhal</option>
  <option value="Puasawakkam">Puasawakkam</option>
  <option value="Pozhichalur">Pozhichalur</option>
  <option value="Poonamalle">Poonamalle</option>
  <option value="Perungalathur">Perungalathur</option>
  <option value="Pammal">Pammal</option>
  <option value="Palavakkam">Palavakkam</option>
  <option value="Nerkundram">Nerkundram</option>
  <option value="Neelankarai">Neelankarai</option>
  <option value="Mugalivakkam">Mugalivakkam</option>
  <option value="Manali">Manali</option>
  <option value="Maduravoyal">Maduravoyal</option>
  <option value="Kovilambakkam">Kovilambakkam</option>
  <option value="Kovilambakkam">Kovilambakkam</option>
  <option value="Kottivakkam">Kottivakkam</option>
  <option value="Kandanchavadi">Kandanchavadi</option>
  <option value="Kalipauk">Kalipauk</option>
  <option value="Guduvanchery">Guduvanchery</option>
  <option value="Choolaimedu">Choolaimedu</option>
  <option value="Chepauk">Chepauk</option>
  <option value="Broadway">Broadway</option>
  <option value="Besant Nagar">Besant Nagar</option>
  <option value="Aynavaram">Aynavaram</option>
  <option value="Ayanavaram">Ayanavaram</option>
  <option value="Ayanambakkam">Ayanambakkam</option>
  <option value="Avadi">Avadi</option>
  <option value="Alandur">Alandur</option>
</select></div>
</td>
<td>
<div class="select">
<select name="location4">
  <option value="Adyar">Adyar</option>
  <option value="Velachery">Velachery</option>
  <option value="Anna Nagar">Anna Nagar</option>
  <option value="Greams Road">Greams Road</option>
  <option value="Kilpauk">Kilpauk</option>
  <option value="Chetpet">Chetpet</option>
  <option value="T Nagar">T Nagar</option>
  <option value="Pallikarnai">Pallikarnai</option>
  <option value="Alwarpet">Alwarpet</option>
  <option value="Tambaram">Tambaram</option>
  <option value="Vanagaram">Vanagaram</option>
  <option value="Porur">Porur</option>
  <option value="Thiruvanmiyur">Thiruvanmiyur</option>
  <option value="Mylapore">Mylapore</option>
  <option value="Teynampet">Teynampet</option>
  <option value="Mogappair">Mogappair</option>
  <option value="Raja Annamalai Puram">Raja Annamalai Puram</option>
  <option value="Nungambakkam">Nungambakkam</option>
  <option value="Medavakkam">Medavakkam</option>
  <option value="Chrompet">Chrompet</option>
  <option value="Nanganallur">Nanganallur</option>
  <option value="MRC Nagar">MRC Nagar</option>
  <option value="Shenoy Nagar">Shenoy Nagar</option>
  <option value="KK Nagar">KK Nagar</option>
  <option value="Adambakkam">Adambakkam</option>
  <option value="Valasaravakkam">Valasaravakkam</option>
  <option value="Purasawakkam">Purasawakkam</option>
  <option value="Madipakkam">Madipakkam</option>
  <option value="Vadapalani">Vadapalani</option>
  <option value="Ashok Nagar">Ashok Nagar</option>
  <option value="Arumbakkam">Arumbakkam</option>
  <option value="Thousand Lights">Thousand Lights</option>
  <option value="Ambattur">Ambattur</option>
  <option value="Sholinganallur">Sholinganallur</option>
  <option value="Guindy">Guindy</option>
  <option value="West Mambalam">West Mambalam</option>
  <option value="Thoraipakkam">Thoraipakkam</option>
  <option value="Pallavaram">Pallavaram</option>
  <option value="Navalur">Navalur</option>
  <option value="Egmore">Egmore</option>
  <option value="Virugambakkam">Virugambakkam</option>
  <option value="Villivakkam">Villivakkam</option>
  <option value="Perungudi">Perungudi</option>
  <option value="Mandaveli">Mandaveli</option>
  <option value="Kolathur">Kolathur</option>
  <option value="Kodambakkam">Kodambakkam</option>
  <option value="ECR Road">ECR Road</option>
  <option value="OMR Road">OMR Road</option>
  <option value="Saligramam">Saligramam</option>
  <option value="Ramapuram">Ramapuram</option>
  <option value="Perambur">Perambur</option>
  <option value="Manapakkam">Manapakkam</option>
  <option value="Karapakkam">Karapakkam</option>
  <option value="Aminjikarai">Aminjikarai</option>
  <option value="Washermenpet">Washermenpet</option>
  <option value="Tondiarpet">Tondiarpet</option>
  <option value="Thiruvottiyur">Thiruvottiyur</option>
  <option value="Thirumullaivoyal">Thirumullaivoyal</option>
  <option value="Sowcarpet">Sowcarpet</option>
  <option value="Sembakkam">Sembakkam</option>
  <option value="Saidapet">Saidapet</option>
  <option value="Royapettah">Royapettah</option>
  <option value="Perumbakkam">Perumbakkam</option>
  <option value="Periyar Nagar">Periyar Nagar</option>
  <option value="Nandanam">Nandanam</option>
  <option value="Mahalingapuram">Mahalingapuram</option>
  <option value="Madaveli">Madaveli</option>
  <option value="CIT Nagar">CIT Nagar</option>
  <option value="Chintadripet">Chintadripet</option>
  <option value="Alwarthirunagar">Alwarthirunagar</option>
  <option value="Vanuvampet">Vanuvampet</option>
  <option value="Triplicane">Triplicane</option>
  <option value="Sholingallur">Sholingallur</option>
  <option value="Royapuram">Royapuram</option>
  <option value="Royapuram">Royapuram</option>
  <option value="Puzhal">Puzhal</option>
  <option value="Puasawakkam">Puasawakkam</option>
  <option value="Pozhichalur">Pozhichalur</option>
  <option value="Poonamalle">Poonamalle</option>
  <option value="Perungalathur">Perungalathur</option>
  <option value="Pammal">Pammal</option>
  <option value="Palavakkam">Palavakkam</option>
  <option value="Nerkundram">Nerkundram</option>
  <option value="Neelankarai">Neelankarai</option>
  <option value="Mugalivakkam">Mugalivakkam</option>
  <option value="Manali">Manali</option>
  <option value="Maduravoyal">Maduravoyal</option>
  <option value="Kovilambakkam">Kovilambakkam</option>
  <option value="Kovilambakkam">Kovilambakkam</option>
  <option value="Kottivakkam">Kottivakkam</option>
  <option value="Kandanchavadi">Kandanchavadi</option>
  <option value="Kalipauk">Kalipauk</option>
  <option value="Guduvanchery">Guduvanchery</option>
  <option value="Choolaimedu">Choolaimedu</option>
  <option value="Chepauk">Chepauk</option>
  <option value="Broadway">Broadway</option>
  <option value="Besant Nagar">Besant Nagar</option>
  <option value="Aynavaram">Aynavaram</option>
  <option value="Ayanavaram">Ayanavaram</option>
  <option value="Ayanambakkam">Ayanambakkam</option>
  <option value="Avadi">Avadi</option>
  <option value="Alandur">Alandur</option>
</select></div>
</td>
</tr>
</table>
</center>
<center><button type="submit">Proceed to find doctors</button></center>
</body></html>';
?>