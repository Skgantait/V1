



var pb = new PromptBoxes({
                      attrPrefix: 'pb',
                      speeds: {
                        backdrop: 250, // The enter/leaving animation speed of the backdrop
                        toasts: 250 // The enter/leaving animation speed of the toast
                      },
                      alert: {
                        okText: 'Ok', // The text for the ok button
                        okClass: '', // A class for the ok button
                        closeWithEscape: false, // Allow closing with escaping
                        absolute: false // Show prompt popup as absolute
                      },
                      confirm: {
                        confirmText: 'Confirm', // The text for the confirm button
                        confirmClass: '', // A class for the confirm button
                        cancelText: 'Cancel', // The text for the cancel button
                        cancelClass: '', // A class for the cancel button
                        closeWithEscape: true, // Allow closing with escaping
                        absolute: false // Show prompt popup as absolute
                      },
                      prompt: {
                        inputType: 'text', // The type of input 'text' | 'password' etc.
                        submitText: 'Submit', // The text for the submit button
                        submitClass: '', // A class for the submit button
                        cancelText: 'Cancel', // The text for the cancel button
                        cancelClass: '', // A class for the cancel button
                        closeWithEscape: true, // Allow closing with escaping
                        absolute: false // Show prompt popup as absolute
                      },
                      toasts: {
                        direction: 'top', // Which direction to show the toast  'top' | 'bottom'
                        max: 5, // The number of toasts that can be in the stack
                        duration: 5000, // The time the toast appears
                        showTimerBar: false, // Show timer bar countdown
                        closeWithEscape: true, // Allow closing with escaping
                        allowClose: false, // Whether to show a "x" to close the toast
                      }
                    });

                                        var pbPromptButton = document.getElementById('pb-prompt');
                                        if (pbPromptButton) {
                                            pbPromptButton.onclick = function () {
                                                pb.prompt(
                                                    function (value) {
                                                        alert('You have: ' + (value ? 'entered ' + value : 'cancelled'));
                                                    },
                                                    'This is an example prompt',
                                                    'textarea',
                                                    'Default Text',
                                                    'Submit',
                                                    'Cancel'
                                                );
                                            }
                                        }





function inputSyntax(e){
    var ptxt = e.innerHTML.replace('<i class="ri-arrow-drop-right-fill"></i>',"");
    //alert(e.tagName);
    //e.innerHTML = '<i class="ri-arrow-drop-right-fill"></i>HI';
    pb.prompt(
        function (value) {
            //alert('You have: ' + (value ? 'entered ' + value : 'cancelled'));
            if (value){
                if (value.trim() == ""){
                    e.innerHTML = '<i class="ri-arrow-drop-right-fill"></i>' + e.id;
                }else {
                    e.innerHTML = '<i class="ri-arrow-drop-right-fill"></i>' + value;
                }
            }else{
                e.innerHTML = '<i class="ri-arrow-drop-right-fill"></i>' + ptxt;
            }
            //func_details[e.id]=e.innerHTML;
            //e.innerHTML = (value ? '<i class="ri-arrow-drop-right-fill"></i>' + value : ptxt);
        },
        e.id,
        'textarea',
        ptxt,
        'Submit',
        'Cancel'
    );
}


function inputDesc(e){
    var ptxt = e.innerHTML;
    //alert(e.tagName);
    //e.innerHTML = '<i class="ri-arrow-drop-right-fill"></i>HI';
    pb.prompt(
        function (value) {
            //alert('You have: ' + (value ? 'entered ' + value : 'cancelled'));
            if (value){
                if (value.trim() == ""){
                    e.innerHTML = e.id;
                }else {
                    e.innerHTML = value;
                }
            }else{
                e.innerHTML = ptxt;
            }
            //func_details[e.id]=e.innerHTML;
            //e.innerHTML = (value ? '<i class="ri-arrow-drop-right-fill"></i>' + value : ptxt);
        },
        e.id,
        'textarea',
        ptxt,
        'Submit',
        'Cancel'
    );
}
//======================================================


//======================================================

function getDEfault(key){
    //console.log(key);
    var gthtml = document.getElementById(key).innerHTML;
//console.log(key + ': ' + gthtml);
    if (gthtml == null){
        return '';
    }else{
        if (gthtml.substr(0,40) == '<i class="ri-arrow-drop-right-fill"></i>' ){
            gthtml = gthtml.replace('<i class="ri-arrow-drop-right-fill"></i>', '');
        }

        if (gthtml.substr(0,11) == 'Data Types:'){
            gthtml = gthtml.replace('Data Types:', '');
        }

        gthtml = gthtml.trim();


        if (gthtml == key){
            return '';
        }else{
            return gthtml;
        }
    }

    
}

function makePostArray(){

    var func_details={};
    func_details["srlno"] = document.getElementById('srlno').value;
    func_details["nameval"] = getDEfault('name-val');
    func_details["sortdescription"] = getDEfault('sort-description');
    func_details["maincategori"] = getDEfault('main-categori').replace('&amp;', '&');
    func_details["subcatagori"] = document.getElementById('sub-catagori').value;
    func_details["syntax0"] = getDEfault('syntax0');
    func_details["syntax1"] = getDEfault('syntax1');
    func_details["syntax2"] = getDEfault('syntax2');
    func_details["syntax3"] = getDEfault('syntax3');
    func_details["syntax4"] = getDEfault('syntax4');
    func_details["syntax5"] = getDEfault('syntax5');
    func_details["syntax6"] = getDEfault('syntax6');
    func_details["syntax7"] = getDEfault('syntax7');
    func_details["syntax8"] = getDEfault('syntax8');
    func_details["syntax9"] = getDEfault('syntax9');
    func_details["syntax10"] = getDEfault('syntax10');
    func_details["syntax11"] = getDEfault('syntax11');
    func_details["syntax12"] = getDEfault('syntax12');
    func_details["syntax13"] = getDEfault('syntax13');
    func_details["syntax14"] = getDEfault('syntax14');
    func_details["description0"] = getDEfault('description0');
    func_details["description1"] = getDEfault('description1');
    func_details["description2"] = getDEfault('description2');
    func_details["description3"] = getDEfault('description3');
    func_details["description4"] = getDEfault('description4');
    func_details["description5"] = getDEfault('description5');
    func_details["description6"] = getDEfault('description6');
    func_details["description7"] = getDEfault('description7');
    func_details["description8"] = getDEfault('description8');
    func_details["description9"] = getDEfault('description9');
    func_details["description10"] = getDEfault('description10');
    func_details["description11"] = getDEfault('description11');
    func_details["description12"] = getDEfault('description12');
    func_details["description13"] = getDEfault('description13');
    func_details["description14"] = getDEfault('description14');
    func_details["examples0"] = getDEfault('examples0');
    func_details["examples1"] = getDEfault('examples1');
    func_details["examples2"] = getDEfault('examples2');
    func_details["examples3"] = getDEfault('examples3');
    func_details["examples4"] = getDEfault('examples4');
    func_details["examples5"] = getDEfault('examples5');
    func_details["examples6"] = getDEfault('examples6');
    func_details["examples7"] = getDEfault('examples7');
    func_details["examples8"] = getDEfault('examples8');
    func_details["examples9"] = getDEfault('examples9');
    func_details["examples10"] = getDEfault('examples10');
    func_details["examples11"] = getDEfault('examples11');
    func_details["examples12"] = getDEfault('examples12');
    func_details["examples13"] = getDEfault('examples13');
    func_details["examples14"] = getDEfault('examples14');
    func_details["ExampleDescription0"] = getDEfault('ExampleDescription0');
    func_details["ExampleDescription1"] = getDEfault('ExampleDescription1');
    func_details["ExampleDescription2"] = getDEfault('ExampleDescription2');
    func_details["ExampleDescription3"] = getDEfault('ExampleDescription3');
    func_details["ExampleDescription4"] = getDEfault('ExampleDescription4');
    func_details["ExampleDescription5"] = getDEfault('ExampleDescription5');
    func_details["ExampleDescription6"] = getDEfault('ExampleDescription6');
    func_details["ExampleDescription7"] = getDEfault('ExampleDescription7');
    func_details["ExampleDescription8"] = getDEfault('ExampleDescription8');
    func_details["ExampleDescription9"] = getDEfault('ExampleDescription9');
    func_details["ExampleDescription10"] = getDEfault('ExampleDescription10');
    func_details["ExampleDescription11"] = getDEfault('ExampleDescription11');
    func_details["ExampleDescription12"] = getDEfault('ExampleDescription12');
    func_details["ExampleDescription13"] = getDEfault('ExampleDescription13');
    func_details["ExampleDescription14"] = getDEfault('ExampleDescription14');
    func_details["input0"] = getDEfault('input0');
    func_details["input1"] = getDEfault('input1');
    func_details["input2"] = getDEfault('input2');
    func_details["input3"] = getDEfault('input3');
    func_details["input4"] = getDEfault('input4');
    func_details["input5"] = getDEfault('input5');
    func_details["input6"] = getDEfault('input6');
    func_details["input7"] = getDEfault('input7');
    func_details["input8"] = getDEfault('input8');
    func_details["input9"] = getDEfault('input9');
    func_details["input10"] = getDEfault('input10');
    func_details["input11"] = getDEfault('input11');
    func_details["input12"] = getDEfault('input12');
    func_details["input13"] = getDEfault('input13');
    func_details["input14"] = getDEfault('input14');
    func_details["input15"] = getDEfault('input15');
    func_details["input16"] = getDEfault('input16');
    func_details["input17"] = getDEfault('input17');
    func_details["input18"] = getDEfault('input18');
    func_details["input19"] = getDEfault('input19');
    func_details["inputtype0"] = getDEfault('input-type0');
    func_details["inputtype1"] = getDEfault('input-type1');
    func_details["inputtype2"] = getDEfault('input-type2');
    func_details["inputtype3"] = getDEfault('input-type3');
    func_details["inputtype4"] = getDEfault('input-type4');
    func_details["inputtype5"] = getDEfault('input-type5');
    func_details["inputtype6"] = getDEfault('input-type6');
    func_details["inputtype7"] = getDEfault('input-type7');
    func_details["inputtype8"] = getDEfault('input-type8');
    func_details["inputtype9"] = getDEfault('input-type9');
    func_details["inputtype10"] = getDEfault('input-type10');
    func_details["inputtype11"] = getDEfault('input-type11');
    func_details["inputtype12"] = getDEfault('input-type12');
    func_details["inputtype13"] = getDEfault('input-type13');
    func_details["inputtype14"] = getDEfault('input-type14');
    func_details["inputtype15"] = getDEfault('input-type15');
    func_details["inputtype16"] = getDEfault('input-type16');
    func_details["inputtype17"] = getDEfault('input-type17');
    func_details["inputtype18"] = getDEfault('input-type18');
    func_details["inputtype19"] = getDEfault('input-type19');
    func_details["inputdesc0"] = getDEfault('input-desc0');
    func_details["inputdesc1"] = getDEfault('input-desc1');
    func_details["inputdesc2"] = getDEfault('input-desc2');
    func_details["inputdesc3"] = getDEfault('input-desc3');
    func_details["inputdesc4"] = getDEfault('input-desc4');
    func_details["inputdesc5"] = getDEfault('input-desc5');
    func_details["inputdesc6"] = getDEfault('input-desc6');
    func_details["inputdesc7"] = getDEfault('input-desc7');
    func_details["inputdesc8"] = getDEfault('input-desc8');
    func_details["inputdesc9"] = getDEfault('input-desc9');
    func_details["inputdesc10"] = getDEfault('input-desc10');
    func_details["inputdesc11"] = getDEfault('input-desc11');
    func_details["inputdesc12"] = getDEfault('input-desc12');
    func_details["inputdesc13"] = getDEfault('input-desc13');
    func_details["inputdesc14"] = getDEfault('input-desc14');
    func_details["inputdesc15"] = getDEfault('input-desc15');
    func_details["inputdesc16"] = getDEfault('input-desc16');
    func_details["inputdesc17"] = getDEfault('input-desc17');
    func_details["inputdesc18"] = getDEfault('input-desc18');
    func_details["inputdesc19"] = getDEfault('input-desc19');
    func_details["output0"] = getDEfault('output0');
    func_details["output1"] = getDEfault('output1');
    func_details["output2"] = getDEfault('output2');
    func_details["output3"] = getDEfault('output3');
    func_details["output4"] = getDEfault('output4');
    func_details["output5"] = getDEfault('output5');
    func_details["output6"] = getDEfault('output6');
    func_details["output7"] = getDEfault('output7');
    func_details["output8"] = getDEfault('output8');
    func_details["output9"] = getDEfault('output9');
    func_details["output10"] = getDEfault('output10');
    func_details["output11"] = getDEfault('output11');
    func_details["output12"] = getDEfault('output12');
    func_details["output13"] = getDEfault('output13');
    func_details["output14"] = getDEfault('output14');
    func_details["output15"] = getDEfault('output15');
    func_details["output16"] = getDEfault('output16');
    func_details["output17"] = getDEfault('output17');
    func_details["output18"] = getDEfault('output18');
    func_details["output19"] = getDEfault('output19');
    func_details["outputtype0"] = getDEfault('output-type0');
    func_details["outputtype1"] = getDEfault('output-type1');
    func_details["outputtype2"] = getDEfault('output-type2');
    func_details["outputtype3"] = getDEfault('output-type3');
    func_details["outputtype4"] = getDEfault('output-type4');
    func_details["outputtype5"] = getDEfault('output-type5');
    func_details["outputtype6"] = getDEfault('output-type6');
    func_details["outputtype7"] = getDEfault('output-type7');
    func_details["outputtype8"] = getDEfault('output-type8');
    func_details["outputtype9"] = getDEfault('output-type9');
    func_details["outputtype10"] = getDEfault('output-type10');
    func_details["outputtype11"] = getDEfault('output-type11');
    func_details["outputtype12"] = getDEfault('output-type12');
    func_details["outputtype13"] = getDEfault('output-type13');
    func_details["outputtype14"] = getDEfault('output-type14');
    func_details["outputtype15"] = getDEfault('output-type15');
    func_details["outputtype16"] = getDEfault('output-type16');
    func_details["outputtype17"] = getDEfault('output-type17');
    func_details["outputtype18"] = getDEfault('output-type18');
    func_details["outputtype19"] = getDEfault('output-type19');
    func_details["outputdesc0"] = getDEfault('output-desc0');
    func_details["outputdesc1"] = getDEfault('output-desc1');
    func_details["outputdesc2"] = getDEfault('output-desc2');
    func_details["outputdesc3"] = getDEfault('output-desc3');
    func_details["outputdesc4"] = getDEfault('output-desc4');
    func_details["outputdesc5"] = getDEfault('output-desc5');
    func_details["outputdesc6"] = getDEfault('output-desc6');
    func_details["outputdesc7"] = getDEfault('output-desc7');
    func_details["outputdesc8"] = getDEfault('output-desc8');
    func_details["outputdesc9"] = getDEfault('output-desc9');
    func_details["outputdesc10"] = getDEfault('output-desc10');
    func_details["outputdesc11"] = getDEfault('output-desc11');
    func_details["outputdesc12"] = getDEfault('output-desc12');
    func_details["outputdesc13"] = getDEfault('output-desc13');
    func_details["outputdesc14"] = getDEfault('output-desc14');
    func_details["outputdesc15"] = getDEfault('output-desc15');
    func_details["outputdesc16"] = getDEfault('output-desc16');
    func_details["outputdesc17"] = getDEfault('output-desc17');
    func_details["outputdesc18"] = getDEfault('output-desc18');
    func_details["outputdesc19"] = getDEfault('output-desc19');
    func_details["api"] = getDEfault('api');
    func_details["algorithms"] = getDEfault('algorithms');
    func_details["references0"] = getDEfault('references0');
    func_details["references1"] = getDEfault('references1');
    func_details["references2"] = getDEfault('references2');
    func_details["references3"] = getDEfault('references3');
    func_details["references4"] = getDEfault('references4');
    func_details["references5"] = getDEfault('references5');
    func_details["references6"] = getDEfault('references6');
    func_details["references7"] = getDEfault('references7');
    func_details["references8"] = getDEfault('references8');
    func_details["references9"] = getDEfault('references9');
    func_details["references10"] = getDEfault('references10');
    func_details["references11"] = getDEfault('references11');
    func_details["link0"] = getDEfault('link0');
    func_details["link1"] = getDEfault('link1');
    func_details["link2"] = getDEfault('link2');
    func_details["link3"] = getDEfault('link3');
    func_details["link4"] = getDEfault('link4');
    func_details["link5"] = getDEfault('link5');
    func_details["link6"] = getDEfault('link6');
    func_details["link7"] = getDEfault('link7');
    func_details["link8"] = getDEfault('link8');
    func_details["link9"] = getDEfault('link9');
    func_details["link10"] = getDEfault('link10');
    func_details["link11"] = getDEfault('link11');

//console.log(func_details["maincategori"]);

    //return JSON.stringify(func_details);
    return func_details;
}





//=================================================
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}



function insertPost(){
    ////console.log(JSON.stringify(func_details));
    //setCookie('func_details',makePostArray());
     //var str = 'http://calgo/Calgoric/MyWork/0/opws/php/admin/index.php?update=func_details';
     //alert("HI");
     //window.location.href = str;
    //console.log(func_details);


    //var tmp = JSON.stringify(makePostArray());
    //console.log(tmp);
    var purl = mainURL + 'api/func';

    ClientPostJson(purl, makePostArray(), (res) => {
                    if (res.error){
                        console.log(res.message, res.error);
                        alert(res.message);
                    } else {

                        if (res.response == ''){
                            document.getElementById('actionbtn').innerHTML = '<a href="javascript:" class="button2" onclick="insertPost()">INSERT</a>';
                        }else{
                            document.getElementById('actionbtn').innerHTML = '<a href="javascript:" class="button2" onclick="updatePost()">UPDATE</a>';;
                        }
                        
                        document.getElementById('srlno').value = res.response;
                        console.log(res.message, res.response);
                        //console.log(res.response);
                        alert(res.message);
                        //alert(res.response);
                        //await  sleep(5000);
                        //var str = 'http://calgo/Calgoric/MyWork/0/opws/php/admin/index.php';
                        //window.location.href = str;
                    }
                    //if (res.Error === '') {
                    //    console.log('SUCCESS', res.Data);
                    //} else {
                    //    console.log('Faild', res.Error);
                    //}
                });

           


}

function updatePost(){
    var purl = mainURL + 'api/func';

    fetch(purl, {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
        body: JSON.stringify(makePostArray())
    })
    .then(function(r){ return r.json(); })
    .then(function(res) {
                    if (res.error){
                        console.log(res.message, res.error);
                        alert(res.message);
                    } else {
                        
                        if (res.response == ''){
                            document.getElementById('actionbtn').innerHTML = '<a href="javascript:" class="button2" onclick="insertPost()">INSERT</a>';
                        }else{
                            document.getElementById('actionbtn').innerHTML = '<a href="javascript:" class="button2" onclick="updatePost()">UPDATE</a>';;
                        }
                        console.log(res.message, res.response);
                        alert(res.message);
                        //alert(res.response);
                        //await  sleep(5000);
                        //var str = 'http://calgo/Calgoric/MyWork/0/opws/php/admin/index.php';
                        //window.location.href = str;
                    }
                    //if (res.Error === '') {
                    //    console.log('SUCCESS', res.Data);
                    //} else {
                    //    console.log('Faild', res.Error);
                    //}
                });

}





    function imgupload(){
        if (img.files.length > 0){

            let File = HtmlToFiles(img);// Javascript File object Deasy FileObj, it is may be an array of File object.
            //console.log('HtmlToFiles', File);
            var url = mainURL + 'api/upload';
            UploadFile(url, File, (res) => {
                 //
                //res = 
                //{
                //    'type': 'UploadFile', // OR 'PostJson' OR 'formSubmit'. This is the Function Name
                //    'error': 1, // '0' for SUCCESS, '1' for system error AND '2' for condition not meet
                //    'message': err,  // If SUCCESS, message is empty string, Otherwise message is error message
                 //    'response': {'PostJson': {}, 'UploadFile': {}} // response.PostJson return node from server for PostJson function, and response.UploadFile return node from server for UploadFile function
                //}
                //
                 if (res.error){
                     console.log('Faild', res.message);
                     alert('Faild');
                } else {

                    //ImgDiv.style.display = "none";

                    var imgpath = mainURL + 'upload/' + res.response['UploadFile'][0]['url'];

                    var tcd = '<div class="imgcont">\n<h4>Put your Image Header..</h4>\n<hr>\n<img src="' + imgpath + '"></div>';

                    console.log('SUCCESS',res.response['UploadFile']);
                    if (typeof appendToHtmlEditor === 'function') appendToHtmlEditor(tcd);
                    if (typeof copyTextToClipboard === 'function') copyTextToClipboard(tcd);
                    else if (navigator.clipboard && window.isSecureContext) navigator.clipboard.writeText(tcd);
                    alert('SUCCESS: Successfully uploaded image in ' + imgpath);
                                
                }
            });
        }

    }
