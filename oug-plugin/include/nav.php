  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    #nav {
      margin-left: 160px;
    }
  </style>
  <div id="nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">İlk Eklentim</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <?php
              if ($_GET['page'] == "my_first_plugin") {
              ?>
                <a class="nav-link active" aria-current="page" href="admin.php?page=my_first_plugin">Anasayfa</a>
              <?php
              }else{?>
              <a class="nav-link" aria-current="page" href="admin.php?page=my_first_plugin">Anasayfa</a>
              <?php
              }
              ?>
            </li>
            <li class="nav-item">
            <?php
              if ($_GET['page'] == "my_first_sub_menu") {
              ?>
                <a class="nav-link active" aria-current="admin.php?page=my_first_sub_menu" href="#">Detay</a>
              <?php
              }else{?>
              <a class="nav-link" aria-current="page" href="admin.php?page=my_first_sub_menu">Detay</a>
              <?php
              }
              ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>