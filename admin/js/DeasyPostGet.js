
const methodList = ['GET', 'POST', 'PUT', 'DELETE'];



function ClientPostJson(url, data, callback){
    
    let err = '';
    if (!isString(url)){//if (!isValidURL(url)){
        err = 'url not correct.';
    } else {
        if (!isNode(data)) {
            err = 'data not json format.';
        }
    }

    if (err != ''){
        //callback({'Data' : {}, 'Error' : 'url not correct.'});
        callback({'error': 1, 'message': err, 'response': {}});
    } else {

        fetch(url, {
            method: "POST",
            mode: 'same-origin',//'cors',
            referrerPolicy: 'origin',
            credentials: 'same-origin',//'include',//'omit',//
            cache: 'default',//'no-cache',
            headers: { 
                'datatype' : 'form',
                'auth_token' : 'curltesting123',
                'Accept': 'application/json',
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            },    
            body: JSON.stringify(data)
        })
        
        .then(function(response) {
            //if (response.status >= 200 && response.status < 300) {
                 //  return response.json();//
            //}
            if (!response.ok){
                throw Error(response.statusText);
            }
            //console.log('000 =>', response);
            return response.json();
                        
        })
        .then((rslt) => {
            //console.log('001 =>', rslt);
            //callback({'Data' : rslt, 'Error' : ''});
            //if (rslt.error){
            //    throw Error(rslt.message);
            //}
            callback(rslt);
        })
        .catch((err) => {
            //console.log('002 =>', err);
            //callback({'Data' : {}, 'Error' : err.message});
            callback({'error': 1, 'message': err.message, 'response': {}});
        });

    }
    
     

}
















//-----------------------------------------------------
//  url: pass any url or file path
//  JsonNode: Json data (Node) 
//  method: 'GET' or 'POST' or 'PUT' or 'DELETE', 
//  is_urlEncoded: if true, pass Content-Type 
//                 'x-www-form-urlencoded' to header; 
//                  if false (default) Content-Type 
//                  is 'application/json'
//  is_sendCookies: if true enable send cookies to 
//                  server option, if false (default) 
//                  do not send cookies to server
//  callback: pass callback function with json node. 
//            json node is 2 key, 'Data' and 'Error'. 
//            if success 'Data' is store another json 
//            node return from server and 'Error' is 
//            empty string, if fail 'Data' is store 
//            empty json and 'Error' is store error 
//            message. 
//            Example: callback(res); -> res.Data; res.Error
//------------------------------------------------------
function DataSendServer(url, JsonNode, method='post', is_urlEncoded=false, is_sendCookies=false, is_convertString = true, callback){
    if (isNode(JsonNode) && isString(url)) {

        var sendCookies;
        if (is_sendCookies){
            sendCookies = 'include';
        } else {
            sendCookies = 'omit';
        }

        var urlEncoded;
        if (is_urlEncoded){
            urlEncoded = 'application/x-www-form-urlencoded; charset=UTF-8';
        } else {
            urlEncoded = 'application/json; charset=UTF-8';
        }

        let content;
        if (is_convertString){
            content = JSON.stringify(JsonNode);
        } else {
            content = JsonNode;
        }

        if (isString(method)){
            method = method.toUpperCase();
            if (methodList.indexOf(method) < 0) {
                method = 'POST';
            }
        } else {
            method = 'POST';
        }

        fetch(url, {
            method: method,
            mode: 'cors',
            cache: 'no-cache',
            credentials: sendCookies,
            body: content,
            headers: {
                'DataType' : 'Normal',
                'Accept': 'application/json',
                'Content-Type': urlEncoded
            },
        })
        .then(function(response) {
            //if (response.status >= 200 && response.status < 300) {
                 //  return response.json();//
            //}
            if (!response.ok){
                throw Error(response.statusText);
            }
            return response.json();
                        
        })
        .then((data) => {
            //callback(JSON.stringify({'Data' : data, 'Error' : ''}));
            callback({'Data' : data, 'Error' : ''});
        })
        .catch((err) => {
            //callback(JSON.stringify({'Data' : {}, 'Error' : err.message}));
            callback({'Data' : {}, 'Error' : err.message});
        });
    } else {
        callback({'Data' : {}, 'Error' : 'data maybe empty or url not correct.'});
    }               

}




/*
            function postFormData(form, url, callback){
                DataSendServer(url, getFormData(form), 'post', true, true, (res) => {
                    callback(res);
                });
            }
            */

function FileSendServer(url, JsonNode, method='post', is_sendCookies=false, callback){
    if (isNode(JsonNode) && isString(url)) {

        var sendCookies;
        if (is_sendCookies){
            sendCookies = 'include';
        } else {
            sendCookies = 'omit';
        }

        var urlEncoded = 'application/x-www-form-urlencoded; charset=UTF-8';

        //let content = JsonNode;

        if (isString(method)){
            method = method.toUpperCase();
            if (methodList.indexOf(method) < 0) {
                method = 'POST';
            }
        } else {
            method = 'POST';
        }

        for (let i in JsonNode) {
            let tfile = JsonNode[i];
            for (const file of tfile) {

                fetch(url, {
                    method: method,
                    mode: 'cors',
                    cache: 'no-cache',
                    credentials: sendCookies,
                    body: file,
                    headers: {
                        'DataType' : 'File'
                        //'Accept': 'application/json',
                        //'Content-Type': urlEncoded
                    },
                })
                .then(function(response) {
                    //if (response.status >= 200 && response.status < 300) {
                         //  return response.json();//
                    //}
                    if (!response.ok){
                        throw Error(response.statusText);
                    }
                    return response.json();
                                
                })
                .then((data) => {
                    //callback(JSON.stringify({'Data' : data, 'Error' : ''}));
                    callback({'Data' : data, 'Error' : ''});
                })
                .catch((err) => {
                    //callback(JSON.stringify({'Data' : {}, 'Error' : err.message}));
                    callback({'Data' : {}, 'Error' : err.message});
                });
            }
        }
    } else {
        callback({'Data' : {}, 'Error' : 'data maybe empty or url not correct.'});
    }               

}


// type = json, file, form
function ClientPost(url, data, is_stringify, type, callback){
    

    
    let err = '';
    if (!isString(url)){//if (!isValidURL(url)){
        err = 'url not correct.';
    } else {
        if (type != 'json' && type != 'form' && type != 'file') {
            err = 'data type not correct.';
        } else {
            if (!isNode(data)) {
                err = 'data not json format.';
            }
        }
    }

    if (err != ''){
        callback({'Data' : {}, 'Error' : 'url not correct.'});
    } else {
        if (is_stringify) {
            data = JSON.stringify(data);
        }

        fetch(url, {
            method: "POST",
            //mode: 'cors',
            //cache: 'no-cache',
            //credentials: 'include',//'omit',//
            headers: { 
                'DataType' : type,
                'auth_token' : 'curltesting123',
                //'Accept': 'application/json',
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'//'multipart/form-data; charset=UTF-8' //
            },    
            body:data 
        })
        /*
        if (is_sendCookies){
                        sendCookies = 'include';
                    } else {
                        sendCookies = 'omit';
                    }
        if (is_urlEncoded){
                        urlEncoded = 'application/x-www-form-urlencoded; charset=UTF-8';
                    } else {
                        urlEncoded = 'application/json; charset=UTF-8';
                    }
                    */
        .then(function(response) {
            //if (response.status >= 200 && response.status < 300) {
                 //  return response.json();//
            //}
            if (!response.ok){
                throw Error(response.statusText);
            }
            return response.json();
                        
        })
        .then((rslt) => {
            callback({'Data' : rslt, 'Error' : ''});
        })
        .catch((err) => {
            callback({'Data' : {}, 'Error' : err.message});
        });

    }
    
     

}
