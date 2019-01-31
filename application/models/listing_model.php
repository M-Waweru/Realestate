<?php 

class Listing_model extends CI_Model {

	public function retrieveLocations(){
		$this->load->database();

		$this->db->select('*');
		$this->db->from('area');
		$this->db->join('county', 'area.County_no = county.County_no');
		$query = $this->db->get();

		$areadata = $query -> result_array();
		return $areadata;
	}

	public function addlisting($name, $category, $type, $desc, $area, $price, $bed, $bath){
		$this->load->database();

		$data = array(
			'Listing_name' => $name,
			'Category_no' => $category,
			'Type_no' =>  $type,
			'Description' => $desc,
			'Location_no' => $area,
			'Price' => $price,
			'No_of_bedrooms' => $bed,
			'No_of_bathrooms' => $bath,
			'Status_no' => 2,
			'User_no' => $this->session->userdata('userno')
		);

		$this->db->insert('listing', $data);

		return true;
	}

	public function retrieveAreaDetails(){
		$this->load->database();

		$this->db->get('area');
	}

	public function uploadMedia($filename, $filepath){
		$this->db->select_max('Listing_no');
		$query = $this->db->get('listing');
		$data = $query -> result_array();
		print_r($data);
		$listingno = $data[0]['Listing_no'];

		$data = array(
			'Media_name' => $filename,
			'Media_location' => $filepath,
			'Listing_no' => $listingno 
		);

		$this->db->insert('media', $data);
	}

	public function retrieveTypeListings($type){
		$this->load->database();

		if ($type=='sale'){
			$this->db->select('*');
			$this->db->from('listing');
			$this->db->join('media', 'listing.Listing_no = media.Listing_no');
			$this->db->join('listing_type', 'listing.Type_no = listing_type.Type_no');
			$this->db->where('listing.Type_no', 1);
			$query = $this->db->get();
		} else if ($type=='rent'){
			$this->db->select('*');
			$this->db->from('listing');
			$this->db->join('media', 'listing.Listing_no = media.Listing_no');
			$this->db->join('listing_type', 'listing.Type_no = listing_type.Type_no');
			$this->db->where('listing.Type_no', 2);
			$query = $this->db->get();
		} else {

		}

		$listingdata = $query -> result_array();
		return $listingdata;
	}

	public function retrieveCategoryListings($category){
		$this->load->database();

		if ($category=='flats'){
			$this->db->select('*');
			$this->db->from('listing');
			$this->db->join('media', 'listing.Listing_no = media.Listing_no');
			$this->db->join('listing_type', 'listing.Type_no = listing_type.Type_no');
			$this->db->where('Category_no', 1);
			$query = $this->db->get();
		} else if ($category=='houses'){
			$this->db->select('*');
			$this->db->from('listing');
			$this->db->join('media', 'listing.Listing_no = media.Listing_no');
			$this->db->join('listing_type', 'listing.Type_no = listing_type.Type_no');
			$this->db->join('area', 'listing.Location_no = area.Area_no');
			$this->db->where('Category_no', 2);
			$query = $this->db->get();
		} else if ($category=='land'){
			$this->db->select('*');
			$this->db->from('listing');
			$this->db->join('media', 'listing.Listing_no = media.Listing_no');
			$this->db->join('listing_type', 'listing.Type_no = listing_type.Type_no');
			$this->db->where('Category_no', 4);
			$query = $this->db->get();
		} else {
			$this->db->select('*');
			$this->db->from('listing');
			$this->db->join('media', 'listing.Listing_no = media.Listing_no');
			$this->db->join('listing_type', 'listing.Type_no = listing_type.Type_no');
			$this->db->where('Category_no', 3);
			$query = $this->db->get();
		}

		$listingdata = $query -> result_array();
		return $listingdata;
	}

	public function retrieveListing($listingno){
		$this->load->database();

		$query = $this->db->get_where('listing', array('Listing_no' => $listingno));

		$listingdata = $query -> result_array();
		return $listingdata;
	}

	public function retrieveMedia($listingno){
		$this->load->database();

		$query = $this->db->get_where('media', array('Listing_no' => $listingno));

		$mediadata = $query -> result_array();
		return $mediadata;
	}
}
?>