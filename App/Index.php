<!DOCTYPE html>
<html lang="en">
    <head>
        

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="./Content/CSS/Bootstrap.css" rel="stylesheet" type="text/css"/>
        <!-- TO DO rh: bundling  minification in release mode!-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="./Content/js/bootstrap.min.js"></script>
        <script src="./Content/js/adapter.js" ></script>
        <script src="./Content/js/quagga.js" ></script>
        <script src="./Content/js/barcode_scanner_app.js" ></script>

        <style type="text/css">

            #interactive.viewport {
                position: relative;
            }

            #interactive.viewport > canvas, #interactive.viewport > video {
                max-width: 100%;
                width: 100%;
            }

            canvas.drawing, canvas.drawingBuffer {
                position: absolute;
                left: 0;
                top: 0;
            }
        </style>
        <title>Recyling Rush</title>
    </head>
    <body>

        <section id="container" class="container">
            <div id="interactive" class="viewport"></div>
            <div id="result">
                
            </div>
            <div class="controls">
                <fieldset class="input-group">
                    <button class="stop">Stop</button>
                </fieldset>
                <p>temporarily showing all all the quagga JS settings until it is clear what the optimum settings are </p>
                <fieldset class="reader-config-group">
                    <label>
                        <span>Barcode-Type</span>
                        <select name="decoder_readers">
                            <option value="code_128">Code 128</option>
                            <option value="code_39">Code 39</option>
                            <option value="code_39_vin">Code 39 VIN</option>
                            <option value="ean" selected="selected">EAN</option>
                            <option value="ean_extended">EAN-extended</option>
                            <option value="ean_8">EAN-8</option>
                            <option value="upc">UPC</option>
                            <option value="upc_e">UPC-E</option>
                            <option value="codabar">Codabar</option>
                            <option value="i2of5">I2of5</option>
                            <option value="2of5">Standard 2 of 5</option>
                            <option value="code_93">Code 93</option>
                        </select>
                    </label>
                    <label>
                        <span>Resolution (long side)</span>
                        <select name="input-stream_constraints">
                            <option value="320x240">320px</option>
                            <option selected="selected" value="640x480">640px</option>
                            <option value="800x600">800px</option>
                            <option value="1280x720">1280px</option>
                            <option value="1600x960">1600px</option>
                            <option value="1920x1080">1920px</option>
                        </select>
                    </label>
                    <label>
                        <span>Patch-Size</span>
                        <select name="locator_patch-size">
                            <option value="x-small">x-small</option>
                            <option value="small">small</option>
                            <option selected="selected" value="medium">medium</option>
                            <option value="large">large</option>
                            <option value="x-large">x-large</option>
                        </select>
                    </label>
                    <label>
                        <span>Half-Sample</span>
                        <input type="checkbox" checked="checked" name="locator_half-sample" />
                    </label>
                    <label>
                        <span>Workers</span>
                        <select name="numOfWorkers">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option selected="selected" value="4">4</option>
                            <option value="8">8</option>
                        </select>
                    </label>
                    <label>
                        <span>Camera</span>
                        <select name="input-stream_constraints" id="deviceSelection">
                        </select>
                    </label>
                    <label style="display: none">
                        <span>Zoom</span>
                        <select name="settings_zoom"></select>
                    </label>
                    <label style="display: none">
                        <span>Torch</span>
                        <input type="checkbox" name="settings_torch" />
                    </label>
                </fieldset>
            </div>
            <div id="result_strip">
                <ul class="thumbnails"></ul>
            </div>
            
            <!-- Manual barcode input -->
            <form method="get" action="result.php">
                <input type="input" name="barcode" value="0">
                <input type="submit" value="Check Barcode">
            </form>
            
        </section>
         <!-- Modal -->
        <div class="modal fade" id="resultModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <!-- to be set from Javascript !-->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        
    </body>
</html>
