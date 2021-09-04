<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tutorial | MSAL.js JavaScript SPA</title>

    <!-- IE support: add promises polyfill before msal.js  -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/bluebird@3.7.2/js/browser/bluebird.min.js"></script>
    <script type="text/javascript" src="https://alcdn.msauth.net/browser/2.0.0-beta.4/js/msal-browser.js" integrity="sha384-7sxY2tN3GMVE5jXH2RL9AdbO6s46vUh9lUid4yNCHJMUzDoj+0N4ve6rLOmR88yN" crossorigin="anonymous"></script>

    <!-- adding Bootstrap 4 for UI components  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="SHORTCUT ICON" href="https://c.s-microsoft.com/favicon.ico?v2" type="image/x-icon">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="/">Microsoft identity platform</a>
      <div class="btn-group ml-auto dropleft">
          <button type="button" id="SignIn" class="btn btn-secondary" onclick="signIn()">
            Sign In
          </button>
      </div>
    </nav>
    <br>
    <h5 class="card-header text-center">JavaScript SPA calling Microsoft Graph API with MSAL.js</h5>
    <br>
    <div class="row" style="margin:auto" >
    <div id="card-div" class="col-md-3" style="display:none">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title" id="WelcomeMessage">Please sign-in to see your profile and read your mails</h5>
        <div id="profile-div"></div>
        <br>
        <br>
        <button class="btn btn-primary" id="seeProfile" onclick="seeProfile()">See Profile</button>
        <br>
        <br>
        <button class="btn btn-primary" id="readMail" onclick="readMail()">Read Mail</button>
      </div>
    </div>
    </div>
    <br>
    <br>
      <div class="col-md-4">
        <div class="list-group" id="list-tab" role="tablist">
        </div>
      </div>
      <div class="col-md-5">
        <div class="tab-content" id="nav-tabContent">
        </div>
      </div>
    </div>
    <br>
    <br>

    <!-- importing bootstrap.js and supporting js libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- importing app scripts (load order is important) -->
    <script type="text/javascript" src="./authConfig.js"></script>
    <script type="text/javascript" src="./graphConfig.js"></script>
    <script type="text/javascript" src="./ui.js"></script>

    <!-- <script type="text/javascript" src="./authRedirect.js"></script>   -->
    <!-- uncomment the above line and comment the line below if you would like to use the redirect flow -->
    <script type="text/javascript" src="./authPopup.js"></script>
    <script type="text/javascript" src="./graph.js"></script>
  </body>
</html>


<script type="text/javascript">

const msalConfig = {
  auth: {
    clientId: "56f5349c-a6cf-4342-96aa-8d1295f323c4",
    authority: "https://login.microsoftonline.com/aaea6f29-dfba-4db4-819d-4b727c7c5eac",
     client_Secret: "5eSsVc_tfy..Jnr__T7.h.ComtOdR0y-6j",
    redirectUri: "http://localhost/VIVA_VOLT_DEV/portal_volt/test",
  },
  cache: {
    cacheLocation: "sessionStorage", // This configures where your cache will be stored
    storeAuthStateInCookie: false, // Set this to "true" if you are having issues on IE11 or Edge
  }
};

// Add scopes here for ID token to be used at Microsoft identity platform endpoints.
const loginRequest = {
 scopes: ["openid", "profile", "User.Read"]
};

// Add scopes here for access token to be used at Microsoft Graph API endpoints.
const tokenRequest = {
 scopes: ["User.Read", "Mail.Read"]
};

// Create the main myMSALObj instance
// configuration parameters are located at authConfig.js
const myMSALObj = new msal.PublicClientApplication(msalConfig);

let username = "";

function loadPage() {
    /**
     * See here for more info on account retrieval:
     * https://github.com/AzureAD/microsoft-authentication-library-for-js/blob/dev/lib/msal-common/docs/Accounts.md
     */
    const currentAccounts = myMSALObj.getAllAccounts();
    if (currentAccounts === null) {
        return;
    } else if (currentAccounts.length > 1) {
        // Add choose account code here
        console.warn("Multiple accounts detected.");
    } else if (currentAccounts.length === 1) {
        username = currentAccounts[0].username;
        showWelcomeMessage(currentAccounts[0]);
    }
}

function handleResponse(resp) {
    if (resp !== null) {
        username = resp.account.username;
        showWelcomeMessage(resp.account);
    } else {
        loadPage();
    }
}

function signIn() {
    myMSALObj.loginPopup(loginRequest).then(handleResponse).catch(error => {
        console.error(error);
    });
}

function signOut() {
    const logoutRequest = {
        account: myMSALObj.getAccountByUsername(username)
    };

    myMSALObj.logout(logoutRequest);
}

function getTokenPopup(request) {
    /**
     * See here for more info on account retrieval:
     * https://github.com/AzureAD/microsoft-authentication-library-for-js/blob/dev/lib/msal-common/docs/Accounts.md
     */
    request.account = myMSALObj.getAccountByUsername(username);
    return myMSALObj.acquireTokenSilent(request).catch(error => {
        console.warn("silent token acquisition fails. acquiring token using redirect");
        if (error instanceof msal.InteractionRequiredAuthError) {
            // fallback to interaction when silent call fails
            return myMSALObj.acquireTokenPopup(request).then(tokenResponse => {
                console.log(tokenResponse);

                return tokenResponse;
            }).catch(error => {
                console.error(error);
            });
        } else {
            console.warn(error);
        }
    });
}

function seeProfile() {
    getTokenPopup(loginRequest).then(response => {
        callMSGraph(graphConfig.graphMeEndpoint, response.accessToken, updateUI);
        profileButton.classList.add('d-none');
        mailButton.classList.remove('d-none');
    }).catch(error => {
        console.error(error);
    });
}

function readMail() {
    getTokenPopup(tokenRequest).then(response => {
        callMSGraph(graphConfig.graphMailEndpoint, response.accessToken, updateUI);
    }).catch(error => {
        console.error(error);
    });
}

loadPage();
</script>