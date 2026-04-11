<!-- The Modal -->

<div id="myModal" class="modal">
<input type="file" id="file" name="file" style="display: none;" onChange="imgupload()">


  <!-- Modal content -->
    <div id="content1" class="modal-content">
        <h3>main_categori</h3>
        <input type="hidden" id="custId" value="">
        <select name="cars" id="cat" onchange="insrt(this)">            
            <option value="Binary & Memory">Binary & Memory</option>
            <option value="Data Function">Data Function</option>
            <option value="Database Functions">Database Functions</option>
            <option value="Date & Time">Date & Time</option>
            <option value="Files & Folders">Files & Folders</option>
            <option value="Finance">Finance</option>
            <option value="Geometry">Geometry</option>
            <option value="Image Processing">Image Processing</option>
            <option value="Integration">Integration</option>
            <option value="IO">IO</option>
            <option value="Linear Algebra">Linear Algebra</option>
            <option value="Machine Learning">Machine Learning</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Matrix Operation">Matrix Operation</option>
            <option value="Optimization & Equation Solver">Optimization & Equation Solver</option>
            <option value="Others">Others</option>
            <option value="Polynomial & BSpline">Polynomial & BSpline</option>
            <option value="Regression">Regression</option>
            <option value="Signal Processing">Signal Processing</option>
            <option value="Statistics">Statistics</option>
            <option value="String">String</option>
            <option value="Syntax">Syntax</option>
            <option value="System Info">System Info</option>
            <option value="Table & Field">Table & Field</option>
        </select>
        <a href="javascript:" class="button2" style="margin-right: 30px; margin-left: 30px;" onclick="mclose()">Cancel</a>
        <a href="javascript:" class="button2"  onclick="mcontent()">ok</a>
    </div>

    <div id="content2" class="modal-content">
        <h3>Variable Type</h3>
        <fieldset class="hscroll">
            <div><input type="checkbox" id="DoubleScaler" name="Object" class="dObject" value="Double Scaler"/><label for="DoubleScaler">Double Scaler</label></div>
            <div><input type="checkbox" id="ComplexScaler" name="Object" class="dObject" value="Complex Scaler"/><label for="ComplexScaler">Complex Scaler</label></div>
            <div><input type="checkbox" id="NumericScaler" name="Object" class="dObject" value="Numeric Scaler"/><label for="NumericScaler">Numeric Scaler</label></div>
            <div><input type="checkbox" id="DateTime" name="Object" class="dObject" value="DateTime"/><label for="DateTime">Date & Time</label></div>
            <div><input type="checkbox" id="String" name="Object" class="dObject" value="String"/><label for="String">String</label></div>
            <div><input type="checkbox" id="Logical" name="Object" class="dObject" value="Logical"/><label for="Logical">Logical</label></div>
            <div><input type="checkbox" id="IntegerScaler" name="Object" class="dObject" value="Integer Scaler"/><label for="IntegerScaler">Integer Scaler</label></div>
            <div><input type="checkbox" id="ByteScaler" name="Object" class="dObject" value="Byte Scaler"/><label for="ByteScaler">Byte Scaler</label></div>
            <div><input type="checkbox" id="DoubleMatrix" name="Object" class="dObject" value="Double Matrix"/><label for="DoubleMatrix">Double Matrix</label></div>
            <div><input type="checkbox" id="ComplexMatrix" name="Object" class="dObject" value="Complex Matrix"/><label for="ComplexMatrix">Complex Matrix</label></div>
            <div><input type="checkbox" id="NumericMatrix" name="Object" class="dObject" value="Numeric Matrix"/><label for="NumericMatrix">Numeric Matrix</label></div>
            <div><input type="checkbox" id="LogicalMatrix" name="Object" class="dObject" value="Logical Matrix"/><label for="LogicalMatrix">Logical Matrix</label></div>
            <div><input type="checkbox" id="IntegerMatrix" name="Object" class="dObject" value="Integer Matrix"/><label for="IntegerMatrix">Integer Matrix</label></div>
            <div><input type="checkbox" id="ByteMatrix" name="Object" class="dObject" value="Byte Matrix"/><label for="ByteMatrix">Byte Matrix</label></div>
            <div><input type="checkbox" id="DoubleField" name="Object" class="dObject" value="Double Field"/><label for="DoubleField">Double Field</label></div>
            <div><input type="checkbox" id="ComplexField" name="Object" class="dObject" value="Complex Field"/><label for="ComplexField">Complex Field</label></div>
            <div><input type="checkbox" id="NumericField" name="Object" class="dObject" value="Numeric Field"/><label for="NumericField">Numeric Field</label></div>
            <div><input type="checkbox" id="DateTimeField" name="Object" class="dObject" value="DateTime Field"/><label for="DateTimeField">Date & Time Field</label></div>
            <div><input type="checkbox" id="StringField" name="Object" class="dObject" value="String Field"/><label for="StringField">String Field</label></div>
            <div><input type="checkbox" id="LogicalField" name="Object" class="dObject" value="Logical Field"/><label for="LogicalField">Logical Field</label></div>
            <div><input type="checkbox" id="IntegerField" name="Object" class="dObject" value="Integer Field"/><label for="IntegerField">Integer Field</label></div>
            <div><input type="checkbox" id="ByteField" name="Object" class="dObject" value="Byte Field"/><label for="ByteField">Byte Field</label></div>
            <div><input type="checkbox" id="DoubleTable" name="Object" class="dObject" value="Double Table"/><label for="DoubleTable">Double Table</label></div>
            <div><input type="checkbox" id="ComplexTable" name="Object" class="dObject" value="Complex Table"/><label for="ComplexTable">Complex Table</label></div>
            <div><input type="checkbox" id="NumericTable" name="Object" class="dObject" value="Numeric Table"/><label for="NumericTable">Numeric Table</label></div>
            <div><input type="checkbox" id="DateTimeTable" name="Object" class="dObject" value="DateTime Table"/><label for="DateTimeTable">Date & Time Table</label></div>
            <div><input type="checkbox" id="StringTable" name="Object" class="dObject" value="String Table"/><label for="StringTable">String Table</label></div>
            <div><input type="checkbox" id="LogicalTable" name="Object" class="dObject" value="Logical Table"/><label for="LogicalTable">Logical Table</label></div>
            <div><input type="checkbox" id="IntegerTable" name="Object" class="dObject" value="Integer Table"/><label for="IntegerTable">Integer Table</label></div>
            <div><input type="checkbox" id="ByteTable" name="Object" class="dObject" value="Byte Table"/><label for="ByteTable">Byte Table</label></div>
            <div><input type="checkbox" id="DoubleMatrixArray" name="Object" class="dObject" value="Double Matrix Array"/><label for="DoubleMatrixArray">Double Matrix Array</label></div>
            <div><input type="checkbox" id="ComplexMatrixArray" name="Object" class="dObject" value="Complex Matrix Array"/><label for="ComplexMatrixArray">Complex Matrix Array</label></div>
            <div><input type="checkbox" id="NumericMatrixArray" name="Object" class="dObject" value="Numeric Matrix Array"/><label for="NumericMatrixArray">Numeric Matrix Array</label></div>
            <div><input type="checkbox" id="LogicalMatrixArray" name="Object" class="dObject" value="Logical Matrix Array"/><label for="LogicalMatrixArray">Logical Matrix Array</label></div>
            <div><input type="checkbox" id="IntegerMatrixArray" name="Object" class="dObject" value="Integer Matrix Array"/><label for="IntegerMatrixArray">Integer Matrix Array</label></div>
            <div><input type="checkbox" id="ByteMatrixArray" name="Object" class="dObject" value="Byte Matrix Array"/><label for="ByteMatrixArray">Byte Matrix Array</label></div>
        </fieldset>

        <a href="javascript:" class="button2" style="margin-right: 30px; margin-left: 30px;" onclick="mclose()">Cancel</a>
        <a href="javascript:" class="button2"  onclick="mdata()">ok</a>
    </div>



    <div id="content3" class="modal-content" style="width: 700px;">
        <h5 id="htmledtr">HTML EDITOR</h5>
        <p style="font-size: 14px; color: #BDBDBD;">Click a tool from toolbar and the appropriate code copy in to your clipboard.</p>
        <ul class="ulm">
            <li class="lim"><a title="Code" href="javascript:" onclick="toolsclick('code')">&#60&#47&#62</a></li>
            <li class="lim"><a title="Div" href="javascript:" onclick="toolsclick('div')">&#60div&#62</a></li>
            <li class="lim"><a title="P" href="javascript:" onclick="toolsclick('p')">&#60p&#62</a></li>
            <li class="lim"><a title="H3" href="javascript:" onclick="toolsclick('h3')">&#60h3&#62</a></li>
            <li class="lim"><a title="List" href="javascript:" onclick="toolsclick('list')">&#60L&#62</a></li>
            <li class="lim"><a title="H-Link" href="javascript:" onclick="toolsclick('link')">&#60a&#62</a></li>
            <li class="lim"><a title="Image" href="javascript:" onclick="imgclick()">&#60img&#62</a></li>
            <!--
            <div class="dropdown">
                <button  title="Table"  onclick="myFunction()" class="dropbtn">&#60table&#62</button >
                <div id="myDropdown" class="dropdown-content">
                    <input type="text" id="tablecol" name="" placeholder="Cols" style="width:60px">
                    <input type="text" id="tablerow" name="" placeholder="Rows" style="width:60px">
                    <a href="javascript:" class="button1" onclick="tableclick()">GetTable</a>
                </div>
            </div>  
            -->

            <div class="dropdown">
                <button title="Table" onclick="dropdowntoggle()" class="dropbtn">&#60Table&#62</button>
            </div>
        </ul>
                <div id="myDropdown" class="dropdown-content">
                    <input type="text" id="tablecol" name="" placeholder="Cols" style="width:60px">
                    <input type="text" id="tablerow" name="" placeholder="Rows" style="width:60px">
                    <a href="javascript:" class="button2" onclick="tableclick()">GetTable</a>
                </div>



        <div class="row clearfix" style="text-align: center; margin: 0px; padding: 0px;">
            <textarea id="w3review" name="w3review" style="width:100%; height: 300px"></textarea>

        </div>

        <a href="javascript:" class="button2" style="margin-right: 30px; margin-left: 30px;" onclick="mclose()">Cancel</a>
        <a href="javascript:" class="button2"  onclick="hdata()">ok</a>

    </div>


</div>

<script type="text/javascript">
    var modal = document.getElementById("confirmbox");
    var content1 = document.getElementById("confirmcontent");


    function ConfirmOnClick(msg = ''){
        if (msg != ''){
          document.getElementById("confermmsg").innerHTML =msg;
        }        
        modal.style.display = "block";
        content1.style.display = "block";
    }

    function confirmok(){
        content1.style.display = "none";
        modal.style.display = "none";
        console.log('OK: put your result');
    }



    function confirmcencel(){
        content1.style.display = "none";
        modal.style.display = "none";
    }
</script>
<!--modal end-->