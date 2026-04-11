
       <script src="js/jquery.1.8.3.min.js"></script>
                <script src="js/wow.min.js"></script>
                <script src="js/featherlight.min.js"></script>
                <script src="js/featherlight.gallery.min.js"></script>
                <script src="js/jquery.enllax.min.js"></script>
                <script src="js/jquery.scrollUp.min.js"></script>
                <script src="js/jquery.easing.min.js"></script>
                <script src="js/jquery.stickyNavbar.min.js"></script>
                <script src="js/jquery.waypoints.min.js"></script>
                <script src="js/images-loaded.min.js"></script>
                <script src="js/lightbox.min.js"></script>
                <script src="js/site.js"></script>

                <script src="js/js/funcmain.js"></script>
                <script src="js/js/collapsible-menu.js"></script>
                <script src="js/mathscribe/jqmath-etc-0.4.6.min.js"></script>
                <script src="js/js/CodeStyler.js"></script>

                <script src="js/prompt-boxes.js"></script>

                <script src="js/cred.js"></script>
                <script src="js/DeasyDataHandle.js"></script>
                <script src="js/DeasyPostGet.js"></script>
                <script src="js/FileUpload.js"></script>
                <script src="js/calgoricadmin.js"></script>



        


<script type="text/javascript">
   

    function search(){
        //alert('search');
        if (document.getElementById("search").value != ""){
            var str = "index.php?srch=" + document.getElementById("search").value;
            //console.log(str);
            window.location.href = str;
        }
    }

    function funcpost(s){
        var strtw = "index.php?fnm=" + s;
        //console.log(strtw);
        window.location.href = strtw;
    }      
    

    function createNew(){
        var strtw = "index.php";
        //console.log(strtw);
        window.location.href = strtw;
    }



    //=========MODAL SECTION==========
    var modal = document.getElementById("myModal");
    var content1 = document.getElementById("content1");
    var content2 = document.getElementById("content2");
    var content3 = document.getElementById("content3");
        
     //=========CATEGORI SECTION==========
    function insrt(e){
        document.getElementById("custId").value = e.options[e.selectedIndex].innerHTML;
        //console.log(document.getElementById("custId").value);
        //console.log('custId: '+ document.getElementById("custId").value);
    }
        
    function getCategory(){
        modal.style.display = "block";
        content1.style.display = "block";
        var tmp = document.getElementById("main-categori").innerHTML;
        for (var option of document.getElementById("cat").options) {
            //alert(option.value);
            if (option.value == tmp) {
                option.selected = true;
                break;
            }
        }
        document.getElementById("custId").value =document.getElementById("main-categori").innerHTML;
    }

    function mcontent(){
        content1.style.display = "none";
        modal.style.display = "none";
        document.getElementById("main-categori").innerHTML=document.getElementById("custId").value;
        //func_details["main-categori"]=document.getElementById("main-categori").innerHTML;
    }
    //=========END CATEGORI SECTION==========

    //=========DATA TYPE SECTION==========       

    function getBlankData(){
        var dobjectarr = {};
        dobjectarr['DoubleScaler'] = '';
        dobjectarr['ComplexScaler'] = '';
        dobjectarr['NumericScaler'] = '';
        dobjectarr['DateTime'] = '';
        dobjectarr['String'] = '';
        dobjectarr['Logical'] = '';
        dobjectarr['IntegerScaler'] = '';
        dobjectarr['ByteScaler'] = '';
        dobjectarr['DoubleMatrix'] = '';
        dobjectarr['ComplexMatrix'] = '';
        dobjectarr['NumericMatrix'] = '';
        dobjectarr['LogicalMatrix'] = '';
        dobjectarr['IntegerMatrix'] = '';
        dobjectarr['ByteMatrix'] = '';
        dobjectarr['DoubleField'] = '';
        dobjectarr['ComplexField'] = '';
        dobjectarr['NumericField'] = '';
        dobjectarr['DateTimeField'] = '';
        dobjectarr['StringField'] = '';
        dobjectarr['LogicalField'] = '';
        dobjectarr['IntegerField'] = '';
        dobjectarr['ByteField'] = '';
        dobjectarr['DoubleTable'] = '';
        dobjectarr['ComplexTable'] = '';
        dobjectarr['NumericTable'] = '';
        dobjectarr['DateTimeTable'] = '';
        dobjectarr['StringTable'] = '';
        dobjectarr['LogicalTable'] = '';
        dobjectarr['IntegerTable'] = '';
        dobjectarr['ByteTable'] = '';
        dobjectarr['DoubleMatrixArray'] = '';
        dobjectarr['ComplexMatrixArray'] = '';
        dobjectarr['NumericMatrixArray'] = '';
        dobjectarr['LogicalMatrixArray'] = '';
        dobjectarr['IntegerMatrixArray'] = '';
        dobjectarr['ByteMatrixArray'] = '';

        return dobjectarr;
    }
        
    var newData = {};
    var objc;
    var dObject = document.getElementsByClassName('dObject');
    for (var i=0; i< dObject.length;i++){
        var txt="";

        dObject[i].addEventListener('click', function (event) {
            if (event.target.checked){
                newData[event.target.id] = event.target.value;
            }else{
                newData[event.target.id] = '';
            }
            //console.log('Element ' + event.target.value + ' was just clicked ' + event.target.checked)
        })

    }

    function getData(e){
        objc = e;
        newData = getBlankData();
        var ptxt = e.innerHTML;
        var parr = ptxt.split(' | ');
        parr[0] = parr[0].split(': ')[1];

        for (var i=0; i< dObject.length;i++){
            dObject[i].checked = false;
        }

        for (var j = 0; j < parr.length; j++){
            for (var i=0; i< dObject.length;i++){
                if (parr[j] == dObject[i].value){
                    dObject[i].checked = true;
                    newData[dObject[i].id] = dObject[i].value;
                    break;
                }
            }
        }
             


        modal.style.display = "block";
        content2.style.display = "block";
    }

    function mdata(){
        var str = "";
        for (var name in newData) {
            if (newData[name] != ""){
                if (str == ""){
                    str = newData[name];
                }else{
                    str = str + ' | ' + newData[name];
                }
            }                
        }
        objc.innerHTML = "Data Types: " + str;
        //func_details[objc.id]=objc.innerHTML;
        //console.log(str);
        newData = {};
        content2.style.display = "none";
        modal.style.display = "none";
    }
    //=========END DATA TYPE SECTION==========       

    //=========HTML EDITOR SECTION==========    

    function dropdowntoggle(src = true) {
        var x = document.getElementById("myDropdown");
        if (x.className.indexOf("show") == -1) {
            if (src == true){
                x.className += "show";
            }
        } else { 
            x.className = x.className.replace("show", "");
        }
    }

    const img=document.getElementById('file');
    var htmlobject;

    //Open HTML Editor
    function getHTMLEditor(e){
        htmlobject = e;
        document.getElementById("w3review").value = htmlobject.innerHTML;
        document.getElementById("htmledtr").innerHTML = "HTML Editor: " + htmlobject.id;
        modal.style.display = "block";
        content3.style.display = "block";
            
    }

    // make code tag id
    function makeCodeId(){
        var elementArray;
        elementArray = document.getElementsByClassName("codespan");
        let l = 0;

        for(var i = 0; i < elementArray.length; i++) {
            let originalString = elementArray[i].id;
            //console.log(originalString);
            var j = Number(originalString.replace("code", ""));
            if (j > l){
                l = j;
            }
        }

        l = l + 1;
        var rtrn = "code" + l;
        return rtrn;
    }   


    function toolsclick(tool){
        dropdowntoggle(false);

        var textContent = "";

        if (tool == 'div'){
            textContent = "<div>\nInsert Your Div Contant...\n</div>";
        }else if (tool == 'p'){
            textContent = "<p>Insert New Paragraph...</p>";
        }else if (tool == 'h3'){
            textContent = "<h3>Insert A Header...</h3>";
        }else if (tool == 'list'){
            textContent = "<ul>\n<li>\nInsert 1st List Content\n</li>\n</ul>";
        }else if (tool == 'link'){
            textContent = "<a href='Your-URL'  target='_blank'>Your Hyper-Link Text...</a>";
        }else if (tool == 'code'){
            var j = makeCodeId();
            textContent = '<div class="code">\n<pre>\n<span class="codespan" id="' + j + '">Insert Your Code...</span>\n</pre>\n<button class="codeButton" title="Copy Code to Clipboard" onclick="codeCopy(' + "'" + j + "')" + '"><i class="fa fa-copy"></i></button>\n</div>';
        }

        if (textContent != ""){
            navigator.clipboard.writeText(textContent);
        }
    }


    function imgclick(){        
        dropdowntoggle(false);
        img.click();        

    }



    function tableclick(){
        dropdowntoggle();
        
        var tcd = '<table class="matrx">\n<caption>Put Your Table Header..</caption>\n<tbody>';
        var r = Number(document.getElementById("tablerow").value);
        var c = Number(document.getElementById("tablecol").value);

        if (r > 0 && c > 0){
            for (var i = 0; i < r; i++){
                var txt = '<tr>\n';
                for (var j = 0; j < c; j++){
                    txt = txt + '<td>R' + i + 'C' + j + '</td>\n';
                }
                                 
                txt = txt + '</tr>\n';
                tcd = tcd + txt;
            }
        }

        tcd = tcd + '</tbody></table>';
        navigator.clipboard.writeText(tcd);
        
    }


    function hdata(){
        htmlobject.innerHTML = document.getElementById("w3review").value;
        content3.style.display = "none";
        modal.style.display = "none";
    }


    //=========END HTML EDITOR SECTION==========    

    function mclose(){
        newData = {};
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";
        modal.style.display = "none";
    }
    //=========END MODAL SECTION==========

</script>

