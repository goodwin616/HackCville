/*isMobile*/
var isMobile;/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)?(isMobile=!0,$("html").addClass("mobile")):(isMobile=!1,$("html").addClass("no-mobile"));var mozillaTest;mozillaTest=/mozilla/.test(navigator.userAgent)?!0:!1;var safariTest;safariTest=/safari/.test(navigator.userAgent)?!0:!1,"ontouchstart"in document.documentElement||(document.documentElement.className+=" no-touch");
