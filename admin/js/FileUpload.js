
function getdir(index = 1){
                    let location = window.location.href;
                    for (var i = 0; i < index; i++){
                        location = location.substring(0, location.lastIndexOf("/"));
                    }
                    //var directoryPath = location.substring(0, location.lastIndexOf("/")+(1-index));
                    location = location + "/";
                    return location;
                }


function getType(element) {
    return element.getAttribute('type');
    //return element.type;
}
function HtmlToFiles(inputFile){
    // inputFile is the html file tag element
    // return array of js file object
    let fileArray = makeArray();
    if (getType(inputFile) === 'file') {
        for (const file of inputFile.files) {
            fileArray.push(file);
        }
    }

    let nth = getArrayLength(fileArray);
    if (nth < 1){
        return null;
    }
    if (nth === 1){
        return fileArray[0];
    } else {
        return fileArray;
    }    
}


function prv_paramfiles(url,data,uid){
    let rslt = {
            method: "POST",
            mode: 'same-origin',//'cors',
            referrerPolicy: 'origin',
            credentials: 'same-origin',//'include',//'omit',//
            cache: 'default',//'no-cache',
            headers: { 
                'responseurl': url,
                'ClientHost': window.location.host,
                'uid': JSON.stringify(uid),
                'auth_token' : 'curltesting123',
                'Accept': 'application/json',
                //'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
                //'Content-Type': 'application/multipart/form-data; charset=UTF-8'
                //'Content-Type': 'application/Blob/BufferSource; charset=UTF-8'
            },    
            body: data
        }

            return rslt;
}


function prv_FileToForm(File){
    // call from UploadFile function
    let fileArray = new FormData();//makeArray();
    let k = 0;
    if (isArray(File)){
        let nth = getArrayLength(File);
        if (nth > 0){            
            for (let i = 0; i < nth; i++){
                if (isFile(File[i])) {
                    fileArray.append('file[' + i + ']', File[i]);
                    k++;
                } else if (isFileObj(File[i])){
                    fileArray.append('file[' + i + ']', toFile(File[i]));
                    k++
                }
            }
        }
    } else {
        if (isFile(File)) {
            fileArray.append('file[0]' , File);
            k = 1;
        } else if (isFileObj(File)){
            fileArray.append('file[0]' , toFile(File));
            k = 1;
        }
    }
    //console.log('k: ', k);
    if (k > 0){
        //return {err: '',  count: k, data:fileArray};
        return fileArray;
    } else {
        //return {err: 'no file found.', count: 0, data:{}};
        return null;
    }
}



/*
    
        const input = getElementByName('file');
        let File = HtmlToFiles(input); // Javascript File object Deasy FileObj, it is may be an array of File object.
        //console.log('HtmlToFiles', File);

        url = 'yourFormPHP.php';
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
            } else {
                console.log('SUCCESS', res.response);
            }
        });
*/


function UploadFile(url, File, callback){
    
    let err = '';
    var data;
   // if (!isString(url)){//if (!isValidURL(url)){
     //   err = 'url not correct.';
   // } else {
        data = prv_FileToForm(File); // FormData of files
        if (data === null) {
            err = 'no file found.';
        }  /*else {
            if (!isNode(uid)) {
                err = 'uid not json format.';
            }
        }*/
    //}

  

    if (err != ''){
        callback({'type': 'UploadFile', 'error': 1, 'message': err, 'response': {'PostJson': {}, 'UploadFile': {}}});
    } else {
        //data.append('responseurl', url);
        //data['responseurl'] = url;

        fetch(url, prv_paramfiles(url,data,{}))
        .then(function(response) {
            //console.log('response: ', response);
            if (!response.ok){
                throw Error(response.statusText);
            }
            return response.json();
                        
        })
        .then((rslt) => {
            if (rslt.type != 'UploadFile'){
                throw Error('return type not match with response type.');
            }
            callback({'type': rslt.type, 'error': rslt.error, 'message': rslt.message, 'response': {'PostJson': {}, 'UploadFile': rslt.response}});
        })
        .catch((err) => {
            callback({'type': 'UploadFile', 'error': 1, 'message': err.message, 'response': {'PostJson': {}, 'UploadFile': {}}});
        });

    }
    
     

}

