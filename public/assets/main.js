//var detect = require('detect');
var ua = detect.parse(navigator.userAgent);

if (ua.device !== 'null') {

if (ua.device.family === 'iPhone') {
    window.location.replace("https://apps.apple.com/ng/app/gaozim-send-receive-parcel/id6449133794");
}else{
    window.location.replace("https://play.google.com/store/apps/details?id=com.gaozim.gaozim");
}
}

   //  window.location.replace("https://play.google.com/store/apps/details?id=com.gaozim.gaozim");
///window.location.replace("https://play.google.com/store/apps/details?id=com.gaozim.gaozim");