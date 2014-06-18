
( function( window ) {
	
 var badges, userInfo, profiles, businessInfo, textContent, categories;


var refreshCache=false;

if (!window.localStorage.badges || refreshCache){ 
	     	console.log('badges refreshed');
	$.ajax({
          url: "getBadges.php",
          type: "GET",
          dataType: "json",
          success: function (response) {
            //console.log(response);
            window.localStorage.setItem( 'badges', JSON.stringify(response));
            badges=response;
            allLoaded();
          },
          error: function(response) {
              console.log(response);
              console.log('badges failed!');                  
          }
         
      });
}else{
 	console.log('badges cached')
    badges=JSON.parse(window.localStorage.getItem( 'badges'));
    allLoaded();
	
}

if (!window.localStorage.userInfo || refreshCache){ 
 	console.log('userinfo refreshed')
	 $.ajax({
          url: "getUserInfo.php",
          type: "GET",
          dataType: "json",
          success: function (incomingJson) {
            //console.log(incomingJson);
            window.localStorage.setItem( 'userInfo', JSON.stringify(incomingJson));
            userInfo=incomingJson;
            allLoaded();
          },
          error: function(response) {
              console.log(response);
              console.log('userInfo failed!');                  
          }
      });
}else{
 	console.log('userInfo cached');
    userInfo=JSON.parse(window.localStorage.getItem( 'userInfo'));
	allLoaded();
}


if (!window.localStorage.businessInfo || refreshCache){ 
 	console.log('businessInfo refreshed')
	 $.ajax({
          url: "getBusinessInfo.php",
          type: "GET",
          dataType: "json",
          success: function (incomingJson) {
            //console.log(incomingJson);
            window.localStorage.setItem( 'businessInfo', JSON.stringify(incomingJson));
            businessInfo=incomingJson;
            allLoaded();
          },
          error: function(response) {
              console.log(response);
              console.log('businessInfo failed!');                  
          }
      });
}else{
 	console.log('businessInfo cached');
    businessInfo=JSON.parse(window.localStorage.getItem( 'businessInfo'));
	allLoaded();
}


if (!window.localStorage.profiles || refreshCache){ 
 	console.log('profiles refreshed')
	 $.ajax({
          url: "getProfiles.php",
          type: "GET",
          dataType: "json",
          success: function (incomingJson) {
            //console.log(incomingJson);
            window.localStorage.setItem( 'profiles', JSON.stringify(incomingJson));
            profiles=incomingJson;
            allLoaded();
          },
          error: function(response) {
              console.log(response);
              console.log('profiles failed!');                  
          }
      });
}else{
 	console.log('profiles cached');
    profiles=JSON.parse(window.localStorage.getItem( 'profiles'));
	allLoaded();
}


if (!window.localStorage.textContent || refreshCache){ 
 	console.log('textContent refreshed')
	 $.ajax({
          url: "getTextContent.php",
          type: "GET",
          dataType: "json",
          success: function (incomingJson) {
            //console.log(incomingJson);
            window.localStorage.setItem( 'textContent', JSON.stringify(incomingJson));
            textContent=incomingJson;
            allLoaded();
          },
          error: function(response) {
              console.log(response);
              console.log('textContent failed!');                  
          }
      });
}else{
 	console.log('textContent cached');
    textContent=JSON.parse(window.localStorage.getItem( 'textContent'));
	allLoaded();
}



if (!window.localStorage.categories || refreshCache){ 
 	console.log('categories refreshed')
	 $.ajax({
          url: "getCategories.php",
          type: "GET",
          dataType: "json",
          success: function (incomingJson) {
            //console.log(incomingJson);
            window.localStorage.setItem( 'categories', JSON.stringify(incomingJson));
            categories=incomingJson;
            allLoaded();
          },
          error: function(response) {
              console.log(response);
              console.log('categories failed!');                  
          }
      });
}else{
 	console.log('categories cached');
    categories=JSON.parse(window.localStorage.getItem( 'categories'));
	allLoaded();
}

function allLoaded(){
	if (badges && userInfo && profiles && businessInfo && categories && textContent){
		dataReady();
	}else{
		console.log('wait');

	}
}


})( window );