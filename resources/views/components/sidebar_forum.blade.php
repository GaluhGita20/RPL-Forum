<!-- NAVIGATION WIDGET -->
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- USER AVATAR -->
  <a href="#">
    <div class="user-avatar small no-outline" style="background-image:url('../asset/user/avatar-lg.png'); background-size:cover;"></div>
  </a>
  <!-- /USER AVATAR -->

  <!-- MENU -->
  <ul class="menu small">
    <!-- DASHBOARD-->
    <li class="menu-item {{ (request()->is('/mainForum')) ? 'active' : '' }}">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="#" data-title="Dashboard">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-newsfeed">
          <use xlink:href="#svg-newsfeed"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>

    <!-- FORUM -->
    <li class="menu-item {{ (request()->segment(1)=='forum') ? 'active' : '' }}">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="{{Route('mainForum')}}" data-title="Forums">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-forums">
          <use xlink:href="#svg-forums"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- TOP TOPICS -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="#" data-title="Top Topics">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-group">
          <use xlink:href="#svg-quests"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="quests.html" data-title="Quests">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-quests">
          <use xlink:href="#svg-quests"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="streams.html" data-title="Streams">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-streams">
          <use xlink:href="#svg-streams"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="events.html" data-title="Events">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-events">
          <use xlink:href="#svg-events"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- HISTORY -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="#" data-title="History">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-overview">
          <use xlink:href="#svg-overview"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
  </ul>
  <!-- /MENU -->
</nav>
<!-- /NAVIGATION WIDGET -->

<!-- NAVIGATION WIDGET -->
<nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar>
  <!-- NAVIGATION WIDGET COVER -->
  <figure class="navigation-widget-cover liquid">
    <img src="img/cover/01.jpg" alt="cover-01">
  </figure>
  <!-- /NAVIGATION WIDGET COVER -->

  <!-- USER SHORT DESCRIPTION -->
  <div class="user-short-description">
    <!-- USER SHORT DESCRIPTION AVATAR -->
    <a class="user-short-description-avatar user-avatar medium" href="profile-timeline.html">
  
      <!-- USER AVATAR CONTENT -->
      <div class="user-avatar-content" style="background-image: url(/asset/user/avatar-lg.png); background-size:cover; width:100%; height:100%;">
        <!-- HEXAGON -->
        <!-- <div class="hexagon-image-82-90" data-src="img/avatar/01.jpg"></div> -->
        <!-- /HEXAGON -->
      </div>
      <!-- /USER AVATAR CONTENT -->
    </a>
    <!-- /USER SHORT DESCRIPTION AVATAR -->

    <!-- USER SHORT DESCRIPTION TITLE -->
    <p class="user-short-description-title" style="margin-top:10px;"><a href="profile-timeline.html">Gita</a></p>
    <!-- /USER SHORT DESCRIPTION TITLE -->

    <!-- USER SHORT DESCRIPTION TEXT -->
    <p class="user-short-description-text"><a href="#">@galuhgita</a></p>
    <!-- /USER SHORT DESCRIPTION TEXT -->
  </div>
  <!-- /USER SHORT DESCRIPTION -->

  <!-- MENU -->
  <ul class="menu">
    <!-- DASHBOARD-->
    <li class="menu-item {{ (request()->is('/mainForum')) ? 'active' : '' }}">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="#">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-newsfeed">
          <use xlink:href="#svg-newsfeed"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        Dashboard
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- FORUMS -->
    <li class="menu-item {{ (request()->segment(1)=='forum') ? 'active' : '' }}">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="{{Route('mainForum')}}">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-forums">
          <use xlink:href="#svg-forums"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        Forums
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- TOP TOPICS -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="#">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-group">
          <use xlink:href="#svg-quests"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        Top Topics
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="#">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-quests">
          <use xlink:href="#svg-quests"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        Quests
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="#">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-streams">
          <use xlink:href="#svg-streams"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        Streams
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="#">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-events">
          <use xlink:href="#svg-events"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        Events
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- History-->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="#">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-overview">
          <use xlink:href="#svg-overview"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        History
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
  </ul>
  <!-- /MENU -->
</nav>
<!-- /NAVIGATION WIDGET -->

<!-- NAVIGATION WIDGET -->
<nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left hidden" data-simplebar>
  <!-- NAVIGATION WIDGET CLOSE BUTTON -->
  <div class="navigation-widget-close-button">
    <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
    <svg class="navigation-widget-close-button-icon icon-back-arrow">
      <use xlink:href="#svg-back-arrow"></use>
    </svg>
    <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
  </div>
  <!-- /NAVIGATION WIDGET CLOSE BUTTON -->

  <!-- NAVIGATION WIDGET INFO WRAP -->
  <div class="navigation-widget-info-wrap">
    <!-- NAVIGATION WIDGET INFO -->
    <div class="navigation-widget-info">
      <!-- USER AVATAR -->
      <a class="user-avatar small no-outline" href="#">
        <!-- USER AVATAR CONTENT -->
        <div class="user-avatar-content" style="background-image:url(asset/user/avatar-lg.png); background-size:cover;width:100%; height:100%">
          <!-- HEXAGON -->
          <!-- <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg"></div> -->
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR BADGE -->
      </a>
      <!-- /USER AVATAR -->

      <!-- NAVIGATION WIDGET INFO TITLE -->
      <p class="navigation-widget-info-title"><a href="#">Galuh Gita</a></p>
      <!-- /NAVIGATION WIDGET INFO TITLE -->

      <!-- NAVIGATION WIDGET INFO TEXT -->
      <p class="navigation-widget-info-text">Welcome Back!</p>
      <!-- /NAVIGATION WIDGET INFO TEXT -->
    </div>
    <!-- /NAVIGATION WIDGET INFO -->

    <!-- NAVIGATION WIDGET BUTTON -->
    <p class="navigation-widget-info-button button small secondary">Logout</p>
    <!-- /NAVIGATION WIDGET BUTTON -->
  </div>
  <!-- /NAVIGATION WIDGET INFO WRAP -->

  <!-- NAVIGATION WIDGET SECTION TITLE -->
  <p class="navigation-widget-section-title">Sections</p>
  <!-- /NAVIGATION WIDGET SECTION TITLE -->

  <!-- MENU -->
  <ul class="menu">
    <!-- MENU ITEM -->
    <li class="menu-item {{ (request()->is('/mainForum')) ? 'active' : '' }}">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="#">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-newsfeed">
          <use xlink:href="#svg-newsfeed"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        Dashboard
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item {{ (request()->segment(1)=='forum') ? 'active' : '' }}">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="{{Route('mainForum')}}">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-forums">
          <use xlink:href="#svg-forums"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        Forums
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="#">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-group">
          <use xlink:href="#svg-group"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        Groups
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="#">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-quests">
          <use xlink:href="#svg-quests"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        Quests
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="#">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-streams">
          <use xlink:href="#svg-streams"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        Streams
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="#">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-events">
          <use xlink:href="#svg-events"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        Events
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="#">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-overview">
          <use xlink:href="#svg-overview"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
        History
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
  </ul>
  <!-- /MENU -->

  <!-- NAVIGATION WIDGET SECTION TITLE -->
  <p class="navigation-widget-section-title">My Profile</p>
  <!-- /NAVIGATION WIDGET SECTION TITLE -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <a class="navigation-widget-section-link" href="#">Profile Info</a>
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <a class="navigation-widget-section-link" href="#">Social &amp; Stream</a>
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <a class="navigation-widget-section-link" href="#">Notifications</a>
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <a class="navigation-widget-section-link" href="#">Messages</a>
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <a class="navigation-widget-section-link" href="#">Friend Requests</a>
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION TITLE -->
  <p class="navigation-widget-section-title">Account</p>
  <!-- /NAVIGATION WIDGET SECTION TITLE -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <a class="navigation-widget-section-link" href="#">Account Info</a>
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <a class="navigation-widget-section-link" href="#">Change Password</a>
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <a class="navigation-widget-section-link" href="#">General Settings</a>
  <!-- /NAVIGATION WIDGET SECTION LINK -->
</nav>
<!-- /NAVIGATION WIDGET -->
