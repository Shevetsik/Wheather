<style>
.logo-img {
  transition: transform 0.3s ease-in-out;
  margin-right: auto;
}

.mynav-link {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.mynav-link:hover {
  transform: scale(1.05);
}

.logo-img:hover {
  transform: scale(1.2);
}

.my-navbar {
  background-color: #f8f9fa;
  color: #343a40;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Добавленная тень под навигационной панелью */
}

.my-navbar.nav-link {
  color: #007bff;
}

.my-navbar.nav-link:hover {
  color: #0056b3;
}
</style>

<nav class="navbar navbar-expand-lg my-navbar">
<a class="navbar-brand ml-auto" href="http://mysite.local/Pogoda/Test.php">
    <img class="logo-img" src="/Pogoda/images/logo.png" alt="Логотип сайта" width="70%" height="auto" style="max-width: 100%;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active" aria-current="page"> <!-- Добавлен атрибут aria-current="page" -->
        <a class="nav-link mynav-link" href="http://mysite.local/Pogoda/about.php">О нас</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mynav-link" href="http://mysite.local/Pogoda/Contacts.php">Контакты</a>
      </li>
    </ul>
  </div>
</nav>
