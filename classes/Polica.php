<?php 
	class Polica {
		private $id = 0;
		private $seria = 0;
		private $valide_prej = '2018-03-01';
		private $valide_deri = '2018-03-01';
		private $data_shitjes = '';
		private $agjenti;

		public function merrIdPolices()
		{
			return $this->id;
		}

		public function vendosNumrinSerik($numri_serik) 
		{
			$this->seria = $numri_serik;	
		}

		public function merrNumrinSerik()
		{
			return $this->seria;
		}

		public function vendosDatenPrej($data_prej) 
		{			
			$this->valide_prej = $data_prej;	
		}

		public function merrDatenPrej()
		{
			return $this->valide_prej;
		}

		public function vendosDatenDeri($data_deri) 
		{
			$this->valide_deri = $data_deri;	
		}

		public function merrDatenDeri()
		{
			return $this->valide_deri;
		}


		public function dataValide($data_prej, $data_deri) 
		{
			if($data_prej > $data_deri) {
				return false;
			} else {
				return true;
			}
		}

		public function ditetValide($data_prej, $data_deri)
		{
			$dataPrej = date_create($data_prej);
			$dataDeri = date_create($data_deri);

			if($dataPrej > $dataDeri) {
				return '-1';
			} elseif($dataPrej == $dataDeri) {
				return '1';
			} else {
			$diff = date_diff($dataPrej, $dataDeri);

			echo($diff->format("%a"));
			}
		}
	}

 ?>