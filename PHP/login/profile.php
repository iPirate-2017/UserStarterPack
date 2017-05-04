<?php
  require('utils/request.php');
  session_start();

  if(!userLogged()) {
    header('Location:index.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.1.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://dansup.github.io/bulma-templates/css/profile.css">
  </head>
  <body>
    <nav class="nav has-shadow" id="top">
        <div class="container">
          <div class="nav-left">
            <a class="nav-item" href="../index.html">
              <img src="../images/bulma.png" alt="Description">
            </a>
          </div>
          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <div class="nav-right nav-menu">
            <a class="nav-item is-tab is-active">
              Home
            </a>
            <a class="nav-item is-tab">
              Features
            </a>
            <a class="nav-item is-tab">
              Team
            </a>
            <a class="nav-item is-tab">
              Help
            </a>
            <span class="nav-item">
              <a href="logout.php"class="button is-info">
                Déconnexion
              </a>
            </span>
          </div>
        </div>
      </nav>
      <div class="container profile">

        <div class="section profile-heading">
          <div class="columns">
            <div class="column is-2">
              <div class="image is-128x128 avatar">
                <img src="https://placehold.it/256x256">
              </div>
            </div>
            <div class="column is-4 name">
              <p>
                <span class="title is-bold"><?= $_SESSION['user']['email'] ?></span>
                <span class="button is-primary is-outlined follow">Follow</span>
              </p>
              <p class="tagline">
                <p><?= $_SESSION['user']['nom']." ".$_SESSION['user']['prenom'] ?></p>
                <p><?= $_SESSION['user']['tel'] ?></p>
                <p><?= $_SESSION['user']['date_naissance'] ?></p>
              </p>
            </div>
            <div class="column is-2 followers has-text-centered">
              <p class="stat-val">129k</p>
              <p class="stat-key">followers</p>
            </div>
            <div class="column is-2 following has-text-centered">
              <p class="stat-val">2k</p>
              <p class="stat-key">following</p>
            </div>
            <div class="column is-2 likes has-text-centered">
              <p class="stat-val">29</p>
              <p class="stat-key">likes</p>
            </div>
          </div>
        </div>
        <div class="profile-options">
          <div class="tabs is-fullwidth">
            <ul>
              <li class="link is-active"><a><span class="icon"><i class="fa fa-list"></i></span> <span>My Lists</span></a></li>
              <li class="link"><a><span class="icon"><i class="fa fa-heart"></i></span> <span>My Likes</span></a></li>
              <li class="link"><a><span class="icon"><i class="fa fa-th"></i></span> <span>My Posts</span></a></li>
              <li class="link"><a><span class="icon"><i class="fa fa-bookmark"></i></span> <span>My Bookmarks</span></a></li>
            </ul>
          </div>
        </div>

        <div class="box">
          <!-- Main container -->
          <nav class="level">
            <!-- Left side -->
            <div class="level-left">
              <div class="level-item">
                <p class="subtitle is-5">
                  <strong>123</strong> posts
                </p>
              </div>
              <div class="level-item">
                <p class="control has-addons">
                  <input class="input" type="text" placeholder="Find a post">
                  <button class="button">
                    Search
                  </button>
                </p>
              </div>
            </div>

            <!-- Right side -->
            <div class="level-right">
              <p class="level-item"><strong>All</strong></p>
              <p class="level-item"><a>Published</a></p>
              <p class="level-item"><a>Drafts</a></p>
              <p class="level-item"><a>Deleted</a></p>
              <p class="level-item"><a class="button is-success">New</a></p>
            </div>
          </nav>
        </div>

        <div class="spacer"></div>

      </div>
  </body>
</html>
