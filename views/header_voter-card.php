<style>
  .header {
    background-color: #004080;
    border-bottom: 2px solid #c2048a;
    position: sticky;
    top: 0;
    z-index: 100;
  }
  .header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
  }
  .logo-title-container {
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .logo img {
    width: 60px;
    height: auto;
  }
  .header-title h1, .header-title h2 {
    font-size: 1.5rem;
    color: #fff;
    margin: 0;
    line-height: 1.2;
  }
  .header-title h2 {
    font-size: 1rem;
  }
  .navbar ul {
    list-style: none;
    display: flex;
    align-items: center;
    margin: 0;
    padding: 0;
  }
  .navbar ul li {
    margin-left: 20px;
  }
  .navbar ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    padding: 5px 10px;
  }
  .navbar ul li a.active,
  .navbar ul li a:hover {
    background-color: #fff;
    color: #004080;
    border-radius: 4px;
  }
  /* Mobile Menu Toggle */
  .menu-toggle {
    display: none;
    flex-direction: column;
    cursor: pointer;
  }
  .menu-toggle .bar {
    width: 25px;
    height: 3px;
    background-color: #fff; 
    margin: 3px 0;
  }
</style>

<header class="header">
  <div class="header-container">
    <div class="logo-title-container">
      <div class="logo">
        <img src="logo.png" alt="Election Commission of India Logo">
      </div>
      <div class="header-title">
        <h1>भारत निर्वाचन आयोग</h1>
        <h2>Election Commission of India</h2>
      </div>
    </div>
    <nav class="navbar">
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../aboutus.php">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="../contactus.php">Contact</a></li>
      </ul>
    </nav>
    <div class="menu-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
  </div>
</header>