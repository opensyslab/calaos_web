
<!DOCTYPE HTML>
<html class="fuelux" >
  <head>
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Calaos  Installation</title>
    <meta name="description" content="Calaos Installation">
    <!-- end: Meta -->

    
    <!-- start: CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/fuelux.css" rel="stylesheet">

    <!-- end: CSS -->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- end: Favicon -->

    <body>
      <!-- start: Header -->
      <div class="navbar navbar-inverse">
        <div class="container-fluid">
	  <a class="brand" href="index.php" ><img alt="calaos" src="assets/img/logo_calaos.png"></a>
        </div>
      </div>
      <hr>

      <!-- start: Header -->
      <div class="container-fluid">
        <div class="row-fluid">

          <div class="well wizard-example">
            <div id="MyWizard" class="wizard">
	      <ul class="steps">
	        <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Step 1<span class="chevron"></span></li>
	        <li data-target="#step2"><span class="badge">2</span>Step 2<span class="chevron"></span></li>
	        <li data-target="#step3"><span class="badge">3</span>Step 3<span class="chevron"></span></li>
	        <li data-target="#step4"><span class="badge">4</span>Step 4<span class="chevron"></span></li>
	        <li data-target="#step5"><span class="badge">5</span>Step 5<span class="chevron"></span></li>
	      </ul>
	      <div class="actions">
		<button class="btn btn-prev"> <i class="icon-arrow-left"></i>Prev</button>
		<button class="btn btn-next" data-last="Finish">Next<i class="icon-arrow-right"></i></button>
	      </div>
            </div>
            <div class="step-content">
              <hr>
              <!-- ************************************************************************************  -->
	      <div class="step-pane active" id="step1">
                <h1>TimeZone</h1>
                <hr>
                <div id="timezone-picker">
                  <img id="timezone-image" src="assets/img/world800.png" width=800" height="600" usemap="#timezone-map" />
                </div>
              </div>
              <!-- ************************************************************************************  -->
	      <div class="step-pane" id="step2">
                <h1>Hostname</h1>
                <hr>
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="hostname">Hostname</label>
                    <div class="controls">
                      <input type="text" id="inputHostname" placeholder="Hostname">
                    </div>
                  </div>
                </form>
              </div>
              <!-- ************************************************************************************  -->
	      <div class="step-pane" id="step3">
                  <h1><img alt="calaos-icon" width=92 height=92 src="assets/img/calaosicon.png" class="img-rounded">Calaos</h1>
                <hr>
                <form class="form-horizontal">
                  <label class="checkbox">
                    <input type="checkbox" value="1">
                          Enable Calaos Server
                  </label>
                  
                  <div class="control-group">
                    <label class="control-label" for="inputUsername">Username</label>
                    <div class="controls">
                      <input type="text" id="inputUsername" placeholder="Username">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputPassword" placeholder="Password">
                    </div>
                  </div>
                  
                </form>
                <form class="form-horizontal">
                  <label class="checkbox">
                    <input type="checkbox" value="1">
                          Enable Calaos Web
                  </label>
                </form>

                <form class="form-horizontal">
                  <label class="checkbox">
                    <input type="checkbox" value="1">
                          Enable Calaos Home
                  </label>
                  
                  <div class="control-group">
                    <input type="checkbox" value="1">
                          Display mouse pointer
                  </div>
                  
                </form>

              </div>
              <!-- ************************************************************************************  -->
	      <div class="step-pane" id="step4">
                  <h1><img alt="logitech-icon" width=92 height=92 src="assets/img/logitechmediaserver.png" class="img-rounded">Squeeze Box</h1>
                <hr>
                <form class="form-horizontal">
                  <label class="checkbox">
                    <input type="checkbox" value="1">
                          Enable Squeezecenter
                  </label>

                  <form class="form-horizontal">
                    <label class="checkbox">
                      <input type="checkbox" value="1">
                          Enable Squeezeplay
                    </label>
                    
                    <div class="control-group">
                      <label class="control-label" for="inputSqueezeplayName">Name of squeezeplay element</label>
                      <div class="controls">
                        <input type="text" id="inputSqueezeplayName" placeholder="Name">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="checkbox">
                        <input type="checkbox" value="1">
                          Enable Squeezeplay Interface
                      </label>
                    </div>
                  </form>
                  <div class="round-box">
                     List of music sources
                    <img id="music_source_loading" alt="loading" src="assets/img/ajax-loader.gif" />

                    <div id="music_source_list">

                    </div>
                  </div>
              </div>
              <!-- ************************************************************************************  -->
	      <div class="step-pane" id="step5">
                <div>
                  <h1><img alt="calaos" width=92 height=92 src="assets/img/airplayIcon.png" class="img-rounded">Airplay</h1>
                </div>
                <hr>
                <form class="form-horizontal">
                  <label class="checkbox">
                    <input type="checkbox" value="1">
                          Enable Airplay
                  </label>

              </div>
              <!-- ************************************************************************************  -->
            </div>

          </div>
        </div>
      </div>


      <!-- Le javascript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="assets/js/jquery-1.8.2.min.js"></script>
      <script src="assets/wizard.js"></script>
      <script src="assets/js/squeezebox-musicsource.js"></script>
    </body>
</html>