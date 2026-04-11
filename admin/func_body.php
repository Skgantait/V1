
            <!--========== FUNCTION BODY ==========-->


            <div class="row clearfix">

                <div class="funcname">
                    <div class="section-heading">
                        <h3 id="main-categori" onclick="getCategory()"><?php echo ($_SESSION['function']['main_categori'] == '') ? 'Category' : $_SESSION['function']['main_categori']; ?></h3>
                        <h4 id="name-val" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['name_val'] == '') ? 'name-val' : $_SESSION['function']['name_val']; ?></h4>
                        <p id="sort-description" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['sort_description'] == '') ? 'sort-description' : $_SESSION['function']['sort_description']; ?></p>
                        <input type="hidden" id="sub-catagori"  value="">
                    </div>                    
                </div>
                
                <div class="funcdec">
                    <h3>SYNTAX</h3>
                    <div class="funcseg">
                        <a id="syntax0" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax0'] == '') ? 'syntax0' : $_SESSION['function']['syntax0']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description0" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description0'] == '') ? 'description0' : $_SESSION['function']['description0']; ?></p>
                        </div>
                        
                    </div>
                    <div class="funcseg">
                        <a id="syntax1" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax1'] == '') ? 'syntax1' : $_SESSION['function']['syntax1']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description1" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description1'] == '') ? 'description1' : $_SESSION['function']['description1']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax2" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax2'] == '') ? 'syntax2' : $_SESSION['function']['syntax2']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description2" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description2'] == '') ? 'description2' : $_SESSION['function']['description2']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax3" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax3'] == '') ? 'syntax3' : $_SESSION['function']['syntax3']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description3" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description3'] == '') ? 'description3' : $_SESSION['function']['description3']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax4" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax4'] == '') ? 'syntax4' : $_SESSION['function']['syntax4']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description4" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description4'] == '') ? 'description4' : $_SESSION['function']['description4']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax5" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax5'] == '') ? 'syntax5' : $_SESSION['function']['syntax5']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description5" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description5'] == '') ? 'description5' : $_SESSION['function']['description5']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax6" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax6'] == '') ? 'syntax6' : $_SESSION['function']['syntax6']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description6" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description6'] == '') ? 'description6' : $_SESSION['function']['description6']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax7" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax7'] == '') ? 'syntax7' : $_SESSION['function']['syntax7']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description7" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description7'] == '') ? 'description7' : $_SESSION['function']['description7']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax8" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax8'] == '') ? 'syntax8' : $_SESSION['function']['syntax8']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description8" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description8'] == '') ? 'description8' : $_SESSION['function']['description8']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax9" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax9'] == '') ? 'syntax9' : $_SESSION['function']['syntax9']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description9" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description9'] == '') ? 'description9' : $_SESSION['function']['description9']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax10" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax10'] == '') ? 'syntax10' : $_SESSION['function']['syntax10']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description10" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description10'] == '') ? 'description10' : $_SESSION['function']['description10']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax11" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax11'] == '') ? 'syntax11' : $_SESSION['function']['syntax11']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description11" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description11'] == '') ? 'description11' : $_SESSION['function']['description11']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax12" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax12'] == '') ? 'syntax12' : $_SESSION['function']['syntax12']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description12" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description12'] == '') ? 'description12' : $_SESSION['function']['description12']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax13" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax13'] == '') ? 'syntax13' : $_SESSION['function']['syntax13']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description13" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description13'] == '') ? 'description13' : $_SESSION['function']['description13']; ?></p>
                        </div>
                    </div>
                    <div class="funcseg">
                        <a id="syntax14" href="javascript:" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['syntax14'] == '') ? 'syntax14' : $_SESSION['function']['syntax14']; ?></a>
                        <div class="funcsegdesc">
                            <p id="description14" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['description14'] == '') ? 'description14' : $_SESSION['function']['description14']; ?></p>
                        </div>
                    </div>

                    <hr>
                </div>
                
                <div class="funcdec">
                    <h3>INPUT ARGUMENTS</h3>
                    <div  class="funcseg">
                        <h4 id="input0" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input0'] == '') ? 'input0' : $_SESSION['function']['input0']; ?></h4> 
                        <h3 id="input-type0" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type0']; ?></h3>
                        <div id="input-desc0" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc0'] == '') ? 'input-desc0' : $_SESSION['function']['input_desc0']; ?>
                        </div>
                    </div>
                    <div  class="funcseg">
                        <h4 id="input1" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input1'] == '') ? 'input1' : $_SESSION['function']['input1']; ?></h4> 
                        <h3 id="input-type1" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type1']; ?></h3>
                        <div id="input-desc1" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc1'] == '') ? 'input-desc1' : $_SESSION['function']['input_desc1']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input2" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input2'] == '') ? 'input2' : $_SESSION['function']['input2']; ?></h4> 
                        <h3 id="input-type2" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type2']; ?></h3>
                        <div id="input-desc2" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc2'] == '') ? 'input-desc2' : $_SESSION['function']['input_desc2']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input3" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input3'] == '') ? 'input3' : $_SESSION['function']['input3']; ?></h4> 
                        <h3 id="input-type3" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type3']; ?></h3>
                        <div id="input-desc3" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc3'] == '') ? 'input-desc3' : $_SESSION['function']['input_desc3']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input4" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input4'] == '') ? 'input4' : $_SESSION['function']['input4']; ?></h4> 
                        <h3 id="input-type4" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type4']; ?></h3>
                        <div id="input-desc4" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc4'] == '') ? 'input-desc4' : $_SESSION['function']['input_desc4']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input5" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input5'] == '') ? 'input5' : $_SESSION['function']['input5']; ?></h4> 
                        <h3 id="input-type5" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type5']; ?></h3>
                        <div id="input-desc5" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc5'] == '') ? 'input-desc5' : $_SESSION['function']['input_desc5']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input6" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input6'] == '') ? 'input6' : $_SESSION['function']['input6']; ?></h4> 
                        <h3 id="input-type6" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type6']; ?></h3>
                        <div id="input-desc6" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc6'] == '') ? 'input-desc6' : $_SESSION['function']['input_desc6']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input7" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input7'] == '') ? 'input7' : $_SESSION['function']['input7']; ?></h4> 
                        <h3 id="input-type7" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type7']; ?></h3>
                        <div id="input-desc7" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc7'] == '') ? 'input-desc7' : $_SESSION['function']['input_desc7']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input8" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input8'] == '') ? 'input8' : $_SESSION['function']['input8']; ?></h4> 
                        <h3 id="input-type8" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type8']; ?></h3>
                        <div id="input-desc8" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc8'] == '') ? 'input-desc8' : $_SESSION['function']['input_desc8']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input9" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input9'] == '') ? 'input9' : $_SESSION['function']['input9']; ?></h4> 
                        <h3 id="input-type9" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type9']; ?></h3>
                        <div id="input-desc9" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc9'] == '') ? 'input-desc9' : $_SESSION['function']['input_desc9']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input10" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input10'] == '') ? 'input10' : $_SESSION['function']['input10']; ?></h4> 
                        <h3 id="input-type10" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type10']; ?></h3>
                        <div id="input-desc10" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc10'] == '') ? 'input-desc10' : $_SESSION['function']['input_desc10']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input11" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input11'] == '') ? 'input11' : $_SESSION['function']['input11']; ?></h4> 
                        <h3 id="input-type11" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type11']; ?></h3>
                        <div id="input-desc11" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc11'] == '') ? 'input-desc11' : $_SESSION['function']['input_desc11']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input12" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input12'] == '') ? 'input12' : $_SESSION['function']['input12']; ?></h4> 
                        <h3 id="input-type12" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type12']; ?></h3>
                        <div id="input-desc12" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc12'] == '') ? 'input-desc12' : $_SESSION['function']['input_desc12']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input13" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input13'] == '') ? 'input13' : $_SESSION['function']['input13']; ?></h4> 
                        <h3 id="input-type13" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type13']; ?></h3>
                        <div id="input-desc13" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc13'] == '') ? 'input-desc13' : $_SESSION['function']['input_desc13']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input14" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input14'] == '') ? 'input14' : $_SESSION['function']['input14']; ?></h4> 
                        <h3 id="input-type14" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type14']; ?></h3>
                        <div id="input-desc14" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc14'] == '') ? 'input-desc14' : $_SESSION['function']['input_desc14']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input15" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input15'] == '') ? 'input15' : $_SESSION['function']['input15']; ?></h4> 
                        <h3 id="input-type15" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type15']; ?></h3>
                        <div id="input-desc15" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc15'] == '') ? 'input-desc15' : $_SESSION['function']['input_desc15']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input16" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input16'] == '') ? 'input16' : $_SESSION['function']['input16']; ?></h4> 
                        <h3 id="input-type16" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type16']; ?></h3>
                        <div id="input-desc16" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc16'] == '') ? 'input-desc16' : $_SESSION['function']['input_desc16']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input17" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input17'] == '') ? 'input17' : $_SESSION['function']['input17']; ?></h4> 
                        <h3 id="input-type17" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type17']; ?></h3>
                        <div id="input-desc17" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc17'] == '') ? 'input-desc17' : $_SESSION['function']['input_desc17']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input18" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input18'] == '') ? 'input18' : $_SESSION['function']['input18']; ?></h4> 
                        <h3 id="input-type18" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type18']; ?></h3>
                        <div id="input-desc18" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc18'] == '') ? 'input-desc18' : $_SESSION['function']['input_desc18']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="input19" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['input19'] == '') ? 'input19' : $_SESSION['function']['input19']; ?></h4> 
                        <h3 id="input-type19" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['input_type19']; ?></h3>
                        <div id="input-desc19" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['input_desc19'] == '') ? 'input-desc19' : $_SESSION['function']['input_desc19']; ?>
                        </div>
                    </div>

                    <hr>
                </div>
                
                <div class="funcdec">
                    <h3>OUTPUT ARGUMENTS</h3>
                    <div  class="funcseg">
                        <h4 id="output0" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output0'] == '') ? 'output0' : $_SESSION['function']['output0']; ?></h4> 
                        <h3 id="output-type0" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type0']; ?></h3>
                        <div id="output-desc0" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc0'] == '') ? 'output-desc0' : $_SESSION['function']['output_desc0']; ?>
                        </div>
                    </div>
                    <div  class="funcseg">
                        <h4 id="output1" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output1'] == '') ? 'output1' : $_SESSION['function']['output1']; ?></h4> 
                        <h3 id="output-type1" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type1']; ?></h3>
                        <div id="output-desc1" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc1'] == '') ? 'output-desc1' : $_SESSION['function']['output_desc1']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output2" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output2'] == '') ? 'output2' : $_SESSION['function']['output2']; ?></h4> 
                        <h3 id="output-type2" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type2']; ?></h3>
                        <div id="output-desc2" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc2'] == '') ? 'output-desc2' : $_SESSION['function']['output_desc2']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output3" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output3'] == '') ? 'output3' : $_SESSION['function']['output3']; ?></h4> 
                        <h3 id="output-type3" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type3']; ?></h3>
                        <div id="output-desc3" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc3'] == '') ? 'output-desc3' : $_SESSION['function']['output_desc3']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output4" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output4'] == '') ? 'output4' : $_SESSION['function']['output4']; ?></h4> 
                        <h3 id="output-type4" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type4']; ?></h3>
                        <div id="output-desc4" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc4'] == '') ? 'output-desc4' : $_SESSION['function']['output_desc4']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output5" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output5'] == '') ? 'output5' : $_SESSION['function']['output5']; ?></h4> 
                        <h3 id="output-type5" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type5']; ?></h3>
                        <div id="output-desc5" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc5'] == '') ? 'output-desc5' : $_SESSION['function']['output_desc5']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output6" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output6'] == '') ? 'output6' : $_SESSION['function']['output6']; ?></h4> 
                        <h3 id="output-type6" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type6']; ?></h3>
                        <div id="output-desc6" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc6'] == '') ? 'output-desc6' : $_SESSION['function']['output_desc6']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output7" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output7'] == '') ? 'output7' : $_SESSION['function']['output7']; ?></h4> 
                        <h3 id="output-type7" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type7']; ?></h3>
                        <div id="output-desc7" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc7'] == '') ? 'output-desc7' : $_SESSION['function']['output_desc7']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output8" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output8'] == '') ? 'output8' : $_SESSION['function']['output8']; ?></h4> 
                        <h3 id="output-type8" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type8']; ?></h3>
                        <div id="output-desc8" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc8'] == '') ? 'output-desc8' : $_SESSION['function']['output_desc8']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output9" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output9'] == '') ? 'output9' : $_SESSION['function']['output9']; ?></h4> 
                        <h3 id="output-type9" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type9']; ?></h3>
                        <div id="output-desc9" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc9'] == '') ? 'output-desc9' : $_SESSION['function']['output_desc9']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output10" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output10'] == '') ? 'output10' : $_SESSION['function']['output10']; ?></h4> 
                        <h3 id="output-type10" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type10']; ?></h3>
                        <div id="output-desc10" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc10'] == '') ? 'output-desc10' : $_SESSION['function']['output_desc10']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output11" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output11'] == '') ? 'output11' : $_SESSION['function']['output11']; ?></h4> 
                        <h3 id="output-type11" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type11']; ?></h3>
                        <div id="output-desc11" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc11'] == '') ? 'output-desc11' : $_SESSION['function']['output_desc11']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output12" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output12'] == '') ? 'output12' : $_SESSION['function']['output12']; ?></h4> 
                        <h3 id="output-type12" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type12']; ?></h3>
                        <div id="output-desc12" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc12'] == '') ? 'output-desc12' : $_SESSION['function']['output_desc12']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output13" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output13'] == '') ? 'output13' : $_SESSION['function']['output13']; ?></h4> 
                        <h3 id="output-type13" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type13']; ?></h3>
                        <div id="output-desc13" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc13'] == '') ? 'output-desc13' : $_SESSION['function']['output_desc13']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output14" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output14'] == '') ? 'output14' : $_SESSION['function']['output14']; ?></h4> 
                        <h3 id="output-type14" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type14']; ?></h3>
                        <div id="output-desc14" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc14'] == '') ? 'output-desc14' : $_SESSION['function']['output_desc14']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output15" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output15'] == '') ? 'output15' : $_SESSION['function']['output15']; ?></h4> 
                        <h3 id="output-type15" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type15']; ?></h3>
                        <div id="output-desc15" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc15'] == '') ? 'output-desc15' : $_SESSION['function']['output_desc15']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output16" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output16'] == '') ? 'output16' : $_SESSION['function']['output16']; ?></h4> 
                        <h3 id="output-type16" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type16']; ?></h3>
                        <div id="output-desc16" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc16'] == '') ? 'output-desc16' : $_SESSION['function']['output_desc16']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output17" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output17'] == '') ? 'output17' : $_SESSION['function']['output17']; ?></h4> 
                        <h3 id="output-type17" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type17']; ?></h3>
                        <div id="output-desc17" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc17'] == '') ? 'output-desc17' : $_SESSION['function']['output_desc17']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output18" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output18'] == '') ? 'output18' : $_SESSION['function']['output18']; ?></h4> 
                        <h3 id="output-type18" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type18']; ?></h3>
                        <div id="output-desc18" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc18'] == '') ? 'output-desc18' : $_SESSION['function']['output_desc18']; ?>
                        </div>
                    </div>

                    <div  class="funcseg">
                        <h4 id="output19" onclick="inputSyntax(this)"><i class="ri-arrow-drop-right-fill"></i><?php echo ($_SESSION['function']['output19'] == '') ? 'output19' : $_SESSION['function']['output19']; ?></h4> 
                        <h3 id="output-type19" onclick="getData(this)">Data Types: <?php echo $_SESSION['function']['output_type19']; ?></h3>
                        <div id="output-desc19" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['output_desc19'] == '') ? 'output-desc19' : $_SESSION['function']['output_desc19']; ?>
                        </div>
                    </div>
                    <hr>
                </div>

                <div class="funcdec">
                    <h3>EXAMPLES</h3>

                    <ol>
                        <!--1st Example-->
                        <li id="exmp0" class="funcseg exmseg">
                            <h4 id="examples0" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples0'] == '') ? 'examples0' : $_SESSION['function']['examples0']; ?></h4>
                            <div id="ExampleDescription0" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription0'] == '') ? 'ExampleDescription0' : $_SESSION['function']['ExampleDescription0']; ?>
                            </div>
                        </li>

                        <!--2nd Example-->
                        <li  id="exmp1" class="funcseg exmseg">
                            <h4 id="examples1" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples1'] == '') ? 'examples1' : $_SESSION['function']['examples1']; ?></h4>
                            <div id="ExampleDescription1" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription1'] == '') ? 'ExampleDescription1' : $_SESSION['function']['ExampleDescription1']; ?>
                            </div>

                        </li>

                        <!--3rd Example-->
                        <li  id="exmp2" class="funcseg exmseg">
                            <h4 id="examples2" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples2'] == '') ? 'examples2' : $_SESSION['function']['examples2']; ?></h4>
                            <div id="ExampleDescription2" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription2'] == '') ? 'ExampleDescription2' : $_SESSION['function']['ExampleDescription2']; ?>
                            </div>
                        </li>

                        <!--3rd Example-->
                        <li  id="exmp3" class="funcseg exmseg">
                            <h4 id="examples3" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples3'] == '') ? 'examples3' : $_SESSION['function']['examples3']; ?></h4>
                            <div id="ExampleDescription3" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription3'] == '') ? 'ExampleDescription3' : $_SESSION['function']['ExampleDescription3']; ?>
                            </div>
                        </li>

                        <!--3rd Example-->
                        <li  id="exmp4" class="funcseg exmseg">
                            <h4 id="examples4" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples4'] == '') ? 'examples4' : $_SESSION['function']['examples4']; ?></h4>
                            <div id="ExampleDescription4" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription4'] == '') ? 'ExampleDescription4' : $_SESSION['function']['ExampleDescription4']; ?>
                            </div>
                        </li>

                        <!--3rd Example-->
                        <li  id="exmp5" class="funcseg exmseg">
                            <h4 id="examples5" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples5'] == '') ? 'examples5' : $_SESSION['function']['examples5']; ?></h4>
                            <div id="ExampleDescription5" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription5'] == '') ? 'ExampleDescription5' : $_SESSION['function']['ExampleDescription5']; ?>
                            </div>
                        </li>

                        <!--3rd Example-->
                        <li  id="exmp6" class="funcseg exmseg">
                            <h4 id="examples6" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples6'] == '') ? 'examples6' : $_SESSION['function']['examples6']; ?></h4>
                            <div id="ExampleDescription6" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription6'] == '') ? 'ExampleDescription6' : $_SESSION['function']['ExampleDescription6']; ?>
                            </div>
                        </li>

                        <!--3rd Example-->
                        <li  id="exmp7" class="funcseg exmseg">
                            <h4 id="examples7" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples7'] == '') ? 'examples7' : $_SESSION['function']['examples7']; ?></h4>
                            <div id="ExampleDescription7" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription7'] == '') ? 'ExampleDescription7' : $_SESSION['function']['ExampleDescription7']; ?>
                            </div>
                        </li>

                        <!--3rd Example-->
                        <li  id="exmp8" class="funcseg exmseg">
                            <h4 id="examples8" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples8'] == '') ? 'examples8' : $_SESSION['function']['examples8']; ?></h4>
                            <div id="ExampleDescription8" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription8'] == '') ? 'ExampleDescription8' : $_SESSION['function']['ExampleDescription8']; ?>
                            </div>
                            </div>
                        </li>

                        <!--3rd Example-->
                        <li  id="exmp9" class="funcseg exmseg">
                            <h4 id="examples9" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples9'] == '') ? 'examples9' : $_SESSION['function']['examples9']; ?></h4>
                            <div id="ExampleDescription9" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription9'] == '') ? 'ExampleDescription9' : $_SESSION['function']['ExampleDescription9']; ?>
                            </div>
                        </li>

                        <!--3rd Example-->
                        <li  id="exmp10" class="funcseg exmseg">
                            <h4 id="examples10" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples10'] == '') ? 'examples10' : $_SESSION['function']['examples10']; ?></h4>
                            <div id="ExampleDescription10" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription10'] == '') ? 'ExampleDescription10' : $_SESSION['function']['ExampleDescription10']; ?>
                            </div>
                        </li>

                        <!--3rd Example-->
                        <li  id="exmp11" class="funcseg exmseg">
                            <h4 id="examples11" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples11'] == '') ? 'examples11' : $_SESSION['function']['examples11']; ?></h4>
                            <div id="ExampleDescription11" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription11'] == '') ? 'ExampleDescription11' : $_SESSION['function']['ExampleDescription11']; ?>
                            </div>
                        </li>

                        <!--3rd Example-->
                        <li  id="exmp12" class="funcseg exmseg">
                            <h4 id="examples12" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples12'] == '') ? 'examples12' : $_SESSION['function']['examples12']; ?></h4>
                            <div id="ExampleDescription12" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription12'] == '') ? 'ExampleDescription12' : $_SESSION['function']['ExampleDescription12']; ?>
                            </div>
                        </li>

                        <!--3rd Example-->
                        <li  id="exmp13" class="funcseg exmseg">
                            <h4 id="examples13" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples13'] == '') ? 'examples13' : $_SESSION['function']['examples13']; ?></h4>
                            <div id="ExampleDescription13" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription13'] == '') ? 'ExampleDescription13' : $_SESSION['function']['ExampleDescription13']; ?>
                            </div>
                        </li>

                        <!--3rd Example-->
                        <li  id="exmp14" class="funcseg exmseg">
                            <h4 id="examples14" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['examples14'] == '') ? 'examples14' : $_SESSION['function']['examples14']; ?></h4>
                            <div id="ExampleDescription14" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['ExampleDescription14'] == '') ? 'ExampleDescription14' : $_SESSION['function']['ExampleDescription14']; ?>
                            </div>
                        </li>


                    </ol>

                    <hr>
                </div>



                <div class="funcdec" id="algo">
                    <h3>ALGORITHMS</h3>
                    <div class="funcseg">
                        <div id="algorithms" class="funcsegdesc"   onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['algorithms'] == '') ? 'algorithms' : $_SESSION['function']['algorithms']; ?>
                        </div>
                    </div>
                    <hr>
                </div>


                <div class="funcdec" style="display: none;">
                    <h3>API</h3>
                    <div class="funcseg">
                        <div id="api" class="funcsegdesc"  onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['api'] == '') ? 'api' : $_SESSION['function']['api']; ?>
                        </div>
                    </div>
                    <hr>
                </div>



                <div class="funcdec">
                    <h3>REFERENCES</h3>
                    <div class="funcseg">
                        <ol class="funcsegdesc"  >
                            <li id="references0" onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['references0'] == '') ? 'references0' : $_SESSION['function']['references0']; ?></li>
                            <li id="references1" onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['references1'] == '') ? 'references1' : $_SESSION['function']['references1']; ?></li>
                            <li id="references2" onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['references2'] == '') ? 'references2' : $_SESSION['function']['references2']; ?></li>
                            <li id="references3" onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['references3'] == '') ? 'references3' : $_SESSION['function']['references3']; ?></li>
                            <li id="references4" onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['references4'] == '') ? 'references4' : $_SESSION['function']['references4']; ?></li>
                            <li id="references5" onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['references5'] == '') ? 'references5' : $_SESSION['function']['references5']; ?></li>
                            <li id="references6" onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['references6'] == '') ? 'references6' : $_SESSION['function']['references6']; ?></li>
                            <li id="references7" onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['references7'] == '') ? 'references7' : $_SESSION['function']['references7']; ?></li>
                            <li id="references8" onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['references8'] == '') ? 'references8' : $_SESSION['function']['references8']; ?></li>
                            <li id="references9" onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['references9'] == '') ? 'references9' : $_SESSION['function']['references9']; ?></li>
                            <li id="references10" onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['references10'] == '') ? 'references10' : $_SESSION['function']['references10']; ?></li>
                            <li id="references11" onclick="getHTMLEditor(this)"><?php echo ($_SESSION['function']['references11'] == '') ? 'references11' : $_SESSION['function']['references11']; ?></li>
                        </ol>
                        
                    </div>
                    <hr>
                </div>



                <div class="funcdec">
                    <h3>SEE ALSO</h3>

                    <ul class="seealso">
                      <li class="see on"><a href="javascript:" id="link0" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['link0'] == '') ? 'link0' : $_SESSION['function']['link0']; ?></a></li>
                      <li class="see on"><a href="javascript:" id="link1" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['link1'] == '') ? 'link1' : $_SESSION['function']['link1']; ?></a></li>
                      <li class="see on"><a href="javascript:" id="link2" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['link2'] == '') ? 'link2' : $_SESSION['function']['link2']; ?></a></li>
                      <li class="see on"><a href="javascript:" id="link3" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['link3'] == '') ? 'link3' : $_SESSION['function']['link3']; ?></a></li>
                      <li class="see on"><a href="javascript:" id="link4" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['link4'] == '') ? 'link4' : $_SESSION['function']['link4']; ?></a></li>
                      <li class="see on"><a href="javascript:" id="link5" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['link5'] == '') ? 'link5' : $_SESSION['function']['link5']; ?></a></li>
                      <li class="see on"><a href="javascript:" id="link6" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['link6'] == '') ? 'link6' : $_SESSION['function']['link6']; ?></a></li>
                      <li class="see on"><a href="javascript:" id="link7" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['link7'] == '') ? 'link7' : $_SESSION['function']['link7']; ?></a></li>
                      <li class="see on"><a href="javascript:" id="link8" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['link8'] == '') ? 'link8' : $_SESSION['function']['link8']; ?></a></li>
                      <li class="see on"><a href="javascript:" id="link9" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['link9'] == '') ? 'link9' : $_SESSION['function']['link9']; ?></a></li>
                      <li class="see on"><a href="javascript:" id="link10" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['link10'] == '') ? 'link10' : $_SESSION['function']['link10']; ?></a></li>
                      <li class="see on"><a href="javascript:" id="link11" onclick="inputDesc(this)"><?php echo ($_SESSION['function']['link11'] == '') ? 'link11' : $_SESSION['function']['link11']; ?></a></li>
                    </ul>

                    <hr>
                </div>


                

                <div>
                    <input type="hidden" id="srlno"  value=<?php echo $_SESSION['function']['srlno'] ; ?>>
                    <div class="col-3">
                        <h3><?php //echo ($_SESSION['function'] == null)? $cookcont : var_dump($_SESSION['function']) ?></h3>
                    </div>
                    <div class="col-3" id="actionbtn">
                        <?php
                        
                            if ($_SESSION['function']['srlno'] == ''){
                            //if ($fnm == "" && $srch == ""){
                                echo '<a href="javascript:" class="button2" onclick="insertPost()">INSERT</a>';
                            }else{
                                echo '<a href="javascript:" class="button2" onclick="updatePost()">UPDATE</a>';
                            }
                            
                        ?>
                        
                    </div>
                </div>


<script type="text/javascript">
    function opensite(){
        var r = document.getElementById('srlno').value;

        if (r != ''){
            var c = document.getElementById('name-val').innerHTML;
            window.open('functions.php?fnm=' + c, '_blank').focus();
        }else{
            window.open('functions.php', '_blank').focus();
        }
    }
</script>
                

            </div>