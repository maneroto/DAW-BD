var tag = document.createElement('script');
tag.id = 'iframe-demo';
tag.src = 'https://www.youtube.com/iframe_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var PROPERTIES = ['yaw', 'pitch', 'roll', 'fov'];
var updateButton = document.getElementById('spherical-properties-button');

// Create the YouTube Player.
var ytplayer;
function onYouTubeIframeAPIReady() {
ytplayer = new YT.Player('spherical-video-player', {
    height: '360',
    width: '640',
    videoId: 'FAtdv94yzp4',
});
}

// Don't display current spherical settings because there aren't any.
function hideCurrentSettings() {
for (var p = 0; p < PROPERTIES.length; p++) {
  document.getElementById(PROPERTIES[p] + '-current-value').innerHTML = '';
}
}

// Retrieve current spherical property values from the API and display them.
function updateSetting() {
if (!ytplayer || !ytplayer.getSphericalProperties) {
  hideCurrentSettings();
} else {
  let newSettings = ytplayer.getSphericalProperties();
  if (Object.keys(newSettings).length === 0) {
    hideCurrentSettings();
  } else {
    for (var p = 0; p < PROPERTIES.length; p++) {
      if (newSettings.hasOwnProperty(PROPERTIES[p])) {
        currentValueNode = document.getElementById(PROPERTIES[p] +
                                                   '-current-value');
        currentValueNode.innerHTML = ('current: ' +
            newSettings[PROPERTIES[p]].toFixed(4));
      }
    }
  }
}
requestAnimationFrame(updateSetting);
}
updateSetting();

// Call the API to update spherical property values.
updateButton.onclick = function() {
var sphericalProperties = {};
for (var p = 0; p < PROPERTIES.length; p++) {
  var propertyInput = document.getElementById(PROPERTIES[p] + '-property');
  sphericalProperties[PROPERTIES[p]] = parseFloat(propertyInput.value);
}
ytplayer.setSphericalProperties(sphericalProperties);
}