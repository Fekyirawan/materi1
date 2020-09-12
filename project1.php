<?php 

	class Animal {
		public $mimi, $doggo, $eyz, $donal;

		public function terbang() {
			if($this->jumlah_kaki == 2) {
				echo "Bisa Terbang";
			} else {
				echo "Tidak Bisa Terbang";
			}
		}
	}
	class Kucing extends Animal {
		public function bersuara(){
			return "Meooooong";
		}
	}

	class Anjing extends Animal {
		public function bersuara(){
			return "Guk Guk";
		}
	}

	class Elang extends Animal {
		public function bersuara(){
			return "Miiiiiip";
		}
	}

	class Angsa extends Animal {
		public function bersuara(){
			return "Kwaaak";
		}
	}

	$mimi = new Kucing;
	$mimi->jumlah_kaki = 4;
	echo "Mimi Adalah Kucing <br>";
	echo "Jumlah Kakinya Adalah ".$mimi->jumlah_kaki."<br>";
	echo $mimi->terbang()."<br>";
	echo "Suaranya Adalah ".$mimi->bersuara()."<br>";
	echo "<hr>";

	$doggo = new Anjing;
	$doggo->jumlah_kaki = 4;
	echo "Doggo Adalah Anjing <br>";
	echo "Jumlah Kakinya Adalah ".$doggo->jumlah_kaki."<br>";
	echo $doggo->terbang()."<br>";
	echo "Suaranya Adalah ".$doggo->bersuara()."<br>";
	echo "<hr>";

	$eyz = new Elang;
	$eyz->jumlah_kaki = 2;
	echo "Eyz Adalah Elang <br>";
	echo "Jumlah Kakinya Adalah ".$eyz->jumlah_kaki."<br>";
	echo $eyz->terbang()."<br>";
	echo "Suaranya Adalah ".$eyz->bersuara()."<br>";
	echo "<hr>";

	$donal = new Angsa;
	$donal->jumlah_kaki = 2;
	echo "Donal Adalah Angsa <br>";
	echo "Jumlah Kakinya Adalah ".$donal->jumlah_kaki."<br>";
	echo $donal->terbang()."<br>";
	echo "Suaranya Adalah ".$donal->bersuara()."<br>";
	echo "<hr>";
?> 