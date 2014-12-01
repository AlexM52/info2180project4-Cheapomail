//<<Requires Prototype>>

// Global Vars declared here  ==========================================================
var loginURL;	//URL of login.php -> checks is valid user in db & ret ajax response

var btn_login;	//various buttons
var btn_logout;
var btn_;

var div_login;	//divs, so can hide....or should use mult pages here? depends..
var div_user;

var tf_login_un;	// login text fields
var tf_login_pw;
//=====================================================================================

window.onload = function() {
    //Setup variables and assign functions
    loginURL = "https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/login.php";
    //loginURL = "https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/login.php?username=foo&password=bar";
    
    btn_login = $$("#btn_login")[0];
    btn_login.onclick = login;
    
    tf_login_un = $$("#tf_login_un")[0];	// login text fields
    tf_login_pw = $$("#tf_login_pw")[0];
};



function login(){
    // takes user info and logs in
    var user = tf_login_un.value;
    var pass = tf_login_pw.value;   //validate_pw(tf_login_pw.value);
    
    new Ajax.Request(loginURL,
    {
        //method: "get",
        //method: "post",
        parameters: { username: user, password: pass },
        onSuccess: updatePage,
        onFailure: ajaxFailure,
        onException: ajaxFailure
    }
    );
    //alert("Username: "+user+", Password: "+pass);

}

function updatePage(ajax){
    //post-login changes
    alert(ajax.responseText);
}

function register(){
    // allows admin to enter new user into db
}

function sendMail(){
    //takes message and enters into db
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