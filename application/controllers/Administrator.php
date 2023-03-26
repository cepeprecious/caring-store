<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Singapore');
// print needed allowed origins
header( "Access-Control-Allow-Origin: *" );
header( 'Access-Control-Allow-Credentials: true' );
header( 'Access-Control-Allow-Methods: GET, POST, OPTIONS' );



// if this is a preflight request
if (
  isset( $_SERVER['REQUEST_METHOD'] )
  && $_SERVER['REQUEST_METHOD'] === 'OPTIONS'
) {
  // need preflight here
  header( 'Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept' );
  // add cache control for preflight cache
  // @link https://httptoolkit.tech/blog/cache-your-cors/
  header( 'Access-Control-Max-Age: 86400' );
  header( 'Cache-Control: public, max-age=86400' );
  header( 'Vary: origin' );
  // just exit and CORS request will be okay
  // NOTE: We are exiting only when the OPTIONS preflight request is made
  // because the pre-flight only checks for response header and HTTP status code.
  exit( 0 );
}

class Administrator extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('phpqrcode/qrlib');
	}

	public function index()
	{
		// $res = $this->db->get('tbl_employees');
		// $data['total_emp'] = $res->num_rows();

		$data['page'] = 'Register';

		$this->load->view('pages/register');
	}
	public function login()
	{
		$data['page'] = 'Login';

		$this->load->view('pages/login');
	}

	public function detect()
	{
		// $res = $this->db->get('tbl_employees');
		// $data['total_emp'] = $res->num_rows();

		$data['page'] = 'Register';

		$this->load->view('pages/detect');
	}

	public function getAllEmotions($date){
	    
	    if ($date) {
	        $dates = explode("-", urldecode($date));
	        $date1 = trim($dates[0]);
	        $date2 = trim($dates[1]);
            $date1 = str_replace('\/', '-', $date1);
            $date1 = date('Y-m-d', strtotime($date1));
            $date2 = str_replace('\/', '-', $date2);
            $date2 = date('Y-m-d', strtotime($date2));
            $query = $this->db->query("SELECT emotion, COUNT(*) AS emotion_count, COUNT(*) * 100.0 / SUM(COUNT(*)) OVER() as emotion_percentage FROM tbl_emotions WHERE `date` BETWEEN '{$date1}' AND '{$date2}' GROUP BY emotion;");
	    } else {
	        $query = $this->db->query("SELECT emotion, COUNT(*) AS emotion_count, COUNT(*) * 100.0 / SUM(COUNT(*)) OVER() as emotion_percentage FROM tbl_emotions GROUP BY emotion;");
	    }

		$data = array();
			foreach ($query->result() as $row)
			{
					array_push($data,array(
						'emotion'=> $row->emotion,
						'emotion_count'=> $row->emotion_count,
						'emotion_percentage'=> $row->emotion_percentage
					));
			}
		
		if (count($data) == 0) {
		    array_push($data,array(
				'emotion'=> "Angry",
				'emotion_count'=> "0",
				'emotion_percentage'=> "0.0"
			));
			array_push($data,array(
				'emotion'=> "Happy",
				'emotion_count'=> "0",
				'emotion_percentage'=> "0.0"
			));
			array_push($data,array(
				'emotion'=> "Sad",
				'emotion_count'=> "0",
				'emotion_percentage'=> "0.0"
			));
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($data));

	}
	

	public function getAccEmotions(){
		$query = $this->db->query("SELECT emotion, COUNT(*) AS emotion_count, COUNT(*) * 100.0 / SUM(COUNT(*)) OVER() as emotion_percentage FROM tbl_emotions INNER JOIN tbl_questions on tbl_emotions.question_id = tbl_questions.question_id where tbl_questions.question_group = 1 GROUP BY emotion;");
		$data = array();
			foreach ($query->result() as $row)
			{
					array_push($data,array(
						'emotion'=> $row->emotion,
						'emotion_count'=> $row->emotion_count,
						'emotion_percentage'=> $row->emotion_percentage
					));
			}

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function getEmEmotions(){
		$query = $this->db->query("SELECT emotion, COUNT(*) AS emotion_count, COUNT(*) * 100.0 / SUM(COUNT(*)) OVER() as emotion_percentage FROM tbl_emotions INNER JOIN tbl_questions on tbl_emotions.question_id = tbl_questions.question_id where tbl_questions.question_group = 2 GROUP BY tbl_emotions.emotion;");
		$data = array();
			foreach ($query->result() as $row)
			{
					array_push($data,array(
						'emotion'=> $row->emotion,
						'emotion_count'=> $row->emotion_count,
						'emotion_percentage'=> $row->emotion_percentage
					));
			}

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function getResEmotions(){
		$query = $this->db->query("SELECT emotion, COUNT(*) AS emotion_count, COUNT(*) * 100.0 / SUM(COUNT(*)) OVER() as emotion_percentage FROM tbl_emotions INNER JOIN tbl_questions on tbl_emotions.question_id = tbl_questions.question_id where tbl_questions.question_group = 3 GROUP BY tbl_emotions.emotion;");
		$data = array();
			foreach ($query->result() as $row)
			{
					array_push($data,array(
						'emotion'=> $row->emotion,
						'emotion_count'=> $row->emotion_count,
						'emotion_percentage'=> $row->emotion_percentage
					));
			}

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function getLpEmotions(){
		$query = $this->db->query("SELECT emotion, COUNT(*) AS emotion_count, COUNT(*) * 100.0 / SUM(COUNT(*)) OVER() as emotion_percentage FROM tbl_emotions INNER JOIN tbl_questions on tbl_emotions.question_id = tbl_questions.question_id where tbl_questions.question_group = 4 GROUP BY tbl_emotions.emotion;");
		$data = array();
			foreach ($query->result() as $row)
			{
					array_push($data,array(
						'emotion'=> $row->emotion,
						'emotion_count'=> $row->emotion_count,
						'emotion_percentage'=> $row->emotion_percentage
					));
			}

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function getAccQEmotions(){
		$query = $this->db->query("select tbl_emotions.emotion,tbl_emotions.question_id,tbl_questions.question_color, count(*) as emotion_count,COUNT(*) * 100.0 / SUM(COUNT(*)) OVER() as emotion_percentage from tbl_emotions INNER JOIN tbl_questions on tbl_emotions.question_id = tbl_questions.question_id where tbl_questions.question_group = 1 GROUP by tbl_emotions.emotion,tbl_emotions.question_id;");
		$this->output->set_content_type('application/json')->set_output(json_encode($query->result()));
		
	}
	
	public function getRecord($date_type) {
		$order_by = "DESC";
		$date_type = urldecode($date_type);
		$date_format = 'm';
		if ($date_type == "3 Years") {
			$date_type = "year";
			$date_format = 'Y';
			$order_by = "ASC";
		}
		else {
			$date_type = "month";
			$date_format = 'm';
			$order_by = "DESC";
		}

		// $this->output->set_content_type('application/json')->set_output(json_encode($date_type));
		// return;

		$date = new DateTime();
		$current_date = $date->format($date_format);
		$date = new DateTime();
		$prev_date = $date->modify("-1 {$date_type}")->format($date_format);
		$date = new DateTime();
		$prev2_date = $date->modify("-2 {$date_type}")->format($date_format);

		$month = array(
			"January", "February", "March",
			"April", "May", "June", "July",
			"August", "September", "October",
			"November", "December"
		);
	    
	    $data = array();	
		$query = $this->db->query("
		SELECT 
			{$date_type}, 
			COALESCE(SUM(CASE WHEN emotion = 'angry' THEN 1 ELSE 0 END), 0) AS angry, 
			COALESCE(SUM(CASE WHEN emotion = 'happy' THEN 1 ELSE 0 END), 0) AS happy, 
			COALESCE(SUM(CASE WHEN emotion = 'sad' THEN 1 ELSE 0 END), 0) AS sad, 
			(COALESCE(SUM(CASE WHEN emotion = 'angry' THEN 1 ELSE 0 END), 0) / 
			COALESCE(SUM(CASE WHEN emotion IN ('angry', 'happy', 'sad') THEN 1 ELSE 0 END), 1)) * 100 AS angry_percentage, 
			(COALESCE(SUM(CASE WHEN emotion = 'happy' THEN 1 ELSE 0 END), 0) / 
			COALESCE(SUM(CASE WHEN emotion IN ('angry', 'happy', 'sad') THEN 1 ELSE 0 END), 1)) * 100 AS happy_percentage, 
			(COALESCE(SUM(CASE WHEN emotion = 'sad' THEN 1 ELSE 0 END), 0) / 
			COALESCE(SUM(CASE WHEN emotion IN ('angry', 'happy', 'sad') THEN 1 ELSE 0 END), 1)) * 100 AS sad_percentage 
		FROM 
			(SELECT {$date_type}(date) AS {$date_type} FROM tbl_emotions 
		UNION 
			SELECT {$current_date} UNION SELECT {$prev_date} UNION SELECT {$prev2_date}) {$date_type}s 
		LEFT JOIN 
			tbl_emotions 
		ON 
			{$date_type}(tbl_emotions.date) = {$date_type}s.{$date_type} 
		GROUP BY 
			{$date_type} 
		ORDER BY 
			{$date_type} {$order_by};
		");
		foreach ($query->result() as $row)
		{
			$angry_percentage = number_format(floatval($row->angry_percentage), 1);
			$happy_percentage = number_format(floatval($row->happy_percentage), 1);
			$sad_percentage = number_format(floatval($row->sad_percentage), 1);
			if ($date_type == "year") {
				array_push($data,array(
					'date'=> $row->year,
					'angry'=> $row->angry,
					'happy'=> $row->happy,
					'sad'=> $row->sad,
					'angry_percentage'=> $angry_percentage,
					'happy_percentage'=> $happy_percentage,
					'sad_percentage'=> $sad_percentage,
				));
			} else {
				array_push($data,array(
					'date'=> $month[$row->month-1],
					'angry'=> $row->angry,
					'happy'=> $row->happy,
					'sad'=> $row->sad,
					'angry_percentage'=> $angry_percentage,
					'happy_percentage'=> $happy_percentage,
					'sad_percentage'=> $sad_percentage,
				));
			}
		}
	    
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
		
	}

	
	public function getEmQEmotions(){
		$query = $this->db->query("select tbl_emotions.emotion,tbl_emotions.question_id,tbl_questions.question_color, count(*) as emotion_count,COUNT(*) * 100.0 / SUM(COUNT(*)) OVER() as emotion_percentage from tbl_emotions INNER JOIN tbl_questions on tbl_emotions.question_id = tbl_questions.question_id where tbl_questions.question_group = 2 GROUP by tbl_emotions.emotion,tbl_emotions.question_id;");
		$this->output->set_content_type('application/json')->set_output(json_encode($query->result()));
		
	}

	
	public function getResQEmotions(){
		$query = $this->db->query("select tbl_emotions.emotion,tbl_emotions.question_id,tbl_questions.question_color, count(*) as emotion_count,COUNT(*) * 100.0 / SUM(COUNT(*)) OVER() as emotion_percentage from tbl_emotions INNER JOIN tbl_questions on tbl_emotions.question_id = tbl_questions.question_id where tbl_questions.question_group = 3 GROUP by tbl_emotions.emotion,tbl_emotions.question_id;");
		$this->output->set_content_type('application/json')->set_output(json_encode($query->result()));
		
	}

	
	public function getLpQEmotions(){
		$query = $this->db->query("select tbl_emotions.emotion,tbl_emotions.question_id,tbl_questions.question_color, count(*) as emotion_count,COUNT(*) * 100.0 / SUM(COUNT(*)) OVER() as emotion_percentage from tbl_emotions INNER JOIN tbl_questions on tbl_emotions.question_id = tbl_questions.question_id where tbl_questions.question_group = 4 GROUP by tbl_emotions.emotion,tbl_emotions.question_id;");
		$this->output->set_content_type('application/json')->set_output(json_encode($query->result()));
		
	}




	public function dashboard()
	{
		$data['page'] = 'Dashboard';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	}

	public function accessibility()
	{
		$data['page'] = 'Accessibility';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/accessibility');
		$this->load->view('templates/footer');
	}

	public function empathy()
	{
		$data['page'] = 'Empathy';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/empathy');
		$this->load->view('templates/footer');
	}

	public function responsetime()
	{
		$data['page'] = 'Response Time';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/responsetime');
		$this->load->view('templates/footer');
	}

	public function loyalprograms()
	{
		$data['page'] = 'Accessibility';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/loyalprograms');
		$this->load->view('templates/footer');
	}
	
	public function archive()
	{
		$data['page'] = 'Accessibility';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/archive');
		$this->load->view('templates/footer');
	}

	public function profile(){

		$this->db->where('user_type',0);
		$res = $this->db->get('tbl_users');
		$data['admin'] = $res->row_array();
		
		$data['page'] = 'Profile';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/profile',$data);
		$this->load->view('templates/footer');
	}

	public function changepass(){
		$data = array(
			'pass' => sha1($this->input->post("newpass")),
			'cpass'=>$this->input->post("newpass")
	
		);

		$this->db->where('user_id',$this->input->post('uid'));
    	

		$res = $this->db->update('tbl_users',$data);
		if ($res) {
			$this->output->set_content_type('application/json')->set_output(json_encode(true));
		} else {
			$this->output->set_content_type('application/json')->set_output(json_encode(false));
		}

	}

	



	//CRUD
	public function addquestion()
	{
// 		$rowcount = $this->getrowcount($this->input->post("qgroup"));
// 		$color = "";

// 		switch ($rowcount) {
// 			case 0:
// 				$color = "#450b5a";
// 				break;
// 			case 1:
// 				$color = "#209f84";
// 				break;
// 			case 2:
// 				$color = "#2781d5";
// 				break;
// 			case 3:
// 				$color = "#ff5c00";
// 				break;
// 			case 4:
// 				$color = "#f72b50";
// 				break;
// 			default:
// 				$this->output->set_content_type('application/json')->set_output(json_encode(false));
// 				return;
				
// 			}

// 			$qarray = array(
// 				'question_text' => $this->input->post("qtext"),
// 				'question_group'=> $this->input->post("qgroup"),
// 				'question_color'=> $color,
// 				'created_date' => date("Y-m-d")
// 			);
			
// 			$res = $this->db->insert('tbl_questions', $qarray);

// 			if ($res) {
// 				$this->output->set_content_type('application/json')->set_output(json_encode(true));
// 			} 

        // $rowcount = $this->getrowcount($this->input->post("qgroup"));
        // $color = "";
    
        // switch ($rowcount) {
        //     case 0:
        //         $color = "#450b5a";
        //         break;
        //     case 1:
        //         $color = "#209f84";
        //         break;
        //     case 2:
        //         $color = "#2781d5";
        //         break;
        //     case 3:
        //         $color = "#ff5c00";
        //         break;
        //     case 4:
        //         $color = "#f72b50";
        //         break;
        // }
        
        $colors = array("#450b5a","#209f84","#2781d5","#ff5c00","#f72b50","#392540");
        $key = array_rand($colors);
        
    
        $qarray = array(
            'question_text' => $this->input->post("qtext"),
            'question_group'=> $this->input->post("qgroup"),
            'question_color'=> $colors[$key],
            'created_date' => date("Y-m-d")
        );
        
        $res = $this->db->insert('tbl_questions', $qarray);
    
        if ($res) {
            $this->output->set_content_type('application/json')->set_output(json_encode(true));
        }
	}
	
	public function getMquestions($id){
		header('Access-Control-Allow-Origin: *');

		$this->db->where('question_group', $id);
		$this->db->where('archived', 0);
		$this->db->order_by('question_id', 'asc');
		$res = $this->db->get('tbl_questions'); 	
		$data = array();
		foreach ($res->result() as $row)
			{
					array_push($data,array(
						'question_id'=> $row->question_id,
						'question_text'=> $row->question_text,
						'question_group'=> $row->question_group,
						'question_color'=>$row->question_color,
						'comment'=> ""
					));
			}


		$this->output->set_content_type('application/json')->set_output(json_encode($data));

	}

	public function getquestions($id){
		header('Access-Control-Allow-Origin: *');

		$this->db->where('question_group', $id);
		$this->db->where('archived', 0);
		$this->db->order_by('question_id', 'asc');
		$res = $this->db->get('tbl_questions');
		$data = array();
		foreach ($res->result() as $row)
		{
			$emotion = $this->db->query("
			SELECT emotion,
			COUNT(*) AS emotion_count,
			COUNT(*) * 100.0 / SUM(COUNT(*)) OVER() as emotion_percentage
			FROM tbl_emotions
			WHERE question_id = $row->question_id
			GROUP BY emotion;
			");
			$angry_percentage = 0.0;
			$happy_percentage = 0.0;
			$sad_percentage = 0.0;
			$angry_count = 0;
			$happy_count = 0;
			$sad_count = 0;
		    foreach ($emotion->result() as $emo) {
		        if ($emo->emotion == "angry") {
		            $angry_percentage = $emo->emotion_percentage;
		            $angry_count = $emo->emotion_count;
		        }
	            else if ($emo->emotion == "happy") {
	                $happy_percentage = $emo->emotion_percentage;
	                $happy_count = $emo->emotion_count;
	            }
	            else if ($emo->emotion == "sad") {
	                $sad_percentage = $emo->emotion_percentage;
	                $sad_count = $emo->emotion_count;
	            }
		    }
			array_push($data,array(
				'question_id'=> $row->question_id,
				'question_text'=> $row->question_text,
				'question_group'=> $row->question_group,
				'question_color'=> $row->question_color,
				'comment'=> "",
				'emotion_angry'=> $angry_percentage,
				'emotion_happy'=> $happy_percentage,
				'emotion_sad'=> $sad_percentage,
				'emotion_angry_count'=> $angry_count,
				'emotion_happy_count'=> $happy_count,
				'emotion_sad_count'=> $sad_count,
			));
		}


		$this->output->set_content_type('application/json')->set_output(json_encode($data));

	}
	
	public function archivequestion() {
        $question_id = $this->input->post("question_id");
    
        $data = array(
            'archived' => 1
        );
    
        $this->db->where('question_id', $question_id);
        $this->db->update('tbl_questions', $data);
        
        
    
        if ($this->db->affected_rows() > 0) {
            $this->output->set_content_type('application/json')->set_output(json_encode(true));
        } else {
            $this->output->set_content_type('application/json')->set_output(json_encode(false));
        }
    }
    
    public function getarchivequestion() {
      header('Access-Control-Allow-Origin: *');
      
      $this->db->where('archived', 1);
      $this->db->order_by('question_id', 'asc');
      $res = $this->db->get('tbl_questions');
      $data = array();
      
      foreach ($res->result() as $row) {
        $emotion = $this->db->query("
        SELECT emotion,
        COUNT(*) AS emotion_count,
        COUNT(*) * 100.0 / SUM(COUNT(*)) OVER() as emotion_percentage
        FROM tbl_emotions
        WHERE question_id = $row->question_id
        GROUP BY emotion;
        ");
        $angry_percentage = 0.0;
        $happy_percentage = 0.0;
        $sad_percentage = 0.0;
        $angry_count = 0;
        $happy_count = 0;
        $sad_count = 0;
        foreach ($emotion->result() as $emo) {
          if ($emo->emotion == "angry") {
            $angry_percentage = $emo->emotion_percentage;
            $angry_count = $emo->emotion_count;
          }
          else if ($emo->emotion == "happy") {
            $happy_percentage = $emo->emotion_percentage;
            $happy_count = $emo->emotion_count;
          }
          else if ($emo->emotion == "sad") {
            $sad_percentage = $emo->emotion_percentage;
            $sad_count = $emo->emotion_count;
          }
        }
        array_push($data,array(
          'question_id' => $row->question_id,
          'question_text' => $row->question_text,
          'question_group' => $row->question_group,
          'question_color' => $row->question_color,
          'comment' => "",
          'emotion_angry' => $angry_percentage,
          'emotion_happy' => $happy_percentage,
          'emotion_sad' => $sad_percentage,
          'emotion_angry_count' => $angry_count,
          'emotion_happy_count' => $happy_count,
          'emotion_sad_count' => $sad_count,
        ));
      }
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }







	
// 	public function getRawEmotionCount($ids){
// 		header('Access-Control-Allow-Origin: *');

// 		$this->db->where('question_group', $ids);
// 		$this->db->order_by('question_id', 'asc');
// 		$res = $this->db->get('tbl_questions');
// 		$data = array();
// 		foreach ($res->result() as $row)
// 		{
// 			$emotion = $this->db->query("
// 			SELECT emotion,
// 			COUNT(*) AS emotion_count
// 			FROM tbl_emotions
// 			WHERE question_id = $row->question_id
// 			GROUP BY emotion;
// 			");
// 			$angry = 0.0;
// 			$happy = 0.0;
// 			$sad = 0.0;
// 		    foreach ($emotion->result() as $emo) {
//                 if ($emo->emotion == "angry")
//                     $angry = $emo->emotion_count;
//                 else if ($emo->emotion == "happy")
//                     $happy = $emo->emotion_count;
//                 else if ($emo->emotion == "sad")
//                     $sad = $emo->emotion_count;
//             }
// 			array_push($data,array(
//                 'question_id'=> $row->question_id,
//                 'question_text'=> $row->question_text,
//                 'question_group'=> $row->question_group,
//                 'question_color'=> $row->question_color,
//                 'comment'=> "",
//                 'emotion_angry'=> $angry,
//                 'emotion_happy'=> $happy,
//                 'emotion_sad'=> $sad,
//                 'emotion_count' => $emo->emotion_count,
//             ));
// 		}


// 		$this->output->set_content_type('application/json')->set_output(json_encode($data));

// 	}


	public function getrowcount($qroup)
	{
		$this->db->where("question_group", $qroup);
		$res = $this->db->get("tbl_questions");
		return $res->num_rows();
	}


	public function signup(){
		$userdata = file_get_contents("php://input");
		$data = json_decode($userdata,true);

		$udata = array(
			'fullname'=> $data['fullname'],
			'email'=> $data['email'],
			'pass'=> sha1($data['password']),
			'cpass'=> $data['password'],
			'user_type' => 1
		);

		$res = $this->db->insert('tbl_users', $udata);
		if ($res) {
			$this->output->set_content_type('application/json')->set_output(json_encode(true));
		} else {
			$this->output->set_content_type('application/json')->set_output(json_encode(false));
		}

	}


	public function loginCheck(){
		$userdata = file_get_contents("php://input");
		$data = json_decode($userdata,true);

		$this->db->where('email', $data['email']);
		$this->db->where('pass', sha1($data['password']));
		$res = $this->db->get('tbl_users');
		if($res->num_rows() == 1){
			$this->output->set_content_type('application/json')->set_output(json_encode($res->row_array()));
	}else{
		$this->output->set_content_type('application/json')->set_output(json_encode(false));
	}

	}


	public function editquestion(){
		$data = array(
			'question_text' => $this->input->post("qtext"),
	
		);

		$this->db->where('question_id',$this->input->post('qid'));
    	$this->db->where('question_group', $this->input->post('qgroup'));

		$res = $this->db->update('tbl_questions',$data);
		if ($res) {
			$this->output->set_content_type('application/json')->set_output(json_encode(true));
		} else {
			$this->output->set_content_type('application/json')->set_output(json_encode(false));
		}
		
	}


	public function deletequestion(){
		$this->db->where('question_id', $this->input->post('qid'));
		$res = $this->db->delete('tbl_questions');
		if ($res) {
			$this->output->set_content_type('application/json')->set_output(json_encode(true));
		} else {
			$this->output->set_content_type('application/json')->set_output(json_encode(false));
		}
	}

	public function get_users()
	{
		$this->db->order_by('user_id', 'desc');
		$res = $this->db->get('tbl_users');
		$this->output->set_content_type('application/json')->set_output(json_encode($res->result_array()));
	}

	public function logout()
	{
		redirect('/');
	}

	public function admin_login()
	{
		$uname = $this->input->post('uname');
		$pass = $this->input->post('pass');

		if ($uname == 'admin' && $pass == 'admin123') {
			$this->session->set_flashdata('message', 'Login Successfully!');

			redirect('dashboard');
		} else {
			$this->session->set_flashdata('message', 'Login Credentials are invalid! Please contact the administrator!');
			redirect('/');
		}
	}
}

/* End of file Administrator.php */
/* Location: ./application/controllers/Administrator.php */