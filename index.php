
<?php

	$favvyEnts = [
		['Productname' => 'jeans' , 'Productcolor' => 'blue' , 'Productlocation' => 'wears' , 'Shippingstatus' => 'free' , 'Productprice' => 350.99 ],

		['Productname' => 'dumbell' , 'Productcolor' => 'black' , 'Productlocation' => 'gym equipment' , 'Shippingstatus' => 'free' , 'Productprice' => 296.99 ],

		['Productname' => 'iponeX' , 'Productcolor' => 'rose gold' , 'Productlocation' => 'phone cartegories' , 'Shippingstatus' => 'free' , 'Productprice' => 370.99 ],

		['Productname' => 'polo' , 'Productcolor' => 'red' , 'Productlocation' => 'wears' , 'Shippingstatus' => 'paid' , 'Productprice' => 350.99 ],

		['Productname' => 'belly killer' , 'Productcolor' => 'black' , 'Productlocation' => 'gym equipment' , 'Shippingstatus' => 'free' , 'Productprice' => 350.99 ],

		['Productname' => 'slim tea' , 'Productcolor' => 'red' , 'Productlocation' => 'gym equipments' , 'Shippingstatus' => 'paid' , 'Productprice' => 300,99 ],

		['Productname' => 'charger adapter' , 'Productcolor' => 'white' , 'Productlocation' => 'phone cartegories' , 'Shippingstatus' => 'paid' , 'Productprice' => 300 ],

		['Productname' => 'wrist watch' , 'Productcolor' => 'gold' , 'Productlocation' => 'wears' , 'Shippingstatus' => 'paid' , 'Productprice' => 251 ],

		['Productname' => 'stockings' , 'Productcolor' => 'brown' , 'Productlocation' => 'wears' , 'Shippingstatus' => 'free' , 'Productprice' => 300 ],

		['Productname' => 'rings' , 'Productcolor' => 'red' , 'Productlocation' => 'wears' , 'Shippingstatus' => 'paid' , 'Productprice' => 260.99 ],

		['Productname' => 'scarfs' , 'Productcolor' => 'black' , 'Productlocation' => 'wears' , 'Shippingstatus' => 'paid' , 'Productprice' => 260.99],

		['Productname' => 'laptops' , 'Productcolor' => 'black' , 'Productlocation' => 'accessories' , 'Shippingstatus' => 'free' , 'Productprice' => 150.99 ],

		['Productname' => 'battery' , 'Productcolor' => 'black' , 'Productlocation' => 'phone cartegories' , 'Shippingstatus' => 'free' , 'Productprice' => 300.99 ],

		['Productname' => 'skyrun' , 'Productcolor' => '' , 'Productlocation' => 'kitchen equipments' , 'Shippingstatus' => 'paid' , 'Productprice' => 250.99 ],

		['Productname' => 'power bank' , 'Productcolor' => 'red' , 'Productlocation' => 'phone catergories' , 'Shippingstatus' => 'free' , 'Productprice' => 170.99 ],

		['Productname' => 'sneakers' , 'Productcolor' => 'red' , 'Productlocation' => 'wears' , 'Shippingstatus' => 'free' , 'Productprice' => 230.99 ],

		['Productname' => 'bracelet' , 'Productcolor' => 'black' , 'Productlocation' => 'wears' , 'Shippingstatus' => 'free' , 'Productprice' => 350.99 ],

		['Productname' => 'skipping rope' , 'Productcolor' => 'green' , 'Productlocation' => 'gym equipment' , 'Shippingstatus' => 'paid' , 'Productprice' => 270.99 ],

		['Productname' => 'pressing iron' , 'Productcolor' => 'white' , 'Productlocation' => 'home appliances' , 'Shippingstatus' => 'free' , 'Productprice' => 290.99 ],

		['Productname' => 'pot' , 'Productcolor' => 'black' , 'Productlocation' => 'home appliances' , 'Shippingstatus' => 'paid' , 'Productprice' => 301.99 ],
    ];

    foreach ($favvyEnts as $favvyEnt){

     	// if ($gocart['Productprice'] < 351.00 && $gocart['Productprice'] > 249.99) {
    	 	// echo $gocart['Productname'] . ' - ' . '$' . $gocart['Productprice'] . '<br />' . '<br />';
    	 // }
    	 	
    	
     }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<h1>Favvy Ent</h1>
	<div>
		<ul>
	      <?php foreach ($favvyEnts as $favvyEnt){ ?>
	      	<?php if ($favvyEnt['Productprice'] < 351.00) { ?>
	      		<li><span class="mob"> <?php echo $favvyEnt['Productname'];?></span> <span class="monger">-</span><span>$</span> <span><?php echo $favvyEnt['Productprice'];?></span> </li>


	      	<?php } ?>
	     <?php } ?>
	   </ul>
	</div>
</body>
</html>