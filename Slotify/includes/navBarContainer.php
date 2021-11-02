<div id="navBarContainer">
  <nav class="navBar">
    <span role="link" tableindex="0" onclick="openPage('index.php')" class="logo">
      <img src="assets/images/icons/logo.png">
    </span>
  </nav>

  <div class="group">

  <div class="navItem">
    <span role='link' tableindex='0' onclick='openPage("search.php")' class="navLinkItem">Search
      <img src="assets/images/icons/search.png" class="icon" alt="Search">
    </span>
  </div>

  </div>

  <div class="group">

    <div class="navItem">
      <span role="link" tableindex="0" onclick="openPage('browse.php')" class="navItemLink">Browse</span>
    </div>

    <div class="navItem">
      <span role="link" tableindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">Your Music</span>
    </div>

    <div class="navItem">
      <span role="link" tableindex="0" onclick="openPage('settings.php')" class="navItemLink"><?= $userLoggedIn->getFirstAndLastName(); ?></span>
    </div>
        
  </div>
        
</div>