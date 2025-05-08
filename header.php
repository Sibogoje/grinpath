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
    <nav class="sidebar-nav">
        <a href="index.php" class="sidebar-link">Home</a>
        <a href="about.php" class="sidebar-link">About</a>
    </nav>
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
                <img src="admin/images/fire1.png" alt="Fire Department">
                <p>Fire Department</p>
            </div>
        </div>
    </div>
</div>

<style>
    .sidebar {
        position: fixed;
        top: 0;
        left: -300px; /* Ensure the sidebar is fully hidden */
        width: 300px;
        height: 100%;
        background: linear-gradient(135deg, #007bff, #0056b3);
        color: #fff;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        transition: left 0.3s ease; /* Smooth transition for opening/closing */
        z-index: 1000;
        display: flex;
        flex-direction: column;
        padding: 20px;
    }

    .sidebar.show {
        left: 0; /* Fully visible when toggled */
    }

    .close-btn {
        font-size: 24px;
        color: #fff;
        cursor: pointer;
        align-self: flex-end;
    }

    .sidebar-logo img {
        max-width: 100px;
        margin: 20px auto;
        display: block;
    }

    .sidebar-nav {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .sidebar-link {
        text-decoration: none;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background 0.3s ease;
    }

    .sidebar-link:hover {
        background: rgba(255, 255, 255, 0.2);
    }

    .institution-logos {
        margin-top: 30px;
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
        max-width: 60px;
        margin-bottom: 10px;
    }

    .institution-logos p {
        font-size: 12px;
        font-weight: bold;
        color: #fff;
    }
</style>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("show");
    }

    function hideSidebar() {
        const sidebar = document.getElementById("sidebar");
        sidebar.classList.remove("show");
        setTimeout(() => {
            sidebar.style.left = "-300px"; // Ensure the sidebar is fully hidden after the transition
        }, 300); // Match the transition duration
    }
</script>