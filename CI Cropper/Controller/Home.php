<?php defined("BASEPATH") OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

		public function index(){

			$this->load->view('ci_cropper');
		}
	public function crop_img(){

		            
		                             
				$base64_img = $this->input->post('slider_image');
				$base64_img2 =$this->input->post('image');
	

				$file_path='uploads/category/';
				$file_name="Ci_cropper";    

		        $img_name=$this->cropper_store($base64_img,$file_path,$file_name);
		        $img_name2=$this->cropper_store($base64_img2,$file_path,$file_name);
		         print_r($img_name); 
		         print_r($img_name2);
		         dd('end'); 
		    	  

		    }

		    
		        public function cropper_store($base64_img,$file_path,$file_name)
		        { 

		              
		               $image = $this->generateImage($base64_img,$file_name,$file_path);

		               $max_width = 1920;
		               list($txt, $ext) = explode(".", $image);
		               $filePath = $file_path.$image;

		           
		               $width = $this->getWidth($filePath);
		               $height = $this->getHeight($filePath);

		               if ($width > $max_width) {

		                   $scale = $max_width/$width;
		                   $uploaded = $this->resizeImage($filePath,$width,$height,$scale, $ext);

		               } else {

		                   $scale = 1;
		                   $uploaded = $this->resizeImage($filePath,$width,$height,$scale, $ext);

		               } 
		                 
		               return $image;
		                
		           }


		        public function generateImage($img,$file_name,$file_path)
		        {
		           $folderPath = $file_path;
		           $image_parts = explode(";base64,", $img);


		           $image_type_aux = explode("image/", $image_parts[0]);
		           $image_type = $image_type_aux[1];
		           $image_base64 = base64_decode($image_parts[1]);
		     
		           $file_name = $file_name.time().'.'.$image_type; 
		           $file =$folderPath.$file_name;
		        

		           file_put_contents($file,$image_base64);
		           return $file_name;

		           }


		        public function resizeImage($image,$width,$height,$scale, $ext) {
		            $newImageWidth = ceil($width * $scale);
		            $newImageHeight = ceil($height * $scale);
		            $newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
		            switch ($ext) {
		                case 'jpg':
		                case 'jpeg':
		                    $source = imagecreatefromjpeg($image);
		                    break;
		                case 'gif':
		                    $source = imagecreatefromgif($image);
		                    break;
		                case 'png':
		                    $source = imagecreatefrompng($image);
		                    break;
		                default:
		                    $source = false;
		                    break;
		            }   
		            imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
		            imagejpeg($newImage,$image,90);
		            chmod($image, 0777);
		            return $image;
		        }

		        /*  Function to get image height. */
		        public function getHeight($image) {
		            $sizes = getimagesize($image);
		            $height = $sizes[1];
		            return $height;
		        }

		        /* Function to get image width */
		        public function getWidth($image) {
		            $sizes = getimagesize($image);
		            $width = $sizes[0];
		            return $width;
		       }













}