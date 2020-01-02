
<!-- Content Wrapper. Contains page content -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/cropper/css/cropper.css')}}">
<link rel="stylesheet" href="{{asset('assets/cropper/css/main.css')}}">

<script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- Main content -->
<section class="content">
  <section class="content-header">
    <h1>
    Ci Cropper
    <small>Image</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Cropper</li>
    </ol>
  </section>
  
  <!-- /.row (main row) -->
  <div class="panel panel-info">
    <div class="panel-heading">CI Cropper <a href="#" class="pull-right" >Back</a> </div>
    <div class="panel-body">
      
      <div  class="row" >
        <div class="col-md-2"> </div>
        <div class="col-md-8">
          <br>
          <form action="{{url('cropimg')}}" method="post"  id="form_id" enctype="multipart/form-data" >
            <table class="table responsive form-group">
              
              
              <tr> <td><b>Slider Image: </b></td>
              <td>
                <img id="preview_baner_img1" src="" class="img-responsive" style="width:120px;" >
                <input type="hidden" value="" name="slider_image" id="banner_img1"><!-- id image set with Number  -->

                <div class="docs-toggles">
                  <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                    <label class="btn  btn-info">
                      
                      <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="2.461538461538462"> <!-- set value=height/width  -->
                      
                      <span  onclick="fun_set_id(1)" data-toggle="modal" data-target="#banner_img1_modal" class="docs-tooltip"  data-animation="false" title="" data-original-title="aspectRatio: 192/78"><!-- set ratio  -->
                        Upload Image
                      </span>
                   
                    </label>
                  </div>
                </div>
                <a  style="display: none;" class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
              </td>
            </tr>
            <tr>
              <td></td>
              <td> <input type="submit" name="submit"></td>
            </tr>

          </table>
        </form>
      </div>
    </div>
  </div></div>
</section>
<!-- /.content -->
</div>

<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<div id="banner_img1_modal" class="modal fade modal-lg" role="dialog" style="width:100%;">
                  <div class="modal-dialog" style="width:100%;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5>Cropper</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
 <div class="container">
          <div class="main_cropper_box" style="width:100%; margin:auto;">
            <div class="col-md-12">
              <!-- <h3>Demo:</h3> -->
              <div class="img-container">
               <img id="image" src="" alt="Picture">
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12 docs-buttons">
                <!-- <h3>Toolbar:</h3> -->
                
                <label class="btn btn-success btn-upload" for="inputImage" title="Upload image file">
                  <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Import image">
                    
                    Import Image
                  </span>
                </label>
                <button id="crop_btn" type="button"  class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Crop">
                  Crop
                </span>
                </button>
                <span style="color:blue;">Image size should be 720x380</span>
                <button class="btn btn-primary pull-right" data-toggle="tooltip" title="Go Back" onclick="goBack()">Go Back</button>

               
                  
                  </div>
                  <!-- /.docs-buttons -->
                </div>
              </div>
        </div>

        </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
          
          </div>
          </div>
          </div> 
          </div>   


<script src="{{asset('assets/cropper/js/cropper.js')}}"></script>
<script src="{{asset('assets/cropper/js/jquery-cropper.js')}}"></script>
<script src="{{asset('assets/cropper/js/main.js')}}"></script>



<script type="text/javascript">
  
  
  var fun_set_id=function(id){

    $("#crop_btn").attr('data-crop_id',id);
  }
</script>