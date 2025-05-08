<div class="header" onclick="event.stopPropagation()">
    <span class="menu-icon" onclick="toggleSidebar()">&#9776;</span>
    <h3>BIKA</h3>
    <img src="bika logo.png" alt="Transport Logo" class="logo">
</div>

<div id="sidebar" class="sidebar" onclick="event.stopPropagation()">
    <span class="close-btn" onclick="hideSidebar()">&#10005;</span>
    <div class="sidebar-logo">
        <img src="bika logo.png" alt="Transport Logo">
    </div>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <div class="institution-logos">
        <div class="row">
            <div class="col">
                <img src="admin/images/ministry.png" alt="Ministry of Public Works">
                <p>Ministry of Public Works</p>
            </div>
            <div class="col">
                <img src="admin/images/roads.png" alt="National Road Transport Council">
                <p>National Road Transport Council</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="admin/images/police.png" alt="Royal Eswatini Police Service">
                <p>Royal Eswatini Police Service</p>
            </div>
            <div class="col">
                <img src="admin/images/fire.png" alt="Fire Department">
                <p>Fire Department (977)</p>
            </div>
        </div>
    </div>
</div>
<style>
    .institution-logos {
        margin-top: 20px;
        padding: 10px;
    }
    .institution-logos .row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }
    .institution-logos .col {
        text-align: center;
        flex: 1;
        margin: 0 10px;
    }
    .institution-logos img {
        max-width: 100px;
        margin-bottom: 10px;
    }
    .institution-logos p {
        font-size: 14px;
        color: #333;
    }
</style>