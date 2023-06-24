<div class="sidebar" id="navbar">

    <!--profile image & text-->
    <div class="profile">
        <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg"
                    alt="profile_picture">
        <h3><?= $user['first_name'] ?></h3>
    </div>

    <!--menu item-->
    <ul>
        <!-- <li>
            <a href="#" class="btn active" >
                <span class="icon"><i class="fas fa-home"></i></span>
                <span class="item">Home</span>
            </a>
        </li> -->
        <li>
            <a href="dashboard.php" class="btn">
                <span class="icon"><i class="fas fa-desktop"></i></span>
                <span class="item">My Dashboard</span>
            </a>
        </li>
        <li>
            <a href="user_add.php" class="btn">
                <span class="icon"><i class="fas fa-user-friends"></i></span>
                <span class="item">Product Management</span>
            </a>
        </li>
        <li>
            <a href="user_add.php" class="btn">
                <span class="icon"><i class="fas fa-user-friends"></i></span>
                <span class="item">Supplier Management</span>
            </a>
        </li>
        <li class="liMainMenu">
            <a href="user_add.php" class="btn">
                <span class="icon"><i class="fas fa-user-friends"></i></span>
                <span class="item">User Management</span>
                <i class="fa fa-angle-down mainMenuIconArrow"></i>
            </a>

            <!-- subMenus css is written in user_add2.css -->
            <ul class="subMenus">
                <li><a href="#"><i class="fa fa-circle"></i> View Users</a></li>
                <li><a href="#"><i class="fa fa-circle"></i> View Users</a></li>
            </ul>
        </li>
        
    </ul>
</div>

<script>
    var btnContainer = document.getElementById("navbar");
    var btns = btnContainer.getElementByClassName("btn");

    for(var i = 0; i < btns.length; i++){
        btns[i].addEventlistener('click', function(){
            var current = document.getElementByClassName("active");
            current[0].className = current[0].className.replace("active");
            this.className += "active";
        });
    }
</script>