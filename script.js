//<<Requires Prototype>>

// Global Vars declared here  ==========================================================
var startURL;    //URL of start.php -> used to launch user into correct page of site
//var userloginURL;    //URL of userlogin.php -> login page user sees
var loginURL;	//URL of login.php -> checks is valid user in db & ret ajax response
var dashURL;
var logoutURL;
var mlURL;
var msgURL;
var ulURL;
var compURL;
var sendURL;

var btn_login;	//various buttons
var btn_logout;
var btn_exit;
var menu_inbox;
var menu_users;
var menu_sent;
var btn_compose;

var div_login;	//divs, so can hide....or should use mult pages here? depends..
var div_user;
var div_page_content;
var div_login_status;
var div_cmdash_container;
var div_cmdash_menu;
var div_cmdash_content;
//var div_login_page;
//var div_login_box;

var tf_login_un;	// login text fields
var tf_login_pw;
//=====================================================================================

window.onload = function() {
    //Setup variables and assign functions
    startURL = "https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/start.php";
    loginURL = "https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/login.php";
    //dashURL = "https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/cmdash.php";
    logoutURL = "https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/logout.php";
    mlURL = "https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/messagelist.php";
    msgURL = "https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/message.php";
    ulURL = "https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/users.php";
    compURL = "https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/compose.php";
    sendURL = "https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/send.php";
    
    div_page_content = $$("#page_content")[0];
    
    new Ajax.Request(startURL,
    {
        onSuccess: getAURLPageContent,//setupPage,
        onFailure: ajaxFailure,
        onException: ajaxFailure
    });
    //$$("#page_content")[0].innerHTTML = "HELLO WORLD";
    //alert($$("#page_content")[0].innerHTMl);
};



// function setupPage(ajax){
//     // new Ajax.Updater('#page_content', ajax.responseText);
//     // updateControls();
//     alert(ajax.responseText);
//     new Ajax.Request(ajax.responseText,
//     {
//         onSuccess: function(ajax){
//             $$("#page_content")[0].innerHTML = ajax.responseText;
//             alert(ajax.responseText);
//             updateControls();
//             },
//         onFailure: ajaxFailure,
//         onException: ajaxFailure
//     });
// }
function getAURLPageContent(ajax){//Takes an ajax response object containing a url and inserts the ajax response of that url into div #page_content
    // new Ajax.Updater('#page_content', ajax.responseText);
    // updateControls();
    if (ajax.responseText.length==7){
        var errnum = /\d+/.exec(ajax.responseText)[0];
        switch (errnum) {
            case "11":
                // code
                div_login_status.innerHTML = "Login Failed: Incorrect Username or Password.";
                break;
            
            default:
                // code
                alert(ajax.responseText + " -- Unspecified error.");
        }
    }else{
        //alert("RETRIEVING: \n\n" + ajax.responseText);
        new Ajax.Request(ajax.responseText,
        {
            // onSuccess: function(ajax){
            //     $$("#page_content")[0].innerHTML = ajax.responseText;
            //     //alert(ajax.responseText);
            //     updateControls();
            //     },
            onSuccess: updatePageContent,
            onFailure: ajaxFailure,
            onException: ajaxFailure
        });
    }
}

function updatePageContent(ajax){//Takes ajax response object and inserts responsetext (content) int #page_content
    // new Ajax.Updater('#page_content', ajax.responseText);
    // updateControls();
    if (ajax.responseText.length==7){
        var errnum = /\d+/.exec(ajax.responseText)[0];
        switch (errnum) {
            case "21":
                // code
                //div_login_status.innerHTML = "Login Failed: Incorrect Username or Password.";
                break;
            
            default:
                // code
                alert(ajax.responseText + " -- Unspecified error.");
        }
    }else{
        //alert("INSERTING: \n\n" + ajax.responseText);
        div_page_content.innerHTML = ajax.responseText;
        updateControls();
        // new Ajax.Request(ajax.responseText,
        // {
        //     onSuccess: function(ajax){
        //         $$("#page_content")[0].innerHTML = ajax.responseText;
        //         //alert(ajax.responseText);
        //         updateControls();
        //         },
        //     onFailure: ajaxFailure,
        //     onException: ajaxFailure
        // });
    }
}

// function setupPage2(ajax){
//     $$("#page_content")[0].innerHTML = ajax.responseText;
//     alert(ajax.responseText);
//     updateControls();
// }

function updateControls(){
    if (($$("#login_page").length!==0) || ($$("#relogin_page").length!==0)){
        //alert("is a login page. setting ctrls");
        tf_login_un = $$("#tf_login_un")[0];	// login text fields
        tf_login_pw = $$("#tf_login_pw")[0];
        tf_login_pw.onkeypress = function(event){ if(event.charCode === 13){ login() } };   // Pressing enter in the password field submits login
        btn_login = $$("#btn_login")[0];
        btn_login.onclick = login;
        if($$("#relogin_page").length!==0){
            //alert("is a relogin page. setting crtls");
            btn_exit = $$("#btn_exit")[0];
            btn_exit.onclick = logout;
        }
        div_login_status = $$("#login_status")[0];
    }else if($$("#cmdash_page").length!==0){
        //alert("is dash page. setting ctrls");
        /*var div_cmdash_container = $$("#cmdash_container")[0];
        var div_cmdash_menu = $$("#cmdash_menu")[0];
        var div_cmdash_content = $$("#cmdash_contentbox")[0];*/
        btn_logout = $$("#btn_logout")[0];
        btn_logout.onclick = logout;
        menu_inbox = $$("#cmdash_inbox")[0];
        menu_inbox.onclick = function (){ retrieveMsgList(0); };
        menu_users = $$("#cmdash_users")[0];
        menu_users.onclick = retrieveUserList;
        menu_sent = $$("#cmdash_sent")[0];
        //menu_sent.onclick = ;
        btn_compose = $$("#btn_compose")[0];
        btn_compose.onclick = compose;
        //ASSIGN EVENT HANDLER TO EACH MESSAGELIST ITEM DIV HERE!!!!!
        retrieveMsgList(0);
    }else if($$("#logout_page").length!==0){
        //alert("is a logout page. setting controls");
        //do stuff here if necessary
    }else{
        //alert("no page type div found. redirecting home");
        window.location = "index.html";     //Just in case.
    }
}

function login(){
    // takes user info and logs in
    var user = tf_login_un.value;
    var pass = tf_login_pw.value;   //validate_pw(tf_login_pw.value);
    
    new Ajax.Request(loginURL,
    {
        //method: "get",
        //method: "post",
        parameters: { username: user, password: pass },
        onSuccess: getAURLPageContent,//li_check,
        onFailure: ajaxFailure,
        onException: ajaxFailure
    }
    );
    //alert("Username: "+user+", Password: "+pass);

}

function logout(){
    //new Ajax.Updater('page_content', logoutURL);
    //clearInterval(iRIntvl);
    new Ajax.Request(logoutURL,
    {
        onSuccess: updatePageContent,
        onFailure: ajaxFailure,
        onException: ajaxFailure
    });
    setTimeout(function() { window.location="index.html"; }, 5000);
}

/*function updatePage(ajax){
    //post-login changes
    alert(ajax.responseText);
}*/

// function li_check(ajax){
//     // // alert(ajax.responseText=="success");
//     // // if(ajax.responseText=="success"){
//     // //     // new Ajax.Updater('page_content', dashURL);
//     //     new Ajax.Request("https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/cmdash.php",
//     //     {
//     //         onSuccess: function(ajax){
//     //             alert(ajax.responseText);
//     //             $$("#page_content")[0].innerHTML = ajax.responseText;
//     //             updateControls();
//     //         },
//     //         onFailure: ajaxFailure,
//     //         onException: ajaxFailure
//     //     });
//     // // }else{
//     // //     div_login_status.innerHTML = ajax.responseText;
//     // // }
//     if (ajax.responseText=="https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/cmdash.php"){
//         getAURLPageContent(ajax);
//     }else{
//         div_login_status.innerHTML = ajax.responseText;
//     }
// }

function retrieveMsgList(msgoffset){
    new Ajax.Request(mlURL,
    {
        parameters: { offset: msgoffset },
        onSuccess: updateMsgList,
        onFailure: ajaxFailure,
        onException: ajaxFailure
    });
}

function updateMsgList(ajax){
    $$("#cmdash_contentbox")[0].innerHTML = ajax.responseText;
    var msgs = $$(".cmdash_listitem");
    for (var i=0; i<msgs.length; i++){
        msgs[i].onclick = retrieveMsg;
    }
    changeMenuHL(menu_inbox);
    var currOffset = parseInt($$("#msgs_offset")[0].innerHTML, 10);
    $$("#nextoffset")[0].onclick = function(){ retrieveMsgList(currOffset+10); };
    $$("#prevoffset")[0].onclick = function(){ retrieveMsgList(currOffset-10); };
}

function retrieveMsg(){
    var mid = this.id;
    new Ajax.Request(msgURL,
    {
        parameters: { msgid: mid },
        onSuccess: viewMsg,
        onFailure: ajaxFailure,
        onException: ajaxFailure,
    });
}

function viewMsg(ajax){
    $$("#cmdash_contentbox")[0].innerHTML = ajax.responseText;
    //can setup a close btn action here
}

function retrieveUserList(){
    new Ajax.Request(ulURL,
    {
        onSuccess: viewUsers,
        onFailure: ajaxFailure,
        onException: ajaxFailure
    });
}

function viewUsers(ajax){
    $$("#cmdash_contentbox")[0].innerHTML = ajax.responseText;
    changeMenuHL(menu_users);
    //stuff here? buttons?
}

function changeMenuHL(activeMenu){
    var menuitems = $$(".cmdash_menuitem");
    for (var i=0; i<menuitems.length; i++){
        menuitems[i].removeClassName("cmd_mi_active");
    }
    //menu_inbox.removeClassName("cmd_mi_active");
    activeMenu.addClassName("cmd_mi_active");
}

function register(){
    // allows admin to enter new user into db
}

function compose(){
    new Ajax.Request(compURL,
    {
        onSuccess: updatebox,
        onFailure: ajaxFailure,
        onException: ajaxFailure
    });
}

function updatebox(ajax){
    $$("#cmdash_contentbox")[0].innerHTML = ajax.responseText;
    $$("#btn_send")[0].onclick = sendMail;
    $$("#btn_cancelmsg")[0].onclick = function(){ retrieveMsgList(0); };
}

function sendMail(){
    //takes message and enters into db
    var subject = $$("#tf_subject")[0].value;
    var recip = $$("#tf_to")[0].value;
    var body = $$("#tf_body")[0].value;
    alert(subject + recip + body);
    new Ajax.Request(sendURL,
    {
        parameters: { subject: subject, recipients: recip, body: body },
        onSuccess: sent,
        onFailure: ajaxFailure,
        onException: ajaxFailure
    });
}

function sent(ajax){
    alert(ajax.responseText);
    retrieveMsgList(0);
}

/*function validate_pw(pw){
    // validate pw for login
    // regex? or do this in php..probably
    return pw;
}*/

// In case ajax request doesn't work.
function ajaxFailure(ajax, exception){
    alert("Ajax request error: \n\nServer status: " + ajax.status + " " + ajax.statusText +"\n\nServer Response: " + ajax.responseText);
    
}

/*function ???(){
}*/