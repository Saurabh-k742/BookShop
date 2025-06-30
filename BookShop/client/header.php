<!-- Header -->
    <header>
      <div class="container nav">
        <h1 class="logo">BookStore</h1>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div>
        <nav id="navbar">
          <ul>
            <li><a href="./">Home</a></li>
            <li><a href="#">Books</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            
            <!-- if session not set -> show login and signup -->
            <?php if(!isset($_SESSION['user']['username'])) { ?>
                <li><a href="?login=true" class="btn">Login</a></li>
                <li><a href="?signup=true" class="btn">SignUp</a></li>
            <?php } ?>
            
            <!-- if session set -> show logout -->
            <?php if(isset($_SESSION['user']['username'])) { ?>
                <li><a href="./server/requests.php?logout=true" class="btn">Logout</a></li>
            <?php } ?>

          </ul>
        </nav>
      </div>
    </header>