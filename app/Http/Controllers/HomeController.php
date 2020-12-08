<?php

namespace App\Http\Controllers;
use App\EmployeeDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function addEmp(Request $request){
		
		$details_arr = $this->arrangeDetails($request);
		
		# Save to table
		EmployeeDetail::create($details_arr);

		return redirect('/all_emp');
	}

	public function upadteDetails(Request $request,$id){
		
		$details_arr = $this->arrangeDetails($request);
		
		# Update
		EmployeeDetail::where('id',$id)->update($details_arr);

		return redirect('/all_emp');
	}


	public function listEmp(){
		$employees =  EmployeeDetail::get();
		return view('list_emp',compact('employees'));
	}
	
	
	public function showEmp($id){
		$emp_details = EmployeeDetail::where('id',$id)->first();
		return view('show_emp',['emp_details'=>$emp_details]);
	}


	public function arrangeDetails($request){
		## Mobile
		$mobiles = $request->input('mobile');
		$mob_primary_val =  $request->input('primary_mobile');
		$mew_mob_arr = array();
		foreach($mobiles as $km => $mobile){
			$m_prim = 0;
			if($km == $mob_primary_val){
				$m_prim = 1;
			}

			$mew_mob_arr[] = [
				'value'=>$mobile,
				'is_primary' => $m_prim,
			];			
		};

		$mobiles = json_encode($mew_mob_arr);


		# Whatsapp
		$whatsapps = $request->input('whatsapp');
		$wap_primary_val =  $request->input('primary_whatsapp');
		$mew_wap_arr = array();
		foreach($whatsapps as $kw => $whatsapp){
			$w_prim = 0;
			if($kw == $wap_primary_val){
				$w_prim = 1;
			}

			$mew_wap_arr[] = [
				'value'=>$whatsapp,
				'is_primary' => $w_prim,
			];			
		};

		$whatsapps = json_encode($mew_wap_arr);
		

		# Emails
		$emails = $request->input('email');
		$email_primary_val =  $request->input('primary_email');
		$mew_email_arr = array();
		foreach($emails as $ke => $email){
			$e_prim = 0;
			if($ke == $email_primary_val){
				$e_prim = 1;
			}

			$mew_email_arr[] = [
				'value'=>$email,
				'is_primary' => $e_prim,
			];			
		};

		$emails = json_encode($mew_email_arr);
		
		$details_arr = [
			'employee_name' => $request->input('emp_name'),
			'address_1' => $request->input('address_1'),
			'address_2'=> $request->input('address_2'),
			'location'=> $request->input('location'),
			'postal_code'=> $request->input('postal_code'),
			'postal_area'=> $request->input('postal_area'),
			'taluka'=> $request->input('taluka'),
			'suburbs'=> $request->input('suburb'),
			'direction'=> $request->input('direction'),
			'city' => $request->input('city'),
			'district' => $request->input('district'),
			'state'=> $request->input('state'),
			'country'=> $request->input('country') ,
			'mobile'=> $mobiles,
			'whatsapp'=> $whatsapps,
			'email'=> $emails,

		];

		return $details_arr;
	}
}
