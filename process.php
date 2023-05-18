<?php
			  		$age = isset ($_POST['age']) ? $_POST['age']:'';
			  		$year = isset ($_POST['year']) ? $_POST['year']:'';
			  		class averageDeath{
			  			public function ave($age,$year){
			  				$tahun = [];
			  				$tahun[1] = 1;
			  				$tahun[2] = 2;
			  				$tahun[3] = 4;
			  				$tahun[4] = 7;
			  				$tahun[5] = 12;
			  				$person = [];
			  				$status = true;
			  				for ($x = 0; $x < count($age); $x++) {
			  					$sum = (int)$year[$x] - (int)$age[$x];
			  					if($sum > 0){
			  						if(isset($tahun[$sum])){
			  							$person[$x] = $tahun[$sum];
			  						}else{
			  							$person[$x] = 19;
			  						}
			  					}else{
			  						$status = false;
			  					}
			  				}
			  				$average = 0;
			  				for ($x = 0; $x < count($age); $x++) {
			  					$average = $average + $person[$x];
			  				}
			  				$average = $average/count($age);
			  				if($status===false){
			  					$average = -1;
			  				}
			  				return '<div class="alert alert-success" role="alert" style="margin-top: 10px;">Average : '.$average.'</div>';
			  			}
			  		}

			  		$ave = new averageDeath();
			  		if(isset($_POST['age'])){
			  			echo $ave->ave($age, $year);
			  		}
			  	?>