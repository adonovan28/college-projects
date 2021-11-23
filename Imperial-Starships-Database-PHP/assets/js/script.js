var currentIndex = 0;

function openPage(url) {
  if (url.indexOf("?") == -1) {
    url = url + "?";
  }

  var encodedUrl = encodeURI(url);
  $("#mainContent").load(encodedUrl);
  $("body").scrollTop(0);
  history.pushState(null, null, url);
  setInterval(() => {
    location.reload(true);
  }, 500);
}
